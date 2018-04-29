# restaurant-sys
**Sistema de Restaurante**

**Documento de Especificação de Requisitos**

**Versão 1.0**

**Histórico da Revisão**

| **Data** | **Versão** | **Descrição** | **Autores** |
| --- | --- | --- | --- |
|   |   |   |   |
|   |   |   |   |
|   |   |   |   |
|   |   |   |   |

**DOCUMENTO DE ESPECIFICAÇÃO DE REQUISITOS**

- **REQUISITOS DO SISTEMA**
- **REQUISITOS FUNCIONAIS**

| **ID** | **Interessado** | **Descrição** |
| --- | --- | --- |
| **RF001** | **Gerente** | Cadastrar Funcionário |
| **RF002** | **Gerente/Garçom** | Cadastrar, Editar e Visualizar Produto |
| **RF003** | **Gerente** | Calcular Comissões dos Garçons |
| **RF004** | **Gerente** | Registrar Promoções e Taxas |
| **RF005** | **Gerente** | Gerar Relatórios de Vendas |
| **RF006** | **Gerente** | Gerar Relatórios de Ocupação das Mesas |
| **RF007** | **Gerente** | Gerar Relatórios de Estoque |
| **RF008** | **Garçom** | Realizar Abertura da Conta da Mesa |
| **RF009** | **Garçom** | Criar Pedido Associado a Mesa |
| **RF010** | **Garçom** | Excluir Pedido |
| **RF011** | **Garçom** | Cancelar Conta |
| **RF012** | **Garçom** | Fechar Conta |
| **RF013** | **Garçom** | Acessar e Editar Pedidos em Aberto |
| **RF014** | **Garçom/Chefe** | Atualizar Status do Pedido |
| **RF015** | **Chefe** | Acessar Pedidos em Aberto |
| **RF016** | **Proprietário** | Cadastrar Gerente |
| **RF017** | **Garçom** | Criar Pedido no Balcão |
| **RF018** | **Garçom** | Juntar Pedidos/Mesas |
| **RF019** | **Gerente** | Abrir Caixa |
| **RF020** | **Gerente** | Fechar Caixa |
| **RF021** | **Gerente** | Cadastrar Fornecedor |
| **RF022** | **Gerente** | Alterar dados do Fornecedor |
| **RF023** | **Gerente** | Excluir Fornecedor |
| **RF024** | **Gerente** | Adicionar Pagamentos |
| **RF025** | **Gerente** | Editar Pagamentos |
| **RF026** | **Gerente** | Excluir Pagamentos |
| **RF027** | **Funcionários** | Alterar senha da conta |
| **RF028** | **Garçom/Gerente** | Visualizar Histórico de Pedidos |
| **RF029** | **Garçom/Gerente** | Editar taxas e descontos |
| **RF030** | **Gerente** | Excluir funcionário |
| **RF031** | **Gerente** | Visualizar Pagamentos |
| **RF032** | **Gerente** | Visualizar Fornecedores |
| **RF033** | **Gerente** | Visualizar Funcionários |



- **REGRA DE NEGÓCIO**

| **ID** | **Interessado** | **Descrição** |
| --- | --- | --- |
| **RN001** | **Proprietário** | O sistema deverá validar a entrada de seus usuários a partir de um log in e uma senha. |
| **RN002** | **Proprietário** | O sistema deverá permitir que somente garçons, chefes e gerentes cadastrados possam manipular o sistema. |
| **RN003** | **Proprietário** | O sistema deverá permitir que o proprietário tenha o acesso e controle de todo o sistema. |



- **REQUISITOS NÃO FUNCIONAIS**

| **ID** | **Interessado** | **Descrição** |
| --- | --- | --- |
| **RNF001** | **Proprietário** | Usabilidade: O sistema deve conter uma interface simples para memorização, não pode dar vias para o usuário cometer erros graves, e caso ocorram erros, devem haver mecanismos que tratem, corrijam na medida do possível. |



- **ATORES**

| **ID** | **Ator** | **Descrição** |
| --- | --- | --- |
| **A001** | **Gerente** | Responsável por cadastrar garçons, produtos, calcular comissões e gerar relatórios. |
| **A002** | **Garçom** | Responsável por abrir, cancelar e fechar contas, e associar, modificar e excluir pedido da conta. |
| **A003** | **Chefe** | Acessa os pedidos e modifica seus status para pronto, quando concluir o seu preparo. |

