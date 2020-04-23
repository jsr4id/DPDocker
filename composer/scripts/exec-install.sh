#!/bin/bash

# Initialize some variables
extension=$1
path=$2
environment=$3
root=$4

if [ -z $environment ]; then
  environment="dev"
fi

if [ -z $root ]; then
  root=$(realpath $(dirname $0)/../../..)
fi


# Link host directory as composer dir for caching
rm -rf /home/docker/.composer

if [ ! -d /usr/src/Projects/DPDocker/composer/tmp ]; then
  mkdir /usr/src/Projects/DPDocker/composer/tmp
fi

ln -s /usr/src/Projects/DPDocker/composer/tmp /home/docker/.composer

echo "Started to install the PHP dependencies on $root/$path!"

# Loop over composer files
for fname in $(find $root/$extension/$path -path ./vendor -prune -o -name "composer.json" 2>/dev/null); do
  # Exclude the files in vendor directories
  if [[ $fname == *"vendor"* ]]; then
    continue
  fi

  # Exclude tests and docs files when not explicit requested
  if [[ -z "$path" && ( $fname == *"docs"* || $fname == *"tests"* ) ]]; then
    continue
  fi

  projectDirectory=$(dirname $fname)

  cd $projectDirectory

  echo "Installing $(dirname ${fname#"$root/"})!"

  # Remove the vendors directory
  if [ -d "$projectDirectory/vendor" ]; then
    sudo rm -rf "$projectDirectory/vendor"
  fi

  # Install the dependencies
  if [ $environment == 'dev' ]; then
    composer install --dev --prefer-dist
    echo "Outdated packages"
    composer outdated
  else
    composer install --classmap-authoritative --no-dev --prefer-dist --quiet
  fi

  # Cleanup the directory when we are in an extension directory
  if [[ "$path" != *"docs"* && "$path" != *"tests"* ]]; then
    echo "Cleaning up files in vendor"
    php $(dirname $0)/cleanup-vendors.php $projectDirectory > /dev/null
  fi

  echo "Finished installing $(dirname ${fname#"$root/"})!"
done
