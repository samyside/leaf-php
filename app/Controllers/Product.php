<?php


class Product {

  public function __construct(
    public int $id,
    public string $name='',
    public int $price=0,
    public string $category=''
  ) {}
}

$product = new Product(123);
print_r($product);
