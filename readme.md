# Samwise

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