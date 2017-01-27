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