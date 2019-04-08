<?php
  include 'header.php';
    echo   $titre;
  echo $sous_menu;

  include "../config/config_apiex.php";
  $resultatNatureJuridique = mysqli_query($conn, "SELECT * FROM nature_juridiques");
?>

<div class="card-header">
    ETAPE 1 : INFORMATIONS RELATIVES A L’ENTREPRISE
</div>

    <form class="" action="index.html" method="post">
      <div class="card-body">
        <?php echo $champsObligatoire; ?>
      <form action="" method="post" >

      <div class="container mt-5  ">
        <div class="form-group row mx-5" >
          <label for="denomination" class="col-sm-2 col-form-label">Dénomination</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
            <input type="text"   class="form-control" id="denomination" placeholder="" required="True">
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="capital" class="col-sm-2 col-form-label">Capital</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
            <input type="number" min="10000" class="form-control" name="capital" id="capital" placeholder="" required="True">
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="objsocial" class="col-sm-2 col-form-label">Objet social</label>

          <div class="col-sm-9">
            <input type="text" class="form-control" name="objsocial" id="objsocial" placeholder="" required="True">
          </div>
        </div>

        <div class="form-group row mx-5" >
          <label for="natujuridiq" class="col-sm-2 col-form-label">Nature Juridique</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
                         <select class="form-control sm-10 text-center" name="natujuridiq">
                              <option value="">---- Choisir ----</option>
                              <?php while($natureJuridique = mysqli_fetch_assoc($resultatNatureJuridique)) :?>
                                 <option value="<?php echo $natureJuridique['type'];?>"><?php echo $natureJuridique['type'];?></option>
                              <?php endwhile ?>
                          </select>
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="nationalite" class="col-sm-2 col-form-label">Nationalité de l’entreprise</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="nationalite" id="nationalite" placeholder="" required="True">
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="lieucompta" class="col-sm-2 col-form-label">Lieu de tenue de la comptabilité</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="lieucompta" id="lieucompta" placeholder="" required="True">
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="adresse" class="col-sm-2 col-form-label">Adresse complète du siège</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="lieucompta" id="adresse" placeholder="" required="True">
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="" class="col-sm-2 col-form-label">Répartition du capital social</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
          <ol id="list" class="">
                      <li class="list_var mb-3">
                          <input type="text"  class="form" size="30" name="list_0" id="list_0" placeholder="nom" required="True" >
                          <input type="text" class="form " size="20" name="list1_0" id="list1_0" placeholder="Montant" required="True" >
                          <input type="text" class="form" size="10" name="list2_0" id="list2_0" placeholder="%" required="True">
                          <input type="button"  value="Supprimer" class="list_del btn btn-danger">
                      </li>
          </ol>
                     <input type="button" value="Ajouter un actionnaire" class="list_add btn btn-primary">
                      <script>
                       $('#list').addInputArea();
                      </script>

          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="adresse" class="col-sm-2 col-form-label">Numéro du Registre du Commerce et du Crédit Mobilier et date</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-6">
            <label for="rccm" class="col-sm-6 col-form-label">Numéro du RCCM :</label>
            <input type="text" class="form-control" name="rccm" id="rccm" placeholder="" required="True">
          </div>
          <div class="col-sm-3">
            <label for="rccmdate" class="col-sm-12 col-form-label">Date du RCCM :</label>
            <input type="date" class="form-control " name="rccmdate" id="rccmdate" placeholder="" required="True">
          </div>
        </div>
        <div class="form-group row mx-5" >
          <label for="numeroifu" class="col-sm-2 col-form-label">Numéro IFU</label>
          <?php echo "$etoile"; ?>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="numeroifu" id="numeroifu" placeholder="" required="True">
          </div>
        </div>
      </div>
      </div>

    </form>
