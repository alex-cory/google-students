<?php
$totalEarned = '160';
$totalSignups = '8';

// class Orgs
// {
// 	// for Org in specific
// 	public $name;
// 	public $rank;
// 	public $color;
// 	// for Orgs plural
// 	// public $orgs;
// 	public $totalSignups;
// 	public $totalEarned;

// 	public function __construct()
// 	{
// 		$this->name = "ACM Club";
// 		$this->nank = "2";
// 		$this->color = "green";
// 	}



// 	public function totalSignups()
// 	{
// 		$org = $this


// 		$orgs = array();
// 				$orgs[] = 'ACM Club';
// 				$orgs[] = 'Nursing Club';

// 		$orgs = array(
// 						'name' => $orgName,
// 						'rank' => $orgRank
// 		             );

// 		// FOR FORM DATA
// 		// $orgs = array(
// 		// 				'name' => $_POST['orgName'],
// 		// 				'rank' => $_POST['orgRank']
// 		//              );

// 				foreach ($orgs as $org => $value) {
// 					d($org, $value);


// 					foreach ($org as $key => $value) {
// 						// $org[]
// 					}
// 				}

// 	}

// 	*
// 	 * Description:
// 	 * This will return an array of all the posts. Accessible from within the $posts array.
// 	 *
// 	 * @param  integer $limit the number of posts
// 	 * @return array   $posts this holds all the posts

// 	public function getAllPosts($limit = 0)
// 	{
// 		if ($limit > 0) {

// 			// This will be used in the mySQL statement below
// 			$numposts = ' LIMIT ' . $limit;
// 		}

// 		$sql = 'SELECT pID, title, content, categoryID, date, uID
// 				FROM posts'/*
// 				LIMIT */ . $numposts;

// 		// perform query
// 		$results = $this->db->execute($sql);
// 		// d($results);

// 		while ($row = $results->fetchrow()) {

// 			$posts[] = $row;
// 		}

// 		return $posts;
// 	}

// 	public function totalEarned()
// 	{
// 		// die($pID);

// 		// $this->userObject = new User();

// 		// $user = $this->userObject->getUser($uID);

// 		// $this->set('uID', $user['uID']);
// 		// $this->set('first_name', $user['first_name']);
// 		// $this->set('last_name', $user['last_name']);
// 		// $this->set('email', $user['email']);
// 		// $this->set('password', $user['password']);
// 		// $this->set('task', 'update');

// 	}

// }


//