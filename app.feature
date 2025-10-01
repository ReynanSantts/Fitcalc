Feature: Cadastro e armazenamento de IMC

Cenário: Calculo de IMC
Dado que estou na página principal
E preencho minha altura em metros
E preencho o meu peso
E clico no botão de "Calcular IMC"
Então eu devo obter o meu IMC formatado e classificado de acordo com os resultados obtidos

Cenário: Armazenamento de IMC
Dado que estou na página principal
E tenho inserido valores positivos e não nulos
Então o IMC é salvo automaticamente no banco de dados

Cenário: Visualização de resultados após Login
Dado que estou logado na plataforma
E já calculei meu IMC
Então o resultado do IMC calculado deve ser exibido na página principal

Feature: Cadastro e Login de Usuário

Cenário: Cadastro de Usuário
Dado que estou na página de Cadastro
E preencho meu nome completo, email e senha
E clico no botão de "Cadastrar"
Então minha conta deve ser criada com sucesso
E devo ser redirecionado para a página principal

Cenário: Login de Usuário
Dado que estou na página de Login
E preencho meu email e senha
E clico no botão de "Entrar"
Então devo ser redirecionado para a página principal com os meus dados de usuário carregados

Cenário: Verificação de email existente ao criar Usuário
Dado que estou na página de Cadastro
E preencho um email já registrado
E clico no botão de "Cadastrar"
Então devo receber uma mensagem: "Já existe um usuário cadastrado com esse endereço de e-mail"