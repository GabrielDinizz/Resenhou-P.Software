Comandos para execução:
-> composer install
-> php artisan serve (executar)


Comandos para teste:
-> Desfazer Todas as Migrações e Aplicar Todas as Migrações Novamente
php artisan migrate:reset (Este comando desfaz todas as migrações aplicadas, revertendo as alterações feitas no banco de dados.)
php artisan migrate (Depois de desfazer todas as migrações, você pode aplicar todas elas novamente usando o comando migrate)
-> Rodar os Seeders
Se você tiver seeders configurados e quiser popular o banco de dados com dados iniciais após a migração, você pode rodar os seeders
php artisan db:seed

