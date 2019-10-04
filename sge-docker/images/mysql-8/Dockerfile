# Use root/example as user/password credentials
version: '1.0'

services:

  db:
    image: mysql-8-latest
    command: =mysql_native_password
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: @gruposge

  adminer:
    image: adminer
    restart: always
    ports:
      - 3306:8000