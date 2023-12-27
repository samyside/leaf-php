<?php

class DatabaseSqlite {
  private string $path;

  public function __construct(
    private string $path
  ) {}

  public static function query(string $sql, array $params) {
    
  }
}
