<?php
namespace helper;

class LeeCode
{
    //1990

    /*
      @param String $s
      @return String
    */
    public static function Solution1190($str)
    {
        //检查字符串：存在'('则调用工具方法1执行匹配
        while (strpos($str, '(') !== false) {
            $str = self::Solution1990_1($str);
        }
        return $str;
    }
    /*
      工具方法：输入一个字符串
        1.将最里层的括号内的字符串转置
        2.移除最里层的括号
        3.返回字符串
    */
    public static function Solution1990_1($str)
    {
        //用于存储括号信息(包括位置$position和类型$type)的栈
        $brackets = [];
        //遍历字符串，将 ‘(’ 和 ‘)’ 交 Solution1990_2处理
        for ($index=0;$index<strlen($str);$index++) {
            $bracketItem = [];
            //左括号：入栈
            if ($str[$index]=='(') {
                $brackets[] = $index;
            }
            
            //右括号：与前一个左括号执行转置
            if ($str[$index]==')') {
                $lastBracket = sizeof($brackets)-1;
                $leftPos = $brackets[$lastBracket];
                //第一段：从0截取到左括号(不含)
                $leftStr = substr($str, 0, $leftPos);
                //第二段：从上一个左括号截取到右括号并转置
                $midStr = strrev(substr($str, $leftPos+1, $index-$leftPos-1));
                //第三段：从右括号位置截取到末尾
                $rightStr = substr($str, $index+1);
                return $leftStr.$midStr.$rightStr;
            }
        }
    }
}
