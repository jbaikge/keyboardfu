# Documentation is Making Your Site Explode

Seems a pretty bold claim that something which is designed to hide code is actually causing a performance hit. Since the introduction of PHP's [Reflection](http://php.net/reflection) library, Javadoc comments have started adding to memory usage.

## Why is There Java in My PHP?

In case you haven't been formally introduced, Javadoc comments are a style of multi-line comments introduced by Java, where instead of starting with just a `/*`, `/**` is used instead. These comment blocks generally appear above function, class, or method definitions as documentation.

These comments can generate portable documentation when parsed by tools like [Doxygen](http://doxygen.org). Within these comment blocks, special attributes are available to document the adjacent code: `@param` will explain the first function parameter, `@return` will describe what is returned by the function, and so on.

## Just the Class, Ma'am

Under normal circumstances, loading a documented class in any language should ignore commented lines and utilize enough memory to operate the class. However, in PHP, there is a funky library that will reflect classes to gain information about their internals. Part of this reflection data includes the class or function documentation. Now that this information is retrievable, it must also load into memory.

The ability to reflect documentation is not a mistake. As an example, you can include meta information regarding a method or class, which is useful for establishing routing information:

<pre>
<?php
class Zoo {
	/**
	 * @route /zoo/flamingos
	 */
	public function getFlamingos() {
		return array('1 Flamingo', '2 Flamingo', '3 Flamingo', 'More');
	}
}
?>
</pre>

## How Bad Could it Be?

The numbers don't lie. I took some classes with existing documentation and loaded them into a script, calling [get\_memory\_usage()](http://php.net/functions.get_memory_usage.php) before and after the load to gain the memory delta from loading the class.

<table>
	<caption>Comparison of different modifications to documented PHP classes - /** ... */ Normal Javadoc Style; /*! ... */ Ruby Style; <code>php -w</code> PHP's native whitespace and comment stripping command.</caption>
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
			<th>Overall Performance</th>
			<th>0.00%</th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td>FCalendarDay</td>
			<td>52200</td>
			<td>50616</td>
			<td>50616</td>
		</tr>
		<tr>
			<td>FDataModel</td>
			<td>101096</td>
			<td>94968</td>
			<td>94968</td>
		</tr>
		<tr>
			<td>FDataModelField</td>
			<td>67288</td>
			<td>61976</td>
			<td>61928</td>
		</tr>
		<tr>
			<td>FDataModelTable</td>
			<td>98560</td>
			<td>94240</td>
			<td>94192</td>
		</tr>
		<tr>
			<td>FDB</td>
			<td>99152</td>
			<td>92504</td>
			<td>92472</td>
		</tr>
		<tr>
			<td>FMySQLStructureSync</td>
			<td>29736</td>
			<td>29496</td>
			<td>29496</td>
		</tr>
		<tr>
			<td>FFormFactory</td>
			<td>12112</td>
			<td>11408</td>
			<td>11440</td>
		</tr>
		<tr>
			<td>FFormUtils</td>
			<td>16344</td>
			<td>15352</td>
			<td>15328</td>
		</tr>
		<tr>
			<td>FField</td>
			<td>30464</td>
			<td>27200</td>
			<td>27200</td>
		</tr>
		<tr>
			<td>FModelManager</td>
			<td>17032</td>
			<td>14136</td>
			<td>14136</td>
		</tr>
		<tr>
			<td>FObject</td>
			<td>132736</td>
			<td>129912</td>
			<td>129952</td>
		</tr>
		<tr>
			<td>FTemplate</td>
			<td>41216</td>
			<td>37120</td>
			<td>37128</td>
		</tr>
		<tr>
			<td>FTemplateRenderFilter</td>
			<td>5880</td>
			<td>3960</td>
			<td>3952</td>
		</tr>
		<tr>
			<td>FTemplateUtils</td>
			<td>43968</td>
			<td>36792</td>
			<td>36784</td>
		</tr>
		<tr>
			<td>FFileSystem</td>
			<td>11808</td>
			<td>10920</td>
			<td>10904</td>
		</tr>
		<tr>
			<td>FString</td>
			<td>41000</td>
			<td>38840</td>
			<td>38840</td>
		</tr>
		<tr>
			<td>FStringCycle</td>
			<td>13056</td>
			<td>11848</td>
			<td>11848</td>
		</tr>
		<tr>
			<td>FDOMDocument</td>
			<td>17872</td>
			<td>16832</td>
			<td>16808</td>
		</tr>
		<tr>
			<td>FDOMNode</td>
			<td>25344</td>
			<td>23864</td>
			<td>23864</td>
		</tr>
	</tbody>
</table>

## Don't Ditch Your Docs








## Documentation. The final frontier.

You're a considerate PHP developer and commenting your code is your way of providing help to the poor chap who comes behind you. While you're being considerate to your team or the rest of the world, are you actually causing more problems than not?

### Forget What You Thought You Knew

Most of us who include inline documentation for our classes and methods use a Javadoc style multi-line comment above the code of interest. As an example:

<pre>
</pre>

This is great for many reasons:

+ Standard commenting procedure you probably learned in school
+ Useful @-directives to denote authors, dates, parameters, etc.
+ Support from tools like DOxygen which will extract the documentation and make it pretty

Prior to the [SPL](http://php.net/spl) libraries coming into existance, this was actually a perfectly fine way to document code. However, things have changed. And not for the better.
