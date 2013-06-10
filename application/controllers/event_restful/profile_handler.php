<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package     CodeIgniter
 * @subpackage  Rest Server
 * @category    Controller
 * @author      Phil Sturgeon
 * @link        http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class profile_handler extends REST_Controller
{

    function get_profile_get()
    {

        $this->load->model('profile_model');             //loads model class of 'event_model'
        $data = $this->profile_model->readRow();         //get event_model's readRow method.
        
        $this->response($data, 200);

    }
}
