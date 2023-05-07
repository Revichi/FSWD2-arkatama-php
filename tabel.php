<?php
 $conn = mysqli_connect('127.0.0.1:3306','root','root','sinauo');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<h1>TABEL JOIN PRODUCT DAN CATEGORIES</h1>
<table class="table">
            <form action="">
                    <tr  class="table-dark">
                        <th>ID</th>
                        <th>CATEGORIES ID</th>
                        <th>NAMA CATEGORIES</th>
                        <th>NAMA PRODUK</th>
                        <th>PRICE</th>
                        <th>STATUS</th>
                    </tr>
                    <?php 
                    $query = "select products.id,category_id,categories.name as CategoriesName,products.name as ProductName,products.price,products.status from products LEFT JOIN categories on products.category_id = categories.id";
                    $Data = mysqli_query($conn,$query);
                    $no=1;
                    while ($tampil = mysqli_fetch_array($Data)){
                        echo "
                        <tr>
                            <th>$tampil[id]</th>
                            <th>$tampil[category_id]</th>
                            <th>$tampil[CategoriesName]</th>
                            <th>$tampil[ProductName]</th>
                            <th>$tampil[price]</th>
                            <th>$tampil[status]</th>
                        </tr>

                        ";

                        $no++;
                    }
                    ?>
            </form>
        </table>
    
</body>
</html>
