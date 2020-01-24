<?php require_once("formulario.php"); ?>
<?php 
    if(isset($_POST['enviar'])){
        if (enviarMensagem($_POST)){
            $mensagem = "Message sent successfully!";
        } else{
            $mensagem ="Sorry! Not able to send the message now. Try later.";
        }
        
        
    }
?>

<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Web Developer">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="_css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#home">
                <img src="_img/girl.png" width="50" height="50" class="d-inline-block">Greice Fanka</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" href="index.html#home">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index.html#abilities">Skills</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index.html#aboutme">About me</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index.html#contact">Contact</a>
                          </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header>
        
    <div id="formulario">
        <div class="container">
            <main>
                <form action="contato.php" method="post">
                    <div class="form-group col-sm-12 col-md-12 col-lg-6">
                        <label for="nome">Name</label>
                        <input type="text" class="form-control" name="nome" id="nome" size="30" maxlength="100" required placeholder="Write here your name">
                    </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-6">
                             <label for="email">Email</label>
                             <input type="email" class="form-control" name="email" id="email" size="30" maxlength="60" required placeholder="Write here your email">
                        </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <label for="mensagem">Write here a message</label>
                                <textarea class="form-control" name="mensagem" id="mensagem" rows="8"></textarea>
                            </div>
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg" value="Send" id="enviar" name="enviar">
                         <?php
                            if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                            }
                        ?>
                                </div>
                   </form>
                </main>
        
        </div>
        
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="_script/script.js"></script>    
</body>