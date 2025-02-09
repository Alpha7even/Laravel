Instalação:

Xampp: 
* php;
* MySql Server;
* Apache;
* phpMyAdmin;

Composer E  Laravel:
Agora vamos instalar o Laravel corretamente dentro do XAMPP.

Abra o CMD e vá até a pasta htdocs do XAMPP
cd C:\xampp\htdocs

Instale o Composer (se ainda não tiver)
Baixe e instale: https://getcomposer.org/

Verifique a instalação rodando:
        composer -V

Criar um novo projeto Laravel:
       composer create-project --prefer-dist laravel/laravel meuprojeto

Abra o terminal do Laragon e vá até a pasta do seu projeto:
       C:pasta/do/Seu/projeto
                 
Rode este comando para instalar tudo o que falta:
       composer install
                 
Depois que o composer install terminar, rode:
       php artisan key:generate
       gera e já salva automaticamente a chave no arquivo .env do seu projeto Laravel, na linha:
       APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxx
                     

Inicie o servidor do Laravel
       php artisan serve
              

Visual Studio Code (VSCode):


Node.js (NPM):
BDeaver:
----------------------------------------------------------------------------------------   
Git: Estrutura de Branches
   Possíveis branches para um projeto.

main (ou master): 
       A branch principal, que sempre deve conter a versão estável do projeto pronta para produção.

develop: 
       Uma branch intermediária, onde as novas features são desenvolvidas e testadas antes de serem mescladas na branch main.
           
           Criar uma nova branch:
           git branch nova_branch

feature/nome-da-feature:
       Branches criadas para cada nova funcionalidade, como "feature/cadastro-de-usuarios", "feature/sistema-de-recomendação", etc.
           
           Mudar para uma branch:
           git checkout nova_branch

bugfix/numero-do-bug: 
       Branches criadas para corrigir bugs específicos, como "bugfix-123-erro-na-pesquisa".
           
           Listar todas as branches:
           git branch

release/versão: 
       Branches criadas para preparar uma nova versão para lançamento, garantindo que todas as funcionalidades estejam funcionando corretamente.
           
           Mesclar uma branch:
           git merge outra_branch

hotfix/numero-do-hotfix: 
       Branches criadas para corrigir bugs críticos em produção, que precisam ser corrigidos imediatamente.

           Excluir uma branch:
           git branch -d nova_branch

Exemplo de fluxo de trabalho:

Criar uma nova feature: Um desenvolvedor cria uma nova branch a partir da develop (ex: feature/implementar-leitura-offline).

Desenvolver a feature: O desenvolvedor implementa a nova funcionalidade nessa branch.

Criar um pull request: O desenvolvedor cria um pull request para mesclar a branch da feature na branch develop.

Revisar e mesclar: Outros desenvolvedores revisam o código e, se tudo estiver correto, mesclam a branch na develop.

Preparar para o lançamento: Quando uma nova versão está pronta, uma branch de release é criada a partir da develop.

Testar a release: A nova versão é testada extensivamente.

Lançar: A branch de release é mesclada na branch main e o projeto é deployado para produção.

Diagrama simplificado:

    Snippet de código

         flowchart LR
         A(main) --> B(develop)
         B --> C{feature/X}
         B --> D{bugfix/Y}
         B --> E{release/Z}
Por que usar essa estrutura?

Organização: 
     Mantém o código organizado e facilita a localização de mudanças.

Colaboração: 
     Permite que vários desenvolvedores trabalhem em diferentes partes do projeto simultaneamente.

Qualidade: 
     Garante que o código seja revisado antes de ser mesclado na branch principal.

Gerenciamento de versões: 
     Facilita o controle das diferentes versões do projeto.


Passo a passo para fazer o upload das suas alterações para o GitHub
------------------------------------------------------------------------------------
1. Verifique o status do seu repositório local:
   git status

