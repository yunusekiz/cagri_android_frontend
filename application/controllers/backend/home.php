<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	
	protected $session_data_array; // başlatılan session ın değerlerini array tipinde alan değişken.
	protected $parser_data;
	
	public function index()
	{
		
		$this->load->library('session');// session ın nimetlerinden faydalanabilmek için 'session' isimli library yi yükler.
		$admin = $this->session->userdata('admin_session'); // $admin diye bi değişken set edilir, değer olarak ise
		if( empty($admin) ) // eğer $admin değişkenini değeri boş ise, kullanıcı login formuna geri gönderilir
		{
			$base = base_url();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."loginpage\">";
		}

			//$this->getSessionData(); // session başlatıldığı andaki değerleri öğrenilmek istendiği zaman getSessionData() metodu çağırılır.
			//var_dump($this->session_data_array); //
			
			// admin panelinin ilgili view lerini yükler
			$this->parser_data['base'] = base_url();
			$this->parser_data['title']	= 'Home - Android Alert System';

			$this->parser->parse('admin_header_view',$this->parser_data);
			$this->parser->parse('admin_footer_view',$this->parser_data);
	}
	
	protected function getSessionData() // session ın başlatıldığı andaki değerleri bu metodla öğrenilebilir.
	{
		$this->session_data_array = $this->session->all_userdata();
		return $this->session_data_array;	
	}

	public function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$base = base_url();
		echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."loginpage\">";

	}

	
}