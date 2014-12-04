 <div class="container">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" class="form-horizontal" method="post">
      	<div class="form-group">
	        <label for="lstMois" class="col-sm-2 control-label" accesskey="n">Mois : </label>
	        <div class="col-sm-3">
		        <select id="lstMois" class="form-control" name="lstMois">
		            <?php
					foreach ($lesMois as $unMois)
					{
					    $mois = $unMois['mois'];
						$numAnnee =  $unMois['numAnnee'];
						$numMois =  $unMois['numMois'];
						if($mois == $moisASelectionner){
						?>
						<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
						<?php 
						}
						else{ ?>
						<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
						<?php 
						}
					
					}
		           
				   ?>    
		            
		        </select>
	       	</div>
        </div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input id="ok" type="submit"  class="btn btn-success" value="Valider" size="20" />
				<input id="annuler" type="reset"  class="btn btn-danger" value="Effacer" size="20" />
			</div>
		</div>
        
      </form>