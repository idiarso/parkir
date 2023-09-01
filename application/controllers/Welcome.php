<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$images = scandir("upload");
		$images_arr = [];
		for ($i = 0; $i < count($images); $i++) {
			if ($i == 0 || $i == 1) {
				continue;
			}

			array_push($images_arr, $images[$i]);
		}


		$data = array(
			'foto' => $images_arr
		);

		$this->load->view('welcome_message', $data);
	}
}
