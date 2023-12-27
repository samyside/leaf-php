<?php

namespace App\Entities;

class Brand {
  public int $id;
  public string $name;
  public string $official_name;
  public BrandManager $brand_manager;
}