- **CASOS DE USO**

| **ID** | **Caso de Uso** |
| --- | --- |
| **UC001** | Cadastrar Funcionário |
| **UC002** | Cadastrar Produto |
| **UC003** | Editar ou Excluir Produto |
| **UC004** | Visualizar Produtos |
| **UC005** | Calcular Comissão dos Garçons |
| **UC006** | Gerar Relatórios de Venda |
| **UC007** | Gerar Relatórios de Ocupação das Mesas |
| **UC008** | Gerar Relatórios de Estoque |
| **UC009** | Realizar Abertura da Conta da Mesa |
| **UC010** | Criar Pedido Associado a Conta |
| **UC011** | Excluir Pedido |
| **UC012** | Cancelar Conta |
| **UC013** | Fechar Conta |
| **UC014** | Acessar Pedidos em Aberto |
| **UC015** | Editar Pedidos em Aberto |
| **UC016** | Atualizar Status do Pedido |
| **UC017** | Cadastrar Gerente |
| **UC018** | Criar Pedido no Balcão |
| **UC019** | Juntar Pedidos/Mesas |
| **UC020** | Abrir/Fechar Caixa |
| **UC021** | Cadastrar Fornecedor |
| **UC022** | Editar Fornecedor |
| **UC023** | Excluir Fornecedor |
| **UC024** | Adicionar Pagamentos |
| **UC025** | Editar Pagamentos |
| **UC026** | Excluir Pagamentos |
| **UC027** | Alterar Senha |
| **UC028** | Visualizar Histórico de Pedidos |
| **UC029** | Editar taxas e descontos |
| **UC030** | Excluir funcionário |
| **UC031** | Visualizar Pagamentos |
| **UC032** | Visualizar Fornecedores |
| **UC033** | Visualizar Funcionários |

**UC001 – Cadastrar Garçom**

**Descrição:**

- (Use **UC033 - Visualizar Funcionários** );
- O gerente deverá clicar no menu Cadastrar Funcionário;
- Após, deverá preencher os seguintes dados: nome completo, data de nascimento, telefone, endereço, CPF, grau de escolaridade e cargo.
- Após o preenchimento dos dados, ator clica no botão salvar.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de funcionários é atualizada.

**UC002 – Cadastrar Produto**

**Descrição:**

- O gerente deverá clicar no menu Cadastrar
- Em seguida, clicar no menu Produto
- Após, deverá preencher os seguintes dados: nome do produto, opções de porção ou tamanho e valor respectivo. Além disso, o gerente deve associar o produto a uma categoria.
- Após o preenchimento dos dados, o ator clica no botão salvar.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de produtos cadastrados é atualizada.

**UC003 – Editar ou Excluir Produto**

**Descrição:**

- Primeiro o gerente deve realizar uma busca pelo produto (Use **UC004 Visualizar produtos** )
- Em seguida, clicar sobre o produto a ser excluído ou editado.
- Caso deseje excluir, deverá clicar no botão excluir, o sistema exibirá uma mensagem de confirmação de ação, caso o ator confirme, o sistema deve atualizar a lista de visualização dos produtos.
- Caso deseje alterar, após selecionar deverá clicar no botão Editar
- O sistema abrirá um formulário contendo as informações do produto.
- Caso queira desfazer as modificações, o ator deverá clicar no botão Cancelar.
- Ao terminar a edição, deverá clicar no botão Salvar Alterações.
- O sistema deve atualizar a lista de visualização dos produtos

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de produtos cadastrados é atualizada.

**UC004 – Visualizar Produtos**

**Descrição:**

- O ator deverá clicar no menu Produtos
- O sistema deverá dispor de opções para buscar por um ou mais produtos. O ator poderá buscar pelo nome do produto ou listar todos os produtos de uma categoria.
- Para cada produto deve retornar o nome, preço unitário, a categoria e a quantidade no estoque

**Atores:** Gerente, Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de visualização de produtos é atualizada.

**UC005 – Calcular Comissão dos Garçons**

**Descrição:**

