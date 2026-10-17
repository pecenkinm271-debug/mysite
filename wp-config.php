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
define( 'DB_NAME', 'mysite2.rus' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin2' );

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
define( 'AUTH_KEY',         '$M~&qG#:!~<!J (fY<Bke^.J0eX*8+#yoPxF!Wp.(%.q:utno0I<O6t@bQA}S.wR' );
define( 'SECURE_AUTH_KEY',  '9?MYchv{rC{.|/HrwT*ktt{hEck:G2j?b+cu-}j~%lBZ.7jFcXIMfvYZY%+T6Y77' );
define( 'LOGGED_IN_KEY',    'OhHA?&7o8nl,HpW39T+ QujK*X,Vb i%5@^hxF79w%FW$}P~Y-.5RR:HOlWG<+YJ' );
define( 'NONCE_KEY',        'Dh$M,]DDx|ET}If@sA=%u1Wk<:V7[V &-;=8rFCOj*V,)7%QIb}W?os?>rAB{#+|' );
define( 'AUTH_SALT',        '6<EsE%@0FP>:9x4[I-(StBmykSn27`)@Q1S5:4TU)%/])vbMp`ZdABoqhUYKyw-;' );
define( 'SECURE_AUTH_SALT', '+KS[L6c9~>$iRwHJ}~?EM~_D.`)3C;[^,|dEk-XeyNnd1XGOjGW:E%,8 :-0)]d<' );
define( 'LOGGED_IN_SALT',   'zvEf]Y%S`]qY`^CY.SZ{&D:Pw0Gl}i[bzDkEpRFe+?z^+<!fiqf352d@6DaJ7JRX' );
define( 'NONCE_SALT',       'I3X2VnQr<55)2fwD:S]!QLa=No!;:O}+!(PNi4doS(XFA/#+h{Y8v9|oCPgdEH6;' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
