FROM wordpress:4.8.1-php7.1-fpm-alpine

# ツールをインストール
RUN apk --update add wget unzip

# 日本語化するために WordPress 日本語版をインストールして展開
ENV WORDPRESS_TAR_FILE wordpress-4.8.1-ja.tar.gz
RUN rm -fr /usr/src/wordpress \
 && wget https://ja.wordpress.org/${WORDPRESS_TAR_FILE} \
 && tar -xzf ${WORDPRESS_TAR_FILE} -C /usr/src/ \
 && rm ${WORDPRESS_TAR_FILE} \
 && chown -R www-data:www-data /usr/src/wordpress

# WP プラグイン ダウンロード
WORKDIR /tmp/wp-plugins
RUN wget https://downloads.wordpress.org/plugin/wp-emmet.zip \
 # && wget https://downloads.wordpress.org/plugin/footnotes.zip \
 && wget https://downloads.wordpress.org/plugin/wp-multibyte-patch.2.8.1.zip

# WP プラグイン インストール
RUN unzip -o \*.zip -d /usr/src/wordpress/wp-content/plugins
WORKDIR /var/www/html

# ボリューム化
VOLUME /var/www/html
