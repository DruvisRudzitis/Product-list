<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Product list" content="Product">
    <title>Product List</title>
    <meta name="viewport" content="width=device-width, initcial-scale=1">
</head>
<body>
<div class="content">
    <div id="main">
        <h1>Product List</h1>
        <button id="add" onclick="location.href='/products/add'">Add</button>
    </div>

    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>

            <div class="card">
                <form method="post" action="/products/<?php echo $product->id(); ?>">
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button id="delete" type="submit" onclick="return confirm('Are you sure?');"><b>x</b></button>
                </form>
                <p id="data"><?php echo $product->sku(); ?></p>
                <p id="data"><?php echo $product->name(); ?></p>
                <p id="data"><?php echo $product->price(); ?></p>
                <p id="data"><?php echo $product->type(); ?></p>
                <p id="data"><?php echo $product->description(); ?></p>
            </div>

        <?php endforeach; ?>
    <?php else: ?>
        <strong>No products.</strong>
    <?php endif; ?>

</div>
</body>
<style>

    .content {
        max-width: 800px;
        margin: auto;
        background: white;
        padding: 10px;
    }
    #main {
        width: 680px;
        border-bottom-style: solid;
    }
    h1 {
        margin: 50px 1px 1px 1px;
        display: inline-block;
    }
    #add {
        margin: 60px 1px 1px 1px;
        float: right;
        background-color: white;
        color: black;
        border: 2px solid #555555;
        padding: 1px 10px 4px 10px;
        cursor: pointer;
    }
    .card {
        border-style: solid;
        width: 200px;
        height: 100px;
        margin: 10px;
        text-align: center;
        float: left;
        line-height: 20%;
    }
    #delete {
        float: left;
        margin: 4px;
        background-color: white;
        color: black;
        border: 1px solid #555555;
        padding: 2px;
        cursor: pointer;
        position: relative;
    }
</style>
</html>

