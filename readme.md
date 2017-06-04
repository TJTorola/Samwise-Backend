# Samwise

### Dependencies

| Dependency            | Purpose              | Version | Docs                                                 |
|-----------------------|----------------------|---------|------------------------------------------------------|
| Laravel               | Framework            | 5.4.*   | https://laravel.com/docs/5.4                         |
| Laravel Cashier       | Stripe Integration   | ~7.0    | https://laravel.com/docs/5.4/billing                 |
| Laravel Envoy         | Task Queue           | ~1.9    | https://laravel.com/docs/5.4/envoy                   |
| Laravel Passport      | OAuth                | ^2.0    | https://laravel.com/docs/5.4/passport                |
| Laravel Scout         | Search Interface     | ^3.0    | https://laravel.com/docs/5.4/scout                   |
| Laravel Scout Elastic | ES Interface         | ^3.0    | https://github.com/ErickTamayo/laravel-scout-elastic |
| Laravel Backup        | Automated Backup     | ^4.17   | https://docs.spatie.be/laravel-backup/v4             |

### Install Dev

[Install Docker](https://docs.docker.com/engine/installation/) then in your console run:

```
docker run --rm -v $(pwd):/app composer/composer install
docker-compose up
cp .env.example .env
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan optimize
```

See [Laravel + Docker](https://medium.com/@shakyShane/laravel-docker-part-1-setup-for-development-e3daaefaf3c) for implimentation details.