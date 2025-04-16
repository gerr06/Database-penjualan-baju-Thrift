<?php
namespace App\Models;

class Product
{
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'name' => 'Kemeja Flanel', 'price' => 45000, 'stock' => 10],
            ['id' => 2, 'name' => 'Jaket Denim', 'price' => 85000, 'stock' => 5],
            ['id' => 3, 'name' => 'Kaos Band', 'price' => 30000, 'stock' => 20],
        ];
    }

    public static function all()
    {
        return self::getDummyData();
    }

    public static function find($id)
    {
        $products = self::getDummyData();
        foreach ($products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }
}
