# Getting Started

```bash
$ docker-compose run composer composer install
$ docker-compose up
```

Then wait a while and open `http://localhost/`.

The first line will create followings:

- `db/`
- `vender/`
- `wp/`

# Delete Everithing

```bash
$ rm -rf db/ vendor/ wp/; docker rm `docker ps -aq`
```

Except for images. If you need, run `docker-composer build` additinally.
