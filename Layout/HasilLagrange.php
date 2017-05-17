<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Hasil Dengan Metode Lagrange</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php if (isset($_SESSION['errdata'])){
          echo '<h1 style="color:red">'.$_SESSION['errdata'].'</h1>';
        }else{
          ?>
          <div class="col-md-4">
            <h4>Data Yang Di Masukan</h4>
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>X</th>
                  <th>Y</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($_SESSION['datainput'] as $key => $value) {
                  echo '<tr>';
                    echo '<td>' . $key . '</td>';
                    echo '<td>' . $value . '</td>';
                  echo '</tr>';
                }
                 ?>
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
            <h4>Data Yang Otomatis Di Urutkan</h4>
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>X</th>
                  <th>Y</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($_SESSION['sorted_data'] as $key => $value) {
                  echo '<tr>';
                    echo '<td>' . $key . '</td>';
                    echo '<td>' . $value . '</td>';
                  echo '</tr>';
                }
                 ?>
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
            <h4>3 Angka Yang Berdekatan</h4>
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>X</th>
                  <th>Y</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($_SESSION['tigaAngkaDekat'] as $key => $value) {
                  echo '<tr>';
                    echo '<td>' . $key . '</td>';
                    echo '<td>' . $value . '</td>';
                  echo '</tr>';
                }
                 ?>
              </tbody>
            </table>
          </div>

          <div class="col-md-12"><hr />
            <div class="form-group">
              <h4 class="text-center">Hasil Dari <strong>F(<?=$_SESSION['XDicari'];?>)</strong></h4>
              <input type="text" value="<?=$_SESSION['hasil'];?>" readonly="" class="form-control input-md">
            </div><hr />
          </div>
          <?php
        }
        ?>
        <a href="index.php" class="btn btn-primary col-md-12">Hitung Kembali</a>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div>
  <?php
  include_once"RumusLagrange.php";
  include_once"ContohLagrange.php";
   ?>

</div>
