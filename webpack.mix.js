let mix = require('laravel-mix');

mix
.js('src/app.js', 'public')
.sass('src/app.scss', 'public');

// kabliataskio nereikia, nes sujungti per taska.
// app.scss bendras, jeigu bus kitu failiuku suimportinam
