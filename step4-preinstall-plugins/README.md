wp-nginx-http2
===

WordPress テーマ開発環境をローカルマシン上に構築するための雛形です。

## Description
PHP-FPM, NGINX, MySQL 動作環境を Docker で構築し、その上で WordPress を動作させます。テーマは SCSS, ES2015+ でそれぞれコーディングしたものをトランスパイルしてリアルタイムプレビューが可能です。


## Features
- PHP7.x + NGINX
- HTTP/2 対応
- Alpine Linux ベース
- SCSS, ES2015+ on webpack での WordPress テーマ開発


## Structure
```
.
├── README.md
├── infra/      // 仮想環境用ディレクトリ
└── themes/     // WordPress テーマ開発用ディレクトリ
```


## Installation
```
$ git clone https://github.com/wakamsha/wp-nginx-http2.git
```


## Author
[@wakamsha](https://twitter.com/wakamsha)
