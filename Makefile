#
# @author Wilhelm Behncke <behncke@sitegeist.de>
#

###############################################################################
#                                VARIABLES                                    #
###############################################################################
SHELL=/bin/bash
export PATH := ./bin:$(PATH)

###############################################################################
#                               APPLICATION                                   #
###############################################################################
start:
	php -S localhost:8000 -t src/