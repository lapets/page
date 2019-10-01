---------------------------------------------------------------------
--
-- CAS CS 320, Fall 2015
-- Assignment 4 (skeleton code)
-- Interpret.hs
--

type Value = Integer
type Output = [Value]

data Term =
    Number Integer
  | Plus Term Term
  | Mult Term Term
  | Exponent Term Term
  | Max Term Term
  | Min Term Term

data Stmt =
    Print Term Stmt
  | End

evaluate :: Term -> Value
evaluate _ = 0 -- Modify and complete for Problem 4, part (a).

execute :: Stmt -> Output
execute _ = [] -- Modify and complete for Problem 4, part (b).

--eof