# Resenhou

## Introdução

**Resenhou** é o Trabalho de Conclusão de Curso Técnico em Informática no Colégio Cotemig. Este sistema foi desenvolvido utilizando o framework **PHP Laravel**, com o objetivo de organizar e gerenciar eventos e interações entre usuários. O projeto adota o padrão **MVC** (Model-View-Controller) e uma estrutura modular para facilitar a manutenção e evolução futura.

---

## Estrutura do Projeto

### Diretório `resources/views`

- **`layouts/`**: Contém os arquivos `.blade.php` que definem a estrutura principal das telas, como cabeçalho, rodapé e menus de navegação.
- **`components/`**: Contém os componentes reutilizáveis implementados em arquivos `.blade.php`. Cada componente possui seu próprio arquivo CSS para facilitar a manutenção e garantir o isolamento de estilos.

### Diretório `app/Http/Controllers`

Cada lógica de negócio possui um **Controller** dedicado, promovendo organização e clareza. Os principais são:

- `EventController`: Criação e listagem de eventos.
- `UserProfileController`: Gerenciamento do perfil do usuário.
- `SACController`: Lógica do suporte ao cliente.
- `HomeController`: Controle da tela principal.

### Diretório `app/Models`

Os **Models** seguem estritamente o padrão MVC, representando as tabelas do banco de dados e encapsulando regras de negócio.

---

## Banco de Dados

O projeto utiliza **SQLite3** como banco de dados para facilitar o desenvolvimento e testes. O esquema do banco de dados é definido utilizando **migrations** do Laravel, permitindo um controle versionado e organizado.

---

## Gerenciamento de Imagens

As imagens associadas aos eventos são armazenadas no diretório:

``` storage/app/public/images ```


Essa estrutura é utilizada para testes e será adaptada futuramente para armazenar as imagens no **Amazon S3**.

---

## Estilização (CSS)

- Cada componente possui um arquivo CSS dedicado para estilização individual.
- As telas principais (`layouts`) possuem seus próprios estilos para manter a consistência visual.

---

## Funcionalidades Principais

- **Criação de Eventos**: Cadastro de novos eventos com upload de imagens.
- **Listagem de Eventos**: Exibição detalhada dos eventos cadastrados.
- **Perfil do Usuário**: Gerenciamento de dados pessoais e foto de perfil.
- **SAC**: Suporte ao cliente com interface dedicada.
- **Tela Principal**: Destaques e navegação para funcionalidades do sistema.

---

## Configuração do Ambiente
git clone <URL_DO_REPOSITORIO>

## Comandos para execução:
-> composer install <br>
-> php artisan serve (executar) <br>

## Comandos para teste: <br>
### Desfazer Todas as Migrações e Aplicar Todas as Migrações Novamente <br>
-> php artisan migrate:reset (Este comando desfaz todas as migrações aplicadas, revertendo as alterações feitas no banco de dados.) <br>
-> php artisan migrate (Depois de desfazer todas as migrações, você pode aplicar todas elas novamente usando o comando migrate) <br>
### Rodar os Seeders <br>
Se você tiver seeders configurados e quiser popular o banco de dados com dados iniciais após a migração, você pode rodar os seeders <br>
-> php artisan db:seed <br>

