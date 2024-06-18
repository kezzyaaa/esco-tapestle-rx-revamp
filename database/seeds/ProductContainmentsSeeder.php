<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ContainmentControl;




class ProductContainmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $containmentControl;



    public function __construct(ContainmentControl $containmentControl)
    {
    	$this->containmentControl = $containmentControl;

    }
    public function run()
    {

    	$containmentControls = [
    				   ['name' => 'Operator Protection',
    				   'description' => 'Containing hazardous particulates for the overall protection of operators',
    				   'content' => null,
    				   'img_large' => 'operator-protection.png',
                       'img_small' => 'operator-protection-small.png',
                       'lottie_file_large' => 'Human_Icon/Human.json',
    				   'meta_keywords' => null,
    				   'meta_description' => null,
    				   'is_activated' => '1'],

    				   ['name' => 'Product Protection',
    				   'description' => 'Preventing cross-contamination to promote product quality integrity.',
    				   'content' => null,
    				   'img_large' => 'production-protection.png',
                       'img_small' => 'production-protection-small.png',
                       'lottie_file_large' => 'Syrange_Icon/Syrange_Icon.json',
    				   'meta_keywords' => null,
    				   'meta_description' => null,
    				   'is_activated' => '1'],

    				   ['name' => 'Environmental Protection',
    				   'description' => 'Preventing industry-wide exposure against hazardous materials.',
    				   'content' => null,
    				   'img_large' => 'environment-protection.png',
                       'img_small' => 'environment-protection-small.png',
                       'lottie_file_large' => 'Tree_Icon/Tree_Icon.json',
    				   'meta_keywords' => null,
    				   'meta_description' => null,
    				   'is_activated' => '1'],

    				   ['name' => 'Clean Air',
    				   'description' => 'Provides ISO classified air quality for the aseptic manufacturing of sterile products.',
    				   'content' => null,
    				   'img_large' => 'clean-air.png',
                       'img_small' => 'clean-air-small.png',
                       'lottie_file_large' => 'Wind_Icon/wind_icon.json',
    				   'meta_keywords' => null,
    				   'meta_description' => null,
    				   'is_activated' => '1'],


    	               ];



        foreach($containmentControls as $containmentControl){
        	$get = $this->createContainmentControlData($containmentControl);
        	//	var_dump($get);
        }



        // $myproducts = Product::all();
        // foreach ($myproducts as $myproduct) {
	    //     $myproduct->containmentControl()->sync([
	    //     	1 => [
	    //     		'is_activated' => rand(0, 1)
	    //     	],
	    //     	2 => [
	    //     		'is_activated' => rand(0, 1)
	    //     	],
	    //     	3 => [
	    //     		'is_activated' => rand(0, 1)
	    //     	],
	    //     	4 => [
	    //     		'is_activated' => rand(0, 1)
	    //     	],
	    //     ]);
        // }

        // CEILING LAMINAR AIRFLOW​
        $myproductspec = Product::find(1)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 0
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

        // CYTOCULTURE™ CYTOTOXIC SAFETY CABINET
        $myproductspec = Product::find(2)->containmentControl()->sync([
            1 => [
                'is_activated' => 1
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);


       // Pharmacon™ DOWNFLOW BOOTH
       $myproductspec = Product::find(3)->containmentControl()->sync([
            1 => [
                'is_activated' => 1
            ],
            2 => [
                'is_activated' => 0
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

       // LAMINAR FLOW HORIZONTAL/VERTICAL TROLLEY
       $myproductspec = Product::find(4)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 0
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);


        // LAMINAR FLOW STRADDLE UNITS
        $myproductspec = Product::find(5)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 0
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

        // BioPass™ Pass Through
        $myproductspec = Product::find(6)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

        // Cleanroom Air Showers
        $myproductspec = Product::find(7)->containmentControl()->sync([
            1 => [
                'is_activated' => 1
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

        // DYNAMIC PASS BOX / DYNAMIC FLOOR LABEL HATCHES (DPB/DFLH)
        $myproductspec = Product::find(8)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);


        // Infinity® Esco Air Shower Pass Box
        $myproductspec = Product::find(9)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

        // Infinity® Esco Air Shower Pass Box
        $myproductspec = Product::find(10)->containmentControl()->sync([
            1 => [
                'is_activated' => 1
            ],
            2 => [
                'is_activated' => 0
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],

        ]);
        // Infinity® Esco Air Shower Pass Box
        $myproductspec = Product::find(11)->containmentControl()->sync([
            1 => [
                'is_activated' => 0
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 1
            ],
        ]);

       // Infinity® Pass Boxes / Transfer Hatches
       $myproductspec = Product::find(13)->containmentControl()->sync([
        1 => [
            'is_activated' => 0
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],
    ]);


       // Infinity® Cleanroom Transfer Hatch
       $myproductspec = Product::find(14)->containmentControl()->sync([
        1 => [
            'is_activated' => 0
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],
    ]);



       // Infinity® Cleanroom Transfer Hatch
       $myproductspec = Product::find(15)->containmentControl()->sync([
        1 => [
            'is_activated' => 0
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],
    ]);

       // Esco Glassware Hoods
       $myproductspec = Product::find(12)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 0
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 0
        ],

    ]);

       // Advanced Processing Platform Isolator (APPI)
       $myproductspec = Product::find(16)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // Aseptic Containment Isolator (ACTI)
       $myproductspec = Product::find(17)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // Aseptic Containment Isolator (ACTI)
       $myproductspec = Product::find(17)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // CradlePRO™ Iso Cell Processing Isolator (CPI)
       $myproductspec = Product::find(19)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // Streamline® Closed Restricted Access Barrier System (SC-RABS)
       $myproductspec = Product::find(20)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // Isoclean® Healthcare Platform Isolator - Without Filter Below Workzone
       $myproductspec = Product::find(21)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);
       // Isoclean® Healthcare Platform Isolator - With Filter Below Workzone
       $myproductspec = Product::find(22)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);
       // General Processing Platform Isolator - Static Seals (GPPI-SS)
       $myproductspec = Product::find(23)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // General Processing Platform Isolator - Inflatable Seals (GPPI-IS)
       $myproductspec = Product::find(34)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

       // Containment Barrier Isolator (CBI) – Undirectional
       $myproductspec = Product::find(30)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);


        // Containment Barrier Isolator – Turbulent (CBI-T)
        $myproductspec = Product::find(31)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

        // Containment Barrier Isolator - III (CBI-III)
        $myproductspec = Product::find(32)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);
        // Containment Barrier Isolators - H (CBI-H)
        $myproductspec = Product::find(33)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Streamline® Compounding Isolator – Class III
    $myproductspec = Product::find(25)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);
    // TFAI™ Turbulent Flow Aseptic Isolator (TFAI)
    $myproductspec = Product::find(28)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Weighing and Dispensing Containment Isolator (WDCI)
    $myproductspec = Product::find(26)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 0
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // TFAI™ Ventilated Balance Enclosure (VBE)
    $myproductspec = Product::find(29)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 0
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 0
        ],

    ]);

    // Open Restricted Access Barrier System
    $myproductspec = Product::find(24)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);


    // Open Restricted Access Barrier System
    $myproductspec = Product::find(24)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Blood Cell Labeling Isolators
    $myproductspec = Product::find(18)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Technetium Dispensing Isolators
    $myproductspec = Product::find(27)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Isoclean® Healthcare Platform Isolator-Inflatable Seals (HPI-IS)
    $myproductspec = Product::find(35)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Isoclean® Healthcare Platform Isolator-G3-K (HPI-G3-K)
    $myproductspec = Product::find(36)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);


        // BioBooth™
        $myproductspec = Product::find(37)->containmentControl()->sync([
            1 => [
                'is_activated' => 1
            ],
            2 => [
                'is_activated' => 1
            ],
            3 => [
                'is_activated' => 1
            ],
            4 => [
                'is_activated' => 0
            ],
    ]);
    // Streamline® Compounding Isolator
    $myproductspec = Product::find(38)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // GMP-compliant Radioisotope Dispensing Isolator
    $myproductspec = Product::find(39)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Cytoculture® Lead-Shielded Class II Biosafety Cabinet
    $myproductspec = Product::find(40)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // Radiopharmacy Hood (Lead Shielded Biological Safety Cabinet)
    $myproductspec = Product::find(41)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);


    // Frontier® Radioisotope™
    $myproductspec = Product::find(42)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 0
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 0
        ],

    ]);

    // Filling Line Isolator
    $myproductspec = Product::find(43)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

    // General Processing Platform Isolator (GPPI)
    $myproductspec = Product::find(45)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);


    // Isoclean® Healthcare Platform Isolator – Inflatable Seal – BioVap™ (HPI-IS-BVP)
    $myproductspec = Product::find(46)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],
    ]);

    // Evidence Drying Cabinet
    $myproductspec = Product::find(47)->containmentControl()->sync([
        1 => [
            'is_activated' => 1
        ],
        2 => [
            'is_activated' => 1
        ],
        3 => [
            'is_activated' => 1
        ],
        4 => [
            'is_activated' => 1
        ],

    ]);

     var_dump('success');
    }


    public function createContainmentControlData($containmentControl)
    {
    	$this->containmentControl->create($containmentControl);
    	return $this;
    }

    //  public function createProductData($prodCatData)
    // {
    // 	 $productData = ['code' => null, 'product_category_id' => , 'product_application_category_id', 'slug', 'brand', 'name', 'details', 'image', 'image_thumb',
				// 		'features', 'options', 'specifications', '	banner_img', 'models', 'video', 'is_activated', 'meta_keywords', 'meta_description'];

    // 	$this->product->create($prodData);
    // 	return $this;
    // }
}
