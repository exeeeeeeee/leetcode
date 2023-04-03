<?php


/*876. Middle of the Linked List
 
Given the head of a singly linked list, return the middle node of the linked list.

If there are two middle nodes, return the second middle node.

 

Example 1:


Input: head = [1,2,3,4,5]
Output: [3,4,5]
Explanation: The middle node of the list is node 3.
Example 2:


Input: head = [1,2,3,4,5,6]
Output: [4,5,6]
Explanation: Since the list has two middle nodes with values 3 and 4, we return the second one.
 

Constraints:

The number of nodes in the list is in the range [1, 100].
1 <= Node.val <= 100

*/
class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val = 0, $next = null) {
          $this->val = $val;
          $this->next = $next;
      }
}
 


class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
       $cur = $head;
       
        while ( !is_null( $cur->next) )
        {
            $values[] = $cur; 
            $cur = $cur->next;
        }
        $values[] = $cur; 

        $mid =  (count($values)%2 == 0) ? count($values)/2+1 : ceil(count($values)/2);

        return $values[ $mid];

    }
}

$input = new ListNode(1,new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5 )))));

$sol = new Solution($input);


//var_dump($res);
 print_r($input);
 
 $res = $sol->middleNode($input );