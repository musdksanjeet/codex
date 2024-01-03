<div class="form-background">

  <div class="login-box">

    <div class="login-logo">

      <!-- <h2><a href="<?= base_url('admin'); ?>"></a></h2> -->

<h2><a href="<?= base_url('admin'); ?>"><img src="<?=base_url()?>assets/dist/img/logo.png"></a></h2>
    </div>

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">signin to start your session</p>
        <?php $this->load->view('common/_messages.php'); ?>      

        <?php echo form_open(base_url('admin/auth/login'), 'class="login-form" '); ?>
          <div class="form-group has-feedback">
            <input type="text" name="username" id="name" class="form-control" placeholder="username" required>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
          </div>
          <div class="row">
            <div class="col-8">
             </div>

            <!-- /.col -->

            <div class="col-4">

              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat" value="signin">

            </div>

            <!-- /.col -->

          </div>

        <?php echo form_close(); ?>
        
         

      </div>

      <!-- /.login-card-body -->

    </div>

  </div>

  <!-- /.login-box -->

</div>

          