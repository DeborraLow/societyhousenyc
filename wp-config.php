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
define('DB_NAME', 'societydb');

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
define('AUTH_KEY', 'x8/u<]~)fKYu+dH58S:7fKKg]iI#Kw*Qmv*i?Sr540nBhEB`lzSH8DrY9sSz|sSw');
define('SECURE_AUTH_KEY', 'O$R5e_&1[m*g9VL;FMTkd[grYS[N%VoMg^>(,`e?!3coq:.{)e#-SZi!wyEy)7eM');
define('LOGGED_IN_KEY', 'ki)Og$q}I52;]qq8$g+(gw~001:e{z_Fct,qp*;,sG4&IRlygy^)>nuPURpJR^ S');
define('NONCE_KEY', '0k0g}g@Bcf7K4Wv89 &#XHlHTDs61)82-uTuSXx22=e+#S-7MA:>HEHxO3DBYDkc');
define('AUTH_SALT', '%~0%<i&r-YmIZ:}zwY&>eKG/Zm]J6%Dx:22|Kp$K?62rMa.Y45vp)?,XN@PStwe{');
define('SECURE_AUTH_SALT', '*@Q2bTsO59eM }>l@En&^Fz>VzCs.9SSQg$Z:]?*u3Hjjq{K_P8Pg/cbaF#?E;Xj');
define('LOGGED_IN_SALT', ';C[tA7_;=z|H8tEcT`T9TFGu}d&o<1)s}/8QG`EOXZ~^4;ou?j16B|e`{4;+1H-v');
define('NONCE_SALT', 'V<5@?_~:YncoKs3Nf#yy.Bg B>;?=Z$ UyC9@K*3nD:jRI:tBlBV(rt<EopZC2zP');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

