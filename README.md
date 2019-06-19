# Smart Landing Pages App

## Instructions

- You will need to run the latest swiftlp-<Date-Here>.sql file in database-usage folder in phpMyAdmin, this can be done by clicking on the database, then import, upload new .sql file, and press "GO" button.
- Database settings are in protected/config/main.php line 232, make sure your credentials match phpMyAdmin's, or the app will throw an error and not run.
- Files need to run in your MAMP/htdocs folder which is the base folder, to run this application.

### Admin Login

- URL is <Base-URL-For-MAMP>/manager/login (Make sure you have the most recent .htaccess file or this url will not work)

### Dev Environment

#### php.ini file
- upload_max_filesize = 128M
- post_max_size = 128M
- memory_limit = 128M

*Note:* Make sure to restart your MAMP server after making changes to php.ini files.

### Hidden Files

- If you cannot see your .htaccess file, it may be hidden, in a terminal run the command below:

> defaults write com.apple.finder AppleShowAllFiles YES


### Using Sourcetree?

- Do a pull before making changes, this will pull the latest files

- Uploading? move files to staged changes, fillout commit message, check push to origin checkbox and press commit button

- Getting errors? Click terminal on the right hand side of source tree. (From here you can do a git pull or push)
