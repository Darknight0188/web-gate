# mlh-gate-web

## Installation

Run docker
```
docker-compose up
```

** If without composer, npm and yarn on local **
```
docker exec -it mlh-gate-php sh
```

Install composer, npm
```
composer install
npm install
```

### Front-end
```
yarn run watch
```

## Create env file
- Create file .env in workdir app
- Copy from .env.example to .env

** or **
```
cp .env.example .env.stg
```

## Generate key
```
docker exec -it mlh-gate-php sh
php artisan key:generate
```

## Auto fix code php, back-end
```
./vendor/bin/phpcbf
```

## Open web
** https://localhost **
