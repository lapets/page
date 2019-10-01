#####################################################################
#
# CAS CS 320, Fall 2015
# Midterm (skeleton code)
# analyze.py
#
#  ****************************************************************
#  *************** Modify this file for Problem #3. ***************
#  ****************************************************************
#

exec(open('parse.py').read())

Node = dict
Leaf = str

def typeExpression(env, e):
    if type(e) == Leaf:
        pass # Complete base cases for booleans for Problem #3.

    if type(e) == Node:
        for label in e:
            children = e[label]
            if label == 'Number':
                return 'TyNumber'

            elif label == 'Variable':
                pass # Complete case for 'Variable' for Problem #3.

            elif label == 'Element':
                pass # Complete case for 'Variable' for Problem #3.

            elif label == 'Plus':
                pass # Complete case for 'Plus' for Problem #3.

def typeProgram(env, s):
    if type(s) == Leaf:
        if s == 'End':
            return 'TyVoid'
    elif type(s) == Node:
        for label in s:
            if label == 'Print':
                [e, p] = s[label]
                pass # Complete case(s) for 'Print' for Problem #3.

            if label == 'Assign':
                [xTree, e0, e1, e2, p] = s[label]
                x = xTree['Variable'][0]
                pass # Complete case(s) for 'Assign' for Problem #3.

            if label == 'Loop':
                [xTree, nTree, p1, p2] = s[label]
                x = xTree['Variable'][0]
                n = nTree['Number'][0]
                pass # Complete case for 'Loop' for Problem #3.

#eof