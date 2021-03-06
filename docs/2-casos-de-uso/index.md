# Casos de uso

## 1. Diagrama de casos de uso

**Instruções do professor**: Insira abaixo o diagrama com os casos de uso do seu sistema. A imagem abaixo é somente um exemplo.

![caso de uso](caso1.jpg)


## 2. Especificação dos casos de uso

**Instruções do professor**: Para cada caso de uso, criar as tabelas com a especificação do caso de uso. Siga o exemplo dado abaixo:

### 2.1. Caso de uso **Realiza Cadastro**

| Campo          | Informação        |
|---|---|
| Identificador: | UC01              |
| Nome:          | Realiza Cadastro |
| Atores:        | Cliente |
| Sumário:       | Realiza um cadastro de cliente. |

| Fluxo Principal |
|---|
| 1) O cliente entra na aba cadastro e fornece as informações pessoais. |
| 2) O sistema salva informações do cliente.                   |
| 3) O sistema apresenta que os dados foram guardados e seu cadastro foi realizado com sucesso. |
| 4) O cliente retorna a pagina inical do site. |

| Fluxo Alternativo (2a): O sistema nâo conseguiu realizar o cadastro. |
|---|
| 1) O sistema informa está faltando alguma informação para o realizamento do cadastro. |
| 2) O sistema faz o usuario preencher novamente o formulario. |
| 3) O cliente preenche o formulario. |
| 4) Volta ao passo (2) do fluxo principal. |

### 2.2. Caso de uso **Busca Médico**

| Campo          | Informação        |
|---|---|
| Identificador: | UC02              |
| Nome:          | Busca Médico |
| Atores:        | Cliente |
| Sumário:       | Faz uma busca por médicos em sua região. |

| Fluxo Principal |
|---|
| 1) O cliente entra em um formulario e informa dados de medico e sua localização. |
| 2) O sistema lista as informações de acordo com a solicitação.                   |

| Fluxo Alternativo (2a): O sistema nâo achou conseguiu retornar resposta. |
|---|
| 1) O sistema nâo retorna nenhuma resposta ao pedido. |
| 2) Volta ao passo (1) do fluxo principal. |

| Fluxo Alternativo (2b): O sistema achou uma lista de médicos. |
|---|
| 1) O cliente dá uma opção de marcar consulta. |
| 2) O sistema registra a consulta e retorna os dados para o cliente. |
| 3) O cliente confirma e a consulta é marcada. |


### 2.3. Caso de uso **Sair**

| Campo          | Informação        |
|---|---|
| Identificador: | UC02              |
| Nome:          | Sair do Sistema|
| Atores:        | Medicos, Pacientes, ADM |
| Sumário:       | O cliente sai do sistema. |

| Fluxo Principal |
|---|
| 1) O cliente o cliente na sua conta seleciona a opção Sair. |
| 2) O sitema fecha a sessão do cliente.                   |


### 2.4. Caso de uso **Cadastro do Médico**

| Campo          | Informação        |
|---|---|
| Identificador: | UC02              |
| Nome:          | Cadastro do Médico |
| Atores:        | Medico |
| Sumário:       | O Médico realiza o cadastro do medico. |

| Fluxo Principal |
|---|
| 1) O usuario seleciona a opção de cadastro de médico. |
| 2) O sistema retorna um formulario a ser preenchido.                   |
| 3) O usuario preenche o formulario com os dados de medico. |
| 4) O sistema manda os dados para o banco de dados e exibe uma mensagem de cadastro realizado com sucesso.                   |


### 2.5. Caso de uso **Checa Consulta**

| Campo          | Informação        |
|---|---|
| Identificador: | UC02              |
| Nome:          | Checa Consulta |
| Atores:        | Médico, paciente |
| Sumário:       | O medico e o paciente checa as consultas marcadas. |

| Fluxo Principal |
|---|
| 1) O medico ou paciente seleciona a opção checa consulta. |
| 2) O sistema retorna um com as consultas marcadas.                   |


