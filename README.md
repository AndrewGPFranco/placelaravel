# Projeto CRUD utilizando Laravel by Andrew Silva

## Descrição

Este projeto é um aplicativo web fullstack desenvolvido utilizando o framework Laravel, que implementa todas as operações de CRUD (Create, Read, Update, Delete) em um sistema de gerenciamento de itens. Além disso, o projeto também possui um sistema de autenticação de usuários para garantir a segurança das informações.

## Funcionalidades

O aplicativo possui as seguintes funcionalidades:

1. **Cadastro de Usuários:** Os usuários podem se registrar e criar contas no sistema.
2. **Login e Logout:** Os usuários podem fazer login de forma segura no sistema e fazer logout quando desejarem.
3. **Gerenciamento de Itens:** Os usuários autenticados podem realizar as operações de CRUD (Create, Read, Update, Delete) em itens.
   - **Create:** Adicionar novos itens com informações como nome, descrição e categoria.
   - **Read:** Visualizar uma lista de todos os itens disponíveis.
   - **Update:** Editar as informações dos itens existentes.
   - **Delete:** Remover itens do sistema.

## Tecnologias Utilizadas

- **Laravel:** Framework PHP utilizado para o desenvolvimento do backend do aplicativo.
- **Bootstrap:** Framework CSS utilizado para o design responsivo e amigável do frontend.
- **MySQL:** Banco de dados relacional para armazenamento persistente dos dados.

## Estrutura do Projeto

O projeto está organizado da seguinte forma:

- `app/`: Contém os arquivos do backend do aplicativo Laravel.
- `resources/views/`: Contém os arquivos de visualização em Blade, que compõem o frontend.
- `routes/`: Define as rotas e endpoints da aplicação.
- `database/`: Contém as migrações do banco de dados.

## Instalação

1. Clone este repositório: `git clone <url_do_repositorio>`
2. Instale as dependências do composer: `composer install`
3. Copie o arquivo `.env.example` para `.env` e configure as informações do banco de dados.
4. Gere a chave de aplicação: `php artisan key:generate`
5. Execute as migrações para criar as tabelas do banco de dados: `php artisan migrate`
6. Inicie o servidor de desenvolvimento: `php artisan serve`

Certifique-se de configurar corretamente o ambiente e as variáveis de ambiente necessárias antes de executar o projeto.

## Conclusão

Este projeto demonstra a implementação completa de um sistema de CRUD utilizando o framework Laravel. Além disso, oferece um sistema de autenticação para garantir a segurança das operações. O uso de tecnologias como Laravel, Bootstrap e MySQL proporciona uma experiência de usuário fluida e eficaz.

Para mais detalhes sobre a implementação, consulte o código-fonte e a documentação do Laravel.
