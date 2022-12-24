<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%hF9l*Kqh]mc)j2gkGw$mg|n[;y/c<zY&R!nEy8+x^qPbM2Z/;2F2-DOMGCt3wa@' );
define( 'SECURE_AUTH_KEY',  '}PO#aelp{cbW04#BE_grpVk+ls63Ur6E&ruYts@(+dh5{c@F=s+KM4*JmU9a+fQ?' );
define( 'LOGGED_IN_KEY',    ')DnoP& aaGf(F:ud`^g;ZaYM0.WxIFxn(If$.+24 [o.S2lE=e1oAxE(6C@mRR.}' );
define( 'NONCE_KEY',        '3exzAip6(,D}2<=md^}*Hf3>(yTP<;O1bo_S(NlC2#u9Nm5xfHK~98dEyX_j}Xf<' );
define( 'AUTH_SALT',        'N6jqP/hMD06]JmjFI!g->T]{% C<D:xKC~mL]GyL,RQ~QTfYw-?~*+z}V)m3? {]' );
define( 'SECURE_AUTH_SALT', 'E<<_RU%sE{65$?`2>.o1ZeAo;MH#4iu4(44ee4qtu8>MA.TIvNuBuxf3`X@R_jQ3' );
define( 'LOGGED_IN_SALT',   'P.MAZ&0+!/!+,f8Kc8>P$s3R!$[g~Y:*K@k>sT0A+[4t(-}l+wQt.=EYA.,:Oo(X' );
define( 'NONCE_SALT',       '8mO8&.%RLNX(K|_,s5hYG1j,hsWd_sY=X!02[EvwH_Hp%lDt!)Ec]zKnY/>$Ag(;' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