Adicione os arquivos modificados ao staging area:
   git add .
   O ponto (.) indica que você quer adicionar todos os arquivos modificados. Você também pode adicionar arquivos específicos, por exemplo: git add arquivo1.py arquivo2.css.  
   "git add" and/or "git commit -a"git

3. Faça um commit das alterações:

   git commit -m "Mensagem clara e concisa sobre as alterações"
     Substitua "Mensagem clara e concisa sobre as alterações" por uma descrição detalhada do que você fez. Essa mensagem é importante para rastrear o histórico das suas alterações. 
------------------------------------------------------------------------------------
👉 Criar cadastro, edição, listagem e exclusão de registros no banco de dados usando Laravel.

2️⃣ Criar um Sistema de Autenticação (Login, Registro, Dashboard)

 Usar Laravel Breeze ou Jetstream para criar telas de login, logout e registro de usuários.


✅ Passos:

Instalar Laravel Breeze:

composer require laravel/breeze --dev
    php artisan breeze:install

Opções Disponíveis no Laravel Breeze
   Blade (0) → Usa as views tradicionais do Laravel (recomendado para projetos simples).
   React (1) → Usa React.js para criar o frontend do sistema.
   Vue (2) → Usa Vue.js para o frontend.
   API (3) → Apenas cria uma API para ser usada com um frontend separado.

Qual Escolher?
   Se seu projeto for baseado em Blade (HTML + PHP no backend), digite 0 e pressione Enter.
   Se quiser integrar com React ou Vue, escolha a opção correspondente (1 ou 2).
   Se estiver criando apenas uma API, escolha 3.

 Would you like to install dark mode support? (yes/no) [no]
❯ yes

  Would you prefer Pest tests instead of PHPUnit? (yes/no) [no]
❯ PHPunit


✅ Próximos Passos - O que fazer agora?
Rodar as migrações (caso não tenha feito isso ainda) para garantir que as tabelas de autenticação sejam criadas:

php artisan migrate:

Agora que o login e registro estão prontos:

Instalar as dependências do frontend (se ainda não fez):

1️⃣ Testar o login e registro → Criar um usuário e testar o sistema.
    Instalar as dependências do frontend (se ainda não fez):

    npm install && npm run dev

OBS: npm install && npm run dev
>>
No linha:1 caractere:13
+ npm install && npm run dev
+             ~~
O token '&&' não é um separador de instruções válido nesta versão.
    + CategoryInfo          : ParserError: (:) [], ParentContainsErrorRecordException
    + FullyQualifiedErrorId : InvalidEndOfLine
    
    💡 Como Resolver?
    1️⃣ Abrir o PowerShell como Administrador
       
       Pressione Win + S e procure por PowerShell
       Clique com o botão direito e escolha "Executar como administrador"

    2️⃣ Permitir a Execução de Scripts
        No PowerShell, execute este comando:
          
        Set-ExecutionPolicy Unrestricted -Scope CurrentUser
        Ele vai perguntar se você tem certeza. Digite "A" (Sim para tudo) e pressione Enter.
        
    3️⃣ Feche e Abra Novamente o Terminal:

        Agora feche o PowerShell e tente rodar o npm install novamente:
        
        npm install && npm run dev
        Se continuar com erro, tente rodar os comandos no CMD (Prompt de Comando) em vez do PowerShell.
        

2️⃣ Criar um CRUD → Cadastrar, editar e excluir produtos ou usuários.
3️⃣ Customizar as views → Deixar o layout mais bonito e com a identidade do projeto.
4️⃣ Adicionar permissões → Criar diferentes tipos de usuários (admin, cliente, etc.).



php artisan migrate


✅ Passos:

Criar um modelo e migration
Criar um controller
Criar views (Blade templates) para o frontend
Criar rotas no web.php
📌 Exemplo: Cadastro de Produtos

php artisan make:model Produto -m
php artisan make:controller ProdutoController
