# **Laravel Tugu**
laravel backend for tugu stock app

# **How To Install**

1. Clone this project by opening your terminal / console then type (git cli command required): ``git clone https://gitlab.com/jymiko/laravel-tugu.git``

2. Do this (Need to install composer cli command): ``composer install``

3. Install laravel via composer ```composer global require "laravel/install"``` 

4. Change the directory to the project's root path. ``cd /Path/to/your-project/``

5. Rename file ``.env.example`` to ``.env`` via your text editor

5. Run ``php artisan key:generate`` from the command line.

6. Run ``php artisan cache:clear`` from command line

7. Create a database and name it ``tuguDb``

8. Open .env file and ``change the database username,password and database name``

9. Run ``php artisan migrate`` from command line

Start your project by doing this command: ``php artisan serve``



# **How to contribute**

Create your own branch: ``git checkout -b your/branch-name``

Do your changes.
Create a commit message by doing this:

- ``git add .``
- ``git commit -a -m "Type your short definition changes here"``
- ``git push origin <your-branch-name>``


Then create new merge request [here](https://gitlab.com/jymiko/laravel-tugu/merge_requests)



License
MIT Alrights reserved.
