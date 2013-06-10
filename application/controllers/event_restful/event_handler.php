<?php defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH.'/libraries/REST_Controller.php';

class event_handler extends REST_Controller
{

    function get_event_get()
    {
 $this->load->model('event_model');             //loads model class of 'event_model'
        $data = $this->event_model->readRow();         //get event_model's readRow method.

		$unwanted = array('[',']');
		$wanted = array('','');

		$data = str_replace($unwanted,$wanted,$data);


        
        $this->response($data, 200);
    }
}
