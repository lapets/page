#####################################################################
#
# CAS CS 320, Fall 2015
# Midterm (skeleton code)
# interpret.py
#
#  ****************************************************************
#  *************** Modify this file for Problem #2. ***************
#  ****************************************************************
#

exec(open('parse.py').read())

Node = dict
Leaf = str

def evalExpression(env, e):
    if type(e) == Leaf:
        if e == 'True':
            return 'True'
        pass # Complete remaining cases for Problem #2.
    if type(e) == Node:
        pass # Complete remaining cases for Problem #2.

def execProgram(env, s):
    if type(s) == Leaf:
        if s == 'End':
            return (env, [])
    elif type(s) == Node:
        for label in s:
            if label == 'Print':
                [e,p] = s[label]
                v = evalExpression(env, e)
                (env, o) = execProgram(env, p)
                return (env, [v] + o)
            pass # Complete remaining cases for Problem #2.

def interpret(s):
    pass # Complete for Problem #2.

#eof