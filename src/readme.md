# UniLink

This is an online hostel booking application with two users, the admin and the student.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

The project is built on Laravel. For the system to run, the following prerequisites are required.

Copy the .env.example to .env

```
cp .env.example .env
```

Generate the application encryption key
```
php artisan key:generate
```

Configure the database to match your environment as per `docker-compose.yml`
```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Open the application on a web browser
```
http://127.0.0.1/
```

Create an account with stripe and insert the keys in the .env file
```
STRIPE_PUBLISHABLE_KEY=
STRIPE_SECRET_KEY=
STRIPE_CURRENCY=
```

## Using the application

Since the application has two users, there are two different urls for each of them.

### Admin Dashboard

This is the superuser. Has all the rights. To access the dashboard use this link

```
http://127.0.0.1/admin/login
Username - Artisan
Password - 123456
```

### The Student

Can perform booking of hostels and online payment through stripe. Accessible through

```
http://127.0.0.1/
```

and then create an account.


## Built With

* [Laravel](https://laravel.com/) - The web framework used.
* [AdminLTE](https://adminlte.io/) - Used on the dashboards

## Authors

* **Joram Wambugu** - *Initial work* 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details