#####################################################################
#
# CAS CS 320, Fall 2015
# Assignment 4 (skeleton code)
# interpret.py
#

exec(open('parse.py').read())

def subst(s, a):
    pass # Complete for Problem #1, part (a).

def unify(a, b):
    pass # Complete for Problem #1, part (b).

def build(m, d):
    pass # Complete for Problem #2, part (a).
  
def evaluate(m, env, e):
    pass # Complete for Problem #2, part (b).

def interact(s):
    # Build the module definition.
    m = build({}, parser(grammar, 'declaration')(s))

    # Interactive loop.
    while True:
        # Prompt the user for a query.
        s = input('> ') 
        if s == ':quit':
            break
        
        # Parse and evaluate the query.
        e = parser(grammar, 'expression')(s)
        if not e is None:
            print(evaluate(m, {}, e))
        else:
            print("Unknown input.")

#eof