<?php
  include 'header.php';
  echo   $titre;
  echo $sous_menu;

  include "../config/config_apiex.php";
  $resultatDepartement = mysqli_query($conn, "SELECT * FROM departements");
  $resultatCommune = mysqli_query($conn, "SELECT * FROM communes");
  $resultatVille = mysqli_query($conn, "SELECT * FROM villes");
  $resultatRegime = mysqli_query($conn, "SELECT * FROM regime_specials");
?>


<div class="card-header">
    ETAPE 2 : INFORMATIONS RELATIVES AU PROJET
</div>
<div class="card-body">
<?php echo $champsObligatoire; ?>
<div class="container mt-5  ">
  <div class="form-group row mx-5" >
    <label for="objetprojet" class="col-sm-2 col-form-label">Objet du projet</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="objetprojet" name="objetprojet" placeholder="" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="localisite" class="col-sm-2 col-form-label">Localisation du site d’implantation du projet</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
                    <input type="text" class="form-control mb-3" name="adresseprojet" value="" placeholder="Indiquer l'adresse" required="True">
                    <select class="form-control col-sm-3 mr-0 text-center" name="departement">
                        <option value="">---- Département ----</option>
                        <?php while($departement = mysqli_fetch_assoc($resultatDepartement)) :?>
                           <option value="<?php echo $departement['designation'];?>"><?php echo $departement['designation'];?></option>
                        <?php endwhile ?>
                    </select>
                    <select class="form-control col-sm-3 mr-0 text-center" name="commune">
                        <option value="">---- Commune ----</option>
                        <?php while($commune = mysqli_fetch_assoc($resultatCommune)) :?>
                           <option value="<?php echo $commune['designation'];?>"><?php echo $commune['designation'];?></option>
                        <?php endwhile ?>
                    </select>
                    <select class="form-control col-sm-3 mr-0  text-center" name="ville">
                        <option value="">---- Ville ----</option>
                        <?php while($ville = mysqli_fetch_assoc($resultatVille)) :?>
                           <option value="<?php echo $ville['designation'];?>"><?php echo $ville['designation'];?></option>
                        <?php endwhile ?>
                    </select>
                    <input type="text" class="form-control col-sm-3 mb-3" name="quartier" value="" placeholder="Indiquer le quartier" required="True"> <br>
                    <input type="text" class="form-control col-sm-12" name="compl_adres" value="" placeholder="Complément d’adresse (facultatif)">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="regimesollicite" class="col-sm-2 col-form-label">Régime sollicité</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
    <select class="form-control sm-10 text-center" name="regimesollicite">
                        <option value="">---- Régime spécial ----</option>
                        <?php while($regime = mysqli_fetch_assoc($resultatRegime)) :?>
                           <option value="<?php echo $regime['type'];?>"><?php echo $regime['type'];?></option>
                        <?php endwhile ?>
                    </select>
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="dureeproj" class="col-sm-2 col-form-label">Durée du projet</label>
    <?php //echo "$etoile"; ?>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="dureeproj" name="dureeproj" placeholder="" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="" class="col-sm-2 col-form-label">Montant des investissements et schéma de financements</label>
    <div class="col-sm-9">
    <label for="" class="col-sm-6 col-form-label align-center mt-5 font-italic">Régime de droit commun</label>
    <label for="" class="col-sm-5 ml-5 col-form-label mt-5 font-italic">Régime privilégié</label>
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="" class="col-sm-2 col-form-label">Fonds propres</label>
    <label for="" class="text text-danger"> * </label>
    <div class="col-sm-9 align-middle">
       <input type="number" min="10000"  class="form-control col-sm-5 mr-5" name="fonds_dc" placeholder="Montant" required="True">
       <input type="number" min="10000" class="form-control col-sm-6 ml-5"  name="fonds_pri" placeholder="Montant" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="" class="col-sm-2 col-form-label">Emprunts</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
       <input type="number" min="10000"  class="form-control col-sm-5 mr-5" name="emprunts_dc" placeholder="Montant" required="True">
       <input type="number" min="10000" class="form-control col-sm-6 ml-5"  name="emprunts_pri" placeholder="Montant" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="chiffre_aff" class="col-sm-2 col-form-label">Chiffre d’affaires moyen annuel</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
      <input type="number" min="10000"  class="form-control" id="chiffre_aff" name="chiffre_aff" placeholder="Montant" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="valeur_ajout" class="col-sm-2 col-form-label">Valeur ajoutée moyenne annuelle</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
      <input type="number" min="10000"  class="form-control" id="valeur_ajout" name="valeur_ajout" placeholder="Montant" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="masse_salarial" class="col-sm-2 col-form-label">Masse salariale toutes charges comprises (1 ère année)</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-9">
      <input type="number" min="10000"  class="form-control" id="masse_salarial" name="masse_salarial" placeholder="Montant" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="nbr_emploi" class="col-sm-3 col-form-label">Nombre d’emplois nouveaux à créer</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-8">
      <input type="number" min="1" max="500" class="form-control" id="nbr_emploi" name="nbr_emploi" placeholder="" required="True">
    </div>
  </div>
  <div class="form-group row mx-5" >
    <label for="rentab_finan" class="col-sm-3 col-form-label">Rentabilité financière pour le promoteur</label>
    <?php echo "$etoile"; ?>
    <div class="col-sm-8">
      <input type="number" min="1000" class="form-control" id="rentab_finan" name="rentab_finan" placeholder="" required="True" >
    </div>
  </div>

  <div class="form-group row mx-5" >
    <label for=" " class="col-sm-3 col-form-label">
          Plan d’approvisionnement & de production
        <br><br> <p class="font-weight-light"> Matières premières (en tonne)</p>
        <br> <p class="font-weight-light">  Quantité produite (en tonne) </p>
        <br> <p class="font-weight-light"> Capacité installée (en tonne) </p>
    </label>
    <?php echo "$etoile"; ?>

    <div class="col-sm-8">
    <ul class="list-group list-group-horizontal list-group-flush">
      <ul>
        <li class="list-group-item font-weight-bold font-italic">Année 1</li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan1" name="plan1" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan10" name="plan10" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan11" name="plan11" placeholder="" required="True"></li>
      </ul>

      <ul>
        <li class="list-group-item font-weight-bold font-italic">Année 2</li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan2" name="plan2" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan20" name="plan20" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan21" name="plan21" placeholder="" required="True"></li>
      </ul>
      <ul>
        <li class="list-group-item font-weight-bold font-italic">Année 3</li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan3" name="plan3" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan30" name="plan30" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan31" name="plan31" placeholder="" required="True"></li>
      </ul>
      <ul>
        <li class="list-group-item font-weight-bold font-italic">Année 4</li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan4" name="plan4" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan40" name="plan40" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan41" name="plan41" placeholder="" required="True"></li>
      </ul>
      <ul>
        <li class="list-group-item font-weight-bold font-italic">Année 5</li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan5" name="plan5" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan50" name="plan50" placeholder="" required="True"></li>
        <li class="list-group-item"><input type="number" min="1" class="form-control" id="plan51" name="plan51" placeholder="" required="True"></li>
      </ul>
    </ul>


    </div>
  </div>
  <div class="form-group row mx-5">
    <label for="engagement_sys" class="col-sm-9 col-form-label text-danger font-weight-light h4">En souscrivant à cette demande vous vous engagez à vous conformer aux dispositions du code et à tenir au Bénin une comptabilité conforme au SYSCOHADA.</label>
    <div class="col-sm-3">
      <input type="checkbox" class="form-control" id="engagement_sys" name="engagement_sys[]" value="" required="True">
    </div>
  </div>

</div>
