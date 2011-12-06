# Documentation is Making Your Site Explode

Seems a pretty bold claim that something which is designed to hide code is actually causing a performance hit. Since the introduction of PHP's [Reflection](http://php.net/reflection) library, Javadoc comments have started adding to memory usage.

## Why is There Java in My PHP?

In case you haven't been formally introduced, Javadoc comments are a style of multi-line comments introduced by Java, where instead of starting with just a `/*`, `/**` is used instead. These comment blocks generally appear above function, class, or method definitions as documentation.

These comments can generate portable documentation when parsed by tools like [Doxygen](http://doxygen.org). Within these comment blocks, special attributes are available to document the adjacent code: `@param` will explain the first function parameter, `@return` will describe what is returned by the function, and so on.

## Just the Class, Ma'am

Under normal circumstances, loading a documented class in any language should ignore commented lines and utilize enough memory to operate the class. However, in PHP, there is a funky library that will reflect classes to gain information about their internals. Part of this reflection data includes the class or function documentation. Now that this information is retrievable, it must also load into memory.

The ability to reflect documentation is not a mistake. As an example, you can include meta information regarding a method or class, which is useful for establishing routing information:

<pre><code>
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
</code></pre>

## How Bad Could it Be?

The numbers don't lie. I took some classes with existing documentation and loaded them into a script, calling [get\_memory\_usage()](http://php.net/functions.get_memory_usage.php) before and after the load to gain the memory delta from loading the class.

<table>
	<caption>Comparison of different modifications to documented PHP classes - /** ... */ Normal Javadoc Style; /*! ... */ Ruby Style; <code>php -w</code> PHP's native whitespace and comment stripping command.</caption>
	<thead>
		<tr>
			<th>Class</th>
			<th>/** ... */</th>
			<th>/*! ... */</th>
			<th>php -w</th>
		<tr>
	</thead>
	<tfoot>
		<tr>
			<td>Performance</td>
			<td>0%</td>
			<td>50%</td>
			<td>20%</td>
		</tr>
	</tfoot>
	<tbody>
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
