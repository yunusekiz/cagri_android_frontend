<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class student_model extends CI_Model {

	public function addStudentRow($snumber,$name,$surname,$email,$birthdate,$password,$faculty,$department, $class)
	{
		$data = array(
						'snumber'		=>$snumber,
						'name' 			=> $name,
						'surname'		=>	$surname,
						'email'			=> $email,
						'birthdate'		=>	$birthdate,
						'password'		=> $password,
						'faculty' 		=> $faculty,
						'department'	=>	$department,
						'class' 		=> $class
					);


		$query = $this->db->insert('student',$data);
		$affected_rows = $this->db->affected_rows();

		if($affected_rows > 0)
		{
			$this->id = $this->db->insert_id();
			return true;
		}

		else
			return false;
		
		}

	public function deleteStudent($id)
	{
		$test_delete_before = $this->db->select('id')->from('student')->where('id',$id)->get();

		if($test_delete_before->num_rows() > 0)
		{
			$query = $this->db->where('id',$id)->delete('student');

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

	public function getAllStudent($id = NULL)
	{
		if ($id == NULL) 
		{
			$query = $this->db->select('*')->from('student')->get();

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
			$query = $this->db->select('*')->from('student')->where('id',$id)->get();
			return $query->result_array();
		}

	}

	public function updateStudent($snumber,$name,$surname,$email,$birthdate,$password,$faculty,$department,$class,$id) {
			$update_data = array(
								'snumber'		=> $snumber,
								'name'			=> $name,
								'surname'		=> $surname,
								'email'			=> $email,
								'birthdate'		=> $birthdate,
								'password'		=> $password,
								'faculty'		=> $faculty,
								'department'	=> $department,
								'class'			=> $class,
								'id'			=> $id


							);

		$query = $this->db->where('id',$id)->update('student',$update_data);

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