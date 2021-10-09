<?php include './conn.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    
</head>
<body>
    <h1>Data Siswa</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores, facere fugit nulla pariatur tempora omnis recusandae. Necessitatibus obcaecati animi soluta, tempora consequatur quia illum, neque accusantium recusandae, cupiditate sed!</p>

    <a href="./create-siswa.php">Tambah Siswa</a>

    <hr>

    <?php $sql ='select * from siswa';
        $result = mysqli_query($conn, $sql);

    ?>

    <table border ="1">
        <thead>
            <tr><th>nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td>
                    
                <a class="btn btn-primary" href="edit-siswa.php ?id= <?php echo $data ['id'] ?>   " >Edit</a>
                <a class="btn btn-danger" href="delete-siswa.post.php ?id= <?php echo $data ['id'] ?>   ">delete</a>    
            </td>
            
            </tr>
              
            
            <?php } ?>
            
        </tbody>
    </table>
</body>
</html>