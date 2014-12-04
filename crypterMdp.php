<?php
if(isset($_POST['crypter']))
{
	$pdo = new PDO('mysql:host=localhost;dbname=gsb_frais', 'root', '');
	$res = $pdo->prepare("ALTER TABLE visiteur
						MODIFY COLUMN mdp char(32)");
	$res->execute();
	$res = null;
	$res = $pdo->prepare("UPDATE visiteur
						SET mdp = md5(mdp)");
	$res->execute();
	echo 'Cryptage effectuer';
}
?>
<form method="POST" action="crypterMdp.php">
	<label>Cliquez sur</label>
	<br>
	<input type="submit" value="crypter" name="crypter">
</form>

