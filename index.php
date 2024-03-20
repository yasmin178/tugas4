<?php  include_once 'layouts/header.php'?>
 <?php  include_once 'layouts/sidebar.php'?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Kantin Hari Ini</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="login.php">Login</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
    <div class="card-body">

        <table>
            <tr>
                <th>Menu</th>
                <th>Harga (Rp)</th>
            </tr>
            <?php
           
            $menu = array(
                "Nasi Bento" => 20000,
                "Rice Bowl" => 18000,
                "Nasi Teriyaki" => 20000,
                "Ayam Geprek" => 15000,
                "Soto Ayam" => 15000,
                "Kwetiau" => 15000,
                "Pangsit" => 15000
            );

            foreach ($menu as $item => $price) {
                echo "<tr>";
                echo "<td>$item</td>";
                echo "<td>$price</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <form method="GET" action="login.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
        <h2>Form Pemesanan</h2>
        <hr />
        <div class="container px-3">
            <div class="form-group row">
                <label for="custname" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input name="custname" id="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Menu</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="nasibento" name="produk" id="nasibento" type="radio" class="custom-control-input" required>
                        <label for="buku" class="custom-control-label">Nasi Bento</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="ricebowl" name="produk" id="ricebowl" type="radio" class="custom-control-input" required>
                        <label for="ricebowl" class="custom-control-label">Rice Bowl</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="nasiteriyaki" name="produk" id="nasiteriyaki" type="radio" class="custom-control-input" required>
                        <label for="nasiteriyaki" class="custom-control-label">Nasi Teriyaki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="pensil" name="produk" id="pensil" type="radio" class="custom-control-input" required>
                        <label for="pensil" class="custom-control-label">Ayam Geprek</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="pensil" name="produk" id="pensil" type="radio" class="custom-control-input" required>
                        <label for="pensil" class="custom-control-label">Soto Ayam</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="pensil" name="produk" id="pensil" type="radio" class="custom-control-input" required>
                        <label for="pensil" class="custom-control-label">Kwetiau</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="pensil" name="produk" id="pensil" type="radio" class="custom-control-input" required>
                        <label for="pensil" class="custom-control-label">Pangsit</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input name="submit" type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
            
                </ol>
            </div>
        </div>
    </form>
    </div>
</div>
      <!-- Default box -->
      
          

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php  include_once 'layouts/footer.php'?>