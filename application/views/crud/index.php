<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Crud</title>
</head>
<body>
    <a href="<?php echo base_url()?>crud/add">Create</a>
    <table border='2'>
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Status</td>
        <td>Jurusan</td>
    </tr>
    <?php foreach ($content ->result() as $key) {?>
    <tr>
        <td><?php echo $key->id ?></td>
        <td><?php echo $key->nama ?></td>
        <td><?php echo $key->status ?></td>
        <td><?php echo $key->jurusan ?></td>
        <td><a href="<?php echo base_url()?>crud/read/<?php echo $key->id?>">Read</a></td>
        <td><a href="<?php echo base_url()?>crud/delete/<?php echo $key->id?>">Delete</a></td>
        <td><a href="<?php echo base_url()?>crud/update/<?php echo $key->id?>">Update</a></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>