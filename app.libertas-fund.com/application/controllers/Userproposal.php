<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userproposal extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Proposals_model');
		//$this->load->model('product_model');
	}
	public function index()
	{
		//if(($this->session->userdata('user_name')!=""))
		//{
			//$this->welcome();
		//}
		//else{
			//$data['title']= 'Home';
			//$this->load->view('header_view',$data);
			//$this->load->view("registration_view.php", $data);
			
			
	 $data['usersArray'] = $this->Proposals_model->get_proposals_clientdata();
			$this->load->view('form-basic',$data);
			
			//$this->load->view('form-basic');
		//}
	}
	public function welcome()
	{
		echo "Details saved successifully";
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	public function thank()
	{
			echo " Details saved successifully";
	}
	public function registration()
	{
		$this->load->library('form_validation');
		
			$this->user_model->add_user();
			$this->load->view('form-basic');
			 
			//$this->thank();
		
	}
        
        public function AllUsers()
	{
                        $data['usersArray'] = $this->user_model->return_all_users();
			$this->load->view('all_users_view',$data);
                        
	}

	public function generate_quote(){

$id=$this->input->get('id');
		$info= $this->user_model->return_quote($id);


		foreach ($info as $key => $value) {

			$title = $value['surname'];
			$title1 = $value['name'];
			$title2 = $value['prefered_name'];
			$title3 = $value['cell_number'];
			$title4 = $value['identity'];
			echo $title;
			echo $title1;
			echo $title2;
			echo $title3;
			echo $title4;
			# code...
		}
		//echo $info['Customer'];
		//echo $data['usersArray'] ;

	}





	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
}
?>