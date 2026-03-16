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

== Changelog ==

= 0.4.0 =
* Reverted: Reverted disabled WordPress emoji detection script. The emoji script does not cause issues in Android WebView / Instagram in-app browser.

= 0.3.0 =
* Fixed: Disabled WordPress speculative loading / link prefetching. The speculation rules script uses IntersectionObserver on scroll which can throw unhandled errors in Android WebView (Instagram in-app browser).

= 0.2.0 =
* Fixed: Disabled WordPress emoji detection script. The emoji script uses Worker, OffscreenCanvas, and sessionStorage which can throw unhandled errors in Android WebView (Instagram in-app browser).

= 0.1.0 =
* Initial release.
