#!/usr/bin/env python
import json
import os.path
import sys
import uuid

class indent(object):
	def __init__(self, indent="\t"):
		self.base_indent = indent
		self.indent = indent
	
	def __mul__(self, o):
		try:
			self.indent = self.base_indent * o
		except TypeError:
			return self.indent
		return self
	def __rmul__(self, o):
		return self.__mul__(o)

def add_uuid(filename):
	if os.path.isdir(filename):
		filename = os.path.join(filename, 'meta.json')
	if not os.path.exists(filename):
		print 'File does not exist:', filename
		exit(2)

	with open(filename, 'r') as file:
		meta = json.load(file)

	# Don't need to add a UUID if one exists.
	if 'uuid' in meta:
		return

	meta['uuid'] = get_uuid()

	with open(filename, 'w') as file:
		file.write(json.dumps(meta, indent=indent(), separators=(',', ': ')))
		file.write('\n')

def get_uuid():
	return str(uuid.uuid4())

def main():
	if len(sys.argv) != 2:
		print 'Usage:', sys.argv[0], '<filename>'
		exit(1)
	add_uuid(sys.argv[1])

if __name__ == '__main__':
	main()
