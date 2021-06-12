# otel-php-laravel-basic-example
A basic example on using the OpenTelemetry-PHP Library within your Laravel Application

# Installation


1. Run
```
composer install
```

2. Run
```
docker-compose up -d
```

3. Create file for your configuration and environmental variables by
 coping contents of  the `.env.example` file to a new  `.env` file 

3. Generate encryption keys for application, by  running
```
php artisan key:generate
```

4. Run
```
php artisan serve
```
5. App available at [http://localhost:8000/hello](http://localhost:8000/hello)  
    Jaeger available at [http://localhost:16686/search](http://localhost:16686/search)   
    Zipkin available at [http://localhost:9411/](http://localhost:9411/)

