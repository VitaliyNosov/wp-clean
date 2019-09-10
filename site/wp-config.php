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
define( 'DB_NAME', 'clean' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'IQ86SgAg993BHcS5' );

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
define( 'AUTH_KEY',         '?uDl pF1LAP22*~3K;R#U?OZA%B!wovQKBXc*iFiSDY(DH #^W;gJUQ8XVO<~yB#' );
define( 'SECURE_AUTH_KEY',  '`xu[KLdKd<`m2cJ<P]_Oh_QrK);zW8cn!tNY=S_$/ULHRh3z3f+f)<n[{okOnQ?z' );
define( 'LOGGED_IN_KEY',    '[m)qTKopnA)vyBjw/E$yKmsx}>-lod$-k;aBc*fY=I^Ksh6?rrXp;:iVZx#k1JK|' );
define( 'NONCE_KEY',        'l.Yz8vJ1(Sd/0Z(w5@KB M]Nw!X,To6^Q[#ue_qIjkt$BdO`yy*k5AuV6>*wkUUg' );
define( 'AUTH_SALT',        'E/5vF<H7/$e0o5fFu>y~x!SgBIN[$ZMtN/%:mA1WAc$Y=6zb2GR{w^J^:mIK%1b[' );
define( 'SECURE_AUTH_SALT', '|w(^*}@@HQuE~1TQ-V=l&SyMWmWRasy}o@[Lb x-.Xx;n9JwYJK(T~:!I(yK%}2J' );
define( 'LOGGED_IN_SALT',   '_dkqF)DHhv2*MZ>B. ~l^$zza.Q3`A>PI+F-U2q9c4%.!^ I^YbpnJ ZwL+Y;_m[' );
define( 'NONCE_SALT',       'GS>23-4yZz{/3dmE 1)Wvk7*w%1#iU;%dPllc7aX!sx>NF,$>:MsFI4&uK5@xK~g' );

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
