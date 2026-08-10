RewriteEngine On

RewriteCond %{HTTP_HOST} ^journal\.stieamsir\.ac\.id$ [NC]
RewriteRule ^(.*)$ https://journalstih.amsir.ac.id/$1 [R=301,L]
RewriteCond %{HTTP_HOST} ^journal\.stieamsir\.ac\.id$ [OR]
RewriteCond %{HTTP_HOST} ^www\.journal\.stieamsir\.ac\.id$
RewriteRule ^/?$ "https\:\/\/journalstih\.amsir\.ac\.id\/" [R=301,L]

# php -- BEGIN cPanel-generated handler, do not edit
# Set the “ea-php72” package as the default “PHP” programming language.
<IfModule mime_module>
  AddHandler application/x-httpd-ea-php72___lsphp .php .php7 .phtml
</IfModule>
# php -- END cPanel-generated handler, do not edit
