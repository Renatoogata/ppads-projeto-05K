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
| 1 | Executar o navegador Chrome e acesse a URL http://doctorshelp.rf.gd acessar a aba logar  | Irá abrir um formulário para preencher os **campos:** Usuario(string); Senha(String); Tipo de Perfil(int).|
| 2 | Preencher os campos Usuario, senha, tipo de perfil e apertar entrar. | Irá direcionar para uma página aparecendo logado com sucesso e depois de 5 segundos irá reidirecionar para o menu de usuário. |

* Marcar consulta com perfil de usuario **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Paciente** ele irá ter acesso a aba **Marcar Consulta** ao clicar nessa aba.| Sistema retorna pagina com os campos "CEP", "Plano" e irá pedir para preencher o campo "Tipo de Médico".|
| 2 | Preencher o campo **tipo de Médico** e clicar **Buscar**. | O sistema irá localizar todos os médicos com base no campo "cep" e a especialização. |
| 3 | Selecionar o nome do médico(checkbox) e clicar **Marcar**. | Irá aparecer um formulario com os campos preenchidos("Plano de Sáude(Strin)", "Nome do Médico(String)", Tipo do Médico(String), Endereco(String) e o usuário irá preencher os campos "Hoário(TIME)" e "Data(DATE)". |
| 4 | Preencher os campos "Horário" e "data" e clicar **Marcar** novamente. | Irá direcionar para uma página com a seguinte mensagem "CONSULTA MARCADA COM SUCESSO!!". |

* Ver consulta do dia com perfil **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Paciente** ele irá clicar na aba **Ver Consultas** do menu a esquerda.| Irá direcionar para uma página contendo uma lista de formulários com os seguintes **dados:** Nome do médico(String); Especialização(String); Horário(Time); Endereço(String); Data(Time) referentes a consulta do dia em que está acessando.|


* Histórico de consultas com perfil **Paciente**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Paciente** ele irá clicar na aba **Histórico de Consultas** do menu a esquerda.| Irá direcionar para uma página contendo uma lista de formulários com os seguintes **dados:** Nome do médico(String); Especialização(String); Horário(Time); Endereço(String); Data(Time) referentes a todas as consultas que esse usuário ja marcou.|


* Ver consulta do dia com perfil **Médico**.


**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Ja logado no sistema com perfil **Médico** ele irá clicar na aba **Ver Consultas do dia** do menu a esquerda.| Irá direcionar para uma página contendo uma lista de formulários com os seguintes **dados:** Nome do paciente(String); plano paciente(String); Horário(Time); Data(Time) referentes a todas as consultas que o médico tem no dia.|



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

