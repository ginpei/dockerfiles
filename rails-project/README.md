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
