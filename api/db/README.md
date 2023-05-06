## Database

### Step by step

```bash
    docker build -t mysql-image -f api/db/Dockerfile .
```

```bash
docker run -d -v %cd%\api\db\data:/var/lib/mysql --rm --name mysql-container mysql-image
```

```bash
docker exec -i mysql-container mysql -uroot -padmin < api/db/script.sql
```

```bash
docker exec -it mysql-container /bin/bash
```
