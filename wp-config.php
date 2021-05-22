<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Get the server connexions if local or not */
require_once(ABSPATH . 'info.php');
if($_SERVER["SERVER_ADDR"] == "::1" || $_SERVER["SERVER_ADDR"] == "127.0.0.1"){
  // ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
  /** Nom de la base de données de WordPress. */
  define('DB_NAME', 'sandrine_martinez_10');

  /** Utilisateur de la base de données MySQL. */
  define('DB_USER', 'root');

  /** Mot de passe de la base de données MySQL. */
  define('DB_PASSWORD', '');

  /** Adresse de l’hébergement MySQL. */
  define('DB_HOST', 'localhost');
}
else {
  // ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
  /** Nom de la base de données de WordPress. */
  define('DB_NAME', 'sandrine.martinez.10');

  /** Utilisateur de la base de données MySQL. */
  define('DB_USER', 'sandrine.martinez.10');

  /** Mot de passe de la base de données MySQL. */
  define('DB_PASSWORD', 'fwafv7jb');

  /** Adresse de l’hébergement MySQL. */
  define('DB_HOST', 'sql.free.fr');
}

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A){tI)~m`/`4=i@nLiGcy*v+sC|Au<H]J||.CBM %EW En.6(iYj4Ps[gI$l3,g*');
define('SECURE_AUTH_KEY',  'u]Rco&i_Ziw)I/$Zo3rmnq|xn;8>|K2+*={~1~,E6bZ!{;#[n||cxt=-hRe,)H>.');
define('LOGGED_IN_KEY',    '-pa|0k&MA83$Dt]vjzS+$`=WO8drci{wt{8%#=Dv#NfBf|qNlNjay&;$@vo1Av,O');
define('NONCE_KEY',        '&^N9fraTaU!+|vK!=12Yt9B^%nk_W8g$7g(k)PM<(q$9z8~~%rml#?Dk-q1n@:g-');
define('AUTH_SALT',        '5!19Wd@^9stU7ID&8!|u_Z~@qQCfj3nEx|LAspo^=n7PQlwZNUcnfdz{RGwu;2Dl');
define('SECURE_AUTH_SALT', 'YF$R/ch{PC%Y|Svp| cU>?|{g|iej1<80o}=R+L|w!#d,W+uK7/?|KaGTd|7,AIG');
define('LOGGED_IN_SALT',   '1;P;dus|+%4ZlDGqPlLlk&^Y]m5$|CXUP.vg-) o((+pwjek~JYtS?)bQ--J9Wpy');
define('NONCE_SALT',       '/n$TXA]t18B8lH[fib)ao JnB#P6XSzT8mi8I3u?D_[_|vQp;|Yv[gy;{TE0?F6t');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'blog_sma_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');