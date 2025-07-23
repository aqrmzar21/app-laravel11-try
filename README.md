<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

🎯 Blog Project - Laravel 11 + SQLite
Selamat datang di proyek BLOG, sebuah aplikasi berbasis Laravel 11 yang dirancang dengan kesederhanaan dan efisiensi. Proyek ini menggunakan SQLite sebagai database utama untuk kemudahan setup dan pengembangan lokal.
💡 Catatan penting: Karena menggunakan PDO_SQLITE, sangat disarankan untuk menginstall TablePlus agar lebih mudah mengelola database SQLite.
🚀 Fitur Utama
- 🔗 Dibangun dengan Laravel 11
- ⚡ Terintegrasi dengan Vite Konfig
- ✈️ Menggunakan Airplane untuk deployment atau workflow (opsional)
- 🗂️ Menggunakan database SQLite
- 📂 Struktur proyek modular dan maintainable
- ⚙️ Migrasi database praktis langsung via Artisan

⚙️ Setup Environment
Langkah awal setup project:
- Clone repo: https://github.com/aqrmzar21/app-laravel11-try.git
- Masuk ke folder proyek dan install dependensi:
composer install
- Copy file .env.example ke .env:
cp .env.example .env
- Generate APP_KEY:
php artisan key:generate
🔧 Konfigurasi Database SQLite
Edit file .env dan pastikan bagian database seperti ini:
DB_CONNECTION=sqlite
DB_DATABASE=${PWD}/database/database.sqlite
💡 ${PWD} otomatis menunjuk ke path penuh di macOS/Linux. Untuk pengguna Windows, gunakan path absolut seperti:
DB_DATABASE=C:/Users/namamu/path-ke-project/database/database.sqlite

🧱 Migrasi SQLite
Laravel 11 siap digunakan dengan SQLite. Ikuti langkah berikut agar migrasi berhasil:
- Jalankan dua terminal terpisah:
- Terminal A (Bash): php artisan serve
- Terminal B (PowerShell/CMD): npm run dev
- Buat file SQLite kosong (jika belum ada):
touch database/database.sqlite
- Lakukan migrasi database:
php artisan migrate
- Aktifkan ekstensi SQLite di PHP:
Pastikan di file php.ini ada baris berikut:
extension=pdo_sqlite
extension=sqlite3
📎 Untuk pengguna Laragon, XAMPP, atau MAMP, pastikan kedua ekstensi diaktifkan sebelum migrasi.

📂 Struktur Proyek
- app/Models/ — Model Eloquent untuk SQLite
- database/migrations/ — Skrip migrasi Laravel
- routes/web.php — Routing aplikasi web
- resources/views/ — Template tampilan Blade

🧑‍💻 Tentang Saya
Saya adalah pengembang di balik proyek ini. Fimana adalah bentuk eksplorasi saya terhadap Laravel terbaru dengan pendekatan ringan menggunakan SQLite. Saya berharap proyek ini bisa jadi referensi atau inspirasi untuk developer lainnya.

📬 Kontribusi & Feedback
Silakan buka Issue untuk memberikan ide, saran, atau pertanyaan. Pull Request juga sangat saya apresiasi.

✨ Terima kasih sudah mampir!
Jangan lupa kasih ⭐ kalau menurutmu repo ini bermanfaat.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
