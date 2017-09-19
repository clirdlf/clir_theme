# CLIR+DLF Child Theme
![Stories in Ready](https://badge.waffle.io/clirdlf/clir_theme.png?label=ready&title=Ready)](http://waffle.io/clirdlf/clir_theme)

This is a Wordpress child theme for CLIR+DLF websites. You will need to
make sure you have the latest version the
[Alchem Pro theme](https://www.mageewp.com/alchem-theme.html) and it is
in your `themes` directory.

## Development Setup

I'm assuming you're using [MAMP](https://www.mamp.info). If you're doing
something else, you'll need to update the `dev_url` in `gulpfile.js` to
whatever your connection is (and probably `port` too).

```
$ cd /Applications/MAMP/htdocs/wordpress/wp-content/themes
$ ln -s ~/projects/projects/clir_theme
```

Then activate the theme in the Wordpress admin panel.


Install the `node` dependencies:

```
$ cd ~/projects/clir_theme
$ npm install
```

Create a `.env` file in the project root and set the following entries:

```
DEV_URL='http://localhost:8888/wordpress'
DEV_PORT=8888
```

Adjusting your port and URL to the appropriate location.

Open the project in your favorite editor, then start the `gulp` proxy to
compile SCSS and do browser refreshes on saves.

```
$ cd ~/projects/clir_theme
$ mvim .
$ gulp
```

## Customizations

To make things "easy" the `top_bar` is updated in the theme so when
these links change, it can be done in the theme and all sites will be
updated as soon as the theme is pushed to the Multisite instance.

![winning](http://www.reactiongifs.com/wp-content/uploads/2013/09/rock.gif)
