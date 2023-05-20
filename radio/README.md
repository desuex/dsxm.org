# Music Discovery Service
## Di.fm radio history project [WORK IN PROGRESS]

This project aims to create a music discovery service that saves tracks and artists information from multiple DI.FM channels. The service will allow users to discover more information about the music being played on these channels. It will integrate with various platforms such as Last.fm, YouTube, SoundCloud, and other streaming services to provide comprehensive information.

## Features

- Save tracks and artists information from multiple DI.FM channels.
- Integration with Last.fm to fetch additional information about tracks and artists.
- Integration with YouTube and SoundCloud to provide media content related to the tracks.
- Support for streaming services to access music from various sources.
- User-friendly interface for easy music exploration and discovery.

## Technologies Used

- Laravel: A PHP framework for building web applications.
- MySQL: A relational database management system for data storage.
- Last.fm API: To fetch additional information about tracks and artists.
- YouTube API: To retrieve related media content for the tracks.
- SoundCloud API: To access audio content related to the tracks.

## Installation

1. Clone the repository:
```shell
git clone https://github.com/desuex/dsxm.org
```

2. Navigate to the project directory:
```shell
cd dsxm.org/radio
```

3. Install the project dependencies using Composer:
```shell
composer install
```

4. Create a copy of the .env.example file and rename it to .env:

```shell
cp .env.example .env
```

5. Generate a unique application key:
```shell
php artisan key:generate
```

6. Update the database configuration in the .env file with your MySQL credentials:
```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run the database migrations to create the required tables:
```shell
php artisan migrate
```

8. Start the web interface:
```shell
php artisan server
```
9. Start the discovery service:
```shell
php artisan schedule:run
```
10. You're good to go! Access the application by visiting http://localhost:8000 in your browser.
