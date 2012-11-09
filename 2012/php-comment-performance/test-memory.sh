#!/bin/sh
CODEPATH=~/svn/framework/code

find $CODEPATH -type f -name '*.class.php' | grep -v '/tests/' | sort > all_classes
cat all_classes | xargs grep -l ' extends ' > extends
comm -23 all_classes extends > standalone

rm -f results
for F in `cat standalone`; do
	echo -n `basename $F` >> results

	# Test /**
	echo -n ',' >> results
	sed 's#/\*!#/**#g' $F > $F.2splat
	php -r '$start = memory_get_usage();
	include("'$F.2splat'");
	echo memory_get_usage() - $start;' >> results

	# Test /*!
	echo -n ',' >> results
	sed 's#/\*\*#/*!#g' $F > $F.splatbang
	php -r '$start = memory_get_usage();
	include("'$F.splatbang'");
	echo memory_get_usage() - $start;' >> results

	# Test php -w
	echo -n ',' >> results
	php -w $F > $F.nospace
	php -r '$start = memory_get_usage();
	include("'$F.nospace'");
	echo memory_get_usage() - $start;' >> results

	echo >> results
done
