# Wahyu Nugroho Indrawinata - https://natanawa.github.io/

# Cara install :
1. Clone Repository Ini
2. composer install
3. yarn install
4. artisan key:generate
5. artisan horizon:install
6. artisan telescope:install
7. artisan storage:link


# Konfigurasi file .env :
Selanjutnya lakukan konfigurasi file *.env* Anda sesuai dengan data website dan koneksi databasenya.
1. Buka file *.env.example*, rename menjadi *.env* lalu edit
2. Setting APP_URL=http://alamatwebsitemu,
3. Setting DB_DATABASE=namadatabase
4. Setting DB_USERNAME=usernamedatabase
5. Setting DB_PASSWORD=passworddatabase
6. Simpan kembali file .env
7. 


# Migrate Database
php artisan migrate --seed


# Cara mengakses
 1. Buka browser
 2. Ketik alamat http://localhost/APPNAME
 
 # Halaman Administrator
 - Buka alamat: http://localhost/APPNAME/login
 - Username: korodarmo@gmail.com
 - Password: 123456