<?php

/**
 * Intranet
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
if (class_exists('Uiform_Fb_Controller_Settings')) {
    return;
}

/**
 * Controller Settings class
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   Release: 1.00
 * @link      http://www.rocket-form.com
 */
class Uiform_Fb_Controller_Settings extends Uiform_Base_Module {

    const VERSION = '0.1';

    private $wpdb = "";
    protected $modules;
    private $model_settings = "";

    /**
     * Constructor
     *
     * @mvc Controller
     */
    protected function __construct() {
        global $wpdb;
        $this->wpdb = $wpdb;
        $this->model_settings = self::$_models['formbuilder']['settings'];
        // save settings options
        add_action('wp_ajax_rocket_fbuilder_setting_saveOpts', array(&$this, 'ajax_save_options'));
    }

    public function ajax_save_options() {
        $opt_language = (isset($_POST['language']) && $_POST['language']) ? Uiform_Form_Helper::sanitizeInput($_POST['language']) : '';
        $data = array();
        $data['language'] = $opt_language;
        $where = array(
            'id' => 1
        );
        $result = $this->wpdb->update($this->model_settings->table, $data, $where);
        $json = array();
        if ($result > 0) {
            $json['success'] = 1;
        } else {
            $json['success'] = 0;
        }

        header('Content-Type: application/json');
        echo json_encode($json);
        wp_die();
    }

    public function view_settings() {
        $data = array();
        $query = $this->model_settings->getOptions();

        $list_lang = array();
        $list_lang[] = array('val' => '', 'label' => __('Select language', 'FRocket_admin'));
        $list_lang[] = array('val' => 'en_US', 'label' => __('english', 'FRocket_admin'));
        $list_lang[] = array('val' => 'es_ES', 'label' => __('spanish', 'FRocket_admin'));
        $list_lang[] = array('val' => 'fr_FR', 'label' => __('french', 'FRocket_admin'));
        $list_lang[] = array('val' => 'de_DE', 'label' => __('german', 'FRocket_admin'));
        $list_lang[] = array('val' => 'it_IT', 'label' => __('italian', 'FRocket_admin'));
        $list_lang[] = array('val' => 'pt_BR', 'label' => __('portuguese', 'FRocket_admin'));
        $list_lang[] = array('val' => 'ru_RU', 'label' => __('russian', 'FRocket_admin'));
        $list_lang[] = array('val' => 'zh_CN', 'label' => __('chinese', 'FRocket_admin'));
        $data['language'] = $query->language;
        $data['lang_list'] = $list_lang;

        echo self::loadPartial('layout.php', 'formbuilder/views/settings/view_settings.php', $data);
    }

    /**
     * Register callbacks for actions and filters
     *
     * @mvc Controller
     */
    public function register_hook_callbacks() {
        
    }

    /**
     * Initializes variables
     *
     * @mvc Controller
     */
    public function init() {

        try {
            //$instance_example = new WPPS_Instance_Class( 'Instance example', '42' );
            //add_notice('ba');
        } catch (Exception $exception) {
            add_notice(__METHOD__ . ' error: ' . $exception->getMessage(), 'error');
        }
    }

    /*
     * Instance methods
     */

    /**
     * Prepares sites to use the plugin during single or network-wide activation
     *
     * @mvc Controller
     *
     * @param bool $network_wide
     */
    public function activate($network_wide) {

        return true;
    }

    /**
     * Rolls back activation procedures when de-activating the plugin
     *
     * @mvc Controller
     */
    public function deactivate() {
        return true;
    }

    /**
     * Checks if the plugin was recently updated and upgrades if necessary
     *
     * @mvc Controller
     *
     * @param string $db_version
     */
    public function upgrade($db_version = 0) {
        return true;
    }

    /**
     * Checks that the object is in a correct state
     *
     * @mvc Model
     *
     * @param string $property An individual property to check, or 'all' to check all of them
     * @return bool
     */
    protected function is_valid($property = 'all') {
        return true;
    }

}

?>
