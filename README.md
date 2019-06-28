
## E-commerce API 

## Api document
- https://documenter.getpostman.com/view/3096316/S1Zw8qeU 

## Libraries in the Project
- Laravel/passport (Laravel Passport is an OAuth2 server)

## All Endpoints
```
 GET|HEAD  | api/user                                      
 POST      | api/products                            
 GET|HEAD  | api/products                            
 GET|HEAD  | api/products/{product}                  
 DELETE    | api/products/{product}                  
 PUT|PATCH | api/products/{product}                  
 POST      | api/products/{product}/reviews          
 GET|HEAD  | api/products/{product}/reviews          
 DELETE    | api/products/{product}/reviews/{review} 
 PUT|PATCH | api/products/{product}/reviews/{review} 
 GET|HEAD  | api/products/{product}/reviews/{review}                                                                                                        
 
```

### Getting Started

### Installation (Manual)
```console
$ git clone https://github.com/melihs/e-commerce-api.git 
$ cd e-commerce-api && composer install
$ cp .env.example .env
- create new database and modifed your .env
$ php artisan migrate:fresh --seed
$ php artisan passport:install
$ php artisan key:generate 
$ php artisan serve
```

