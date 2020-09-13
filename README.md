## Centro Acadecimo Direito UNESC

Passos para executar o projeto

* `baixar o composer`
* `composer global require laravel/installer`
* `git clone`
* `composer install`
* `renomear arquivo .env.example para .env` - se possivel manter o `.env.example`
* `php artisan key:generate`
* `alterar no .env os dados do banco` - keys com prefixo DB_
* `php artisan migrate`
* `php artisan db:seed`
* `php artisan serve`
