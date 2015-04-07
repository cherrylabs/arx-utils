<?php namespace Arx\Utils;

/**
 * Utils
 * PHP File - /classes/utils.php
 *
 * @category Utils
 * @package  Arx
 * @author   Daniel Sum <daniel@cherrypulp.com>
 * @author   Stéphan Zych <stephan@cherrypulp.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     http://arx.xxx/doc/Utils
 */

use Illuminate\Http\Request;

class Input extends Singleton
{

    public $request = null;

    public function __construct(){
        $this->request = new Request($_GET, $_POST);
    }

    // --- Magic methods
    /**
     * Magic method to call Strings and Arr methods
     * @param $sName
     * @param $aArgs
     * @return mixed
     */
    public static function __callStatic($sName, $aArgs)
    {

        $request = self::getInstance()->request;

        switch (true) {
            case method_exists($request, $sName):
                return call_user_func_array(array($request, $sName), $aArgs);
        }

    } // __call


    /**
     * Get an item from the input data.
     *
     * This method is used for all request verbs (GET, POST, PUT, and DELETE)
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public static function get($key = null, $default = null)
    {
        return self::getInstance()->request->input($key, $default);
    }

}
