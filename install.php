<?php
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

error_reporting(E_PARSE);

define('JSmart_CMS', TRUE);

define('DOCROOT', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

define('DATA_SERVER', 'data.jsmart.ru');

umask(0);

// ********************************************************************************
// HTTP Query
// ********************************************************************************
function http_query($url, $content = FALSE)
{
    if ($content && is_array($content)) {
        $content = http_build_query($content);
    }

    $arrContextOptions = [
        'ssl' => [
            'allow_self_signed' => FALSE,
            'verify_peer'       => FALSE,
            'verify_peer_name'  => FALSE
        ],
        'http'  => [
            'method'    => $content ? 'POST' : 'GET',
            'content'   => $content
        ]
    ];

    return file_get_contents($url, FALSE, stream_context_create($arrContextOptions));
}

// ********************************************************************************
// File Write
// ********************************************************************************
function file_write($filename, $content = '')
{
    @mkdir(pathinfo($filename)['dirname'], 0777, TRUE);

    if (file_exists($filename) && !is_writable($filename)) {
        $is_writable = FALSE;
    }
    else {
        $is_writable = TRUE;
    }

    if ($is_writable && file_put_contents($filename, $content)) {
        return TRUE;
    }

    show_error('Error, cannot create file: ' . $filename );
}

// ********************************************************************************
// Show Error
// ********************************************************************************
function show_error($error)
{
    header("Content-Type: text/plain; charset=utf-8"); exit($error);
}

// ********************************************************************************
// Init
// ********************************************************************************
$install = DOCROOT . 'install/jsmart.php';

if (file_exists($install) === FALSE)
{
    if (is_writeable(DOCROOT))
    {
        file_write($install, http_query('http://install.jsmart.ru/source/jsmart.php'));
        file_write(DOCROOT . 'install/application.php', http_query('http://install.jsmart.ru/source/application.php'));
        file_write(DOCROOT . 'install/language.php', http_query('http://install.jsmart.ru/source/language.php'));
        file_write(DOCROOT . 'install/template.php', http_query('http://install.jsmart.ru/source/template.php'));
    }
    else {
        show_error('Error, root directory: ' . DOCROOT . ' not writable!');
    }
}

require_once $install;

$JSmart = new JSmart();