    <div class="table-responsive">
      <table class="table table-bordered">
        	   <caption>Descriptif des éléments hors forfait</caption>
                   <tr>
                      <th class="date">Date</th>
      				        <th class="libelle">Libellé</th>  
                      <th class="montant">Montant</th>  
                      <th class="action" width="100">Action</th>              
                   </tr>
                
          <?php    
      	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
      		{
      			$libelle = $unFraisHorsForfait['libelle'];
      			$date = $unFraisHorsForfait['date'];
      			$montant=$unFraisHorsForfait['montant'];
      			$id = $unFraisHorsForfait['id'];
      	?>		
                  <tr>
                      <td> <?php echo $date ?></td>
                      <td><?php echo htmlentities($libelle); ?></td>
                      <td><?php echo htmlentities($montant) ?></td>
                      <td>
                        <a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
      				          onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');"><button class="btn btn-danger">Supprimer ce frais</button>
                        </a>
                      </td>
                  </tr>
      	<?php		 
                
                }
      	?>	  
                                                
      </table>
    </div>
    <form action="index.php?uc=gererFrais&action=validerCreationFrais" class="form-horizontal"  method="post">
      <legend>Nouvel élément hors forfait</legend>
      <div class="form-group">
        <label for="txtDateHF" class="col-sm-2 control-label">Date (jj/mm/aaaa)</label>
        <div class="col-sm-3">
          <input type="text" id="txtDateHF" class="form-control" name="dateFrais" size="10" maxlength="10" value=""  />
        </div>
      </div>
      <div class="form-group">
        <label for="txtLibelleHF" class="col-sm-2 control-label">Libellé</label>
        <div class="col-sm-3">
          <input type="text" id="txtLibelleHF" class="form-control" name="libelle" size="70" maxlength="256" value="" />
        </div>
      </div>
      <div class="form-group">
        <label for="txtMontantHF" class="col-sm-2 control-label">Montant</label>
        <div class="col-sm-3">
          <input type="text" id="txtMontantHF" class="form-control" name="montant" size="10" maxlength="10" value="" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input id="ajouter" type="submit"  class="btn btn-success" value="Valider" size="20" />
          <input id="effacer" type="reset"  class="btn btn-danger" value="Effacer" size="20" />
        </div>
      </div>
    </form>
</div>
  

