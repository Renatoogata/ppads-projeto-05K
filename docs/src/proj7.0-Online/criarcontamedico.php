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
            <legend>Criar Conta do Medico</legend>
            <div>
                <form method="post" action="autentCriar.php" enctype="multipart/form-data" >
                
                    <div>
                        <label>Nome</label><br/>
                        <input type="text" name="Nome"/>
                    </div><br/>
                    
                    <div>
                        <label>Endereço Consultório</label><br/>
                        <input type="text" name="Endereco"/>
                    </div><br/>
                    
                    <div>
                        <label>CEP </label><br/>
                        <input type="text" name="Cep"/>
                    </div><br/>
                    
                    <div>
                        <label>Plano de Saude Que Oferece Serviço</label><br/>
                        <select name="plano" size="3">
                            <option value="Amil">Amil</option>
                            <option value="Bradesco">Bradesco</option>
                            <option value="Sulamerica">Sul América</option>
                            <option value="SUS">SUS</option>
                        </select>
                    </div><br/>
                    
                    <div>
                        <label>Especialização</label><br/>
                        <select name="especializacao" size="3">
                            <option value="cardiologista">Cardiologista</option>
                            <option value="clinico">Clinico Geral</option>
                            <option value="dermatologista">Dermatologista</option>
                            <option value="pediatra">Pediatra</option>
                            <option value="psicologia">Psicologia</option>
                            <option value="pneumologia">Pneumologia</option>
                        </select>
                    </div><br/>
                    
                    <div>
                        <label>CRM </label><br/>
                        <input type="text" name="Crm"/>
                    </div><br/>
                    
                    <div>
                        <label>Usuario</label><br/>
                        <input type="text" name="Usuario"/>
                    </div><br/>
                    
                    <div>
                        <label>Senha</label><br/>
                        <input type="password" name="Senha"/>
                    </div><br/>
                    
                    <input type="hidden" name="tipo" value="2"/>
                    
                    <div>
                        <input type="submit" name="enviar" value="enviar">
                    </div>
                </form>
            </div>
        </fieldset>
        </div>
    </body>
</html>