<?php include_once"RumusKelompok.php"; ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Masukan Informasi</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form class="form-horizontal" action="request.php" method="post">
            <fieldset>

              <div class="form-group">
                <label class="col-md-4 control-label" for="ninput">F(x)</label>
                <div class="col-md-4">
                <img src="<?=BaseURL;?>Asset/fxkelompok.gif" alt="Rumus" class="img-responsive">

                </div>
              </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ninput">Masukan N</label>
              <div class="col-md-4">
              <input id="ninput" name="ninput" placeholder="Masukan Jumlah N" class="form-control input-md" required="" type="number">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ainput">Masukan Batas Bawah</label>
              <div class="col-md-4">
              <input id="ainput" name="ainput" placeholder="Masukan A" class="form-control input-md" required="" type="number">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="binput">Masukan Batas Atas</label>
              <div class="col-md-4">
              <input id="binput" name="binput" placeholder="Masukan B" class="form-control input-md" required="" type="number">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="hitungkelompok"></label>
              <div class="col-md-4">
                <button id="hitungkelompok" name="hitungkelompok" class="btn btn-primary">Hitung</button>
              </div>
            </div>

            </fieldset>
            </form>

        </div>
        <div class="col-md-2"></div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div>

</div>
