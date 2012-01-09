DATA_SRC := $(wildcard articles/*/meta.json)
DATA_OBJ := $(DATA_SRC:%/meta.json=cache/%/data.php)

TEXTILE_SRC := $(wildcard articles/*/[0-9][0-9].textile)
TEXTILE_OBJ := $(TEXTILE_SRC:%.textile=cache/%.html.php)

OBJ_DIRS := $(dir $(DATA_OBJ))

.PHONY: all
all: $(TEXTILE_OBJ) $(DATA_OBJ)

.PHONY: clean
clean:
	rm -rf cache/articles

# .SECONDEXPANSION used to turn "cache/articles/<title>/01.html.php" into
# "cache/articles/<title>" and call the rule below. The expansion is used to hit
# $$(@D) which is $@D which is $(dir $@), or "cache/articles/<title>"
#
# The pipe (|) represents an order-only rule where it is only called once as a
# prerequisite if it does not exist.
.SECONDEXPANSION:
cache/%.html.php: %.textile | $$(@D)
	./.bin/compile_textile $< $@

# .SECONDEXPANSION not needed here, but left for doc purposes
.SECONDEXPANSION:
cache/%/data.php: %/meta.json | $$(@D)
	./.bin/compile_data $< $@

# cache/articles/<title>
$(OBJ_DIRS):
	mkdir -p dir $@
