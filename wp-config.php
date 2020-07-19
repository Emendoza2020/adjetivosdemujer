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
define('DB_NAME', 'cebiae_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 's[5%jfdqv95u]G8?I1l,8Md %GJn+tcO06p}YE4Fx-`Xrv9PHS]3BsQU p;8,E,u');
define('SECURE_AUTH_KEY', 'Kg/g6*DTYJ)9=tc|;)tfrB%<jah&BK[!0%}uF/FcA4ss.6%)rLz/8B6%(27%_JMt');
define('LOGGED_IN_KEY', 'WZNA75B91i$Wdx?~frJ&C{ QA[QcmW,Za&h>_{Z7 h#yFrqhab+.k!%Ii$IAZ~/$');
define('NONCE_KEY', 'WBp$MDN=aP4|yL/%sJ(x>KBA,sa[)+zXPbKDtJc:~qk5t3!=xs^~!P(bD.xPtVDp');
define('AUTH_SALT', 'eew{x5@C05?nH9oNijZP $eP$TVCxKMD|yU;{A~^h}{O{I=}D1f<4%);iE9{-5g%');
define('SECURE_AUTH_SALT', 'dn@CBVA?!og;b)2aPFW=CpRA_a$`}6F<*c<oc.!noG #u<+^jwUi?zOYaxEUn&Bf');
define('LOGGED_IN_SALT', '#Gx+Yl-R#]x_!_Oo;4zL%~rd2(z:%ur+9uQ+!1dYDgVPb_/eg-)=32,4^b9L)|MC');
define('NONCE_SALT', 'f(V<oh;B{ >ySojZv9JAa`Bp|,ylc#UQc?is&]xZ eV<^FnbZ8kN2kFU7Hio](QU');

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

