<?php
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

define('AUTH_KEY',         'u[9IQK0QP>O/T%$P<%MG@89&*.2D6i:jQal-megkh(6w0-OnTh&.vwI6J]9@)T!s');
define('SECURE_AUTH_KEY',  '|sbS]:li<IM=o9C<=[pM!KD+-S6E&#1ow@z1)>X`p+qyXwO_X>3E/{?og$k UF&|');
define('LOGGED_IN_KEY',    '[/^gk&e6&1F[E/m|o|/k+4$XdXw_-xWvI/ >K+NG]^?*^<*mBqmcGy!hED+-_h08');
define('NONCE_KEY',        'Yw++H7Frhaziya>*@lUiqv2->t_*zI9=Az0mm8HR,/Gw@|rhYcPp0x+%.CE*aP=K');
define('AUTH_SALT',        'oV+]kR|*vK$-MEVg|~6fZU0zv$Mx0K<sR&.Ixc -d8M~*/[X8UCZ]WkAa]|t /CV');
define('SECURE_AUTH_SALT', 'j$#Pamrk&C:[?H,U@JUUY8j~-!I-XBjpJ|z^GStGL{Q}|,,W4!Qnk&Stt*=Ng*vQ');
define('LOGGED_IN_SALT',   'Z:?q&7WRYTcK|LA OG1&OtW&AbT`=]]M;O 0SN(+)Y6FSP0WH>O8g?(mRgINk0zv');
define('NONCE_SALT',       'e.=5?O[2?sF-sv>XK5+O.y*_i*38e]d!W-f(Cn<i>hhe}^Ze=ug%&+`CEKJDrln~');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
