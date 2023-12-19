<?php

class ProductAttribute {
  public function __construct(
    private int product_id,
    private int attribute_id,
    private string attribute_name,
    private string value
  ) {}
  public static function init(int $product_id): ProductAttribute {
    $sql = "
      SELECT
        *
      FROM prod_res, products
      WHERE
        prod_res.product_id = products.id
    ";
    $result = Database::querySelect($sql);
    $this->product_id = $result->rows['name'];
    $this->attribute_id = $result->rows['attribute_id'];
  }
}
