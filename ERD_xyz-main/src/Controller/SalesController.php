<?php

include('../../config/database.php');

$query = mysqli_query($connect, "SELECT * FROM sales");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Sales Data
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>Order Id</td>
            <td>Product Name</td>
            <td>Product Description</td>
            <td>Gross Product Price</td>
            <td>Tax Per Product</td>
            <td>Quantity Purchased</td>
            <td>Gross Revenue</td>
            <td>Total Tax</td>
            <td>Net Revenue</td>
            <td>Product Category</td>
            <td>Sku Number</td>
            <td>Weight</td>
            <td>Color</td>
            <td>Size</td>
            <td>Rating</td>
            <td>Stock</td>
            <td>Sales Rep</td>
            <td>Address</td>
            <td>Zipcode</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Loyalty Points</td>
            <td>Customer Id</td>
            <td>Country Id</td>
        </tr>

        <?php foreach($results as $result):?>
        <tr>
            <td><?php echo $result['order_id']?></td>
            <td><?php echo $result['product_name']?></td>
            <td><?php echo $result['product_description']?></td>
            <td><?php echo $result['gross_product_price']?></td>
            <td><?php echo $result['tax_per_product']?></td>
            <td><?php echo $result['quantity_purchased']?></td>
            <td><?php echo $result['gross_revenue']?></td>
            <td><?php echo $result['total_tax']?></td>
            <td><?php echo $result['net_revenue']?></td>
            <td><?php echo $result['product_category']?></td>
            <td><?php echo $result['sku_number']?></td>
            <td><?php echo $result['weight']?></td>
            <td><?php echo $result['color']?></td>
            <td><?php echo $result['size']?></td>
            <td><?php echo $result['rating']?></td>
            <td><?php echo $result['stock']?></td>
            <td><?php echo $result['sales_rep']?></td>
            <td><?php echo $result['address']?></td>
            <td><?php echo $result['zipcode']?></td>
            <td><?php echo $result['phone']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['loyalty_points']?></td>
            <td><?php echo $result['customer_id']?></td>
            <td><?php echo $result['country_id']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>

</html>