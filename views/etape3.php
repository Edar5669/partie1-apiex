<?php
  include 'header.php';
  echo   $titre;
  echo $sous_menu;

?>

<div class="card-header">
    ETAPE 3 : DOCUMENTS A JOINDRE
</div>

<div class="card-body">

<?php echo $champsObligatoire; ?>
<div class="container mt-5  ">
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="rccm_file" class="col-sm-6 col-form-label">Registre du Commerce et du Crédit Mobilier (RCCM)</label>
    <div class="col-sm-2 ">
    <input type="file" class="form" id="rccm_file" name="rccm_file" placeholder="">
    </div>
  </div>
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="statut_file" class="col-sm-6 col-form-label">Statuts de la Société</label>
    <div class="col-sm-2 ">
    <input type="file"  class="form" id="rccm_file" name="statut_file" placeholder="">
    </div>
  </div>
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="certificat_file" class="col-sm-6 col-form-label">Certificat de Conformité Environnementale (CCE)</label>
    <div class="col-sm-2 ">
    <input type="file"  class="form" id="certificat_file" name="certificat_file" placeholder="">
    </div>
  </div>
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="plangestion_file" class="col-sm-6 col-form-label">Plan de Gestion Environnementale et Sociale</label>
    <div class="col-sm-2 ">
    <input type="file"  class="form" id="plangestion_file" name="plangestion_file" placeholder="">
    </div>
  </div>
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="certificat_file" class="col-sm-6 col-form-label">Autorisation d’installation industrielle</label>
    <div class="col-sm-2 ">
    <input type="file"  class="form" id="certificat_file" name="certificat_file" placeholder="">
    </div>
  </div>
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="docprojet_file" class="col-sm-6 col-form-label">Document de projet y compris la liste des documents à exonérer</label>
    <div class="col-sm-2 ">
    <input type="file"  class="form" id="docprojet_file" name="docprojet_file" placeholder="">
    </div>
  </div>
  <div class="form-group row mx-5" >
  <?php echo "$etoile"; ?>
    <label for="declaration_file" class="col-sm-6 col-form-label">Déclaration d’établissement</label>
    <div class="col-sm-2 ">
    <input type="file"  class="form" id="declaration_file" name="declaration_file" placeholder="">
    </div>
  </div>

</div>
