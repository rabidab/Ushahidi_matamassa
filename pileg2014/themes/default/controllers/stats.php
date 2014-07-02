<?php
//tambahan statistik report
class Stats_Controller extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
	}
        
	public function index()
	{
		//$this->template->content = new View('main/repstatistik');
		//$this->template->content->title = Kohana::lang('ui_admin.statistics');

		// Javascript Header
		$this->themes->protochart_enabled = TRUE;
		$this->themes->js = new View('main/layout');

		$this->template->content->failure = '';

		// Set the date range (how many days in the past from today?)
		$range = 10000;
		if (isset($_GET['range']))
		{
			$range = $this->input->xss_clean($_GET['range']);
			$range = (intval($range) > 0)? intval($range) : 10000;
		}

		$this->template->content->range = $range;
      
		// Get an arbitrary date range
		$dp1 = (isset($_GET['dp1'])) ? $_GET['dp1'] : null;
		$dp2 = (isset($_GET['dp2'])) ? $_GET['dp2'] : null;

		// Report Data
		$data = Stats_Model::get_report_stats(false,false,$range,$dp1,$dp2);

		$reports_chart = new protochart;

		// This makes the chart a delicious pie chart
		$options = array(
			'pies'=>array('show'=>'true')
		);

		// Grab category data
		$cats = Category_Model::categories();

		$this->template->content->category_data = $cats;

		$report_data = array();
		$colors = array();
		$reports_per_cat = array();
		
		foreach ($data['category_counts'] as $category_id => $count)
		{
			// Verify if the array key $category_id exists before attempting to fetch
			if (array_key_exists($category_id, $cats))
			{
				$category_name = $cats[$category_id]['category_title'];
				$report_data[$category_name] = $count;
            
				$colors[$category_name] = (isset($cats[$category_id]['category_color']))
					? $cats[$category_id]['category_color']
					: 'FFFFFF';

				foreach ($count as $c)
				{             
					// Count up the total number of reports per category
					if ( ! isset($reports_per_cat[$category_id]))
					{
                        $reports_per_cat[$category_id] = 0;
                    }

					$reports_per_cat[$category_id] += $c;
				}
			}
		}
		asort($reports_per_cat, SORT_NUMERIC);
		$reports_per_cat = array_reverse($reports_per_cat, TRUE);
		
		$this->template->content->num_categories = $data['total_categories'];
		$this->template->content->reports_per_cat = $reports_per_cat;

		$this->template->content->reports_chart = $reports_chart->chart('reports',$report_data,$options,$colors,350,350);

		$this->template->content->verified = 0;
		$this->template->content->unverified = 0;
		$this->template->content->approved = 0;
		$this->template->content->unapproved = 0;

		$report_status_chart = new protochart;
		$report_staus_data = array();
        
        foreach ($data['verified_counts'] as $ver_or_un => $arr)
        {
            if ( ! isset($report_staus_data[$ver_or_un][0]))
            {
                $report_staus_data[$ver_or_un][0] = 0;
            }
                
            if ( ! isset($this->template->content->$ver_or_un))
            {
                $this->template->content->$ver_or_un = 0;
            }
            
            foreach($arr as $count)
            {
                $report_staus_data[$ver_or_un][0] += $count;
                $this->template->content->$ver_or_un += $count;
            }
        }
        
        $colors = array('verified'=>'0E7800','unverified'=>'FFCF00');
        $this->template->content->report_status_chart_ver = $report_status_chart->chart('report_status_ver',$report_staus_data,$options,$colors,150,150);
        
        $report_staus_data = array();
        
		foreach ($data['approved_counts'] as $app_or_un => $arr)
		{
            if ( ! isset($report_staus_data[$app_or_un][0]))
            {
                $report_staus_data[$app_or_un][0] = 0;
            }
            
            if ( ! isset($this->template->content->$app_or_un))
            {
                $this->template->content->$app_or_un = 0;
            }
            
            foreach($arr as $count)
            {
                $report_staus_data[$app_or_un][0] += $count;
                $this->template->content->$app_or_un += $count;
            }
        }
        
        $this->template->content->num_reports = $data['total_reports'];
        
        $colors = array('approved'=>'0E7800','unapproved'=>'FFCF00');
        $this->template->content->report_status_chart_app = $report_status_chart->chart('report_status_app',$report_staus_data,$options,$colors,150,150);
        
        // Set the date
        $this->template->content->dp1 = date('Y-m-d',$data['earliest_report_time']);
        $this->template->content->dp2 = date('Y-m-d',$data['latest_report_time']);
    }
	
}
// end-stat
?>