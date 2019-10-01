module TypeCheck where

import Error
import AbstractSyntax

type TypeEnvironment = [(Var, Type)]

typeVar :: Var -> TypeEnvironment -> ErrorOr Type
typeVar x' ((x,t):xvs) = if x == x' then Result t else typeVar x' xvs
typeVar x'  _          = TypeError (show x' ++ " is not bound.")

class Typeable a where
  check :: TypeEnvironment -> a -> ErrorOr Type

instance Typeable Stmt where
  check _   _      = TypeError "Complete this definition for Problem 2, part (a)."

instance Typeable Exp where
  check _   _      = TypeError "Complete this definition for Problem 2, part (a)."

typeCheck :: Typeable a => a -> ErrorOr (a, Type)
typeCheck ast = liftErr (\t -> (ast, t)) (check [] ast) -- Pair result with its type.

--eof