#!/bin/bash

# WP プラグイン一覧
# インストールしたいプラグインをここに記述する
plugins=("wp-emmet" "footnotes" "jetpack-markdown")

# 一覧にあるプラグインをダウンロード
for item in "${plugins[@]}"; do
    curl -L "https://downloads.wordpress.org/plugin/${item}.zip" --create-dirs --output "${1}/${item}.zip"
done

# zip を解凍してインストール
unzip -o $1/\*.zip -d "${2}"

# 使用済みとなった zip を削除する ( 後片付け )
rm -rf "${1}"
