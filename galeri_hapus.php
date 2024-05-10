<?php 
$id_foto = $_GET['id'];

$query_foto = mysqli_query($koneksi, "DELETE FROM foto WHERE id_foto = $id_foto");
$query_komentar = mysqli_query($koneksi, "DELETE FROM komentar WHERE id_foto = $id_foto");
$query_like = mysqli_query($koneksi, "DELETE FROM likefoto WHERE id_foto = $id_foto");

if ($query_komentar && $query_like) {
    echo '<script>
        alert("Hapus data berhasil");
        location.href="?page=galeri";
        </script>';
} else {
    echo '<script>
    alert("Hapus data gagal");
    </script>';
}

?>
