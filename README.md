
## 2020年ケーススタディー3班のWebページです。

## Laravelで作成しています。

##以下注意点です。


- MVCモデルで作成してるので、データベース接続の際、.envファイルの2段目にあるDB_PASSWORD
を初期値は空白にしてあるので、MAMPを使う際はPASSWORDをrootに変更してくださいしてください。

- dbを作成する際は、migrationファイルを作成しているので、caseStudyテーブルを作成し  
`php artisan migrate`  
をターミナル（コマンド）でcaseStudy実行してください。

- bootstrap他多数のCDNを読み込んでいるのでネット環境でページを開いてください。

- 実行に`npm install` が必要なので、入っていない場合はここからダウンロードしてください<a>https://nodejs.org/ja/</a>

- 実行に`composer update`が必要なので、入っていない場合はここからダウンロードしてください<a>https://getcomposer.org/</a>

- クローン後上記の `npm install` と `composer update`を行えば、 vendor ,node_modules がインストールされ実行できるようになります。