1. Clone the project
git clone <your-repo-url>
cd online-book-store
2. Install dependencies
composer install
npm install
3. Create .env file
cp .env.example .env
4. Generate app key
php artisan key:generate
5. Setup database in .env
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
6. Run migrations
php artisan migrate
7. Start server
php artisan serve

Open browser:

http://127.0.0.1:8000/admin/login
 Admin Login Details

Admin user is created manually using Laravel Tinker.

Create admin user:
php artisan tinker
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin',
    'email' => 'admin@test.com',
    'password' => Hash::make('password123')
]);
Admin Login
Email: admin@test.com
Password: password123