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
define( 'AUTH_KEY',         'u/Lv4A3RLX_5BgWEqM@(m4QTjHywXkG-q1s5}#P >brZ>Bmv}v!BR;`t11h?qGAa' );
define( 'SECURE_AUTH_KEY',  'r8s)vG0E_V6Y`|94&4uatw/9vfAUm(AbE^GWcL+PJ sc5#z^uKs!R2Cyx*Dhy9c4' );
define( 'LOGGED_IN_KEY',    '$U.`w>T>^kP6t9.>R<><FI~J{?Yh0C+&0XL@Inj-#z5Np?u/A[15`[+Ct8GB<S=Q' );
define( 'NONCE_KEY',        'a^Bq~hG*TNx|0pv=@!{Pjv_dw>_rvdJK1,a8i[W9$n@Ljg:o5W~Tk%d-Q_TG@Czt' );
define( 'AUTH_SALT',        ')~o^{X%omq i%IEVUi}]E@eKzx>PP2PLdqs] .MT3jz@uMH6uV%=Ad<L4z+,-cI,' );
define( 'SECURE_AUTH_SALT', '[c{=4O|T?4o8K0%W.6v3fFE]:C+6R8Zl6]U1uFO-2F,>2Kdfk( o;| L%|/c:u6-' );
define( 'LOGGED_IN_SALT',   'F@B+<Kg5s>N|i9xBqU`yY4BB3fRr]-i {0)^KGx1A,w[OBKclIl![je~2gO89ltR' );
define( 'NONCE_SALT',       'r^W#JNiM#wq@P%{pcKbn4R}&CYw|F#>:#g8[$baP/n2{j^I)Ko]e)#Xhd-TEgShw' );
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
