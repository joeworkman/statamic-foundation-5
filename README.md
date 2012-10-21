# Statamic Theme for [Zurb Foundation](http://foundation.zurb.com)
It's still in development (pre alpha stadium) so use it on your own risk!

## Getting started
### Prerequisites
#### on Mac
if RUBY + RVM ([RailsInstaller](http://railsinstaller.org/#osx)) is installed

	gem install compass
	gem install zurb-foundation
	
then download this starterkit and you should be ready to go


### Include theme in statamic
I'm on a Mac so here is what I did: 

    ln -s path/to/folder/statamic-foundation /path/to/statamic/_themes/zurb-foundation
    
.. to create a symlink to the Theme

### Rename theme
The name of the theme is foundation to rename the theme:
- rename the folder to the name you want
- rename the **_scss/zurb-foundation.scss css/zurb-foundation.css js/zurb-foundation.js** to the same name

## Included Templates
### default
It's like the london-wild default starting pages

## Included Partials
### Navigation
#### Top Bar
The black top-bar (also known from Twitter Bootstrap)
- no nested navigation yet

### Slider
An imageslider that uses the images from

	---
	partialSlider:
	  -
        img: http://placehold.it/1000x400&text=[img 1]
    	caption: Big Slider Image One
  	  - 
        img: http://placehold.it/1000x400&text=[img 2]
    	caption: Big Slider Image Two
  	  - 
        img: http://placehold.it/1000x400&text=[img 3]
        caption: Big Slider Image Three
      - 
        img: http://placehold.it/1000x400&text=[img 4]
        caption: Big Slider Image Four
    ---
    
Automaticly recognizes captions (if the variable is not set in the first one -> no captions are used)

- if there is no partialSlider variable set the plugin returns nothing

	