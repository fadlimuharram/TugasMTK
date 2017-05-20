<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Hasil Chart</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-12">
             <canvas id="numerikchart"></canvas>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Integral Reiman</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-4">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>X</th>
                <th>F(x)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $loop = 0;
              foreach ($_SESSION['getfxReiman'] as $key => $value): ?>
                <tr>
                  <td><?=$loop++;?></td>
                  <td><?=$key;?></td>
                  <td><?=$value;?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
        <div class="col-md-8">
          <pre>
          <h4><strong>Batas Atas(b) : </strong> <?=$_SESSION['getBReiman'];?> </h4>
          <h4><strong>Batas Bawah(a) : </strong> <?=$_SESSION['getAReiman'];?> </h4>
          <h4><strong>H : </strong> <?=$_SESSION['getHReiman'];?> </h4>
          <h4><strong>N : </strong> <?=$_SESSION['getNReiman'];?> </h4>
          <h4><strong>L = </strong> <?=$_SESSION['getstrHasilReiman'];?> <strong> = <?=$_SESSION['hasilReiman'];?></strong></h4>
          </pre>
        </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Integrasi Trapezioda</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-4">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>X</th>
                <th>F(x)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $loop = 0;
              foreach ($_SESSION['getfxTrapezioda'] as $key => $value): ?>
                <tr>
                  <td><?=$loop++;?></td>
                  <td><?=$key;?></td>
                  <td><?=$value;?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
        <div class="col-md-8">
          <pre>
            <h4><strong>Batas Atas(b) : </strong> <?=$_SESSION['getBTrapezioda'];?> </h4>
            <h4><strong>Batas Bawah(a) : </strong> <?=$_SESSION['getATrapezioda'];?> </h4>
            <h4><strong>H : </strong> <?=$_SESSION['getHTrapezioda'];?> </h4>
            <h4><strong>N : </strong> <?=$_SESSION['getNTrapezioda'];?> </h4>
          <h4><strong>L = </strong> <?=$_SESSION['getstrHasilTrapezioda'];?> <strong> = <?=$_SESSION['hasilTrapezioda'];?></strong></h4>
          </pre>
        </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div>

</div>
<?php include_once"RumusKelompok.php"; ?>
