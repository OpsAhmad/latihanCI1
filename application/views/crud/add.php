<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
</head>
<body>
<h2>Mauskan Data</h2>
    <form action="<?php echo base_url();?>crud/action_add" method="post">
        <input type="text" name="nama" placeholder="Masukan Nama"> <br>
        <input type="text" name="status" placeholder="Masukan Status"> <br>
        <input type="text" name="jurusan" placeholder="Masukan Jurusan"> <br> <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>