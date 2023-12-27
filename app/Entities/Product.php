<?php

namespace App\Entities;

class Product {
  public int $id;
  public string $name;
  public Brand $brand;
  public string $category;
  public string $price;
}
