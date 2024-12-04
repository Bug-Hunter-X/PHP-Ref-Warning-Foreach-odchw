# PHP Foreach Loop Pass-by-Reference Issue

This repository demonstrates a common, yet subtle, issue in PHP involving the use of pass-by-reference in `foreach` loops.  When modifying array elements within a `foreach` loop using pass-by-reference,  PHP will issue a warning if you attempt to pass a value that is not a variable. 

The `bug.php` file contains the problematic code, and `bugSolution.php` provides a corrected version.

## Problem
The problem arises when using pass-by-reference (&) within a foreach loop with array elements that are not variables (e.g., literal values).  PHP issues a warning indicating that only variables should be passed by reference.

## Solution
The solution is to ensure that you are only passing variables by reference in the foreach loop or avoid pass-by-reference completely if not modifying the array in place.  The corrected code uses a `for` loop for a clearer and safer modification approach.