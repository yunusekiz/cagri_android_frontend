<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class event_model extends CI_Model {

	protected $last_record_id;


	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('alert');
        $this->model_killer_library->setNameOfIdColumn('alert_id');
        
    }


	public function addAlertRow($alert_faculty, $alert_department, $alert_clas, $alert_type, $alert_body, $alert_date)
	{
		$insert_data = array(
								'type' 					=> $alert_type,
								'department' 			=> $alert_department,
								'clas'					=> $alert_clas,
								'faculty'				=> $alert_faculty,
								'body'					=> $alert_body,
								'date'					=> $alert_date
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}


	public function readRow($record_id = NULL)
	{
		return $this->model_killer_library->readRow($record_id);
	}

	public function updateTeamMemDetail($alert_id, $alert_faculty, $alert_department, $alert_clas, $alert_type, $alert_body, $alert_date)
	{
		$update_data = array(
								't_mem_name' 			=> $t_mem_name,
								't_mem_surname' 		=> $t_mem_surname,
								't_mem_position_title'	=> $t_mem_position_title,
								't_mem_position_detail'	=> $t_mem_position_detail,
								't_mem_facebook'		=> $t_mem_facebook,
								't_mem_twitter'			=> $t_mem_twitter,
								't_mem_linkedin'		=> $t_mem_linkedin
							);

		return $this->model_killer_library->updateRow($alert_id, $update_data);

	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

}

	
	