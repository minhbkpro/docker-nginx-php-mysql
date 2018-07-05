# Prerequire

Docker: https://www.docker.com/get-docker

# Install & run

Clone repo to your project's root or download and copy ```docker-compose.yml```, ```.env``` and ```docker``` folder to your project's root. If you already have ```.env``` file then merge it.

Build: ```docker-compose build --no-cache```

Run: ```docker-compose up -d```

# Config webroot

By default nginx will run index.php file at your project's root, but if your project is required to run index.php in other folder like ```public``` or ```webroot``` in some framework, you need to change nginx config.

Suppose, your project folder like this:

```
.
├── app/
│   ├── ...
│   ├── public/
│       ├── index.php
│       ├── css/
│       ├── js/
│       └── ...
│   └── ...
├── docker/
├── docker-compose.yml
└── ...
```

Then in ```/docker/nginx/default.template```, change this line ```root /usr/src/www;``` to ```root /usr/src/www/app/public;```

Run ```docker-compose up -d``` command again to apply nginx config.

# Access website

On window:

| Service    | Url                 |
| ---------- | ------------------- |
| website    | 192.168.99.100:8000 |
| phpMyAdmin | 192.168.99.100:8088 |

On OSX, Linux:

| Service    | Url          |
| ---------- | ------------ |
| website    | 0.0.0.0:8000 |
| phpMyAdmin | 0.0.0.0:8088 |

# Connect to MySQL

From your website:

| Name     | Value |
| -------- | ----- |
| host     | mysql |
| username | dev   |
| password | dev   |
| database | dev   |
| port     | 3306  |

From your host computer:

| Name     | Value |
| -------- | ----- |
| host     | Window: 192.168.99.100<br>OSX, Linux: 0.0.0.0 |
| username | dev   |
| password | dev   |
| database | dev   |
| port     | 3300  |

MySQL shell access:

```
docker exec -it mysql bash
```
then
```
mysql -udev -pdev dev
```
to exit from docker bash, run ```exit``` command

# Run composer command

```
docker exec -it ubuntu composer command_here
```

Example:

```
docker exec -it ubuntu composer install
```

# Run npm command

```
docker run -v "$PWD":/usr/src/app -w /usr/src/app node npm command_here
```
