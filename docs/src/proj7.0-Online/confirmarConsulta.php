<?php
$db = mysqli_connect("sql212.epizy.com", "epiz_21830142", "NQt4HiC24odN", "epiz_21830142_doctorshelp");

session_start();
if(!isset($_SESSION['login'])|| !isset($_SESSION["senha"])){
    header("Location: entrar.php");
    exit;
}
$medico = $_POST['medico'];
?>

<!doctype html>
<html>
    <head>
        <title>Doctors Help</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css"  href="estilo.css" />
    </head>
    <style>
        html{
            background:url(medicina3.png) no-repeat center center fixed;
            -webkit - background-size: cover;
            -moz - background-size: cover;
            -o- background-size: cover;
            background-size: cover;
        }
    </style>
    <body>
        <nav>
            <h1 class="brand"><a>Doctors Help!</a></h1>
            <ul>
                <li><a href="indexPaciente.php">Home</a></li>
                <li><a><?php echo $_SESSION['login']; ?></a></li>
            </ul>
            <div style="clear : both"></div>
        </nav>
        
        <div id="conteudo">
            <div class="menu">

            <ul>
                <a>Bem vindo <?php echo $_SESSION['login']; ?> !</a>
                <br/>
                <br/>
                <li><a href="procuraMedico.php">Marcar Consulta</a></li><br/>
                <li><a href="verConsulta.php">Ver Consultas</a></li><br/>
                <li><a href="logout.php">Sair</a></li>
            </ul>
  
            </div>
            
            <div class="texto">
                
        <fieldset>
            <legend>Procura por médico</legend>
            <div>
                <form method="post" action="validaConsulta.php" enctype="multipart/form-data" >
                    
                    
                    <?php
                        while($row = mysqli_fetch_array($result)){   
                            echo"<div>";
                            echo "<h5>" . $row['nome'] ;
                    ?>
                    
                    <form method="post" action="confirmarConsulta.php" enctype="multipart/form-data">
                        <input type="radio" name="nome" value="<?php echo $row['nome'];?> "/>
                    </form>
                    <?php
                            echo "</h5>";
                            echo"</div>";       
                        }
    
                    ?>
                           
                    <div>
                        <input type="submit" name="enviar" value="Marcar">
                    </div>
                </form>
            </div>
        </fieldset>
                
               <div>

                    
                </div> 
               
            </div>
        </div>
    </body>
</html>