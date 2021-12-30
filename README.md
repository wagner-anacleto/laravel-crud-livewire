############# CRUD LARAVEL LIVEWIRE by # WAGNER ANACLETO ###############################

</p>laravel new crud
</p>composer require laravel/jetstream
</p>php artisan jetstream:install livewire --teams
</p>php artisan vendor:publish --tag=jetstream-views
</p>npm install
</p>npm run dev
</p>php artisan migrate
</p>
</p>
</p>Kdion4891\LaravelLivewireTables 
</p>- composer require kdion4891/laravel-livewire-tables - https://github.com/kdion4891/laravel-livewire-tables
</p>
</p>

</p>######GERA CONTROLLER MODELO
</p>php artisan make:model Module -m -c --resource
</p>php artisan make:seeder ModuleTableSeeder
</p>
</p>php artisan migrate:refresh --seed
</p>php artisan db:seed
</p>
</p>
</p>######## GERAR 4 COMPONENTS LIVEWIRE
</p>php artisan make:livewire ModuleComponent
</p>php artisan make:livewire CrudComponent
</p>php artisan make:livewire CrudFormComponent
</p>php artisan make:table CrudTableComponent 
</p>
</p>
</p>###REALIZADAO CONFIGURACAO ARQUIVO ROUTE WEB
</p>- web
</p>
</p>
</p>#######passando por parametros resourse para chamar o component
</p>http://localhost:8000/modules
</p>http://localhost:8000/users
</p>
</p>
</p>pegando os parametros por route
</p>http://localhost:8000/admin/modules/modules
</p>http://localhost:8000/admin/modules/users
</p>
</p>
</p>comandos auxiliares no servidor de producao
</p>- php artisan config:cache
</p>- php artisan route:cache
</p>- php artisan view:cache
</p>- php artisan storage:link
</p>
</p>
</p>#######caso for gerar as seeds
</p>SELECT setval(pg_get_serial_sequence('modules', 'id'), max(id)) FROM modules;

