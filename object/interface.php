<?php

interface productInterface{
    // public function echoProduct(){
    //     echo '親クラスです';
    // }

    public function getProduct();
}

interface NewsInterface{
    // public function echoProduct(){
    //     echo '親クラスです';
    // }

    public function getNews();
}

class BaseProduct{
    public function echoProduct(){
        echo '親クラスです';
    }

    public function getProduct(){
        echo '親の関数です';
    }
}

class Product implements productInterface, NewsInterface {

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

    public function getNews(){
        echo 'ニュースです';
    }

    public static function getStaticProduct($str){
        echo $str;
    }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

// $instance->echoProduct();
// echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

$instance->getNews();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';