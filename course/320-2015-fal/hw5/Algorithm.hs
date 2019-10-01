---------------------------------------------------------------------
--
-- CAS CS 320, Fall 2015
-- Assignment 5 (skeleton code)
-- Algorithm.hs
--

module Algorithm where

import Graph

type Algorithm a = Graph a -> Graph a


-- Complete Problem #4, parts (a-f).


-- Problem #4, part (g).
impatient :: Ord a => Integer -> Algorithm a
impatient n g = (metaRepeat n greedy) g



---------------------------------------------------------------------
-- Problem #6 (extra extra credit).

-- An embedded language for algorithms.
data Alg =
    Greedy
  | Patient Integer
  | Impatient Integer
  | Optimal
  | MetaCompose Alg Alg
  | MetaRepeat Integer Alg
  | MetaGreedy Alg Alg
  deriving (Eq, Show)

interpret :: (State a, Ord a) => Alg -> Algorithm a
interpret _ = \g -> g -- Replace for Problem #6, part (a).

data Time =
    N Integer 
  | Infinite
  deriving (Eq, Show)

-- instance Num Time where
--   ... Complete for Problem #6, part (b).

performance :: Alg -> Time
performance _ = N 0 -- Replace for Problem #6, part (c).

--eof