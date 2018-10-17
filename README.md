# How to create a web server

## Creating project

```bash
composer create-project carno-php/skel-httpd my-project
```

## Run application

```bash
./vendor/bin/httpd server:start --listen=:8080 --debug
```

## Get the world

```bash
curl http://127.0.0.1:8080/
```
