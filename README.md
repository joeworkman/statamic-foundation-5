.. waiting for Foundation 4 to restart !! ..

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
I'm on a Mac so I tried to make you that Symlinkscript `symlink.sh`

1. Open your Terminal & go to your theme folder cd path/to/theme
2. type sh symlink.sh
3. type in the path to your statamic-folder (on Mac Drag&Drop works)
4. set your theme to zurb-foundation
5. Enjoy.



### Rename theme
The name of the theme is foundation to rename the theme:
- rename the folder to the name you want
- rename the **_scss/zurb-foundation.scss css/zurb-foundation.css js/zurb-foundation.js** to the same name

## Included Templates
### default
It's like the london-wild default starting pages

### demo
all Templates from http://foundation.zurb.com/templates.php -> I want to patialize them soon

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

## Licence
### The MIT License (MIT)
Copyright (c) 2012 Maximilian Stauss

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
