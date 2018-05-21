# Plano de testes

Para cada caso de uso, elabore um **procedimento de teste** para testar o cenário principal.

Em cada procedimento de teste, siga o modelo abaixo:

**Nome do caso de uso:** Consultar tarefas

**Preparação:**

* Criar no sistema um usuário com o perfil de **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador Chrome e acesse a URL http://doctorshelp.rf.gd acessar aba de criar conta(Paciente) | Abrir um formulario a ser preenchido com informações do paciente.|
| 2 | Preencher todos os **campos** os dados do usuário com perfil de **Paciente**. | Formulado todo preenchido pronto a ser enviado. |
| 3 | Clicar no botão **enviar**. | O formulario será enviado a base de dados e a conta vai ser criada redirecionando o cliente para home. |


* Criar no sistema um usuário com o perfil de **Medico**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador Chrome e acesse a URL http://doctorshelp.rf.gd acessar aba de criar conta(Médico) | Abrir um formulario a ser preenchido com informações do médico.|
| 2 | Preencher todos os **campos** os dados do usuário com perfil de **Médico**. | Formulado todo preenchido pronto a ser enviado. |
| 3 | Clicar no botão **enviar**. | O formulario será enviado a base de dados e a conta vai ser criada redirecionando o cliente para home. |


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
| 1 | Ja logado no sistema com perfil **Paciente** ele irá ter acesso a aba **Marcar Consulta**| Sistema retorna pagina com CEP, Plano e irá pedir o tipo de médico desejado.|
| 2 | Preencher o campo **tipo de Médico** e clicar **Buscar**. | O sistema irá localizar todos os médicos com base no cep onde mora e a especialização. |
| 3 | Selecionar o nome do médico e clicar **Marcar**. | O sistema retornará outra pagina pedidno Horario e Data. |
| 4 | Preencher os dados corretamente e clicar **Marcar** novamente. | O sistema irá registra sua consulta no banco de dados. |

* Ver consultas marcas com perfil **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Paciente** ele irá ter acesso a aba **Ver Consultas**| O Sistema irá retornar uma pagina com os dados de consultas marcada para aquele perfil de paciente.|

* Ver consultas marcas com perfil **Médico**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Médico** ele irá ter acesso a aba **Ver Consultas**| O Sistema irá retornar uma pagina com os dados de consultas marcada para aquele perfil de paciente.|


* Sair do Sistema com qualquer tipo de usuário.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Médico** ele irá ter acesso a aba **Sair**| O Sistema irá fechar a sessão criada pelo usuário.|


