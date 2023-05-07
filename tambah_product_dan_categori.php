<?php
function TambahCategories($id, $name, $created_at, $updated_at){
    $conn = mysqli_connect('127.0.0.1:3306','root','root','sinauo');
    $sql = mysqli_query($conn, "INSERT INTO categories VALUES ('$id', '$name', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data Categories berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}


function TambahProduk($id, $category_id, $name, $description, $price, $status, $created_by, $created_at, $updated_at){
    $conn = mysqli_connect('127.0.0.1:3306','root','root','sinauo');

    $sql = mysqli_query($conn, "insert into products (id, category_id, name, description, price, status, created_by, created_at, updated_at) values ('$id', '$category_id', '$name', '$description', '$price', '$status', '$created_by', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data Produk berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}



TambahCategories('11', 'Kategori 11', '2023-07-06 01:30:00', '2023-07-06 01:30:00');
TambahProduk(31, 11, 'Produk 31', 'Lorem', 50000, 'accepted', 1,'2023-07-06 01:30:00','2023-07-06 01:30:00');
?>