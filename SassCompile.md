# Single file, Fast methode

Node.js is required !

- Open a terminal at the root of the project an run ...

```
npm install -g node-sass less
```

- Create a .vscode folder at folder root

- Create a tasks.json file in this folder

- Paste the folowing ...

```
// Sass configuration
{
    // See https://go.microsoft.com/fwlink/?LinkId=733558
    // for the documentation about the tasks.json format
    "version": "2.0.0",
    "tasks": [
        {
            "label": "Sass Compile",
            "type": "shell",

            // Relative path from folder root, not .vscode !
            "command": "node-sass master.scss master.css",
            "group": "build"
        }
    ]
}
```

- Restart VSCode

# Automatic Gulp methode

Node.js is required !

- Open a terminal at the root of the project and init project

```
npm init
```

- Create a gulpfile.js file at the root of the project folder

- Paste the folowing ...

```
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sera/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./sera/css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./sera/sass/*.scss', gulp.series('sass'));
});
```

- Install gulp and gulp-sass globaly (one time) and localy (one time for each project) and test gulp install

```
npm install -g gulp
npm install gulp gulp-sass
gulp -v
```

- Run the task by ctrl+shift+p -> type: Run Task -> select sass:watch

