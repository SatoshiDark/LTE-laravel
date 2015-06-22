dflores@devdflores-colosa:~$ cd sites/public_html/laravel-lte/
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ ls
app        composer.json  database      phpspec.yml  readme.md   storage
artisan    composer.lock  gulpfile.js   phpunit.xml  resources   tests
bootstrap  config         package.json  public       server.php  vendor
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan make:controller PagesController
Controller created successfully.
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan make:controller TasksController
Controller created successfully.
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan route:list
+--------+--------------------------------+-------------------------------------------------------+---------------+------------------------------------------------------------+------------+
| Domain | Method                         | URI                                                   | Name          | Action                                                     | Middleware |
+--------+--------------------------------+-------------------------------------------------------+---------------+------------------------------------------------------------+------------+
|        | GET|HEAD                       | /                                                     | home          | App\Http\Controllers\PagesController@home                  |            |
|        | GET|HEAD                       | tasks                                                 | tasks.index   | App\Http\Controllers\TasksController@index                 |            |
|        | GET|HEAD                       | tasks/create                                          | tasks.create  | App\Http\Controllers\TasksController@create                |            |
|        | POST                           | tasks                                                 | tasks.store   | App\Http\Controllers\TasksController@store                 |            |
|        | GET|HEAD                       | tasks/{tasks}                                         | tasks.show    | App\Http\Controllers\TasksController@show                  |            |
|        | GET|HEAD                       | tasks/{tasks}/edit                                    | tasks.edit    | App\Http\Controllers\TasksController@edit                  |            |
|        | PUT                            | tasks/{tasks}                                         | tasks.update  | App\Http\Controllers\TasksController@update                |            |
|        | PATCH                          | tasks/{tasks}                                         |               | App\Http\Controllers\TasksController@update                |            |
|        | DELETE                         | tasks/{tasks}                                         | tasks.destroy | App\Http\Controllers\TasksController@destroy               |            |
|        | GET|HEAD                       | home                                                  |               | App\Http\Controllers\HomeController@index                  | auth       |
|        | GET|HEAD                       | capable                                               |               | App\Http\Controllers\CapableController@index               | auth       |
|        | GET|HEAD                       | auth/register/{one?}/{two?}/{three?}/{four?}/{five?}  |               | App\Http\Controllers\Auth\AuthController@getRegister       | guest      |
|        | POST                           | auth/register/{one?}/{two?}/{three?}/{four?}/{five?}  |               | App\Http\Controllers\Auth\AuthController@postRegister      | guest      |
|        | GET|HEAD                       | auth/login/{one?}/{two?}/{three?}/{four?}/{five?}     |               | App\Http\Controllers\Auth\AuthController@getLogin          | guest      |
|        | POST                           | auth/login/{one?}/{two?}/{three?}/{four?}/{five?}     |               | App\Http\Controllers\Auth\AuthController@postLogin         | guest      |
|        | GET|HEAD                       | auth/logout/{one?}/{two?}/{three?}/{four?}/{five?}    |               | App\Http\Controllers\Auth\AuthController@getLogout         |            |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | auth/{_missing}                                       |               | App\Http\Controllers\Auth\AuthController@missingMethod     | guest      |
|        | GET|HEAD                       | password/email/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@getEmail      | guest      |
|        | POST                           | password/email/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@postEmail     | guest      |
|        | GET|HEAD                       | password/reset/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@getReset      | guest      |
|        | POST                           | password/reset/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@postReset     | guest      |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | password/{_missing}                                   |               | App\Http\Controllers\Auth\PasswordController@missingMethod | guest      |
+--------+--------------------------------+-------------------------------------------------------+---------------+------------------------------------------------------------+------------+
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan make:migration create_tasks_table --create=tasksCreated Migration: 2015_06_22_170526_create_tasks_table
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan migrate
Migrated: 2015_06_22_170526_create_tasks_table
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan make:model Task
Model created successfully.
Created Migration: 2015_06_22_170918_create_tasks_table
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ composer require illuminate/html
Using version ^5.0 for illuminate/html
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
  - Installing illuminate/html (v5.0.0)
    Loading from cache

