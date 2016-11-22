<?php

// +----------------------------------------------------------------------
// | algorithm [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2016 http://github.com/m809745357/algorithm All rights reserved.
// +----------------------------------------------------------------------
// | Author: shenyifei <809745357@qq.com>
// +----------------------------------------------------------------------
// | Description: 判断一个正整数是否是2的乘方（比如16是2的4次方，返回true；18不是2的乘方，返回false），要求性能尽可能高。
// | Tips: 实现一个方法，求出一个正整数转换成二进制后的数字"1"的个数，要求新能尽可能高。
// +----------------------------------------------------------------------

/**
 * @author shenyifei <809745357@qq.com>
 * @link http://blog.jobbole.com/107689/ 玻璃猫@伯乐在线专栏作者
 */
class Algorithm {

    /**
     * 初始化数字
     * @var type 
     */
    private $number;

    /**
     * 构造方法
     * @param type $number
     */
    public function __construct($number = '') {
        $this->number = $number;
    }

    /**
     * 判断是否是2的乘方
     * Judging by the power of 2
     * @param type $number
     * @return integer
     */
    public function isPowerOf2($number = '') {
        $number = empty($number) ? $this->number : $number;
        return ($number & ( $number - 1 )) == 0;
    }

    /**
     * 二进制后的数字"1"的个数
     * 2 binary number 1
     * @param type $number
     * @return boolean
     */
    public function binaryNumber1($number = '') {
        $number = empty($number) ? $this->number : $number;
        $n = 0;
        while ($number !== 0) {
            $number = ($number & ( $number - 1 ));
            $n += 1;
        }

        return $n;
    }

}

$algorithm = new Algorithm(100);
echo $algorithm->number . "是否为2的乘方：" . ($algorithm->isPowerOf2() ? "是" : "否");
echo "<br/>";
echo $algorithm->number . "二进制后的数字1的个数：" . $algorithm->binaryNumber1();
?>
