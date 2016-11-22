<?php

// +----------------------------------------------------------------------
// | algorithm [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2016 http://github.com/m809745357/algorithm All rights reserved.
// +----------------------------------------------------------------------
// | Author: shenyifei <809745357@qq.com>
// +----------------------------------------------------------------------
// | Description: 实现一个栈，带有出栈（pop），入栈（push），取最小元素（getMin）三个方法。要保证这三个方法时间复杂度都是O(1)
// +----------------------------------------------------------------------

/**
 * @author shenyifei <809745357@qq.com>
 * @link http://blog.jobbole.com/106940/ 玻璃猫@伯乐在线专栏作者
 * @todo 这边使用数组来描述栈
 */
class Algorithm {

    /**
     * 模拟堆栈A
     * @var type 
     */
    private $dataArr = array();

    /**
     * 模拟堆栈B，辅助堆栈A并存储最小值
     * @var type 
     */
    private $minArr = array();

    /**
     * 下标
     * @var type 
     */
    private $top = -1;

    /**
     * 出栈
     * @return boolean
     */
    public function pop() {
        if ($this->top === -1) {
            return false;
        }
        
        array_pop($this->minArr);
        $this->top --;
        return array_pop($this->dataArr);
    }

    /**
     * 入栈
     * @param type $number
     */
    public function push($number = '') {
        $number = intval($number);
        if ($this->top === -1) {
            array_push($this->dataArr, $number);
            array_push($this->minArr, $number);
            $this->top ++;
            return true;
        }
        $min = $this->minArr[$this->top];
        $currentMin = $number <= $min ? $number : $min;
        array_push($this->dataArr, $number);
        array_push($this->minArr, $currentMin);
        $this->top ++;
        return true;
    }

    /**
     * 求最小值
     * @return boolean
     */
    public function getMin() {
        if ($this->top === -1) {
            return false;
        }
        return $this->minArr[$this->top];
    }

}

$algorithm = new Algorithm();
$algorithm->push(10);
$algorithm->push(28);
$algorithm->push(50);
$algorithm->push(14);
$algorithm->push(3);
var_dump($algorithm->getMin());
$algorithm->pop();
var_dump($algorithm->getMin());
$algorithm->push(16);
var_dump($algorithm->getMin());
?>
