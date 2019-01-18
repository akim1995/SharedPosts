<?php require_once(APPROOT . '/views/inc/header.php') ?>
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body bg-light mt-5">
				<h2>Log in</h2>
				<p>Pleass fill in your credations to log in</p>
				<form action="<?php echo URLROOT ?>/users/login" 
					method="post">

					

					<div class="form-group">
						<label for="email">Email: <sup>*</sup></label>
						<input type="email" name="email" id="email"
							 class="form-control form-control-lg <?php echo (!empty($data['email_err'])) 
							 ? 'is-invalid' : '' ?>" value ="<?php echo $data['email'] ?>">
							 <span class="invalid-feedback"><?php echo $data['email_err']?></span>
					</div>

					<div class="form-group">
						<label for="password">Password: <sup>*</sup></label>
						<input type="password" id="password" name="password" 
							 class="form-control form-control-lg <?php echo (!empty($data['password_err'])) 
							 ? 'is-invalid' : '' ?>" value ="<?php echo $data['password'] ?>">
							 <span class="invalid-feedback"><?php echo $data['password_err']?></span>
					</div>

					
					<div class="row">
						<div class="col">
							<input type="submit" value="Log in" class="btn btn-success btn-block">
						</div>
						<div class="col">
							<a href="<?php URLROOT; ?>/users/register" class="btn btn-light btn-block">Don't have an account ?</a>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
<?php require_once(APPROOT . '/views/inc/footer.php') ?>
