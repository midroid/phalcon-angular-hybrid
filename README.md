# phalcon-angular-hybrid

# Create a php workspace

# Install Phalcon
## curl -s https://packagecloud.io/install/repositories/phalcon/stable/script.deb.sh | sudo bash

### then
## sudo apt-get install php5-phalcon

# install devtools with composer
## create the composer.json with

{
    "require": {
        "phalcon/devtools": "dev-master"
    }
}

## run 'composer install'

# Add symbolic link and change permission
## sudo ln -s ~/workspace/vendor/phalcon/devtools/phalcon.php /usr/bin/phalcon

## sudo chmod ugo+x /usr/bin/phalcon

# Create project from the command line
## phalcon project blog

# Update virtual host to see project
## run `sudo nano /etc/apache2/sites-enabled/001-cloud9.conf`

// change this line 
DocumentRoot /home/ubuntu/workspace

// To this
DocumentRoot /home/ubuntu/workspace/phalcon-angular-hybrid/public

# Setup Database
### mysql-ctl cli
### create database blog
### use blog;
### select @@hostname;
### exit

## Edit ~/workspace/phalcon-angular-hybrid/app/config/config.php with database settings
'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'midroid',
        'password'    => '',// your password
        'dbname'      => 'blog',
        'charset'     => 'utf8',
    ),
    

