<?php

/* Given an integer n, return a string array answer (1-indexed) where:

answer[i] == "FizzBuzz" if i is divisible by 3 and 5.
answer[i] == "Fizz" if i is divisible by 3.
answer[i] == "Buzz" if i is divisible by 5.
answer[i] == i (as a string) if none of the above conditions are true.
 

Example 1:

Input: n = 3
Output: ["1","2","Fizz"]
Example 2:

Input: n = 5
Output: ["1","2","Fizz","4","Buzz"]
Example 3:

Input: n = 15
Output: ["1","2","Fizz","4","Buzz","Fizz","7","8","Fizz","Buzz","11","Fizz","13","14","FizzBuzz"]
 

Constraints:

1 <= n <= 104

*/

/* class Solution {

    /**
     * @param Integer $n
     * @return String[]
     * /
    function fizzBuzz($n) {
        $res = [];

        for($i = 1; $i<=$n; $i++)
        {   $res[$i] = '';
            if(($i % 3) == 0) $res[$i] .= "Fizz";
            if(($i % 5) == 0)  $res[$i] .= "Buzz";

            if ($res[$i] == '') $res[$i] = (string) $i;
            
        }
        return $res;
        
    } 
}*/



class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        
        return array_map( fn($v):string => $v % 3 === 0 ? ($v % 5 === 0 ? "FizzBuzz" : "Fizz") : ($v % 5 === 0 ? "Buzz" : $v) , array_combine(range(1, $n), range(1, $n)  ) );

    }

 /*    function fun($v) : string {
        return   $v % 3 === 0 ? ($v % 5 === 0 ? "FizzBuzz" : "Fizz") : ($v % 5 === 0 ? "Buzz" : $v);
    } */
}

 
 

$input = 15;

$sol = new Solution($input);
$res = $sol->fizzBuzz($input );

echo " 

";var_dump($res);
//print_r($input);