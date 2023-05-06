Comands:

```bash
docker build -t <image_name> -f <dockerfile_name> api/db/Dockerfile .
```
-t = tag (name of the image)
<br>-f = file (dockerfile path)

```bash
docker image ls
```
List all images

```bash
docker run -d --rm --name <container_name> <image_name>
```
-d = detached mode (run in background, not blocking terminal)
<br>--rm = remove container after stop
<br>--name = name of the container

```bash
docker ps
```
List all containers

```bash
docker exec -it <container_name> <command>
```
-i = interactive mode (keep STDIN open even if not attached)

<br><command> = mysql -uroot -p{{MYSQL_ROOT_PASSWORD}} < api/db/script.sql

```bash
docker exec -it <container_name> /bin/bash
```
-t = allocate a pseudo-TTY (terminal)

```bash
docker stop <container_name>
```
Stop container

```bash
docker run -d -v <host_path>:<container_path> --rm --name <container_name> <image_name>
```
-v = volume (host_path:container_path)
<br><host_path> = current path
<br>    Linux = $(pwd)
<br>    Windows = %cd%\api\db\mysql
<br><container_path> = path inside container
<br>    :/var/lib/mysql
