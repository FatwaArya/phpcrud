<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <a href="index.php">kembali</a>
    <form action="tambah-data.php" method="POST">
        <div>
            <span>Name : </span>
            <input type="text" name = "nama">
        </div>
        <div>
            <span>Address :</span>
            <input type="text" name="alamat">
        </div>
        <div>
            <span>Jurusan :</span>
            <input type="text" name="jurusan">
        </div>
        <button type="sumbit" class="btn btn-success">SAVE</button>
    </form>
</body>
</html>