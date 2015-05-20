<?php

/**
 * Frontend
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2015 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://www.rocket-form.com
 */
if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}
if (class_exists('Uiform_Form_Helper')) {
    return;
}

class Uiform_Form_Helper {

    public static function getroute() {
        $return = array();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //post
            $return['module'] = isset($_POST['mod']) ? $_POST['mod'] : '';
            $return['controller'] = isset($_POST['controller']) ? $_POST['controller'] : '';
            $return['action'] = isset($_POST['action']) ? $_POST['action'] : '';
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
            //get
            $return['module'] = isset($_GET['mod']) ? $_GET['mod'] : '';
            $return['controller'] = isset($_GET['controller']) ? $_GET['controller'] : '';
            $return['action'] = isset($_GET['action']) ? $_GET['action'] : '';
        } else {
            //request
            $return['module'] = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : '';
            $return['controller'] = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : '';
            $return['action'] = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
        }
        return $return;
    }

    public static function array2xml($array, $xml = null) {
        if (!isset($xml)) {
            $xml = new SimpleXMLElement('<params/>');
        }
        foreach ($array as $key => $value) {
            if (is_array($value) || is_object($value)) {
                array2xml($value, $xml);
            } else {
                if (is_numeric($key)) {
                    if (is_string($value)) {
                        $xml->addChild('item', htmlentities($value));
                    } else {
                        $xml->addChild('item', $value);
                    }
                } elseif (is_string($value)) {
                    $xml->addChild($key, htmlentities($value));
                } else {
                    $xml->addChild($key, $value);
                }
            }
        }
        return $xml->asXML();
    }

    public static function generate_pagination() {
        
    }

    public static function convert_HexToRGB($hex) {
        // Format the hex color string
        $hex = str_replace('#', '', $hex);
        if (strlen($hex) == 3) {
            $hex = str_repeat(substr($hex, 0, 1), 2) . str_repeat(substr($hex, 1, 1), 2) . str_repeat(substr($hex, 2, 1), 2);
        }

        // Get decimal values
        $arr = array();
        $arr[] = $r = hexdec(substr($hex, 0, 2));
        $arr[] = $g = hexdec(substr($hex, 2, 2));
        $arr[] = $b = hexdec(substr($hex, 4, 2));

        return $arr;
    }

    /**
     * Sanitize input
     * 
     * @param string $string input
     * 
     * @return array
     */
    public static function sanitizeInput($string) {
        $string = filter_var($string, FILTER_SANITIZE_STRING);
        $string = stripslashes($string);
        $string = str_replace(array('‘', '’', '“', '”'), array("'", "'", '"', '"'), $string);
        $string = html_entity_decode(strip_tags($string), ENT_QUOTES, 'UTF-8');
        $string = preg_replace('/[\n\r\t]/', ' ', $string);
        $string = trim($string, "\x00..\x1F");
        return $string;
    }

    /**
     * Sanitize input
     * 
     * @param string $string input
     * 
     * @return array
     */
    public static function sanitizeFnamestring($string) {
        $string = preg_replace('/\s+/', '', $string);
        $string = strtolower($string);
        return $string;
    }

    /**
     * Sanitize recursive
     * 
     * @param string $data array
     * 
     * @return array
     */
    public static function sanitizeRecursive($data) {
        if (is_array($data)) {
            return array_map(array('Uiform_Form_Helper', 'sanitizeRecursive'), $data);
        } else {
            return Uiform_Form_Helper::sanitizeInput($data);
        }
    }

    public static function data_encrypt($string, $key) {
        $output = '';
        /*   if(function_exists("mcrypt_encrypt")) { */
        if (0) {
            $output = rtrim(
                    base64_encode(
                            mcrypt_encrypt(
                                    MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB, mcrypt_create_iv(
                                            mcrypt_get_iv_size(
                                                    MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB
                                            ), MCRYPT_RAND)
                            )
                    ), "\0"
            );
        } else {
            $result = '';
            for ($i = 0; $i < strlen($string); $i++) {
                $char = substr($string, $i, 1);
                $keychar = substr($key, ($i % strlen($key)) - 1, 1);
                $char = chr(ord($char) + ord($keychar));
                $result .= $char;
            }
            $output = base64_encode($result);
        }


        return $output;
    }

    public static function data_decrypt($string, $key) {
        $output = '';
        /* if(function_exists("mcrypt_encrypt")) { */
        if (0) {
            $output = rtrim(
                    mcrypt_decrypt(
                            MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB, mcrypt_create_iv(
                                    mcrypt_get_iv_size(
                                            MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB
                                    ), MCRYPT_RAND
                            )
                    ), "\0"
            );
        } else {
            $result = '';
            $string = base64_decode($string);

            for ($i = 0; $i < strlen($string); $i++) {
                $char = substr($string, $i, 1);
                $keychar = substr($key, ($i % strlen($key)) - 1, 1);
                $char = chr(ord($char) - ord($keychar));
                $result .= $char;
            }
            $output = $result;
        }

        return $output;
    }

    function base64url_encode($s) {
        return str_replace(array('+', '/'), array('-', '_'), base64_encode($s));
    }

    function base64url_decode($s) {
        return base64_decode(str_replace(array('-', '_'), array('+', '/'), $s));
    }

    // Javascript/HTML hex encode 
    public static function encodeHex($input) {
        $temp = '';
        $length = strlen($input);
        for ($i = 0; $i < $length; $i++)
            $temp .= '%' . bin2hex($input[$i]);
        return $temp;
    }

}

?>
