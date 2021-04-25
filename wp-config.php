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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'co11762_golub' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'co11762_golub' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'NJikb7b1' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '*Z&H,nf7n)<a|`97VfjC`CKADJ|5|dy0N2V3ps7Gn`iBc0_mMj`K4Y6Wt+%RK.CM');
define('SECURE_AUTH_KEY',  '{P0d&Uicu6vqnKyF?%U!|FN6{[*-:LiHcxbC#YF+x[6N.!<[->h~sCaV-+ubu~G,');
define('LOGGED_IN_KEY',    '`ye{@e1MIkZ1SG+zG/1-Uc herLF9ojlN.+ZHq>LwCX =l@l)K&T+)SNXN(yTIR<');
define('NONCE_KEY',        '@cC8&4Pnk~vx~U!jj$;&RAJ0^W|_2@MW3ooL=imxALsc{+EqhA+UE;b;Ft3cjb6g');
define('AUTH_SALT',        'ISG%`BV+6wNfeJYw;=80+=D2_M~R Cay~T_)W(~QTdF+lXQ)-x)eN*ewI=%i.+y*');
define('SECURE_AUTH_SALT', '`7w#iEOIo/(P6F9x<dn4;b}L2LEZ8Rj-B,t];BlRwNXG^1*s#[R{A=3;WVB%o!$i');
define('LOGGED_IN_SALT',   '@FPBmk~9u.(hJ<l_8fr@Ib:tDT?>dc^&<^Y&[cr6 a3P!l<yn%ail*3OdQy0 0X{');
define('NONCE_SALT',       'YhxQUSMS;w::+Is~/AlQW+xm?h<]nFi14Ws@2/bd]fznUEr><T6}u{{T*X/<n:t~');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
