<?php


namespace App\Controllers;
use App\models\Product;

class ProductController {
    public function showAction($id, $routes){
        $product = new Product();
        $product->read($id);
        require_once APP_ROOT .'/views/Product.php';
    }
}