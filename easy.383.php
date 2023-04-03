<?php

/* Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.

Each letter in magazine can only be used once in ransomNote.

 

Example 1:

Input: ransomNote = "a", magazine = "b"
Output: false
Example 2:

Input: ransomNote = "aa", magazine = "ab"
Output: false
Example 3:

Input: ransomNote = "aa", magazine = "aab"
Output: true
 

Constraints:

1 <= ransomNote.length, magazine.length <= 105
ransomNote and magazine consist of lowercase English letters.
*/

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {

        for($i = 0; $i < strlen($ransomNote); $i++ )
        {
            $letter = substr($ransomNote, $i, 1);
            $pos = strpos($magazine, $letter );

            if($pos !== false) {
                $magazine = substr($magazine, 0, $pos ). substr($magazine, $pos+1);
            }
            else{ return false;}
        } 
        return true;
    }
}


$input1 = 'aca';
$input2 = 'acccb';


$sol = new Solution();
$res = $sol->canConstruct($input1, $input2 );

var_dump($res);