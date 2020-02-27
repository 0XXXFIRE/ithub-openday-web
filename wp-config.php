<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpopenday' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6x,eb4:&V~QxBpuA5H&XkBMl*K5ZAd,8)k/#]GJvI%v%=xv2%$G&?2+Q)uol.4*$' );
define( 'SECURE_AUTH_KEY',  'KUz(W%x-@Z)Y`~Xm:YXm5`]6x?Ww51o`1m$EM6,0|ZA~)xt}r*S}9e0.^R)fVi[5' );
define( 'LOGGED_IN_KEY',    'FifV_cf!$FO`{/v*b#41) dA8PpxvtAx|&y.y/`t=)K2CD`WG7S`*L/`UYJf%>L-' );
define( 'NONCE_KEY',        'QNk;}u*^rd?mR=srqrU_bfsT;q)~h>&%z4~VBm{G|Z0=W3wj9I9WJBTFNyuBKbR2' );
define( 'AUTH_SALT',        'X{~bx&Z5^c;]C.)x0z1WTXw)=a!8+kJATc.Zio(^ik%(Q[^BX^kBk`%-<UG@(m[T' );
define( 'SECURE_AUTH_SALT', 'Bv[-[]3|m}2qTpCZ|]V2O=t&y,972Y2YNZizQu!V|7qk8Smc9zFCODPI]P,hGB/s' );
define( 'LOGGED_IN_SALT',   '+|n5pUnNMT=h!&jd_h-wwec p+ECNpo-KC.bJ1gR#EU;G<mUl2$u|8>` /sk6kn ' );
define( 'NONCE_SALT',       'wOcg;(Kpl}c_uRo/_HL:LL|Tgl][2tJp`IGiW@RQN`nX1O*?RFpa6Q9RuQ4Zlgh>' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
