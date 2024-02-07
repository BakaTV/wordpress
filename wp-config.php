<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'meilleursJeuxEver' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' zsDONwfqp[7>mN2 [@U;2ckO3k`cX/n*<?Y*$ZK|~R1mmey_BI*&Y6}yyNbFHo$' );
define( 'SECURE_AUTH_KEY',  '%_cfq*a`$6vOE`rD~ty=-IpLjkm^x|;YEQc>U^5]) }{.>M aDJ_]-^/eJ>4g[!)' );
define( 'LOGGED_IN_KEY',    '`9&::j*e&aabV&22^k3c~sa/h<t895+R7C,k#+5R qE&?V.FVe1IJDv~EBY$$ lr' );
define( 'NONCE_KEY',        'WZQ~9j8*7jY$ff^ a-NX!+NOon#}oe{X!JanlA]tKXa:z]kfe`4b>FvlUug_PU{^' );
define( 'AUTH_SALT',        ':.79%(VKL n jTGZFa;V-YJ;/~L14@H/YUx!M8uEL<#<Q%BlHEBA:8DI{Nd#$uBO' );
define( 'SECURE_AUTH_SALT', '-g2 i:,&GMOpNL7jPv`EIizwzm$3E8!oe,vC.Dk%~0; R+Bu3fr=v/TI7(-E}tm]' );
define( 'LOGGED_IN_SALT',   '%bF-_-h~Ek0+1+-,}4QHW5yL6c=v{3i8{[cOl}(lpFq !Vz^e*}x(l,.k4P>9v %' );
define( 'NONCE_SALT',       'wVQm/9Am8mvzhy|b3a6&#]ji:OGu7WoIrU`CV&%myhP5,!<#nV.em3`?,eW-efQ*' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
