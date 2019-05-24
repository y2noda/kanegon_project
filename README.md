# kanegon_project
## 実行環境
- nginx/mysql 5.7/php 7.1.23/laravel 5.8.17
## 初期設定
- コンテナ起動
>docker-compose up -d
- php.bash起動
>docker-compose exec php bash
- DB設定
>php artisan migrate
>php artisan db:seed
## 機能一覧
- 収入、支出の登録、編集、削除
- 一覧表示
