#####################################################################
#
# CAS CS 320, Fall 2015
# Midterm (skeleton code)
# compile.py
#
#  ****************************************************************
#  *************** Modify this file for Problem #4. ***************
#  ****************************************************************
#

from random import randint
exec(open('parse.py').read())
exec(open('interpret.py').read())
exec(open('optimize.py').read())
exec(open('machine.py').read())

Leaf = str
Node = dict

def freshStr():
    return str(randint(0,10000000))

def compileExpression(env, e, heap):
    if type(e) == Node:
        for label in e:
            children = e[label]
            if label == 'Number':
                n = children[0]
                heap = heap + 1
                return (['set ' + str(heap) + ' ' + str(n)], heap, heap)

    pass # Complete 'True', 'False', 'Variable', 'Element', and 'Plus' cases for Problem #4.

def compileProgram(env, s, heap = ???): # Set initial heap default address.
    if type(s) == Leaf:
        if s == 'End':
            return (env, [], heap)

    if type(s) == Node:
        for label in s:
            children = s[label]
            if label == 'Print':
                [e, p] = children
                (instsE, addr, heap) = compileExpression(env, e, heap)
                (env, instsP, heap) = compileProgram(env, p, heap)
                return (env, instsE + copy(addr, 5) + instsP, heap)

    pass # Complete 'Assign' and 'Loop' cases for Problem #4.

def compile(s):
    p = tokenizeAndParse(s)

    # Add calls to type checking and optimization algorithms.

    (env, insts, heap) = compileProgram({}, p)
    return insts

def compileAndSimulate(s):
    return simulate(compile(s))

#eof