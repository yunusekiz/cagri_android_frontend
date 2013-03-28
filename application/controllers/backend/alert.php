<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alert extends CI_Controller {

	protected $session_data_array; // başlatılan session ın değerlerini array tipinde alan değişken.
	protected $data;
	
	public function index()
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
			$this->parser->parse('new_alert_view',$this->data);
		}
	}
	
}