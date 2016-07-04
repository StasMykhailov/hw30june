<?php
/**
 * Created by PhpStorm.
 * User: Stas
 * Date: 04.07.2016
 * Time: 14:32
 */
class Triangle extends Line{
    private $x3;
    private $y3;
    function __construct($x1, $y1, $x2, $y2, $x3, $y3){
        parent::__construct($x1, $y1, $x2, $y2);
        $this->setX3($x3);
        $this->setY3($y3);
    }
    public function setX3($x3){
        $this->x3 = intval($x3);
    }
    public function setY3($y3){
        $this->y3 = intval($y3);
    }
    public function getX3(){
        return $this->x3;
    }
    public function getY3(){
        return $this->y3;
    }
    public function display(){
        parent::display();
        echo "X3: " . $this->x3 ." ; Y3: " . $this->y3 .'</br>';
    }
}
