=== WPS Limit Login ===
Contributors: WPServeur, NicolasKulka, benoitgeek
Donate link: #
Tags: login, limit login, security, authentication, WPS Limit Login, wps-limit-login, Limit Login Attempts, Limit Login Attempts Reloaded, Limit Login Attempts Revamped, Limit Login Attempts Renovated, Limit Login Attempts Updated, Better Limit Login Attempts, Limit Login Attempts Renewed, Limit Login Attempts Upgraded, limit
Requires at least: 3.3
Tested up to: 4.9
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WPS Limit login limit connection attempts by IP address

== Description ==

= Français =

Limitez le nombre de tentatives de connexion possibles via la page de connexion et en utilisant les cookies auth.
WordPress par défaut permet des tentatives de connexion illimitées soit via la page de connexion ou en envoyant des cookies spéciaux. Cela permet aux mots de passe (ou hashs) d'être craqués via la force brute relativement facilement.
WPS Limit login limite les tentatives de connexion et bloque l'envoi d'autres tentatives à une adresse Internet après l'atteinte d'une limite spécifiée, ce qui rend une attaque par force brute difficile, voire impossible.

Caractéristiques:

* Limiter le nombre de nouvelles tentatives lors de la connexion (pour chaque IP). Ceci est entièrement personnalisable.
* Limitez le nombre de tentatives de connexion en utilisant des cookies d'autorisation de la même manière.
* Informe l'utilisateur sur les tentatives restantes ou le temps de verrouillage sur la page de connexion.
* Journalisation et notification par courriel facultative.
* Gère le serveur derrière le proxy inverse (reverse proxy).
* Il est possible de mettre en liste blanche / liste noire les adresses IP.
* Compatibilité avec le pare-feu du site Web Sucuri.
* Protection de passerelle **XMLRPC**.
* **Woocommerce** protection de la page de connexion.
* **Compatibilité multi-sites** avec des paramètres MU supplémentaires.

Ce plugin vous est gentiment proposé par <a href="https://www.wpserveur.net/?refwps=14&campaign=wpslimitlogin">WPServeur</a> l'hébergeur spécialisé WordPress.

Découvrez également nos autres extensions gratuites :
- <a href="https://fr.wordpress.org/plugins/wps-hide-login/">WPS Hide Login</a> pour changer votre URL de connexion en ce que vous voulez.
- <a href="https://fr.wordpress.org/plugins/wps-bidouille/">WPS Bidouille</a> pour optimiser votre WordPress et faire le plein d'infos.

Ce plugin est seulement maintenu, ce qui signifie que nous ne garantissons pas un support gratuit. Envisagez de signaler un problème et soyez patient.

= English =

Limit the number of login attempts that possible both through the normal login as well as using the auth cookies.
WordPress by default allows unlimited login attempts either through the login page or by sending special cookies. This allows passwords (or hashes) to be cracked via brute-force relatively easily.
WPS Limit login blocks an Internet address from making further attempts after a specified limit on retries has been reached, making a brute-force attack difficult or impossible.

Features:

* Limit the number of retry attempts when logging in (per each IP). This is fully customizable.
* Limit the number of attempts to log in using authorization cookies in the same way.
* Informs the user about the remaining retries or lockout time on the login page.
* Optional logging and optional email notification.
* Handles server behind the reverse proxy.
* It is possible to whitelist/blacklist IPs.
* Sucuri Website Firewall compatibility.
* **XMLRPC** gateway protection.
* **Woocommerce** login page protection.
* **Multi-site** compatibility with extra MU settings.

This plugin is kindly proposed by <a href="https://www.wpserveur.net/?refwps=14&campaign=wpslimitlogin">WPServeur</a> the specialized WordPress web host.

Découvrez également nos autres extensions gratuites :
- <a href="https://wordpress.org/plugins/wps-hide-login/">WPS Hide Login</a> to change your login URL to whatever you want.
- <a href="https://wordpress.org/plugins/wps-bidouille/">WPS Bidouille</a> to optimize your WordPress and get more info.

This plugin is only maintained, which means we do not guarantee free support. Consider reporting a problem and be patient.

== Installation ==

= Français =
1. Aller dans Extensions › Ajouter.
2. Rechercher *WPS Limit Login*.
3. Recherchez ce plugin, téléchargez-le et activez-le.

= English =
1. Go to Plugins › Add New.
2. Search for *WPS Limit Login*.
3. Look for this plugin, download and activate it.

== Frequently asked questions ==



== Screenshots ==

1. Configuration
2. Whitelist
3. Blacklist
4. Log
5. WP Login

== Changelog ==

= 1.2 =
* Remove: redirect activate

= 1.1 =
* Enhancement: Add widget dashboard

= 1.0 =
* Initial version.