## Create New Rails Project

```bash
$ docker-compose run rails rails new . --force --skip-bundle
```

## Start and Stop

```bash
$ docker-compose up -d
```

```bash
$ docker-compose stop
```

## Generate Scaffold

```bash
$ docker-compose run rails rails g scaffold posts title:string body:text
$ docker-compose run rails rake db:migrate
```

## Use PostgreSQL

After setting up, add a Gem.

```
gem 'pg'
```

```bash
$ docker-compose build
```

And update `config/database.yml`.

```yml
default: &default
  adapter: postgresql
  pool: 5
  timeout: 5000
  encoding: unicode
  username: postgres
  password:
  host: db

development:
  <<: *default
  database: myqpp_development

test:
  <<: *default
  database: myqpp_test

production:
  <<: *default
  database: myqpp_production
```

Then set up databases.

```bash
$ docker-compose run rails rake db:create
```
