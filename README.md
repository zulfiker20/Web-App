# Project Portfolio (Laravel)

This repository contains a Laravel-based project portfolio demo with an admin panel and a small public site. The project has been cleaned and reorganized: auth routes are moved to `routes/Auth.php`, banner uploads are stored in `public/uploads`, and footer services no longer overwrite controller-provided data.

## What changed in this cleanup
- Organized routes: `routes/Auth.php` created and included from `routes/web.php`.
- Banner uploads: stored in `public/uploads/` and `banners.img` stores `uploads/<filename>`.
- Footer services: global share renamed to `footerServices` to avoid overwriting controller `$services`.
- Removed duplicate .md files and added this consolidated `README.md`.

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

## Notes & next steps
- If you prefer `storage/app/public` storage with a symlink, we can switch uploads to use Laravel's storage disk and call `php artisan storage:link`.
- I can add image resizing, admin preview, and caching for shared services on request.

---

If you want further reorganization (move controllers into subfolders, add PSR-4 changes, or scaffold tests), tell me which area to prioritize.
