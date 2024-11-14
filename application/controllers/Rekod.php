<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rekod extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('Rekod_model', 'DbRekod'); 
	}

	function index()
	{
		// $data = $this->input->post();
		$data['all_nurse'] = $this->DbRekod->get_all_complete_nurse();
		// echo "<pre>"; print_r($data['all_nurse']); echo "</pre>";

		$data['all_wad'] = $this->DbRekod->get_all_wad();

		$this->load->view('app/senarai-nurse-complete', $data);
	}

	function rekodNurse($data=false)
	{	
		$requestData    = $this->input->post();

		$output 		= $this->DbRekod->dt_search_nurse($requestData);
		$aaData 	  	= array();
		
		$no = 1;
		foreach($output as $key)
		{
			$form_id = ec($key['form_id']);

			$img_path 		= base_url('office/ep/view_photo/'.$form_id);
			$photo    		= "<img class=\"img-fluid img-thumbnail\" width=\"60\" src=\"$img_path\">";
			$company_name 	= get_table_code("company", "account_id", "name", $key['account_id']);

			// $action = "<button class=\"btn btn-primary btn-sm cancel-app\">CANCEL</button>";
			$action = "<button class=\"btn btn-primary btn-sm cancel-app\" data-formid=\"$form_id\">CANCEL</button>";

			#Final Data
				$aaData[] = array(
					'no'		=>	$no++, 
					'form_id'	=>	$key['form_id'], 
					'photo'		=>	$photo,
					'name'		=>	$key['fullname'].'<br><b>('.$key['application_type'].")</b>", 
					'passport'	=>	upper($key['passport']), 
					'company'	=>	upper($company_name), 
					'pass'		=>	get_mastercode_val(array('module' => 'pass_type_desc', 'code_id' => $key['pass_type']))['description'],
					'action'		=>	$action, 
				);
				

			}

		$sOutput = array
		(
			'draw'                => $this->input->post('draw'),
			'recordsTotal'        => $this->DbRekod->count_all_cancel($requestData),
			'recordsFiltered'     => $this->DbRekod->count_filtered_cancel($requestData),
			'data'                => $aaData
		);

		echo json_encode($sOutput);
	}
}
