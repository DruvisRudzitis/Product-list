<?php

namespace App\Controllers;

use App\Models\Product;

class ProductsController
{
    private array $products;

    public function index()
    {
        $productsQuery = query()
            ->select('*')
            ->from('products')
            ->orderBy('created_at', 'desc')
            ->execute()
            ->fetchAllAssociative();

        $products = [];

        foreach ($productsQuery as $product) {
            $products[] = new Product(
                (int)$product['id'],
                $product['sku'],
                $product['name'],
                $product['price'],
                $product['type'],
                $product['description'],
                $product['created_at']
            );
        }

        return require_once __DIR__ . '/../Views/ProductsIndexView.php';
    }

    public function show(array $vars)
    {
        $productQuery = query()
            ->select('*')
            ->from('products')
            ->where('id = :id')
            ->setParameter('id', (int)$vars['id'])
            ->execute()
            ->fetchAssociative();

        $product = new Product(
            (int)$productQuery['id'],
            $productQuery['sku'],
            $productQuery['name'],
            $productQuery['price'],
            $productQuery['type'],
            $productQuery['description'],
            $productQuery['created_at']
        );

        return require_once __DIR__ . '/../Views/ProductsShowView.php';
    }

    public function delete(array $vars)
    {
        query()
            ->delete('products')
            ->where('id = :id')
            ->setParameter('id', (int)$vars['id'])
            ->execute();

        header('Location: /products');
    }

    public function store(array $vars)
    {
        query()
            ->insert('products')
            ->values([
                'id' => ':id',
                'sku' => ':sku',
                'name' => ':name',
                'price' => 'price',
                'type' => ':type',
                'description' => ':description'
            ])
            ->setParameters([
                'id' => $_POST['id'],
                'sku' => $_POST['sku'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'type' => $_POST['type'],
                'description' => $_POST['description'],
            ])
            ->execute();

        header('Location: /products');
    }

    public function create()
    {
        return require_once __DIR__ . '/../Views/ProductsCreateView.php';
    }


}