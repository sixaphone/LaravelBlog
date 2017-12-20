# LaravelBlog
A blog created in Laravel

A blog to show your posts with the image to go with

How To Install:

    Download or even better clone the repo
    Extract the files into your server directory
    Enable Database connection (mariadb)
    Edit .env file, set dbname, user and pass
    In CLI go to cd /path/to/folder/
    Run Command php artisan migrate
    In /public delete storage folder
    Run command php artisan storage:link /to enable picture storage
    Add a file called noimage.png for people that do not add images
    Run Command php artisan serve
    This enables localhost:8000
    Have fun :D

Pages:

    Home
    Login and register
    Posts
    Add new posts
    Edit Posts
    Delete Posts

