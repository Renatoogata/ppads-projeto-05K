# Plano de testes

Para cada caso de uso, elabore um **procedimento de teste** para testar o cenário principal.

Em cada procedimento de teste, siga o modelo abaixo:

**Nome do caso de uso:** Consultar tarefas

**Preparação:**

* Criar no sistema um usuário com o perfil de **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador Chrome e acesse a URL http://doctorshelp.rf.gd acessar aba de criar conta(Paciente) | Página irá abrir um formulário para preencher os seguintes **campos:** Nome(String); Endereço(String); CEP(INT); Plano(String); Usuario(String), Senha(String).|
| 2 | Preencher todos os **campos**, os dados(nome, endereço, cep, plano, usario e senha) do usuário com perfil de **Paciente** e apertar o botão enviar. | Irá direcionar para uma página de cadastro concluido com sucesso e depois de 5 segundos voltará para página principal. |


* Criar no sistema um usuário com o perfil de **Medico**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador Chrome e acesse a URL http://doctorshelp.rf.gd acessar aba de criar conta(Médico) | Página irá abrir um formulário para preencher os seguintes **campos:** Nome(String); Endereço do Consultório(String); CEP(INT); Plano de saúde que oferece serviço(String); Especialização(String); CRM(String); Usuario(String), Senha(String).|
| 2 | Preencher todos os **campos**, os dados(Nome, endereço do consultorio, cep, plano de saúde que oferece serviço, especialização, CRM, usuario, senha) do usuário com perfil de **Médico** e apertar o botão enviar. | Irá direcionar para uma página de cadastro concluido com sucesso e depois de 5 segundos voltará para página principal. |


* Logar no Sistema


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador Chrome e acesse a URL http://doctorshelp.rf.gd acessar a aba logar  | Abrir uma pagina com dados a serem preenchido.|
| 2 | Preencher todos os **usuario** e **senha** e selecionar o **perfil** do usuario, clicar enviar. | O sistema irá localizar seu registro e reindirecionar de acordo com perfil selecionado. |

* Marcar consulta com perfil de usuario **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Paciente** ele irá ter acesso a aba **Marcar Consulta** ao clicar nessa aba.| Sistema retorna pagina com CEP, Plano e irá pedir o tipo de médico desejado.|
| 2 | Preencher o campo **tipo de Médico** e clicar **Buscar**. | O sistema irá localizar todos os médicos com base no cep onde mora e a especialização. |
| 3 | Selecionar o nome do médico e clicar **Marcar**. | O sistema retornará outra pagina pedidno Horario e Data. |
| 4 | Preencher os dados corretamente e clicar **Marcar** novamente. | O sistema irá registra sua consulta no banco de dados. |

* Ver consultas marcas com perfil **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Paciente** ele irá ter acesso a aba **Ver Consultas** ao clicar nessa aba.| O Sistema irá retornar uma pagina com os dados de consultas marcada para aquele perfil de paciente.|

* Ver consultas marcas com perfil **Médico**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Médico** ele irá ter acesso a aba **Ver Consultas** ao clicar nessa aba.| O Sistema irá retornar uma pagina com os dados de consultas marcada para aquele perfil de paciente.|


* Sair do Sistema com qualquer tipo de usuário.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com qualquer **perfil** ele irá ter acesso a aba **Sair** ao clicar nessa aba.| O Sistema irá fechar a sessão criada pelo usuário.|

* Ver todos os tipos de usuários cadastrados com o perfil de usuario **Administrador**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com qualquer **perfil** ele irá ter acesso a aba **Ver lista de cadastro** ao clicar nessa aba.| O Sistema irá retornar com uma lista de todos os usuarios cadastrados.|

