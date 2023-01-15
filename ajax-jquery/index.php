<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="js/jquery.js"></script>
    <script src="js/app.js" defer></script>

    <title>AJAX-JQuery Bootstrap PHP</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-4">
            <h1>Belajar AJAX Jquery Bootstrap PHP</h1>
        </div>

        <div class="row mt-4">
            <!-- <div class="col">
                <div class="row">
                    <h2>Input Data Customer</h2>
                </div>

                <div class="row">
                    <div id="message">
                        
                    </div>
                    
                </div>
            </div> -->

            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <!-- Button trigger modal -->
                        <button type="button" id="btn-tambah" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add New Data
                        </button>
                    </div>
                </div>

                <div class="row">
                    <h2>Data Customer</h2>
                </div>

                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Hapus</th>
                                <th scope="col">Update</th>
                            </tr>
                        </thead>
                        <tbody id="isidata">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- pembuatan modal -->
        

        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tittle">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                    <!-- memasukkan form ke modal -->
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="id" required aria-describedby="emailHelp" hidden>
                                            <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                                            <input type="text" class="form-control" id="pelanggan" required aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">Harus diisi.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" required>
                                            <div id="emailHelp" class="form-text">Harus diisi.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Telepon</label>
                                            <input type="number" class="form-control" id="telp" required>
                                            <div id="emailHelp" class="form-text">Harus diisi.</div>
                                        </div>
                                        
                                        <button type="submit" id="submit" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
                                    </form>
                            </div>
                        
                        </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        $( document ).ready(function() {
        
        });
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>