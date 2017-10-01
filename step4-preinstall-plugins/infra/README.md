wp-nginx-http2 WordPress Infrastructure Environment
===

## Description
WordPress を動作させるための仮想環境です。PHP-FPM, NGINX, MySQL を Docker ( docker-compose ) で構築・起動させます。


## Structure
```
.
├── README.md
├── app/
│   ├── Dockerfile
│   ├── uploads.ini
│   └── wp-config.php
├── db/
│   └── mysql.dump.sql
├── docker-compose.yml
└── web/
    ├── Dockerfile
    └── default.conf
```

### Versions
- `PHP-FPM v7.1`
  - `WordPress v4.8.1 ( Ja )`
- `NGINX v1.13.5`
- `MySQL v5.7.19`


## Requirement
- [Docker for Mac](https://docs.docker.com/docker-for-mac/install/#download-docker-for-mac)
- [Docker for Windows](https://docs.docker.com/docker-for-windows/install/#download-docker-for-windows)

Windows で Docker を使用するには、 Windows10 ( 64bit版 Pro エディション以上 ) である必要があります。


## Usage

### Docker コンテナ起動
`docker-compose` コマンドを実行します。
```
$ docker-compose up -d
```
初回は各種 Dcoker イメージのダウンロードやビルドのため時間がかかりますが、二回目以降は瞬時に起動出来るようになります。起動完了後に以下のコマンドを実行して一覧に三つのコンテナが表示されていれば成功です。

```
$ docker ps
```
```
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                                      NAMES
xxxxxxxxxxxx        infra_web           "nginx -g 'daemon ..."   7 seconds ago       Up 5 seconds        0.0.0.0:80->80/tcp, 0.0.0.0:443->443/tcp   infra_web_1
xxxxxxxxxxxx        infra_app           "docker-entrypoint..."   10 seconds ago      Up 8 seconds        9000/tcp                                   infra_app_1
xxxxxxxxxxxx        mysql:5.7.19        "docker-entrypoint..."   12 seconds ago      Up 10 seconds       0.0.0.0:3306->3306/tcp                     infra_db_1
```
web ブラウザから `https://localhost` にアクセスすると WordPress トップページが表示されます。

WordPress テーマは `wp-nginx-http2/themes/_s` が追加されており、選択可能となっています。また、ホストマシン側でこちらのテーマを編集した内容はそのまま Docker コンテナ内にも反映されます。

### Docker コンテナ停止
以下の `docker-compose` コマンドを実行します。
```
$ docker-compose down
```
コンテナを停止してもデータベースのデータは ( Volumes として ) 保持され続けます。停止コマンドに `-v` オプションを追加すると関連するデータは破棄されます。

### Docker イメージ再ビルド
`Dockerfile` を編集したらイメージを再ビルドする必要があります。以下のコマンドを実行します。
```
$ docker-compose build
```
例えば WordPress プラグインを追加・削除したい時は、後述する `app/bin/wp-plugin.sh` に追記・削除して、これをイメージに適用させます。適用するにはイメージを再ビルドします。

### WordPress プラグインの追加と削除
WordPress プラグインは、Docker イメージをビルドする時にインストールされます。インストールしたいプラグインは `app/bin/wp-plugins.sh` で管理されています。
```shellscript
# WP プラグイン一覧
# インストールしたいプラグインをここに記述する
plugins=("wp-emmet" "footnotes" "jetpack-markdown")
⋮
```
`plugins` という配列にインストールしたいプラグイン名を追記します。ここに書かれているプラグインがビルド時にインストールされます。


## Anything Else

### WordPress 管理者アカウント情報
`https://localhost/wp-admin` から以下のアカウント情報でログインが可能です。
- ユーザー名: `admin`
- パスワード: `admin`
