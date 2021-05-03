# RecordsApi
RESTful API in Laravel 8 that contains all methods (GET,POST,PUT,DELETE)

## Project Setup

**Create MYSQL Database**

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
| PUT | /api/records/id |  Update a record |
| DELETE | /api/records/id | Delete a record|

## You can test the API using REST-Client or Postman

**REST-Client Screenshot**
![REST-Client](https://user-images.githubusercontent.com/73910136/116829580-5a1c8b00-ab9c-11eb-8242-a5034184230f.png)
**Postman Screenshot**
![Postman](https://user-images.githubusercontent.com/73910136/116829560-43763400-ab9c-11eb-90ee-9350224e15ac.png)

## I add three interfaces (Show,Add,Edit)
## Postman Screenshot
![list](https://user-images.githubusercontent.com/73910136/116829590-6c96c480-ab9c-11eb-8938-222c87569884.png)
![image](https://user-images.githubusercontent.com/73910136/116834307-5b0de680-abb5-11eb-85fd-73e19c8a151d.png)
![image](https://user-images.githubusercontent.com/73910136/116834318-6b25c600-abb5-11eb-8e18-db742c334549.png)




