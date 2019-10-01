import re

############################################################
# Load the files. Change the path if necessary.
exec(open('parse.py').read())
exec(open('interpret.py').read())

def check(function, inputs_result_pairs):
    passed = 0
    for (inputs, result) in inputs_result_pairs:
        output = function(inputs[0], inputs[1]) if len(inputs) == 2 else function(inputs[0])

        # If the result includes the token list, take only the parse tree.
        #output = output[0] if type(output) == tuple else output

        if output == result: passed = passed + 1
        else: print("Failed on list of inputs:\n"+str(inputs)+"\n")
    print("Passed " + str(passed) + " of " + str(len(inputs_result_pairs)) + " tests.")
    print("")

############################################################
# The tests.

print("Problem #1, part (a), variable()...")
try: variable
except: print("The variable() function is not defined.")
else: check(variable, [\
    ([["x"]], ({'Variable':['x']}, [])),\
    ([["test"]], ({'Variable':['test']}, [])),\
    ([["camelNotation"]], ({'Variable':['camelNotation']}, [])),\
    ])

print("Problem #1, part (a), number()...")
try: number
except: print("The number() function is not defined.")
else: check(number, [\
    ([["123"]], ({'Number':[123]}, [])),\
    ([["0"]], ({'Number':[0]}, [])),\
    ([["1010"]],({'Number':[1010]}, [])),\
    ])

print("Problem #1, part (b), formula()...")
try: formula
except: print("The formula() function is not defined.")
else: check(formula, [\
    (["true".split(" ")], ('True', [])),\
    (["false".split(" ")], ('False', [])),\
    (["true and false".split(" ")], ({'And': ['True', 'False']}, [])),\
    (["( true and false )".split(" ")], ({'And': ['True', 'False']}, [])),\
    (["not ( true ) and false".split(" ")], ({'And': [{'Not': ['True']}, 'False']}, [])),\
    (["x".split(" ")], ({'Variable': ['x']}, [])),\
    (["x and not ( y )".split(" ")], ({'And': [{'Variable': ['x']}, {'Not': [{'Variable': ['y']}]}]}, [])),\
    (["true and false and true and false".split(" ")], ({'And': ['True', {'And': ['False', {'And': ['True', 'False']}]}]}, [])),\
    (["x and y and not ( z ) and true".split(" ")], ({'And': [{'Variable': ['x']}, {'And': [{'Variable': ['y']}, {'And': [{'Not': [{'Variable': ['z']}]}, 'True']}]}]}, [])),\
    (["not ( a and b ) and true".split(" ")], ({'And': [{'Not': [{'And': [{'Variable': ['a']}, {'Variable': ['b']}]}]}, 'True']}, [])),\
    ])

print("Problem #1, part (c), term()...")
try: term
except: print("The term() function is not defined.")
else: check(term, [\
    (["123".split(" ")], ({'Number':[123]}, [])),\
    (["0".split(" ")], ({'Number':[0]}, [])),\
    (["x".split(" ")], ({'Variable': ['x']}, [])),\
    (["0 + 1".split(" ")], ({'Plus': [{'Number': [0]}, {'Number': [1]}]}, [])),\
    (["x + ( 1 + 2 )".split(" ")], ({'Plus': [{'Variable': ['x']}, {'Plus': [{'Number': [1]}, {'Number': [2]}]}]}, [])),\
    (["( x + 1 ) + 2".split(" ")], ({'Plus': [{'Plus': [{'Variable': ['x']}, {'Number': [1]}]}, {'Number': [2]}]}, [])),\
    (["1 + 2 * 3" .split(" ")], ({'Plus': [{'Number': [1]}, {'Mult': [{'Number': [2]}, {'Number': [3]}]}]}, [])),\
    (["( 1 + 2 ) * 3" .split(" ")], ({'Mult': [{'Plus': [{'Number': [1]}, {'Number': [2]}]}, {'Number': [3]}]}, [])),\
    (["1 + 2 * 3 + 4".split(" ")], ({'Plus': [{'Number': [1]}, {'Plus': [{'Mult': [{'Number': [2]}, {'Number': [3]}]}, {'Number': [4]}]}]}, [])),\
    (["1 + 2 + log ( z ) + 0".split(" ")], ({'Plus': [{'Number': [1]}, {'Plus': [{'Number': [2]}, {'Plus': [{'Log': [{'Variable': ['z']}]}, {'Number': [0]}]}]}]}, [])),\
    (["log ( a * b ) * 2".split(" ")], ({'Mult': [{'Log': [{'Mult': [{'Variable': ['a']}, {'Variable': ['b']}]}]}, {'Number': [2]}]}, [])),\
    ])

