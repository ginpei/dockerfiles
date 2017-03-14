# WordPress Project

Please avoid from publishing `.env` in your real project.

## First of All

Get your [WordPress](https://wordpress.com/) and place it.

## Start

```bash
$ docker-compose up -d
```

It keeps running in back.

## Stop

```bash
$ docker-compose stop
```

## After Editing Dockerfile

```bash
$ docker-compose build
```

## Delete Anything inside DB

You may need this after changing DB settings.

```bash
$ docker-compose stop
$ docker-compose rm -f
$ docker volume ls  # just in case... find the name "wordpressproject_data"
$ docker volume rm wordpressproject_data
```

(Is there a better way to remove named volumes?)

## See Logs

```bash
$ docker-compose logs
```

Add `-f` to follow updating.
