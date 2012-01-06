DATA_SRC := $(wildcard articles/*/meta.json)
DATA_OBJ := $(DATA_SRC:%/meta.json=cache/%/data.json)

TEXTILE_SRC := $(wildcard articles/*/[0-9][0-9].textile)
TEXTILE_OBJ := $(TEXTILE_SRC:%.textile=cache/%.html.php)

.PHONY: all
all: $(TEXTILE_OBJ) $(DATA_OBJ)

.PHONY: clean
clean:
	rm -rf cache/articles

cache/%.html.php: %.textile
	mkdir -p $(dir $@)
	./.bin/compile_textile $< $@

cache/%/data.json: %/meta.json
	mkdir -p $(dir $@)
	cp $< $@

