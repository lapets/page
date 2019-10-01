#####################################################################
#
# CAS CS 320, Fall 2015
# Midterm (skeleton code)
# parse.py
#
#  ****************************************************************
#  *************** Modify this file for Problem #1. ***************
#  ****************************************************************
#

import re

def number(tokens, top = True):
    if re.compile(r"(-(0|[1-9][0-9]*)|(0|[1-9][0-9]*))").match(tokens[0]):
        return ({"Number": [int(tokens[0])]}, tokens[1:])

def variable(tokens, top = True):
    if re.compile(r"[a-z][A-Za-z0-9]*").match(tokens[0]):
        return ({"Variable": [tokens[0]]}, tokens[1:])

def expression(tmp, top = True):
    pass # Complete for Problem #1.

def left(tmp, top = True):
    pass # Complete for Problem #1.

def program(tmp, top = True):
    pass # Complete for Problem #1.

def tokenizeAndParse(s):
    tokens = re.split(r"(\s+|:=|print|\+|loop|from|{|}|;|\[|\]|,|@|\$)", s)
    tokens = [t for t in tokens if not t.isspace() and not t == ""]

    pass # Complete for Problem #1.

#eof