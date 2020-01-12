<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'estrella_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'HoS!T]Y9]HoF4M/[*/qblH-&{o_ht>s#1dWW,z0Y#2A?OP:;pJs0h%3}Xi{%JR@I');
define('SECURE_AUTH_KEY', 'NH<h;#FF:/~JY5Nkmc>jmEoEzVy].!+edGQU]2 `>Unnv2$[Xm?U.!z`7LP-UAIb');
define('LOGGED_IN_KEY', 'tYt/9PbV#SNFvh~>M,upljL*4YuIq-{~w)W0DKDgI}?;psj;f<4Bs^HyG#o6*qzq');
define('NONCE_KEY', 'g>YCtQ~ G0k6L1O8uR5=m!H$$?UsW_wGP!g$g5m7@1?#a7=uf+ptyufyXKRNPfZ|');
define('AUTH_SALT', '8<39Jih_5:0`2{@B7|h&cgT<@MPPz^>Lz=NKPFC:Nd)8Q -zY*m*G><21>ry^7dU');
define('SECURE_AUTH_SALT', 'CN5f|_2%B~7fEE[1e{v%x]pxT<j`Pc*MjybYDUhN.S3deR8K (A&Mh@O7ua>Hg c');
define('LOGGED_IN_SALT', '@0F*7aD.H2]w^./CgV!Gjs>#XY|E)JY:-.>_Y|zW*>,]&YGb Bodfi}D],mnqi?g');
define('NONCE_SALT', ']z M5y2(ish&MjRsJs+c%ixfeGd|Vwju&f6|4u0d0o0]8]owhVkEf@&t6Rjy*lTT');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define( 'WP_DEBUG', false );
define('WP_MEMORY_LIMIT', '96M');

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

