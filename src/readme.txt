rsync -av vendor/sangamtechnical/laravel-auth-package/src/ app/AuthPackage/
rsync -av vendor/sangamtechnical/laravel-auth-package/views/ resources/views/AuthPackage/
rsync -av vendor/sangamtechnical/laravel-auth-package/database/migrations/ database/migrations/
rsync -av vendor/sangamtechnical/laravel-auth-package/routes/ routes/
rsync -av vendor/sangamtechnical/laravel-auth-package/public/ public/vendor/authpackage/
php artisan migrate
