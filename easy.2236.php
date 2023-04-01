<?php


/* 2236. Root Equals Sum of Children
Easy
799
1.1K
Companies
You are given the root of a binary tree that consists of exactly 3 nodes: the root, its left child, and its right child.

Return true if the value of the root is equal to the sum of the values of its two children, or false otherwise.

Constraints:

The tree consists only of the root, its left child, and its right child.
-100 <= Node.val <= 100

Input: root = [10,4,6]

 */


/**
 * Definition for a binary tree node.
 */

 
class TreeNode {
      public $val = null;
      public $left = null;
      public $right = null;
      function __construct($val = 0, $left = null, $right = null) {
          $this->val = $val;
          $this->left = $left;
          $this->right = $right;
      }
  }

class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function checkTree($root) {
        if($root->val == $root->left->val +$root->right->val) return true;
        else return false;
    }
}

$input = new TreeNode(10,new TreeNode(4),new TreeNode(6));

$sol = new Solution($input);
$res = $sol->checkTree($input );

var_dump($res);
print_r($input);
