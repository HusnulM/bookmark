<?php

class Member extends Controller {

	public function index()
	{
		$data['nama'] = $this->model('User_model')->getUser();
		$data['title'] = 'BookMark - Member Page';

		$this->view('templates/header', $data);
		$this->view('member/index', $data);
		$this->view('templates/footer');
	}

	// public function results()
	// {
	// 	$data['title'] = 'Bookmark Search Results';
	// 	$data['src'] = $_POST['search'];
	// 	$data['results'] = $this->model('Home_model')->searchBookMark($_POST);
	// 	// var_dump($data);
	// 	$this->view('templates/header', $data);
	// 	$this->view('home/results', $data);
	// 	$this->view('templates/footer');
	// }

	public function simpanBookmark(){
		if( $this->model('Member_model')->simpanBookmark($_POST) > 0 ) {
			Flasher::setMessage('Bookmark Berhasil','ditambahkan','success');
			header('location: '. BASEURL);
			exit;			
		}else{
			Flasher::setMessage('Bookmark Gagal','ditambahkan','danger');
			header('location: '. BASEURL );
			exit;	
		}
	}
}