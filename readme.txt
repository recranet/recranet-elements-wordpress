=== Recranet Booking Elements ===
Contributors: recranet
Donate link: https://recranet.com/
Requires at least: 5.0
Tested up to: 5.3 
Stable tag: 5.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Recranet Booking Elements

== Description ==

Integratie van Recranet Booking Elements, meer informatie:
https://help.recranet.com/hc/nl/articles/5193568067997-Integratie-in-WordPress-website

Belangrijk: Ga na installatie van de plugin naar Instellingen -> Permalinks -> Permalink instellingen en selecteer (Jaar, maand, dag en naam) of (Jaar, maand en naam). Zet de onderstaande regels bovenaan het .htaccess bestand, boven # BEGIN WordPress, update de slug en page_id.

RewriteEngine On
RewriteBase /
RewriteRule ^reserveren/.* /index.php?page_id=999 [L]

# BEGIN WordPress
..
