---------------------------------------------------------------------
--
-- CAS CS 320, Fall 2015
-- Assignment 5 (skeleton code)
-- BinPacking.hs
--

module BinPacking where

import Graph
import Algorithm

type Item = Integer
type Bin = Integer

data BinPacking =
    BinPack Bin Bin [Item]
  deriving (Eq, Show)


-- instance Ord BinPacking where
--   ... Complete for Problem #1, part (a) ...

-- instance State BinPacking where
--   ... Complete for Problem #1, part (b) ...  


--eof