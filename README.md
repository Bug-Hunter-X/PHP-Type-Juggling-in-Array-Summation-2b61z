# PHP Type Juggling Bug
This repository demonstrates a common, yet subtle, bug in PHP related to type juggling during array summation.  The `calculateSum` function attempts to sum an array containing both integers and a string.  Due to PHP's weak typing, the string is implicitly converted to an integer which causes unexpected behavior. 

## How to Reproduce
1. Clone the repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output of the summation.

## Solution
The solution involves explicit type checking or using a stricter approach to handle potentially non-numeric elements within the array.