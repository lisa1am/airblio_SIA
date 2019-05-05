<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestion des commandes</title>
    <link rel="stylesheet" href="../common/css/bootstrap.min.css">
    <link rel="stylesheet" href="../common/css/gestionDesCommandes.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="page-header hd">

        <div class="row">

          <div class="col-sm-4 col-xs-4 col-md-5   col-lg-4 temps" >18/03/2019 - 17h20</div>

          <div class="col-sm-4 col-xs-4 col-md-8 col-lg-8 font-weight-bold">
              <h2>Gestion des commandes</h2>
          </div>



        </div>
      </div>



      <div class="text-center titre">
        <h3>Liste des commandes</h3>
      </div>
    </div>


  <!--  <div class="container commandes">

        <div class="diventreprise">
            <p> Entreprise : EDS</p>
        </div>


        <div class="diventreprise">
            <p> Entreprise : EDS</p>
        </div>

        <div class="diventreprise">
            <p> Entreprise : EDS</p>
        </div>

    </div>
-->
<div class="container-fluid" style="overflow-y:scroll">
  <div class="list-group ">
    <a href="#" class="list-group-item list-group-item-action" onmouseover="this.style.background='#99b3ff'" onmouseout="this.style.background = 'white'">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">EDF</h5>
        <small>8 days ago</small>
      </div>
      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      <small>Donec id elit non mi porta.</small>
    </a>
    <a href="#" class="list-group-item list-group-item-action " onmouseover="this.style.background='#99b3ff'" onmouseout="this.style.background = 'white'">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">SUEZ gaz de France</h5>
        <small class="text-muted">5 day ago</small>
      </div>
      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      <small class="text-muted">Donec id elit non mi porta.</small>
    </a>
    <a href="#" class="list-group-item list-group-item-action" onmouseover="this.style.background='#99b3ff'" onmouseout="this.style.background = 'white'">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">Orange</h5>
        <small class="text-muted">3 days ago</small>
      </div>
      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      <small class="text-muted">Donec id elit non mi porta.</small>
    </a>

    <a href="#" class="list-group-item list-group-item-action" onclick="this.style.background = 'red'">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">SNCF</h5>
        <small class="text-muted">10 day ago</small>
      </div>
      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      <small class="text-muted">Donec id elit non mi porta.</small>
    </a>

    

  <small class="text-muted">selectionner la commande à traiter</small>
    </a>



</div>

  <div class="row">

    <div class="col-3"></div>
    <a class="btn btn-primary col-6 boutton" href="#" role="button">Créer mission d'intervention</a>
    <div class="col-4"></div>
  </div>

  <div class="">







  </div>



  </body>
</html>
