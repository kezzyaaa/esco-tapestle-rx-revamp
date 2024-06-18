<?php

use Illuminate\Database\Seeder;
use App\NewsCategory;


class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $newsCategory;

    public function __construct(NewsCategory $newsCategory)
    {
    	$this->newsCategory = $newsCategory;
    }

    public function run()
    {
		$newsCategories = [
		    [
                'slug' => 'application-and-technology-news',
                'title' => 'Application and Technology News',
                'sort' => '1',
                'is_activated' => '1',],
            [
                'slug' => 'corporate-press-release',
                'title' => 'Corporate Press Release',
                'sort' => '2',
                'is_activated' => '1',],
            [
                'slug' => 'event-highlights',
                'title' => 'Event Highlights',
                'sort' => '3',
                'is_activated' => '1'],

           ];



        foreach($newsCategories as $newsCategory){
        	$get = $this->createPage($newsCategory);
        	//	var_dump($get);
        }

    }
    public function createPage($newsCategory)
    {
    	$this->newsCategory->create($newsCategory);
    	return $this;
    }

}
