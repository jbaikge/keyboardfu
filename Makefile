ARTICLE_TEXTILES  := $(wildcard 20??/*/*.textile)

ARTICLE_OBJECTS   := $(patsubst %.textile,%.object,$(ARTICLE_TEXTILES))
ARTICLE_OUTLINES  := $(patsubst %.textile,%.outline,$(ARTICLE_TEXTILES))
ARTICLE_PAGES     := $(patsubst %.textile,%.php,$(ARTICLE_TEXTILES))
ARTICLE_BODIES    := $(patsubst %.textile,%.body,$(ARTICLE_TEXTILES))

STATIC_BODIES     := $(patsubst %.textile,%.body,$(wildcard static/*.textile))

all: objects outlines pages bodies static

bodies: $(ARTICLE_BODIES)

objects: $(ARTICLE_OBJECTS)

outlines: $(ARTICLE_OUTLINES)

pages: $(ARTICLE_PAGES)

static: $(STATIC_BODIES)

clean:
	rm -f $(ARTICLE_PAGES)
	rm -f $(ARTICLE_OBJECTS)
	rm -f $(ARTICLE_OUTLINES)
	rm -f $(ARTICLE_BODIES)
	rm -f $(STATIC_BODIES)

info:
	@echo Article Textiles
	@for F in $(ARTICLE_TEXTILES); do echo '    '$$F; done
	@echo Article Objects
	@for F in $(ARTICLE_OBJECTS); do echo '    '$$F; done
	@echo Article Outlines
	@for F in $(ARTICLE_OUTLINES); do echo '    '$$F; done
	@echo Article Bodies
	@for F in $(ARTICLE_BODIES); do echo '    '$$F; done
	@echo Article Pages
	@for F in $(ARTICLE_PAGES); do echo '    '$$F; done

%.object: %.textile .bin/compile_object
	@printf "%8s: %s\n" OBJECT $@
	@.bin/compile_object $< $@

%.body: %.textile .bin/compile_textile
	@printf "%8s: %s\n" TEXTILE $@
	@.bin/compile_textile $< $@

%.outline: %.textile .bin/compile_outline
	@printf "%8s: %s\n" OUTLINE $@
	@.bin/compile_outline $< $@

%.php: %.textile
	@printf "%8s: %s\n" PAGE $@
	@cp article.php $@

.PHONY: all bodies clean info objects outlines pages static
