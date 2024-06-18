<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;
use App\Product_application_category;


class ProductApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $prodAppCat;

    public function __construct(Product_application_category $prodAppCat)
    {
    	$this->prodAppCat = $prodAppCat;

    }

    public function run()
    {


    	$prodAppCats = [
            ['product_category_id' => '3',
            'slug' => 'closed-restricted-access-barrier-system',
            'name' => 'Closed Restricted Access Barrier System',
            'details' => null,
            'image' => null,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['product_category_id' => '3',
            'slug' => 'containment-barrier-isolator',
            'name' => 'Containment Barrier Isolator',
            'details' => '
            <div class="content row">
                <div class="col-md-6">
                    <div class="m-t20 product-category-content" itemprop="description">
                        <p style="font-size: 1.2em; position: relative;"><em>Your Practical Solution to cGMP Compliance</em></p>

                        <p><strong>Containment Barrier Isolator (CBI)</strong> facilitates the isolation of a product or process while providing the required conditions for a sterile/ aseptic and hazardous environment. This full stainless-steel isolator provides a comprehensive range of personnel and product protection in addition to protection for the surrounding work areas and the environment.</p>

                        <p><strong>Standard Features of CBI</strong></p>

                        <ul>
                            <li>
                                <p>Full stainless-steel isolator with SS 304 exterior and fully welded SS 316L internal chambers with rounded coved corners</p>
                            </li>
                            <li>
                                <p>Pressure-tested Class 2 as per ISO 10648-2 standards</p>
                            </li>
                            <li>
                                <p>Esco HMI controller supervises all functions and monitors airflow and pressures in real-time</p>
                            </li>
                            <li>
                                <p>Safe change glove system allows the changing of gloves while maintaining aseptic conditions inside the chambers</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6" itemprop="image">
                    <img class="img-responsive img-ie" src="http://www.escoglobal.com/products/images/categories/containment-carrier-isolator-the-practical-banner-updated-new.jpg" alt="containment-carrier-isolator-the-practical-banner-updated-new.jpg" title="containment-carrier-isolator-the-practical-banner-updated-new.jpg">
                </div>

            </div>

            <section class="col col-lg-12 col-sm-12">
                <p><strong>MODELS</strong></p>
                <p style="text-align: center;"><strong>Guide to Models</strong></p>
                <p style="text-align: center;"><strong>CBI-___-___-___-___-__</strong></p>

                <div class="table-responsive">
                    <table class="Body-Cells _idGenTablePara-1 mb-3">
                        <tbody>
                            <tr style="" bgcolor="">
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>Isolator Unit</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>Model</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" style="" bgcolor=""><strong>Internal Width</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" style="" bgcolor=""><strong>No. of Gloves Ports</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>Voltage Code</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>Pressure</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>Airflow</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>NUMBER of PTC</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="1" style="" bgcolor=""><strong>Type of PTC</strong></td>
                                <td class="Body-Cells Header-Row CellOverride-36" colspan="2" style="" bgcolor=""><strong>Sharps Bin inside</strong></td>
                            </tr>
                            <tr style="" bgcolor="">
                                <td rowspan="5" style="" bgcolor="">Containment Barrier Isolator </td>
                                <td rowspan="5" style="font-weight: 400;" bgcolor="">CBI</td>
                                <td style="" bgcolor="">Unidirectional</td>
                                <td style="font-weight: 400;" bgcolor="">U</td>
                                <td style="" bgcolor="">1200mm</td>
                                <td style="font-weight: 400;" bgcolor="">2G</td>
                                <td rowspan="3" style="" bgcolor="">220-240 VAC, 50/60 Hz</td>
                                <td rowspan="3" style="font-weight: 400;" bgcolor="">8</td>
                                <td rowspan="3" style="" bgcolor="">Negative</td>
                                <td rowspan="3" style="font-weight: 400;" bgcolor="">N</td>
                                <td rowspan="3" style="" bgcolor="">Recirculating</td>
                                <td rowspan="3" style="font-weight: 400;" bgcolor="">R</td>
                                <td style="" bgcolor="">1 Left</td>
                                <td style="font-weight: 400;" bgcolor="">L</td>
                                <td rowspan="5" style="" bgcolor=""><span style="font-weight: 400;">PTC0 to PTC7</span> (see PTC legend)</td>
                                <td rowspan="3" style="" bgcolor="">with sharps container provision</td>
                                <td rowspan="3" style="font-weight: 400;" bgcolor="">S</td>
                            </tr>
                            <tr style="" bgcolor="">
                                <td style="" bgcolor="">Turbulent Static Seal</td>
                                <td style="font-weight: 400;    white-space: nowrap;" bgcolor="">T-SS</td>
                                <td rowspan="2" style="" bgcolor="">1600mm</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">3G</td>
                                <td rowspan="2" style="" bgcolor="">1 Right</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">R</td>
                            </tr>
                            <tr style="" bgcolor="">
                                <td style="" bgcolor="">Turbulent Inflatable Seal</td>
                                <td style="font-weight: 400;     white-space: nowrap;" bgcolor="">T-IS</td>
                            </tr>
                            <tr style="" bgcolor="">
                                <td style="" bgcolor="">Class III BSC</td>
                                <td style="font-weight: 400;" bgcolor="">3</td>
                                <td rowspan="2" style="" bgcolor="">1200mm</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">4G</td>
                                <td rowspan="2" style="" bgcolor="">110-120 VAC, 50/60 Hz</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">9</td>
                                <td rowspan="2" style="" bgcolor="">Positive</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">P</td>
                                <td rowspan="2" style="" bgcolor="">Single Pass/Total Exhaust</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">S</td>
                                <td style="" bgcolor="">Both Left and Right</td>
                                <td style="font-weight: 400;" bgcolor="">B</td>
                                <td rowspan="2" style="" bgcolor="">without sharps container provision</td>
                                <td rowspan="2" style="font-weight: 400;" bgcolor="">0</td>
                            </tr>
                            <tr style="" bgcolor="">
                                <td style="" bgcolor="">Hybrid (Convertible Class III to Class I)</td>
                                <td style="font-weight: 400;" bgcolor="">H</td>
                                <td style="" bgcolor="">No PTC</td>
                                <td style="font-weight: 400;" bgcolor="">0</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>


            ',
            'image' => 1,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['product_category_id' => '3',
            'slug' => 'general-processing-platform-isolator',
            'name' => 'General Processing Platform Isolator (GPPI)',
            'details' => null,
            'image' => null,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 0,
            'meta_keywords' => null,
            'meta_description' => null],

            ['product_category_id' => '3',
            'slug' => 'isoclean-healthcare-platform-isolator',
            'name' => 'Isoclean® Healthcare Platform Isolator (HPI)',
            'details' => null,
            'image' => null,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['product_category_id' => '3',
            'slug' => 'streamline-compounding-isolator',
            'name' => 'Streamline® Compounding Isolator',
            'details' => null,
            'image' => null,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],

            ['product_category_id' => '5',
            'slug' => 'radioisotope-fume-hood',
            'name' => 'Radioisotope Fume Hood',
            'details' => null,
            'image' => null,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],


            ['product_category_id' => '3',
            'slug' => 'filling-line-technology',
            'name' => 'Filling Line Technology',
            'details' => null,
            'image' => null,
            'img_small' => null,
            'banner_img' => null,
            'is_activated' => 1,
            'meta_keywords' => null,
            'meta_description' => null],


            ];


            foreach($prodAppCats as $prodAppCat){
                $get = $this->createProductAppCatData($prodAppCat);
                //	var_dump($get);
            }
    }

    public function createProductAppCatData($prodAppCat)
    {
    	$this->prodAppCat->create($prodAppCat);
    	return $this;
    }

}
