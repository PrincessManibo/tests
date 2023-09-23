<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="/save" method="post">
        <label>Product Name</label>
        <input type="text" name="Product Name" placeholder="Product Name"> 
        <br>
        <label>Product Description</label>
        <input type="text" name="Product Description" placeholder="Product Description">
        <br>
        <label>Product Category</label>
        <input type="text" name="Product Category" placeholder="Product Category">
        <br>
        <label>Product Quantity</label>
        <input type="text" name="Product Quantity" placeholder="Product Quantity">
        <br>
        <label>Product Price</label>
        <input type="text" name="Product Price" placeholder="Product Price"> 
        <br>
        <input type="submit" value="save"> 
    </form>

    <h1>Product</h1>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>Action</th>
            
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['Product Name'] ?></td>
                <td><?= $pr['Product Description'] ?></td>
                <td><?= $pr['Product Category'] ?></td>
                <td><?= $pr['Product Quantity'] ?></td>
                <td><?= $pr['Product Price'] ?></td>
                <td><a href="/edit/<?= $pr['id'] ?>">Update</a>
                    <a href="/Delete/<?= $pr['id'] ?>">Delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>