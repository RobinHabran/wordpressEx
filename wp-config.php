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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'robin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'p[]7QD4j' );

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
define( 'AUTH_KEY',         'm>*tq@r^wh{X^ddHKd>J;~`oE}Cb.:f.5JPI]S1Li$7m,;pI!P{1g%x6tW+zIDjn' );
define( 'SECURE_AUTH_KEY',  '`?5pbwC2CZneWw0dH[ZpVLU6$`Rn42>+OBCK37_O_)3&@]+ivn7q-y_pn[v0(h}Z' );
define( 'LOGGED_IN_KEY',    'ow};3}aFP%zun;xHv(&B*Oe_Ej4 @ndqXt5{d)=g+w kLpvVjt7dTlNa/:@*2[vf' );
define( 'NONCE_KEY',        'D0;*{w:%ytb9D*(=%|hL|Za <xHbP,jGZ `FOt(Ht*ipFJH[x bkS.!aR,Ve71]#' );
define( 'AUTH_SALT',        'c0`zd(Bc-1:Z>x`T}$4Qog(5:Y_a@N.MQh^B)KJhzC>>!z wP),RcV`j|oZ!|Wy/' );
define( 'SECURE_AUTH_SALT', 'M.E7tL(*J7Y,/voHofYYFEUg+-4>1]JP-ncJ<0B;v|=>x7o7brj~g {a!y<NpG!1' );
define( 'LOGGED_IN_SALT',   ',[sU6y$jpAN6g]mVm`)b+LZ#D<ob4Tu/J|(@g?~p8S{??FQGTv;[H|qyzH`8@Hq#' );
define( 'NONCE_SALT',       'TPil{m-cE!q_XOig|2ZIYU-Xy!$pknHG]4M; 9s1V4S=H=0Ma@_NX2FU_:ms0sf^' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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

define('FS_METHOD','direct');
