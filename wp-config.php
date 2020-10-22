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
define( 'DB_NAME', 'oxibase' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$RnmLB=xy lvOd5SgrZ0$;8n&*1arvrXy?M-Q<ymiZudpu`A3><cW=9Pycb0|/yB' );
define( 'SECURE_AUTH_KEY',  'qP<lj`eNjvk(k//~4nzr3+5Wqo[|=rl^lV5i?u[/zBj9il/V>5e97r]*W=mGC}B~' );
define( 'LOGGED_IN_KEY',    'XMF[E((vR dhbt1/bOn<{!>x?yWj`X1oDd![-Bt_FoE^=YFBgs4`xdfDo;X40E6K' );
define( 'NONCE_KEY',        'c+lY-ns$d>$m_>]5D&1.yhmLS8XT2O[mG=`AT{slt%L&Rdbf[U$@?`m*A>Y[l;bN' );
define( 'AUTH_SALT',        '_f>D29OqZ3c}p]~c!);2~jff4sV*@*3Uwes4gG9[lE>1h{MBim3C&7a}6)YO;B}d' );
define( 'SECURE_AUTH_SALT', 'k|;6cCPBS9S]/e0=zN[zk*NV0z?<xi+8d]2Qbuy]QYv/ FhtfG&#/n:X;YDs}xRe' );
define( 'LOGGED_IN_SALT',   'DxG)l0PsV*__3WS(o+Z.l!e>|b&==M|3*3I*D3MK%t[ZvX+qU1-#DXQ4t0.A7V>l' );
define( 'NONCE_SALT',       'ZYC_05xu+M8L)>RouZQqs47ozpX)H0 km;7WN.:MO,gX](=1~w[Ud+juh|Yj`Ac]' );

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
