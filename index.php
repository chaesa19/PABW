<?php
    $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

    $localhost = '';
    $username = '';
    $password = '';
    $nama_database = 'daftar_produk';

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    $query = "SELECT * FROM daftar_produk";
    $result = mysqli_query($koneksi, $query);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

    mysqli_close($koneksi);
?>
