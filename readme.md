# Samwise

### Dependencies

| Purpose              | Library               | Version | Docs                                                 |
|----------------------|-----------------------|---------|------------------------------------------------------|
| Framework            | Laravel               | 5.4.*   | https://laravel.com/docs/5.4                         |
| Stripe Integration   | Laravel Cashier       | ~7.0    | https://laravel.com/docs/5.4/billing                 |
| Task Queue           | Laravel Envoy         | ~1.9    | https://laravel.com/docs/5.4/envoy                   |
| OAuth                | Laravel Passport      | ^2.0    | https://laravel.com/docs/5.4/passport                |
| Search Interface     | Laravel Scout         | ^3.0    | https://laravel.com/docs/5.4/scout                   |
| ES Interface         | Laravel Scout Elastic | ^3.0    | https://github.com/ErickTamayo/laravel-scout-elastic |
| Automated Backup     | Laravel Backup        | ^4.17   | https://docs.spatie.be/laravel-backup/v4             |

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