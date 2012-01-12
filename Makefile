SRCDIRS := $(dir $(wildcard articles/*/meta.json))
OBJDIRS := $(addprefix cache/,$(SRCDIRS))
DATA_OBJ := $(addsuffix data.php,$(OBJDIRS))
TEXTILE_OBJ := $(foreach dir,$(SRCDIRS),$(patsubst %.textile,cache/%.html.php,$(wildcard $(dir)[0-9][0-9].textile)))

.PHONY: all
all: textile data dates

.PHONY: textile
textile: $(TEXTILE_OBJ)

.PHONY: data
data: $(DATA_OBJ)

.PHONY: dates
dates: cache/articles/date_map.php

.PHONY: clean
clean:
	rm -rf cache/articles

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

cache/articles/date_map.php: $(DATA_OBJ)
	@printf "%8s: %s\n" DATES $@
	@./.bin/compile_dates $(DATA_OBJ) > $@

# .SECONDEXPANSION used to turn "cache/articles/<title>/01.html.php" into
# "cache/articles/<title>" and call the rule below. The expansion is used to hit
# $$(@D) which is $@D which is $(dir $@), or "cache/articles/<title>"
#
# The pipe (|) represents an order-only rule where it is only called once as a
# prerequisite if it does not exist.
.SECONDEXPANSION:
cache/%.html.php: %.textile | $$(@D)
	@printf "%8s: %s\n" TEXTILE $@
	@./.bin/compile_textile $< $@

# .SECONDEXPANSION not needed here, but left for doc purposes
.SECONDEXPANSION:
cache/%/data.php: %/meta.json %/[0-9][0-9].textile | $$(@D)
	@printf "%8s: %s\n" DATA $@
	@./.bin/compile_data $< $@

# cache/articles/<title>
$(OBJDIRS):
	@printf "%8s: %s\n" MKDIR $@
	@mkdir -p dir $@
