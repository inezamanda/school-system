<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran stud$students Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    #tablenilai {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tablenilai td, #tablenilai th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tablenilai tr:nth-child(even){background-color: #f2f2f2;}

#tablenilai tr:hover {background-color: #ddd;}

#tablenilai th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
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
<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
        <h3 style="color:#0F4264;" class="sidebar ms-2">SMAN 1</h3><br><br>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary"></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"></a></li>
        </ul>
        <div class="dropdown text-end me-5">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
        </div>
      </div>
    </div>
  </header>
    <div class="container">
    <div id="wrapper" class="ms-5">
            <div id="sidebar-wrapper" class="">
            <div class="ms-5">
                <ul class="ul-sidebar sidebar-nav w-100 ms-2 border-right">
                    <li class="li-sidebar sidebar-brand mb-3 p-3 rounded-3"><a class="sidebar-a py-3 px-5"href="#">Dashboard</a></li>
                    <li class="li-sidebar mb-3 p-3 rounded-3"><a class=" sidebar-a py-3 px-5" href="form-daftar.php">Tambah Siswa</a></li>
                </ul>
            </div>
            </div>
   

    <br>
    <table id="tablenilai" style="margin:auto">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM siswa";
                        $query = mysqli_query($db, $sql);

                        //ubah query ke dalam bentuk array lalu di looping
                        while($students = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$students['id']."</td>";
                            echo "<td>".$students['nama']."</td>";
                            echo "<td>".$students['alamat']."</td>";
                            echo "<td>".$students['jenis_kelamin']."</td>";
                            echo "<td>".$students['tanggal_lahir']."</td>";
                            echo "<td>".$students['agama']."</td>";
                            echo "<td>".$students['kelas']."</td>";

                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$students['id']."'>Edit</a> | ";
                            echo "<a href='hapus.php?id=".$students['id']."'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                    <!-- <tr> -->
                    <td colspan="8"><p class="text-center">Total: <?php echo mysqli_num_rows($query) ?></p></td>
                    <!-- </tr> -->
                </tbody>
                
    </table>
    </div >
   
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>