- (Use **UC033 - Visualizar Funcionários** );
- Depois, deverá clicar no menu Calcular comissões
- Escolher o mês como base para cálculo.
- O sistema deverá dar opções para calcular a comissão de um ou mais garçom.
- O gerente deverá localizar um ou todos os garçons que deseja calcular a comissão.
- Em seguida, clicar no botão gerar comissões. No relatório deve constar, o nome completo de cada garçom a data de início e fim das comissões e o valor total vendido por cada garçom e total das comissões entre o intervalo de datas
- Caso deseje salvar o histórico de comissões do seu respectivo mês, deve clicar no botão salvar.
- O sistema deve dar opções de impressão do relatório de comissões.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** O histórico de comissões é atualizado.

**UC006 – Gerar Relatórios de Venda**

**Descrição:**

- O gerente deverá clicar no menu Relatórios;
- Em seguida clicar em Relatórios de Vendas;
- Escolher o intervalo de datas para gerar o relatório;
- O sistema irá retornar um relatório das vendas, informando o total vendido por cada mesa entre o intervalo de datas escolhido;
- O sistema deve dar opções de impressão do relatório de vendas.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de histórico de vendas é atualizada.

**UC007 – Gerar Relatórios de Ocupação das Mesas**

**Descrição:**

- O gerente deverá clicar no menu Relatórios;
- Em seguida clicar em Relatórios de Ocupação das Mesas;
- Escolher o intervalo de datas para gerar o relatório;
- O sistema irá retornar um relatório de ocupação das mesas, informando a mesa mais escolhida entre o intervalo de datas escolhido;
- O sistema deve dar opções de impressão do relatório de ocupação das mesas.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de histórico de ocupação das mesas é atualizada.

**UC008 – Gerar Relatórios de Estoque**

**Descrição:**

- O gerente deverá clicar no menu Relatórios;
- Em seguida clicar em Relatórios de Estoque;
- O sistema irá retornar um relatório de estoque, informando o total de cada produto restante no estoque;
- O sistema deve dar opções de impressão do relatório de estoque.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de histórico de estoque é atualizada.

**UC009 – Realizar abertura da conta**

**Descrição:**

- O garçom deverá clicar no menu Lista de Pedidos;
- O garçom deve clicar na mesa desejada ou realizar uma busca pelo número da mesa do pedido;
- Depois, deve clicar no menu Abrir conta;
- Informar algum produto de consumo que tenha sido pedido;
- Clicar no botão salvar;
- O sistema deverá armazenar os dados da conta e manter a conta em aberto.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de contas em aberto é atualizada.

**UC010 – Associar pedido a conta**

**Descrição:**

- O garçom deverá entrar no menu Lista de Pedidos;
- O garçom deve clicar na mesa desejada ou realizar uma busca pelo número da mesa do pedido;
- Após, clicar em Adicionar pedido;
- Informar qual o produto do pedido e a quantidade;
- Em seguida, clicar no botão salvar.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A conta em aberto da respectiva mesa é atualizada.

**UC011 – Excluir pedido**

**Descrição:**

- O garçom deverá entrar no menu Lista de Pedidos;
- O garçom deve clicar na mesa desejada ou realizar uma busca pelo número da mesa a qual a conta foi aberta.
- O sistema deve retornar uma lista com os dados da conta, nome do garçom, data e hora de abertura, lista de pedidos e valor total.
- Após, clicar em Excluir pedido;
- Em seguida, o garçom deve selecionar os pedidos que deseja excluir e clicar no botão excluir, sendo necessária a confirmação de exclusão.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de pedidos da conta é atualizada.

**UC012 – Cancelar conta**

**Descrição:**

- O garçom deverá entrar no menu Lista de Pedidos;
- O garçom deve clicar na mesa desejada ou realizar uma busca pelo número da mesa a qual a conta foi aberta.
- O sistema deve retornar uma lista com os dados da conta, nome do garçom, data e hora de abertura, lista de pedidos e valor total.
- Em seguida, clicar no botão Cancelar conta.
- O sistema deverá restringir que somente contas que não possuírem nenhum pedido possam ser canceladas, caso contrario será necessário realizar o fechamento da conta (Use case Fechar conta).

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de contas é atualizada.

**UC013 – Fechar conta**

**Descrição:**

