<?php defined('SYSPATH') or die('No direct script access.');

//tambahan statistik report
class Stats_Controller extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
	}
        
	public function repstat()
	{
		$test_ing = new View('main/repstatistik');
		//$this->template->content->test_ing = $test_ing;
  	}
	
}
// end-stat
?>
