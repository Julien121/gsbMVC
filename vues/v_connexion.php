<div class="well login-box">
  <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
	<legend>
	  <div class="row">
		<div class="col-md-3">
		  <img src="./images/logo.png" id="logoGSB" width="60px" height="60px" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin"/>
		</div>
		<div class="col-md-4 col-md-offset-1">
		  <p class="login-title">Login</p>
		</div>
	  </div>
	</legend>
	  <div class="form-group">
		  <label for="username-email">Login*</label>
		  <input value='' id="username-email" placeholder="Login" name="login" type="text" class="form-control" />
	  </div>
	  <div class="form-group">
		  <label for="password">Mot de passe*</label>
		  <input id="password" value='' name="mdp" placeholder="Mot de passe" type="password" class="form-control" />
	  </div>
	  <div class="form-group text-center">
		  <input type="reset" class="btn btn-danger btn-cancel-action" name="annuler" value="Annuler" />
		  <input type="submit" class="btn btn-success btn-login-submit" name="valider" value="Valider" />
	  </div>
  </form>
</div>