- O garçom deverá entrar no menu Lista de Pedidos;
- O garçom deve clicar na mesa desejada ou realizar uma busca pelo número da mesa a qual a conta foi aberta.
- O sistema deve retornar uma lista com os dados da conta, nome do garçom, data e hora de abertura, lista de pedidos e valor total.
- Em seguida, o garçom deve clicar no botão fechar conta.
- O sistema deve emitir um relatório da conta para impressão e opções para o pagamento.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de contas é atualizada.

**UC014 – Acessar pedidos em aberto**

**Descrição:**

- O garçom ou chefe deve clicar em Lista de Pedidos;
- O sistema deve retornar uma lista com a mesa, produtos, quantidade dos pedidos e valor total.

**Atores:** Garçom, Chefe.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pedidos é atualizada.

**UC015 – Editar pedidos em aberto**

**Descrição:**

- O garçom deve clicar em Lista de Pedidos;
- O sistema deve retornar uma lista com a mesa, produtos, quantidade dos pedidos e valor total.
- Em seguida o garçom deve clicar no botão de editar ao lado do pedido em questão, podendo mudar os valores da mesa, produtos e quantidades.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pedidos é atualizada.

**UC016 – Atualizar status dos pedidos**

**Descrição:**

- O ator deve clicar em Lista de Pedidos.
- O sistema deve retornar uma lista com a mesa, produtos, quantidade dos pedidos e valor total.
- Em seguida o ator deve clicar no botão de editar ao lado do pedido em questão, podendo mudar o valor de seu status.

**Atores:** Garçom ou Chefe.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pedidos é atualizada.

**UC017 – Cadastrar Gerente**

**Descrição:**

- (Use **UC033 - Visualizar Funcionários** );
- Depois, deve clicar na opção Cadastrar Gerente.
- O sistema deve abrir um formulário de cadastro, onde devem ser digitado os seguintes dados: nome completo, endereço, telefone, e-mail, RG, CPF, log in, senha e confirmação de senha.
- Em seguida, deve clicar no botão salvar.

**Atores:** Proprietário.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de gerentes é atualizada.

**UC018 – Criar Pedido no Balcão**

**Descrição:**

- O garçom deverá clicar no menu Pedido no Balcão;
- Informar algum produto de consumo que tenha sido pedido;
- Clicar no botão salvar;
- O sistema deve emitir um relatório da conta para impressão e opções para o pagamento.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de contas em aberto é atualizada.

**UC019 – Juntar Pedidos/Mesas**

**Descrição:**

- O garçom deverá clicar no menu Lista de Pedidos;
- Depois, deverá clicar na opção Juntar Pedidos/Mesas;
- Escolher as mesas as quais serão unidas;
- E deverá confirmar a ação;
- O sistema deve unir as contas e os pedidos feitos nas respectivas contas.

**Atores:** Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A lista de contas em aberto é atualizada.

**UC020 – Abrir/Fechar Caixa**

**Descrição:**

- O ator deverá clicar na opção Abrir/Fechar Caixa;
- Se o caixa estiver fechado, deverá informar o saldo inicial no caixa;
- Se o caixa estiver aberto, será exibido  o movimento do caixa no dia e a opção de finalizar o caixa, ao clicar nela será exibido uma janela para imprimir o resumo diário;

**Atores:** Gerente

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A condição do caixa será alterada.

**UC021 – Cadastrar Fornecedor**

**Descrição:**

- (Use **UC032 - Visualizar Fornecedores** );
- Depois, deve clicar na opção Cadastrar Fornecedor.
- O sistema deve abrir um formulário de cadastro, onde devem ser digitados os seguintes dados: nome da empresa, nome fantasia, endereço, telefone, fax, e-mail, CNPJ.
- Em seguida, deve clicar no botão salvar.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de fornecedores é atualizada.

**UC022 – Editar Fornecedor**

**Descrição:**

- (Use **UC032 - Visualizar Fornecedores** );
- Depois, clicar no icone direcionado a alterar um fornecedor ao lado de suas informações na lista de fornecedores;
- O sistema deve retornar  em formulário, os seguintes dados: nome da empresa, nome fantasia, endereço, telefone, fax, e-mail, CNPJ, e o ator deve editar os dados necessários.
- Em seguida, deve clicar no botão salvar.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de fornecedores é atualizada.

**UC023 – Excluir Fornecedor**

**Descrição:**

- (Use **UC032 - Visualizar Fornecedores** );
- Depois, clicar no icone direcionado a excluir um fornecedor ao lado de suas informações na lista de fornecedores;
- O sistema mostrará uma janela de confirmação, e caso se escolha Sim, o fornecedor será excluído.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de fornecedores é atualizada.

