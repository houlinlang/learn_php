<?php
namespace leecode;

class Solution461
{
    /*
      @param Integer $x
      @param Integer $y

      求两数二进制写法中不同的位数：


      @return Integer
    */
    public static function hammingDistance($x, $y)
    {
        //按位异或运算：同则0，异则1,统计1
        return substr_count(decbin($x ^ $y), "1");
    }
}
