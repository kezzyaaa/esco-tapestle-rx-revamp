<?php

use Illuminate\Database\Seeder;
use App\PageCategory;


class PageCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $pageCat;


    public function __construct(PageCategory $pageCat)
    {
    	$this->pageCat = $pageCat;

    }

    public function run()
    {
    	$pageCatDatas = [
            ['slug' => 'about',
            'title' => 'About',
            'sidebar_title' => 'This is <span style="color: #00467F">Esco TapestleRx</span>',
            'is_activated' => 1],


            ['slug' => 'rabs',
            'title' => 'Rabs',
            'sidebar_title' => 'Restricted Access Barrier System (RABS)',
            'is_activated' => 1],

            ['slug' => 'formulation-and-filling-line',
            'title' => 'Formulation and Filling Line Isolators',
            'sidebar_title' => 'Filling Line Systems',
            'is_activated' => 1],

            ['slug' => 'services',
            'title' => 'Services',
            'sidebar_title' => 'Our <span class="teal-color">Services</span>',
            'is_activated' => 1],


            ['slug' => 'resource',
            'title' => 'Resource',
            'sidebar_title' => 'Resources',
            'is_activated' => 1],

            ['slug' => 'customer-service',
            'title' => 'Customer Service',
            'sidebar_title' => 'Customer Service',
            'is_activated' => 1],

            ['slug' => 'compounding-aseptic-isolator',
            'title' => 'Compounding Aseptic Isolator',
            'sidebar_title' => 'Compounding Aseptic Isolator',
            'is_activated' => 1],

            ];


            foreach($pageCatDatas as $pageCatData){
                $get = $this->createProductCatData($pageCatData);
                //	var_dump($get);
            }

    }

    public function createProductCatData($pageCatData)
    {
    	$this->pageCat->create($pageCatData);
    	return $this;
    }
}
