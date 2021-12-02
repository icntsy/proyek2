<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulir Surat Sktm</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row mt-5 pt-4">
          <div class="col-sm rounded text-light" style="background-color: #212529">
            <form action="" method="POST">
              <div class="text-center">
                <h1 class="text-light">SURAT KETERANGAN TIDAK MAMPU</h1>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
                  </div>
                    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"> <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required></div>
                  </div>
                <div class="row">
                  <div class="col-sm-5 col-md-6"><label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required></div>
                  <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required></div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-5 col-lg-6"> <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" required> </div>
                  <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"><label for="jenis kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis kelamin" name="jenis kelamin" required></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-6"><label for="pekerjaan" class="form-label">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required></div>
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"><label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"> <label for="nohp" class="form-label">No HP</label>
                      <input type="text" class="form-control" id="nohp" name="nohp" required></div>
                    </div>
                  <div class="row ">
                    <div class="col d-flex justify-content-center m-3">
                        <button type="submit" class="btn btn-info " name="kirim">Kirim</button>
                    </div>
                  </div>
              </div>
            </div>
            </form>
            </div>
            </div>
          </div>
          <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        </body>
      </html>
