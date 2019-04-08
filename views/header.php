<!DOCTYPE html>
<html>
<head>
  <title>APIEX - Plateforme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--lien pour jquery ajout d'actionnaire-->
  <script src="https://cdn.jsdelivr.net/npm/jquery.add-input-area@4.11.0/dist/jquery.add-input-area.min.js"></script>
</head>
<body>

<?php $etoile = "<p class='text text-danger '> * </p>" ?>
<?php $champsObligatoire = '<p class="text text-danger h4"> (*)  Champs obligatoires</p>'; ?>
<!--entete-->
  <?php $nav = '<nav class="navbar navbar-expand-md bg-dark navbar-dark">
                  <a class="navbar-brand" href="#">APIEx</a>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                    </ul>
                  </nav>';
      echo $nav;
   ?>

<?php
      $titre =   '<div class="container ">
          <h1 class="p-5 bg-dark text-center text-light">Pour la demande d\'agrément au code des investissements</h1>
          <p class="h1 text-center">Formulaire de demande</p> <br>

        </div>';

 ?>

   <?php $sous_menu = '  <div class="container">
                           <ul class="pagination">
                             <li class="nav-item">
                               <a class="nav-link" href="etape1.php">ETAPE 1</a>
                               <a class="nav-link" href="etape2.php">ETAPE 2</a>
                               <a class="nav-link" href="etape3.php">ETAPE 3</a>
                             </li>
                           </ul>
                         </div>';
  ?>
