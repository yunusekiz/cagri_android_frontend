<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alert_model extends CI_Model {

	public function addAlertRow($alert_faculty,$alert_department,$alert_clas,$alert_type,$alert_body)
	{
		$data = array(
						'alert_faculty'		=>$alert_faculty,
						'alert_department' 	=>$alert_department,
						'alert_clas'		=>$alert_clas,
						'alert_type' 		=>$alert_type,
						'alert_body'		=>$alert_body					
					);
		$query = $this->db->insert('alert',$data);
		if ($this->db->affected_rows()>0)
			return TRUE;
		else
			return FALSE;

		
		
	}
	
	
	public function getLastEvent()
	{
		$last_insert_id = $this->db->insert_id();

		$query = $this->db->select('event_date, event_title, event_detail')->from('event')->order_by('event_id','desc')->limit(1)->get();

		if ($query->num_rows()>0)
		{
			$result_array = $query->result_array();

			// yukarıdaki sorgu içi içe array halinde sonuç döndürdüğü için array deki ilk elemanı seçerken $result_array[0] diyoruz 
			$result = array(
								'alert_faculty'	=>	$result_array[0]['alert_faculty'],
								'alert_department'	=>	$result_array[0]['alert_department'],
								'alert_clas'	=>	$result_array[0]['alert_clas'],
								'alert_type'	=>	$result_array[0]['alert_type'],
								'alert_body'    => $result_array[0] ['alert_body']
						   );

			return $result;
		} 
		else
			return NULL;
	}

}
