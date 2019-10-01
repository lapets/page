import re

############################################################
# Load the file. Change the path if necessary.
exec(open('a1.py').read())

def check(function, inputs_result_pairs):
    passed = 0
    for (inputs, result) in inputs_result_pairs:
        output = function(inputs[0], inputs[1]) if len(inputs) == 2 else function(inputs[0])

        # If the result includes the token list, take only the parse tree.
        output = output[0] if type(output) == tuple else output

        if output == result: passed = passed + 1
        else: print("Failed on:\n"+str(inputs)+"\n")
    print("Passed " + str(passed) + " of " + str(len(inputs_result_pairs)) + " tests.")
    print("")

############################################################
# The tests.

print("Problem #1, part (a)...")
try: tokenize
except: print("The tokenize() function is not defined.")
else:
    check(tokenize, [\
        ([r"(\s+|example|test)", "example test example example"], ['example', 'test', 'example', 'example']),\
        ([r"(\s+|a|b|c|d|e|,)", "a,b,c,d,e,d,c,b,a"], ['a', ',', 'b', ',', 'c', ',', 'd', ',', 'e', ',', 'd', ',', 'c', ',', 'b', ',', 'a']),\
        ([r"(\s+|up|down|left|right|stop|;)", "left; right; stop;"], ['left', ';', 'right', ';', 'stop', ';']),\
        ])

print("Problem #1, part (b)...")
try: (tokenize, directions)
except: print("The tokenize() and/or directions() functions are not defined.")
else:
    check((lambda s: directions(tokenize(r"(\s+|up|down|left|right|stop|;)", s))), [\
        (["stop;"], 'Stop'),\
        (["down; down; down; stop;"], {'Down': [{'Down': [{'Down': ['Stop']}]}]}),\
        (["up; down; left; right; stop;"], {'Up': [{'Down': [{'Left': [{'Right': ['Stop']}]}]}]}),\
        (["up; down; left; right; up; down; left; right; up; down; left; right; up; down; left; right; up; down; left; right; stop;"], {'Up': [{'Down': [{'Left': [{'Right': [{'Up': [{'Down': [{'Left': [{'Right': [{'Up': [{'Down': [{'Left': [{'Right': [{'Up': [{'Down': [{'Left': [{'Right': [{'Up': [{'Down': [{'Left': [{'Right': ['Stop']}]}]}]}]}]}]}]}]}]}]}]}]}]}]}]}]}]}]}]}),\
        ])

print("Problem #2...")
try: analyse
except: print("The analyse() function is not defined.")
else: check(analyse, [\
    ([[{"formula": [["true"],["false"],["false"],["not", "(", "formula", ")"],["and", "(", "formula", ",", "formula", ")"],["or", "(", "formula", ",", "formula", ")"],["formula", "and", "formula"]]}]], 'Neither'),\
    ([[{"command": [["stop"],["go", "forward"],["go", "back"],["if", "condition", "then", "command"]]}, {"condition": [["true"],["false"]]}]], 'Backtracking'),\
    ([[{"bits": [["bit","bits"],["bit"]]}, {"bit": [["0"],["1"],["bit", "+", "bit"],["bit", "*", "bit"]]}]], 'Neither'),\
    ([[{"direction": [["up",";","direction"],["down",";","direction"],["left",";","direction"],["right",";","direction"],["end",";"]]}]], 'Predictive'),\
    ])

print("Problem #3...")
try: complete
except: print("The complete() function is not defined.")
else: check(complete, [\
    (["end;"], 'End'),\
    (["print true; end;"], {'Print': ['True', 'End']}),\
    (["assign x := 1; end;"], {'Assign': [{'Variable': ['x']}, {'Number': [1]}, 'End']}),\
    (["print true; print 123; end;"], {'Print': ['True', {'Print': [{'Number': [123]}, 'End']}]}),\
    (["print true; print 123; assign x := 123; end;"], {'Print': ['True', {'Print': [{'Number': [123]}, {'Assign': [{'Variable': ['x']}, {'Number': [123]}, 'End']}]}]}),\
    (["print not(true); print plus(log(4),99); assign x := 123; end;"], {'Print': [{'Not': ['True']}, {'Print': [{'Plus': [{'Log': [{'Number': [4]}]}, {'Number': [99]}]}, {'Assign': [{'Variable': ['x']}, {'Number': [123]}, 'End']}]}]}),\
    (["print not(true); assign y := 10; print plus(log(4),y); assign x := 123; print equal(x,y); end;"], {'Print': [{'Not': ['True']}, {'Assign': [{'Variable': ['y']}, {'Number': [10]}, {'Print': [{'Plus': [{'Log': [{'Number': [4]}]}, {'Variable': ['y']}]}, {'Assign': [{'Variable': ['x']}, {'Number': [123]}, {'Print': [{'Equal': [{'Variable': ['x']}, {'Variable': ['y']}]}, 'End']}]}]}]}]}),\
    (["assign y := 100; assign x := plus(mult(log(y),20),30); print and(less(x, y), or(equal(y, 200), false)); end;"], {'Assign': [{'Variable': ['y']}, {'Number': [100]}, {'Assign': [{'Variable': ['x']}, {'Plus': [{'Mult': [{'Log': [{'Variable': ['y']}]}, {'Number': [20]}]}, {'Number': [30]}]}, {'Print': [{'And': [{'Less': [{'Variable': ['x']}, {'Variable': ['y']}]}, {'Or': [{'Equal': [{'Variable': ['y']}, {'Number': [200]}]}, 'False']}]}, 'End']}]}]}),\
    (["assign a := 1; assign b := log(plus(mult(log(a),2),3)); print not(less(log(plus(mult(log(a),2),3)),log(plus(mult(log(a),2),3)))); print and(or(true,false), not(true)); end;"], {'Assign': [{'Variable': ['a']}, {'Number': [1]}, {'Assign': [{'Variable': ['b']}, {'Log': [{'Plus': [{'Mult': [{'Log': [{'Variable': ['a']}]}, {'Number': [2]}]}, {'Number': [3]}]}]}, {'Print': [{'Not': [{'Less': [{'Log': [{'Plus': [{'Mult': [{'Log': [{'Variable': ['a']}]}, {'Number': [2]}]}, {'Number': [3]}]}]}, {'Log': [{'Plus': [{'Mult': [{'Log': [{'Variable': ['a']}]}, {'Number': [2]}]}, {'Number': [3]}]}]}]}]}, {'Print': [{'And': [{'Or': ['True', 'False']}, {'Not': ['True']}]}, 'End']}]}]}]}),\
    ])    

#eof
