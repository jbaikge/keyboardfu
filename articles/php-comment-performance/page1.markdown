# Documentation is Making Your Site Explode

Seems a pretty bold claim that something which is designed to hide code is actually causing a performance hit. Since the introduction of PHP's [Reflection](http://php.net/manual/en/book.reflection.php) library, JavaDoc comments have started adding to memory usage.

## Why is There Java in My PHP?

In case you haven't been formally introduced, JavaDoc comments are a style of multi-line comments [introduced by Java](http://www.oracle.com/technetwork/java/javase/documentation/index-137868.html). Comment blocks start with `/**` instead of `/*` and generally appear above function, class, or method definitions as documentation.

These comments can generate portable documentation when parsed by tools like [Doxygen](http://www.stack.nl/~dimitri/doxygen/index.html). Within these comment blocks, special attributes are available to document the adjacent code:

* `@param` will explain the first function parameter
* `@return` will describe what is returned by the function
* `@see` will link to another class, function, or method

## Just the Class, Ma'am

Under normal circumstances, loading a documented class in any language should ignore commented lines and utilize enough memory to operate the class. However, in PHP 5, there is a funky library that will reflect classes to gain information about their internals. Part of this reflection data includes the class, method, or function documentation. Now that this information is retrievable, it must also load into memory.

The ability to reflect documentation is not a mistake or pitfall. As an example, you can include meta information regarding a method or class, which is useful for establishing routing information:

	class Zoo {
		/**
		 * @route /zoo/flamingos
		 */
		public function getFlamingos() {
			return array('1 Flamingo', '2 Flamingo', '3 Flamingo', 'More');
		}
	}

## Regaining a Sleek Profile

Everything seems pretty dark and stormy at this point: Documenting PHP suddenly has negative consequences. Now we need to find a way to solve a few problems:

1. Maintain documentation within the code
2. Continue to use Doxygen to compile docs
3. Easily retrofit the solution on all existing documented code
4. Distribute the new way of documenting to other team members and make sure they continue to document their code

If you're maintaining many large codebases, these considerations carry their own consequences. These are the three potential solutions I came up with when presented with this problem:

### Leave it Alone

_If it ain't broke, don't fix it._ What's the fun in that? 

### Strip Comments Out in a Post-Commit Hook

At work, I use subversion to handle our code. We have a bunch of pre- and post-commit hooks to take care of lint checking and notifying developers of commits, why not add one to run `php -w` on each PHP file and store it in a different area of the repository?

That's great and all, until something goes awry and someone needs to hotfix code with no whitespace.

### _BANG!_ - Surprise it

Sneak up on the code and scare it to death. It'll freak the interpreter out so much that we can regain memory.

After pouring through the Doxygen docs for a few days, I stumbled upon [this gem](http://www.stack.nl/~dimitri/doxygen/docblocks.html). Qt style comments. Turns out, if you convert the typical hack splat splat (`/**`) to hack splat bang (`/*!`), PHP thinks it's a normal C block comment, and Doxygen still thinks it's a documentation block.

## How Much of a Difference Can a Single Character Make?

The numbers don't lie. I took some classes with existing documentation and loaded them into a script, calling [memory\_get\_usage()](http://php.net/manual/en/function.memory-get-usage.php) before and after the load to gain the memory delta from loading the class.

<table>
	<caption>Comparison of different modifications to documented PHP classes - /** ... */ Normal JavaDoc Style; /*! ... */ Qt Style; <code>php -w</code> PHP's native whitespace and comment stripping command.</caption>
	<thead>
		<tr>
			<th>Class</th>
			<th>/** ... */</th>
			<th>/*! ... */</th>
			<th><code>php -w</code></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Memory Reduction</th>
			<th>0.000%</th>
			<th>7.572%</th>
			<th>7.599%</th>
		</tr>
	</tfoot>
	<tbody>
		<tr><th>FDataModel</th><td>101096</td><td>94968</td><td>94968</td></tr>
		<tr><th>FDataModelField</th><td>67288</td><td>61976</td><td>61928</td></tr>
		<tr><th>FDataModelTable</th><td>98560</td><td>94240</td><td>94192</td></tr>
		<tr><th>FDB</th><td>99152</td><td>92504</td><td>92472</td></tr>
		<tr><th>FFormFactory</th><td>12112</td><td>11408</td><td>11440</td></tr>
		<tr><th>FFormUtils</th><td>16344</td><td>15352</td><td>15328</td></tr>
		<tr><th>FField</th><td>30464</td><td>27200</td><td>27200</td></tr>
		<tr><th>FTemplate</th><td>41216</td><td>37120</td><td>37128</td></tr>
		<tr><th>FTemplateRenderFilter</th><td>5880</td><td>3960</td><td>3952</td></tr>
		<tr><th>FTemplateUtils</th><td>43968</td><td>36792</td><td>36784</td></tr>
		<tr><th>FFileSystem</th><td>11808</td><td>10920</td><td>10904</td></tr>
		<tr><th>FString</th><td>41000</td><td>38840</td><td>38840</td></tr>
		<tr><th>FStringCycle</th><td>13056</td><td>11848</td><td>11848</td></tr>
		<tr><th>FDOMDocument</th><td>17872</td><td>16832</td><td>16808</td></tr>
		<tr><th>FDOMNode</th><td>25344</td><td>23864</td><td>23864</td></tr>
	</tbody>
</table>

The above classes are used in a homebrew framework and the above table is a decent representation of how much memory is typically used on a dynamic website. 7.5% doesn't sound like very much for a single page, but once a site becomes popular, that extra freed memory could equate to thousands of extra hits per second without a hardware upgrade.