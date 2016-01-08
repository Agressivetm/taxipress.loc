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
define('DB_NAME', 'taxipress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@{rh4Xh_OMnLfjBgO+(NOVx2pBE]kDAZCO3&%wjb-m]w-~,S1d-I|xhY-i-76TS:');
define('SECURE_AUTH_KEY',  '|T6p@ld$&t*CYlt]F{GX<=VbxDnl<myJik!-@D~,9c?t5Nnm1uIqk#,,fbR_[p?<');
define('LOGGED_IN_KEY',    '<>B4hJ/LHQoAtt?@~M0Bsi}LHczi-dc3fZFQe/.skvGRxcwr6;iSu|UQK~il+Xj5');
define('NONCE_KEY',        ']<F/Iz-Q:|Q/_(Z=96|s}#C>dbFQgSH2yDJ-!sfDM|h[1bFzftU]c-x!$0ZX6RMC');
define('AUTH_SALT',        '><sV[&LD_.)2HoHF-8Iu,b)!~0P(eA1YH>laQS_4th*<+K@@-NVXMYUUe|%QQ4Ba');
define('SECURE_AUTH_SALT', '+z)EF%l?1K*T((($<B1G5*G^$5)}tBr3@XQlL8bG`].nY-0j T2v49Wx8z]e;eXg');
define('LOGGED_IN_SALT',   '.##[q5Ug!yS 1`1&i51,d}sL+V6Zg#+ph?(+xgu?>+Gd<vuF?<A.cPD%?mu9r|~]');
define('NONCE_SALT',       '|+T8FL)@,+ce+x+]r|0IU|QHq^j)cv+sejBB|>XUh$Kk24Sh|g&Zl}|lQU+mo/^X');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'taxipress_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
