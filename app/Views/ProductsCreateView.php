<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Product">
    <title>Product Add</title>
    <meta name="viewport" content="width=device-width, initcial-scale=1">
</head>
<body>
<div class="content">
    <form method="post" action="/products">
        <div id="main">
            <h1>Product Add</h1>
            <button onclick="location.href='/products'">Cancel</button>
            <button type="submit">Save</button>
        </div>
        <br>
        <label for="sku"><b>SKU</b></label>
        <span><input type="text" name="sku" id="sku" required style="display:block;"/></span><br>
        <label for="name"><b>Name</b></label>
        <input name="name" id="name" rows="5" cols="30" required style="display: block;"><br>
        <label for="price"><b>Price ($)</b></label>
        <input name="price" id="price" rows="5" cols="30" required style="display: block;"><br>
        <label for="type"><b>Type Swicher</b></label><br>
        <select name="type" required>
            <option selected hidden value="">Select type</option>
            <option value="DVD-disc">DVD-disc</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select><br><br>
        <label for="description"><b>Description</b></label>
        <input name="description" id="description" rows="5" cols="30" style="display: block;" required>
    </form>
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

    button {
        margin: 60px 1px 1px 1px;
        float: right;
        background-color: white;
        color: black;
        border: 2px solid #555555;
        padding: 1px 10px 4px 10px;
        cursor: pointer;
    }

    a:link {
        text-decoration: none;
    }

</style>
</html>




