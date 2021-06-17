<?php

namespace leecode;

class Solutions
{
    /**
      Solution65 有效数字

      有效数字（按顺序）可以分成以下几个部分：
        * 一个 小数 或者 整数
        * （可选）一个 'e' 或 'E' ，后面跟着一个 整数

      小数（按顺序）可以分成以下几个部分：
        *（可选）一个符号字符（'+' 或 '-'）
        * 下述格式之一：
            - 至少一位数字，后面跟着一个点 '.'
            - 至少一位数字，后面跟着一个点 '.' ，后面再跟着至少一位数字
            - 一个点 '.' ，后面跟着至少一位数字

        整数（按顺序）可以分成以下几个部分：
        * （可选）一个符号字符（'+' 或 '-'）
        * 至少一位数字
    */
    public static function isNumber($s)
    {
    }

    /*
      !!!只能从两端取！这道题做错了

      Solution 877 石子游戏
      亚历克斯和李用几堆石子在做游戏。偶数堆石子排成一行，每堆都有正整数颗石子 piles[i] 。
      游戏以谁手中的石子最多来决出胜负。石子的总数是奇数，所以没有平局。
      亚历克斯和李轮流进行，亚历克斯先开始。 每回合，玩家从行的开始或结束处取走整堆石头。 这种情况一直持续到没有更多的石子堆为止，此时手中石子最多的玩家获胜。
      假设亚历克斯和李都发挥出最佳水平，当亚历克斯赢得比赛时返回 true ，当李赢得比赛时返回 false 。

      @param Integer[] $piles
      @return Boolean
    */
    public static function stoneGame($piles)
    {
        //1.声明回合数&两位玩家手中石子的数量
        $turn = 1;    //记录回合
        $player1 = 0; //亚托克斯
        $player2 = 0; //李

        //2.存在石子则游戏继续
        while (sizeof($piles) > 0) {
            echo "新一轮游戏：<br>";
            var_dump($piles);
            echo "<br>";
            //2.1. 逐个检查石子堆,找到最大的
            $check = 0;
            foreach ($piles as $index=>$pile) {
                if ($piles[$index]>$piles[$check]) {
                    $check = $index;
                }
            }
            //2.2. 将石子堆给到当前回合的玩家
            if ($turn == 1) {
                $player1 += $piles[$check];
                $turn = 2;
            } else {
                $player2 += $piles[$check];
                $turn = 1;
            }
            //2.3. 石子堆被拿走了
            unset($piles[$check]);
        }

        //3.返回结果
        $result = $player1>$player2 ? true : false;
        echo "亚托克斯："."$player1"."<br>";
        echo "李"."$player2"."<br>";

        return $result;
    }
}
