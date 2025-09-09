<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Product E-commers</title>
</head>
<body>

<form action="index.php" method="get">
    <input type="text" name="id" placeholder="Id Product">
    <button type="submit"> search </button>
</form>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
         <th>Nama</th>
          <th>Brand</th>
           <th>Harga</th>
            <th>Stock</th>
             <th>Spesifikasi</th>
    </tr>

<?php
if(!empty($product)){
    foreach($product as $p){
        echo "<tr>
        <td>{$p['id']}</td>
        <td>{$p['nama']}</td>
        <td>{$p['brand']}</td>
        <td>{$p['harga']}</td>
        <td>{$p['stock']}</td>
        <td>{$p['spesifikasi']}</td>
        </tr>";
    } 
}
else {
        echo "Tidak ada data guru";
    }
?>
</table>

<?php if ($product): ?>
    <h2>Detail Product</h2>
    <p>ID: <? $productt['id']?></p>
    <p>Nama: <? $productt['nama']?></p>
    <p>Brand: <? $productt['brand']?></p>
    <p>Harga: <? $productt['harga']?></p>
    <p>Stock: <? $productt['stock']?></p>
    <p>spesifikasi: <? $productt['spesifikasi']?></p>
    <?php else:?>
        <p>Data tidak ditemukan</p>
        <?php endif;?>

    
</body>
</html>