Writing lock file
Generating autoload files
Warning: Ambiguous class resolution, "CreateTasksTable" was found in both "/home/dflores/sites/public_html/laravel-lte/database/migrations/2015_06_22_170918_create_tasks_table.php" and "/home/dflores/sites/public_html/laravel-lte/database/migrations/2015_06_22_170526_create_tasks_table.php", the first will be used.
Generating optimized class loader
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$ php artisan route:list
+--------+--------------------------------+-------------------------------------------------------+---------------+------------------------------------------------------------+------------+
| Domain | Method                         | URI                                                   | Name          | Action                                                     | Middleware |
+--------+--------------------------------+-------------------------------------------------------+---------------+------------------------------------------------------------+------------+
|        | GET|HEAD                       | /                                                     | home          | App\Http\Controllers\PagesController@home                  |            |
|        | GET|HEAD                       | tasks                                                 | tasks.index   | App\Http\Controllers\TasksController@index                 |            |
|        | GET|HEAD                       | tasks/create                                          | tasks.create  | App\Http\Controllers\TasksController@create                |            |
|        | POST                           | tasks                                                 | tasks.store   | App\Http\Controllers\TasksController@store                 |            |
|        | GET|HEAD                       | tasks/{tasks}                                         | tasks.show    | App\Http\Controllers\TasksController@show                  |            |
|        | GET|HEAD                       | tasks/{tasks}/edit                                    | tasks.edit    | App\Http\Controllers\TasksController@edit                  |            |
|        | PUT                            | tasks/{tasks}                                         | tasks.update  | App\Http\Controllers\TasksController@update                |            |
|        | PATCH                          | tasks/{tasks}                                         |               | App\Http\Controllers\TasksController@update                |            |
|        | DELETE                         | tasks/{tasks}                                         | tasks.destroy | App\Http\Controllers\TasksController@destroy               |            |
|        | GET|HEAD                       | home                                                  |               | App\Http\Controllers\HomeController@index                  | auth       |
|        | GET|HEAD                       | capable                                               |               | App\Http\Controllers\CapableController@index               | auth       |
|        | GET|HEAD                       | auth/register/{one?}/{two?}/{three?}/{four?}/{five?}  |               | App\Http\Controllers\Auth\AuthController@getRegister       | guest      |
|        | POST                           | auth/register/{one?}/{two?}/{three?}/{four?}/{five?}  |               | App\Http\Controllers\Auth\AuthController@postRegister      | guest      |
|        | GET|HEAD                       | auth/login/{one?}/{two?}/{three?}/{four?}/{five?}     |               | App\Http\Controllers\Auth\AuthController@getLogin          | guest      |
|        | POST                           | auth/login/{one?}/{two?}/{three?}/{four?}/{five?}     |               | App\Http\Controllers\Auth\AuthController@postLogin         | guest      |
|        | GET|HEAD                       | auth/logout/{one?}/{two?}/{three?}/{four?}/{five?}    |               | App\Http\Controllers\Auth\AuthController@getLogout         |            |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | auth/{_missing}                                       |               | App\Http\Controllers\Auth\AuthController@missingMethod     | guest      |
|        | GET|HEAD                       | password/email/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@getEmail      | guest      |
|        | POST                           | password/email/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@postEmail     | guest      |
|        | GET|HEAD                       | password/reset/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@getReset      | guest      |
|        | POST                           | password/reset/{one?}/{two?}/{three?}/{four?}/{five?} |               | App\Http\Controllers\Auth\PasswordController@postReset     | guest      |
|        | GET|HEAD|POST|PUT|PATCH|DELETE | password/{_missing}                                   |               | App\Http\Controllers\Auth\PasswordController@missingMethod | guest      |
+--------+--------------------------------+-------------------------------------------------------+---------------+------------------------------------------------------------+------------+
dflores@devdflores-colosa:~/sites/public_html/laravel-lte$
