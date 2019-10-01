module AbstractSyntax where

type Value = Bool
type Output = [Value]

data Var = X | Y deriving Eq

instance Show Var where
  show X = "x"
  show Y = "y"

data Stmt =
    Print Exp Stmt
  | Assign Var Exp Stmt
  | End
  deriving (Eq, Show)

data Exp =
    Variable Var
  | Value Bool
  | And Exp Exp
  | Or Exp Exp
  deriving (Eq, Show)

data Type =
    TyBool
  | TyVoid
  deriving (Eq, Show)

--fold :: (Var -> b) -> (Bool -> b) -> (b -> b -> b) -> (b -> b -> b) -> Exp -> b
-- Complete for Problem 1, part (c).

--size :: Exp -> Integer
-- Complete for Problem 1, part (c).

--eof