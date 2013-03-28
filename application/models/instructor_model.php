<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class instructor_model extends CI_Model {

	public function addInstructorRow($inumber,$name,$surname,$email,$birthdate,$faculty,$department)
	{
		$data = array(
						'inumber'		=>$inumber,
						'name' 			=> $name,
						'surname'		=>	$surname,
						'email' 		=> $email,
						'birthdate'		=>	$birthdate,
						'faculty'		=> $faculty,
						'department'	=>	$department						
					);
		$query = $this->db->insert('instructor',$data);
		$affected_rows = $this->db->affected_rows();

		if($affected_rows > 0) {
			$this->id = $this->db->insert_id();
			return true;
		}else
			return false;
		
	}

	public function getAllInstructor($id = NULL)
	{
		if ($id == NULL) 
		{
			$query = $this->db->select('*')->from('instructor')->get();

			if ($query->num_rows()) 
			{
				return $query->result_array();
			}
			else
			{
				return NULL;
			}
		}
		else
		{
			$query = $this->db->select('*')->from('instructor')->where('id',$id)->get();
			return $query->result_array();
		}

	}

	public function deleteInstructor($id) {
		$test_delete_before = $this->db->select('id')->from('instructor')->where('id',$id)->get();

		if($test_delete_before->num_rows() > 0)
		{
			$query = $this->db->where('id',$id)->delete('instructor');

			$affected_rows = $this->db->affected_rows();
			

			if($affected_rows > 0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}

		}
		else
		{
			return FALSE;
		}

	}

	public function updateInstructor($inumber,$name,$surname,$email,$birthdate,$faculty,$department,$id) {
			$update_data = array(
								'inumber'		=> $inumber,
								'name'			=> $name,
								'surname'		=> $surname,
								'email'			=> $email,
								'birthdate'		=> $birthdate,
								'faculty'		=> $faculty,
								'department'	=> $department,
								'id'			=> $id


							);

		$query = $this->db->where('id',$id)->update('instructor',$update_data);

		$affected_rows = $this->db->affected_rows();

		if ($affected_rows > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}



}