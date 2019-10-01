module Error where

data ErrorOr a =
    Result a
  | ParseError String
  | TypeError String
  deriving Show

promote :: ErrorOr a -> ErrorOr b
promote (ParseError s     ) = ParseError s
promote (TypeError s      ) = TypeError s

--instance Eq a => Eq (ErrorOr a) where
-- Complete for Problem 1, part (a).

--liftErr :: (a -> b) -> (ErrorOr a -> ErrorOr b)
-- Complete for Problem 1, part (b).

--joinErr :: ErrorOr (ErrorOr a) -> ErrorOr a
-- Complete for Problem 1, part (b).

--eof