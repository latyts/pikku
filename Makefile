PIKKU_DB_NAME ?= pikku
PIKKU_DB_USER ?= pikku
DB_DIR=db
DB=$(notdir $(basename $(wildcard db/*.sql)))
.PHONY: prompt $(DB)

prompt:
	@psql -U $(PIKKU_DB_USER) -d $(PIKKU_DB_NAME)

$(DB):
	psql -W \
		 -U $(PIKKU_DB_USER) \
		 -d $(PIKKU_DB_NAME) \
		 -f $(DB_DIR)/$@.sql
