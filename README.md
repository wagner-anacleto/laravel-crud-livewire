############# CRUD LARAVEL LIVEWIRE by # WAGNER ANACLETO ###############################

laravel new crud
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
php artisan vendor:publish --tag=jetstream-views
npm install
npm run dev
php artisan migrate

Kdion4891\LaravelLivewireTables 
- composer require kdion4891/laravel-livewire-tables - https://github.com/kdion4891/laravel-livewire-tables

//GERA 1 CONTROLLER MODELO
php artisan make:model Module -m -c --resource
php artisan make:seeder ModuleTableSeeder

php artisan migrate:refresh --seed
php artisan db:seed

//GERAR 4 COMPONENTS
php artisan make:livewire ModuleComponent
php artisan make:livewire CrudComponent
php artisan make:livewire CrudFormComponent
php artisan make:table CrudTableComponent 

//REALIZADAO CONFIGURACAO ARQUIVO ROUTE WEB
- web


//passando por parametros ao chamar o component
http://localhost:8000/modules
http://localhost:8000/users

//pegando os parametros por route
http://localhost:8000/admin/modules/modules
http://localhost:8000/admin/modules/users


//comandos auxiliares no servidor de producao
- php artisan config:cache
- php artisan route:cache
- php artisan view:cache
- php artisan storage:link


SELECT setval(pg_get_serial_sequence('modules', 'id'), max(id)) FROM modules;

