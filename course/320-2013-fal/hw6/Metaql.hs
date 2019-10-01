module Metaql where

import Tree

data Exp =
    Plus Exp Exp
  | Conc Exp Exp
  | S String
  | N Integer
  deriving (Eq, Show)

data Stmt =
    Print Exp Stmt
  | End
  deriving (Eq, Show)
  
data Type =
    TyStr
  | TyInt
  | TyVoid
  deriving (Eq, Show)

instance Num Exp where
  fromInteger n = N n
  e1 + e2 = Plus e1 e2



--eof