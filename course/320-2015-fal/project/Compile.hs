module Compile where

import Error
import AbstractSyntax
import TypeCheck
import Machine

convert :: Value -> Integer
convert b = -1 -- Complete for Problem 4, part (a).

converts :: Output -> Buffer
converts os = [] -- Complete for Problem 4, part (a).

type AddressEnvironment = [(Var, Address)]

addressVar :: Var -> AddressEnvironment -> Address
addressVar x' ((x,a):xas) = if x == x' then a else addressVar x' xas

class Compilable a where
  compile :: AddressEnvironment -> a -> [Instruction]

instance Compilable Exp where
  compile env _ = [] -- Complete for Problem 3, part (a).

instance Compilable Stmt where
  compile env (End) = []
  compile env _     = [] -- Complete for Problem 3, part (a).

compileSimulate  :: Stmt -> ErrorOr Buffer
compileSimulate s = TypeError "Complete for Problem 3, part (b)."

--eof