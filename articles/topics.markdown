# The Art of Bash

Go over why it is better to write a script to do your work for you

Practice makes you faster

Examples:
List of PDFs need to go into a page of content, titles can be extracted from the filenames
	for P in *.pdf; do
		echo '<a href="'$P'" target="_blank">'$(echo $P | sed -e 's/_/ /g' -e 's/.pdf$//')'</a>';
	done

Public release of framework to Github

Public release of site code to Github

Contributing

Toolbox of nuts and bolts
* Writing tiny scripts
* Comprising larger scripts with the smaller ones
* Shell scripts aren't all bash
