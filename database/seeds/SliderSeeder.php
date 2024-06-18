<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $slider;


    public function __construct(Slider $slider)
    {
    	$this->slider = $slider;

    }

    public function run()
    {
    	$sliderDatas = [
            ['title' => '1978: WORLD CLASS & WORLDWIDE',
            'details' => 'Esco is Asia’s first in the field of internationally accredited clean air, containment, biocontainment, micro contamination control and isolation technologies.',
            'content' => '
                <h3 class="mb-3">1978: World Class, Worldwide</h3>
                <p>Esco is Asia’s first in the field of internationally accredited clean air, containment, biocontainment, micro contamination control and isolation technologies. With a diversified portfolio in over 110 countries, Esco has 7 global factories, 25 direct sales, marketing and services offices in over 40 locations with more than a thousand employees. High quality and innovative products are distributed in over 110 countries worldwide due to a vast network composed of distributors, dealers, and agents. Esco manufactures thousands of Life Science, Medical, and Healthcare tools per annum with its very own vertically integrated in-house fabrication and sheet metal manufacturing. The company only utilizes American/European grade stainless steel, cUL and/or CE components. Esco guarantees all clients that its products and services are manufactured and delivered under ISO 9001/14001, 13485, EU, and 510k-audited medical device factories.</p>
            ',
            'background' => 'world-class-word-wide-home-slide-min.jpg',
            'background_mobile' => 'world-class-world-wide-mobile-min.jpg',
            'sort' => '0',
            'is_activated' => 1],

            ['title' => 'ESCO PHARMA IS TRULY GLOBAL BUT LOCAL',
            'details' => 'Esco Pharma works with Esco Groups’ 25 direct sales/marketing and service offices as well as existing Esco distributors who are trained to provide local project & site management',
            'content' => '
                <h3 class="mb-3">Esco Pharma is Truly Global but Local</h3>
                <p>Esco Pharma supplements Esco Group’s 25 direct sales and service offices along with its extensive network of external distributors, dealers, and agents in over &gt; 110 countries; all of whom are trained to provide local project and site management in addition to after-market support. This helps guarantee Esco’s presence worldwide as well as ensure that the spare parts and equipment are well maintained in real-time for all clients.</p>
                <ul class="mt-3 image-list-style-ul-lg">
                    <li><p> Made in USA for America</p></li>
                    <li><p> Made in UK for Europe</p></li>
                    <li><p> Made in Indonesia, through Singapore, for Asia</p></li>
                </ul>
            ',
            'background' => 'escopharma-is-global-home-slider-min.jpg',
            'background_mobile' => 'esco-pharma-is-truly-global-but-local-mobile-min.jpg',
            'sort' => '1',
            'is_activated' => 1],


            ['title' => 'DISCOVERY TO DELIVERY',
            'details' => 'Esco Healthcare’s Esco Pharma division is in-charge of the customization and commercialization of all standard laboratory and pharmaceutical...',
            'content' => '
                <h3 class="mb-3">Discovery to Delivery</h3>
                <p>Esco Healthcare’s Esco Pharma division is in-charge of the customization and commercialization of all standard laboratory and pharmaceutical manufacturing equipment of the Esco Group of companies, to provide tailored-fit solutions for the individual clients’ needs.</p>
                <p>The three departments under Esco Healthcare, alongside the Esco Life Science tools, caters all the engineering control needs of each client; a translational discovery to delivery solution encompassing:</p>
                <ul class="mt-3 image-list-style-ul-lg">
                <li><p>R&amp;D</p></li>
                <li><p>Clinical Trials</p></li>
                <li><p>Quality Control (IPQC)</p></li>
                <li><p>Commercial Production</p></li>
                <li><p>Cell &amp; Gene Therapy</p></li>
                <li><p>Hospital / centralized pharmacy compounding (cytotoxic and antibiotic drug reconstitution, TPN &amp; IV compounding, hormone replacment therapy, etc)</p></li>
            </ul>
            <p>We continuously innovate our products to provide cutting-edge technology  and support biopharmaceutical companies in creating high quality yet cost-effective medications (vaccines, biosimilars/biobetters, and autologous &amp; allogeneic cell therapy).</p>
            ',
            'background' => 'discovery-to-delivery-home-slide-min.jpg',
            'background_mobile' => 'discovery-to-delivery-mobile-min.jpg',
            'sort' => '2',
            'is_activated' => 1],

            ['title' => 'GLOBAL FACTORY NETWORK',
            'details' => 'Innovative Esco Pharma technologies are made in the three main factories located in USA, UK, and Indonesia, through Singapore, with their own ISO 9001, 14001, and 1385 facilities.',
            'content' => '
                <h3 class="mb-3">Global Factory Network</h3>
                <p>Innovative Esco Pharma technologies are made in the three main factories located in USA, UK, and Indonesia, through Singapore, with their own ISO 9001, 14001, and 1385 facilities. </p>
                <p>We guarantee our global visibility for both site management and after-market support through our 25 direct sales/management and service offices along with our highly trained Esco distributors, dealers, and agents. </p>
            ',
            'background' => 'global-factory-network-home-slider-min.jpg',
            'background_mobile' => 'global-factory-network-min.jpg',
            'sort' => '3',
            'is_activated' => 1],

            ];


            foreach($sliderDatas as $sliderData){
                $get = $this->createProductCatData($sliderData);
                //	var_dump($get);
            }

    }

    public function createProductCatData($sliderData)
    {
    	$this->slider->create($sliderData);
    	return $this;
    }
}
