<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) {
        $this->val = $val;
        $this->next = null;
    }
}

function hasCycle($head) {
    $slow = $head;
    $fast = $head;
    
    while ($fast != null && $fast->next != null) {
        $slow = $slow->next;
        $fast = $fast->next->next;
        
        if ($slow == $fast) {
            return true;
        }
    }
    
    return false;
}

// Sample input
$head = new ListNode(3);
$head->next = new ListNode(2);
$head->next->next = new ListNode(0);
$head->next->next->next = new ListNode(-4);
$head->next->next->next->next = $head->next; // connect tail to the second node

// Test the algorithm
if (hasCycle($head)) {
    echo "The linked list is cyclic";
} else {
    echo "The linked list is not cyclic";
}
?>
