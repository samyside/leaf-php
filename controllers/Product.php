<?php


class Product {

  public function __construct(
    private int $id,
    private string $name,
    private int $price
  ) {}

  public function setName(string $name): void {
    $this->name = $name;
  }
  public function setPrice(string $price): void {
    $this->price = $price;
  }
  
}
