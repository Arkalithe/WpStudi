<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'voyage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'jcy8c GtWo)>F;]:YzJz[LFVP{^DB[~^XG-sMSho;&:(_O,gCeqfH#@vF74p7 ){' );
define( 'SECURE_AUTH_KEY',  '_&_dOE8PbMeb8k|U1?I=8;@v&SEh!qM^/J)7*j-fTY8L!MOEfJti!+./$DLU;q.2' );
define( 'LOGGED_IN_KEY',    't-;));{XdVP|_Xd(0a(2Z9o-V_D?w]hWrSHO7hoM1Mp6NvIeYW7Tj8V-e3ut@#Cn' );
define( 'NONCE_KEY',        'HzZ8<8A[=bjwtm`@|/3<J@;nB:8SGrVbqAF]*L#2f{N6?hEnj~T|l*;,KZ;}$f`S' );
define( 'AUTH_SALT',        'bZZ~8~$0L82/7QFHgXS:MpQ2jfn lFOJe>p1,~=f0>i= s~f7x]PgNe]RMp%}4kg' );
define( 'SECURE_AUTH_SALT', 'eNav;u0xp}FX:(VD8Jq<`s%-)nXfzf{@xDQBuO/8ep}QAE;nZ/eo}L /<^5dr#:V' );
define( 'LOGGED_IN_SALT',   '82&[$s|[@LT)ePH0K%i(E?moeX:iu)D2^Z0o8Zr7HS`7aN!hsC88+{6Ll8*^r-*:' );
define( 'NONCE_SALT',       '>OL>p)TY}53`O</HZ=NF$S7({Qn[(_n,A!snb(B!/#hK QaJEz60XPG8O=N4P}G)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_Voyage';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
