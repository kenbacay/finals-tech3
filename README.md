# Tasks for Today Management System

Copy these files into the Laravel project folder for the new task system.

## Setup

Remove the old TFA5 migration from `database/migrations` before copying this package. Then run:

```bash
php artisan migrate:fresh --seed --seeder=TaskSystemSeeder
php artisan serve --port=8002
```

Pages: `/`, `/tasks`, `/profile`, and `/about`.
