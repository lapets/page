module Interpret where

import Error
import AbstractSyntax
import TypeCheck

type ValueEnvironment = [(Var, Value)]

valueVar :: Var -> ValueEnvironment -> Value
valueVar x' ((x,v):xvs) = if x == x' then v else valueVar x' xvs

evaluate :: ValueEnvironment -> Exp -> Value
evaluate env _ = False -- Complete for Problem 2, part (b).

execute :: ValueEnvironment -> Stmt -> (ValueEnvironment, Output)
execute env _ = (env, []) -- Complete for Problem 2, part (b).

interpret :: Stmt -> ErrorOr Output
interpret s = TypeError "Complete for Problem 2, part (c)."

--eof