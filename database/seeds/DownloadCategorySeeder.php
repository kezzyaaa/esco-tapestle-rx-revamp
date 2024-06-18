<?php

use Illuminate\Database\Seeder;
use App\DownloadCategory;



class DownloadCategorySeeder extends Seeder
{
    protected $DownloadCategory;

    public function __construct(DownloadCategory $DownloadCategory)
    {
    	$this->DownloadCategory = $DownloadCategory;
    }

    public function run()
    {
		$DownloadCategories = [
		    [
                'title' => 'ESCO Pharma Profile',
                'sort' => '1',
                'is_activated' => '1',],
	        [
                'title' => 'Airflow Containment',
                'sort' => '2',
                'is_activated' => '1',],
            [
                'title' => 'Isolation Containment',
                'sort' => '3',
                'is_activated' => '1',],
            [
                'title' => 'Cross Contamination Facility Barrier',
                'sort' => '4',
                'is_activated' => '1',],
           ];



        foreach($DownloadCategories as $DownloadCategory){
        	$get = $this->createPage($DownloadCategory);
        	//	var_dump($get);
        }

    }
    public function createPage($DownloadCategory)
    {
    	$this->DownloadCategory->create($DownloadCategory);
    	return $this;
    }

}
