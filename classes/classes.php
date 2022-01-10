<?php
class user {
	public $user_name;
	public $new_user;
	public $premium;

	public function __construct($user_name, $new_user = false, $premium = false) {
		$this -> user_name = $user_name;
		$this -> new_user = $new_user;
		$this -> premium = $premium;
	}

	public function getPremium() {
		return $this -> premium;
	}

	public function getNewUser() {
		return $this -> new_user;
	}
}

class premium extends user {
	public $discount;
	public $other_services;
	public $time_registered;

	public function __construct($user_name, $new_user = false, $premium = true, $discount, $other_services, $time_registered) {
		parent::__construct($user_name, $new_user = false, $premium = true);
		$this -> discount = $discount;
		$this -> other_services = $other_services;
		$this -> time_registered = $time_registered;
	}
}

?>