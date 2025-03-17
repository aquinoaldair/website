## Configuration

```sh
  docker compose up
```

```sh
  cp .env.example .env
  docker compose exec app bash
  composer install
  php artisan key:generate
  cp .env .env.testing
  php artisan migrate
  npm install
  npm run build
```

Now edit it and change the database configuration in .env.testing:

```
APP_KEY=base64:o49gKeBzKOrcRoSkhIdQSmpp4cHM/yCxCyeFCVsSZtU=
DB_CONNECTION=sqlite
DB_DATABASE=database/testing.sqlite
DB_FOREIGN_KEYS=true
```

Then, create the empty file in terminal outside from container:

```sh 
  touch database/testing.sqlite
```
