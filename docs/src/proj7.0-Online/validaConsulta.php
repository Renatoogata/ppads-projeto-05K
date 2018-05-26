<?php
$db = mysqli_connect("sql212.epizy.com", "epiz_21830142", "NQt4HiC24odN", "epiz_21830142_doctorshelp");

session_start();
if(!isset($_SESSION['login'])|| !isset($_SESSION["senha"])){
    header("Location: entrar.php");
    exit;
}
$usuario = $_SESSION['login'];
$senha = $_SESSION["senha"];
$plano = $_POST['plano'];
$endereco = $_POST['endereco'];
$medico = $_POST['medico'];
$especializacao = $_POST['especializacao'];


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
                <li><a href="verConsulta.php">Ver Consulta do Dia</a></li><br/>
                <li><a href="historicoConsulta.php">Historico de Consultas</a></li><br/>
                <li><a href="logout.php">Sair</a></li>
            </ul>
  
            </div>
            
            <div class="texto">
                
        <fieldset>
            <legend>Confirmar Consulta</legend>
            <div>
                <form method="post" action="consultaMarcada.php" enctype="multipart/form-data" >
                    <div>
                        <label>Plano de Saúde: </label>
                        <input type="hidden" name="planoPaciente" value="<?php echo $plano ; ?>"/>
                        <?php echo $plano; ?>
                    </div><br/>
                    
                    <div>
                        <label>Nome Médico: </label>
                        <input type="hidden" name="nomeMedico" value="<?php echo $medico; ?>"/>
                        <?php
                            echo $medico;  
                        ?>
                    </div><br/>
                    
                    
                    <div>
                        <label>Tipo do Médico: </label>
                        <?php echo $especializacao ; ?>
                        <input type="hidden" name="especializacao" value="<?php echo $especializacao; ?>"/>
                    </div><br/>
                    
                     <div>
                    <label>Endereço: </label>
                        <?php echo $endereco ; ?>
                    </div><br/>
                    
                    <div>
                        <label>Horario:</label><br/>
                        <input type="time" name="horario"/>
                    </div><br/>
                    
                    <div>
                        <label>Data:</label><br/>
                        <input type="date" name="data"/>
                    </div><br/>
                    
                    
                    <div>
                        
                    </div>
                    
                    <div>
                        <input type="hidden" name="crm" value="<?php echo $crm ; ?>"/>
                        <input type="hidden" name="endereco" value="<?php echo $endereco; ?>"/>
                        <input type="submit" name="enviar" value="Marcar">
                        
                        <?php
                        $sqll = "SELECT nome FROM conta WHERE tipo='1' and usuario='$usuario' and senha='$senha'";
                        $result = mysqli_query($db, $sqll);
                        while($row = mysqli_fetch_array($result)){  
?>
                        <input type="hidden" name="nomePaciente" value="<?php echo $row['nome']; ?> "/>
<?php
                        }
?>
                        
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