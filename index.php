


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire PHP Meroine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-fixed-top" role="navigation">

    <div class="container">
        <div class="navbar-header">
         <a class="navbar-brand" href="#"> HackersPoulette</a>
        </div>
    </div>
</nav>
<br>

<div class="container">
    <div class="starter-template">
        <form action="contact.php" method="POST">
         <div class="row">
         <!--NOM-->
            <div class="col-md-6">
            <div class="form-group">
             <label for="inputname">Nom</label>
             <input id="form-name" type="text" name="name" placeholder="Nom" class="form-control" id="inputname" required> 
             <div class="valid-feedback">
             Looks good!
              </div>
            </div>
            </div>
         <!--PRENOM-->
            <div class="col-md-6">
            <div class="form-group">
             <label for="inputprename">Prénom</label>
             <input id="form-prenom" type="text" name="prenom" placeholder="Prénom" class="form-control" id="inputprename" required> 
            </div>
            </div>
         <!--EMAIL-->        
            <div class="col-md-6">
            <div class="form-group">
             <label for="inputemail">Email</label>
             <input id="form-email" type="text" name="email" placeholder="Email" class="form-control" id="inputemail" required> 
            </div>
            </div>
         <!--PAYS-->
            <div class="col-md-6">
            <div class="form-group">
             <label for="pays">Pays</label>
             <input id="form-pays" type="text" name="pays" placeholder="Votre pays" class="form-control" id="pays" required> 

            </div>
            </div>
            <!--MESSAGE-->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="message"> Message</label>
                    <textarea class="form-control" placeholder="Ecrivez votre message" id="form-message" name="message" row="3" required></textarea>
                </div>
            </div>   
            <!--GENRE-->
            <div class="col-md-6">
            <div class="control-group">
             <label class="control-label" for="gender">Sexe</label>
             <div class="controls">
                <label class="radio inline" for="gender">
                <input type="radio" name="genre" value="2" >
                Homme
                </label>
                <label class="radio inline" for="gender">
                <input required type="radio" name="genre" value="1">
                Femme
                </label>
            </div>
            </div>
            </div> 
            <!--SUJET-->
            <div class="col-md-6">
            <div class="form-group">
             <label>Sujet</label><br>
                  <input type="checkbox" name="sujet[]" value="1">Hacker un pc (attention c'est pas bien)</option><br>
                  <input type="checkbox" name="sujet[]" value="2">Manger du poulet (mmh c'est bon)</option><br>
                  <input type="checkbox" name="sujet[]" value="3">Autres</option> 
            </div>
            </div>
            <!--ENVOYER-->
            <div class="mx-auto">
            <button type="submit" id="form-submit" role="button" name="Envoyer" class="btn btn-primary">Envoyer</button>
            </div>
         </div>  
        </form>    
    </div>
</div> 
</body>
</html>