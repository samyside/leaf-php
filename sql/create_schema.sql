DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS products;

CREATE TABLE "categories" (
  "id"  INTEGER,
  "name"  INTEGER NOT NULL,
  PRIMARY KEY("id" AUTOINCREMENT)
)

CREATE TABLE "products" (
  "id"  INTEGER,
  "name"  TEXT NOT NULL,
  "price" INTEGER NOT NULL,
  "category_id" INTEGER,
  FOREIGN KEY("category_id") REFERENCES "categories"("id"),
  PRIMARY KEY("id" AUTOINCREMENT)
)
