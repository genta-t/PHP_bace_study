<?php

abstract class productAbstract{
    public function echoProduct(){
        echo '親クラスです';
    }

    abstract public function getProduct();
}

class BaseProduct{
    public function echoProduct(){
        echo '親クラスです';
    }

    public function getProduct(){
        echo '親の関数です';
    }
}

class Product extends productAbstract{

    private $product = [];

    function __construct($product)
    {
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    public static function getStaticProduct($str){
        echo $str;
    }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

$instance->echoProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';