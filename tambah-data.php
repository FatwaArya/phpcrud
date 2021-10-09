<?php include './conn.php';

$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$jurusan= $_POST['jurusan'];

$sql = "insert into siswa (nama, alamat,jurusan) 
        values ('".$nama."','".$alamat."','".$jurusan."')";

$result = mysqli_query($conn,$sql);
if($result){
    echo 'Berhasil menambah data';

}else{
    printf('Gagal Menambah'.mysqli_error($conn));
    exit();
}

?>

