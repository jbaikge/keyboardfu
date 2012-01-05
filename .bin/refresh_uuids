#!/usr/bin/env python
import add_uuid
import glob
import os.path
import sys

def get_meta_files():
	dir = os.path.dirname(sys.argv[0])
	glob_path = os.path.join(dir, '..', 'articles', '*', 'meta.json')
	meta_files = glob.glob(glob_path)
	return meta_files

def main():
	for meta_file in get_meta_files():
		add_uuid.add_uuid(meta_file)

if __name__ == '__main__':
	main()
