# Vehicles-APIRESTful
API JSON RESTful in Laravel 8 that contains all methods (GET,POST,PUT,DELETE)

## Project Setup

**Create sql Database**

```console
Database Name : back-end
```

**Update the database with new data model**

```console
$ php artisan migrate
```

**Start the web server on `http://http://127.0.0.1:8000`**

```console
$ php artisan serve
```
## Usage

| HTTP verbs | Paths  | Used for |
| ---------- | ------ | --------:|
| GET | /api/records|List all records|
| POST | /api/records| Add new record|
| PUT | /api/records/:id |  Update a record |
| DELETE | /api/records/:id | Delete a record|


## REST-Client Screenshot
![REST-Client](https://user-images.githubusercontent.com/73910136/116829580-5a1c8b00-ab9c-11eb-8242-a5034184230f.png)
## Postman Screenshot
![Postman](https://user-images.githubusercontent.com/73910136/116829560-43763400-ab9c-11eb-90ee-9350224e15ac.png)

## Postman Screenshot
![list](https://user-images.githubusercontent.com/73910136/116829590-6c96c480-ab9c-11eb-8938-222c87569884.png)
![add](https://user-images.githubusercontent.com/73910136/116829594-71f40f00-ab9c-11eb-8203-68c8cc9b2e2f.png)
![update](https://user-images.githubusercontent.com/73910136/116829597-76b8c300-ab9c-11eb-8e6a-8a737315b816.png)



