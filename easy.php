<?php
/**
 * @author shenyifei <809745357@qq.com>
 * @version 0.0.1
 * @todo A Algorithm that is an idiot
 */
class Algorithm{

    /**
     * [__construct description]
     */
    public function __construct(){
        
    }

    /**
     * Algorithm main entrance
     * @param  [type] $index  [description]
     * @param  [type] $counts [description]
     * @return [type]         [description]
     */
    public function main($index, $counts){
    	for ($i=1; $i < $index-1; $i++) { 
    			$red[$i] = round(rand(0, $counts * 100) / 100,2);
    			$counts = round($counts - $red[$i],2);
    	}
			$red[$index] = $counts;
    	return $red;
    }
}

$algorithm = new Algorithm();
$red = $algorithm->main(10,50);
var_dump($red);
?>