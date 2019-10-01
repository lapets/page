import re

############################################################
# Load the files to test. Change the paths if necessary.
exec(open('parse.py').read())
exec(open('interpret.py').read())
exec(open('machine.py').read())
exec(open('compile.py').read())

def check(function, inputs_result_pairs):
    passed = 0
    for (inputs, result) in inputs_result_pairs:
        output = function(inputs[0], inputs[1]) if len(inputs) == 2 else function(inputs[0])
        if output == result: passed = passed + 1
        else: print("Failed on list of inputs:\n"+str(inputs)+"\n")
    print("Passed " + str(passed) + " of " + str(len(inputs_result_pairs)) + " tests.")
    print("")

############################################################
# The tests.

print("Problem #1, interpret()...")
try: interpret
except: print("The interpret() function is not defined.")
else: check(interpret, [\
    (["print 123;"], [123]),\
    (["print false; print true; print 4;"], ['False', 'True', 4]),\
    (["x := 10; print x;"], [10]),\
    (["x := 10; print x + x;"], [20]),\
    (["x := 1; y := 2; z := 3; print x + y + z;"], [6]),\
    (["print true and false;"], ['False']),\
    (["x := true or false; print x;"], ['True']),\
    (["x := true or false; print x and not(x);"], ['False']),\
    (["x := true; y := false; z := true; print (not(x) or y) and z;"], ['False']),\
    (["if true {print 4;}"], [4]),\
    (["if true {print true;} print false;"], ['True','False']),\
    (["x := true; while not(x) {print false;} print true;"], ['True']),\
    (["if true {print true;} print false;"], ['True','False']),\
    (["procedure f { } print 4;"], [4]),\
    (["procedure example {print 4;} call example;"], [4]),\
    (["x := 123; procedure example {print x;} call example; call example;"], [123,123]),\
    (["procedure g {print 2;} procedure f {call g; print 1; call g;} call f;"], [2,1,2]),\
    (["procedure g {print 2;} if true and true { call g; }"], [2]),\
    (["procedure g {print 2;} procedure f {if true and true { call g; }} call g; call f;"], [2,2]),\
    (["procedure h {print 3;} procedure g {print 2; call h; call h;} procedure f {call g; print 1; call g;} call f;"], [2,3,3,1,2,3,3])\
    ])

print("Problem #3, part (d), compile()...")
try: compile
except: print("The compile() function is not defined.")
else: check(lambda s: simulate(compile(s)), [\
    (["print 123;"], [123]),\
    (["print false; print true; print 4;"], [0, 1, 4]),\
    (["x := 10; print x;"], [10]),\
    (["x := 10; print x + x;"], [20]),\
    (["x := 1; y := 2; z := 3; print x + y + z;"], [6]),\
    (["print true and false;"], [0]),\
    (["x := true or false; print x;"], [1]),\
    (["x := true or false; print x and not(x);"], [0]),\
    (["x := true; y := false; z := true; print (not(x) or y) and z;"], [0]),\
    (["if true {print 4;}"], [4]),\
    (["if true {print true;} print false;"], [1,0]),\
    (["x := true; while not(x) {print false;} print true;"], [1]),\
    (["if true {print true;} print false;"], [1,0]),\
    (["procedure f { } print 4;"], [4]),\
    (["procedure example {print 4;} call example;"], [4]),\
    (["x := 123; procedure example {print x;} call example; call example;"], [123,123]),\
    (["procedure g {print 2;} procedure f {call g; print 1; call g;} call f;"], [2,1,2]),\
    (["procedure g {print 2;} if true and true { call g; }"], [2]),\
    (["procedure g {print 2;} procedure f {if true and true { call g; }} call g; call f;"], [2,2]),\
    (["procedure h {print 3;} procedure g {print 2; call h; call h;} procedure f {call g; print 1; call g;} call f;"], [2,3,3,1,2,3,3])\
    ])

#eof