print("Problem #1, part (d), program()...")
try: program
except: print("The program() function is not defined.")
else: check(program, [\
    (["print true ;".split(" ")], ({'Print': ['True', 'End']}, [])),\
    (["assign x := 3 + 4 ; print x * x ;".split(" ")], ({'Assign': [{'Variable': ['x']}, {'Plus': [{'Number': [3]}, {'Number': [4]}]}, {'Print': [{'Mult': [{'Variable': ['x']}, {'Variable': ['x']}]}, 'End']}]}, [])),\
    (["assign x := true and false ; print false ;".split(" ")], ({'Assign': [{'Variable': ['x']}, {'And': ['True', 'False']}, {'Print': ['False', 'End']}]}, [])),\
    (["if true { print 1 ; } print 0 ;".split(" ")], ({'If': ['True', {'Print': [{'Number': [1]}, 'End']}, {'Print': [{'Number': [0]}, 'End']}]}, [])),\
    (["while true { if false { print 0 ; } print 1 ; } print 2 ;".split(" ")], ({'While': ['True', {'If': ['False', {'Print': [{'Number': [0]}, 'End']}, {'Print': [{'Number': [1]}, 'End']}]}, {'Print': [{'Number': [2]}, 'End']}]}, [])),\
    (["assign x := 1 + 2 ; while false { assign y := a and b ; }".split(" ")], ({'Assign': [{'Variable': ['x']}, {'Plus': [{'Number': [1]}, {'Number': [2]}]}, {'While': ['False', {'Assign': [{'Variable': ['y']}, {'And': [{'Variable': ['a']}, {'Variable': ['b']}]}, 'End']}, 'End']}]}, [])),\
    ([[]], ('End', [])),\
    (["print 1 + 2 + log ( z ) + 0 ; assign y := 1 + 2 + log ( z ) + 0 ; print log ( 4 ) + y ;".split(" ")], ({'Print': [{'Plus': [{'Number': [1]}, {'Plus': [{'Number': [2]}, {'Plus': [{'Log': [{'Variable': ['z']}]}, {'Number': [0]}]}]}]}, {'Assign': [{'Variable': ['y']}, {'Plus': [{'Number': [1]}, {'Plus': [{'Number': [2]}, {'Plus': [{'Log': [{'Variable': ['z']}]}, {'Number': [0]}]}]}]}, {'Print': [{'Plus': [{'Log': [{'Number': [4]}]}, {'Variable': ['y']}]}, 'End']}]}]}, [])),\
    (["assign x := true ; while x { assign x := false ; } print x ;".split(" ")], ({'Assign': [{'Variable': ['x']}, 'True', {'While': [{'Variable': ['x']}, {'Assign': [{'Variable': ['x']}, 'False', 'End']}, {'Print': [{'Variable': ['x']}, 'End']}]}]}, [])),\
    ])

print("Problem #2, part (a), evalTerm()...")
try: evalTerm
except: print("The evalTerm() function is not defined.")
else: check(evalTerm, [\
    ([{}, {'Number': [123]}], 123),\
    ([{'x':10}, {'Variable': ['x']}], 10),\
    ([{}, {'Plus': [{'Number': [1]}, {'Plus': [{'Mult': [{'Number': [2]}, {'Number': [3]}]}, {'Number': [4]}]}]}], 11),\
    ([{}, {'Plus': [{'Number': [0]}, {'Number': [1]}]}], 1),\
    ([{'x':2, 'y':3}, {'Plus': [{'Variable': ['y']}, {'Variable': ['x']}]}], 5),\
    ([{'z':32}, {'Log': [{'Variable': ['z']}]}], 5),\
    ])

print("Problem #2, part (b)...")
try: evalFormula
except: print("The evalFormula() function is not defined.")
else: check(evalFormula, [\
    ([{}, 'True'], 'True'),\
    ([{}, {'And': ['True', 'False']}], 'False'),\
    ([{'x':'True'}, {'Variable':['x']}], 'True'),\
    ([{'x':'True', 'y':'False'}, {'And': [{'Not':[{'Variable': ['y']}]}, {'Variable': ['x']}]}], 'True'),\
    ])

print("Problem #2, part (c)...")
try: execProgram
except: print("The execProgram() function is not defined.")
else: check(execProgram, [\
    ([{}, 'End'], ({}, [])),\
    ([{}, {'Print': ['False', 'End']}], ({}, ['False'])),\
    ([{'y':'False'}, {'Print': [{'Not':[{'Variable':['y']}]}, 'End']}], ({'y': 'False'}, ['True'])),\
    ([{'x':123}, {'Assign': [{'Variable': ['x']}, 'True', {'Print': [{'Variable': ['x']}, 'End']}]}], ({'x': 'True'}, ['True'])),\
    ([{}, {'Assign': [{'Variable': ['x']}, 'True', {'If': [{'Variable': ['x']}, {'While': [{'Not': [{'Variable': ['x']}]}, {'Print': [{'Number': [123]}, 'End']}, 'End']}, {'Print': [{'Variable': ['x']}, 'End']}]}]}], ({'x': 'True'}, ['True'])),\
    ([{}, {'Assign': [{'Variable': ['x']}, 'True', {'Assign': [{'Variable': ['y']}, 'True', {'While': [{'Variable': ['x']}, {'While': [{'Variable': ['y']}, {'Print': [{'Variable': ['x']}, {'Assign': [{'Variable': ['y']}, {'And': [{'Variable': ['x']}, {'And': [{'Variable': ['y']}, 'False']}]}, 'End']}]}, {'Assign': [{'Variable': ['x']}, {'And': [{'Variable': ['x']}, {'And': [{'Variable': ['y']}, 'True']}]}, 'End']}]}, {'Print': [{'Variable': ['x']}, {'Print': [{'Variable': ['y']}, 'End']}]}]}]}]}], ({'x':'False', 'y':'False'}, ['True', 'False', 'False'])),\
    ])

print("Problem #2, part (d), interpret()...")
try: interpret
except: print("The interpret() function is not defined.")
else: check(interpret, [\
    (["print true;"], ['True']),\
    (["print 1 + 2 + 3;"], [6]),\
    (["assign x := 3+4 ; print x*x+1;"], [50]),\
    (["assign x := true; if x { print x; } print x;"], ['True', 'True']),\
    (["assign x := true; while x { print x; assign x := false; } print x;"], ['True', 'False']),\
    ([""], []),\
    (["assign x := true; if x { while not ( x ) { print 123; } } print x;"], ['True']),\
    (["assign x := true; if x { while x and true { print 123; assign x := x and false; } } print x;"], [123, 'False']),\
    (["assign x := true; assign y := true; while x { while y { print x; assign y := x and y and false; } assign x := x and y and true; } print x; print y;"], ['True', 'False', 'False']),\
    ])

#eof