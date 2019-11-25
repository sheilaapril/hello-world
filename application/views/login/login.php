<?php 
$this->load->view('reuse/header'); 
?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
        	<card class="mx-auto col-lg-10 col-10">
			<form method="POST" action="<?php echo site_url('UserController/loginValidation')?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" required="true">
			    <small id="emailHelp" class="form-text text-muted">hanya admin yang bisa masuk</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="true">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</card>
        </div>
      </main>
  
<?php $this->load->view('reuse/footer'); ?>