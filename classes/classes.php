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

	public function getFinalPrice($price) {
		return $price;
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

	public function getDiscount() {
		$tot = $this -> discount;

		if (($this->time_registered > 365) && ($this -> other_services == true) ) {
			$tot += 10;
		}
		return $tot;
	}


	public function getFinalPrice($price) {
		$finalPrice = $price - ($price * $this -> getDiscount() / 100);
		return $finalPrice;
	}
}

class product {
	public $id;
	public $title;
	public $price;
	public $stock;
	public $premium;
	public $img;

	public function __construct($id, $title, $price, $stock, $premium, $img) {
		$this -> id = $id;
		$this -> title = $title;
		$this -> price = $price;
		$this -> stock = $stock;
		$this -> premium = $premium;
		$this -> img = $img;
	}
}

class abbigliamento extends product {
	public $size;
	public $color;
	public $brand;

	public function __construct($id, $title, $price, $stock, $premium, $img, $size, $color, $brand) {
		parent::__construct($id, $title, $price, $stock, $premium, $img);
		$this -> size = $size;
		$this -> color = $color;
		$this -> brand = $brand;
	}
}

class tecnologia extends product {
	public $energy_consumption;
	public $smart_product;
	public $brand;

	public function __construct($id, $title, $price, $stock, $premium, $img, $energy_consumption, $smart_product, $brand) {
		parent::__construct($id, $title, $price, $stock, $premium, $img);
		$this -> energy_consumption = $energy_consumption;
		$this -> smart_product = $smart_product;
		$this -> brand = $brand;
	}
}
?>