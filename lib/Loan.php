<?php
class Loan extends \atk4\data\Model {
	public $table = 'loan';
	
	function init() {
		parent::init();
		
		$this->addField('active');
		$this->addField('amount');
		$this->addField('date');
		$this->addField('contact_id');
		$this->hasOne('friends');
	}
}
?>