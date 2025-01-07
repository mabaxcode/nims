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

		// echo "<pre>"; print_r($requestData); echo "</pre>"; exit;


		$output 		= $this->DbRekod->dt_search_nurse($requestData);
		$aaData 	  	= array();

		// echo "<pre>"; print_r($output); echo "</pre>"; exit;
		
		$no = 1;
		foreach($output as $key)
		{
			//$form_id = ec($key['form_id']);

			//$img_path 		= base_url('office/ep/view_photo/'.$form_id);
			//photo    		= "<img class=\"img-fluid img-thumbnail\" width=\"60\" src=\"$img_path\">";
			//$company_name 	= get_table_code("company", "account_id", "name", $key['account_id']);

			$action = "<a class=\"btn btn-primary btn-sm view-nurse-details\" data-init=".$key['user_id']." style='float:right;'>Lihat</a>";
			//$action = "<button class=\"btn btn-primary btn-sm cancel-app\" data-formid=\"$form_id\">CANCEL</button>";

			$gredDesc = get_ref_code('gred', $key['gred']);

			#Final Data
				$aaData[] = array(
					'no'		=>	$no++, 
					'name'		=>	$key['name'] . "<br><span class='badge badge-primary'>".$key['no_ljm']."</span>", 
					'email'		=>	$key['email'],
					'phone_no'		=>	$key['phone_no'], 
					'no_kp'	=>	$key['no_kp'],
					'gred' => $gredDesc,
					'action'		=>	$action, 
				);
				

			}

		$sOutput = array
		(
			'draw'                => $this->input->post('draw'),
			'recordsTotal'        => $this->DbRekod->count_all_nurse($requestData),
			'recordsFiltered'     => $this->DbRekod->count_filtered_nurse($requestData),
			'data'                => $aaData
		);

		echo json_encode($sOutput);
	}
}
