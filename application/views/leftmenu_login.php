<div id="leftmenu">
			<div id="login">
				<?php
				if(isset($_SESSION['user']) && $_SESSION['user'] == 2) {
					echo '<p class="red">Falaktigt användarnamn eller lösenord</p>';
				}
				?>
				<form id="loginform" action="<?php echo base_url(); ?>user/login" method="post">
					<div class="box">
						<label for="uname">Användarnamn:</label>
						<input id="uname" class="required" type="text" name="uname" />
					</div>
					<div class="box">
						<label for="password">Lösenord:</label>
						<input id="password" type="password" name="pass" class="required" />
					</div>
					<div class="box">
						Kom ihåg mig: <input type="checkbox" name="rememberme" value="1">
					</div>
					<div class="box">
						<input class="button" name="login" type="submit" value="Logga in" />
					</div>
				</form>
			</div>
		</div>
