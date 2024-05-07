<?php

include('../../config/database.php');

$query = mysqli_query($connect, "SELECT * FROM customers");
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
    Customer Data
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>Customer Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Nomor Telepon</td>
            <td>Alamat</td>
            <td>Edukasi</td>
            <td>Occupation</td>
            <td>Tanggal Lahir</td>
            <td>Gaji Bulanan</td>
            <td>Credit Score</td>
            <td>Martial Status</td>
        </tr>

        <?php foreach($results as $result):?>
        <tr>
            <td><?php echo $result['customer_id']?></td>
            <td><?php echo $result['first_name']?></td>
            <td><?php echo $result['last_name']?></td>
            <td><?php echo $result['gender']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['phone_number']?></td>
            <td><?php echo $result['address']?></td>
            <td><?php echo $result['education']?></td>
            <td><?php echo $result['occupation']?></td>
            <td><?php echo $result['date_of_birth']?></td>
            <td><?php echo $result['monthly_income']?></td>
            <td><?php echo $result['credit_score']?></td>
            <td><?php echo $result['marital_status']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>

</html>