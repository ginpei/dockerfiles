# Getting Started

```bash
$ docker-compose run composer composer install
```

It will create followings:

- `vender/`
- `wp/`

# Delete Everithing

```bash
$ rm -rf vendor/ wp/; docker rm `docker ps -aq`; docker volume prune
```

Except for images. If you need, run `docker-composer build` additinally.
