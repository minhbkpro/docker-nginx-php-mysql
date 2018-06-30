# Prerequire

Docker: https://www.docker.com/get-docker

# Install

Clone repo and copy ```docker-compose.yml``` and ```docker``` folder to your project's root folder.

Build: ```docker-compose build --no-cache```

Run: ```docker-compose up -d```

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
| host     | on window:     192.168.99.100<br>on OSX, Linux: 0.0.0.0 |
| username | dev   |
| password | dev   |
| database | dev   |
| port     | 3300  |
