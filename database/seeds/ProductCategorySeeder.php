<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $prodCat;


    public function __construct(ProductCategory $prodCat)
    {
    	$this->prodCat = $prodCat;

    }

    public function run()
    {
    	$prodCatDatas = [
            ['slug' => 'airflow-containment',
            'name' => 'Airflow Containment',
            'banner_img' => 'airflow-banner-min.jpg',
            'content' => 'Airflow containment technology ensures that operator and environment are protected from unintended exposure to hazardous substances. It also ensures product protection by providing an area with specified ISO Class 5 or Grade A environment.',
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['slug' => 'cross-contamination-facility-integrated-barrier',
            'name' => 'Cross-Contamination Facility Integrated Barrier',
            'banner_img' => 'CCBIF-banner-min.jpg',
            'content' => 'Cross-contamination facility integrated barrier (CCFIB) technology ensures that all matter entering and exiting the cleanroom are purged off of any contaminants; preventing events for cross-contamination.',
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['slug' => 'isolation-containment',
            'name' => 'Isolation Containment',
            'banner_img' => 'isolation-tech-banner-min.jpg',
            'content' => 'Isolation containment technology provides an isolated work zone via a pressure-tight enclosure to ensure absolute separation between the operator and the product/process. Isolators provide clean air to the workzone and enable ISO Class 5 as per ISO14644-1 (Grade A as per EU GMP) or better environment for aseptic/sterile processing.',
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['slug' => 'ventilation-containment',
            'name' => 'Ventilation Containment',
            'banner_img' => 'VBE-min.jpg',
            'content' => 'Ventilation containment technology ensures high level of operator protection, and facilitates stability and accuracy, when handling non-sterile hazardous substance(s) such as hazardous airborne powders.',
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['slug' => 'radiopharmacy',
            'name' => 'Radiopharmacy',
            'banner_img' => 'radiopharmacy-banner-min.png',
            'content' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ];


            foreach($prodCatDatas as $prodCatData){
                $get = $this->createProductCatData($prodCatData);
                //	var_dump($get);
            }

    }

    public function createProductCatData($prodCatData)
    {
    	$this->prodCat->create($prodCatData);
    	return $this;
    }



}
