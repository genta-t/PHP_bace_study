<?php

trait ProductTrait
{
    public function getProduct()
    {
        echo 'プロダクト';
    }
}

trait NewTrait
{
    public function getNews()
    {
        echo 'ニュース';
    }
}

class Product
{
    use ProductTrait;
    use NewTrait;

    public function getInformation()
    {
        echo 'クラスです';
    }

    // public function getNews()
    // {
    //     echo 'クラスのニュース';
    // }
}

$product = new Product();

$product->getInformation();
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';
