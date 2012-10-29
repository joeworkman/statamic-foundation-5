#!/bin/sh

# Colors for readability
important=$(tput setaf 1) # red
question=$(tput setaf 6)  # blue
message=$(tput setaf 5)   # purple
reset=$(tput sgr0)

# get destination
echo $question"Path to Statamic-Folder"$reset
read -e STATAMIC

# start symlinking
echo $message"Creating Symlinks .."$reset
for theme in $(pwd)/_theme/*
do
  theme_base=`basename $theme`
  ln -s "$theme" "$STATAMIC/_themes/$theme_base"
  ln -s $(pwd)/_config/$theme_base.yaml $STATAMIC/_config/$theme_base.yaml
  ln -s $(pwd)/_config/routes.yaml $STATAMIC/_config/routes.yaml
done;

for plugin in $(pwd)/_add-ons/*
do
  plugin_base=`basename $plugin`
  ln -s $(pwd)/_add-ons/$plugin_base $STATAMIC/_add-ons/$plugin_base
done;
echo $message" .. done!"$reset

