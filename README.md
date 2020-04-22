# Intruksi

Ini adalah project jual beli atau shopping cart yang menyediakan jual beli sayur-sayuran.

# Struktur Project
* App
    -> Config
    -> Controllers
* dist
    -> css
    -> js
    -> img
* public
    -> index.php
    -> robot.txt
    -> .htaccess
* resources
    -> views
        -> welcome.html or welcome.php
* setting
    -> default akses app/Config for Configuration application
* src
    -> scss
    -> index.js

Keterangan:
    Direktori public setara dengan public_html yang berada dihosting, ini berfungsi untuk mengindex permintaan browser saat pertama kali website diakses.
    ~ public/index.php
        Default indexes website.

    ~ public/.htaccess
        File yang berfungsi untuk mengakses pengaturan dari httpd.conf, dan mengkonfigurasi ulang aplikasi dalam menghandle permintaan dan memberikan respon kepada user.
    ~ etc
 
    ~ app
        / Config
        Direktori untuk menyimpan pengaturan default dari aplikasi, contohnya:
        database.php
        / Controllers
        Direktori untuk menyimpan file yang menghandle permintaan uri dari user.
        ex: http://example.com/[controller_name]/[method_name][argument]
    ~ dist
        / css
        Direktori yang digunakan untuk menyimpan stylesheet.
        / js
        Direktori yang digunakan untuk menyimpan file javascript.
        / img
        Direktori yang digunakan untuk menyimpan gambar seperti avatar, icon, dan lain-lain.
    ~ resources
        / views
        Direktori khusus untuk menyimpan template dari website.
    ~ setting
        Direktori untuk menyimpan file untuk mengakses pengaturan dari aplikasi.
    ~ src
        / scss
        Direktori untuk menyimpan file scss bagi yang menggunakan sass untuk menghasilkan file css yang akan disimpan di direktori dist.

 # Persyaratan
    ~ PHP7.0 - Lebih Tinggi
    PHP 5.6 Masa dukungannya akan segera habis, rekomendasi menggunakan versi PHP 7.0^ atau yang lebih tinggi, ini berkaitan dengan keamanan dari sebuah website dari hacking.
    ~ MysQl atau MariaDB
    Versi berapapun, direkomendasikan gunakan yang terbaru.
    ~ sass
    ~ nodejs
    ~ webpack
    ~ yarn
    ~ jekyll

# Mulai cepat
    Gunakan perintah ini untuk memulai cepat aplikasi:
    $ php -S localhost:8080 -t public

# Other...
