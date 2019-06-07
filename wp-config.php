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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'evaluation03' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'evaluation03' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'evaluation03' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*-U#g&1qmq1=8bkzDYQm24^b4`wv N#+w*awUvxR{Cx7f-J5IbnmOVO/Ut1j3gte' );
define( 'SECURE_AUTH_KEY',  '?kI3`ol}XA5!=rIIp^0?d&(Hl<>y@@#0g/kR&-k!/zm#~={_}7yQ7cdzjQ=5Mal(' );
define( 'LOGGED_IN_KEY',    'S%?po$MI4~I&.^4SCtL0*p8Z`&u2j`^%BILhg>j!n&5T;&Qpg,dx4=%j7a!tw<ty' );
define( 'NONCE_KEY',        'Mpm>ers{>[NuKD%Y)6}7F#Nf,365i{FX2>fV47PS@qL.MM+T]T>@8aIBcW~rEqe<' );
define( 'AUTH_SALT',        'xT^(cOS|w^zrowiObcd7YI#wQH*USI0}B.9a0esy,hQEQH@j`eaJ<N/XKG.75;`D' );
define( 'SECURE_AUTH_SALT', 'd-KcQ_H#{xHXYXPQY0&u.sLw.la[}KompiJ|yiF9O=o,% $nZIAqg6?h{6>Luie.' );
define( 'LOGGED_IN_SALT',   '^IG!g~RT#M0.pAo>FNf@N^.uY.7hu4P-ceF_[qI&isr$H7LTBc:d^foPf,H(WUSs' );
define( 'NONCE_SALT',       ' ^bK.DnmjdHX|AF_rlf]@B|`SCrD<</.}A=As,B/h*1[1%=P,Ex{TFx^(F}bzY[2' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
