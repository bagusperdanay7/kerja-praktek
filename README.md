# Sistem Informasi Pengelolaan Data Teknis Pelanggan Wholesale - Kerja Praktek | UNIKOM

Repository ini dikhususkan untuk kerja praktek yang dilaksanakan pada bulan **September 2021** hingga **Desember 2021** di perusahaan Telkom Indonesia Graha Merah Putih Bandung.

## Tentang Repository ini

**Sistem Informasi Pengelolaan Pelanggan Data Teknis Pelanggan Wholesale Berbasis Web** adalah aplikasi hasil Kerja Praktek di Perusahaan PT Telkom Indonesia Graha Merah Putih Bandung. Berdasarkan Surat Keterangan Persetujuan Publikasi, maka data/database orisinal tidak dapat ditampilkan karena bersifat rahasia dan milik hak cipta perusahaan PT Telkom Indonesia Graha Merah Putih Bandung. Maka untuk kebutuhan demo aplikasi, kami mengganti data orisinal dengan data yang telah diubah sedemikian rupa (dummy) yang dapat diperlihatkan ke khalayak publik.

## Team

-   Bagus Perdana Yusuf
-   Raden Fachrul Ramzy Muhammad
-   Robi Nurhidayat

## Preview

> [!IMPORTANT]  
> Beberapa data seperti alamat, AO dan SID tidak dapat ditampilkan karena data-data tersebut sensitif bagi perusahaan. Untuk Data yang terdapat pada halaman Data Management hanya data user untuk pengujian aplikasi, sehingga tidak perlu disensor.

### Login Page

![Login Page](docs/image/Login-page.png)

### Login Page (Mobile)

![Login Page - Mobile](docs/image/Login-page-mobile.png)

### Rekap Deployment Page

![Home Page](docs/image/Rekap-deployment-page.png)

### Rekap Progress Page

![Home Page](docs/image/Rekap-progress-page.png)

### WFM Deployment Page

![WFM Deployment Page](docs/image/Wfm-deployment-page.png)

### WFM Deployment - Create Form

![WFM Deployment - Create Form](docs/image/Wfm-create-page.png)

### WFM page - Import feature

![WFM page - Import feature](docs/image/Import-feature.png)

### Progress Lapangan Page

![Progress Lapangan Page](docs/image/Progres-lapangan-page.png)

### Progress Lapangan - Create Form

![Progress Lapangan - Create Form](docs/image/Progress-lapangan-create-page.png)

### Progress Lapangan - Edit Form

![Progress Lapangan - Edit Form](docs/image/Progress-lapangan-edit-page.png)

### Disconnect

![Disconnect Page](docs/image/Disconnect-page.png)

### Exe Summ

![Exe Summ Page](docs/image/Exe-summ-page.png)

### User Management Page

![User Management Page](docs/image/User-management-page.png)

## Technology stack & Tools

**Program ini membutuhkan:**

| Tech Stack & Tools                     | Version |
| -------------------------------------- | ------- |
| Bootstrap CSS                          | 4.0+    |
| Composer                               | 2.20+   |
| DataTables                             | 1.11+   |
| PHP                                    | 7.4.20+ |
| Laravel                                | 8.54+   |
| Line Awesome                           | 1.0.2+  |
| Sweet Alert                            | 2.0+    |
| Visual Studio Code                     | Latest  |
| WAMP / XAMP (PHP, MySQL, Apache/Nginx) | Latest  |

## Setup

### Kustomisasi `.env`

1. Copy .env-example
2. Rename .env-example copy menjadi .env
3. Ubah isi `.env`nya

### Install Dependencies

Buka terminal, ketikkan perintah:

```shell
composer update
npm install
```

### Run Program

Buka terminal, ketikkan perintah:

```shell
php artisan key:generate
php artisan serve
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[CMS Max](https://www.cmsmax.com/)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
