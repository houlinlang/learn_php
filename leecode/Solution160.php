<?php
namespace leecode;

class Solution160
{
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    public function getIntersectionNode($h, $headA, $headB)
    {
        if ($h == 0) {
            return null;
        } else {
            return "Intersected at '".$h."'";
        }
        // if (is_integer($headA)) {
        //     $A = [$headA];
        // } else {
        //     $A = $headA;
        // }
        // if (is_integer($headB)) {
        //     $B = [$headB];
        // } else {
        //     $B = $headB;
        // }
        // foreach ($A as $a) {
        //     foreach ($B as $b) {
        //         if ($a == $b) {
        //             echo "Intersected at '".$a."'";
        //         }
        //     }
        // }
        // echo null;
    }
}
