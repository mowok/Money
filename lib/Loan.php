<?php
class Loan extends \atk4\data\Model {
	public $table = 'loan';
	
	function init() {
		parent::init();
		
		//$this->addField('type');
		$this->addField('amount');
		$this->addField('date');
		$this->addField('friends_id');
	}
}
?>