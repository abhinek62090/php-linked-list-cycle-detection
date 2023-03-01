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
$head = new ListNode(0);
$head->next = new ListNode(1);
$head->next->next = $head->next; // connect tail to the first node

// Test the algorithm
if (hasCycle($head)) {
    echo "The linked list is cyclic";
} else {
    echo "The linked list is not cyclic";
}
?>
