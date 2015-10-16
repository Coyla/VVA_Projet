<?php 
/**
* Model pour le controller USER
*/
class user_model extends CI_Model
{
	
	public function __construct()
	{
		
		$this->load->database();
		$this->load->helper('date');
	}

	public function set_user()
	{
		$date_actuelle = date('Y-m-d');
		$data=array(
			'USER'=>$this->input->post('email'),
			'MDP' => $this->input->post('password'),
			'NOMCOMPTE' =>$this->input->post('name'),
			'PRENOMCOMPTE' =>$this->input->post('first_name'),
			'DATEINSCRIP' => $date_actuelle,
			'DATESUPPRESSION' => '12/12/12',
			'TYPECOMPTE' => '',
			
			);
		return $this->db->insert('COMPTE', $data);
	}
	public function get_user()
	{
		$data=array();
	}

}
 ?>