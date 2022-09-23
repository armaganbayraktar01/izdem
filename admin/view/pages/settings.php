<?php
require admin_view('static/header');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- left column -->
        <div class="col-md-2"></div>
        <!--/.col (left) -->

        <!-- center column -->
        <div class="col-md-8">
          <!-- general form elements disabled -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Genel Ayarlar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="post" role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>APP Adı</label>
                  <input type="text" name="site_settings[title]" class="form-control" value="<?= form_control('title')?>" placeholder="Enter ...">
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>APP Kısa Ad</label>
                  <input type="text" name="site_settings[title_short]" class="form-control" value="<?= form_control('title_short')?>" placeholder="Enter ...">
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>APP Açıklaması</label>
                  <input type="text" name="site_settings[description]" class="form-control"  value="<?= form_control('description')?>" placeholder="Enter ...">
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Admin Paneli Başlık</label>
                  <input type="text" name="site_settings[dashboard]" class="form-control"  value="<?= form_control('dashboard')?>" placeholder="Enter ...">
                </div>

                <div class="box-footer">
                  <input type="hidden" name="submit" class="form-control" value="1">
                  <button type="submit" class="btn btn-primary">Ayarları Kaydet</button>
                </div>
                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (center) -->

        <!-- right column -->
        <div class="col-md-2"></div>
        <!--/.col (right) -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php
    require admin_view('static/Footer');
?>