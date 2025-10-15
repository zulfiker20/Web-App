# Project Portfolio (Laravel)

This repository contains a Laravel-based project portfolio demo with an admin panel and a small public site. The project has been cleaned and reorganized: auth routes are moved to `routes/Auth.php`, banner uploads are stored in `public/uploads`, and footer services no longer overwrite controller-provided data.

## Login or Register
- Login: https://web.zulfiker.top/login
- Email: zulfikerhossain2023@gmail.com
- Password:12345678
- https://web.zulfiker.top/register

## Quick start
1. Install dependencies:
```bash
composer install
npm install
npm run build
```
2. Configure your environment in `.env` (DB connection). The project uses `sqlite` by default.
3. Run migrations and seeders (if any):
```bash
php artisan migrate
php artisan db:seed
```
4. Serve the app:
```bash
php artisan serve
```
## Features

### Frontend
- Home Page – Main landing page.
- About Page – Information about the company.
- Services:
  - List all services.
  - View individual service details.
- Teams – Display team members.
- Blogs:
  - List all blogs.
  - Filter blogs by category.
  - View individual blog details.
- FAQ Page – Frequently Asked Questions.
- Contact Page:
  - Contact form with submission functionality.
- Privacy Policy & Terms:
  - Separate static pages for legal information.
    
### Admin Panel (Protected by Authentication)
- Dashboard – Admin overview.
- Banner Management:
  - View and update homepage banners.
- Service Management:
  - CRUD operations for services.
- About Management:
  - CRUD operations for about sections.
- FAQ Management:
  - CRUD operations for FAQs.
- Team Management:
  - CRUD operations for team members.
- Category Management:
  - CRUD operations for blog or service categories.
- Article/Blog Management:
  - CRUD operations for articles/blogs.
- Page Management:
  - CRUD operations for additional static pages.

## Important files
- `routes/web.php` - main routes, includes `routes/Auth.php`.
- `routes/Auth.php` - all authentication and profile routes.
- `app/Http/Controllers/Auth/` - auth controllers (login/register handlers).
- `resources/views/auth/` - `login.blade.php`, `register.blade.php`.
- `resources/views/admin/banner.blade.php` - admin banner edit form.
- `public/uploads/` - where banner uploads are saved.

## Auth routes (summary)
- `GET /login` -> `auth.login` (guest)
- `POST /login` -> authenticate
- `POST /logout` -> logout
- `GET /register` -> `auth.register` (guest)
- `POST /register` -> register
- `GET /profile` -> edit profile (auth)


## Frontend Routes<br>
/                 -> Home<br>
/about            -> About Page<br>
/services         -> All Services<br>
/services/{id}    -> Service Detail<br>
/teams            -> Teams Page<br>
/blogs            -> All Blogs<br>
/blogs/category/{id} -> Blogs by Category<br>
/blogs/{id}       -> Blog Detail<br>
/faq              -> FAQ Page<br>
/privacy-policy   -> Privacy Policy<br>
/terms-conditions -> Terms & Conditions<br>
/contact          -> Contact Form (GET & POST)<br>

## Admin Routes (Auth Protected)<br>
/admin/dashboard       -> Admin Dashboard<br>
/admin/banner          -> Banner CRUD<br>
/admin/services        -> Service CRUD<br>
/admin/about           -> About CRUD<br>
/admin/faq             -> FAQ CRUD<br>
/admin/teams           -> Team CRUD<br>
/admin/categories      -> Category CRUD<br>
/admin/articles        -> Article/Blog CRUD<br>
/admin/pages           -> Pages CRUD

### Technologies Used
- **Backend:** Laravel 11
- **Database:** MySQL
- **Authentication:** Laravel built-in auth system laravel breeze
- **Routing:** Frontend and Admin routes organized with Route groups and middleware
