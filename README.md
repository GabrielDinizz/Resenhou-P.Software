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

