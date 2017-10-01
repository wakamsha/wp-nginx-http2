FROM wordpress:4.8.1-php7.1-fpm-alpine

# ツールをインストール
RUN apk --update add bash unzip

# 日本語化するために WordPress 日本語版をインストールして展開
ENV WORDPRESS_TAR_FILE wordpress-4.8.1-ja.tar.gz
RUN rm -fr /usr/src/wordpress \
 && curl -O https://ja.wordpress.org/${WORDPRESS_TAR_FILE} \
 && tar -xzf ${WORDPRESS_TAR_FILE} -C /usr/src/ \
 && rm ${WORDPRESS_TAR_FILE} \
 && chown -R www-data:www-data /usr/src/wordpress

# WP プラグイン インストール
ADD ./bin/wp-plugins.sh /wp-plugins.sh
RUN bash /wp-plugins.sh /tmp/wp-plugins /usr/src/wordpress/wp-content/plugins

# ボリューム化
VOLUME /var/www/html
