# Instalando en Apache

1. Clonar/Descargar y descomprimir en la raíz de los documentos
2. Activar **mod_rewrite** modificando el archivo **httpd.conf**

    + Descomentando esta línea:
    ```
    LoadModule rewrite_module modules/mod_rewrite.so
    ```
    + Modificando todos los
    ```
    AllowOverride None
    ```
    por
    ```
    AllowOverride all
    ```

3. Modificar el archivo **httpd-vhosts.conf**, agregando la siguiente configuración:
```
<VirtualHost frontend.smartyii.com>
    DocumentRoot "C:\xampp\htdocs\smartyii2-template\frontend\web"
    ServerName localhost
    ServerAlias frontend.smartyii.com
    Options +FollowSymlinks
</VirtualHost>

<VirtualHost backend.smartyii.com>
    DocumentRoot "C:\xampp\htdocs\smartyii2-template\backend\web"
    ServerName localhost
    ServerAlias backend.smartyii.com
    Options +FollowSymlinks
</VirtualHost>
```
Aquí el nombre de los **Host y Server Alias** son demostrativos, puede nombrarlos como guste.

**Reinicie el servidor**

El proyecto ya incluye los archivos **.htaccess** para configuración de las url's limpias, este es el contenido de los archivos:

```
RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d 

RewriteRule . index.php
```