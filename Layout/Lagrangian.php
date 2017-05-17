<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Lagrangian</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
    <form class="form-horizontal" method="post" action="request.php">
      <fieldset>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2 control-label" for="pilihjml">Jumlah Data</label>
        <div class="col-md-3">
          <select id="pilihjml" name="pilihjml" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <label class="col-md-3 control-label" for="datafx">X Di Cari</label>
        <div class="col-md-3">
        <input id="datafx" name="datafx" placeholder="Masukan X Yang Ingin Di Cari" class="form-control input-md" required="" type="text">
        </div>
      </div>

      <!-- Select Basic -->


      <!-- Text input-->
      <div class="form-group inputx">
        <hr />
        <label class="col-md-1 control-label" for="xdata">X</label>
        <div id="xdataID"></div>
      </div>

      <!-- Text input-->
      <div class="form-group inputy">
        <label class="col-md-1 control-label" for="ydata">Y</label>
        <div id="ydataID"></div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <div class="col-md-12">
          <button id="kirimLagrangian" name="kirimLagrangian" class="btn btn-primary col-md-12">Kirim</button>
        </div>
      </div>

      </fieldset>
      </form>

  </div><!-- /.box-body -->
</div><!-- /.box -->
