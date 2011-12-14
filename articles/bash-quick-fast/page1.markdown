# Bashing About Quick and Fast

If you develop in a Linux environment, sometimes it's easy to forget how many tools are at your disposal. Today we explore a few of the underlying basics of of the bash environment to help speed up common tasks. The best part is: three or four commands strung together can accomplish what 10+ lines of C or Perl can do, and in less time.

## Aliases: Bash Scripts Without the Scripting

Aliases define a single command which represents another command or collection of commands. They are typically defined in `~/.bash_aliases` or `~/.bashrc`. Syntax is simple:

	alias l=ls -l

Aliasing `ls -l` to just `l` is good, but surely it's more capable than that. I present to you, Shirly:

	alias svnaddnew=

This alias has been in my `~/.bash_aliases` for years. It came about when the `svn:eol-style` property on some new files fired off and prevented me from adding a large directory of text files. Suddenly, I had a bunch of question marks and no quick way to add the missing files. A fair amount of `awk`ing about led me to something similar to the above, and after having to rewrite the same string of commands from memory 30 or 40,000 times, I pushed it in as an alias. Now it is one of the single most important commands I use on a daily basis.

## Scripts: The Third Arm

The potential for aliasing commands is vast, however if a script should really be a script, then there's a quick solution for deploying those, too.