**UC024 – Adicionar Pagamento**

**Descrição:**

- (Use **UC031 - Visualizar Pagamentos** );
- Depois, deve clicar na opção Adicionar Pagamento;
- O sistema deve abrir um formulário de cadastro, onde devem ser digitados os seguintes dados: fornecedor, descrição, valor, forma de pagamento, dia de vencimento, e dia do pagamento;
- Em seguida, deve clicar no botão salvar.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pagamentos é atualizada.

**UC025 – Editar Pagamento**

**Descrição:**

- (Use **UC031 - Visualizar Pagamentos** );
- Depois, clicar no icone direcionado a alterar um pagamento ao lado de suas informações na lista de pagamentos;
- O sistema deve retornar  em formulário, os seguintes dados: fornecedor, descrição, valor, forma de pagamento, dia de vencimento, e dia do pagamento, e o ator deve editar os dados necessários.
- Em seguida, deve clicar no botão salvar.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pagamentos é atualizada.

**UC026 – Excluir Pagamento**

**Descrição:**

- (Use **UC031 - Visualizar Pagamentos** );
- Depois, clicar no icone direcionado a excluir um pagamento ao lado de suas informações na lista de pagamentos;
- O sistema mostrará uma janela de confirmação, e caso o ator confirme, o fornecedor será excluído.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de fornecedores é atualizada.

**UC027 – Alterar Senha**

**Descrição:**

- (Use **UC033 - Visualizar Funcionários** );
- Depois, clicar no icone direcionado a editar dados do funcionário.
- O ator deve digitar a senha atual, a nova senha e confirmar a nova senha
- O sistema mostrará uma janela de confirmação, e caso o ator confirme, a senha será alterada

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de funcionários é atualizada.

**UC028 – Visualizar Histórico de Pedidos**

**Descrição:**

- O ator deve clicar em Histórico de Pedidos
- O sistema deve retornar o código do pedido, número da mesa, atendente, valor total, e data do pedido
- Ao se selecionar um pedido, é mostrado produtos pedidos, quantidade, forma de pagamento, taxas e descontos sobre o pedido.

**Atores:** Gerente, Garçom.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pedidos é atualizada.

**UC029 – Alterar Taxas e Descontos**

**Descrição:**

- O ator deve entrar no menu Configurações.
- Depois, clicar em Taxas e Descontos
- Será mostrado uma lista de todos os descontos e taxas cadastrados.
- Para adicionar-se um deve-se clicar no ícone direcionado a adicionar uma nova taxa ou desconto. Informar a porcentagem ou o valor e a descrição deste.
- Para alterar-se um deve-se clicar em cima deste. Será exibido os dados sobre este, que podem ser alterados, além de mudar seu status para ativado ou desativado.
- Para excluir um desconto ou taxa, deve-se clicar no ícone direcionado a excluí-lo. O sistema mostrará uma janela de confirmação, e caso o ator confirme, será excluído.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de taxas e descontos é atualizada.

**UC031 – Visualizar Pagamentos**

**Descrição:**

- O ator deve clicar no menu Pagamentos.
- O sistema exibirá uma janela, mostrando a lista de pagamentos em ordem decrescente de data. Tendo a opção de filtrar por data, status e fornecedor, além da opção de buscar por descrição.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de pagamentos é atualizada.

**UC032 – Visualizar Fornecedores**

**Descrição:**

- O ator deve clicar no menu Fornecedores.
- O sistema exibirá uma janela, mostrando a lista de fornecedores em ordem crescente de nome. Tendo a opção de buscar pelo nome e categoria de fornecedor.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de fornecedores é atualizada.

**UC033 – Visualizar Funcionários**

**Descrição:**

- O ator deve clicar no menu Funcionários.
- O sistema exibirá uma janela, mostrando a lista de funcionários em ordem crescente de nome, exibindo seu nome, data de nascimento e id de funcionário. Tendo a opção de classificar por vendas, data de entrada na empresa e tipo de funcionário, além de poder buscar por nome de funcionário.

**Atores:** Gerente.

**Pré-condições:** O ator deverá ter realizado log in no sistema.

**Pós-condições:** A tabela de funcionários é atualizada.