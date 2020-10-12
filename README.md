# Boilerplate WordPress Theme

This is a skeleton for starting projects based on my own workflow.

## Installation

In order to install this theme just clone it inside wp-content/themes folder.


## Development Workflow

In order to use this theme you need to have 
1. Node.js (installed -g  )  in windows needs to be downloaded from nodejs.org
2. Gulp & gulp-cli (-g)
3. gulp-sass
4. BrowserSync.js
5. (Future addition  gulp-sourcemaps)

or just copy this commands (Please take care to have SUDO or Admin Privilleges while installing)
```bash


npm install gulp

npm install --save-dev gulp-sass

npm install --save-dev browser-sync

npm install --save-dev gulp-sourcemaps

```

## Files

### Resets
This theme has resets about visual-bakery and other related tools.
Also in this version there is a CSS Reset inside scss/resets folder/file.

### Styles

#### Style -> style.scss 
Either use it standalone and write everything.
OR just import different component from the preffered file pattern.


This is compiled to the main style.css tha is used by wordpress.


## License
[MIT](https://choosealicense.com/licenses/mit/)
