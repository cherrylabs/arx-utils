<?php namespace Arx\Utils;

defined('ARX_STARTTIME') or define('ARX_STARTTIME', microtime(true));
defined('DS') or define('DS', DIRECTORY_SEPARATOR);

defined('HTTP_SECURE') or define('HTTP_SECURE', \Arx\Utils\Utils::isHttps());
defined('HTTP_PROTOCOL') or define('HTTP_PROTOCOL', 'http' . ( HTTP_SECURE ? 's' : '') . '://');

class Core {

}