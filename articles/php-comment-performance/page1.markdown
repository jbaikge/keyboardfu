# Documentation is Making Your Site Explode

Seems a pretty bold claim that something which is designed to hide code is actually causing a performance hit. Since the introduction of PHP's [Reflection](http://php.net/manual/en/book.reflection.php) library, JavaDoc comments have started adding to memory usage.

## Why is There Java in My PHP?

In case you haven't been formally introduced, JavaDoc comments are a style of multi-line comments [introduced by Java](http://www.oracle.com/technetwork/java/javase/documentation/index-137868.html). Comment blocks start with `/**` instead of `/*` and generally appear above function, class, or method definitions as documentation.

These comments can generate portable documentation when parsed by tools like [Doxygen](http://www.stack.nl/~dimitri/doxygen/index.html). Within these comment blocks, special attributes are available to document the adjacent code:

* `@param` will explain the first function parameter
* `@return` will describe what is returned by the function
* `@see` will link to another class, function, or method

## Just the Class, Ma'am

Under normal circumstances, loading a documented class in any language should ignore commented lines and utilize enough memory to operate the class. However, in PHP, there is a funky library that will reflect classes to gain information about their internals. Part of this reflection data includes the class or function documentation. Now that this information is retrievable, it must also load into memory.

The ability to reflect documentation is not a mistake. As an example, you can include meta information regarding a method or class, which is useful for establishing routing information:

	class Zoo {
		/**
		 * @route /zoo/flamingos
		 */
		public function getFlamingos() {
			return array('1 Flamingo', '2 Flamingo', '3 Flamingo', 'More');
		}
	}

## How Bad Could it Be?

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

## Don't Ditch Your Docs








## Documentation. The final frontier.

You're a considerate PHP developer and commenting your code is your way of providing help to the poor chap who comes behind you. While you're being considerate to your team or the rest of the world, are you actually causing more problems than not?

### Forget What You Thought You Knew

Most of us who include inline documentation for our classes and methods use a JavaDoc style multi-line comment above the code of interest. As an example:

<pre>
</pre>

This is great for many reasons:

+ Standard commenting procedure you probably learned in school
+ Useful @-directives to denote authors, dates, parameters, etc.
+ Support from tools like DOxygen which will extract the documentation and make it pretty

Prior to the [SPL](http://php.net/spl) libraries coming into existance, this was actually a perfectly fine way to document code. However, things have changed. And not for the better.
