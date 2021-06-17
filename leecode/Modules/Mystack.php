<?php

namespace leecode\Modules;

/*
  Solution 225: 用队列实现栈

  请你仅使用两个队列实现一个后入先出（LIFO）的栈，并支持普通队列的全部四种操作（push、top、pop 和 empty）。

  实现 MyStack 类：
    void push(int x) 将元素 x 压入栈顶。
    int pop() 移除并返回栈顶元素。
    int top() 返回栈顶元素。
    boolean empty() 如果栈是空的，返回 true ；否则，返回 false 。

  注意：
    你只能使用队列的基本操作 —— 也就是 push to back、peek/pop from front、size 和 is empty 这些操作。
    你可以使用 list （列表）或者 deque（双端队列）来模拟一个队列 , 只要是标准的队列操作即可。

*/
class Mystack
{
    //用于保存栈内元素
    private $list;
    //用于辅助入栈操作
    private $buffer;

    public function __construct()
    {
        /*
          初始化空的队列
        */
        $this->list = [];   //主队列：用于保存栈内的元素
        $this->buffer = []; //缓冲队列：用于实现入栈操作
    }

    /**
    * Push element x onto stack.
    * 入栈操作：$x 压入栈顶
      这一步中入栈后实现的效果是：入栈的元素存在于队列顶部，实现栈的后入先出
    * @param Integer $x
    * @return NULL
    */
    public function push($x)
    {
        // 1. 将主队列内的全部元素依次（从头部）取出压入辅助队列队尾
        while (!empty($this->list)) {
            //取出 $list 头一个元素
            $obj = array_shift($this->list);
            //元素入 $buffer 尾
            array_push($this->buffer, $obj);
        }

        // 2. 将 目标元素$x 压入主队列队尾
        array_push($this->list, $x);
        

        // 3. 将缓冲队列内的元素依次（从头部）取出，压入主队列队尾
        while (!empty($this->buffer)) {

            //取出 $buffer 头一个元素
            $obj = array_shift($this->buffer);
            //元素入 $list 尾
            array_push($this->list, $obj);
        }
    }

    /**
     * Removes the element on top of the stack and returns that element.
     * 移除并返回栈顶的元素
     * @return Integer
     */
    public function pop()
    {
        //直接取主队列头元素
        return array_shift($this->list);
    }

    /**
     * Get the top element.
     * 返回栈顶的元素
     * @return Integer
     */
    public function top()
    {
        //取头元素：
        $item = array_shift($this->list);
        //头元素重新入栈：
        $this->push($item);
        //返回头元素
        return $item;
    }

    /**
     * Returns whether the stack is empty.
     * 检查栈是否为空
     * @return Boolean
     */
    public function empty()
    {
        return empty($this->list);
    }
}
