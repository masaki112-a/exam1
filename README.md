お問い合わせフォーム

環境構築
１．git clone　https://github.com/masaki112-a/exam1.git
２．docker-compose up -d --build

Laravel環境構築
1．docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. oho artisan db:seed

使用技術
・PHP 8.3.8
・Laravel 8.83.27
・MySQL 8.0.26
・nginx 1.21.1

URL
・開発環境:http://localhost/
・phpMyadmin：http://localhost:8080
