## API

[http://localhost:9001](http://localhost:9001)

### Step by step

1. Criar imagem do node:
```bash
    docker build -t node-image -f api/Dockerfile .
```

2. Subir container do node:
```bash
    docker run -d -v %cd%\api:/home/node/app -p 9001:9001 --link mysql-container --rm --name node-container node-image
```

