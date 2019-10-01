---------------------------------------------------------------------
--
-- CAS CS 320, Fall 2015
-- Assignment 5 (skeleton code)
-- SuperString.hs
--

module SuperString where

import Data.List (isPrefixOf)
import Graph
import Algorithm

data SuperString =
    SuperStr String [String]
  deriving (Eq, Show)

-- To merge two strings, take the longest suffix of the first string
-- that overlaps with the second, and replace it with the second string.
merge :: String -> String -> String
merge (x:xs) ys  = if isPrefixOf (x:xs) ys then ys else x:(merge xs ys)
merge []     ys  = ys


-- instance Ord SuperString where
--   ... Complete for Problem #2, part (a) ...

-- instance State SuperString where
--   ... Complete for Problem #2, part (b) ...  


--eof