# Bashing About Quick and Fast

If you develop in a Linux environment, sometimes it's easy to forget how many tools are at your disposal. Today we explore a few of the underlying basics of of the bash environment to help speed up common tasks. The best part is: three or four commands strung together can accomplish what 10+ lines of C or Perl can do, and in less time.

## Aliases: Bash Scripts Without the Scripting

Aliases define a single command which represents another command or collection of commands. They are typically defined in `~/.bash_aliases` or `~/.bashrc`. Syntax is simple:

	alias l=ls -l

Aliasing `ls -l` to just `l` is good, but surely it's more capable than that. I present to you, Shirly:

	alias svnaddnew=

This alias has been in my `~/.bash_aliases` for years. It came about when the `svn:eol-style` property on some new files fired off and prevented me from adding a large directory of text files. Suddenly, I had a bunch of question marks and no quick way to add the missing files. A fair amount of `awk`ing about led me to something similar to the above, and after having to rewrite the same string of commands from memory 30 or 40,000 times, I pushed it in as an alias. Now it is one of the single most important commands I use on a daily basis.

## Scripts: The Third Arm

The potential for aliasing commands is vast, however if a script should really be a script, then there's a quick solution for deploying those, too. Some of the current Linux distros come with the following already in user `~/.bashrc` files:

	if [ -d ~/bin ]; then
		export PATH=~/bin:$PATH
	fi

This means anything you place inside your `~/bin` directory with executable rights (`chmod +x ~/bin/filename`) becomes a command for every day use. _Anything_ can become a script, even an awk script:


	#!/usr/bin/awk -f 
	BEGIN {
		FS="."
		OFS="."
		if (ARGV[1] == "") {
			printf("USAGE: %s ipaddress\n", ARGV[0]) > "/dev/stderr"
			exit 1
		}
		split(ARGV[1], IPBITS)
		if (IPBITS[1] + IPBITS[2] + IPBITS[3] + IPBITS[4] >= 255 * 4) {
			printf("IP [%s] too large to increment\n", ARGV[1]) > "/dev/stderr"
			exit 1
		}
		for (i = 4; i >= 1; i--) {
			++IPBITS[i]
			if (IPBITS[i] > 255)
				IPBITS[i] = 0
			else
				break
		}
		print IPBITS[1], IPBITS[2], IPBITS[3], IPBITS[4]
	}

The script above will take any IP address and find the next one. If the argument is 127.0.1.45, it will return 127.0.1.46. It even knows that 127.0.2.0 follows 127.0.1.255. It's pretty easy to see that something like this could be accomplished in any language. Awk was chosen because I knew I could deploy the solution very quickly.

## And You Shake it All About

If you find yourself typing a command or set of commands on a regular basis, or if you find that you've strung together some obnoxious collection of commands to accomplish a task, it's a good idea to look into placing those in a place where you can call upon them. Full on scripts aren't always necessary, as aliases can handle the small stuff.

Additionally, placing a quick and dirty solution to a problem in a script offers the opportunity to go back and fiddle with it later - changing the language, approach, or optimizing the code.
