<?php

require_once 'processData/configurationManager.php';

$config = ConfigurationManager::readConfig();

// Create connection
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['tableName']);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

class ProductInserter {
    public function insertProducts($conn, $products) {
        $stmt = $conn->prepare('INSERT INTO products (entity_Id, category_name, sku, name, short_desc, price, link, image, brand, rating, caffeine_type, count, flavored, Seasonal, in_stock, facebook, is_k_cup) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        
        foreach ($products as $product) {
            $stmt->bind_param('issssssssssissssi',
                $product->entityId,
                $product->categoryName,
                $product->sku,
                $product->name,
                $product->shortDesc,
                $product->price,
                $product->link,
                $product->image,
                $product->brand,
                $product->rating,
                $product->caffeineType,
                $product->count,
                $product->flavored,
                $product->Seasonal,
                $product->inStock,
                $product->facebook,
                $product->isKCup);
            $stmt->execute();
        }
    }
}
?>