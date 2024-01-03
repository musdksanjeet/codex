<div class="form-background">

  <div class="login-box">

    <div class="login-logo">

      <!-- <h2><a href="<?= base_url('admin'); ?>"><?= $this->general_settings['application_name']; ?></a></h2> -->

<h2><a href="<?= base_url('admin'); ?>"><img src="<?=base_url()?>assets/img/logo.png"></a></h2>
    </div>

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><?php echo trans('signin_to_start_your_session') ?></p>
        <?php $this->load->view('common/_messages.php') ?>      

        <?php echo form_open(base_url('admin/auth/login'), 'class="login-form" '); ?>
          <div class="form-group has-feedback">
            <input type="text" name="username" id="name" class="form-control" placeholder="<?php echo trans('username') ?>" required>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo trans('password') ?>" required>
          </div>
          <div class="row">
            <div class="col-8">
              <!--
              <div class="checkbox icheck">

                <label>

                  <input type="checkbox"> <?php echo trans('remember_me') ?>

                </label>

              </div> -->

            </div>

            <!-- /.col -->

            <div class="col-4">

              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat" value="<?= trans('signin') ?>">

            </div>

            <!-- /.col -->

          </div>

        <?php echo form_close(); ?>
        <!--
        <p class="mb-1">
          <a href="<?= base_url('admin/auth/forgot_password'); ?>"><?php echo trans('i_forgot_my_password') ?></a>
        </p> -->
        <!--

        <p class="mb-0">
          <a href="<?= base_url('admin/auth/register'); ?>" class="text-center"><?php echo trans('register_new_membership') ?></a>
        </p> -->

      </div>

      <!-- /.login-card-body -->

    </div>

  </div>

  <!-- /.login-box -->

</div>

          