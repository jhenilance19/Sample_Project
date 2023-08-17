  <?php 
  if($this->session->flashdata('success_register')){ ?>
      <div class="alert alert-info"> 
        <?php echo $this->session->flashdata('success_register'); ?>
      </div>
    <?php }
      $csrf = array(
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
      );

      error_reporting(0);
    ?>
    
  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login ">
          <form method="POST"  action="<?php echo base_url(); ?>user/authenticate" autocomplete="off">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="text"  name="username" id="username" placeholder="Username" required="">
            <input type="password" name="password" id="password" placeholder="Password" required="">
            <button type="submit" name="submit">Login</button>
          </form>
			</div>
	</div>







