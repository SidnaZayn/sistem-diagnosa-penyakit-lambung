## Instalasi
1. clone project github
2. masuk (cd) ke project
3. install composer -> composer install
4. install npm -> npm install
5. buat database (stomach_disease_diagnose)
6. ganti .env.example jadi .env lalu sesuaikan nama db di .env (DB_DATABASE=stomach_disease_diagnose)
7. generate key -> php artisan key:generate
8. migrasi DB -> php artisan migrate
9. jalankan npm -> npm run dev
10. jalankan project -> php artisan serve

## Requirement
1. composer
2. php 8
3. node 16.17 (npm 9.1.1)
4. git