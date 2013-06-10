<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_model extends CI_Model {

	protected $last_record_id;


	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('profile');
        $this->model_killer_library->setNameOfIdColumn('id');
        
    }


	public function addPersonalInfoRow($name,$surname, $age, $email, $phoneNumber, $department, $id)
	{
		$insert_data = array(
								'name' 					=> $name,
								'surname' 				=> $surname,
								'age'					=> $age,
								'email'					=> $email,
								'pnumber'				=> $phoneNumber,
								'department'			=> $department,
								'id'					=> $id
	);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}


	public function readRow($record_id = NULL)
	{
		return $this->model_killer_library->readRow($record_id);
	}
	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

}



