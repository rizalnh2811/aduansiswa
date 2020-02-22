# Aplikasi Website Aduan Siswa


##### Cara menjalankan program website aduan siswa






Masuk ke dalam folder aspirasi melalui CMD lalu ketikkan

composer install

php artisan key:generate

php artisan serve



##### Setelah servernya dijalankan, lalu buka Visual Studio Code nya

## Langkah langkah




1. Buat database dengan nama db_aduansiswa

2. Masuk ke dalam file .env.example lalu ganti nama file tersebut menjadi .env

3. Didalam file .env ubah DB_DATABASE sesuai nama database kalian

Lalu buka cmd dan ketikkan

php artisan migration:run
