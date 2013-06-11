<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alert extends CI_Controller {

	protected $session_data_array; // başlatılan session ın değerlerini array tipinde alan değişken.
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');// session ın nimetlerinden faydalanabilmek için 'session' isimli library yi yükler.
		$admin = $this->session->userdata('admin_session'); // $admin diye bi değişken set edilir, değer olarak ise
		
		if( empty($admin) ) // eğer $admin değişkenini değeri boş ise, kullanıcı login formuna geri gönderilir
		{
			$base = base_url();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."loginpage\">";
			die();
		}

		$base = base_url();
		$this->parser_data['base'] = $base;
		$this->parser_data['title'] = 'Create New Event';

		$this->load->model('alert_model');
		$this->load->model('event_model');
	}


	public function index()
	{
		return null;
	}


	protected function getSessionData() // session ın başlatıldığı andaki değerleri bu metodla öğrenilebilir.
	{
		$this->session_data_array = $this->session->all_userdata();
		return $this->session_data_array;
	}


	public function addNewAlert()
	{

		$alert_faculty		= $this->input->post('alert_faculty');
		$alert_department	= $this->input->post('alert_department');
		$alert_clas 	    = $this->input->post('alert_clas');
		$alert_type		    = $this->input->post('alert_type');
		$alert_body	        = $this->input->post('alert_body');
		$alert_date 		= $this->input->post('alert_date');


		if ( ($alert_faculty=="")	||($alert_department=="")||($alert_clas=="")||($alert_type=="")|| ($alert_body==""))
		{
		 	echo "Please do not left any spaces";
		 	echo "<meta http-equiv=\"refresh\" content=\"0; url=../alert/addForm\">";
		}
		else
		{
		   $insert = $this->event_model->addAlertRow($alert_faculty, $alert_department, $alert_clas, $alert_type, $alert_body, $alert_date);

		   					if($insert == true){
		   						$message = 'Operation success';
		   						echo $message;
		   						echo "<meta http-equiv=\"refresh\" content=\"0; url=../alert/addForm\">";
		   					}
		   					else
		   					{
		   						$message = 'Operation failed';
		   						echo $message;
		   					}

		}
	}


	public function addForm()
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

			$this->parser_data['default_event_date'] = date("d/m/Y");

			$this->parser->parse('admin_header_view',$this->parser_data);
			$this->parser->parse('new_alert_view',$this->parser_data);
			$this->parser->parse('admin_footer_view',$this->parser_data);
			}
		}

}
