SRCDIRS := $(dir $(wildcard articles/*/meta.json))
OBJDIRS := $(addprefix cache/,$(SRCDIRS))
DATA_OBJ := $(addsuffix data.php,$(OBJDIRS))
TEXTILE_OBJ := $(foreach dir,$(SRCDIRS),$(patsubst %.textile,cache/%.html.php,$(wildcard $(dir)[0-9][0-9].textile)))
STATIC_TEXTILE_OBJ := $(patsubst %.textile,cache/%.html.php,$(wildcard static/*.textile))

.PHONY: all
all: textile data map static

.PHONY: textile
textile: $(TEXTILE_OBJ)

.PHONY: data
data: $(DATA_OBJ)

.PHONY: map
map: cache/articles/map.php

.PHONY: static
static: $(STATIC_TEXTILE_OBJ)

.PHONY: clean
clean:
	rm -rf cache/articles
	rm -rf cache/static

.PHONY: info
info:
	@echo Source Directories:
	@for D in $(SRCDIRS); do echo '    '$$D; done
	@echo Object Directories:
	@for D in $(OBJDIRS); do echo '    '$$D; done
	@echo Compiled Data:
	@for F in $(DATA_OBJ); do echo '    '$$F; done
	@echo Compiled HTML:
	@for F in $(TEXTILE_OBJ); do echo '    '$$F; done

cache/articles/map.php: $(DATA_OBJ) .bin/compile_map
	@printf "%8s: %s\n" MAP $@
	@./.bin/compile_map $(DATA_OBJ) > $@

# .SECONDEXPANSION used to turn "cache/articles/<title>/01.html.php" into
# "cache/articles/<title>" and call the rule below. The expansion is used to hit
# $$(@D) which is $@D which is $(dir $@), or "cache/articles/<title>"
#
# The pipe (|) represents an order-only rule where it is only called once as a
# prerequisite if it does not exist.
.SECONDEXPANSION:
cache/%.html.php: %.textile .bin/compile_textile | $$(@D)
	@printf "%8s: %s\n" TEXTILE $@
	@./.bin/compile_textile $< $@

# .SECONDEXPANSION not needed here, but left for doc purposes
.SECONDEXPANSION:
cache/%/data.php: %/meta.json %/[0-9][0-9].textile .bin/compile_data | $$(@D)
	@printf "%8s: %s\n" DATA $@
	@./.bin/compile_data $< $@

# cache/articles/<title>
$(OBJDIRS) cache/static:
	@printf "%8s: %s\n" MKDIR $@
	@mkdir -p dir $@
