######################################################################
#
# CAS CS 320, Fall 2013
# Assignment 3 (skeleton code)
# interpret.py
#

exec(open("parse.py").read())

def vnot(v):
    if v == 'True':  return 'False'
    if v == 'False': return 'True'

def vand(v1, v2):
    if v1 == 'True'  and v2 == 'True':  return 'True'
    if v1 == 'True'  and v2 == 'False': return 'False'
    if v1 == 'False' and v2 == 'True':  return 'False'
    if v1 == 'False' and v2 == 'False': return 'False'

def vor(v1, v2):
    if v1 == 'True'  and v2 == 'True':  return 'True'
    if v1 == 'True'  and v2 == 'False': return 'True'
    if v1 == 'False' and v2 == 'True':  return 'True'
    if v1 == 'False' and v2 == 'False': return 'False'

Node = dict
Leaf = str

def evalTerm(env, e):
    pass # Complete for Problem #1, part (a).

def evalFormula(env, e):
    pass # Complete for Problem #1, part (b).			

def evalExpression(env, e): # Useful helper function.
    pass

def execProgram(env, s):
    pass # Complete for Problem #1, part (c).
                    
def interpret(s):
    (env, o) = execProgram({}, tokenizeAndParse(s))
    return o

#eof
