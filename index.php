<?php include '../config/class.php'; ?>
<?php
// login adalah mendaftarkan akun di session
// klo blm login, berarti blm ada akun di sessin

// jk tidak ada akun di session (blm login),mk dilarikan ke login.php utk login
if(!isset($_SESSION['akun']))
{
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Trainit</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/sendiri.css">
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Trainit</a>
      </div>
    </nav>
    <nav class="navbar-default navbar-side">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="index.php?halaman=kategori"><i class="fa fa-tags"></i> Kategori</a></li>
          <li><a href="index.php?halaman=pelanggan"><i class="fa fa-user"></i> Pelanggan</a></li>
          <li><a href="index.php?halaman=produk"><i class="fa fa-pencil"></i> Produk</a></li>
          <li><a href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart"></i> Pembelian</a></li>
          <li><a href="index.php?halaman=blog"><i class="fa fa-edit"></i> Blog</a></li>
          <li><a href="index.php?halaman=pengaturan"><i class="fa fa-cog"></i> Pengaturan</a></li>
          <li><a href="index.php?halaman=provinsi"><i class="fa fa-map-marker"></i> Provinsi</a></li>
          <li><a href="index.php?halaman=kota"><i class="fa fa-cube"></i> Kota</a></li>
          <li><a href="index.php?halaman=ongkir"><i class="fa fa-car"></i> Ongkir</a></li>
          <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </div>
    </nav>
    <div id="page-wrapper">
      <div id="page-inner">
        <?php
        // jk tidak ada parameter halaman
        if(!isset($_GET['halaman']))
        {
          include 'home.php';
        }
        // selainitu(ada parameter halaman)
        else
        {
          // jk halaman sama dengan kategori,mk panggil file kategori.php
          if($_GET['halaman']=='kategori'){
            include 'kategori/kategori.php';
          }
          elseif ($_GET['halaman']=="tambahkategori")
          {
            include 'kategori/tambahkategori.php';
          }
          elseif ($_GET['halaman']=="hapuskategori")
          {
            include 'kategori/hapuskategori.php';
          }
          elseif ($_GET['halaman']=="ubahkategori")
          {
            include 'kategori/ubahkategori.php';
          }
          elseif($_GET['halaman']=="produk"){
            include 'produk/produk.php';
          }
          elseif ($_GET['halaman']=="tambahproduk"){
            include 'produk/tambahproduk.php';
          }
          elseif ($_GET['halaman']=="ubahproduk"){
            include 'produk/ubahproduk.php';
          }
          elseif ($_GET['halaman']=="pembelian"){
            include 'pembelian/pembelian.php';
          }
          elseif ($_GET['halaman']=="detailpembelian") 
          {
            include 'pembelian/detailpembelian.php';
          }
          elseif ($_GET['halaman']=="pembayaran") 
          {
            include 'pembelian/pembayaran.php';
          }
          elseif ($_GET['halaman']=="lunaspembelian") 
          {
            include 'pembelian/lunaspembelian.php';
          }
          elseif ($_GET['halaman']=="pelanggan"){
            include 'pelanggan/pelanggan.php';
          }
          elseif ($_GET['halaman']=="tambahpelanggan"){
            include 'pelanggan/tambahpelanggan.php';
          }
          elseif ($_GET['halaman']=="hapuspelanggan") {
            include 'pelanggan/hapuspelanggan.php';
          }
          elseif ($_GET['halaman']=="ubahpelanggan") {
            include 'pelanggan/ubahpelanggan.php';
          }
          elseif ($_GET['halaman']=="provinsi"){
            include 'provinsi/provinsi.php';
          }
          elseif ($_GET['halaman']=="blog"){
            include 'blog/blog.php';
          }
          elseif ($_GET['halaman']=="tambahblog") {
            include 'blog/tambahblog.php';
          }
          elseif ($_GET['halaman']=="ubahblog") {
            include 'blog/ubahblog.php';
          }
          elseif ($_GET['halaman']=="hapusblog") {
            include 'blog/hapusblog.php';
          }
          elseif ($_GET['halaman']=="kota"){
            include 'kota/kota.php';
          }
          elseif ($_GET['halaman']=="ongkir"){
            include 'ongkir/ongkir.php';
          }
          elseif ($_GET['halaman']=="updateongkir") 
          {
            include 'ongkir/updateongkir.php';
          }
          elseif ($_GET['halaman']=="pengaturan"){
            include 'pengaturan/pengaturan.php';
          }
          elseif ($_GET['halaman']=="tambahpengaturan"){
            include 'pengaturan/tambahpengaturan.php';
          }
          elseif ($_GET['halaman']=="ubahpengaturan"){
            include 'pengaturan/ubahpengaturan.php';
          }
          
          elseif ($_GET['halaman']=="logout"){
            include 'logout.php';
          }
        }
        ?>

      </div>
      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="js/sendiri.js"></script>
<script>
  $(document).ready(function() 
  {
    $('#thetable').DataTable();
  });
</script>
</body>
</html>