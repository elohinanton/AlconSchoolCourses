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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'v13{bi:nHsH+[C6O8KkXN^LC!%iAevzPf.M`nI)a$kJ4w~e}*Cn;&1,5Edz=*.vj' );
define( 'SECURE_AUTH_KEY',  'CSm ivLW i!f7hIo&}hUGHsnYic{]?>ndG*H&mz!?N5#oA2x|K[qmX& UTNf]E{7' );
define( 'LOGGED_IN_KEY',    '],{?+*}Q#hCh8+VBs_$0|d(|2mACd=k0#,_^!wkW(P,iFRE-G{$T>Z22cvN({3FT' );
define( 'NONCE_KEY',        '1eeS;8o_=P!-(+oh]}!uxI)hf4,%jz&?GMbR:+?}~^#C]m2x;Pj&DQbNv^C!J?At' );
define( 'AUTH_SALT',        'S&/D7qA1;c`t$GK)2nAQl}G5[$;I8$3zX$zVZ<B=&dzf+[9Tk+w8s/;p]dz2% U&' );
define( 'SECURE_AUTH_SALT', 'IK`1zE9KHITCrAcdB+H~(?e/4u>k.Fx#,e41yF;?[Cu,]d>$nmp1N3Ry^gVG`:S-' );
define( 'LOGGED_IN_SALT',   't|(7N+PNGM2J&;xM(vou.E`X8ND%NaYPrv.Er8mhY]U[!,w$F;b/p{:QxUdX~yx2' );
define( 'NONCE_SALT',       'qQO_18U_M/;+pc=*o%DU${aNy6K!%#4AA([Dj;m(nKXJCm-va4|#xWaGdL9a:Gh<' );

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
