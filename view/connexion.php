
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link rel="stylesheet" href="../common/css/bootstrap.min.css">
    <link rel="stylesheet" href="../common/css/connexion.css">
    <script type="text/javascript" src="../common/js/connexion.js"></script>
    <script type="text/javascript">
  
</script>


  </head>
  <body>
    <div class="container-fluid init">

      <div class="page-header hd">

        <div class="row">

          <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 temps" id="horloge"  ><img src="../images/airblio1.png" style="height:120px;width:120px;border-radius:50px"></div>
          <div class="col-sm-4 col-xs-4 col-md-6 col-lg-4" style="margin-left:7%;">
              <h1> AIRBLIO - LOGIN</h1>
          </div>

          <div class="col-sm-4 col-xs-4 col-md-2 col-lg-4"></div>


        </div>
      </div>






  <div class="row" id="divpicture">

      <div class="col-md-4"></div>
      <img src="../images/log2.png" class="rounded mx-auto d-block" alt="...">
      <div class="col-md-4"></div>


    </div>




    <div class="row myform">
      <div class="col-md-4">

      </div>

      <form class="col-md-4" action="login.php" method=POST, name="formSaisie">

        <div class="form-group">
          <label for="login" value="Nom">LOGIN</label>
          <input id="login" class="form-control">
        </div>

        <div class="form-group">
          <label for="pwd"value=" mot de passe">PASSWORD</label>
          <input type="password" id="pwd" class="form-control">
        </div>

        <input type="submit" class="btn btn-success" value="connexion" ></button>
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 ){
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }else{
                      echo "<p style='color:red'>Utilisateur ou mot de passe non renseigné</p>";
                    }
                  }
                ?>
        <a href="#">mot de pass oublié ?</a>


      </form>

      <div class="col-md-4">


      </div>

  </div>





  </body>
</html>
