<?php
class Topic{
	// Init DB Variable
	private $db;

	/*
	Constructor
	*/
	 public function __construct(){
		$this->db = new Database;
	}

	/*
	* GEt All Topics
	*/
	public function getAllTopics(){
		$this->db->query("SELECT topics.*,users.username,users.avatar,categories.name FROM topics
						 INNER JOIN users
						 ON topics.user_id = users.id
						 INNER JOIN catagories
						 ON topics.category_id = categories.id
						 ORDER BY create_date DESC
						 ");
		// Assign Result set
		$results = $this->db->resultset();

		return $results;
	}
}