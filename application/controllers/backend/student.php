<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class student extends CI_Controller {

	protected $session_data_array; // başlatılan session ın değerlerini array tipinde alan değişken.
	protected $data;
	protected $parser_data;

	public function __construct() {
		parent::__construct();
		$this->load->model('student_model');

		$base = base_url();
		$this->data['base'] = $base;
		$this->parser_data['base'] = $base;
		
	}
	
	public function index()
	{	
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
			$this->parser->parse('student_addition_view',$this->data);
		}

	}
	
	protected function getSessionData() // session ın başlatıldığı andaki değerleri bu metodla öğrenilebilir.
	{
		$this->session_data_array = $this->session->all_userdata();
		return $this->session_data_array;	
	}


	public function add_student()

		{
	

		$student_number		= $this->input->post('student_number');
		$student_name		= $this->input->post('student_name');
		$student_surname	= $this->input->post('student_surname');
		$student_email		= $this->input->post('student_email');
		$student_birthdate	= $this->input->post('student_birthdate');
		$student_password	= $this->input->post('student_password');
		$student_faculty	= $this->input->post('student_faculty');
		$student_department	= $this->input->post('student_department');
		$student_class		= $this->input->post('student_class');
		

		if ( ($student_number=="")	  || ($student_name=="")	|| ($student_surname=="")	 || ($student_email=="") ||
			 ($student_birthdate=="")|| ($student_password=="") || ($student_faculty=="") || ($student_department=="") || ($student_class=="")  )
		   {
		   		echo "Please do not left any spaces";
		   }
		else
		   {

		   					
		   $insert = $this->student_model->addStudentRow($student_number, $student_name,
		   	$student_surname,$student_email,$student_birthdate,$student_password,$student_faculty,
		   						$student_department,$student_class);

	
		   					if($insert == true)
		   						echo 'Saved succesfully.';
		   						 
		   					else
		   						echo ' Failed.';
		   						
		   }

	}


	public function deleteStudent($id)
	{
	$delete_student = $this->student_model->deleteStudent($id);

		if($delete_student == TRUE) {
			echo 'Instructor has been deleted';
			echo "<meta http-equiv=\"refresh\" content=\"0; url=../../student/allStudents\">";
			 
		}
		else
			echo 'Deletion failed';
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

	public function updateStudent()
	{

		$student_id 		= $this->input->post('student_id');
		$student_number		= $this->input->post('student_number');
		$student_name		= $this->input->post('student_name');
		$student_surname	= $this->input->post('student_surname');
		$student_email		= $this->input->post('student_email');
		$student_birthdate	= $this->input->post('student_birthdate');
		$student_password	= $this->input->post('student_password');
		$student_faculty	= $this->input->post('student_faculty');
		$student_department	= $this->input->post('student_department');
		$student_class		= $this->input->post('student_class');
		

		if ( ($student_number=="")	  || ($student_name=="")	|| ($student_surname=="")	 || ($student_email=="") ||
			 ($student_birthdate=="") || ($student_password=="")|| ($student_faculty=="") || ($student_department=="") || ($student_class=="")  )
		   {
		   		echo "Please do not left any spaces";
		   		echo "<meta http-equiv=\"refresh\" content=\"0; url=../student/addForm\">";

		   }
		else
		   {

		   					
		   $update = $this->student_model->updateStudent($student_number, $student_name,
		   	$student_surname,$student_email,$student_birthdate,$student_password,$student_faculty,
		   						$student_department,$student_class,$student_id);


		   				if($update == true)
		   				{
		   						$message = 'Operation success';
		   						echo $message;
								echo "<meta http-equiv=\"refresh\" content=\"0; url=allStudents\">";
			   					}

		   						
		   					else
		   					{
		   						$message = 'Operation failed';
		   						echo $message;
		   					}

			}
	
}


	public function editForm($id)
	{
		$record_by_id = $this->student_model->getAllStudent($id);
		$this->data['single_record'] = $record_by_id;
		$this->parser->parse('student_update_view',$this->data);
	}

	public function addForm()
	{
		$base = base_url();
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
			//$this->parser->parse('admin_header_view',$this->parser_data);
			$this->parser->parse('student_addition_view',$this->data);
			//$this->parser->parse('admin_footer_view',$this->parser_data);
		}		
	}

	public function allStudents()
	{
		$records = $this->student_model->getAllStudent();

		if ($records == null) 
			$this->data['allins'] = array();
		else
		{
			$this->data['allins'] = $records;
		}

		$this->parser->parse('all_student_view',$this->data);

	}

	public function getExcelDoc() {
	$this->load->library('excel');
	$this->excel->setActiveSheetIndex(0);
	$this->excel->getActiveSheet()->setTitle('test worksheet');
	$this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
	$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
	$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
	$this->excel->getActiveSheet()->mergeCells('A1:D1');
	$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	 
	$filename='just_some_random_name.xls'; 
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="'.$filename.'"'); 
	header('Cache-Control: max-age=0'); 
	$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
	$objWriter->save('php://output');
	}

}