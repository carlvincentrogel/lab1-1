<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <form action="/save" method="post" align="center">
        <label>Product Name</label>
        <input type="hidden" name="Product_id" value="<?= $prod['Product_id'] ?? '' ?>">
        <input type="text" name="ProductName" placeholder="ProductName" value="<?= $_POST['ProductName'] ?? $prod['ProductName'] ?? '' ?>">
        <br>
        <label>Product Description</label>
        <input type="text" name="ProductDescription" placeholder="ProductDescription" value="<?= $_POST['ProductDescription'] ?? $prod['ProductDescription'] ?? '' ?>">
        <br>
        <label>Product Category</label>
        <input type="text" name="ProductCategory" placeholder="ProductCategory" value="<?= $_POST['ProductCategory'] ?? $prod['ProductCategory'] ?? '' ?>">
        <br>
        <label>Product Quantity</label>
        <input type="text" name="ProductQuantity" placeholder="ProductQuantity" value="<?= $_POST['ProductQuantity'] ?? $prod['ProductQuantity'] ?? '' ?>">
        <br>
        <label>Product Price</label>
        <input type="text" name="ProductPrice" placeholder="ProductPrice" value="<?= $_POST['ProductPrice'] ?? $prod['ProductPrice'] ?? '' ?>">
        <br>
        <input type="submit" name="update">
    </form>

<br><br><br>
    <h1 align="center">Product Listing</h1>
    <table border="2" align="center">
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $prod): ?>
        <tr>
            <td><?= $prod['ProductName'] ?></td>
            <td><?= $prod['ProductDescription'] ?></td>
            <td><?= $prod['ProductCategory'] ?></td>
            <td><?= $prod['ProductQuantity'] ?></td>
            <td><?= $prod['ProductPrice'] ?></td>
            <td><a href="/delete/<?= $prod['Product_id'] ?>">delete</a> | <a href="/edit/<?= $prod['Product_id'] ?>">edit</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>