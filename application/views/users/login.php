

<div class="row">
  <div class="col-lg-12 ">
    <div class="card">
      <div style="width: 50%; margin-left: auto; margin-right: auto;">
        <div class="card-header">
          <strong><h1><center>LOGIN</center></h1></strong> 
        </div>
        <br><br>
        <div class="card-body card-block">
          <?php echo form_open('user/login'); ?>
            <div class="row form-group">
              <div class="col col-md-3"></div>
              <div class="col-12 col-md-9"><input type="text" name="username" placeholder="Enter Username..." class="form-control"><span class="help-block">Please enter your username</span></div>
            </div>
            <div class="row form-group">
              <div class="col col-md-3"></div>
              <div class="col-12 col-md-9"><input type="password" name="password" placeholder="Enter Password..." class="form-control"><span class="help-block">Please enter your password</span></div>
            </div>
          
        </div>
      </div>
    </div>
      <div class="card-footer">
        <div style="width: 70%; margin-left: 39%; margin-right: 80%;">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-user"></i> Login
          </button>
          <?php echo form_close(); ?>
          <br>
          daftar akun klik
            <a href="<?php echo site_url('User/register')?>"></span> disini</a>
          
        </div>
      </div>
    </div>
  </div>
</div>

