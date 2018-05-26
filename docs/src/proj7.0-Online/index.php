<!doctype html>
<html>
    <head>
        <title>Doctors Help</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css"  href="estilo.css" />
    </head>
    <style>
        html{
            background:url(medicina.png) no-repeat center center fixed;
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
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Criar Conta</a>
                    <div class="dropdown-content">
                        <a href="criarcontapaciente.php">Paciente</a>
                        <a href="criarcontamedico.php">Médico</a>
                    </div>
                </li>
                <li><a href="entrar.php">Entrar</a></li>
            </ul>
            <div style="clear : both"></div>
        </nav>
        
        <div class="footer">
            <p>Todos os Direitos Reservados</p>
        </div>      
    </body>
</html>