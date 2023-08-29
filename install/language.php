<?php defined('JSmart_CMS') or exit('Access denied');
/**
 * JSmart CMS
 * ===========================================================================
 * @author Vadim Shestakov
 * ---------------------------------------------------------------------------
 * @link https://jsmart.ru/
 * ---------------------------------------------------------------------------
 * @license https://jsmart.ru/cms/eula
 * ---------------------------------------------------------------------------
 * @copyright 2018 Vadim Shestakov
 * ===========================================================================
 */

$lang = [
    'title'                         => 'Мастер установки JSmart CMS',
    'button'                        => 'Далее &rarr;',
    'license_agreement'             => 'Условия лицензионного соглашения мною прочитаны и приняты?',

    'action_main'                   => 'Лицензионное соглашение',
    'action_requirements'           => 'Проверка сервера',
    'action_license'                => 'Проверка подлинности',
    'action_database'               => 'Настройка базы данных',
    'action_download'               => 'Копирование файлов',
    'action_install'                => 'Установка системы',
    'action_user'                   => 'Создание учетной записи',

    'requirement_phpversion'        => 'Версия PHP 8.0.8 и выше',
    'requirement_mysqli_connect'    => 'Поддержка MySQLi',
    'requirement_mod_rewrite'       => 'Поддержка Mod Rewrite',
    'requirement_mbstring'          => 'Поддержка MB String',
    'requirement_zlib'              => 'Поддержка ZLib',
    'requirement_xml'               => 'Поддержка XML',
    'requirement_iconv'             => 'Поддержка iconv',
    'requirement_safe_mode'         => 'Безопасный режим отключен',
    'requirement_file_uploads'      => 'Загрузка файлов на сервер',
    'requirement_error'             => 'Необходимо провести действия по исправлению конфигурации сервера!',

    'license_key'                   => 'Лицензионный ключ',
    'license_key_description'       => '<a href="https://jsmart.ru/cms/trial" target="_blank">Получить лицензионный ключ</a>',
    'license_key_error'             => 'Введенный лицензионный ключ не действителен!',

    'db_hostname'                   => 'Сервер',
    'db_database'                   => 'Имя базы данных',
    'db_username'                   => 'Имя пользователя',
    'db_password'                   => 'Пароль',
    'database_error'                => 'Не удается подключиться к базе данных, проверьте параметры подключения!',

	'user_login'					=> 'Логин администратора',
	'user_email'					=> 'E-Mail администратора',
	'user_password'					=> 'Пароль администратора',
	'user_password_description'		=> '<a href="JavaScript:user_password();" onclick="">Сгенерировать пароль</a>',
	'user_login_error'				=> 'Логин администратора имеет неверное значение!',
	'user_email_error'				=> 'E-Mail администратора имеет неверное значение!',
	'user_password_error'			=> 'Пароль администратора должен содержать не менее 8 символов!',

    'download_done'                 => 'Копирование файлов завершено...',
    'download_error'                => 'При извлечении архива произошла ошибка!',
    'download_dir_error'            => 'Для продолжения установки удалите следующие директории:',

	'install_done'					=> 'Поздравляем Вас с успешной установкой JSmart CMS!<br>Теперь Вы можете перейти на тестовую страницу сайта либо в админцентр для управления.'
];