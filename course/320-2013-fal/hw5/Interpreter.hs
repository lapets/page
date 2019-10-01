module Interpreter where

data Exp =
    Value Value 
  | Var String
  | Plus Exp Exp
  | Not Exp
  | And Exp Exp
  | Or Exp Exp
  deriving (Eq, Show)

data Stmt =
    Print Exp Stmt
  | Assign String Exp Stmt
  | End
  deriving (Eq, Show)
  
data Value =
    Number Integer
  | T
  | F
  deriving (Eq, Show)
  
type Output = [Value]



--eof