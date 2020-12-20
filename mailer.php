<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <title>Formulaire de contact</title>
    <script src="https://kit.fontawesome.com/718141b9f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body class="bg-dark">
<?php 
include("head.php");
?>
<main>
    
    <div class="bg-dark">
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-light">Envoyer un retour</h2>
<div class="container">   
    <div class="row justify-content-center pl-4">

        <div class="col-md-9 mb-md-0 mb-5">

            <div class="row">

                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input id="name" placeholder="Nom" class="form-control mt-4">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input id="email" placeholder="Email" class="form-control mt-4">
                    </div>
                </div>
            </div>         

            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input id="subject" placeholder="Objet" class="form-control mt-4">
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea class="form-control md-textarea mt-4" style="resize: none; height: 205px" id="body" placeholder="Votre message..." rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center text-md-center mt-4">
                <a onclick="sendEmail()" class="btn btn-primary" href="../index.php">Envoyer</a>
            </div>
            <div class="status">
        </div>
        <div class="text-center text-light">
            <ul class="list-unstyled">
                <li class="float-left mt-4"><i class="fas fa-map-marker-alt fa-4x"></i>
                    <p>Iut de Belfort, Département informatique</p>
                </li>               
                <li class="float-right"><i class="fas fa-envelope mt-4 fa-4x"></i>
                    <p>testptutmao@gmail.com</p>
                </li>
            </ul>
        </div>
    
        
    </div>
</div>          
       
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Message envoyé !');
                        else {
                            alert('Une erreur est survenue, veuillez réessayer !');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</main>
<?php 
include("../footer.php")
?>
</body>
</html>