<!--Saisir les informations dans un formulaire!-->
<div class="container">
  <form action="" method=post>
    <input type="hidden" name="etape" value="3" />

    <fieldset>
      <legend>Entrez les donn�es sur la fleur � modifier </legend>
      <label> R�f�rence :</label>
      <label><?php echo $lafleur["ref"]; ?> </label>
      <input type="hidden" name="refcache" value="<?php echo $lafleur["ref"]; ?>" /><br />
      <label>D�signation :</label>
      <input type="text" name="des" value="<?php echo $lafleur["designation"]; ?>" size="20" /><br />
      <label>Prix :</label>
      <input type="text" name="prx" value="<?php echo $lafleur["prix"]; ?>" size="10" /><br />
      <label>Image :</label>
      <input type="text" name="ima" value="<?php echo $lafleur["image"]; ?>" size="20"/><br />
      <label>Cat�gorie :</label>
      <input type="text" name="cat" value="<?php echo $lafleur["categorie"]; ?>" size="10"/><br />
    </fieldset>
    <button type="submit" class="btn btn-primary">Modifier</button>
    <button type="reset" class="btn">Annuler</button>
    <p />
  </form> 
</div>


