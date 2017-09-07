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
define('DB_NAME', 'enrcert');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'k~NY3]i&N]q%)K0QU*H;~>t@OQIs>6?t[vKbTSj(]lv+[AL%msA9M#xj[+-oItQo');
define('SECURE_AUTH_KEY',  'j6y|gN@MhTZ}JL~yNH?)lc!:gST-y#!?lJR0pUa@syiKb%oX58Kh; /uR/>_NvqP');
define('LOGGED_IN_KEY',    'Wa<#QCkA]2qSY[U2!nb{S#F9H+W~M4`|6:}melF|mUQ1 CO_mH;C)y~3C4 );=Ht');
define('NONCE_KEY',        '& 1&FU&wSx[2O/kRnj4),Ue;2ILwA{G7ojDW}?LVQy|WIs&4:yd|-oFkB_B}u{)}');
define('AUTH_SALT',        'Q]|n<gu/|v$r2:x[sp`Hz:PU?2Y6/btOxWSxK1P7){H]yY.(MG/5r sa8:8~U:Cp');
define('SECURE_AUTH_SALT', '@]=ub0Ee]vV#d[dj^-u|@~vL_.24($D0HZSKNtB4R^{&8u3rPaZjSy_ft!uA}0`P');
define('LOGGED_IN_SALT',   '6V31* 8 KbhYum|e@U%>=<Yb{<v/e^847wKOiH+?7@[QCnN,YJ?i4K_[ O/$%>wZ');
define('NONCE_SALT',       'x&&q)ayLywQ`aM`+yy=5O:nz!bACn&J7[9m|+,{djIZO?fd|_o:qn#`h//YD*[w1');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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