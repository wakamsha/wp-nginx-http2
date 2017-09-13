wp-nginx-http2 WordPress Theme Dev Environment
===

## Description
WordPress テーマを開発するための雛形です。主に CSS, JavaScript のコーディング用途です。CSS は SCSS、JavaScript は ES2015+ でコーディングしたものをそれぞれトランスパイルします。


## Structure
```
.
├── README.md
├── _s/
├── package.json
├── src/
│   ├── images/
│   ├── scripts/
│   └── styles/
├── webpack.config.js
└── yarn.lock
```


## Requirement
- `Node.js v8.1.4+`
- `npm v5.4.1+`
- `Yarn v1.0.1+`


## Usage

### 開発中 ( デバッグモード )
`yarn` コマンドを実行します。
```
$ yarn start
```
ビルド ( 各種トランスパイル等 ) が実行され、テーマディレクトリ内に展開されます。yarn 起動中は `watch` 状態となっており、 `*.scss`, `*.js` ファイルを編集する度に自動的にトランスパイルが実行されます。

### リリース用ビルド
以下の `yarn` コマンドを実行します。
```
$ yarn run build
```
ビルド ( 各種トランスパイル等 ) が実行され、CSS、JavaScript が圧縮された状態でテーマディレクトリ内に展開されます。


## Installation
```
$ yarn install
```
ビルドに必要な Node モジュールがインストールされます。
