<div class="container">
      <h3>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h3>
      <br>
      <form method="POST"  class="form-horizontal" action="index.php?uc=gererFrais&action=validerMajFraisForfait">
            <legend>Eléments forfaitisés</legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
					<div class="form-group">
						<label for="idFrais" class="col-sm-2 control-label"><?php echo $libelle ?></label>
						<div class="col-sm-3">
							<input type="text" id="idFrais" class="form-control" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
						</div>
					</div>
			
			<?php
				}
			?>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input id="ok" type="submit"  class="btn btn-success" value="Valider" size="20" />
				<input id="annuler" type="reset"  class="btn btn-danger" value="Effacer" size="20" />
			</div>
		</div>
      </form>
  