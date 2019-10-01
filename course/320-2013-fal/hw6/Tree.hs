module Tree where

data Tree a =
    Node (Tree a) (Tree a)
  | Leaf a
  | Empty
  deriving (Eq, Show)



--eof