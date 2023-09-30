<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <select name="ProductCategory" id="ProductCategory">
            <option>Select a Category</option>
            <?php foreach ($category as $cat) {
                echo "<option value =".$cat['ProductCategory'].">".$cat['ProductCategory']."</option>";
            }?>
        </select>


        <br>
        <label>Product Quantity</label>
        <input type="text" name="ProductQuantity" placeholder="ProductQuantity" value="<?= $_POST['ProductQuantity'] ?? $prod['ProductQuantity'] ?? '' ?>">
        <br>
        <label>Product Price</label>
        <input type="text" name="ProductPrice" placeholder="ProductPrice" value="<?= $_POST['ProductPrice'] ?? $prod['ProductPrice'] ?? '' ?>">
        <br>
        <input type="submit" name="update">
    </form>





    <form action="/Categorysave" method="post" align="center">
    <label>Product Category</label>
        <input type="hidden" name="Category_id" value="<?= $cate['Category_id'] ?? '' ?>">
        <input type="text" name="ProductCategory" placeholder="ProductCategory" value="<?= $_POST['ProductCategory'] ?? $cate['ProductCategory'] ?? '' ?>">
        <br>
        <input type="submit" name="update">
    </form>

    
    <ul>
        <?php foreach ($category as $cate): ?>
            <li>
            <strong>Category:</strong> <?= $cate['ProductCategory'] ?><br>
                    <a href="/Categorydelete/<?= $cate['Category_id'] ?>" class="delete">Delete</a> || <a href="/Categoryedit/<?= $cate['Category_id'] ?>">Update</a>
            </li>
        <?php endforeach; ?>
    </ul>







<br><br><br>
    <h1 align="center">Product Listing</h1>
    <ul>
        <?php foreach ($products as $prod): ?>
            <li>
                <strong>Product Name:</strong> <?= $prod['ProductName'] ?><br>
                <strong>Description:</strong> <?= $prod['ProductDescription'] ?><br>
                <strong>Category:</strong> <?= $prod['ProductCategory'] ?><br>
                <strong>Quantity:</strong> <?= $prod['ProductQuantity'] ?><br>
                <strong>Price:</strong> <?= $prod['ProductPrice'] ?><br>
                <a href="/delete/<?= $prod['Product_id'] ?>" class="delete">Delete</a> || <a href="/edit/<?= $prod['Product_id'] ?>">Update</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>