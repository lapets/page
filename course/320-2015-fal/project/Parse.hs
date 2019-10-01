module Parse where

import Error
import AbstractSyntax

type Token = String

tokenize :: String -> [Token]
tokenize s =
  let splits = [0] ++ concat [[i,i+1] | i <- [0..length s-1], s!!i `elem` " "] ++ [length s]
      all = [ [s!!i | i <- [splits!!k..(splits!!(k+1)-1)]] | k <- [0..length splits-2] ]
  in [token | token <- all, token /= " " && token /= ""]

parser :: (Exp -> Exp) -> ([Token] -> ErrorOr (Exp, [Token]))
parser f ts =
  case parse ts of
    (Result (e, ts)) -> Result (f e, ts)
    (err           ) -> err

parsers :: (Exp -> Stmt -> Stmt) -> ([Token] -> ErrorOr (Stmt, [Token]))
parsers f ts =
  case parse ts of
    (Result (e, ts)) ->
      case parse ts of
        (Result (s, ts)) -> Result (f e s, ts)
        (err           )-> err
    (err           ) -> promote err

class Parseable a where
  parse :: [Token] -> ErrorOr (a, [Token])

instance Parseable Exp where
  parse ("x":ts) = Result (Variable X, ts)

  -- Add more short cases to complete the parser for Problem 1, part (e).

  parse (t:_   ) = ParseError ("Token '" ++ t ++ "' a not valid way to begin an expression.")
  parse _        = ParseError ("Failed to parse expression.")

instance Parseable Stmt where
  parse ("x":("=":ts)) = parsers (Assign X) ts

  -- Add more short cases to complete the parser for Problem 1, part (e).
  
  parse (t:_)          = ParseError ("Token '" ++ t ++ "' a not valid way to begin a statement.")
  parse []             = Result (End, [])

tokenizeParse :: String -> ErrorOr Stmt
tokenizeParse s = ParseError "Complete this definition for Problem 1, part (f)."

-- Examples of concrete syntax strings being parsed.
example1 = parse (tokenize "x = x   x = x   x = x") :: ErrorOr (Stmt, [Token])
example2 = parse (tokenize "x = True y = False print x and y") :: ErrorOr (Stmt, [Token])

--eof