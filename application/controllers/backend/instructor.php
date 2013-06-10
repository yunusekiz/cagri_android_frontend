<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class instructor extends CI_Controller {

	protected $session_data_array; // başlatılan session ın değerlerini array tipinde alan değişken.
	protected $parser_data;


	public function __construct() {
		parent::__construct();
		$this->load->model('instructor_model');

		$base = base_url();
		$this->parser_data['base'] = $base;

		
	}

	
	public function index()
	{	
/*		$base = base_url();
		$this->data = array('base' => $base);
		
		$this->load->library('session');// session ın nimetlerinden faydalanabilmek için 'session' isimli library yi yükler.
		$admin = $this->session->userdata('admin_session'); // $admin diye bi değişken set edilir, değer olarak ise
															// şu aşamada olup olmadığı bilinmeyen admin_session değişkeni atanır
		if( empty($admin) ) // eğer $admin değişkenini değeri boş ise, kullanıcı login formuna geri gönderilir
		{
			echo "<meta http-equiv=\"refresh\" content=\"0; url=../loginpage\">";
		}
		else
		{
			//$this->getSessionData(); // session başlatıldığı andaki değerleri öğrenilmek istendiği zaman getSessionData() metodu çağırılır.
			//var_dump($this->session_data_array); //
			
			// admin panelinin ilgili view lerini yükler
			$this->parser->parse('instructor_addition_view',$this->data);
		}*/
		return null;
	}
	
	protected function getSessionData() // session ın başlatıldığı andaki değerleri bu metodla öğrenilebilir.
	{
		$this->session_data_array = $this->session->all_userdata();
		return $this->session_data_array;	
	}


	public function add_instructor()
	{
		

		$instructor_number		= $this->input->post('instructor_number');
		$instructor_name		= $this->input->post('instructor_name');
		$instructor_surname		= $this->input->post('instructor_surname');
		$instructor_email		= $this->input->post('instructor_email');
		$instructor_birthdate	= $this->input->post('instructor_birthdate');
		$instructor_password	= $this->input->post('instructor_password');
		$instructor_faculty		= $this->input->post('instructor_faculty');
		$instructor_department	= $this->input->post('instructor_department');


		if ( ($instructor_number=="")	  || ($instructor_name=="")	|| ($instructor_surname=="")	 || ($instructor_email=="") ||
			 ($instructor_birthdate=="") || ($instructor_password=="") || ($instructor_faculty=="") || ($instructor_department==""))
		   {
		   		$message = 'Please do not left any spaces';
		   		echo $message;
		   		echo "<meta http-equiv=\"refresh\" content=\"0; url=../instructor/addForm\">";
		   }
		   else
		   {

		   	$insert = $this->instructor_model->addInstructorRow($instructor_number, $instructor_name,
		   	$instructor_surname,$instructor_email,$instructor_birthdate,$instructor_password,$instructor_faculty,
		   						$instructor_department);

	
		   					if($insert == true){
		   						$message = 'Operation success';
		   						echo $message;
		   						echo "<meta http-equiv=\"refresh\" content=\"0; url=../instructor/addForm\">";
		   					}

		   						
		   					else{
		   						$message = 'Operation failed';
		   						echo $message;
		   					}
		   						
		   }

	}

	public function deleteInstructor($id) {
		$delete_instructor = $this->instructor_model->deleteInstructor($id);

		if($delete_instructor == TRUE) {
			echo 'Instructor has been deleted';
			echo "<meta http-equiv=\"refresh\" content=\"0; url=../../instructor/allInstructors\">";
			 
		}
		else
			echo 'Deletion failed';
			
	}

	public function editInstructor($id) {

		$get_instructor_by_id = $this->getInstructorById($id);

		///////////////////////////////////////////
	}

	public function updateInstructor() 
	{
		$instructor_id 			= $this->input->post('instructor_id');
		$instructor_number		= $this->input->post('instructor_number');
		$instructor_name		= $this->input->post('instructor_name');
		$instructor_surname		= $this->input->post('instructor_surname');
		$instructor_email		= $this->input->post('instructor_email');
		$instructor_birthdate	= $this->input->post('instructor_birthdate');
		$instructor_password	= $this->input->post('instructor_password');
		$instructor_faculty		= $this->input->post('instructor_faculty');
		$instructor_department	= $this->input->post('instructor_department');

		$update = $this->instructor_model->updateInstructor($instructor_number,$instructor_name,$instructor_surname,$instructor_email,
			$instructor_birthdate,$instructor_password,$instructor_faculty,$instructor_department,$instructor_id);

		if($update == TRUE) {
			echo 'Succesfully updated';
			echo "<meta http-equiv=\"refresh\" content=\"0; url=allInstructors\">";
			}
		else
			echo 'Failed';

	}

	public function update() 
	{
				$base = base_url();
		$this->parser_data = array('base' => $base);
		
		$this->load->library('session');// session ın nimetlerinden faydalanabilmek için 'session' isimli library yi yükler.
		$admin = $this->session->userdata('admin_session'); // $admin diye bi değişken set edilir, değer olarak ise
															// şu aşamada olup olmadığı bilinmeyen admin_session değişkeni atanır
		if( empty($admin) ) // eğer $admin değişkenini değeri boş ise, kullanıcı login formuna geri gönderilir
		{
			echo "<meta http-equiv=\"refresh\" content=\"0; url=../../loginpage\">";
		}
		else
		{
			//$this->getSessionData(); // session başlatıldığı andaki değerleri öğrenilmek istendiği zaman getSessionData() metodu çağırılır.
			//var_dump($this->session_data_array); //
			
			// admin panelinin ilgili view lerini yükler
			$this->parser->parse('edit_user_view',$this->parser_data);
		}	

	}

	public function editForm($id)
	{
		$record_by_id = $this->instructor_model->getAllInstructor($id);
		$this->parser_data['single_record'] = $record_by_id;
		$this->parser->parse('instructor_update_view',$this->parser_data);
	}

	public function addForm()
	{
		$base = base_url();
		$this->parser_data = array('base' => $base);
		
		$this->load->library('session');// session ın nimetlerinden faydalanabilmek için 'session' isimli library yi yükler.
		$admin = $this->session->userdata('admin_session'); // $admin diye bi değişken set edilir, değer olarak ise
															// şu aşamada olup olmadığı bilinmeyen admin_session değişkeni atanır
		if( empty($admin) ) // eğer $admin değişkenini değeri boş ise, kullanıcı login formuna geri gönderilir
		{
			echo "<meta http-equiv=\"refresh\" content=\"0; url=../loginpage\">";
		}
		else
		{
			//$this->getSessionData(); // session başlatıldığı andaki değerleri öğrenilmek istendiği zaman getSessionData() metodu çağırılır.
			//var_dump($this->session_data_array); //
			
			// admin panelinin ilgili view lerini yükler
			$this->parser->parse('instructor_addition_view',$this->parser_data);
		}		
	}

	public function allInstructors()
	{
		$records = $this->instructor_model->getAllInstructor();

		if ($records == null) 
			$this->parser_data['allins'] = array();
		else
		{
			$this->parser_data['allins'] = $records;
		}

		$this->parser->parse('all_instructor_view',$this->parser_data);

		



	}
}