<?php

class Member_model{

	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	// public function searchBookMark($data)
	// {
	// 	// var_dump($data);
	// 	$this->db->query('CALL sp_getBookMark("'. $data['search'] .'")');

	// 	// $json = json_encode($this->db->resultSet());

	// 	// echo $json;
	// 	return $this->db->resultSet();
	// }

	public function simpanBookmark($data)
	{
		//$nim, $nama, $jurusan
		$query = "INSERT INTO mybookmark (userId, bookmarkKat, title, body, url, createDate) 
				  VALUES(:userId, :bookmarkKat, :title, :body, :url, :createDate)";
		$this->db->query($query);
		$this->db->bind('userId',$_SESSION['usr']['user']);
		$this->db->bind('bookmarkKat','SAP-ABAP');
		$this->db->bind('title',$data['title']);
		$this->db->bind('body',$data['desc']);
		$this->db->bind('url',$data['url']);
		$this->db->bind('createDate', date('Y-m-d'));
		$this->db->execute();

		return $this->db->rowCount();
	}
}