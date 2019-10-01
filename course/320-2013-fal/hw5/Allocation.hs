module Allocation where

type Item = Integer
type Bin = Integer

data Alloc = Alloc Bin Bin deriving (Eq, Show)

data Graph =
    Branch Alloc Graph Graph 
  | Finish Alloc
  deriving (Eq, Show)

type Strategy = Graph -> Graph



--eof