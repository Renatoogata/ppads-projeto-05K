<html>
    <head>
        <title>Autenticador de Usuario</title>
        <script type="text/javascript">
            function sucesso(){
                setTimeout("window.location='index.php'", 5000);
            }             
        </script>
    </head>
</html>
<?php
    if(isset($_POST['enviar'])){
        $tipo= $_POST['tipo'];
        $db = mysqli_connect("localhost", "root", "", "doctorshelp");
        
        if($tipo==1){        
        $Nome = $_POST['Nome'];
        $Endereco = $_POST['Endereco'];
        $Cep = $_POST['Cep'];
        $Plano = $_POST['plano'];
        $Usuario = $_POST['Usuario'];
        $Senha = $_POST['Senha'];
        
        $sql = "INSERT INTO conta (tipo, nome, endereco, cep, plano, usuario, senha) VALUES ('$tipo', '$Nome', '$Endereco', '$Cep' , '$Plano', '$Usuario', '$Senha')";
        mysqli_query($db, $sql);
        }
        
        
        if($tipo==2){
            $Crm = $_POST['Crm'];
            $Nome = $_POST['Nome'];
            $Endereco = $_POST['Endereco'];
            $Cep = $_POST['Cep'];
            $Plano = $_POST['plano'];
            $Especializacao = $_POST['especializacao'];
            $Usuario = $_POST['Usuario'];
            $Senha = $_POST['Senha'];
        
            $sql = "INSERT INTO conta (tipo, crm, nome, endereco, cep, plano, especializacao, usuario, senha) VALUES ('$tipo', '$Crm', '$Nome', '$Endereco', '$Cep' , '$Plano','$Especializacao' ,'$Usuario', '$Senha')";
            mysqli_query($db, $sql);
            
        }
        
        
        
        echo"<center>Conta Criada com sucesso!!!!!! Aguarde...</center>";
        echo"<script>sucesso()</script>";
    }
?>