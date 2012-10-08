SRCDIRS := $(dir $(wildcard articles/*/*/meta.json))
OBJDIRS := $(SRCDIRS)
DATA_OBJ := $(addsuffix data.php,$(OBJDIRS))
OUTLINE_OBJ := $(addsuffix outline.html.php,$(OBJDIRS))
TEXTILE_OBJ := $(foreach dir,$(SRCDIRS),$(patsubst %.textile,%.html.php,$(wildcard $(dir)[0-9][0-9].textile)))
STATIC_TEXTILE_OBJ := $(patsubst %.textile,%.html.php,$(wildcard static/*.textile))

.PHONY: all
all: textile data outline map static

.PHONY: textile
textile: $(TEXTILE_OBJ)

.PHONY: data
data: $(DATA_OBJ)

.PHONY: outline
outline: $(OUTLINE_OBJ)

.PHONY: map
map: cache/article_map.php

.PHONY: static
static: $(STATIC_TEXTILE_OBJ)

.PHONY: clean
clean:
	rm -rf articles/*/*/*.html.php
	rm -rf static/*.html.php
	rm -f cache/article_map.php

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
	@echo Static Textile:
	@for F in $(STATIC_TEXTILE_OBJ); do echo '    '$$F; done

%/article_map.php: $(DATA_OBJ) .bin/compile_map
	@printf "%8s: %s\n" MAP $@
	@./.bin/compile_map $(DATA_OBJ) > $@

%.html.php: %.textile .bin/compile_textile
	@printf "%8s: %s\n" TEXTILE $@
	@./.bin/compile_textile $< $@

%/data.php: %/meta.json %/[0-9][0-9].textile .bin/compile_data
	@printf "%8s: %s\n" DATA $@
	@./.bin/compile_data $< $@

%/outline.html.php: %/[0-9][0-9].textile .bin/compile_outline
	@printf "%8s: %s\n" OUTLINE $@
	@./.bin/compile_outline $< $@
