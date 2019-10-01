---------------------------------------------------------------------
--
-- CAS CS 320, Spring 2015
-- Assignment 5 (skeleton code)
-- Allocation.hs
--

module Allocation where

type Item = Integer
type Bin = Integer

data Alloc = Alloc Bin Bin deriving (Eq, Show)

data Graph a =
    Branch a (Graph a) (Graph a) 
  | Finish a
  deriving (Eq, Show)

type Strategy = Graph Alloc -> Graph Alloc

-- instance Ord a => Ord (Graph a) where
--   ...

--eof