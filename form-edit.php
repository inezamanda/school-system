<?php
 
include("config.php");
 
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}
 
//ambil id dari query string
$id = $_GET['id'];
 
// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
 
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
 
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #wrapper {  
        /* padding-left: 250px; */
        transition: all 0.4s ease 0s;
        }

        #sidebar-wrapper {
        margin-left: -250px;
        left: 250px;
        width: 250px;
        background: #FFFFFF;
        position: fixed;
        height: 100%;
        overflow-y: auto;
        z-index: 1000;
        transition: all 0.4s ease 0s;
        }

        #page-content-wrapper {
        width: 100%;
        }

        .sidebar-nav {
        position: absolute;
        width: 250px;
        list-style: none;
        margin: 0;
        padding: 0;
        }

        .li-sidebar,.sidebar-a{
            text-decoration : none;
            background-color : #F0F7FF;
            width : 100%;
            /* padding : 15px; */
        }
        li-sidebar:hover{
            background-color : #F1F7FF;
            color : #197BBD;
        }
    </style>
</head>

<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-center justify-content-lg-between">
        <h5>SMAN 1</h5>
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-end mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary"></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"></a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="container my-5">
        <div id="wrapper" class="ms-5">
            <div id="sidebar-wrapper" class="">
            <div class="ms-5">
                <ul class="ul-sidebar sidebar-nav w-100 ms-2">
                    <li class="li-sidebar sidebar-brand mb-3 p-3 rounded-3"><a class="sidebar-a py-3 px-5"href="index.php">Dashboard</a></li>
                    <li class="li-sidebar mb-3 p-3 rounded-3"><a class=" sidebar-a py-3 px-5" href="list-siswa.php">Data Siswa</a></li>
                </ul>
            </div>
            </div>
            <form action="proses-edit.php" method="POST" onSubmit="validasi()" class="border-radius p-3 my-3 w-100 mx-auto shadow">
            <fieldset>
            <h5>Update Data Anda dengan Teliti!</h5><br>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                </div>
                <div class="mb-3 ">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="e.g john smith" value="<?php echo $siswa['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin </label><br>
                    <input name="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin" placeholder="e.g perempuan" value="<?php echo $siswa['jenis_kelamin'] ?>">
                </div>
                <div class="mb-3">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir" placeholder="2005-06-01" value="<?php echo $siswa['tanggal_lahir'] ?>">
                </div>
                <div class="mb-3">
                <label for="agama">Agama</label><br>
                    <?php $agama = $siswa['agama']; ?>
                     <!-- <input class="form-check-input" id="disabledFieldsetCheck" disabled> -->
                     <select  name="agama" class="form-select w-100" id="agama">
                     <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                     <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                     <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                     <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                     <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" type="text" class="form-control" id="kelas" placeholder="e.g 9A" value="<?php echo $siswa['kelas'] ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" value="<?php echo $siswa['alamat'] ?>" placeholder="e.g Jl.Semangka No.8">
                </div>
                <div class=" justify-content-center text-center mt-5">
                    <button class="btn btn-primary w-100"type="submit" value="simpan" name="simpan" >Update Data</button>
                </div>
                </fieldset>
            </form>  
        </div>
    </div>
        
    <script type="text/javascript">
    function validasi()
    {
        var nama = document.getElementById("nama").value;
        var alamat = document.getElementById("alamat").value;
        var sekolah = document.getElementById("kelas").value;
        if (nama != "" && alamat !="" && sekolah !="") {
            return true;
        }else{
            alert('Anda harus mengisi data dengan lengkap !');
        }
    }  
    </script>
   </body>  

</html>