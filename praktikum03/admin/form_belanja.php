<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <!-- Form Belanja -->
        <div class="col-md-6">
            <form action="form_belanja.php" method="POST">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div> 
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-4">Pilih produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
                            <label for="radio_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
                            <label for="radio_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesincuci"> 
                            <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                    </div>
                </div> 

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Daftar Harga -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Daftar Harga
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                </ul>
                <div class="card-footer bg-primary text-white text-center">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    // ngambil data form
    if (isset($_POST['proses'])) {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    //harga produk 
    $harga_produk = [
        'tv' => 4200000,
        'kulkas' => 3100000,
        'mesincuci' => 3800000
    ];

    //cek total haraga
    $total_harga = $harga_produk[$produk] * $jumlah;

    //menampilkan hasil di web
    echo "Nama Customer : $customer <br>";
    echo "Produk Pilihan : $produk <br>";
    echo "Jumlah Produk : $jumlah <br>";
    echo "Total Harga :Rp Rp " . number_format($total_harga, 0, ',', '.') . " <br>";

    //cek produk
    if (array_key_exists($produk, $harga_produk)) {
    } else {
        echo "<p class='text-danger'>Produk tidak valid!</p>";
    }
    }

    
?>

</body>
</html>
