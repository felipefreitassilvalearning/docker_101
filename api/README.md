```bash
docker build -t node-image -f api/Dockerfile .
```

```bash
docker image ls
```

```bash
docker run -d -v <current_path>/api:/home/node/app -p 9001:9001 --link mysql-container --rm --name node-container node-image
```
<current_path> = %cd% (Windows) or $(pwd) (Linux)
