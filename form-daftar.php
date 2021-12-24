<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMAN 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    
    <div class="container my-5">
        <div id="wrapper" class="ms-5">
            <div id="sidebar-wrapper" class="">
            <div class="ms-5">
                <ul class="ul-sidebar sidebar-nav w-100 ms-2 border-right">
                    <li class="li-sidebar sidebar-brand mb-3 p-3 rounded-3"><a class="sidebar-a py-3 px-5"href="#">Dashboard</a></li>
                    <li class="li-sidebar mb-3 p-3 rounded-3"><a class=" sidebar-a py-3 px-5" href="#">Data Siswa</a></li>
                </ul>
            </div>
            </div>
            <header class="mx-auto">
                <h3 class="mb-5"> Tambahkan Data Siswa</h3>
            </header>
            <form action="proses-pendaftaran.php" method="POST" onSubmit="validasi()" class="border-radius p-3 my-3 w-100 mx-auto shadow">
            <fieldset>
            <h5>Isi data dengan teliti</h5><br>
            <div class="mb-3 ">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="e.g john smith">

                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin </label><br>
                    <input name="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin" placeholder="e.g perempuan">
                </div>
                <div class="mb-3">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir" placeholder="2005-06-01">
                </div>
                <div class="mb-3">
                <label for="agama">Agama</label>
                     <!-- <input class="form-check-input" id="disabledFieldsetCheck" disabled> -->
                     <select  name="agama" class="form-select" id="agama">
                        <option selected>choose...</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Islam">Budha</option>
                        <option value="Kristen">Konghucu</option>
                        <option value="Hindu">Katolik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" type="text" class="form-control" id="kelas" placeholder="e.g 9A">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="e.g Jl.Semangka No.8">
                </div>
                <div class=" justify-content-center text-center mt-5">
                    <button class="btn btn-primary w-100"type="submit" value="Daftar" name="daftar" >Tambah Data</button>
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
        var sekolah = document.getElementById("sekolah").value;
        var kelas = document.getElementById("kelas").value
        if (nama != "" && alamat != "" && sekolah != "" && kelas != "") {
            return true;
        }else{
            alert('Anda harus mengisi data dengan lengkap !');
        }
    }  
    </script>
    </body>
</html>

