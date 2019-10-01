---------------------------------------------------------------------
--
-- CAS CS 320, Fall 2015
-- Assignment 5 (skeleton code)
-- Graph.hs
--

module Graph where

data Graph a =
    Choices a (Graph a, Graph a)
  | Outcome a
  deriving (Eq, Show)

class State a where
  outcome :: a -> Bool
  choices :: a -> (a, a)


--mapTuple :: (a -> b) -> (a, a) -> (b, b)
--  ... Complete for Problem #3, part (a) ...

--state :: (Graph a) -> a
--  ... Complete for Problem #3, part (b) ...


-- If states can be compared, then graphs containing
-- those states can be compared by comparing the
-- states in the respective root nodes.
instance Ord a => Ord (Graph a) where
  g <  g' = False -- Complete for Problem #3, part (c).


-- Complete Problem #3, parts (d-g).


--eof