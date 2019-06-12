# smartlandingpages
Smart Landing Pages

## Instructions

- You will need to run the latest swiftlp-<Date-Here>.sql file in database-usage folder in phpMyAdmin
- Database settings are in protected/config/main.php line 232, make sure your credentials match phpMyAdmin's
- Files need to run in your MAMP/htdocs folder to run this application

### Admin Login

- URL is <Base-URL-For-MAMP>/manager/login (Make sure you have the most recent .htaccess file or this url will not work)

### Dev Environment

- php.ini file
- upload_max_filesize = 128M
- post_max_size = 128M
- memory_limit = 128M

*Note:* Make sure to restart your MAMP server after making changes to php.ini files.

### Hidden Files

- If you cannot see your .htaccess file, it may be hidden, in a terminal run the command below:

> defaults write com.apple.finder AppleShowAllFiles YES