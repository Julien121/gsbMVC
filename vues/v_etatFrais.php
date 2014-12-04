
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?> : </h3>
  <div class="row">
    <div class="col-md-5">
      <div class="alert alert-info">
        <p>
            Etat : <?php echo $libEtat; ?> depuis le <?php echo $dateModif; ?> <br> Montant validé : <?php echo $montantValide; ?>           
        </p>
      </div>
    </div>
  </div>
    <div class="table-responsive">
    	<table class="table table-bordered">
    	   <h4>Eléments forfaitisés </h4>
          <tr>
           <?php
           foreach ( $lesFraisForfait as $unFraisForfait ) 
  		 {
  			$libelle = $unFraisForfait['libelle'];
  		?>	
  			<th> <?php echo $libelle; ?></th>
  		 <?php
          }
  		?>
  		</tr>
          <tr>
          <?php
            foreach (  $lesFraisForfait as $unFraisForfait  ) 
  		  {
  				$quantite = $unFraisForfait['quantite'];
  		?>
                  <td class="qteForfait"><?php echo $quantite; ?> </td>
  		 <?php
            }
  		?>
  		</tr>
      </table>
    </div>
    <div class="table-responsive">
    	<table class="table table-bordered">
    	   <h4>Descriptif des éléments hors forfait - <?php echo $nbJustificatifs; ?> justificatifs reçus -
         </h4>
               <tr>
                  <th class="date">Date</th>
                  <th class="libelle">Libellé</th>
                  <th class='montant'>Montant</th>                
               </tr>
          <?php      
            foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
  		  {
  			$date = $unFraisHorsForfait['date'];
  			$libelle = $unFraisHorsForfait['libelle'];
  			$montant = $unFraisHorsForfait['montant'];
  		?>
               <tr>
                  <td><?php echo $date; ?></td>
                  <td><?php echo htmlentities($libelle); ?></td>
                  <td><?php echo htmlentities($montant); ?></td>
               </tr>
          <?php 
            }
  		?>
      </table>
    </div>
</div>
 













