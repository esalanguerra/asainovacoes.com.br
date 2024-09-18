# Use a imagem oficial do PHP 7.4 com Apache
FROM php:7.4-apache

# Instale extensões do PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Crie o diretório para sessões e ajuste as permissões
RUN mkdir -p /var/www/html/sessions \
    && chown -R www-data:www-data /var/www/html/sessions \
    && chmod 1733 /var/www/html/sessions

# Copie os arquivos do aplicativo para o diretório de trabalho do Apache
COPY ./ /var/www/html/

# Defina permissões adequadas para o diretório do aplicativo
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Exponha a porta 80
EXPOSE 80

# Comando padrão para iniciar o Apache
CMD ["apache2-foreground"]
