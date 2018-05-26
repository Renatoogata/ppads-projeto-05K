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
        
        <div id="criarConta">
            <fieldset>
            <legend>Logar</legend>
            <div>
                <form method="post" action="autentLogin.php" enctype="multipart/form-data" >

                    <div>
                        <label>Usuario</label><br/>
                        <input type="text" name="login"/>
                    </div><br/>
                    
                    <div>
                        <label>Senha</label><br/>
                        <input type="password" name="senha"/> 
                    </div><br/>
                    
                    <div>
                        <label>Tipo de Perfil</label><br/>
                        <select name="tipo" size="3">
                            <option value="1">Paciente</option>
                            <option value="2">Médico</option>
                            <option value="3">Administrador</option>
                        </select>
                    </div><br/>
                    
                    <div>
                        <input type="submit" name="enviar" value="Entrar">
                    </div>
                    
                    
                </form>
            </div>
        </fieldset>
        </div>
    </body>
</html>
