# To set project up:

- git clone https://github.com/DruvisRudzitis/Product-list.git
- composer install
- copy .env.example to .env
- fill in .env with your configuration values
- create table 'products':
```
    id          int auto_increment              primary key,
    sku         varchar(255)                       not null,
    name        varchar(255)                       not null,
    price       varchar(255)                       not null,
    type        varchar(255)                       not null,
    description varchar(255)                       not null,
    created_at  datetime default CURRENT_TIMESTAMP not null
```
- php -S localhost:8000
