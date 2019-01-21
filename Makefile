#
# @author Wilhelm Behncke <behncke@sitegeist.de>
#

###############################################################################
#                                VARIABLES                                    #
###############################################################################
SHELL=/bin/bash
PHP=docker-compose exec php php
COMPOSER=docker-compose exec php composer
export MAKE:=$(MAKE) -s


list:
	@grep '^[^#[:space:]].*:' Makefile

###############################################################################
#                               APPLICATION                                   #
###############################################################################
install:
	@$(MAKE) up
	@$(COMPOSER) install
	@$(MAKE) populate

up:
	@docker-compose up -d

down:
	@docker-compose down --remove-orphans

restart:
	@$(MAKE) down
	@$(MAKE) up

ssh:
	@$(MAKE) up 2> /dev/null
	@docker-compose exec php sh

###############################################################################
#                               DEVELOPMENT                                   #
###############################################################################
populate:
	@$(MAKE) restart
	@sleep 20
	@$(PHP) /app/build/populate.php

###############################################################################
#                                 SCRIPTS                                     #
###############################################################################
friend-or-foe:
	@$(PHP) /app/src/friend-or-foe.php