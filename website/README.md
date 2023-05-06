## Website

[http://localhost:8888](http://localhost:8888)

### Step by step

1. Criar imagem do php:
```bash
    docker build -t php-image -f website/Dockerfile .
```

2. Subir container do php:
```bash
    docker run -d -v %cd%\website:/var/www/html -p 8888:80 --link node-container --rm --name php-container php-image
```
