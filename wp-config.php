<?php
/**
* La configuration de base de votre installation WordPress.
*
* Le script de création wp-config.php utilise ce fichier lors de l'installation.
* Vous n'avez pas à utiliser l'interface web, vous pouvez directement
* renommer ce fichier en "wp-config.php" et remplir les variables à la main.
* 
* Ce fichier contient les configurations suivantes :
* 
* * réglages MySQL ;
* * clefs secrètes ;
* * préfixe de tables de la base de données ;
* * ABSPATH.
* 
* @link https://codex.wordpress.org/Editing_wp-config.php 
* 
* @package WordPress
*/
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');
/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');
/** Type de collation de la base de données. 
* N'y touchez que si vous savez ce que vous faites. 
*/
define('DB_COLLATE', '');
/**#@+
* Clefs uniques d'authentification et salage.
*
* Remplacez les valeurs par défaut par des phrases uniques !
* Vous pouvez générer des phrases aléatoires en utilisant 
* {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
* Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
* Cela forcera également tous les utilisateurs à se reconnecter.
*
* @since 2.6.0
*/
define('AUTH_KEY',         ':&LQdvAt5&K]B0)Op~1K{Btm`Grs9/@nPysLLlq-)tQxpVu8=%~$sg9;~;qIg(57');
define('SECURE_AUTH_KEY',  'Sqp^%uTs]6XID:c5(LO^fWNYxJ{xjUe,W|o?+kU<2p|=M-9w-b*<+?R|&?(mTl,J');
define('LOGGED_IN_KEY',    'HExwhd8VyVb|Ur5L.wqy%7X(++EV`jnNYgeUj~.]EJUJkYS-&y7Z;6lUewQ6V{T{');
define('NONCE_KEY',        '|5cmb2<f|>+]QoD-Q4-[7z57<K0YmeMak09U|tNWt5F@?SL}|(&ZTZgOn+Cn ;0}');
define('AUTH_SALT',        '$ISw3Tl~|/N!|uUQ[-F`J_J$,37q}0c*isdk|si]Y hV-X;OaBfezYW_8s}KvL<}');
define('SECURE_AUTH_SALT', '~3HZZL60$[L)+[]2$*Ek2VFJ2)#<~7*=hxKe~%^{Ojf4&(kWi|S6s9TIb;1]y0Z)');
define('LOGGED_IN_SALT',   'd%)sTtanv&F|VcJv [T`U~|VPPS/ec9UPd[43USw(S_U|}Zg2a|d:%1n,zY6N^@X');
define('NONCE_SALT',       '!p.@!g$/yRRLF;iK-JXP>xuU%dU7Wf7kN0T6m  v- YHR#(hhsd1H]jKm/IGTb>6');
/**#@-*/
/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique. 
* N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
*/
$table_prefix  = 'a48dsfd_';
/** 
* Pour les développeurs : le mode déboguage de WordPress.
* 
* En passant la valeur suivante à "true", vous activez l'affichage des
* notifications d'erreurs pendant votre essais.
* Il est fortemment recommandé que les développeurs d'extensions et
* de thèmes se servent de WP_DEBUG dans leur environnement de 
* développement.
* 
* Pour obtenir plus d'information sur les constantes 
* qui peuvent être utilisée pour le déboguage, consultez le Codex.
* 
* @link https://codex.wordpress.org/Debugging_in_WordPress 
*/ 
define('WP_DEBUG', false); 
/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');