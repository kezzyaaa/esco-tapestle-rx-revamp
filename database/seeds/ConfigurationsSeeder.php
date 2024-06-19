<?php

use Illuminate\Database\Seeder;
use App\Configurations;


class ConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $Configurations;

    public function __construct(Configurations $Configurations)
    {
    	$this->Configurations = $Configurations;
    }

    public function run()
    {
		$Configurations = [
		    [
                'domain' => 'escotapestlerx.com',
                'language' => 'en',
                'meta_title' => 'EscoTaPestlrx | Home',
                'meta_description' => 'Esco Pharma is a leading manufacturer of containment and isolation systems with a global footprint spanning US, Europe and Asia.',
                'meta_keywords' => 'Aseptic Filling Line Isolator, Active Open Restricted Access Barrier System, Open Restricted Access Barrier System, RABS, oRABS, open RABS, closed RABS, closed Restricted Access Barrier System, cRABS, Aseptic Processing on Pharmaceutical Dosage Forms, Aseptic Process Validation, Aseptic Isolators, Aseptic Pharmaceutical Manufacturing, Potent Filling Line Isolator, Potent Formulation, General Processing Platform Isolator, Aseptic Containment Isolator',
                'meta_author' => 'Esco Micro Pte Ltd',
                'meta_copyright' => 'Esco Healthcare',
                'geo_region' => 'SG',
                'geo_position' => '1.337317;103.971028',
                'geo_placename' => 'Singapore',
                'analytics' => ' <!-- Global site tag (gtag.js) - Google Analytics -->
                <!--     <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
                    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/A1Aard-wURuGsXRGA7JMOqVO/recaptcha__en.js"></script>
                    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-143252473-1"></script> -->',

            ],
        ];



        foreach($Configurations as $Configurations){
        	$get = $this->createPage($Configurations);
        	//	var_dump($get);
        }

    }
    public function createPage($Configurations)
    {
    	$this->Configurations->create($Configurations);
    	return $this;
    }

}
