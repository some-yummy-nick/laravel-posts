По курсу [Laravel-From-Scratch-HTML-CSS](https://github.com/laracasts/Laravel-From-Scratch-HTML-CSS)

# Для запуска контейнеров
```
docker-compose up
```

# Для установки пакетов
```
docker-compose run --rm composer install
```

# Для запуска artisan
```
docker-compose run --rm artisan
```
# Для заполнения базы
```
docker-compose run --rm artisan migrate:fresh --seed
```

# Для очистки кеша
```
docker-compose run --rm artisan tinker
cache()->forget('posts.all')
```