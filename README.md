# The Foundation 5 Theme 
Based on the Statarkers Theme I tried to make a foundation 5 Theme for everyone to use

##Installing

To install the theme follow the instructions below.

1. [Install Statamic:](http://statamic.com/learn/digging-in/installing) **Don't forget to set up your .htaccess file**.
2. Copy the statarkers theme folder to your _themes folder. Please note if you have downloaded the statarkers-theme-master folder **the statarkers theme is located inside the _themes folder**.
3. Rename the foundation5 theme folder to the name of your theme. From now on we will still refer to the foundation5 theme folder but this will now be whatever you rename it to.
4. Change the name of the foundation5.js file (located in the js folder) to the name of your theme.
5. In the foundation5 theme folder go to the css folder. Rename the foundation5.css file to the name of your theme then find the sass folder and rename the foundation5.scss file to the name of your theme.
6. In the foundation5 theme folder open the config.rb file and change the http path to /themes/yourThemeName instead of /themes/foundation5.
7. Delete the contents of your Statamic install fieldsets folder then copy the new fieldsets from the foundation5 folder (located in _config/fieldsets).
8. If you would like to use the dummy content provided with the foundation5 theme (recommended) then delete the contents of your existing _content folder and copy the files and folders from the foundation5 _content folder.
9. In your Statamic install go to `_config` settings YAML file and change the `_theme` name from denali to the name you have given to your theme. If this is a clean install you should also change the site name and url to whatever you are using. We suggest also changing the `_taxonomy_slugify` to true as this gives you cleaner url's.
10. Add the gitignore file to the root of your project/site (remove sample from the front of the file name), in here there are some handy ignores for Statamic.
11. Run a compass watch on the foundation5 theme folder using the terminal, alternatively you can use something like [Codekit](http://incident57.com/codekit/) to preprocess the SASS files.

##More Information

Thanks to [Statamic Themes](http://www.statamicthemes.com/themes) for making the Statarkers-Theme.