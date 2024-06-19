<?php

use Illuminate\Database\Seeder;
use App\News;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $news;

    public function __construct(News $news)
    {
    	$this->news = $news;
    }

    public function run()
    {
		$news = [

            ['news_category_id' => '1',
            'old_id' => '192',
            'slug' => 'esco-laminar-flow-trolleys-aseptic-transport-of-sterile-aseptic-materials',
            'title' => 'Esco Laminar Flow Trolleys: Aseptic Transport of Sterile / Aseptic Materials',
            'author' => 'Esco Healthcare',
            'description' => 'Esco Laminar Flow Horizontal Trolley/ Laminar Flow Vertical Trolley (LFHT/LFVT) are mobile transport carts or trolleys providing ISO Class 5 clean air (as per ISO 14644-1). These laminar flow trolleys utilize a unidirectional airflow to eliminate contamination during the transfer of sterile/aseptic materials.',
            'banner_img' => 'flow-trolleys-banner-min.jpg',
            'banner_thumb' => 'flow-trolleys-banner-thumb-min.jpg',
            'content' => '



            <p>Esco <a class="pharma-link" href="/products/laminar-flow-horizontal-vertical-trolley/4">Laminar Flow Horizontal Trolley/ Laminar Flow Vertical Trolley (LFHT/LFVT)</a> are mobile transport carts or trolleys providing ISO Class 5 clean air (as per ISO 14644-1). These laminar flow trolleys utilize a unidirectional airflow to eliminate contamination during the transfer of sterile/aseptic materials.</p>
            <br>

            <p><strong>A Back-to-Back Gain (Aseptic or Protective)</strong></p>
            <p>The Esco Laminar Flow Trolleys can be customized to provide the following:</p>
            <ul class="image-list-style-ul-lg mb-3">
                <li>
                    <p><strong>Aseptic processing </strong></p>
                    <ul style="list-style: none !important; padding-left: 0px;" class="pharma-ul">
                        <li>Aseptic zone for sterile products or materials equipped with either single pass or recirculatory airflow.</li>
                    </ul>
                    <ul style="list-style: none !important; padding-left: 0px;" class="pharma-ul">
                        <li>When dealing with non-hazardous sterile/aseptic materials, the internal chamber is maintained under a positive pressure mode with respect to its surrounding environment. Since air moves from a gradient of high pressure to low pressure area, potential contaminants are directed away from the trolley&lsquo;s aseptic zone. This allows protection of the critical products or materials inside the unit.</li>
                    </ul>
                </li>
                <li>
                    <p><strong>Protective solution </strong></p>
                    <ul style="list-style: none !important; padding-left: 0px;" class="pharma-ul">
                        <li>Operator or environmental protection with recirculatory airflow.</li>
                    </ul>
                    <ul style="list-style: none !important; padding-left: 0px;" class="pharma-ul">
                        <li>When dealing with potential non-volatile hazardous substances, the internal chamber is maintained under a negative pressure mode with respect to its surrounding environment. This feature helps provide containment and prevents the potentially contaminated air from leaking out of the unit. </li>
                    </ul>
                </li>
            </ul>
            <br>

            <p><strong>Key COVID-19 Relevance</strong></p>
            <p>During the time of COVID-19 pandemic, <a class="pharma-link" href="/products/laminar-flow-horizontal-vertical-trolley/4">Esco Laminar Flow Trolley</a>s can be used to provide the following applications/solutions:</p>


            <ul class="image-list-style-ul-lg">
                <li>
                    <p><strong>Cleanroom Integrity Augmented </strong></p>

                    <p>From an outbreak which emerged last Dec. 2019 from Wuhan, China, and up-scaling
                        into the pandemic that it is today, researchers from all over the world are
                        progressively finding solutions to eradicate COVID-19. With hopes of putting
                        an end to this, call for <a class="pharma-link" href="https://escovaccixcell.com/news/the-race-for-the-SARS-CoV-2-vaccine">vaccine development</a> has been a priority
                         since vaccination can help in training the body&rsquo;s immune system to fighting this
                          disease; therefore, prevent it from spreading on further. Up to now, no vaccines
                          have been approved for public use, but still researchers are continually developing
                          and assessing vaccine candidates.
                    </p>

                    <p>In line with the vaccine development, and the manufacturing, processing,
                        and packaging of drugs, compliance to international and state regulations
                         is required to ensure that these products are maintained to be safe, pure
                          and effective once they are released to the market.
                    </p>

                    <p>Current Good Manufacturing Practice (cGMP) is a regulation that is enforced
                         by the Food and Drug Administration (FDA). This formal system of controls,
                          when adequately put into practice, helps in preventing instances of contamination,
                           mix-ups, deviations, failures, and errors, and ensures that drug products
                            meet their quality standards.
                    </p>

                    <div class="mb-1">
                            <img src="/images/upload/mobile-laminar-flow-trolley-cart-min.png" alt="Esco Mobile Laminar Flow Vertical Trolley, Motorised Version (Single Pass Type)" title="Esco Mobile Laminar Flow Vertical Trolley, Motorised Version (Single Pass Type)" class="img-responsive center-block mt-3">
                            <p class="text-center mt-2"><small class="mt-2"><strong>Figure 1</strong>. <em>Esco Mobile Laminar Flow Vertical Trolley, Motorised Version (Single Pass Type)</em></small></p>
                    </div>
                    <br>

                    <p>
                        With compliance to cGMP guidelines, <a class="pharma-link" href="/products/laminar-flow-horizontal-vertical-trolley/4">Esco Laminar Flow Trolleys</a> can help enhance cleanroom integrity maintenance during vaccine development by facilitating smooth, safe, and aseptic equipment and material transport across facilities.
                    </p>

                    <p>These units provide transfer in cGMP facilities from differing unit operations to reduce cross contamination risks.  They are also applicable for institutions unable to upgrade their cleanroom facilities to comply to cGMP standards.  </p>
                    <br>
                </li>
                <li>
                    <p><strong>Biohazard Containment (Protective Solution)</strong></p>
                    <p>In light of developing vaccines and along with other research studies which can aid in stopping the spread of SARS-CoV-2, the virus causing this disease is isolated and propagated through cell culturing to make it available for research by the scientific and medical community.</p>

                    <p>As listed out by the Centers for Disease Control and Prevention (CDC), some areas of COVID-19 research that the public and academic institutions may study with the SARS-CoV-2 strains include:</p>

                    <ul class="image-list-style-ul-lg">
                        <li><p>Antiviral research which includes research aimed at testing the ability of existing or experimental antiviral medications to treat or prevent infection with SARS-CoV-2.</p></li>
                        <li><p>Pathogenesis research which includes research to determine the various ways the virus can be transmitted to a host, the severity of illness it causes in a host, how much virus is produced in the body, and what organs the virus can spread to within the body.</p></li>
                        <li><p>Virus stability research which indicates how long the virus can survive under certain conditions (e.g., how long the virus can survive and remain infectious on surfaces, and at what temperatures can it survive).</p></li>
                    </ul>

                    <p>CDC recommends virus isolation in cell culture, and initial characterization of viral agents recovered in cultures of SARS-CoV-2 to be conducted in a Biosafety Level 3 (BSL-3) laboratory using BSL-3 practices. </p>
                    <p>On the other hand, routine diagnostic testing of specimens which is also an essential factor in preventing spread of COVID-19 can be handled in a BSL-2 laboratory using standard precautions.</p>
                    <p>In dealing with biohazardous or potentially hazardous (non-volatile) substances, specifically when handling and/or processing of COVID-19-related specimens, the <a class="pharma-link" href="/products/laminar-flow-horizontal-vertical-trolley/4">Esco Laminar Flow Trolleys</a> can work in providing operator and environment protection by containing the potentially contaminated air within the unit.</p>

                    <br>
                </li>
            </ul>


            <p><strong>How the Esco Laminar Flow Trolleys Work</strong></p>

            <div class="row mb-3">
                <div class="col-sm-12">
                    <img src="/images/upload/airflow-diagram-min.jpg" alt="Airflow Diagram of Esco Laminar Flow Trolleys" title="Airflow Diagram of Esco Laminar Flow Trolleys" class="img-responsive center-block mt-3">
                    <p class="text-center mt-2"><small class="mt-2"><strong>Figure 2</strong>. <em>Airflow Diagram of Esco Laminar Flow Trolleys</em></small></p>
                </div>
            </div>
            <br>

            <p>
                The <a class="pharma-link" href="/products/laminar-flow-horizontal-vertical-trolley/4">Esco Laminar Flow Trolley</a> functions by drawing in ambient air from the room, and passing it via a G4 prefilter before it enters the perforated diffuser into the supply plenum. This airflow passes through a baffle system prior to gel seal HEPA filtration, creating a low decibel aseptic zone for operator comfort.
            </p>

            <p>In a single pass airflow type, a hundred percent (100%) of the potentially contaminated air which passes through the aseptic zone will be exhausted out of the trolley.</p>
            <p>While in a recirculatory airflow type, the potentially contaminated air will be recirculated back for HEPA filtration before being supplied back to the aseptic zone.</p>

            <br>

            <p class="mt-3"><strong>Common applications:</strong></p>

            <ul class="image-list-style-ul-lg">
                <li><p>Temporary storage of critical materials or products</p></li>
                <li><p>Transfer in facility requiring aseptic work zones</p></li>
                <li><p>Transfer of materials from cleanroom to a cleanroom, through a non-cleanroom area</p></li>
                <li><p>Transfer of bulk drug products</p></li>
                <li><p>Transfer of process skids or feed hoppers</p></li>
                <li><p>Transfer of autoclaved substances</p></li>
                <li><p>Transfer of lyophilized vials to and from freeze dryers</p></li>
                <li><p>Transfer of Grade A to Grade A products </p></li>
                <li>
                    <p>Transfer of materials within cGMP facilities</p>
                    <ul>
                        <li>also applicable for institutions unable to upgrade their cleanroom facilities to comply to cGMP standards; and</li>
                        <li>upgrading facilities from clinical to commercial sites while preventing production losses due to long turnover when building new cGMP sites.</li>

                    </ul>
                </li>
            </ul>

            <br>

            <p class="mt-3"><strong>Key Design and Build Features:</strong></p>

            <ul class="image-list-style-ul-lg">
                <li><p>Easy-to-clean design with welded construction</p></li>
                <li><p>10 mm tempered glass doors with plastic latches</p></li>
                <li><p>Food-grade, FDA-approved pressure tight seal</p></li>
                <li><p>Corrosion-resistant stainless steel hinges</p></li>
                <li><p>HEPA/ULPA knife edge gel-sealed design better than conventional gasket sealed</p></li>
                <li><p>Great load-bearing capacity Polyurethane (PU) wheels </p></li>
                <li><p>Sentinel&lsquo; Gold microprocessor controller with audio/visual alarms for downflow velocity</p></li>
                <li><p>Magnehelic differential pressure gauges for monitoring filter lifespan</p></li>
                <li><p>UPS Battery for onboard power when not connected to main building supply</p></li>
                <li><p>Emergency stop</p></li>
            </ul>

            <br>

            <p class="mt-3"><strong>Available Options and Configurations:</strong></p>

            <div class="mb-1">
                <img src="/images/upload/Customized-Esco-Laminar-Flow-Trolley-min.png" alt="Customized Esco Laminar Flow Trolley" title="Customized Esco Laminar Flow Trolley" class="img-responsive center-block mt-3">
                <p class="text-center mt-2"><small class="mt-2"><strong>Figure 3</strong>. <em>Customized Esco Laminar Flow Trolley</em></small></p>
            </div>
            <br>
            <ul class="image-list-style-ul-lg">
                <li><p>Height adjustable stands</p></li>
                <li><p>Electromagnetic interlocking doors</p></li>
                <li><p>Perforated shelves</p></li>
                <li><p>Splashproof electrical outlets</p></li>
                <li><p>PVC Curtains</p></li>
                <li><p>Selection of material of construction between Electrogalvanized steel exterior with Isocide&lsquo; antimicrobial coating or Full SS 304 exterior and interior.</p></li>
            </ul>

            <br>
            <div>
                <p class="mt-3"><strong>Other Products Available from Esco&lsquo;s Equipment Range under Airflow Containment</strong></p>
                <img src="/images/upload/Airflow-Group-Photo-min.png" alt="Other Products Available from Esco‘s Equipment Range under Airflow Containment" title="Other Products Available from Esco‘s Equipment Range under Airflow Containment" class="img-responsive center-block mt-3">
                <p>&nbsp;</p>
            </div>

            <p>One of Esco Pharma&lsquo;s core technologies, the Airflow Containment, specializes in HEPA/ULPA-filtered cleanroom construction for use in critical environments requiring aseptic techniques to protect products, operators and processes.</p>
            <p>Equipment from Esco&lsquo;s product line is employed by numerous institutions worldwide for their aseptic processing needs.</p>
            <p>Visit our <a class="pharma-link" href="http://www.escopharma.com/">website</a> to learn more about how Esco can help you reduce capital and long-term costs, increase efficiency, and achieve only the most stringent levels of contamination control performance.</p>

            <br>
            <p>Check out Esco Pharma&lsquo;s innovative core technologies at <a class="pharma-link" href="http://www.escopharma.com/"> www.escopharma.com</a>.</p>
            <br>
            <center>
                <a class="pharma-link" href="/pdf/brochures/brochures_LFHT-LFVT-Sellsheet.pdf" target="_blank"
                style=" padding:10px; background: #a4cc83 ; color: #fff !important;"
                class="btn-primary mt-4">Downloadable Brochure</a>
            </center>
            <br>

            <div class="text-left">
                <p><strong>References:</strong></p>
                <p class="break-word"><small>1. Centers for Disease Control and Prevention (2020). SARS-CoV-2 Viral Culturing at CDC. Retrieved from: <a href="https://www.cdc.gov/coronavirus/2019-ncov/lab/grows-virus-cell-culture.html">https://www.cdc.gov/coronavirus/2019-ncov/lab/grows-virus-cell-culture.html</a></small></p>
                <p class="break-word"><small>2. International Society for Pharmaceutical Engineering. (n.d.). What is GMP. Retrieved from: <a href="https://ispe.org/initiatives/regulatory-resources/gmp/what-is-gmp">https://ispe.org/initiatives/regulatory-resources/gmp/what-is-gmp</a></small></p>
                <p class="break-word"><small>3. U.S Food and Drug Administration (2018). Facts About The Good Current Manufactiring Practices (CGMPs). Retrieved from <a href="https://www.fda.gov/drugs/pharmaceutical-quality-resources/facts-about-current-good-manufacturing-practices-cgmps#:~:text=CGMPs%20provide%20for%20systems%20that,medications%20adequately%20control%20manufacturing%20operations">https://www.fda.gov/drugs/pharmaceutical-quality-resources/facts-about-current-good-manufacturing-practices-cgmps#:~:text=CGMPs%20provide%20for%20systems%20that,medications%20adequately%20control%20manufacturing%20operations</a>.</small></p>
            </div>

            <br>
            <p><strong>About Esco Pharma</strong></p>

            <p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
            <p>Esco Pharma&lsquo;s largest global network of localized application specialists and service offices in 42 locations and growing provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
            <p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, ATMP, cell therapy, gene therapy, biologics/vaccines and cosmeceuticals to comply with international standards for occupations health and safety.</p>
                <br><br>


            ',
            'is_activated' => '1',
            'is_shareable' => '1',
            'meta_keywords' => 'Laminar Flow Trolleys, Mobile Transport Carts, cGMP, Cleanroom, Aseptic Processing, COVID19, Aseptic transfer, Sterile transport, Material transfer',
            'meta_description' => 'Find out more about the aseptic transport of sterile/aseptic materials in a cleanroom setting. Use Esco Laminar Flow Trolleys for better cGMP compliance.',
            'created_at' => '2020-09-18 00:00:00'],


            ['news_category_id' => '1',
            'old_id' => '191',
            'slug' => 'integrable-and-dependable-esco-airstream-fan-filter-units',
            'title' => 'Integrable and Dependable: Esco Airstream® Fan Filter Units',
            'author' => 'Esco Healthcare',
            'description' => 'Esco Airstream® Fan Filter Unit is a leading-edge fan filter unit (FFU) designed to provide HEPA/ULPA-filtered laminar airflow over a specific area. The FFU draws in ambient air from the top of the module, and exhausts clean filtered air vertically in a unidirectional (laminar) air stream toward its base.',
            'banner_img' => 'integrable-and-dependable-esco-airstream-fan-filter-units-banner-new-min.jpg',
            'banner_thumb' => 'integrable-and-dependable-esco-airstream-fan-filter-units-banner-new-thumb-min.jpg',
            'content' => '


                 <p><strong>The ABC&rsquo;s of Esco Airstream® Fan Filter Units (FFUs)</strong></p>


                 <p>Esco <strong>Airstream®</strong> Fan Filter Unit is a leading-edge fan filter unit (FFU) designed to provide HEPA/ULPA-filtered laminar airflow over a specific area. The FFU draws in ambient air from the top of the module, and exhausts clean filtered air vertically in a unidirectional (laminar) air stream toward its base.</p>
                 <br>

                 <p><strong>Key Relevance of Esco Airstream® FFU During the COVID-19 Pandemic</strong></p>
                <ul class="image-list-style-ul-lg">
                    <li>
                        <p><strong>Esco Airstream® FFU and Its Protective Edge</strong></p>
                        <p>Taking advantage of its laminar airflow technology, the Esco <strong>Airstream®</strong> FFU can be used and be placed on top of registration, reception, cashier and check-in/-out counters. The Esco <strong>Airstream®</strong> FFU serves as a protective barrier, acting in a similar way as air curtains during over-the-counter transactions (e.g. between employee-customer or healthcare personnel-patient). This minimizes risk for cross-contamination during interactions which could often lead to transmission of the infection. </p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/images/upload/ffu-placed-over-the-hospital-patient-registration-counters-min.jpg" class="img-fluid mt-3">
                                <p class="text-center mt-2"><small class="mt-2"><strong>Figure 1</strong>. <em>FFU placed over the hospital patient registration counters</em></small></p>
                            </div>
                            <div class="col-md-6">
                                <img src="/images/upload/ffu-placed-over-pharmacy-counters-min.jpg" class="img-fluid mt-3">
                                <p class="text-center mt-2"><small class="mt-2"><strong>Figure 2</strong>. <em>FFU placed over pharmacy counters</em></small></p>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <img src="/images/upload/ffu-placed-over-the-grocery-counter-installed-either-by-attaching-it-on-the-ceiling-min.jpg" class="img-fluid mt-3">
                            </div>
                            <div class="col-md-6">
                                <img src="/images/upload/ffu-placed-over-the-grocery-counter-installed-either-by-attaching-it-on-counter-top-min.jpg" class="img-fluid mt-3">
                            </div>
                            <div class="col-12">
                                <p class="text-center mt-2"><small class="mt-2"><strong>Figure 3</strong>. <em>FFU placed over the grocery counter. Installed either by attaching it on the ceiling (left) or by directly integrating it with the countertop (right).</em></small></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-md-2 col-md-8">
                                <img src="/images/upload/ffu-placed-over-the-airport-check-in-counters-min.jpg" class="img-fluid mt-3">
                                <p class="text-center mt-2"><small class="mt-2"><strong>Figure 4</strong>. <em>FFU placed over the airport check-in counters</em></small></p>
                            </div>
                        </div>
                        <p>&nbsp;</p>

                    </li>
                    <li>
                        <p><strong>Esco Airstream® Portable FFUs: Taking Ordinary Wards Further</strong></p>
                        <p>Esco also offers rapidly deployable Self-Assembly Kit, one of its products under the <a href="http://www.escoaster.com/covid-19-products/airborne-infection-isolation-room-aiir-technology/#content">Esco Aster Airborne Infection Isolation Room (AIIR) Technology</a>, which comes with portable fan filter box(es) with UV-C kill box and other components that can be used to convert pre-existing wards or rooms into an improvised negatively pressured one. </p>
                        <img src="/images/upload/isolation-room-mobile-ffu-isometric-wm-new-min.jpg" class="img-fluid mt-3">
                        <p class="text-center mt-2"><small class="mt-2"><strong>Figure 5</strong>. <em>Pre-existing hospital wards converted into negative pressure isolation wards using the self-assembly kit.</em></small></p>
                        <p>&nbsp;</p>
                        <p>This helps maintain the recommended differential pressure value and facilitate the required air changes in between the ambient environment and the controlled room. Furthermore, it aids in the reduction of healthcare-associated infections (HAIs) and allows better throughput within hospital departments, leading to an increase in both patient and hospital outcomes.</p>
                        <img src="/images/upload/isolation-room-section-airflow-wm.jpg" class="img-fluid mt-3">
                        <p class="text-center mt-2"><small class="mt-2"><strong>Figure 6</strong>. <em>Airflow diagram with labeled components of the self-assembly kit installed in a pre-existing room. </em></small></p>
                        <p>&nbsp;</p>

                    </li>

                </ul>
                <p><strong>Versatility in its Functions and Junctions</strong></p>
                <p>FFUs are commonly used in the construction of ISO Class 3 to 8 cleanrooms (as per ISO 14644-1 standards). It provides high airflow volumes at greater efficiency levels and delivers high performance levels whether used in the construction of cleanrooms or clean air devices. The Esco <strong>Airstream®</strong> FFUs are available in a wide range of construction sizes and options, and operates at low noise and power consumption levels. </p>
                <p class="mt-3"><strong>Common applications include:</strong></p>
                <ul class="image-list-style-ul-lg">
                    <li><p>Construction of conventional cleanrooms</p></li>
                    <li><p>Conversion of normal wards into isolation rooms</p></li>
                    <li>
                        <p>Integration and installation in areas, equipment and devices such as the following:</p>
                        <ul>
                            <li><p>Modular hard and soft wall cleanrooms</p></li>
                            <li><p>Makeshift medical centres and hospitals</p></li>
                            <li><p>Isolation testing mobile tents and retrofit isolation rooms</p></li>
                            <li><p>Registration, reception, cashier and checkout counters</p></li>
                            <li><p>Laminar flow cabinets, containment carts and other clean air devices</p></li>
                            <li><p>Pharmacies, grocery stalls, and other areas which call for a controlled room environment</p></li>
                            <p>&nbsp;</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/upload/soft-capsule-soft-wall-cleanroom-with-watermark-min.png" class="img-fluid mt-3">
                                </div>
                                <div class="col-md-6">
                                    <img src="/images/upload/ceiling-laminar-airflow-with-watermark-min.png" class="img-fluid mt-3">
                                </div>
                                <div class="col-md-12">
                                    <p class="mt-2"><small class="mt-2"><strong>Figure 7</strong>. <em>The Soft Capsule® Soft Wall Cleanroom and the Ceiling Laminar Airflow are examples of Esco innovative solutions using FFUs to create a modular cleanroom wherever necessary.</em></small></p>
                                </div>
                            </div>

                        </ul>
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p><strong>Different Versions of Esco Airstream® FFU:</strong></p>
                <ul class="image-list-style-ul-lg">
                    <li>
                        <p><strong>Version 1: Integral Blower + Filter Casing</strong></p>
                        <p>Unit can be suspended from the ceiling which provides a better overall appearance since entire unit is in one-piece.</p>
                    </li>
                    <li>
                        <p><strong>Version 2: Separate Blower + Housing Module and Filter</strong></p>
                        <p>Unit cannot be suspended from the ceiling but is an affordable alternative to version 1, suitable when the unit is to be mounted on the cleanroom ceiling.</p>
                    </li>
                    <li>
                        <p><strong>Version 3: Room Side Replaceable Everything (RSRE)</strong></p>
                        <p>Unit utilizes a gel-sealed filter and allows all components such as filter and blower to be changed and replaced from within the room.</p>
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p><strong>Esco Airstream® Fan Filter Unit vs. Other FFUs</strong></p>
                <p>With a leveraged experience of more than 40 years in cleanroom design and construction, Esco has developed an FFU that simply performs better at a lower cost. Even the company&rsquo;s in-house research and development facilities include an acoustically-insulated HEPA-filtered test environment chamber, where the Airstream® FFU design is optimized for low noise level and energy efficiency.</p>

                <p>Esco&rsquo;s manufacturing capabilities range from complete computerized sheet metal design, to fabrication and assembly; a vertically-integrated approach which ensures that quality can be controlled in every step of the way. To ensure performance and quality, only materials from leading suppliers are used. Furthermore, all incoming raw materials are thoroughly inspected via a statistical sampling method.</p>


                <p>&nbsp;</p>
                <p><strong>The following are the quality control measures done at the factory prior to shipment:</strong></p>
                <ul class="image-list-style-ul-lg">
                    <li><p>Functional tests and visual inspections</p></li>
                    <li><p>Electrical safety analysis tests</p></li>
                    <li><p>Air velocity tests</p></li>
                </ul>
                <p>Unlike others, Esco is one of the few manufacturers of FFUs with core expertise in the design of other high performance clean air and containment equipment through its other business divisions.</p>
                <p>&nbsp;</p>
                <p><strong>Other Products Available from Esco&rsquo;s Equipment Range under Cross-Contamination Facility Integrated Barriers (CCFIB)</strong></p>
                <img src="/images/upload/CCFIB-group-photo-min.png" class="img-fluid mt-3">
                <p>&nbsp;</p>
                <p>One of Esco Pharma&rsquo;s core technologies, the Cross-Contamination Facility Integrated Barrier (CCFIB), specializes in HEPA-filtered cleanroom construction components for use in critical environments to protect products and processes from microbiological-contamination.</p>
                <p>Esco&rsquo;s product line is employed internationally by many of the world&rsquo;s most reputable cleanroom engineering firms in turnkey cleanroom construction projects.</p>
                <p>Learn more about how Esco can help you reduce capital and long-term costs, increase efficiency, and achieve only the most stringent levels of contamination control performance.</p>
                <ul class="image-list-style-ul-lg">
                    <li><p>Backed by Esco&rsquo;s unparalleled experience of more than 40 years in critical environments and cleanrooms; not only in clean air
                        device manufacturing but also turnkey projects.</p></li>
                    <li><p>Lowest initial capital investment and life cycle costs; coupled with technical innovation recognized the world over.</p></li>
                    <li><p>Compliance with the latest international standards for clean air, critical environments and electrical safety.</p></li>
                    <li><p>Fully-integrated and mechanized manufacturing processes in Esco&rsquo;s sheet metal processing centre utilizing only raw materials of the highest quality and the latest industrial production techniques.</p></li>
                    <li><p>Competitive lead times.</p></li>
                </ul>
                <p>&nbsp;</p>

                <p>Check out Esco Pharma&rsquo;s innovative core technologies at <a href="/"> www.escopharma.com</a>.</p>
                <center><a href="/pdf/brochures/Esco-Airstream-Fan-Filter-Units_Brochure_A4_vA_webPDF-new.pdf" target="_blank" class="pharma-btn mt-4">Downloadable Brochure <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></center>
                <p>&nbsp;</p>




            ',
            'is_activated' => '1',
            'is_shareable' => '1',
            'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Esco Healthcare, Esco Airstream® Fan Filter Units, Esco Airstream® Portable FFUs, Airstream®',
            'meta_description' => 'Esco Airstream® Fan Filter Unit is a leading-edge fan filter unit (FFU) designed to provide HEPA/ULPA-filtered laminar airflow over a specific area. The FFU draws in ambient air from the top of the module, and exhausts clean filtered air vertically in a unidirectional (laminar) air stream toward its base.',
            'created_at' => '2020-06-11 00:00:00'],


           ['news_category_id' => '2',
           'old_id' => '188',
		   'slug' => 'covid-19-response-a-letter-to-our-customers',
           'title' => 'COVID-19 Response: A letter to our customers',
           'author' => 'Esco Healthcare',
           'description' => 'The COVID-19 pandemic has been dominating global headlines in recent times. It is indeed worrying for everyone, and it is uncertain how the situation will pan out in the coming months. Nonetheless, Esco would like to assure all our customers that we are with you in these trying times. We have your back.',
		   'banner_img' => 'Covid-19-response-article-min.jpg',
		   'banner_thumb' => 'Covid-19-response-article-thumb-min.jpg',
           'content' => '
                <p>
                <br>
                <b>COVID-19 Response</b></p>

                <p><b>A letter to our customers</b></p>

                <p>&nbsp;</p>

                <p>The COVID-19 pandemic has been dominating global headlines in recent times. It is indeed worrying for everyone, and it is uncertain how the situation will pan out in the coming months. Nonetheless, Esco would like to assure all our customers that we are with you in these trying times. We have your back.</p>

                <p>We have taken the all-hands-on-deck approach in dealing with this global health situation. To continue to provide our best support to you, we have begun executing our business continuity plans in all our global offices. It is important to note that Esco is not experiencing disruptions in operations and supply of our products and services at this point of time.</p>

                <p><b>Our business continuity plan includes:</b></p>

                <p><b>Response Team:</b> Our global offices have set up a response team that keeps up to date on the COVID-19 situation and helps to disseminate the latest news to all our staff. The response team also helps ensure that the business continuity plans are being executed. There is regular communication amongst the different team. This regular communication ensures the global offices are aligned as we continue to support you.</p>

                <p><b>Staff Health &amp; Safety:</b> As the well-being of our staff is our utmost priority, we monitor the health and condition of our staff and take their temperature twice daily. Work areas are disinfected on a regular basis, and hand sanitizers are made available in all departments. Posters are put up to constantly remind staff to practice good hygiene. As our staff population remains healthy, we will continue to operate, manufacture, and provide our services to you with minimal disruptions.</p>

                <p><b>Working Remotely:</b> Our customer service support teams are well-equipped to work remotely if and when needed to take your orders and provide assistance to your queries. Our systems are also configured that the operations can continue when working remotely is required. In other words, should our premises stop operating, our staff won’t.</p>

                <p><b>Supply Chain &amp; Logistics:</b> Our operations are supported by a number of strategic suppliers and logistics companies. We are in contact with them to ensure that they can maintain acceptable service levels while implementing their own business continuity measures. With this, we can keep any supply chain related delays of your orders to the very minimum.</p>

                <p>Esco has an important role in the global healthcare system. We invent, discover and commercialize enabling technologies that will help make human lives healthier and safer globally. With more countries in various forms of lockdown globally, Esco is committed to serving our clients for biosafety, biosecurity, biocontainment, diagnostics, therapeutics and vaccine self-sufficiency. Our biological safety cabinets, real time PCR with PCR cabinets are certified to all international standards. These are used to protect operators, scientists and lab technicians, many of whom are working in diagnostics, therapeutics and vaccine translational development. Our bioreactors and fermenters as well as filling line isolators are used for therapeutics and vaccine drug substance and drug product development and manufacturing.</p>

                <p>We will continue to place high importance in executing our business continuity plans, and yet at the same time, be sensitive enough to adjust according to latest developments and guidelines from relevant governing bodies.</p>

                <p>Should you have feedback or questions with regards to our business continuity plans, please contact your local customer support team. Be assured that we are with you in these trying times.</p>

                <p><b>We have your back.</b></p>


                <div class="col-md-6 offset-md-6 text-right signature">
                <p><br>
                <br>
                <b>XiangQian (XQ) Lin<br>
                CEO and President - Esco Group of Companies</b></p>
                </div>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, COVID-19, A letter to our customers, XQ Lin',
           'meta_description' => 'The COVID-19 pandemic has been dominating global headlines in recent times. It is indeed worrying for everyone, and it is uncertain how the situation will pan out in the coming months. Nonetheless, Esco would like to assure all our customers that we are with you in these trying times. We have your back.',
           'created_at' => '2020-03-23 00:00:00'],

           ['news_category_id' => '1',
           'old_id' => '187',
		   'slug' => 'robust-and-modular-esco-gb-ships-vbe-to-a-major-company-in-ireland',
           'title' => 'Robust and Modular; Esco GB ships VBE to a Major Company in Ireland',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'robust-and-modular-esco-gb-ships-vbe-to-a-major-company-in-ireland-min.jpg',
           'banner_thumb' => 'robust-and-modular-esco-gb-ships-vbe-to-a-major-company-in-ireland-thumb-min.jpg',
           'description' => 'Esco GB Ltd recently customized a 4ft Ventilated Barrier Enclosure (VBE) unit to suit the process needs of a major international company in Ireland.',
           'content' => '
           <h4 class="text-center" style="">Ventilated Balance Enclosure (VBE): Key Features</h4>

           <p style="text-align: center; margin-top: 30px;"><img class="img-responsive img-ie" src="/images/upload/Ventilated-Balance-Enclosure-(VBE)-Key-Features2-min.jpg"></p>

           <p>&nbsp;</p>
           <h4 class="text-center" style="">Ventilated Balance Enclosure (VBE): Key Features</h4>



           <p style="margin-top: 30px; text-align: center;"><img class="img-responsive img-ie" src="/images/upload/Ventilated-Balance-Enclosure-(VBE)-Models-1-min.jpg"></p>
           <p style="text-align: center;"><img class="img-responsive img-ie" src="/images/upload/Ventilated-Balance-Enclosure-(VBE)-Models-2-min.jpg"></p>

           <h4 class="text-center mt-4">The Project</h4>

           </h4>

           <div class="paddle-bottom">&nbsp;</div>

           <p class="text-justify">Esco GB Ltd recently engineered a 4ft Ventilated Barrier Enclosure (VBE) unit for an international company in Ireland. </p>

           <p class="text-justify">Customizations were necessary as the unit was intended as the base for the company&lsquo;s process equipment.</p>

           <h4 class="text-center mt-4">Client Requirements</h4>

           <div class="paddle-bottom">&nbsp;</div>

           <p class="text-justify">The client&lsquo;s current process involves the use of a spectrophotometer to measure the light absorption rate of their liquid products. Although not inherently hazardous, in the event of accidental spills, these liquid substances can dry into powder form and cause adverse health effects to the operators.</p>

           <p class="text-justify">As such, the company calls for equipment that will protect operators from spillages and guarantee their safety.</p>

           <p class="text-justify">Esco manufactured and customized a VBE unit to address this safety concern.</p>
           <p class="text-justify">The main chamber of the VBE is designed to house the spectrophotometer and its computer system; the latter is located at the base of the main chamber.</p>
           <p class="text-justify">A monitor was also added outside the VBE unit via a strong arm. </p>


           <h4 class="text-center mt-4">Design Solution</h4>

           <div class="paddle-bottom">&nbsp;</div>

           <p class="text-justify">The VBE was configured to house a spectrophotometer. This type of technology comes with a number of cables connecting it to the other parts of the system so the VBE has been equipped with cable ports and trunking for a clean overall look.</p>

           <p class="text-justify">Electrical sockets were also installed in the unit&lsquo;s main chamber and base cabinet to accommodate additional process devices i.e. the instrument&lsquo;s computer. An adjustable shelf was added in the cabinet to support the current computer and to provide flexibility for future changes. To guarantee the protection of all devices inside this base cabinet, a door was also installed.</p>

           <p class="text-justify">The main chamber&lsquo;s work top has a hollow-dip, designed to allow easy cleaning and containment of accidental spills.</p>
           <p class="text-justify">Moreover, this unit comes with a hydraulic height-adjustable stand so users can achieve ergonomic comfort during operation. </p>
           <p class="text-justify">The unit&lsquo;s final customization involved attaching a mounting plate and a swing arm, supplied by the client, on the VBE to support an external monitor. </p>
           <p class="text-justify">All necessary specifications (i.e. weight) of the arm and plate were considered to guarantee that all design calculations meet high quality standards in line with all Esco equipment. </p>
           <p class="text-justify">Below is a labelled diagram of the unit.</p>
           <p class="text-justify">For more information please visit <a href="http://escopharma.com/" style="font-weight: bold; color:#a4cc83 !important;">www.escopharma.com</a></p>


           <p><a href="/products/ventilated-balance-enclosure/29"><img class="img-responsive img-ie" src="http://www.escoglobal.com/images/upload/VBE-4A8-03DB-C_Front withEquip LR-min.jpg"></a></p>





           <p class="text-center" style="margin-top: 30px; "><a class="btn-primary" href="http://www.escoglobal.com/products/download/Jan 2020 VBE_Pharma WriteUp.pdf" rel="noopener noreferrer" style=" padding:10px; background: #a4cc83 ; color: #fff !important;" target="_blank">Download PDF file </a></p>


           <style type="text/css">ul.check_li {
                 list-style: none;
                 padding: 0 0 0 24px;
                 line-height: 26px;
               }
               ul.check_li li{
                 list-style: none;
               }
               ul.check_li li.check_li_1 p {
                   line-height: 22px !important;
               }

               ul.check_li li.check_li_1:before {
                   font-weight: bold;
                   content: "\2713";
                   float: left;
                   margin-left: -24px
               }
               img.secondary-image{
                   position: relative;
                   left: 50%;
                   transform: translateX(-50%);
               }
               .article-video{
                   width: 70% !important;
                   margin: auto !important;
               }

               .paddle-bottom{
                   position: relative;
                   height: 2px;
                   width: 36px;
                   background: #a4cc83;
                   margin: auto;
                   top: -2px;
                   margin-bottom:1em;
               }

               .product-images-set{
                    display: flex;
                    align-items: flex-end !important;
               }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   /*width: 100% !important;*/
               }
               .article-video{
                   width: 100% !important;
               }
               .product-images-set{
                    display: block;
               }
           }
           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Esco GB, Major Company in Ireland, Ventilated Balance Enclosure (VBE)',
           'meta_description' => 'Esco GB Ltd recently customized a 4ft Ventilated Barrier Enclosure (VBE) unit to suit the process needs of a major international company in Ireland.',
            'created_at' => '2020-01-27 10:03:26'],


           ['news_category_id' => '1',
           'old_id' => '186',
		   'slug' => 'cell-therapy-grade-a-isolator-enabling-better-biotherapeutics-manufacturing',
           'title' => 'Cell Therapy Grade A Isolator: Enabling Better Biotherapeutics Manufacturing',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'cell-therapy-grade-a-IsolatorEnabling-better-biotherapeutics-manufacturing-min.jpg',
           'banner_thumb' => 'cell-therapy-grade-a-IsolatorEnabling-better-biotherapeutics-manufacturing-thumb-min.jpg',
           'description' => 'A Swiss biologics contract development and manufacturing organization (CDMO) chose Esco Isoclean® Healthcare Platform Isolator – Inflatable Seal Model (HPI-IS) as the unit to be customized to meet it’s process requirements.',
           'content' => '
                <p class="text-justify">A Swiss biologics contract development and manufacturing organization (CDMO) chose <strong>Esco Isoclean<sup>®</sup> Healthcare Platform Isolator – Inflatable Seal Model</strong> (HPI-IS) as the unit to be customized to meet it’s process requirements. </p>

                <p class="text-justify">The HPI-IS facilitates a closed, continuous Grade A environment suitable for the handling of advanced therapy medicinal products (ATMPs). ATMPs are medicines based on cells, genes, or tissue engineering. These are different from conventional medicines but require the same test and control procedures for batch production. </p>

                <p class="text-justify">The HPI-IS comes with an auto pressure hold test capability and is integrated with an Esco BioVap™ biodecontamination system; ensuring efficiency of the decontamination process. Viable and non-viable particle counters will also be installed per chamber for continuous monitoring of the environment. The client has requested the integration of a centrifuge to facilitate their ATMP handling. Lastly, the HPI-IS will have integrated laminar flow cabinets for processes that require a Grade A airflow, but not a closed environment. </p>

                <p class="text-justify">In this project, Esco designed the HPI-IS to allow full ATMP handling and the filling process. </p>
                <p class="text-justify">With this advanced and innovative equipment solution, Esco enables companies to achieve the biotherapeutics of tomorrow. </p>

                <p class="text-justify">For more information please visit <a href="/" style="color: #99b5cc;"><strong>www.escopharma.com.</strong></a> </p>

                <p class="text-center"><a href="http://www.escoglobal.com/products/download/2020 January - HPI-Custom (Eso Pharma and Esco Global).pdf" class="btn pharma-btn" target="_blank" rel="noopener noreferrer" style="padding:10px; background-color:#99b5cc;border:none !important; color: #fff;">Download PDF File</a></p>


                <style type="text/css">
                    img.secondary-image{
                        width: 85% !important;
                    }
                    .article-video{
                        width: 85% !important;
                        margin: auto !important;
                    }

                    .news-divider{
                        margin-top: 50px;
                        margin-bottom: 37px;
                        height: 8px;
                        background: #0A406B;
                    }

                /* Extra small devices (phones, 600px and down) */
                @media only screen and (max-width: 1024px) {
                    img.secondary-image{
                        width: 100% !important;
                    }
                    .article-video{
                        width: 100% !important;
                    }

                }

                /* Extra small devices (phones, 600px and down) */
                @media only screen and (max-width: 600px) {
                    img.secondary-image{
                        width: 100% !important;
                    }
                    .article-video{
                        width: 100% !important;
                    }

                }

                </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, COVID-19, A letter to our customers, XQ Lin',
           'meta_description' => 'A Swiss biologics contract development and manufacturing organization (CDMO) chose Esco Isoclean® Healthcare Platform Isolator – Inflatable Seal Model (HPI-IS) as the unit to be customized to meet it’s process requirements.',
            'created_at' => '2020-01-24 10:03:26'],


           ['news_category_id' => '1',
           'old_id' => '185',
		   'slug' => 'esco-launches-new-streamline-compounding-isolator-in-the-global-market',
           'title' => 'Esco launches new Streamline® Compounding Isolator in the Global Market',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'esco-launches-new-streamline-compounding-isolator-in-the-global-market.jpg',
           'banner_thumb' => 'esco-launches-new-streamline-compounding-isolator-in-the-global-market-thumb.jpg',
           'description' => 'In line with the revised USP and Pharmaceutical Inspection Co-operation Scheme (PIC/S) guidelines, Esco opens the decade with its upgraded Streamline® Compounding Isolator (SCI) to continuously promote optimum patient health.',
           'content' => '
            <p class="text-justify">In line with the revised United States Pharmacopeia General Chapter &lt;797&gt; guideline together with the Pharmaceutical Inspection Co-operation Scheme (PIC/S), Esco proudly opens the decade with its upgraded Streamline<sup>®</sup> Compounding Isolator (SCI). </p>

            <p class="text-justify">This compounding aseptic/sterile containment isolator (CACI) is designed in compliance with international cGMP standards and classified under Class 3 Leak Tight Containment as per ISO 10648-2. </p>

            <p class="text-justify">SCI provides an aseptic/sterile environment for pharmaceutical preparations; it can be configured to operate in a recirculating or total exhaust air flow scheme and in a positive or negative pressure. Positive pressure is for sterile non-hazardous materials while negative pressure is for containment of sterile hazardous substances. </p>

            <p class="text-justify">The latter is further classified into two, the purposes of which are: </p>

            <ul style="padding-left: 35px;">
                <li>
                    N<sub>1</sub>: factory-configured to provide a more negative pressured pass-through chamber (PTC) in accordance with the CETA guideline for testing compounding isolators.
                </li>
                <li>
                    N<sub>2</sub>: factory-configured to provide a more negative work chamber than the PTC for powder handling applications.
                </li>
            </ul>

            <p class="text-justify">Overall, the SCI provides user, product, environment, and cross-contamination protection from exposure to hazards.   </p>
            <p class="text-justify">The unit’s standard configurations make it suitable for various applications such as: potent formulation, aseptic/sterile compounding, chemotherapy, total parenteral nutrition (TPN) formulation, contained powder handling, and bioprocessing applications including autologous cell therapy, allogeneic cell therapy, gene-cell therapy, ATMP isolators, oncolytic viruses, virotherapy, peptides, vaccines and tissue engineering, among others.  </p>


            <p><strong>Renaming previous SCI to SLC-RABS </strong></p>
            <p class="text-justify">USP &lt;797&gt; provides two equipment classifications for compounding aseptic/sterile isolator (CAI): restricted access barrier system (RABS) and isolators.</p>
            <p class="text-justify">An isolator is defined as an ISO Class 5 enclosure equipped with the following:  </p>

            <ul style="padding-left: 35px;">
                <li>
                    Rapid transfer port/s or other types of decontaminated, high-integrity interface for material transfer into and out of the isolator
                </li>
                <li>
                    Automated sporicidal decontamination system
                </li>
                <li>
                    Significant overpressure relative to the surrounding environment
                </li>
            </ul>

            <img class="img-responsive secondary-image mt-3" src="/images/upload/the-different-models-of-esco-s-streamline.jpg">
            <p style="margin-top: 15px; font-size:1em !important;" class="text-center"><strong>Figure 1.</strong> The different models of Esco’s Streamline<sup>®</sup> Compounding Isolator (SCI) <br> <em>L to R: Total exhaust (electrogalvanized steel) and recirculating airflow units (stainless and EG ISOCIDE<sup>™</sup> powder coated steel)</em></p>


            <p class="text-justify">If a device will not meet any of the above criteria, it will then be classified as a RABS. USP &lt;797&gt; and PIC/S define it as an ISO Class 5 enclosure providing a physical separation from the compounding area via glove ports. Standards further mention that unlike an isolator, RABS can only be decontaminated manually since it did not undergo pressure hold testing; as such its material transfer chamber might also not provide the same level of protection as an isolator.</p>

            <p class="text-justify">With these, Esco would like to take this moment to announce that starting this year, all previous Streamline<sup>®</sup> Compounding Isolators quoted in 2019 that have not been purchased, will be renamed to Streamline<sup>®</sup> Closed Restricted Access Barrier System (SLC-RABS). Units that have been purchased but fabricated and not shipped will not be renamed.  </p>

            <p class="text-justify">Esco is highly driven to provide innovative and advanced equipment solutions for clients worldwide; as such, all paradigm shifts in the healthcare sector are closely monitored by a team of experts. This is a guarantee that the primary engineering controls (PEC) delivered to each client is of high quality and complies with all necessary field standards to promote optimum patient health. </p>

            <p class="text-justify">Rest assured that quality and functionality of previous units are still world class and are designed according to the standards at the time of manufacture.  </p>


            <p><strong>Attention to all users of the SLC-RABS! </strong></p>
            <p class="text-justify">For users of the 2015, or earlier model of the SLC-RABS, you now have the chance to avail an Esco discount when you upgrade your equipment to the new SCI unit. Hurry as this offer is open only to the first 10 availing clients! </p>
            <p class="text-justify">Start the new decade with the promise of efficiency and customer delight!  </p>


            <p><strong>Esco Pharma’s Turnkey Solutions </strong></p>
            <p class="text-justify">All equipment designs under the four core technologies of Esco Pharma meet the requirements of international regulating bodies. This ensures that quality is built in every engineering control being catered, thus, integrating excellence from the very beginning of pharmaceutical manufacture. </p>
            <p class="text-justify">Our highly experienced team of service engineers conduct the necessary qualification tests during in-situ installation of each device, the parameters of which are based on established regulations. </p>
            <p class="text-justify">Preventive maintenance (PM) services are also provided to prevent mechanical issues and to keep the systems optimized. Unlike other companies, Esco has highly trained engineers deployed worldwide for the comfort and security of the clients. </p>
            <p class="text-justify">With Esco, clients purchase top-notch solutions along with process efficiency. </p>
            <p class="text-justify">Checkout our range of products and contact the <a href="/contact-us.php"><strong style="color:rgb(164, 204, 131) !important;">Esco office</strong></a> near you, today! </p>



            <p style="margin-top: 35px; font-size: 1.1em !important;"><strong>References: </strong></p>
            <ol style="list-style: decimal; padding-left: 35px;">
                <li>
                    Pharmaceutical Inspection Co-operation Scheme.(2018). Guide to Good Manufacturing Practice for Medicinal Products Annexes. Retrieved on 20-January-2020. Retrieved from: <a href="https://www.picscheme.org/layout/document.php?id=1408">https://www.picscheme.org/layout/document.php?id=1408</a
                </li>
                <li>
                    United States Pharmacopeia General Chapter &lt;797&gt;. (2019). Pharmaceutical Compounding - Sterile Preparations. Retrieved on 9-January-2020. Retrieved from: <a href="https://www.usp.org/compounding/general-chapter-797">https://www.usp.org/compounding/general-chapter-797</a>
                </li>
            </ol>





            <p style="margin-top: 35px; font-size: 1.1em !important;"><strong>About our BRANDS  </strong></p>
            <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare. </p>


            <p style="margin-top: 35px; font-size: 1.1em !important;"><strong>About Esco Pharma  </strong></p>
            <p class="text-justify">Esco Pharma’s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles. </p>
            <p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, ATMP, cell therapy, gene therapy, biologics/vaccines and cosmeceuticals to comply with international standards for occupations health and safety. </p>




            <p class="text-center" style="margin-top: 30px; "><a target="_blank" rel="noopener noreferrer" class="btn-primary" style=" padding:10px 20px; background-color:rgb(164, 204, 131) !important ;" href="/pdf/brochures/brochures_SCI%20Brochure_A4_vE_HR.pdf">Streamline<sup>®</sup> Compounding Isolator Catalogue </a></p>



            <style type="text/css">

                ul.check_li {
                    list-style: none;
                    padding: 0 0 0 24px;
                    line-height: 26px;
                }
                ul.check_li li{
                    list-style: none;
                }
                ul.check_li li.check_li_1 p {
                    line-height: 22px !important;
                }

                ul.check_li li.check_li_1:before {
                    font-weight: bold;
                    content: "\2713";
                    float: left;
                    margin-left: -24px
                }
                img.secondary-image{
                    position: relative;
                    left: 50%;
                    transform: translateX(-50%);
                }
                .article-video{
                    width: 70% !important;
                    margin: auto !important;
                }

                .paddle-bottom{
                    position: relative;
                    height: 3px;
                    width: 36px;
                    background: rgb(164, 204, 131);
                    margin: auto;
                    top: -2px;
                }

                .product-images-set{
                        display: flex;
                        align-items: flex-end !important;
                }

            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                img.secondary-image{
                    /*width: 100% !important;*/
                }
                .article-video{
                    width: 100% !important;
                }
                .product-images-set{
                        display: block;
                }
            }

            </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Streamline® Compounding Isolator',
           'meta_description' => 'In line with the revised USP and Pharmaceutical Inspection Co-operation Scheme (PIC/S) guidelines, Esco opens the decade with its upgraded Streamline® Compounding Isolator (SCI) to continuously promote optimum patient health.',
            'created_at' => '2020-01-23 10:03:26'],

           ['news_category_id' => '1',
           'old_id' => '184',
		   'slug' => 'integration-made-easy-with-esco-s-robotic-filling-line-isolator',
           'title' => 'Integration Made Easy with Esco’s Robotic Filling Line Isolator',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'integration-made-easy-with-esco-robotic-filling-line-isolator-min.jpg',
           'banner_thumb' => 'integration-made-easy-with-esco-robotic-filling-line-isolator-thumb-min.jpg',
           'description' => 'Esco’s highly flexible filling line isolators are the prime solution for the aseptic production of novel pharmaceuticals as they are customizable to suit the individual clients’ needs; this project proves just that.',
           'content' => '
           <h4 class="text-center" style="">Introduction</h4>
           <div class="paddle-bottom"></div>

           <p class="text-justify">The demand for filling line containment isolation technology continuously increases along with the market growth for aseptic cell therapy and injectables.</p>

           <p class="text-justify">Filling line isolators have a wide range of application and serves as a turnkey solution for numerous manufacturing schemes.</p>

           <p class="text-justify">Part of the technological advancement in the industry today is providing aseptic containment technology for current processes, and there are projects involving the complex assembly of an isolator technology to house the client’s existing machinery. Other cases though, require the construction of a structure that would support the isolator system with the filling line components.</p>

           <p class="text-justify">Sterility, containment, and customization are important parameters in the advancing industry, and Esco’sflexibility in filling line isolator design is the prime solution for a fully integrated client system as it allows easy incorporation of third party equipment.</p>

           <h4 class="text-center mt-4">
           The Project
           </h4>
           <div class="paddle-bottom"></div>

           <p class="text-justify">Esco engineered a robotic filling line isolator for the safe and accurate filling of potent liquid products in 1 to 10 litre bottles. Capping and weighing of the final products will also be done inside the containment isolator to guarantee a high level of product and operator protection.</p>

           <p class="text-justify">Esco ultimately designed a potent filling line isolator which easily incorporated a robotic filling line.</p>


           <h4 class="text-center mt-4">The Filling Process</h4>
           <div class="paddle-bottom"></div>

           <p class="text-justify">The filling line isolator system is designed to process sterilised and capped bottles. Once inside the containment technology, the empty bottles will be individually weighed and presented to the cap removal stationvia the robotic arms.</p>

           <p class="text-justify">At the filling station, the robotic arm will tilt the bottle at an angle to prevent splashing incidents. The arm was built to withstand the impact of the additional weight of the potent liquid filling the container bottles.</p>
           <p class="text-justify">The processed bottles with the refitted caps will then be re-weighed for drug volume confirmation and afterwards conveyed to the final stages of labelling and packaging.</p>

           <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/rsz_fiiling_line_isolator_processflow-rev06-min.png">

           <p style="margin-top: 15px; font-size: 0.9em !important;" class="text-center"><strong>Figure 1.</strong> Process flow of the robotic filling line isolator</p>


           <h4 class="text-center mt-4">Project Considerations</h4>
           <div class="paddle-bottom"></div>

           <p class="text-justify">To upgrade the client’s current process to an advanced and automated one, complex equipment integrations into the filling line isolator were necessary. Of greater concern is the nature of the final product; in its liquid form, it is not potent but in case of a spillage the liquid can easily dry into its powdered form which then poses a high occupational exposure risk. To remedy this, all worst-case scenarios must be addressed.</p>

           <p class="text-justify">Furthermore, the client specified a "one company" appearance for the entire system, so the incorporation of all third party equipment must have a seamless finish. The client’s facility has an internal window which will provide visitors a view of the fully integrated filling line isolator. This allows the company to demonstrate that they are employing cutting-edge technology in their manufacturing process assuring high quality and cost-effectiveness for the final products.</p>
           <p class="text-justify">The efficient use of the available space has also been considered in the construction of the filling line isolator system. To guarantee a clean appearance, an all-encompassing design without any remote element is necessary. As such, both the air handling units (AHU) and the main control panel (MCP) were engineered within the footprint of the client’s filling line equipment.</p>


           <h4 class="text-center mt-4">Design Solutions</h4>
           <div class="paddle-bottom"></div>

           <p class="text-justify">As with any isolation technology, containment is the main priority of the design. To address the concerns raised by processing large quantities of a potent product, Esco’steam of experts recommended two main design features.</p>

           <p class="text-justify">The first recommendation involved a double wall containment system wherein the main process chamber operates under positive pressure while the enclosing walls run at a negative pressure, with integrated HEPA filters at the return point, to ensure contaminant-free return walls. This configuration ensures both key parameters of aseptic conditions and containment will be met.</p>
           <p class="text-justify">The second design feature involves the integration of negative pressure air-sinks at the filling chamber inlet and outlet. These will act as the buffer system that assures proper containment of the potent product to prevent cross-contamination risks.</p>

           <p class="text-justify">Each sink will also have safe-change double HEPA filters at the return point to remove airborne particulates before the air recirculates back to the surrounding environment.</p>
           <p class="text-justify">For the aesthetic continuity of the entire filling line isolator system, Esco ensured that even the polish finish of the isolator to matched the bed plate provided by the original equipment manufacturer (OEM) of the filling line. This design also addressed the client’s requirements for a clean and compact system.</p>
           <p class="text-justify">The incorporation of safe change filters, an exhaust fan, and a diffuser into the conveyor system’s support structure further ensured the system’s all-encompassing design (see Figure 1).</p>
           <p class="text-justify">The client does not have current requirements for a bio-decontamination system, but the flexibility of Esco’sfilling line isolator design allows for future integration to minimize cost and process-delays.</p>



           <h4 class="text-center mt-4">Project Summary</h4>
           <div class="paddle-bottom"></div>

           <p class="text-justify">Filling line isolators are designed to incorporate (OEM) filling line manufacturer’s equipment as standard, however this specific project system design required an entirely different approach in terms of system incorporation.</p>

           <p class="text-justify">Although complex, Esco immensely enjoyed working with the client and the filling line’s OEM to create a fully integrated system.</p>
           <p class="text-justify">For more information please visit <a href="/"><strong>www.escopharma.com</strong></a>.</p>


           <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/rsz_fiiling_line_isolator_stages_300dpi-min.png">

           <p style="margin-top: 15px; font-size: 0.9em !important;" class="text-center"><strong>Figure 2.</strong> Different stages of equipment development from ergonomic trials to final product.</p>


           <p class="text-center" style="margin-top: 30px; "><a target="_blank" rel="noopener noreferrer" style=" padding:10px; background: #26577f ;" class="btn-primary" href="http://www.escoglobal.com/products/download/Esco Pharma Filling Line WP.pdf">Download PDF file </a></p>



           <style type="text/css">

               ul.check_li {
                 list-style: none;
                 padding: 0 0 0 24px;
                 line-height: 26px;
               }
               ul.check_li li{
                 list-style: none;
               }
               ul.check_li li.check_li_1 p {
                   line-height: 22px !important;
               }

               ul.check_li li.check_li_1:before {
                   font-weight: bold;
                   content: "\2713";
                   float: left;
                   margin-left: -24px
               }
               img.secondary-image{
                   position: relative;
                   left: 50%;
                   transform: translateX(-50%);
               }
               .article-video{
                   width: 70% !important;
                   margin: auto !important;
               }

               .paddle-bottom{
                   position: relative;
                   height: 2px;
                   width: 36px;
                   background: rgb(164, 204, 131);
                   margin: auto;
                   top: -2px;
                   margin-bottom:1em;
               }

               .product-images-set{
                    display: flex;
                    align-items: flex-end !important;
               }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   /*width: 100% !important;*/
               }
               .article-video{
                   width: 100% !important;
               }
               .product-images-set{
                    display: block;
               }
           }

           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, COVID-19, Esco’s Robotic Filling Line Isolator',
           'meta_description' => 'The demand for filling line containment isolation technology continuously increases along with the market growth for aseptic cell therapy and injectables.',
            'created_at' => '2019-12-10 10:03:26'],

           ['news_category_id' => '1',
           'old_id' => '183',
		   'slug' => 'esco-gb-ltd-engineers-a-robotic-filling-line-isolator-for-a-major-pharmaceutical-company-in-ireland',
           'title' => 'Esco GB Ltd Engineers a Robotic Filling Line Isolator for a Major Pharmaceutical Company in Ireland',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'esco-GB-ltd-engineers-a-robotic-filling-line-isolator-min.jpg',
           'banner_thumb' => 'esco-GB-ltd-engineers-a-robotic-filling-line-isolator-thumb-min.jpg',
           'description' => 'Esco’s highly flexible filling line isolators are the prime solution for the aseptic production of novel pharmaceuticals as they are customizable to suit the individual clients’ needs; this project proves just that.',
           'content' => '
           <p class="text-justify">Esco’s highly flexible filling line isolators are the prime solution for the aseptic production of novel pharmaceuticals as they are customizable to suit the individual clients’ needs; this project proves just that.</p>

           <p class="text-justify">The contained robotic system of this filling line assures the safe and accurate filling of potent liquid products in 1 to 10 litre bottles. The bottles will also be capped and weighed inside the containment isolator to guarantee a high level of product and operator protection.</p>

           <p class="text-justify">The filling line isolator was designed with a double wall containment system wherein the main process chamber operates under positive pressure while the enclosing walls run at a negative pressure, with integrated HEPA filters at the return point, to ensure contaminant-free return walls. This configuration ensures both key parameters of aseptic conditions and containment are met.</p>

           <p class="text-justify">The complexity of this project was to fully integrate the isolator to the filler; allowing a seamless design where surface finishes were matched, and the isolator became part of the inspection and labeling machine with conveyors integrated on the equipment itself. This was especially important for this system given it is placed by a window as a show-piece in production for this clients visitors.</p>

           <p class="text-justify">For more information please visit <a href="/"><strong>www.escopharma.com.</strong></a> </p>

           <p class="text-center"><a href="http://www.escoglobal.com/products/download/Esco Pharma - Filling Line Feature Paper.pdf" class="btn pharma-btn" target="_blank" rel="noopener noreferrer" style="padding:10px; background-color:#99b5cc;border:none !important; color: #fff;">Download PDF File</a></p>


           <style type="text/css">
               img.secondary-image{
                   width: 85% !important;
               }
               .article-video{
                   width: 85% !important;
                   margin: auto !important;
               }

               .news-divider{
                   margin-top: 50px;
                   margin-bottom: 37px;
                   height: 8px;
                   background: #0A406B;
               }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 1024px) {
               img.secondary-image{
                   width: 100% !important;
               }
               .article-video{
                   width: 100% !important;
               }

           }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   width: 100% !important;
               }
               .article-video{
                   width: 100% !important;
               }

           }

           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Esco GB Ltd, Robotic Filling Line Isolator, Ireland',
           'meta_description' => 'Esco’s highly flexible filling line isolators are the prime solution for the aseptic production of novel pharmaceuticals as they are customizable to suit the individual clients’ needs; this project proves just that.',
            'created_at' => '2019-12-05 10:03:26'],


           ['news_category_id' => '1',
           'old_id' => '182',
		   'slug' => 'containment-barrier-isolator-the-practical-solution-to-c-gmp-compliance',
           'title' => 'Containment Barrier Isolator: The Practical Solution to cGMP Compliance',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'containment-carrier-isolator-the-practical-solution-to-cGMP-compliance-new-min.jpg',
           'banner_thumb' => 'containment-carrier-isolator-the-practical-solution-to-cGMP-compliance-new-thumb-min.jpg',
           'description' => 'The year 2019 has been a season of success for Esco Healthcare - Esco’s division that provides quality equipment and promotes a safe working environment to the healthcare industry. This year, the division released a recent addition to its range of Containment Barrier Isolator (CBI) which paved the way for more applications and processes to be carried out in a cost-effective yet cGMP-compliant equipment.',
           'content' => '
           <p class="text-justify">The year 2019 has been a season of success for Esco Healthcare - Esco’s division that provides quality equipment and promotes a safe working environment to the healthcare industry. This year, the division released a recent addition to its range of <strong>Containment Barrier Isolator (CBI)</strong> which paved the way for more applications and processes to be carried out in a cost-effective yet cGMP-compliant equipment. </p>

           <p class="text-justify" style="margin-top: 20px;">The CBI technology facilitates the isolation of a product or a process while providing the required conditions for a sterile/aseptic and hazardous environment. This full stainless-steel isolator provides a comprehensive range of personnel, product, and environmental protection.</p>

           <p style="margin-top: 20px;"><strong>Standard Features of the CBI</strong></p>
           <ul style="padding-left: 40px !important;list-style: disc;">
               <li><p>Full stainless-steel isolator with a stainless steel 304 exterior and a fully-welded stainless steel 316L internal chambers with rounded coved corners</p></li>
               <li><p>Class 2 Leak Tight Containment, as per ISO 10648-2 standards</p></li>
               <li><p>Esco HMI control system supervises all functions and provides real-time monitoring of cabinet status</p></li>
               <li><p>Safe change glove system for the maintenance of aseptic conditions inside the chamber during glove/sleeve replacement</p></li>
               <li><p>Airlock pass-through chamber maintains work zone sterility during material transfer</p></li>
               <li><p>Foot switch Provides hands-free opening of the magnetic interlock minimizing operator fatigue during transfer procedures.</p></li>
               <li><p>FDA-grade static seals</p></li>
           </ul>
           <p style="margin-top: 20px;"><strong>Four Models of CBI</strong></p>
           <ul style="list-style: none !important; padding-left: 40px !important;">
               <li>
                   <div class="row product-decription-display">
                       <div class="col-md-4">
                           <img src="/images/product-images/thumb/CBI-U-450px-min.png" class="img-responsive">
                       </div>

                       <div class="col-md-8">
                           <a href="/product-details.php?productId=35&amp;pg=pdt"><p style="margin-top: 10px;" class="product-title"><strong>CBI - Unidirectional (CBI-U)</strong></p></a>
                           <p style="margin-top: 15px;">CBI-U utilizes a unidirectional/laminar airflow and facilitates the isolation of a product or process while providing the required conditions (ISO Class 5/Grade A Environment) for a sterile/aseptic environment.</p>
                           <p style="margin-top: 15px;"><em>Models Available:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1">
                                   <p>Positive or Negative Pressure</p>
                               </li>
                               <li class="check_li_1">
                                   <p>Recirculating or Total Exhaust/Single-Pass Airflow</p>
                               </li>
                               <li class="check_li_1">
                                   <p>2-,3-, or 4-gloves</p>
                               </li>
                           </ul>
                           <p style="margin-top: 15px;"><em>Common Applications:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1"><p>Pharmacy compounding (Chemotherapy/Total Parenteral Nutrition)</p></li>
                               <li class="check_li_1"><p>Cell processing</p></li>
                               <li class="check_li_1"><p>Aseptic processing</p></li>
                               <li class="check_li_1"><p>Sterility testing</p></li>
                               <li class="check_li_1"><p>Medical device manufacturing</p></li>
                               <li class="check_li_1"><p>Radiopharmacy</p></li>
                               <li class="check_li_1"><p>Cosmeceutical</p></li>
                               <li class="check_li_1"><p>Nutraceutical</p></li>
                               <li class="check_li_1"><p>Food and beverage application</p></li>
                               <li class="check_li_1"><p>Research and development</p></li>
                           </ul>
                       </div>

                   </div>

                </li>
               <li>
                   <div class="row product-decription-display">
                       <div class="col-md-4">
                           <img src="/images/product-images/thumb/CBI-T-450px-min.png" class="img-responsive">
                       </div>

                       <div class="col-md-8">
                           <a href="/product-details.php?productId=43&amp;pg=pdt"><p style="margin-top: 25px;" class="product-title"><strong>CBI - Turbulent (CBI-T)</strong></p></a>
                           <p style="margin-top: 15px;">CBI-T utilizes turbulent airflow and facilitates product or process isolation while providing the required condition for handling potent powders. CBI-T may come with static seals (CBI-T-SS) or inflatable seals (CBI-T-IS).</p>
                           <p style="margin-top: 15px;"><em>Models Available:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1">
                                   <p>Negative Pressure only</p>
                               </li>
                               <li class="check_li_1">
                                   <p>Total Exhaust/Single-Pass Airflow</p>
                               </li>
                               <li class="check_li_1">
                                   <p>2-,3-, or 4-gloves</p>
                               </li>
                           </ul>
                           <p style="margin-top: 15px;"><em>Common Applications:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1"><p>Potent powder handling</p></li>
                               <li class="check_li_1"><p>HPAPI QC Testing</p></li>
                               <li class="check_li_1"><p>Research and development</p></li>
                           </ul>
                       </div>

                   </div>

                </li>

               <li>
                   <div class="row product-decription-display">
                       <div class="col-md-4">
                           <img src="/images/product-images/thumb/containment-barrier-isolator-III-min.png" class="img-responsive">
                       </div>
                       <div class="col-md-8">
                           <a href="/product-details.php?productId=44&amp;pg=pdt"><p style="margin-top: 25px;" class="product-title"><strong>CBI - Class III Biosafety Cabinet (CBI-III)</strong></p></a>
                           <p style="margin-top: 15px;">CBI-III offers the highest level of operator, product, and environmental protection from infectious/biohazardous aerosols and is suitable for microbiological work with agents assigned to biosafety levels 1, 2, 3, or 4. It is designed for an absolute level of containment - frequently used for work involving the deadliest biohazards, bacteria, viruses, and other microorganisms. </p>
                           <p style="margin-top: 15px;"><em>Models Available:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1">
                                   <p>Negative Pressure only</p>
                               </li>
                               <li class="check_li_1">
                                   <p>Total Exhaust/Single-Pass Airflow</p>
                               </li>
                               <li class="check_li_1">
                                   <p>2-,3-, or 4-gloves</p>
                               </li>
                           </ul>
                           <p style="margin-top: 15px;"><em>Common Applications:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1"><p>Biosafety Levels 1 to 4 handling</p></li>
                               <li class="check_li_1"><p>Virus production</p></li>
                               <li class="check_li_1"><p>Vaccine production</p></li>
                           </ul>
                       </div>

                   </div>

                </li>

               <li>
                   <div class="row product-decription-display">
                       <div class="col-md-4">
                           <img src="/images/product-images/thumb/containment-barrier-isolator-hybrid-min.png" class="img-responsive">
                       </div>
                       <div class="col-md-8">
                           <a href="/product-details.php?productId=45&amp;pg=pdt"><p style="margin-top: 25px;" class="product-title"><strong>CBI - Hybrid (Class III/Class I Convertible Biosafety Cabinet (CBI-H)</strong></p></a>
                           <p style="margin-top: 15px;">CBI-H builds on Esco Pharma’s success of CBI-III. It allows operators to work via a removable glove visor to convert the cabinet and function as a Class III or a Class I Biosafety Cabinet as per EN 12469 standards.</p>
                           <p style="margin-top: 15px;">In BSC Class III mode, the operator works through a glove port attached to a removable panel. It can be converted to a BSC Class I by removing the closure panel and attaching a blanking plate over the inlet HEPA filter.</p>
                           <p style="margin-top: 15px;"><em>Models Available:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1">
                                   <p>Convertible Class III to Class I BSC</p>
                               </li>
                               <li class="check_li_1">
                                   <p>2,3, or 4 gloves</p>
                               </li>
                           </ul>
                           <p style="margin-top: 15px;"><em>Common Applications:</em></p>
                           <ul class="check_li" style="list-style: none !important;">
                               <li class="check_li_1"><p>Biosafety Levels 1 to 4 handling</p></li>
                               <li class="check_li_1"><p>Virus production</p></li>
                               <li class="check_li_1"><p>Vaccine production</p></li>
                           </ul>

                       </div>

                   </div>

                </li>

           </ul>

           <p style="margin-top: 25px;"><strong>Equipment Integration</strong></p>


           <p class="text-justify" style="margin-top: 15px;">Depending on the process requirements, the different models of CBI can be integrated with multiple equipment for an easier and a more efficient workflow.
           CBI offers the advantage of equipment integration without hampering the containment of the cabinet. Equipment can be integrated into the work zone, main chamber walls, or even into pass-through chamber walls, which will be defined by the process and the application.
           </p>


           <p class="text-justify" style="margin-top: 15px;">Testing and validation of each equipment will be meticulously carried out to ensure the isolator’s performance comply with international standards, despite the design integrations.</p>



           <p style="margin-top: 25px;"><strong>LIST OF EQUIPMENT INTEGRATION OPTIONS</strong></p>

           <img style="margin: auto;" class="img-responsive" src="/images/upload/list-of-equipment-integration-options-min.jpg">

           <p class="text-justify" style="margin-top: 20px;">Esco Healthcare continues to innovate and create state-of-the-art technologies that promote safe working environment for the healthcare sector.</p>


           <p class="text-justify" style="margin-top: 15px;">As 2019 bids adieu, the company continues to look forward to more opportunities for growth and industry-wide collaborations.</p>
           <p class="text-justify" style="margin-top: 15px;">For more information about the CBI, click on the link below:</p>

           <a href="/products-sub-page.php?productId=40&amp;pg=pdt">/products-sub-page.php?productId=40&amp;pg=pdt</a>

           <p class="text-center" style="margin-top: 25px;"><strong>Download CBI Brochure</strong></p>
           <center><a href="http://www.escoglobal.com/products/download/CBI-Product-Brochure-A4-vC-LR11122019.pdf"><img style="margin: auto;" class="img-responsive" src="/images/upload/cbi-brochure-preview-min.jpg"></a></center>




           <style type="text/css">

               img.secondary-image{
                   width: 70% !important;
               }
               .article-video{
                   width: 85% !important;
                   margin: auto !important;
               }
               ul.check_li {
                 list-style: none !important;
                 padding: 0 0 0 15px;
                 line-height: 26px;
               }

               ul.check_li li.check_li_1 p {
                   line-height: 22px !important;
               }

               ul.check_li li.check_li_1:before {
                   font-weight: bold;
                   content: "\2713";
                   float: left;
                   margin-left: -24px
               }

               .product-decription-display{
                   display: flex;
                   flex-direction: row-reverse;
               }
               .product-title::before {
                 content: "\2022";
                   position: absolute;
                   left: -3px;
                   font-size: 32px;
                   color: #404248;
               }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   width: 100% !important;
               }
               .article-video{
                   width: 100% !important;
               }
               .product-decription-display{
                   display: block;
               }
           }
           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Containment Barrier Isolator, cGMP Compliance',
           'meta_description' => 'The year 2019 has been a season of success for Esco Healthcare - Esco’s division that provides quality equipment and promotes a safe working environment to the healthcare industry. This year, the division released a recent addition to its range of Containment Barrier Isolator (CBI) which paved the way for more applications and processes to be carried out in a cost-effective yet cGMP-compliant equipment.',
            'created_at' => '2019-12-03 10:03:26'],

           ['news_category_id' => '1',
           'old_id' => '181',
		   'slug' => 'designing-internationally-compliant-pharmaceutical-manufacturing-equipment',
           'title' => 'Designing Internationally-Compliant Pharmaceutical Manufacturing Equipment',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'designing-internationally-compliant-pharmaceutical-manufacturing-equipment-min.jpg',
           'banner_thumb' => 'designing-internationally-compliant-pharmaceutical-manufacturing-equipment-thumb-min.jpg',
           'description' => 'The regulations surrounding pharmaceutical manufacturing equipment are endless; discover an efficient approach to ensuring that your engineering controls are at the top of the game!',
           'content' => '
           <p class="text-justify">The pharmaceutical field is an extremely significant industry – providing millions of patients with high quality medications formulated to diagnose, cure, mitigate, treat, or prevent diseases and promote patient’s overall well-being. </p>

           <p class="text-justify" style="margin-top: 20px;">As such, there is a gravity to ensure that the products pharmaceutical companies produce will always be safe and highly effective. </p>

           <p class="text-justify" style="margin-top: 20px;">For years, the regulations surrounding pharmaceutical manufacturing has continued to be more demanding and more stringent. One of the most important guidelines followed in the field of pharmacy is the current Good Manufacturing Practice (cGMP), requiring manufacturers, processors, and packagers of drugs, medical devices, and blood to follow certain steps for the production of safe and effective products.</p>


           <p class="text-justify" style="margin-top: 20px;">To achieve this state of efficiency, each manufacturing component must be validated and qualified; from the raw materials to the process equipment that manufacture the products in their final form. Since the equipment will be in direct contact with both the excipient and the active pharmaceutical ingredient (API), it will influence the overall integrity of the final marketable product. As such, even the construction of equipment must have a built-in quality!</p>

           <p class="text-justify" style="margin-top: 20px;">The US Food and Drug Administration established the Code of Federal Regulations <em>Title 21, part 211, section 63</em>, highlighting the important aspects of equipment requirements that must be satisfied by engineering control manufacturers:</p>

           <div class="row">
               <div class="col-md-10 offset-md-1 col-xs-12 offset-xs-0">
                   <p class="text-justify" style=" margin-top: 20px;border-left: 6px solid #bfbfbf; padding-left: 12px; font-size: 1.1em;"><em>“Equipment used in the manufacture, processing, packing, or holding of a drug shall be of appropriate design, adequate size, and suitably located to facilitate operations for its intended use and for its cleaning and maintenance.”</em></p>
               </div>
           </div>


           <p class="text-justify" style="margin-top: 20px;">It is vaguely constructed because not all pharmaceutical processes are the same. Each company needs flexibility to acquire a line of equipment compatible with their entire manufacturing process; from the concept of containment to a fully integrated continuous manufacturing line. </p>

           <p class="text-justify" style="margin-top: 20px;">In line with this, institutions spearheading the design and construction of engineering controls frequently question the proper way of complying with the USFDA and cGMP guidelines, but the simple answer is: <em>‘each equipment must be qualifiable.’</em></p>

           <p class="text-justify" style="margin-top: 20px;">The final equipment must be qualified and (in instances when it cannot be fully verified) validated to guarantee that it is not only compliant with the specifications of the user, but suitable for the nature of the excipients and APIs as well. </p>

           <p class="text-justify" style="margin-top: 20px;">To generalize, each equipment must: </p>

           <ul style="list-style: disc;">
               <li>
                   <p><strong>Not have a negative impact on product quality</strong></p>
                   <ul class="check_li" style="list-style: none !important;">
                       <li class="check_li_1">
                           <p>There must be no negative interaction between the product and the equipment surfaces of any kind such as: leaching, absorption, and chemical reaction. This ensures that cross-contamination and untoward exposure to operator during mechanical maintenance is eliminated.</p>
                       </li>
                   </ul>
                </li>
               <li>
                   <p><strong>Be easily cleaned</strong></p>
                   <ul class="check_li" style="list-style: none !important;">
                       <li class="check_li_1">
                           <p>As a universal rule, the entire system must be designed for easy cleaning. The following objectives must be met:</p>
                           <ol style="list-style: lower-alpha;">
                               <li>
                                   <p>All surfaces must be smooth without score marks to guarantee its easy cleaning via wiping with lintless materials; eliminating the risk for cross-contamination with subsequent products. </p>
                               </li>
                               <li>
                                   <p>There should be no ‘dead legs’ or hard to reach places as these areas may accumulate unwanted particulates and residues of excipients that may cross-contaminate and prevent line clearance.</p>
                               </li>
                           </ol>
                       </li>
                   </ul>
                </li>

               <li>
                   <p><strong>Be compliant to applicable regulations</strong></p>
                   <ul class="check_li" style="list-style: none !important;">
                       <li class="check_li_1">
                           <p>Since there are numerous regulations that have been developed in the recent years, it is hard to choose which technical rule to follow. This will then depend on the nature of the equipment and the location of the client’s facility. There are also additional published documents which can be reviewed from organizations such as: ECA, ISPE, PDA, or VDMA. These are not compulsory guidelines, but they can be used to prove that the constructed equipment have met or exceeded the international guideline requirements.</p>
                       </li>
                   </ul>
                </li>
                <li>
                   <p><strong>Be qualified for its intended purpose</strong></p>
                   <ul class="check_li" style="list-style: none !important;">
                       <li class="check_li_1">
                           <p>This is a very important aspect of designing an engineering control but it is also hard to generalize. In this regard, the entire design component of a system must satisfy the predetermined quality requirements that will inevitably lead to the production of a product which meets the safety and efficacy needs of a patient. </p>
                       </li>
                       <li class="check_li_1">
                           <p>System suitability is established once it meets all the qualification criteria of an equipment via:</p>
                           <ol style="list-style: lower-alpha;">
                               <li>
                                   <p>Examining and ensuring compliance to the user requirement specifications (URS) </p>
                               </li>
                               <li>
                                   <p>Design qualification (DQ) </p>
                               </li>
                               <li>
                                   <p>Installation qualification (IQ) </p>
                               </li>
                               <li>
                                   <p>Operational qualification (OQ)</p>
                               </li>
                               <li>
                                   <p>Process qualification (PQ)</p>
                               </li>
                               <li>
                                   <p>Factory acceptance tests (FAT)</p>
                               </li>
                           </ol>
                       </li>
                   </ul>
                </li>
           </ul>



           <p>&nbsp;</p>


           <p><strong>Esco Pharma’s Turnkey Solutions</strong></p>
           <p class="text-justify">All equipment designs under the four core technologies of Esco Pharma meets the requirements of international regulating bodies. This ensures that quality is built in every engineering control being catered, embodying the need to integrate excellence from the very beginning of pharmaceutical manufacture. </p>
           <p class="text-justify">Our highly experienced team of service engineers conduct the necessary qualification tests during in-situ installation of each device, the parameters of which are based on established regulations. </p>
           <p class="text-justify">Preventive maintenance (PM) services are also provided to prevent mechanical issues and to keep the systems optimized. Unlike other companies, Esco has highly trained engineers deployed worldwide for the comfort and security of the clients.</p>
           <p class="text-justify">With Esco, clients purchase top-notch solutions along with process-efficiency.</p>

           <p class="text-justify">Checkout our <a href="/products.php">range of products</a> and contact the <a href="/contact-us.php">Esco office</a> near you, today!</p>


           <p>&nbsp;</p>

           <p><strong>References:</strong></p>
           <ol style="list-style: decimal;">
               <li><p>CFR - Code of Federal Regulations Title 21. (2019). Retrieved 22 October 2019, from <a  href="https://www.accessdata.fda.gov/scripts/cdrh/cfdocs/cfcfr/CFRSearch.cfm?fr=211.63#targetText=Sec.,for%20its%20cleaning%20and%20maintenance.">https://www.accessdata.fda.gov/scripts/cdrh/cfdocs/cfcfr/CFRSearch.cfm?fr=211.63#targetText=Sec.,for%20its%20cleaning%20and%20maintenance.</a></p></li>
               <li><p>DrugsatFDA Glossary of Terms. (2019). Retrieved 22 October 2019, from <a href="https://www.fda.gov/drugs/drug-approvals-and-databases/drugsfda-glossary-terms#targetText=Drug,any%20function%20of%20the%20body">https://www.fda.gov/drugs/drug-approvals-and-databases/drugsfda-glossary-terms#targetText=Drug,any%20function%20of%20the%20body</a>.</p></li>
               <li><p>GMP Question and Answers. (2019). Accessed last 19 Mar 2019 from <a href="https://www.who.int/medicines/areas/quality_safety/quality_assurance/gmp/en/">https://www.who.int/medicines/areas/quality_safety/quality_assurance/gmp/en/</a></p></li>
               <li><p>GMP Resources. (2019). Accessed last 19 Mar 2019 from <a href="https://ispe.org/initiatives/regulatory-resources/gmp">https://ispe.org/initiatives/regulatory-resources/gmp</a></p></li>
               <li><p>Questions and Answers. (2019). Retrieved 22 October 2019, from <a href="https://www.fda.gov/drugs/guidances-drugs/questions-and-answers-current-good-manufacturing-practices-equipment#list">https://www.fda.gov/drugs/guidances-drugs/questions-and-answers-current-good-manufacturing-practices-equipment#list</a></p></li>
               <li><p>What is GMP compliant Equipment Design? - ECA Academy. (2019). Retrieved 22 October 2019, from <a href="https://www.gmp-compliance.org/gmp-news/what-is-gmp-compliant-equipment-design">https://www.gmp-compliance.org/gmp-news/what-is-gmp-compliant-equipment-design</a></p></li>
               <li><p>What is GMP. (2019). Accessed last 19 Mar 2019 from <a href="https://ispe.org/initiatives/regulatory-resources/gmp/what-is-gmp">https://ispe.org/initiatives/regulatory-resources/gmp/what-is-gmp</a></p></li>

           </ol>
           <p>&nbsp;</p>
           <p><strong>About our BRANDS</strong></p>
           <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare. </p>
           <p>&nbsp;</p>
           <p><strong>About Esco Pharma</strong></p>
           <p class="text-justify">Esco Pharma’s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
           <p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>



           <style type="text/css">

               img.secondary-image{
                   width: 70% !important;
               }
               .article-video{
                   width: 85% !important;
                   margin: auto !important;
               }
               ul.check_li {
                 list-style: none !important;
                 padding: 0 0 0 15px;
                 line-height: 26px;
               }

               ul.check_li li.check_li_1 p {
                   line-height: 22px !important;
               }

               ul.check_li li.check_li_1:before {
                   font-weight: bold;
                   content: "\2713";
                   float: left;
                   margin-left: -24px
               }
           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   width: 100% !important;
               }
               .article-video{
                   width: 100% !important;
               }

           }
           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Pharmaceutical Manufacturing Equipment,active pharmaceutical ingredient (API), current Good Manufacturing Practice (cGMP)',
           'meta_description' => 'The pharmaceutical field is an extremely significant industry – providing millions of patients with high quality medications formulated to diagnose, cure, mitigate, treat, or prevent diseases and promote patient’s overall well-being.',
            'created_at' => '2019-11-04 10:03:26'],


           ['news_category_id' => '3',
           'old_id' => '179',
		   'slug' => 'esco-healthcare-s-november-european-exhibitions',
           'title' => 'Esco Healthcare’s November European Exhibitions',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'esco-healthcares-november-european-exhibitions.jpg',
           'banner_thumb' => 'esco-healthcares-november-european-exhibitions-thumb.jpg',
           'description' => 'As the year draws to a close, Esco Healthcare unceasingly delivers innovative technologies and services to the public; evidenced by its upcoming voyage to the European lands to showcase turnkey solutions in two pharmaceutical exhibitions!',
           'content' => '
           <p class="text-justify">As the year draws to a close, Esco Healthcare unceasingly delivers innovative technologies and services to the public; evidenced by its upcoming voyage to the European lands to showcase turnkey solutions in two pharmaceutical exhibitions!</p>

            <p class="text-justify" style="margin-top: 20px;">First up is the world’s largest pharmaceutical exhibition, <a href="https://www.cphi.com/europe/">CPhI Worldwide</a>. To be held at Messe Frankfurt GmbH (Frankfurt, Germany) this upcoming Nov. 5-7, the exhibition features every stage of the pharmaceutical supply chain – from active pharmaceutical ingredients (APIs), machinery, packaging, outsourcing, and biopharmaceuticals.</p>

            <p class="text-justify" style="margin-top: 20px;">With over 45,000 attendees and 2,500 exhibitors from all over the world, CPhI Worldwide is the perfect place for networking and connecting with various pharmaceutical solution providers, Esco being one of them.</p>

            <p class="text-justify" style="margin-top: 20px;">In the last week of November, Esco Healthcare will also be exhibiting at the <a href="https://vonlanthengroup.com/en/events/3rd-annual-aseptic-processing-summit.html">3<sup>rd</sup> Annual Aseptic Processing Summit</a> on the 20<sup>th</sup> - 21<sup>st</sup> at Renaissance Wien Hotel (Vienna, Austria).</p>

            <p class="text-justify" style="margin-top: 20px;">Participants can meet and discuss with people from pharmaceutical manufacturing, aseptic fill and finish, quality control, and containment technologies among others. The event will be headed by some of the industry’s best who will discuss the following key topics about aseptic processing:</p>


            <ul style="padding-left: 40px !important;">
                <li>
                    <p class="text-justify">Implementation of quality risk management</p>
                 </li>
                <li>
                    <p class="text-justify">Process simulation/media fill</p>
                 </li>

                <li>
                    <p class="text-justify">ADC/HPAPI aseptic processing fill and finish</p>
                 </li>

                <li>
                    <p class="text-justify">Robotics in aseptic processing</p>
                 </li>
                <li>
                    <p class="text-justify">Gloveless isolators and dose control</p>
                 </li>
                <li>
                    <p class="text-justify">Emerging technologies</p>
                 </li>
                <li>
                    <p class="text-justify">Occupational safety requirements</p>
                 </li>
                <li>
                    <p class="text-justify">Multi-product facilities</p>
                 </li>
                <li>
                    <p class="text-justify">Challenges for manufacturers in cell and gene therapy production systems</p>
                 </li>
                <li>
                    <p class="text-justify">European regulations</p>
                 </li>
            </ul>


            <p class="text-justify" style="margin-top: 20px;">As one of the leading manufacturers in containment and isolation systems, Esco Healthcare continues to stamp its global footprint spanning in the USA, Europe, and Asia. Our team of experts are available to discuss your needs to provide turnkey solutions; providing safety from <em>Discovery to Delivery.</em></p>

            <p style="margin-top: 20px;">Be sure to visit our booth at the following events!</p>

            <ul style="padding-left: 40px !important;">
                <li>
                    <p><a href="https://www.cphi.com/europe/">CPhI Worldwide</a> – Booth 110G10</p>
                </li>
                <li>
                    <p><a href="https://vonlanthengroup.com/en/events/3rd-annual-aseptic-processing-summit.html">3rd Annual Aseptic Processing Summit</a> – Strassburg exhibition room</p>
                </li>
            </ul>

            <p>&nbsp;</p>


            <p><strong>About our BRANDS</strong></p>
            <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

            <p>&nbsp;</p>

            <p><strong>About Esco Pharma</strong></p>
            <p class="text-justify">Esco Pharma’s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

            <p class="text-justify" "="">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>


            <style type="text/css">

                img.secondary-image{
                    width: 70% !important;
                }
                .article-video{
                    width: 85% !important;
                    margin: auto !important;
                }

            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                img.secondary-image{
                    width: 100% !important;
                }
                .article-video{
                    width: 100% !important;
                }

            }
            </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Esco Healthcare, November European Exhibitions, CPhI Worldwide',
           'meta_description' => 'As the year draws to a close, Esco Healthcare unceasingly delivers innovative technologies and services to the public; evidenced by its upcoming voyage to the European lands to showcase turnkey solutions in two pharmaceutical exhibitions!',
            'created_at' => '2019-10-31 10:03:26'],



           ['news_category_id' => '1',
           'old_id' => '180',
		   'slug' => 'esco-gb-ltd-selected-by-a-leading-irish-pharmaceutical-company-for-its-innovative-containment-isolator',
           'title' => 'Esco GB Ltd Selected by a Leading Irish Pharmaceutical Company for its Innovative Containment Isolator',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'esco-gb-Ltd-selected-by-a-leading-min.jpg',
           'banner_thumb' => 'esco-gb-Ltd-selected-by-a-leading-thumb-min.jpg',
           'description' => 'This project has been awarded to Esco and will be utilizing the Weighing and Dispensing Containment Isolator (WDCI), to be installed in Belgium. As with the majority of our units, the WDCI is highly adaptable to meet all the requirements specified by our client.',
           'content' => '
           <p style="margin-top: 25px; font-size: 1.2em !important;" class="text-justify">This project has been awarded to Esco and will be utilizing the Weighing and Dispensing Containment Isolator (WDCI), to be installed in Belgium. As with the majority of our units, the WDCI is highly adaptable to meet all the requirements specified by our client.</p>

           <p style="margin-top: 25px; font-size: 1.2em !important;" class="text-justify">The client’s process involves the handling of potent powders requiring a containment level below 30ng/m<sup>3</sup> (under OEB 5). The drawing below shows some of the customisation features to achieve user specifications.</p>

           <p class="text-center"><img class="img-fluid img-ie w-75" src="/images/upload/esco-WDCI-3D-Model-min.png"></p>
           <p style="margin-top: 10px; font-size: 1em !important;" class="text-center"><em>Esco WDCI 3D Model</em></p>

           <p style="margin-top: 25px; font-size: 1.2em !important;" class="text-justify">The left-hand side of the 4-glove unit double-sided unit is a 460 mm rapid transfer port (RTP) which provides a contained transfer method of the client’s product into the main process chamber. Additionally, the WDCI is configured to allow direct connection with a third-party custom-designed static mixer.</p>

           <p style="margin-top: 25px; font-size: 1.2em !important;" class="text-justify">We are very pleased for this opportunity to provide our client with a bespoke solution that best suits their process needs. For more information please visit <strong><a href="http://escopharma.com/">www.escopharma.com</a></strong></p>

           <p class="text-center"><a href="http://www.escoglobal.com/products/download/Esco GB WDCI Paper for global and pharma.pdf" class="btn pharma-btn" target="_blank" rel="noopener noreferrer" style="padding:10px; background-color:#a4cc83;border:none !important;">Download PDF File</a></p>


           <style type="text/css">
               img.secondary-image{
                   width: 85% !important;
               }
               .article-video{
                   width: 85% !important;
                   margin: auto !important;
               }

               .news-divider{
                   margin-top: 50px;
                   margin-bottom: 37px;
                   height: 8px;
                   background: #0A406B;
               }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 1024px) {
               img.secondary-image{
                   width: 100% !important;
               }
               .article-video{
                   width: 100% !important;
               }

           }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   width: 100% !important;
               }
               .article-video{
                   width: 100% !important;
               }

           }

           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Esco GB Ltd, Innovative Containment Isolator',
           'meta_description' => 'This project has been awarded to Esco and will be utilizing the Weighing and Dispensing Containment Isolator (WDCI), to be installed in Belgium. As with the majority of our units, the WDCI is highly adaptable to meet all the requirements specified by our client.',
            'created_at' => '2019-10-29 10:03:26'],



           ['news_category_id' => '1',
           'old_id' => '178',
		   'slug' => 'cell-processing-isolator-a-highly-modular-and-adaptable-solution-for-cell-processing',
           'title' => 'Cell Processing Isolator: A Highly Modular and Adaptable Solution for Cell Processing',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'cell-processing-isolator-a-highly-modular-and-adaptable-solution-for-cell-min.jpg',
           'banner_thumb' => 'cell-processing-isolator-a-highly-modular-and-adaptable-solution-for-cell-thumb-min.jpg',
           'description' => 'A Cell Processing Isolator (CPI) is an integrated system that combines several types of equipment into one isolation technology.',
           'content' => '
           <h4 class="text-center" style="">Introduction</h4>
           <div class="paddle-bottom"></div>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">A <strong>Cell Processing Isolator</strong> (CPI) is an integrated system that combines several types of equipment into one isolation technology.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">A CPI is designed to isolate the process to ensure operator safety without compromising product quality. It also provides a sterile ISO Class 5/Grade A environment that is required for carrying out aseptic processes.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">This specific isolator is designed for the following applications:</p>

           <ul class="check_li">
               <li class="check_li_1"><p>Allogenic Cell Therapy</p></li>
               <li class="check_li_1"><p>Autologous Cell Therapy</p></li>
               <li class="check_li_1"><p>Biosafety/Animal Biosafety Level 3/4 Containment</p></li>
               <li class="check_li_1"><p>Cell Banking</p></li>
               <li class="check_li_1"><p>Monoclonal Antibody Production</p></li>
               <li class="check_li_1"><p>Phase III Clinical Trial</p></li>
               <li class="check_li_1"><p>Protein Production</p></li>
               <li class="check_li_1"><p>Vaccine Research</p></li>
               <li class="check_li_1"><p>Virus Production</p></li>
           </ul>
           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">As a cGMP isolator and an aseptic containment system, the CPI is pressure tested and capable of biodecontamination using <strong>BioVap™</strong> - Esco’s own hydrogen peroxide-based biodecontamination system. BioVap™ is capable of a 6 log reduction in bioburden. It is not affected by temperature or relative humidity; thus there is no pre-conditioning requirement to the chamber before use, leading to a reduced cycle duration.</p>


           <h4 style="margin-top: 50px; " class="text-center">Equipment Integration and Options</h4>
           <div class="paddle-bottom"></div>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">The CPI is highly modular and adaptable to meet the client’s requirements. General bioprocessing equipment such as a CO<sub>2</sub> incubator and a centrifuge can be integrated into the isolator. These said bioprocessing equipment are also manufactured by Esco.</p>

           <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/isolator-with-integrated-esco-CelCulture-CO2-min.png">
           <p style="margin-top: 10px; font-size: 0.9em !important;" class="text-center"><strong>Figure 1.</strong> Isolator with integrated Esco’s CelCulture<sup>®</sup> CO<sub>2</sub> Incubator and Versati™ Centrifuge.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">The CPI can also be converted into an isolator incubator, capable of temperature, relative humidity, CO<sub>2</sub>, N<sub>2</sub>, and suppressed O<sub>2</sub> control. CPI can also accommodate other bioreactors such as wave, shaking, orbital and other types of bioreactors.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">Additional options include integration of Esco cell therapy equipment, but also as a stand-alone isolator with third-party devices (See Figure 2).</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">For clients requiring temperature and CO<sub>2</sub> control, <strong>Turbulent Flow Aseptic Isolator (TFAI™)</strong> or <strong>Aseptic Containment Isolator (ACTI)</strong> can be used.</p>

           <div class="row">
                <div class="col-md-4">
                    <img class="px-3" src="/images/product-images/thumb/Turbulent-Flow-Aseptic-Isolator-min.png">
                    <p class="text-center"><small>Temparature and CO<sub>2</sub>, Control<br><a href="/products/turbulent-flow-aseptic-isolator/28">TFAI</a> | <a href="/products/aseptic-containment-isolator/17">ACTI</a></small></p>
                </div>
                <div class="col-md-4">
                    <img class="px-3" src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png">
                    <p class="text-center"><small>Isolator Ready with Cell Therapy Equipment<br><a href="#">GPPI</a> | <a href="/products/cell-processing-isolator/19">CPI</a> | <a href="/products/advanced-processing-platform-isolator/16">APPI</a></small></p>
                </div>
                <div class="col-md-4">
                    <img class="px-3" src="/images/product-images/thumb/sci-stainless-steel-min.png">
                    <p class="text-center"><small>Stand Alone Isolator with Third-party Equipment<br><a href="/products/compounding-isolator/38">SCI</a> | <a href="/products/healthcare-platform-isolator-with-filter-below-workzone/22">HPI</a></small></p>
                </div>
            </div>
           <p style="margin-top: 0px; font-size: 0.9em !important;" class="text-center"><strong>Figure 2.</strong> With Esco’s wide range of isolators, clients can easily choose their base isolator depending on their process requirements.</p>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">The advantage of TFAI over ACTI is the optional Pod Flange which allows integration of other equipment on the base and in the rear portion of the isolator. For those needing cell therapy equipment integration on the base of the unit only, <strong>General Processing Platform Isolator (GPPI)</strong> and <strong>Advanced Processing Platform Isolator (APPI)</strong> are available. While for those requiring a stand-alone unit (with own control system) connected to the isolator through electrical sockets, Esco offers the <strong>Streamline<sup><sup>®</sup></sup> Compounding Isolator (SCI)</strong> and the <strong>Isoclean<sup><sup>®</sup></sup> Healthcare Platform Isolator (HPI-G3)</strong>.</p>

           <h4 class="text-center" style="     margin-top: 50px;">CradlePRO™ Iso</h4>
           <div class="paddle-bottom"></div>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify"><strong>CradlePRO™ Iso</strong>, is a CPI for CelCradle™ bioreactors. This includes the <strong>CelCradle™X</strong>, a ready-to-use bioreactor capable of high-density cell culture.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify"><strong>CelCradle™X (CCX)</strong> is a closed, automated, single-use cGMP bioreactor that is designed based on tide motion technology. CCX is equipped with its own incubation system that can be docked and undocked to the CPI’s process chamber.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify"><strong>CelCradle™X (CCX)</strong> is a closed, automated, single-use cGMP bioreactor that is designed based on tide motion technology. CCX is equipped with its own incubation system that can be docked and undocked to the CPI’s process chamber.CradlePRO™ Iso is easily customizable depending on the client process requirements. It can come as a 2-glove, 3-glove, or 4-glove isolator. It can also integrate a refrigerated centrifuge and a peltier in the process chamber. Its backwall also allows docking/undocking of a CO2 incubator and the integration of Rapid Transfer Ports (RTP), liquid transfer ports, or even the interconnection to other modules.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">Additional options include:</p>

           <ul style=" margin-left: 30px;">
               <li>
                   <p style="margin: 0px;">Temperature, relative humidity, CO<sub>2</sub>, NO<sub>2</sub>, , or O<sub>2</sub> control, as isolator incubator</p>
               </li>
               <li>
                   <p style="margin: 0px;">Microscope integration</p>
               </li>
               <li>
                   <p style="margin: 0px;">BioVap™ biodecontamination system</p>
               </li>
               <li>
                   <p style="margin: 0px;">Viable and non-viable particle counter integration</p>
               </li>
               <li>
                   <p style="margin: 0px;">Glove Leak Tester</p>
               </li>
               <li>
                   <p style="margin: 0px;">Flexible visors</p>
               </li>
               <li>
                   <p style="margin: 0px;">Ability to operate as anaerobic glovebox</p>
               </li>
           </ul>


           <h4 class="text-center" style="     margin-top: 50px;">The Project</h4>
           <div class="paddle-bottom"></div>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">Esco was recently commissioned to manufacture a <strong>Cell Processing Isolator(CPI)</strong> for a national biopharmaceutical institution: a contract manufacturing facility that aims to produce clinical research grade biopharmaceuticals. This model was intended specifically for virus seed production.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">The main challenge for this project was to produce an isolator system fully integrated with a 58-L CO<sub>2</sub> incubator, a refrigerated centrifuge, and a waste disposal port; while maintaining a compact sized unit to easily fit inside a small facility.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">A cGMP-compliant design was of great importance to the client, as it was part of the facility’s innovation platform. </p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">The commissioned CPI unit was made entirely from stainless steel, with SS 316 L interior and SS 304 exterior. It was designed with a flat base with easy access doors made from laminated tempered glass. Its glove ports were made from polypropylene fitted with CSM gloves. </p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">It is capable of carrying out pressure decay tests, biodecontamination, as well as auto-compensation, enabling the unit to adjust and maintain the required negative pressure environment. Through this mechanism, It ensures process containment and operator protection in cases of breach in the system.</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">It is capable of carrying out pressure decay tests, biodecontamination, as well as auto-compensation, enabling the unit to adjust and maintain the required negative pressure environment. Through this mechanism, It ensures process containment and operator protection in cases of breach in the system.</p>

           <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/CPI-installed-in-the-facility-min.png">

           <p style="margin-top: 15px; font-size: 0.9em !important;" class="text-center"><strong>Figure 3.</strong> CPI installed in the facility</p>

           <p style="margin-top: 15px; font-size: 1.1em !important;" class="text-justify">Additional features include:</p>


           <ul style=" margin-left: 30px;">
               <li>
                   <p><strong>Pass-through Chamber:</strong> allows quick access and easy transfer without breaking chamber containment and sterility.</p>
               </li>
               <li>
                   <p><strong>BioVap™ biodecontamination system:</strong> hydrogen peroxide-based biodecontamination system	</p></li>
               <li>
                   <p><strong>Airborne and viable particle counters:</strong> allows airborne monitoring of chamber cleanliness</p>
               </li>
               <li>
                   <p><strong>Built-in stainless steel refrigerated centrifuge:</strong> operates through foot switches for start/stop operation and for deflating the inflatable sealed cover.</p>
               </li>
           </ul>

           <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/cell-processing-isolators-3D-image-min.jpg">

           <p style="margin-top: 25px; font-size: 0.9em !important;" class="text-center"><strong>Figure 4.</strong> Cell Processing Isolator’s 3D Image</p>


           <h4 class="text-center" style=" margin-top: 50px">Cell Processing Isolator Project Timeline</h4>
           <div class="paddle-bottom"></div>

           <div class="row product-images-set" style=" margin-top: 30px;">
               <div class="col-md-5 col-xs-12 offset-xs-0 offset-md-1">
                   <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/aseptic-containment-isolators-acti-min.png">
                   <p class="text-center" style="margin-bottom: 0px;"><strong>Aseptic Containment Isolators (ACTI)</strong></p>
                   <p class="text-center">2016-2017</p>
               </div>
               <div class="col-md-5 col-xs-12">
                   <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/advanced-processing-platform-isolators-appi-min.jpg">
                   <p class="text-center" style="margin-bottom: 0px;"><strong>Advanced Processing Platform Isolators (APPI)</strong></p>
                   <p class="text-center">2018</p>
               </div>
           </div>
           <div class="row product-images-set" style="">
               <div class="col-md-5 col-xs-12 offset-md-1 offset-xs-0">
                   <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/cell-processing-isolators-CPI-min.jpg">
                   <p class="text-center" style="margin-bottom: 0px;"><strong>Cell Processing Isolators (CPI)</strong></p>
                   <p class="text-center">2019</p>
               </div>

               <div class="col-md-5 col-xs-12">
                   <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/cell-processing-isolators-CPI2-min.jpg">
                   <p class="text-center" style="margin-bottom: 0px;"><strong>Cell Processing Isolators (CPI)</strong></p>
                   <p class="text-center">2020</p>
               </div>
           </div>
           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">Over the past few years, Esco has had the opportunity to handle numerous isolator projects for cell processing application. It was only recently that the company decided to create a new line of isolators specifically for bioprocessing under the category of <strong>Cell Processing Isolators.</strong></p>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">Equipment customization and integration is made easier due to Esco being a world leader in manufacturing life science equipment.</p>
           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify"><strong><a href="http://www.vaccixcell.com/">Esco VacciXcell</a></strong>, the bioprocessing division of the company, also has its own bioreactor systems, that makes customization and equipment integration even easier to accommodate.</p>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">For more information about CPI, please visit <strong><a href="/">www.escopharma.com</a></strong> </p>



           <h4 class="text-center" style="     margin-top: 50px;">Esco VacciXcell Bioreactors</h4>
           <div class="paddle-bottom"></div>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">There are different types of bioreactors available in the market and choosing the right one is crucial in the success of your culturing process. Choosing the right bioreactor system for your application highly depends on the type of cells to be produced, the desired product, the process of the cell culture, and the product density. </p>
           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">Esco VacciXcell offers different types of bioreactors, specializing in adherent cell culture linearly scalable from laboratory to production scale.</p>

           <div class="row product-images-set">
               <div class="col-md-4 col-xs-12">
                   <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/CelXRocker-min.jpg">
                   <p class="text-center"><strong>CelXRocker</strong></p>
                   <p style="line-height: 22px !important;" class="text-center">Process Optimization of Cells in <br>BioNOC™ II Carriers</p>
               </div>
               <div class="col-md-4 col-xs-12">
                   <img class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/CelCradle-min.png">
                   <p class="text-center"><strong>CelCradle™</strong></p>
                   <p style="line-height: 22px !important;" class="text-center">Cradle for High Adherent <br> Cell Density</p>
               </div>
               <div class="col-md-4 col-xs-12">
                   <img style="max-height: 200px;" class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/CelCradleX-min.png">
                   <p class="text-center"><strong>CelCradle™X</strong></p>
                   <p style="line-height: 22px !important;" class="text-center">Closed Automated Single-Use <br> cGMP Bioreactor</p>
               </div>
           </div>

           <div class="row product-images-set">
               <div class="col-md-5 col-xs-12 offset-md-1 offset-xs-0">
                   <img style="max-height: 200px" class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/tideXcell-min.jpg">
                   <p class="text-center"><strong>TideXcell™</strong></p>
                   <p style="line-height: 22px !important;" class="text-center">The Gentle Giant of Adherent Bioprocessing</p>
               </div>

               <div class="col-md-5 col-xs-12">
                   <img style="max-height: 300px;" class="img-responsive secondary-image" src="http://www.escoglobal.com/images/upload/the-vacciXcell-hybrid-bioreactor-min.png">
                   <p class="text-center"><strong>The VacciXcell Hybrid Bioreactor</strong></p>
                   <p style="line-height: 22px !important;" class="text-center">Versatile Bioreactor</p>
               </div>
           </div>

           <p style="margin-top: 25px; font-size: 1.1em !important;" class="text-justify">For more information about bioreactors, please visit <strong><a href="http://www.vaccixcell.com/">www.vaccixcell.com</a></strong></p>

           <p class="text-center" style="margin-top: 30px; "><a target="_blank" rel="noopener noreferrer" style=" padding:10px; background: rgb(164, 204, 131);" class="btn-primary" href="http://www.escoglobal.com/products/download/October%20-%20CPI%20White%20Paper%20(Final%20Version%20Esco%20Pharma).pdf">Download PDF file </a></p>



           <style type="text/css">

               ul.check_li {
                 list-style: none;
                 padding: 0 0 0 24px;
                 line-height: 26px;
                 margin-left: 30px;
               }
               ul.check_li li{
                 list-style: none;
               }
               ul.check_li li.check_li_1 p {
                   line-height: 22px !important;
               }

               ul.check_li li.check_li_1:before {
                   font-weight: bold;
                   content: "\2713";
                   float: left;
                   margin-left: -24px
               }
               img.secondary-image{
                   position: relative;
                   left: 50%;
                   transform: translateX(-50%);
               }
               .article-video{
                   width: 70% !important;
                   margin: auto !important;
               }

               .paddle-bottom{
                   position: relative;
                   height: 3px;
                   width: 36px;
                   background: rgb(164, 204, 131);
                   margin: auto;
                   top: -2px;
               }

               .product-images-set{
                    display: flex;
                    align-items: flex-end !important;
               }

           /* Extra small devices (phones, 600px and down) */
           @media only screen and (max-width: 600px) {
               img.secondary-image{
                   /*width: 100% !important;*/
               }
               .article-video{
                   width: 100% !important;
               }
               .product-images-set{
                    display: block;
               }
           }

           </style>
           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Esco GB Ltd, Cell Processing Isolator, Highly Modular and Adaptable Solution',
           'meta_description' => 'A Cell Processing Isolator (CPI) is an integrated system that combines several types of equipment into one isolation technology.',
            'created_at' => '2019-10-23 10:03:26'],



           ['news_category_id' => '1',
           'old_id' => '177',
		   'slug' => 'the-all-in-one-solution-for-every-cell-processing-need',
           'title' => 'The All-in-One Solution For Every Cell Processing Need',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'the-all-in-one-solution-for-every-cell-processing-need-new-min.jpg',
           'banner_thumb' => 'the-all-in-one-solution-for-every-cell-processing-need-new-thumb-min.jpg',
           'description' => 'A Cell Processing Isolator (CPI) is an integrated system that combines several types of equipment into one isolated solution. General bioprocessing equipment such as CO2 incubator and centrifuge can be integrated in the isolator.',
           'content' => '
           <p class="text-justify">
                A <strong>Cell Processing Isolator (CPI)</strong> is an integrated system that
                combines several types of equipment into one isolated solution. General
                bioprocessing equipment such as CO<sub>2</sub> incubator and centrifuge can be
                integrated in the isolator. These equipment are usually used in a
                virus/vaccine production facility or cell therapy applications for advanced
                therapy medicinal products (ATMP).
            </p>

            <p class="text-justify">
                As a cGMP isolator and an aseptic containment system, it is pressure tested
                and is capable of biodecontamination procedure. The CPI is designed to isolate
                the process to ensure operator safety, without compromising the product
                quality. It also provides the sterile environment (ISO Class 5/Grade A) that
                is required in carrying out aseptic processes.
            </p>

            <p class="text-justify">
                It is easily customizable to meet the requirements of each client. Conversion
                of CPI into an isolator incubator is also available with temperature, relative
                humidity, CO<sub>2</sub> , N<sub>2</sub> , and suppressed O<sub>2</sub>
                control.
            </p>

            <p class="text-justify">
                Other options include temperature and CO<sub>2</sub> control, Esco cell
                therapy equipment, or as a stand alone isolator with third party equipment.
            </p>

            <p class="text-center" style="margin-top: 30px;">
                <a class="btn pharma-btn" href="http://www.escoglobal.com/products/download/October - CPI Product Introduction ver3.pdf">Download PDF file
                </a>
            </p>
            <!--  -->

           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Esco GB Ltd, Innovative Containment Isolator,  Cell Processing Isolator (CPI)',
           'meta_description' => 'A Cell Processing Isolator (CPI) is an integrated system that combines several types of equipment into one isolated solution. General bioprocessing equipment such as CO2 incubator and centrifuge can be integrated in the isolator.',
            'created_at' => '2019-10-09 10:03:26'],


           ['news_category_id' => '1',
           'old_id' => '176',
		   'slug' => 'paving-the-way-for-continuous-manufacturing',
           'title' => 'Paving the way for Continuous Manufacturing',
		   'author' => 'Esco Healthcare',
		   'banner_img' => 'paving-way-min.jpg',
           'banner_thumb' => 'paving-way-thumb-min.jpg',
           'description' => 'The implementation of continuous manufacturing guarantees greater industrial efficiency and ultimately, the promotion of the nation’s overall health through the provision of affordable high quality medications.',
           'content' => '
           <p class="text-justify">
                Pharmaceutical manufacturing involves complex and state-of-the-art process
                systems that have individually undergone strict validation tests for the
                assurance of repeatedly producing high quality products.
            </p>

            <p class="text-justify">
                For more than half a century, pharmaceutical companies have been using an
                established industrial principle commonly known as ’batch manufacturing’,
                which involves the use of an inconvenient number of individual equipment for
                each process. In fact, these units are so multifaceted that some of them are
                housed in an entirely separate Grade A environment; leaving a very large
                footprint. Running and maintaining these systems are highly expensive and not
                flexible enough to meet the fluctuating market demands.
            </p>

            <p class="text-justify">
                Moreover, since this type of manufacturing is comprised of numerous discrete
                steps, the potential for human error is relatively high. This is due to the
                frequency of manually stopping each step, transporting the processed materials
                to another facility or equipment, and amidst it all, conducting quality
                control tests.
            </p>

            <p class="text-justify">
                To combat problems arising from this traditional way of manufacturing
                pharmaceuticals, agencies such as the US Food and Drug Administration (USFDA),
                have taken advantage of the recent technological advances in the field.
            </p>

            <p class="text-justify">
                <br>
                Today, the concept of a pharmaceutical manufacturing industry with a smaller
                footprint, yet a much bigger yield and profit, is entirely possible through
                continuous manufacturing.
            </p>

            <p>&nbsp;</p>
            <p class="text-center">
                <img src="/images/upload/diagram-min.jpg" alt="Conceptual framework of batch and continuous manufacturing of pharmaceuticals" class="img-responsive">
                <b>Figure 1.</b><i>
                    Conceptual framework of batch and continuous manufacturing of
                    pharmaceuticals.</i>
            </p>
            <p>&nbsp;</p>

            <p class="text-justify">
                <b>Continuous manufacturing (CM)</b> refers to the concept of connected
                production; taking advantage of automation technology to link all operations
                together. This eliminates the possibility of delays in-between steps and
                allows the processed materials to move non-stop within the same facility.
            </p>

            <p class="text-justify">
                All the raw materials and other necessary manufacturing components are entered
                into a fully integrated assembly line; making it fast, flexible, and
                cost-effective.
            </p>

            <p class="text-justify">
                Additionally, since the healthcare market is rapidly evolving, the advanced
                and modular designs of CM technologies can easily adapt via fast component
                upgrades, allowing it to account for higher demands.
            </p>

            <p class="text-justify">
                Materials produced via continuous manufacturing is still subject to the same
                standards as that of a traditionally manufactured one. However, since CM
                utilizes modernized technologies, quality monitoring is automated and much
                more frequent; ensuring that all possible equipment issues will be detected
                and resolved before a failure even arises. Machines are notorious for wear and
                tear issues, so this monitoring rate is essential not only to protect product
                integrity, but also equipment longevity.
            </p>

            <p class="text-justify">
                The implementation of continuous manufacturing guarantees greater industrial
                efficiency and ultimately, the promotion of the nation’s overall health
                through the provision of affordable high quality medications.
            </p>

            <p class="text-justify"><b>Achieving Continuous Manufacturing </b></p>

            <p class="text-justify">
                The concept of change in the pharmaceutical industry is synonymous to an
                insane amount of expenses. This is because even before a single step or before
                an equipment is incorporated in a manufacturing protocol, it needs to undergo
                a series of validation tests <i>(see </i><a href="http://escopharma.com/newsSubPage.php?newsId=166"><i>Quality Makes Pharmaceutical Industries</i></a><i>)</i> to prove its soundness. This is the primary reason why there are
                still some uncertainties regarding continuous manufacturing.
            </p>

            <p class="text-justify">
                However, industries today should stop looking at the short-term repercussions
                and start focusing on the bigger picture! Continuous manufacturing can cause
                quite a dent on the finances, but its flexibility and smaller footprint
                promises a decline in maintenance costs and an increase in industrial profit.
            </p>

            <br>
            <p class="text-justify">
                Esco Pharma provides specialist services, equipment packages, and process
                solutions from our core platform products to cater the specific needs of each
                client. We are ready to meet your process needs and supply end-to-end
                solutions.
            </p>

            <p>&nbsp;</p>
            <p class="text-center">
                <img src="/images/upload/formulation-filling-line-isolator-min.png" alt="Formulation filling line isolator" class="img-responsive">
                <b>Figure 2.</b><i> Formulation and filling line isolator.</i>
            </p>
            <p>&nbsp;</p>

            <p class="text-justify">
                Prime example is Esco Pharma’s prized isolation technology which can be
                configured at either positive or negative pressure with a recirculating or
                total exhaust unidirectional or turbulent airflow regime; depending on the
                process and the material to be handled by the clients. The isolator can house
                a whole filling line system for the production of sterile liquid and/or
                semi-solid pharmaceuticals. For materials with high
                <a href="/hazard-sub-page.php?hazardId=53&amp;pg=hzd">occupational exposure bands (OEB)</a>, the necessary tools and equipment for powder handling can also be fully
                integrated inside. The components for the construction of this technology are
                modular and can be upgraded easily, very unlike traditional manufacturing.
            </p>

            <p class="text-justify">
                Esco is equipped with the experience and the know-how to successfully
                integrate modular and innovative manufacturing technologies into your existing
                facilities; ensuring a safe and cost-effective way of advancing your
                processes.
            </p>

            <p class="text-justify">
                At Esco Pharma, we understand that each industry has its own unique
                requirements, and our products can be configured to meet each of them head-on.
            </p>

            <p class="text-justify">
                Choose from
                <a href="/products.php">Esco Pharma’s wide range of innovative core technologies</a>
                and start your journey of modernized manufacturing with an established
                industrial partner.
            </p>

            <p>&nbsp;</p>
            <p class="text-justify"><b>REFERENCES:</b></p>

            <p class="text-justify">
                1. 4 Steps Toward End-To-End Connected Manufacturing. (2019). Retrieved 1
                October 2019, from
                <a href="https://www.pharmaceuticalonline.com/doc/steps-toward-end-to-end-connected-manufacturing-0001">https://www.pharmaceuticalonline.com/doc/steps-toward-end-to-end-connected-manufacturing-0001</a>
            </p>

            <p class="text-justify">
                <b>2. </b>FDA Perspective on Continuous Manufacturing. (2019). Retrieved 1
                October 2019, from https://www.fda.gov/media/85366/download
            </p>

            <p class="text-justify">
                3. Modernizing the Way Drugs Are Made: A Transition to Continuous. (2019).
                Retrieved 1 October 2019, from
                <a href="https://www.fda.gov/drugs/news-events-human-drugs/modernizing-way-drugs-are-made-transition-continuous-manufacturing">https://www.fda.gov/drugs/news-events-human-drugs/modernizing-way-drugs-are-made-transition-continuous-manufacturing</a>
            </p>

            <p class="text-justify">
                4. New FDA Guideline: Quality Aspects for Continuous Manufacturing - ECA
                Academy. (2019). Retrieved 1 October 2019, from
                <a href="https://www.gmp-compliance.org/gmp-news/new-fda-guideline-quality-aspects-for-continuous-manufacturing">https://www.gmp-compliance.org/gmp-news/new-fda-guideline-quality-aspects-for-continuous-manufacturing</a>
            </p>

            <p>&nbsp;</p>
            <p class="text-justify"><strong>About our BRANDS</strong></p>

            <p class="text-justify">
                Esco Pharma provides specialist services, equipment packages, and process
                solutions from our core platform products leading to improved operator
                protection, reduction of cross contamination, and more efficient processing,
                thereby directly and indirectly advancing occupational health and human
                healthcare.
            </p>
            <p>&nbsp;</p>
            <p class="text-justify"><strong>About Esco Pharma</strong></p>

            <p class="text-justify">
                Esco Pharma’s largest global network of localized application specialists and
                service offices provides faster response and local service translating into
                more competitive costs on maintenance, and shorter project life cycles.
            </p>

            <p class="text-justify">
                Esco provides standardized platforms with inbuilt configurations without
                constraints on operational parameters. This enables pharmaceuticals,
                nutraceuticals, and cosmeceuticals to comply with international standards for
                occupational health and safety.
            </p>

           ',
           'is_activated' => '1',
           'is_shareable' => '1',
		   'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Pharmaceutical manufacturing, Continuous manufacturing (CM), Formulation and filling line isolator, occupational exposure bands (OEB)',
           'meta_description' => 'The implementation of continuous manufacturing guarantees greater industrial efficiency and ultimately, the promotion of the nation’s overall health through the provision of affordable high quality medications.',
            'created_at' => '2019-10-08 15:53:12'],


            ['news_category_id' => '3',
            'old_id' => '173',
            'slug' => 'esco-healthcare-a-three-year-show-stopper-for-ispe-events',
            'title' => 'Esco Healthcare: A Three-Year Show-Stopper for ISPE Events!',
            'author' => 'Esco Healthcare',
            'banner_img' => 'esco-healthcare-a-three-year-show-stopper-for-ISPE-events-min.jpg',
            'banner_thumb' => 'esco-healthcare-a-three-year-show-stopper-for-ISPE-events-thumb-min.jpg',
            'description' => 'Esco Healthcare finished strongly during the two-day exhibit of the International Society of Pharmaceutical Engineering (ISPE) at Suntec International Convention and Exhibition Centre in Singapore, last Aug. 22-23.',
            'content' => '
            <p class="text-justify">Esco Healthcare finished strongly during the two-day exhibit of the International Society of Pharmaceutical Engineering (ISPE) at Suntec International Convention and Exhibition Centre in Singapore, last Aug. 22-23.</p>

            <p class="text-justify" style="margin-top: 20px;">What’s more: Esco Healthcare won an award called, "Friend of ISPE", acknowledging the company as a very distinguished exhibitor and colleague of the organization.</p>

            <p class="text-justify" style="margin-top: 20px;">Esco showcased its innovative technologies, encompassing turnkey solutions from upstream to downstream processing; which includes:</p>


            <ul style="padding-left: 40px !important;">
                <li>
                    <p class="text-justify"><a href="/newsSubPage.php?newsId=175"><strong>HPI-G3-IS-4G:</strong></a> Isoclean<sup>®</sup> Healthcare Platform Isolator with Inflatable Seals, the newest addition to Esco’s isolation technology!</p>
                 </li>
                <li>
                    <p class="text-justify"><a href="http://www.escoglobal.com/product/class-ii-type-a2-biological-safety-cabinets/class-ii-type-a2-biological-safety-cabinets-e-series/la2-e/"><strong>LA2-3A8-G4:</strong></a> Labculture<sup>®</sup> Class II, Type A2 Biological Safety Cabinet with Esco HMI</p>
                 </li>

                <li>
                    <p class="text-justify"><a href="http://www.escoglobal.com/product/co%E2%82%82-incubators/celculture-co%E2%82%82-incubators/ccl/"><strong>CCL-170B-8:</strong></a> CelCulture<sup>®</sup> CO2 Incubator</p>
                 </li>

                <li>
                    <p class="text-justify"><a href="http://www.vaccixcell.com/products-and-brands/celcradle/"><strong>Celcradle™:</strong></a> Cradle for High Cell Density</p>
                 </li>

            </ul>


            <img src="/images/upload/esco-turnkey-solutions-that-were-showcased-at-the-ISPE-2019-event-new2-min-min.jpg" alt="image" class="img-responsive" style="margin: auto; margin-top: 20px; width: 100%">
            <p class="text-center" style="margin-top: 10px;"><strong>Figure 1.</strong> <em>Esco turnkey solutions that were showcased at the ISPE 2019 event.</em></p>


            <p class="text-justify" style="margin-top: 20px;">Booth 311 garnered numerous visitors from all over the world, not only due to the display of equipment, but also with its show-stopping game: "Wheel You Spin?: Spin it ’til you win it!" that became one of the show’s highlights. It is basically a game of luck, courage, and strategy - all three tools necessary to face and win the challenges of the pharmaceutical industry today! Lucky winners got a range of prizes from Nets Pay cards, Capita vouchers, to Esco mascots and timers.</p>


            <img src="/images/upload/the-team-ecstatically-educates-all-visitors-min.jpg" alt="image" class="img-responsive" style="margin-top: 20px;">
            <p class="text-center" style="margin-top: 10px;"><strong>Figure 2.</strong> <em>The team ecstatically educates all visitors on the various turnkey solutions that Esco offer.</em></p>



            <p class="text-justify" style="margin-top: 20px;">The experienced team of Esco Healthcare welcomed and inspired hundreds of professional minds, providing them the most suitable solutions for their most critical processes. </p>

            <p class="text-justify" style="margin-top: 20px;">ISPE 2019 hosted a thousand professionals from 25 countries in this year’s event; allowing them all to mingle, generate networks, and share innovative ideas that can shape the future of the pharmaceutical arena.</p>

            <p class="text-justify" style="margin-top: 20px;">Our company had an amazing exhibit! We thank our many visitors and do hope for numerous collaborations in the near future!</p>

            <p class="text-justify" style="margin-top: 20px;">Did not get to join ISPE Singapore 2019? Checkout the video and get a glimpse of Esco Healthcare’s fun and engaging booth!</p>

            <div class="embed-responsive embed-responsive-16by9 article-video" style="margin-top: 25px !important;"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/m1z5Q_ddLZk"></iframe></div>

            <p class="text-justify" style="margin-top: 20px;">Makes you want to meet us as well right? Grab the opportunity and contact the <a href="http://www.escoglobal.com/corporate.php"><strong>Esco office</strong></a> near you today!</p>


            <p>&nbsp;</p>


            <p><strong>About our BRANDS</strong></p>
            <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

            <p>&nbsp;</p>

            <p><strong>About Esco Pharma</strong></p>
            <p class="text-justify">Esco Pharma’s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

            <p class="text-justify" "="">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>


            <style type="text/css">

                img.secondary-image{
                    width: 70% !important;
                }
                .article-video{
                    width: 85% !important;
                    margin: auto !important;
                }

            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                img.secondary-image{
                    width: 100% !important;
                }
                .article-video{
                    width: 100% !important;
                }

            }
            </style>

            ',
            'is_activated' => '1',
            'is_shareable' => '1',
            'meta_keywords' => 'Esco Pharma, Esco Lifesciences,International Society of Pharmaceutical Engineering (ISPE) 2019, CelCulture® CO2 Incubator, Cradle,Isoclean® Healthcare Platform Isolator,ISPE 2019 event',
            'meta_description' => 'Esco Healthcare finished strongly during the two-day exhibit of the International Society of Pharmaceutical Engineering (ISPE) at Suntec International Convention and Exhibition Centre in Singapore, last Aug. 22-23.',
             'created_at' => '2019-09-06 03:00:00'],



             ['news_category_id' => '1',
            'old_id' => '174',
             'slug' => 'esco-glassware-hoods-your-premium-solution-for-glassware-processes',
             'title' => 'Esco Glassware Hoods: Your Premium Solution for Glassware Processes',
             'author' => 'Esco Healthcare',
             'banner_img' => 'esco-glassware-hoods-header-min.jpg',
             'banner_thumb' => 'esco-glassware-hoods-header-thumb-min.jpg',
             'description' => 'Proper use of laboratory equipment is necessary to work safely with hazardous chemicals and processes. The maintenance and regular inspection of all laboratory apparatus are also vital, to prevent accidents linked with improper use of such equipment. Finding the right solution for the handling of apparatus and processes is currently needed, especially in start-up plants.',
             'content' => '
        <p class="text-justify ">
             Proper use of laboratory equipment is necessary to work safely with hazardous
             chemicals and processes. The maintenance and regular inspection of all
             laboratory apparatus are also vital, to prevent accidents linked with improper
             use of such equipment. Finding the right solution for the handling of
             apparatus and processes is currently needed, especially in start-up plants.
         </p>

         <p class="text-justify ">
             Esco Pharma is proud to introduce the premium solution for the protection of
             glassware processes. The Esco Glassware Hood (EGH) is the innovative solution
             for containing specialized equipment in a kilo lab, pilot plant, or research
             and development (R&amp;D) environment
         </p>

         <p class="text-justify ">
             Coined after "glassware reactors" and "fume hoods", glassware hoods are
             customizable units designed to contain glassware setups for batch reactions,
             distillation set-ups, and chemical syntheses; providing operator protection
             against fumes and spillages/breakages and safety protection from the explosive
             properties of fumes and/or vapors.
         </p>

         <p class="text-justify ">
             EGHs reduce the operator’s exposure to hazardous fumes, and vapors by diluting
             these using a large amount of uncontaminated air; and then drawn out of the
             equipment through the facility’s exhaust system. EGH can accommodate oversized
             apparatus even with widths of up to 16 feet such as bioreactors.
         </p>

         <p class="text-justify ">
             Common mistake that users usually make is the thought of glassware hoods to be
             the same with floor-mounted fume hoods. See below how they are differentiated:
         </p>

         <p>&nbsp;</p>
         <p class="text-center" style="font-size: 1.2em">
             <strong>The Differences Between Esco Glassware Hood (EGH) and Floor-Mounted Fume
                 Hood (EFF)</strong>
         </p>

         <img src="/images/upload/glassware-hoods-min.jpg" alt="glassware-hoods" class="img-responsive">

         <p>&nbsp;</p>
         <div class="table-responsive">
             <table class="table table-striped">
                 <tbody id="content__table" style="text-align: justify">
                     <tr>
                         <td class="td__equal">
                             Enclosure of laboratory chemical reactors for kilo lab or pilot plant
                             set-up
                         </td>
                         <td><b>Application</b></td>
                         <td class="td__equal">
                             Tall apparatus, large containers that require increased height area
                         </td>
                     </tr>
                     <tr>
                         <td>Operator, product, and environment protection</td>
                         <td><b>Protection</b></td>
                         <td>Operation protection only</td>
                     </tr>
                     <tr>
                         <td>
                             Internal widths are in increments of 0.8 and 1.0 m. More flexible for
                             adjusting dimensions as per client’s request.
                         </td>
                         <td><b>Dimensions</b></td>
                         <td>Nominal size ranging from 4 to 8 feet only.</td>
                     </tr>
                     <tr>
                         <td>
                             With options for: Stainless steel 316/304 Halar (ECTFE)
                             Electrogalvanized steel with ISOCIDETM white oven-baked epoxy powder
                             coating Combination
                         </td>
                         <td><b>Construction</b></td>
                         <td>
                             Electrogalvanized steel with epoxy-polyester hybrid ISOCIDETM powder
                             coating
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Through HVAC system Operational HEPA/ULPA filters, Carbon filters
                         </td>
                         <td><b>Filtration</b></td>
                         <td>Ducted Optional filter integration</td>
                     </tr>
                     <tr>
                         <td>Highly durable heavy duty left and right sliding doors</td>
                         <td><b>Door Design</b></td>
                         <td>Light duty vertical sliding</td>
                     </tr>
                 </tbody>
             </table>
         </div>

         <p class="text-justify">
             Esco has always been dedicated to its promise of delivering innovative
             customized solutions to meet developing markets and dynamic regulatory
             requirements. <br>
             Don’t hesitate to know more about our state-of-the-art products!
             <a href="/">Click here to learn more!</a>
         </p>

         <p>&nbsp;</p>
         <p><strong>About our BRANDS</strong></p>
         <p class="text-justify ">
             Esco Pharma provides specialist services, equipment packages, and process
             solutions from our core platform products leading to improved operator
             protection, reduction of cross contamination, and more efficient processing,
             thereby directly and indirectly advancing occupational health and human
             healthcare.
         </p>
         <p>&nbsp;</p>

         <p><strong>About Esco Pharma</strong></p>
         <p class="text-justify ">
             Esco Pharma’s largest global network of localized application specialists and
             service offices provides faster response and local service translating into
             more competitive costs on maintenance, and shorter project life cycles.
         </p>

         <p class="text-justify ">
             Esco provides standardized platforms with inbuilt configurations without
             constraints on operational parameters. This enables pharmaceuticals,
             nutraceuticals, and cosmeceuticals to comply with international standards for
             occupational health and safety.
         </p>
         <p>&nbsp;</p>

         <style>
             .td__equal {
                 width: 50%;
             }

             #content__table tr:nth-child(even),
             #content__table tr td:nth-child(even),
             #content__table tr td {
                 text-align: center;
                 vertical-align: middle;
             }

             #content__table tr:nth-child(even) {
                 background-color: #a4ccb361;
             }

             #content__table tr td:nth-child(even) {
                 padding: 0em 5em;
             }
         </style>
             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Esco Glassware Hood (EGH), Floor-Mounted Fume Hood (EFF)',
             'meta_description' => 'Proper use of laboratory equipment is necessary to work safely with hazardous chemicals and processes. The maintenance and regular inspection of all laboratory apparatus are also vital, to prevent accidents linked with improper use of such equipment. Finding the right solution for the handling of apparatus and processes is currently needed, especially in start-up plants.',
              'created_at' => '2019-09-06 03:00:00'],




              ['news_category_id' => '2',
              'old_id' => '171',
              'slug' => 'esco-gb-ltd-provides-a-sterility-testing-isolator-to-a-leading-global-pharmaceutical-company-in-europe',
              'title' => 'Esco GB Ltd Provides a Sterility Testing Isolator to a Leading Global Pharmaceutical Company in Europe',
              'author' => 'Esco Healthcare',
              'banner_img' => 'esco-gb-ltd-provides-a-sterility-testing-isolator-to-a-leading-global-pharmaceutical-company-in-europe.jpg',
              'banner_thumb' => 'esco-gb-ltd-provides-a-sterility-testing-isolator-to-a-leading-global-pharmaceutical-company-in-europe-thumb.jpg',
              'description' => 'Esco’s range of isolators suitable for sterility testing includes the Containment Barrier Isolator (CBI), Aseptic Containment Isolator (ACTI), and the General Processing Platform Isolator (GPPI). The GPPI has been recommended for this client.',
              'content' => '

                    <p class="text-justify primary">
                    Esco’s range of isolators suitable for sterility testing includes the
                    Containment Barrier Isolator (CBI), Aseptic Containment Isolator (ACTI), and
                    the General Processing Platform Isolator (GPPI). The GPPI has been recommended
                    for this client.
                </p>

                <p class="text-justify secondary">
                    The GPPI features a unidirectional laminar airflow, user selectable positive
                    or negative chamber pressures, single pass or recirculating airflow regimes,
                    and a safe change filter design. This unit has been designed to have
                    inflatable seals. Overall, it is constructed for handling potent and
                    non-potent aseptic products; making it the best fit for the client’s
                    requirements.
                </p>

                <p class="text-justify secondary">
                    An essential feature of this isolator is its built-in hydrogen peroxide (H<sub>2</sub>O<sub>2</sub> ) bio- decontamination system which can provide a 6 log reduction in viable
                    contaminants in a reduced time cycle. Additionally, it allows the individual
                    processing of either the main chamber or the pass through chamber (PTC); thus,
                    enabling batch processing in the main chamber while sterilizing the next one
                    in the PTC.
                </p>

                <p class="text-justify secondary">
                    With Esco, increasing your efficiency is our agenda!
                </p>

                <p class="text-justify secondary">
                    For more information please visit <a href="">our website.</a>
                </p>
                <center><a href="http://www.escoglobal.com/products/download/Esco-GB-GPPI.pdf" targer="_blank" class="pharma-btn text-center mb-5">Download PDF file</a></center>
                <style type="text/css">
                    img.secondary-image {
                        width: 80% !important;
                        position: relative;
                        left: 50%;
                        transform: translateX(-50%);
                    }
                    .article-video {
                        width: 70% !important;
                        margin: auto !important;
                    }


                    a.btn-primary,
                    a.btn-success {
                        padding: 10px;
                    }

                    /* Extra small devices (phones, 600px and down) */
                    @media only screen and (max-width: 600px) {
                        img.secondary-image {
                            width: 100% !important;
                        }
                        .article-video {
                            width: 100% !important;
                        }
                    }
                </style>
              ',
              'is_activated' => '1',
              'is_shareable' => '1',
              'meta_keywords' => 'Esco Pharma, Esco Lifesciences,General Processing Platform Isolator (GPPI),Containment Barrier Isolator (CBI),Aseptic Containment Isolator (ACTI)',
              'meta_description' => 'Esco’s range of isolators suitable for sterility testing includes the Containment Barrier Isolator (CBI), Aseptic Containment Isolator (ACTI), and the General Processing Platform Isolator (GPPI). The GPPI has been recommended for this client.',
               'created_at' => '2019-08-22 03:00:00'],


               ['news_category_id' => '2',
               'old_id' => '172',
               'slug' => 'rapid-vial-tray-decontamination-chamber-bio-pass',
               'title' => 'Rapid Vial Tray Decontamination Chamber (BioPass™)',
               'author' => 'Esco Healthcare',
               'banner_img' => 'esco-biopass.jpg',
               'banner_thumb' => 'esco-biopass-thumb.jpg',
               'description' => 'Esco was recently commissioned to customise a BioPass™ unit for a large-scale vaccine manufacturer. The project faced a number of challenges.',
               'content' => '
               <h4 class="text-center primary mt-3 mb-2">The Project</h4>
               <div class="paddle-bottom"></div>
               <p class="text-justify secondary">
                   Esco was recently commissioned to customise a
                   <a
                       href="/product-details.php?productId=42&amp;pg=pdt"
                       >BioPass&trade;
                   </a>
                   unit for a large-scale vaccine manufacturer. The project faced a number of
                   challenges.
               </p>

               <p class="text-justify secondary">
                   The main technical challenge for this project is to produce a larger system
                   than previously manufactured, and to design this in a way that will allow
                   disassembly, so it can be installed within a narrow route and space.
               </p>

               <p class="text-justify secondary">
                   Efficient and lean manufacturing practices are of great importance to the
                   client.
               </p>

               <p class="text-justify secondary">
                   The larger unit is integrated with a decontamination system that eliminates
                   further delay for later stage processes.
               </p>

               <p class="text-justify secondary">
                   The final product is a 2.0 m x 1.5 m x 2.0 m (W X D X H) main processing
                   chamber that can accommodate two trolleys heavily loaded with over-bagged vial
                   tubs during each decontamination cycle.
               </p>

               <p class="text-justify secondary">
                   Although the main chamber was required to be larger, restrictions were made on
                   the overall available space on the client&rsquo;s facility. The addition of
                   features whilst restricting the space for the unit mechanics required
                   extensive design work.
               </p>

               <h4 class="text-center primary mt-4 mb-2">
                   Benefits of the Esco BioVap&trade; H<sub>2</sub>O<sub>2</sub>
                   Bio-decontamination System
               </h4>
               <div class="paddle-bottom"></div>
               <p class="text-justify secondary">
                   In contrast to the widely-used vaporized hydrogen peroxide, Esco BioVap&trade;
                   system utilizes an atomised mist of H<sub>2</sub>O<sub>2</sub>.
               </p>

               <p class="text-justify secondary">
                   The droplets dispersed themselves evenly across all surfaces within the
                   chamber. The sterilisation process begins once the agent comes in contact with
                   the surface.
               </p>

               <p class="text-justify secondary">
                   Beyond its 6 log reduction in contaminants, this unique process is also
                   unaffected by temperature or relative humidity.
               </p>

               <p class="text-justify secondary">
                   This means that it is not necessary to pre-condition the chamber prior to
                   gassing. With the Esco BioVap&trade;, process efficiency is increased.
               </p>

               <p class="text-justify secondary">
                   The system is linked with active visual indicators for clear display of the
                   unit&rsquo;s operating mode. There is a white light for normal operation, a
                   steady red light during the gassing process, and a flashing red light to
                   indicate that an alarm has been triggered.
               </p>

               <h4 class="text-center primary mt-4 mb-2">
                   Consequences of Enlarging the Process Chamber
               </h4>
               <div class="paddle-bottom"></div>
               <p class="text-justify secondary">
                   The first challenge Esco needed to address was the ability of the
                   H<sub>2</sub>O<sub>2</sub> to reach all areas, given the increased volume and
                   heavily loaded carts. This was remedied with the inclusion of an additional
                   nozzle to simultaneously vapourise each chamber&rsquo;s side. Settings were
                   also optimized to produce a finer mist size to increase distribution whilst
                   avoiding any droplet build- up.
               </p>

               <p class="text-justify secondary">
                   The rest of the decontamination system had enough capacity to supply the
                   hydrogen peroxide through dual nozzles without needing to add an additional
                   H<sub>2</sub>O<sub>2</sub> system.
               </p>

               <p class="text-justify secondary">
                   Furthermore, the client wanted to use the additional chamber space to process
                   more product with each decontamination cycle. As a consequence, the way in
                   which product was loaded into the machine, became a great concern. As the
                   trolleys are relatively large and heavy, it was important that the carts do
                   not have to be manoeuvred over a ramp or step. As Esco&rsquo;s BioPass mount
                   straight to the client floor without any entrenchment needed (no ramps or
                   steps), no manipulations to the standard entry design were needed.
               </p>

               <p class="mt-4">
                   <img
                       alt="esco-biopass-floor"
                       class="secondary-image"
                       src="/images/upload/esco-biopass-floor.png"
                       style="max-width: 35%;
               height: auto;"
                   />
               </p>

               <p class="text-center mb-4">
                   <strong>Figure 1.</strong> BioPass&trade; floor guides
               </p>

               <p class="text-justify primary">
                   Efficiently, Esco also utilised floor guides to aid the trolley through the
                   chamber; making it more user friendly while minimizing the risk of internal
                   damage, as heavy loads are moved through.
               </p>

               <p class="text-justify secondary">
                   Another client requirement is for the system to both run in once- through
                   (single pass) and recirculating airflow.
               </p>

               <p class="text-justify secondary">
                   Standard units offer once-through (single-pass) airflow only but the team was
                   able to install additional vents so the unit can be switched to recirculating
                   mode during its gassing cycle.
               </p>

               <p class="text-justify secondary">
                   The addition of vents was a simple procedure but was made complicated due to
                   the facility&rsquo;s limited space.
               </p>

               <p class="text-justify secondary">
                   However, one of the main advantages was that our integrated catalytic
                   converter does not require HVAC connections, rather, only power and compressed
                   air.
               </p>

               <p class="text-justify secondary">
                   Other features of the equipment are the HMI controller and electronic data
                   recording for 21 CFR Part 11 compliance. This has been reviewed by
                   Esco&rsquo;s in-house engineers to ensure that it only took up minimal space
                   without compromising on function or integrity.
               </p>

               <p class="text-justify secondary">
                   The numerous alterations required to our standard design resulted in a close
                   and collaborative relationship with our client. In providing them with the
                   customized equipment, we have demonstrated our adaptability for other projects
                   and machinery needs.
               </p>

               <p class="text-justify secondary">
                   We enjoyed the challenges and look forward to exceeding the expectations of
                   future clients.
               </p>

               <p class="text-justify secondary">
                   For more information please visit
                   <a href="">www.escopharma.com</a>
               </p>

               <p>
                   <img
                       alt="biopass-process-flow"
                       class="secondary-image"
                       src="/images/upload/esco-biopass-process-flow.png"
                   />
               </p>

               <p class="text-center primary">
                   <a
                       class="btn pharma-btn "
                       href="/pdf/brochures/Esco-GB-BioPass.pdf"
                       >Download PDF file
                   </a>
               </p>
               <!--  -->
               <style type="text/css">
                   img.secondary-image {
                       width: 80% !important;
                       position: relative;
                       left: 50%;
                       transform: translateX(-50%);
                   }
                   .paddle-bottom {
                        position: relative;
                        height: 2px;
                        width: 36px;
                        background: rgb(164, 204, 131);
                        margin: auto;
                        top: -2px;
                        margin-bottom: 1em;
                    }
                   .article-video {
                       width: 70% !important;
                       margin: auto !important;
                   }

                   a.btn-primary,
                   a.btn-success {
                       padding: 10px;
                   }

                   /* Extra small devices (phones, 600px and down) */
                   @media only screen and (max-width: 600px) {
                       img.secondary-image {
                           width: 100% !important;
                       }
                       .article-video {
                           width: 100% !important;
                       }
                   }
               </style>

               ',
               'is_activated' => '1',
               'is_shareable' => '1',
               'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Rapid Vial Tray,  Decontamination Chamber, BioPass™',
               'meta_description' => 'Esco was recently commissioned to customise a BioPass™ unit for a large-scale vaccine manufacturer. The project faced a number of challenges.',
                'created_at' => '2019-08-22 03:00:00'],


                ['news_category_id' => '2',
                'old_id' => '124',
                'slug' => 'raising-your-standards-with-esco-downflow-booth',
                'title' => 'Raising Your Standards with Esco Downflow Booth',
                'author' => 'Esco Healthcare',
                'banner_img' => 'downflow booth-newsbanner-min.jpg',
                'banner_thumb' => 'downflow booth-newsbanner-thumb-min.jpg',
                'description' => 'The fundamental principle of Downflow Booth is to provide operator protection during the handling of nuisance, toxic, or sensitizing products either in a powder or liquid form.',
                'content' => '
                <p style="text-align: justify;">The fundamental principle of <a href="/products/downflow-booths/3">Downflow Booth</a> is to provide operator protection during the handling of nuisance, toxic, or sensitizing products either in a powder or liquid form. Air is delivered to the Operator&rsquo;s Breathing Zone (OBZ) through the overhead HEPA filters, thus providing a clean and safe environment. Potential dust clouds are suppressed and removed into the exhaust filtration system.</p>
                    <p style="text-align: justify;">The operator carries out tasks in the high-velocity zone at the rear of the Booth so that dangerous dust will not rise into the breathing zone.</p>
                    <p><a href="/products/downflow-booths/3"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/product-images/thumb/down-flow-booths-min.png" width="40%" border="0" hspace="12" /></a></p>
                    <p><a href="/products/downflow-booths/3">Downflow Booths</a> are versatile equipment that can:</p>
                    <ul>
                    <li>Control exposure risk from hazardous materials for a wide variety of equipment and processes</li>
                    <li>Provide Operator Exposure Levels (OEL&rsquo;s) &le;100 &micro;g/m&sup3; over an 8-hour Time&nbsp;&nbsp; Weighted Average (TWA) when used with proper operator&nbsp; techniques</li>
                    <li>Reduce levels to &le;10 &mu;g/m&sup3; by incorporating High Containment Screens for the most potent products</li>
                    <li>Enhance cGMP practices during powder handling operations</li>
                    <li style="list-style: none;"></li>
                    </ul>
                    <p style="text-align: justify;">Esco <a href="/products/downflow-booths/3">Downflow Booths</a> can be widely used for many different applications to various industries such as providing contamination control for operators. Typical applications include dispensing, sub-division, milling and grinding, process pack off and charging. These are used in applications that require high-degree of flexibility for containment assurance. The standard open layout allows easy access for both personnel and materials entry. Although the standard Booth range offers a practical solution to most operations, customising the size and layout to suit other processes and product requirements can also be done. End user involvement is actively sought at all stages, from the design to the built of the equipment, creating a flexible and controlled facility to suit the changing work practices.</p>
                    <p style="text-align: justify;">Operator protection can also be acquired by customizing the layout of the booth and integrating high containment screens and personnel and material airlocks.</p>
                    <p style="text-align: justify;">High containment screens provide an actual physical barrier between the operator and the product. The operator works through large ergonomically positioned oval glove ports with Hypalon glass. High containment screen allows multi direction movement for the operators&rsquo; freedom to move left, right, front, back, and even rotate whilst being protected. From OEL of &le;100 &micro;g/m&sup3;, the integration of this screen gives as much as &le;10 &micro;g/m&sup3; over an 8-hour TWA.</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img1.png" width="30%" hspace="12" /></p>
                    <p align="center"><em>An example of a lay-out of a Downflow Booth (DFB) integrated with High Containment Screen.</em></p>
                    <p style="text-align: justify;">Aside from High Containment Screens, customized operator workstation can also be done. All powder handling operations are kept behind the door where the exhaust flow is the greatest. Operator is totally segregated from the product, thus, this arrangement is particularly useful for levels between 10 to 50 &micro;g/m&sup3;.</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img2.png" width="50%" hspace="12" /></p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img3.png" width="60%" hspace="12" /></p>
                    <p align="center"><em>The integration of split level workbench for powder subdivisions.</em></p>
                    <p align="center"><em>&nbsp;</em></p>
                    <p>Split level workbench is designed to suit applications which involve sub dividing products from larger drum to smaller container.</p>
                    <p>Airlock Booths are used to ensure that no contaminated air enters the booth from the warehouse area. Incoming air is controlled by positively charging the airlocks with HEPA-filtered air prior to entering the Booth at low level. With these control processes, it is possible to achieve between 10-50 &micro;g/m&sup3; OEL when sampling to defined SOP&rsquo;s.</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img4.png" width="50%" hspace="12" /></p>
                    <p align="center"><em>An example of a layout of a Downflow Booth (DFB) with airlock.</em></p>
                ',
                'is_activated' => '1',
                'is_shareable' => '1',
                'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Esco Downflow Booth, ',
                'meta_description' => 'Raising Your Standards with Esco Downflow Booth Airflow Containment on Its Best',
                 'created_at' => '2017-11-29 00:00:00'],


                 ['news_category_id' => '3',
                 'old_id' => '124',
                 'slug' => 'back-at-it-again-at-ispe-2019',
                 'title' => 'Back at it Again at ISPE 2019!',
                 'author' => 'Esco Healthcare',
                 'banner_img' => 'back-at-it-again-at-ISPE-2019-min.jpg',
                 'banner_thumb' => 'back-at-it-again-at-ISPE-2019-thumb-min.jpg',
                 'description' => 'Esco has been a mainstay at one of the most prestigious pharmaceutical events in the Asia: the International Society for Pharmaceutical Engineering (ISPE) Singapore Conference and Exhibition',
                 'content' => '
                 <p class="text-justify">Esco has been a mainstay at one of the most prestigious pharmaceutical events in the Asia:
                    the <a href="https://www.ispesingapore.org">International
                        Society for Pharmaceutical Engineering (ISPE)</a> Singapore Conference and Exhibition this coming
                    Aug.
                    21 -
                    23, at
                    Suntec, Singapore International Convention & Exhibition Centre.</p>

                <p class="text-justify">ISPE has one of the strongest presences in the pharmaceutical field, which is also supported
                    by
                    regulatory bodies and other various stakeholders and service providers. Last year, it broke a record of
                    more than 1000 participants - healthcare professionals, suppliers, clients, and the like - providing an
                    esteemed platform for learning and networking in the field.</p>

                <p class="text-justify">A lot of interested visitors have visited the Esco 2018 booth, as they have queued up to see
                    the
                    innovative applications of all displayed equipment. There was also a unique buzz wire game called &lsquo;BIBO&rsquo;
                    (Breath-In, Breath-Out) that drew in a lot of visitors and potential clients to the booth. It became one
                    of the highlights of attending the conference, which allowed the promotion of all Esco products and
                    services.</p>

                <p class="text-justify">The company is eager to return to ISPE this year to showcase the line of innovative
                    equipment ranging
                    from isolators, bioreactors, laboratory equipment, and so much more!</p>

                <p class="text-justify">Esco&rsquo;s team of experts will be available on the event to discuss containment needs and how
                    Esco can
                    provide safety right from <em>Discovery to Delivery</em>.</p>

                <p class="text-justify">Be sure to visit the booth at <strong>#311!</strong></p>

                <p class="text-justify">Click here to register at ISPE 2019: <a
                        href="https://www.ispesingapore.org/pricing/">https://www.ispesingapore.org/pricing/</a></p>

                <p class="text-justify mt-5"><strong>About our BRANDS</strong></p>


                <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our
                    core
                    platform products leading to improved operator protection, reduction of cross contamination, and more
                    efficient processing, thereby directly and indirectly advancing occupational health and human
                    healthcare.</p>



                <p class="text-justify mt-4"><strong>About Esco Pharma</strong></p>


                <p class="text-justify">
                    Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides
                    faster response and local service translating into more competitive costs on maintenance, and shorter
                    project life cycles.
                </p>

                <p class="text-justify">
                    Esco provides standardized platforms with inbuilt configurations without constraints on operational
                    parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with
                    international standards for occupational health and safety.
                </p>


                 ',
                 'is_activated' => '1',
                 'is_shareable' => '1',
                 'meta_keywords' => 'Esco Pharma, Esco Lifesciences,ISPE 2019, International Society for Pharmaceutical Engineering (ISPE) ',
                 'meta_description' => 'Esco has been a mainstay at one of the most prestigious pharmaceutical events in the Asia: the International Society for Pharmaceutical Engineering (ISPE) Singapore Conference and Exhibition',
                  'created_at' => '2019-08-06 00:00:00'],

                  ['news_category_id' => '3',
                  'old_id' => '163',
                  'slug' => 'esco-pharma-is-back-at-making-pharmaceuticals-2019',
                  'title' => 'Esco Pharma is Back at Making Pharmaceuticals 2019!',
                  'author' => 'Esco Healthcare',
                  'banner_img' => 'esco-pharma-is-back-at-making-pharmaceuticals-2019-min.jpg',
                  'banner_thumb' => 'esco-pharma-is-back-at-making-pharmaceuticals-2019-thumb-min.jpg',
                  'description' => 'Esco Pharma will be exhibiting once again at the leading UK pharmaceutical exhibition and conference, Making Pharmaceuticals 2019 on April 30 to May 1 at Ricoh Arena, Coventry, United Kingdom.',
                  'content' => '
                  <div class="row">
                  <div class="col-md-12">
                      <p class="text-justify">Esco Pharma will be exhibiting once again at the leading UK pharmaceutical exhibition and conference, <a href="https://www.makingpharma.com/">Making Pharmaceuticals 2019</a> on April 30 to May 1 at Ricoh Arena, Coventry, United Kingdom.</p>

                      <p class="text-justify">Making Pharmaceuticals will be hosting more than 2,000 pharmaceutical professionals over two days and more than 200 exhibitors across Europe. This serves as the perfect opportunity for everyone to meet, discuss, and learn from more than 90 pharmaceutical conference sessions - <strong>all for free.</strong></p>

                      <p class="text-justify">Esco Pharma, one of the leading global design, manufacture, and commissioning companies, will be available on site to discuss your needs. Our team of experts will discuss our specialty in airflow and containment equipment for pharmaceutical, biopharmaceutical, and fine chemicals.</p>

                      <p class="text-justify">As a division of the Esco group, Esco GB Ltd - Pharma benefits from Esco’s heritage in clean air containment technology since 1978.</p>

                      <p class="text-justify">As part of our full range, we design and manufacture:</p>

                      <ul style="padding-left: 40px !important;">
                          <li><p>Potent handling Isolators (Weighing and Dispensing, charging and off-loading)</p></li>
                          <li><p>Aseptic Isolators (Filling lines)</p></li>
                          <li><p>Sterility test Isolators</p></li>
                          <li><p>Cell Therapy Isolators</p></li>
                          <li><p>Laboratory Isolators</p></li>
                          <li><p>Downflow Booths</p></li>
                      </ul>

                      <p class="text-justify">To know more, make sure to visit us at <strong>Stand 613!</strong></p>

                      <p class="text-justify">Click here to register at Making Pharmaceuticals 2019: </p>
                      <p class="text-justify"><a class="btn pharma-btn" href="https://eventdata.uk/Visitor/MakingPharmaceuticals2019.aspx">Register</a> </p>


                      <p>&nbsp;</p>

                      <p><strong>About our BRANDS</strong></p>
                      <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

                      <p>&nbsp;</p>

                      <p><strong>About Esco Pharma</strong></p>
                      <p class="text-justify">Esco Pharma’s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

                      <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
                  </div>
              </div>


          <style type="text/css">
              a.btn-register-pharma{
                  padding: 10px 20px;
                  height: 36px;
                  box-sizing: border-box;
                  min-width: 90px;
                  text-align: center;
                  background: rgb(164, 204, 131);
                  color: #fff;
                  border: none;
                  border-radius: 3px;
                  font: inherit;
                  font-size: 14px!important;
                  cursor: pointer;
                  white-space: nowrap;
                  border: 1px solid rgb(164, 204, 131);
                  transition: 0.3s;
                  font-weight: bold;
                  text-decoration: none !important;


              }

              a.btn-register-pharma:hover{
                  color: rgb(164, 204, 131) !important;
                  background:#fff !important;
              }
          </style>

                  ',
                  'is_activated' => '1',
                  'is_shareable' => '1',
                  'meta_keywords' => 'Esco Pharma, Esco Lifesciences, Making Pharmaceuticals 2019',
                  'meta_description' => 'Esco Pharma will be exhibiting once again at the leading UK pharmaceutical exhibition and conference, Making Pharmaceuticals 2019 on April 30 to May 1 at Ricoh Arena, Coventry, United Kingdom.',
                   'created_at' => '2019-04-26 00:00:00'],


            ['news_category_id' => '1',
            'old_id' => '175',
             'slug' => 'inflatable-sealed-isoclean-healthcare-platform-isolator-hpi-g-3-is-your-cost-effective-solution-to-automated-isolators',
             'title' => 'Inflatable Sealed Isoclean® Healthcare Platform Isolator (HPI-G3-IS): Your Cost-effective Solution to Automated Isolators',
             'author' => 'Esco Healthcare',
             'banner_img' => 'hpi-is-final-version-min.jpg',
             'banner_thumb' => 'hpi-is-final-version-thumb-min.jpg',
             'description' => 'Esco Pharma introduces the newest member to its isolation technologies, the Isoclean® Healthcare Platform Isolator - Inflatable Seal Model (HPI-G3-IS). Isoclean® HPI is offered as an optimized solution for aseptic and potent compounding, sterility testing, aseptic filtration, cell and gene therapy, cosmeceuticals, and biocontainment, among others.',
             'content' => '
             <p class="text-justify ">
                    Esco Pharma introduces the newest member to its isolation technologies, the
                    <strong
                        >Isoclean<sup>&reg;</sup> Healthcare Platform Isolator - Inflatable Seal
                        Model (HPI-G3-IS)</strong
                    >. Isoclean<sup>&reg;</sup> HPI is offered as an optimized solution for
                    aseptic and potent compounding, sterility testing, aseptic filtration, cell
                    and gene therapy, cosmeceuticals, and biocontainment, among others.
                </p>

                <p class="text-justify ">
                    HPI-G3-IS facilitates the isolation of a product/process while providing the
                    required sterile environment. It is factory-configured to operate at either
                    positive or negative pressure in a recirculating or total exhaust airflow
                    scheme.
                </p>

                <p class="text-justify ">
                    Isoclean<sup>&reg;</sup> HPI is designed in accordance with the international
                    Current Good Manufacturing Practice (cGMP) standards. It is equipped with
                    supply HEPA (H14) filters providing ISO Class 5 environment suitable for
                    aseptic processes. The earlier model of HPI-G3 is designed with FDA-approved
                    static seals, while HPI-G3-IS is designed with inflatable seals and automated
                    dampers.
                </p>

                <p class="text-justify ">
                    The standard unit of HPI-G3-IS comes with auto pressure hold testing (APHT)
                    and Esco HMI touchscreen. It also allows the integration of Esco mobile
                    Biovap&trade; Biodecontamination System, which facilitates master
                    biodecontamination that can only be performed with internal doors open. The
                    mobile BioVap&trade; unit comes with a H<sup>2</sup>O<sup>2</sup> sensor and a catalytic converter.
                </p>

                <p class="text-justify ">
                    The pass-through chambers have interlocking doors, adjustable purge duration,
                    and time-delayed ingress/egress control to allow sufficient time for surface
                    decontamination, and to minimize cross-contamination. It also comes with an
                    automated sliding door feature for closing and opening of the inner
                    pass-through chamber door. This improved design facilitates ease of isolation
                    control especially during pressure decay testing and bio-decontamination
                    processes.
                </p>

                <p><strong>Key Benefits include:</strong></p>

                <ul style="padding: 0 3em">
                    <li>Automated pressure hold testing (APHT) capability.</li>
                    <li>
                        ULPA filters (as per IEST-RP-CC001.3) and HEPA (H14) filter (as per EN 1822)
                        with a typical efficiency of > 99.999% at 0.1 to 0.3 microns; provide
                        superior ISO Class 5 air cleanliness as per ISO 14644-1.
                    </li>
                    <li>
                        Class 2 containment enclosure classification via auto pressure leak test
                        (factory acceptance test) and Class 3 via automated pressure test as per ISO
                        10648-2 (prior to daily tasks).
                    </li>
                    <li>
                        Improved isolation control during pressure decay testing and
                        bio-decontamination process due to inflatable seals and automated dampers.
                    </li>
                    <li>
                        Real-time display of cabinet operations and cabinet performance monitoring.
                    </li>

                    <li>
                        Electromagnetic interlocking doors with time delay effect ensures safety and
                        containment during material transfer
                    </li>

                    <li>Foot switch activated auto sliding doors with light barrier</li>
                </ul>

                <p class="text-justify ">
                    Isoclean<sup>&reg;</sup> HPI is capable of pressure testing both in the
                    factory and on-site to meet the ISO 10648-2 standards. The system can give
                    real-time pressure readings during operation for monitoring purposes. The
                    integrity of the gloves can be measured quantitatively, applying the pressure
                    decay method with a glove leak tester.
                </p>

                <p class="text-justify ">
                    The isolator is available as a standard or as a customized unit to integrate
                    various equipment for the provision of a complete and simplified workflow
                    processing.
                </p>

                <p><strong>Optional Items:</strong></p>
                <ul style="padding: 0 3em">
                    <li>
                        Integration of Esco mobile BioVap&trade; biodecontamination system (H<sup>2</sup>O<sup>2</sup>
                        biodecontamination with sensor and catalytic converter)
                    </li>
                    <li>Integration of a side-mounted 24 L CO<sub>2</sub> Incubator</li>
                    <li>
                        Glove Leak Tester
                        <ul>
                            <li>300 mm x 300 mm</li>
                            <li>300 mm x 200 mm</li>
                        </ul>
                    </li>
                    <li>CCTV Integration</li>
                    <li>Height adjustable stand</li>
                    <li>Access to rear view monitoring system</li>
                    <li>
                        National Environment Balancing Bureau (NEBB) Cleanroom Performance Testing
                        (CPT) for validation
                    </li>
                    <li>Optional PQ support</li>
                    <li>
                        With option for three-way pass through chamber in between 2 units of
                        2-glove, 3-glove, or 4-glove isolator combination
                    </li>
                    <li>
                        Other configurations available:
                        <ul>
                            <li>2-glove + 2-glove + 2-glove unit</li>
                            <li>4-glove + 2-glove unit</li>
                        </ul>
                    </li>
                </ul>

                <p class="text-justify ">
                    Esco Pharma boasts its strengths on multiple manufacturing sites - Singapore,
                    United Kingdom, and the United States, allowing it to serve customers
                    globally. Esco&rsquo;s manufacturing sites are fully certified by ISO 9001, 14001,
                    18001, and 13485. Esco is the only company with distributed manufacturing
                    sites for isolators but with direct sales and service support from 23 local
                    Esco offices worldwide.
                </p>

                <p>&nbsp;</p>
                <p><strong>About our BRANDS</strong></p>
                <p class="text-justify ">
                    Esco Pharma provides specialist services, equipment packages, and process
                    solutions from our core platform products leading to improved operator
                    protection, reduction of cross contamination, and more efficient processing,
                    thereby directly and indirectly advancing occupational health and human
                    healthcare.
                </p>

                <p>&nbsp;</p>
                <p><strong>About Esco Pharma</strong></p>
                <p class="text-justify ">
                    Esco Pharma&rsquo;s largest global network of localized application specialists and
                    service offices provides faster response and local service translating into
                    more competitive costs on maintenance, and shorter project life cycles.
                </p>

                <p class="text-justify ">
                    Esco provides standardized platforms with inbuilt configurations without
                    constraints on operational parameters. This enables pharmaceuticals,
                    nutraceuticals, and cosmeceuticals to comply with international standards for
                    occupational health and safety.
                </p>

             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Esco Glassware Hood (EGH), Floor-Mounted Fume Hood (EFF)',
             'meta_description' => 'Proper use of laboratory equipment is necessary to work safely with hazardous chemicals and processes. The maintenance and regular inspection of all laboratory apparatus are also vital, to prevent accidents linked with improper use of such equipment. Finding the right solution for the handling of apparatus and processes is currently needed, especially in start-up plants.',
              'created_at' => '2019-09-06 03:00:00'],

              ['news_category_id' => '1',
            'old_id' => '170',
             'slug' => 'market-demand-for-hpapi-rises-containment-technologies-to-meet-it-head-on',
             'title' => 'Market Demand for HPAPI Rises; Containment Technologies to Meet it Head-on',
             'author' => 'Esco Healthcare',
             'banner_img' => 'market-demand-for-HPAPI-rises-min.jpg',
             'banner_thumb' => 'market-demand-for-HPAPI-rises-thumb-min.jpg',
             'description' => 'Esco Pharma introduces the newest member to its isolation technologies, the Isoclean® Healthcare Platform Isolator - Inflatable Seal Model (HPI-G3-IS). Isoclean® HPI is offered as an optimized solution for aseptic and potent compounding, sterility testing, aseptic filtration, cell and gene therapy, cosmeceuticals, and biocontainment, among others.',
             'content' => '

             <p class="text-justify"><strong><em>Recent Pharmaceutical Market</em></strong></p>

<p class="text-justify">The continuous expansion of the biopharmaceutical market, particularly, the global demand in the field of medical
    oncology, calls for an increase in the development and conventional drug manufacturing of high potency active
    pharmaceutical ingredients (HPAPIs). Within the next 5 years, the value for cancer medication is estimated to reach
    100 billion USD. </p>

<p class="text-justify">The major problem with this is that human intervention is present at almost every stage of the manufacturing process,
    thus, increasing the risk for personnel exposure. This could lead to various adverse health effects to all personnel
    involved; that is why, ensuring the safety of the manufacturing personnel is of high importance. However, addressing
    this issue should not impede productivity. </p>

<p class="text-justify">The primary solution is to look into the market for containment technologies which have since diversified into
    isolators, restricted access barrier systems (RABS), and even the split butterfly valves (SBVs). All of these
    systems are currently in use by numerous pharmaceutical firms to safeguard the final products, the personnel, and
    the environment in all stages of manufacturing. </p>

<p class="text-justify"><strong><em>ISPE SMEPAC Guide</em></strong></p>

<p class="text-justify">The market projection on HPAPIs has led pharmaceutical companies to increase investment in high potency facilities
    and innovative containment equipment to protect the health of their workers. However, with the complex nature of
    potent drugs, implementation and installation of containment technologies are not as easy as it seems; and
    containment verification of these systems is very critical. There needs to be a proper procedure in place, and
    validation protocols of the equipment to warrant its particulate containment performance.</p>

<p class="text-justify">The market projection on HPAPIs has led pharmaceutical companies to increase investment in high potency facilities
    and innovative containment equipment to protect the health of their workers. However, with the complex nature of
    potent drugs, implementation and installation of containment technologies are not as easy as it seems; and
    containment verification of these systems is very critical. There needs to be a proper procedure in place, and
    validation protocols of the equipment to warrant its particulate containment performance.</p>

<p class="text-justify">During the late 1990s, the qualification of containment technologies were based on the measurement of worker
    exposure. This method was later on formalised by the International Society for Pharmaceutical Engineering (ISPE) and
    became known as the Standardised Measurement of Equipment Particulate Airborne Concentration (SMEPAC). Since then,
    all containment systems have been validated based on this guideline.</p>

<p class="text-justify">The purpose of the SMEPAC test is to evaluate the containment performance without risking operator exposure to the
    potent active pharmaceutical ingredient (API) whose analytical method has been or is yet to be analysed. Also, it is
    used to obtain baseline data for choosing the most effective containment technology found in the market then later
    on, check its performance prior to actual production process.</p>

<p class="text-justify">This testing method involves the use of a surrogate or substitute material (lactose, paracetamol, mannitol, or
    naproxen) to represent an API during the simulation of a workplace operation. This allows the test to effectively
    evaluate containment performance of an equipment without exposing the testers to the actual potent API or hazardous
    material.</p>

<p class="text-justify">The results of containment performance testing with a surrogate material provides insight into the containment level
    that can be achieved by the unit. This however, does not directly compare with materials of different physical
    properties (e.g. different flow characteristics, moisture content or particle size). Additionally, the results with
    surrogate materials do not guarantee compliance with an occupational exposure level (OEL) established for a specific
    API. This test also does not evaluate exposure to gases or vapors.</p>

<p class="text-justify">Furthermore, validation testing is essential to guarantee that even with operator intervention, containment
    capability of the device is not obstructed.</p>

<p class="text-justify">In order to properly evaluate the equipment, sampling locations should be determined based on the critical points of
    the system wherein the possibility of personnel exposure is high. </p>

<p class="text-justify">After the installation and validation of the equipment, the institution should then focus on the preventive
    maintenance as frequent monitoring will help maintain the capability and reliability of the containment solution.
</p>

<p class="text-justify"><strong><em>Containment Practices</em></strong></p>

<p class="text-justify">Containment technologies are rapidly evolving over the past decade in order to address the increasing demands of
    handling potent compounds and to remove risks of occupational exposure. </p>

<p class="text-justify">It is a common misconception that containment performance is directly linked to the levels of visible particulate
    residue after separation to the containment device, however, this issue has been rebutted by actual results of the
    performance tests. There are newly developed extraction methods which has led to the recovery of potential airborne
    particulates which offers a solution to achieve performance repeatability of these equipment.</p>

<p class="text-justify">As a preventive measure, other ways to increase operator protection is to utilize good laboratory practices of
    hazardous drug handling like: double gloving technique, proper decontamination and cleaning procedures, and
    appropriate waste disposal. </p>

<p class="text-justify"><strong><em>In Conclusion</em></strong></p>

<p class="text-justify">With the imminent rise of demand for HPAPIs, pharmaceutical industries continue to use innovative containment
    strategies, and as important it is to get these technologies, it is also critical that their containment capability
    and repeatability is validated using highly developed test procedures. This is the only way to ensure the overall
    protection towards the final product, the manufacturing personnel, and the environment. </p>

<p class="text-justify"><strong><em>Esco Pharma Turn-key Solutions</em></strong></p>

<p class="text-justify">The containment experts of Esco Pharma are continuously developing ways to innovate their systems and be the leaders
    in the field. Check out the wide range of isolation technologies that Esco offers!</p>

<a href="/core-tech-sub-page.php?ctId=70"><img src="/images/upload/esco-pharma-turn-key-solutions-min.png" alt="image" class="img-responsive"></a>

<p>&nbsp;</p>

<p class="text-justify"><strong>References:</strong></p>

<ol>
    <li>1. Avraam, Michael. (2019). Understanding ISPE SMEPAC Guidelines and Considerations in HPAPI Containment
        Testing. Retrieved on 14-July-2019. Retrieved from:
        <a
            href="https://www.pharmaceuticalonline.com/doc/understanding-ispe-smepac-guidelines-and-considerations-in-hpapi-containment-testing-0001">https://www.pharmaceuticalonline.com/doc/understanding-ispe-smepac-guidelines-and-considerations-in-hpapi-containment-testing-0001</a>
    </li>

    <li>2. ISPE. (2012). Assessing the Particulate Containment Performance of Pharmaceutical Equipment, 2nd ed. Tampa,
        Florida 33609 USA.</li>
</ol>

             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Market Demand for HPAPI Rises; Containment Technologies to Meet it Head-on',
             'meta_description' => 'Market Demand for HPAPI Rises; Containment Technologies to Meet it Head-on',
              'created_at' => '2019-08-06 03:00:00'],



              ['news_category_id' => '1',
            'old_id' => '168',
             'slug' => 'mitigating-hazardous-chemicals-with-isolation-technology',
             'title' => 'Mitigating Hazardous Chemicals with Isolation Technology',
             'author' => 'Esco Healthcare',
             'banner_img' => 'mitigating-hazardous-chemicals-with-isolation-technology-min.png',
             'banner_thumb' => 'mitigating-hazardous-chemicals-with-isolation-technology-min.png',
             'description' => 'The entire process of pharmaceutical manufacturing involves a whole list of meticulous guidelines, both local and international, to adhere to. Moreover, it needs to pass the different stages of production before it can reach market platforms, and only then can the industry be assured of their product&rsquo;s quality.',
             'content' => '

             <p class="text-justify">The entire process of pharmaceutical manufacturing involves a whole list of meticulous guidelines, both local and international, to adhere to. Moreover, it needs to pass the different stages of production before it can reach market platforms, and only then can the industry be assured of their product&rsquo;s quality.</p>

             <p class="text-justify" style="margin-top: 20px;">Presently, the market is teeming with pharmaceutical products, and each of these are composed of different excipients that promote a medication&rsquo;s overall safety, efficiency, and stability. With this, there is a high possibility that manufacturers are using different kinds of chemicals, even those characterized as irritants, in high concentrations such as: acids, bases, oxidizers, reducing and chelating agents. Therefore, it is important that all plant personnel are capable of properly handling such chemicals especially in times of accidental spills. It is also crucial that appropriate pharmaceutical manufacturing equipment will be utilized to avoid unnecessary harm towards the operators during any untoward chemical incidents. </p>

             <p class="text-justify" style="margin-top: 20px;">Managing these pharmaceutical excipients must be observed from the initial stages of formulation until the last. There are five main phases where the risks that these chemicals pose are at an all-time high:</p>


             <ol  style="padding-left: 40px !important;">
                 <li>
                     <p class="text-justify"><strong>1.&nbsp;&nbsp;&nbsp;Storage:</strong> this step encompasses the unloading, storage, and transfer of all raw materials to be used by an industry; whose main source of accident is linked to the appropriate transfer of substances from one container to another. </p>
                  </li>
                 <li>
                     <p class="text-justify"><strong>2.&nbsp;&nbsp;&nbsp;Research and development:</strong> during the developmental studies of each active pharmaceutical ingredient conducted in laboratories, it is likely that highly concentrated agents are being handled in order to perfect a drug&rsquo;s formulation. </p>
                  </li>

                 <li>
                     <p class="text-justify"><strong>3.&nbsp;&nbsp;&nbsp;Manufacture: </strong> there is a high risk of accidental leaks or container overflows during the production process, and these can even affect the integrity of other materials or excipients surrounding it.</p>
                  </li>

                 <li>
                     <p class="text-justify"><strong>4.&nbsp;&nbsp;&nbsp;Inspection: </strong> mistakes during quality control assays or product sampling can lead to unintentional personnel and environmental exposure. On the event that an accident with a highly reactive oxidizing agent happens, it can cause a flaming combustion, which can cost both personnel and business death. </p>
                  </li>

                 <li>
                     <p class="text-justify"><strong>5.&nbsp;&nbsp;&nbsp;Maintenance: </strong> during cleaning procedures, the risk of having a tank or a bunch of pipes burst under pressure is highly probable, especially if manufacturing equipment are not properly maintained. This is where the importance of annual recertification or recalibration of each device comes in to play.</p>
                  </li>
             </ol>

             <p class="text-justify" style="margin-top: 20px;">With regards to all these, it is imperative that pharmaceutical companies understand the properties of all the chemical agents that go into their final product. Prior to commercial manufacturing, companies must also conduct process validation in order to come up with a strategy on the prevention or containment of any manufacturing deviation or incident that may occur. </p>

             <p class="text-justify" style="margin-top: 20px;">Furthermore, standardized cleanroom facilities must be prepared in order to protect the purity of a product. A study on the type of equipment material suitable for the chemicals that an industry handles in each stage of their process, is also critical in ensuring the overall safety of the manufacturing process and the personnel. </p>

             <p class="text-justify" style="margin-top: 20px;">Technological advancements in the field of pharmaceutical manufacturing offers cost-effective ways of containing chemicals and preventing cross-contamination of the final product. The isolation system is one significant innovation that offers this type of solution; it is a growing trend in the industry. It helps provide and maintain a sterile working environment for pharmaceutical manufacturing, as it functions to fully separate the operator and the process. </p>

             <p class="text-justify" style="margin-top: 20px;">The isolator is designed with a strict and filtered airflow regime, a positive or negative pressurization, and a ducting system. For a process dealing with sterile and non-hazardous substances, a positive pressure isolator is suitable; but if it involves a hazardous and volatile pharmaceutical substance, then a negative pressure isolator is required. This type of set up helps guarantee that both the product and the operator will be protected from unnecessary contamination and exposure, respectively. </p>

             <p class="text-justify" style="margin-top: 20px;">Isolators are pressure tested as per ISO 10648-2, to ensure that there are no leaks in the system. This feature allows the integration of a bio-decontamination technology that will prevent microbial build up inside the work chamber. This is achieved by gassing the inside of the isolator with an atomized hydrogen peroxide mist.</p>

             <p class="text-justify" style="margin-top: 20px;">Since the equipment is designed to contain, it can be properly sealed with Food and Drug Administration (FDA) compliant seals, which allows all operations to be carried out in controlled gaseous environments. Materials to be processed along with other necessary equipment can be introduced inside the isolator through the interlocking doors of pass-through chambers or with a rapid transfer port (RTP).</p>

             <p class="text-justify" style="margin-top: 20px;">An Isolator is intended to provide an ISO Class 5 or Grade A environment, in respect to international standards and guidelines. As per the United States Pharmacopeia (USP) General Chapter <797>, the direct compounding area where critical sites are exposed to unidirectional HEPA-filtered air, must be ISO Class 5. This ensures that there will be no risk for cross-contamination.</p>

             <p class="text-justify" style="margin-top: 20px;">Moreover, it consists of two chambers: the process chamber and the pass-through chamber (PTC). All major operations are done inside the former, thus, environmental control and monitoring is important. On the other-hand, the pass-through chamber, located on the right side of the unit, is used for material ingress and egress so as not to disturb the controlled environment in the main chamber. The conditions of the PTC are also regularly monitored and controlled; thus, eliminating the risk of cross-contamination.</p>

             <p class="text-justify" style="margin-top: 20px;">Isolation technology can be equipped with a human machine interface (HMI) controller which can monitor airflow, pressure, temperature, humidity, and particle count. This HMI is also used to access various system-automated validation functions like the pressure decay test and bio-decontamination process which ensures that the unit is stabilized for a normal run. Moreover, this type of controller can be further integrated into the Supervisory Control and Data Acquisition (SCADA) system which is responsible for the simultaneous monitoring of the daily manufacturing processes within a facility. This conforms to the FDA requirement on proper documentation for easy traceability.</p>

             <p class="text-justify" style="margin-top: 20px;">The advancements of isolation technology offers a way of mitigating hazards that oxidizers and even flammable substances pose; this is through the provision of an inert atmosphere (nitrogen) within the closed system. Utilizing this technology will also lead to a reduction of a facility&rsquo;s electrical rating, thus, it would take a long time for all processing equipment to exceed the controlled heat level; in this time frame, a higher production yield can be achieved.</p>

             <p class="text-justify" style="margin-top: 20px;">Esco Pharma offers a wide variety of isolator systems that can be customized to cater numerous industrial processes. </p>

             <p>&nbsp;</p>

             <p><strong>References:</strong></p>
             <ol style="padding-left: 40px !important;">
                 <li><p>1. Anonymous. (2012). Kinds of splashes in the pharmaceutical industry. Retrieved on 19-June-2019. Retrieved from: <a href="https://www.prevor.com/en/chemical-risks-in-pharmaceutical-industry">https://www.prevor.com/en/chemical-risks-in-pharmaceutical-industry</a></p></li>

                 <li><p>2. Bozenhardt E., & Bozenhardt H. (2019). Mystery and Danger: Flammables and Oxidizers in Pharmaceutical Filling Operations. Retrieved on 21-June-2019. Retrieved from: <a href="https://www.pharmaceuticalonline.com/doc/mystery-and-danger-flammables-and-oxidizers-in-pharmaceutical-filling-operations-0001">https://www.pharmaceuticalonline.com/doc/mystery-and-danger-flammables-and-oxidizers-in-pharmaceutical-filling-operations-0001</a></p></li>

                 <li><p>3. Buc, Elizabeth. (2013). Assessing the List of Typical Oxidizers. Retrieved on 24-June-2019. Retrieved from: <a href="https://www.nfpa.org/-/media/Files/News-and-Research/Fire-statistics-and-reports/Hazardous-materials/AssessingtheListofTypicalOxidizers.ashx?la=en">https://www.nfpa.org/-/media/Files/News-and-Research/Fire-statistics-and-reports/Hazardous-materials/AssessingtheListofTypicalOxidizers.ashx?la=en</a></p></li>

                 <li><p>4. Pharmaceutical Inspection Co-operation Scheme. (2007) Recommendation on Isolators Used for Aseptic Processing and Sterility Testing. Retrieved from: <a href="https://picscheme.org/en/publications#selSection_">https://picscheme.org/en/publications#selSection_</a></p></li>

                 <li><p>5. Stone, Jim. (2016). Oxidizer Selection and Technology Options. Retrieved on 20-June-2019. Retrieved from: <a href="https://eponline.com/Articles/2016/11/01/Oxidizer-Selection-and-Technology-Options.aspx?Page=1">https://eponline.com/Articles/2016/11/01/Oxidizer-Selection-and-Technology-Options.aspx?Page=1</a></p></li>

                 <li><p>6. United States Pharmacopeia General Chapter <797>. (2018). Pharmaceutical Compounding - Sterile Preparations. Retrieved from: <a href="http://www.usp.org/compounding/general-chapter-797">http://www.usp.org/compounding/general-chapter-797</a></p></li>

                 <li><p>7. United States Pharmacopeia General Chapter <800>. (2018). Hazardous Drugs - Handling in Healthcare Settings. Retrieved from: <a href="http://www.usp.org/compounding/general-chapter-800">http://www.usp.org/compounding/general-chapter-800</a></p></li>

             </ol>

             <p>&nbsp;</p>


             <p><strong>About our BRANDS</strong></p>
             <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

             <p>&nbsp;</p>

             <p><strong>About Esco Pharma</strong></p>
             <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

             <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Esco Pharma, HEPA-filtered air, isolator systems,pharmaceutical products',
             'meta_description' => 'Mitigating Hazardous Chemicals with Isolation Technology',
              'created_at' => '2019-06-28 00:00:00'],


              ['news_category_id' => '1',
            'old_id' => '167',
             'slug' => 'biodecontamination-efficiency-get-to-know-the-bio-vap',
             'title' => 'Biodecontamination Efficiency: Get to Know the BioVap™',
             'author' => 'Esco Healthcare',
             'banner_img' => 'biodecontamination-efficiency-get-to-know-the-bioVapTM-min.png',
             'banner_thumb' => 'biodecontamination-efficiency-get-to-know-the-bioVapTM-min.png',
             'description' => 'Contamination control is of extreme importance in biopharmaceutical industries, especially in maintaining product quality and sterility. As standards and guidelines evolved over time, biodecontamination became a part of the standard operating procedures (SOPs) for facilities who manufacture and handle high-quality products.',
             'content' => '


            <p class="text-justify">Contamination control is of extreme importance in biopharmaceutical industries, especially in maintaining product quality and sterility. As standards and guidelines evolved over time, biodecontamination became a part of the standard operating procedures (SOPs) for facilities who manufacture and handle high-quality products.</p>

            <p class="text-justify">One of the most used decontamination agents is hydrogen peroxide (H<sup>2</sup>O<sup>2</sup>) for surface decontamination of both sterile and containment processes. This is mainly due to its efficiency, material compatibility, and safety. Vaporized H<sup>2</sup>O<sup>2</sup> is widely used in different applications in the pharmaceutical and life science industry. A wide variety of technologies have been developed for the improvement of delivery and efficacy of H<sup>2</sup>O<sup>2</sup> in terms of superior biodecontamination.</p>

            <p class="text-justify">Esco Pharma has developed an effective hydrogen peroxide-based bio-decontamination system capable of achieving a 6-log reduction in bioburden. The spore log reduction is validated by a biological indicator, <em>Geobacillus stearothermophilus</em> spores utilizing stainless steel ribbons.</p>
            <p>&nbsp;</p>


            <center><img style="width: 350px !important; margin:auto !important;" src="/images/upload/esco-bioVapTM-biodecontamination-System-min.png" class="img-responsive"></center>

            <p class="text-center"><strong>Figure 1</strong>. Esco BioVap&trade; Biodecontamination System</p>
            <p>&nbsp;</p>


            <p class="text-justify">The BioVap&trade; has been developed in response to increasing demands from the pharmaceutical, biotechnological, and other related industries in need of more stringent requirements on decontamination. Hydrogen peroxide breaks down into oxygen and water upon the completion of the sterilization process which makes it one of the most environment-friendly decontamination agent available.</p>
            <p class="text-justify">The BioVap&trade; is developed for performing biodecontamination of aseptic barrier system, pass through systems, biological safety cabinets, cleanrooms, and any other space where surface sterility is required.</p>
            <p>&nbsp;</p>

            <p class="text-justify"><strong style="font-size: 1.2em">Science Behind the Process</strong></p>

            <p class="text-justify">The BioVap&trade; system is a process of atomizing the H<sup>2</sup>O<sup>2</sup> sterilant by utilizing a mist fog as it is injected into an enclosed space. This unique system creates a charge on the atomized droplets as it passes through the nozzle.</p>

            <p class="text-justify">This charge imparted on the droplets of sterilant creates two important phenomena:</p>
            <ol style="padding-left: 40px !important;">
                <li>
                    <p class="text-justify">a. &nbsp;&nbsp;&nbsp;Each droplet of the sterilant contains billions of reactive molecules to execute the microbial kill.</p>
               </li>
                <li>
                    <p class="text-justify">b. &nbsp;&nbsp;&nbsp;Through mutual repulsion, the droplets repel each other and distribute quickly through the space achieving a superior distribution of the sterilant. The charged droplets are attracted to the uncharged surfaces within the space. Upon impact, the droplets will burst immediately, initiating the sterilization process.</p>
               </li>

            </ol>

            <p class="text-justify">For conventional vaporizing systems, the sterilant is evaporated first, making the process more time-consuming. But since BioVap&trade; converts the sterilant to atomized mist fogs, the evaporation stage is eliminated for a more direct process. Moreover, the system is not affected by temperature or relative humidity so there is no need to precondition the space prior to the decontamination procedure. The atomization of the sterilant and the elimination of the preconditioning stage makes BioVap&trade; more cost-effective and more energy efficient.</p>
            <p>&nbsp;</p>

            <p class="text-justify"><strong style="font-size: 1.2em">Process Step</strong></p>

            <p class="text-justify">Prior to normal run operations, the chamber must first be decontaminated to obtain a sterile working environment. The internal conditions of the process chamber must meet all the standard conditions during operations for aseptic processing. Biodecontamination is also applicable for the prevention of false negative results during sterility testing.</p>

            <p class="text-justify">The BioVap&trade; technology has the cycle conditions set prior to sequence initiation. Multiple cycles are capable of being set and stored under the system. There are up to 10 available cycles which can be configured independently.</p>

            <ol class="list-unstyled pl-3">
                <li>
                    <p class="text-justify"><strong>a. &nbsp;&nbsp;&nbsp;Priming</strong></p>
                    <p class="text-justify">H<sub>2</sub>O<sub>2</sub> will be pumped from the sterilant bottle or container to the loading station. The purpose of this stage is to fill the line with H<sub>2</sub>O<sub>2</sub> and remove any air pockets.</p>
                 </li>
                <li>
                    <p class="text-justify"><strong>b. &nbsp;&nbsp;&nbsp;Injection</strong></p>
                    <p class="text-justify">H<sub>2</sub>O<sub>2</sub> will be pumped and injected to the chamber in the form of atomized mist. The compressed air injected via a nozzle will break down the H<sub>2</sub>O<sub>2</sub> into a very fine mist of micrometer sizes. The slightly positive charge of H<sub>2</sub>O<sub>2</sub> will attract the negatively charged conductive surface inside the chamber following distribution.</p>
                 </li>
                <li>
                    <p class="text-justify"><strong>c. &nbsp;&nbsp;&nbsp;Dwelling</strong></p>
                    <p class="text-justify">The injection of H<sub>2</sub>O<sub>2</sub> and compressed air will stop while keeping the chamber close. This is an idle step to provide sufficient exposure of H<sub>2</sub>O<sub>2</sub> to the surface.</p>
                 </li>
                <li>
                    <p class="text-justify"><strong>d. &nbsp;&nbsp;&nbsp;Aeration</strong></p>
                    <p class="text-justify">The injected H<sub>2</sub>O<sub>2</sub> will be released to the isolator&rsquo;s exhaust system. The control system will activate the fan blowers to exhaust the air outside and to intake fresh air to the chambers. Vaporized H<sup>2</sup>O<sup>2</sup> sensing will start after an adjustable time delay to ensure that the chamber has a residual H<sup>2</sup>O<sup>2</sup> concentration of less than 1.0 ppm.</p>
                 </li>

            </ol>


            <p>&nbsp;</p>


            <img style="width: 100% !important; margin:auto !important;" src="/images/upload/conventional-gaseous-systems-vs-bioVapTM-system-min.jpg" class="img-responsive">

            <p class="text-center"><strong>Figure 2</strong>. Conventional Gaseous Systems vs. BioVap&trade; System</p>
            <p>&nbsp;</p>

            <p class="text-justify"><strong style="font-size: 1.2em">Flexibility Features</strong></p>

            <p class="text-justify">Esco BioVap&trade; system is developed to be highly flexible and can be customized into various equipment such as biosafety cabinets, pass boxes, modular enclosures, and isolator systems.</p>


            <p>&nbsp;</p>


            <center><a href="/product-details.php?productId=33&pg=pdt"><img style="width: 350px !important; margin:auto !important;" src="/images/upload/general-processing-platform-isolator-min.png" class="img-responsive"></center>
</a>
            <p class="text-center"><strong>Figure 3</strong>. <a href="/product-details.php?productId=33&pg=pdt">General Processing Platform Isolator (GPPI)</a> with integrated BioVap&trade;- System</p>

            <p>&nbsp;</p>


            <center><a href="/product-details.php?productId=42&pg=pdt"><img style="width: 350px !important; margin:auto !important;" src="/images/upload/bioPassTM-pass-through-with-bioVapTM-system-min.jpg" class="img-responsive"></a></center>

            <p class="text-center"><strong>Figure 4</strong>. <a href="/product-details.php?productId=42&pg=pdt">BioPass&trade; Pass Through</a> with BioVap&trade; System</p>



            <p>&nbsp;</p>

            <p><strong>References:</strong></p>
            <ol style="padding-left: 40px !important;">
                <li><p>1. Feinstein, S., et al. (2019) Vaporous biodecontamination: A matter of efficiency. Accessed 19 June 2019 from <a href="https://www.cleanroomtechnology.com/news/article_page/Vaporous_biodecontamination_A_matter_of_efficiency/151247">https://www.cleanroomtechnology.com/news/article_page/Vaporous_biodecontamination_A_matter_of_efficiency/151247</a></p></li>
            </ol>

            <p>&nbsp;</p>


            <p><strong>About our BRANDS</strong></p>
            <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

            <p>&nbsp;</p>

            <p><strong>About Esco Pharma</strong></p>
            <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

            <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>


             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Esco Pharma, Esco BioVap™ Biodecontamination System, General Processing Platform Isolator (GPPI) with integrated BioVap™ System, BioPassTM Pass Through with BioVap™ System',
             'meta_description' => 'Contamination control is of extreme importance in biopharmaceutical industries, especially in maintaining product quality and sterility.',
              'created_at' => '2019-06-27 00:00:00'],



              ['news_category_id' => '1',
            'old_id' => '165',
             'slug' => 'lessen-bioburden-control-in-the-biopharmaceutical-business',
             'title' => 'Lessen Bioburden: Control in the Biopharmaceutical Business',
             'author' => 'Esco Healthcare',
             'banner_img' => 'lessen-bioburden-control-in-the-biopharmaceutical-business-min.png',
             'banner_thumb' => 'lessen-bioburden-control-in-the-biopharmaceutical-business-min.png',
             'description' => 'There have been many great feats made by the pharmaceutical industry in the past few years, but there is one that bothers both the healthcare and manufacturing industries continuous soar, the possibility of health decline and a high risk of bioburden.',
             'content' => '


             <p class="text-justify">There have been many great feats made by the pharmaceutical industry in the past few years, but this advancement does not come without any hitches because of unadressed issues of health problems and diseases.</p>

             <p class="text-justify">One unsettling fact that adds to the burden of achieving sterility status is that, the growth of the world&rsquo;s population brings with it an increase in the number of microorganisms resistant to current pharmaceutical preparations; making them harder to eliminate. This is a major setback for both the healthcare and manufacturing industries as it implies the possibility of health decline and a high risk of bioburden.</p>

             <p class="text-justify">Bioburden is the term that denotes the number of microorganisms thriving on most of the rooms and surfaces of a pharmaceutical facility. It describes the viable number of microbes present on the item prior to sterilization. This term is also often used in microbial limit testing, which is done on pharmaceutical and medical products during quality control.</p>

             <p class="text-justify">It is also present in water systems, in the sterilizing filtration, and basically every corner of the production facility. This barely goes unnoticed until there is a "hit" in the environmental monitoring report; alarming the operators that the bioburden has dramatically increased..</p>

             <p class="text-justify">The growth of bioburden stems from the operators who normally shed microbes from their bodies - face, hair, and hands - and clothing. Any physical contact from people working together is a main cause of biological contamination. Additionally, the contamination may also arise from material and equipment transfer.</p>

             <p class="text-justify">Since the manufacturing firm requires manpower, the continuous mobility - even if minimized- may generate particles that can contaminate the whole facility. As such, there are necessary containment steps to be followed, and these are the following:</p>


             <ul style="padding-left: 40px !important; margin-top: 15px;">
                 <li><p>Cleaning with an effective disinfectant is important to ensure that all surfaces be contaminant-free. But this fact alone doesn&rsquo;t actually ensure total eradication of bioburden. Necessary equipment must be used, like airlocks, to provide safety.</p></li>
                 <li><p>Airlocks are one of the most used equipment inside a facility. As the mode of transport of materials in and out, it can be one of the causes of increasing bioburden.</p></li>
                 <li><p>Higher air changes and an adequate design for these pass through chambers must be utilized, and if possible, a biodecontamination system to ensure the full eradication of microorganisms.</p></li>
             </ul>


             <center><a href="/product-details.php?productId=42&pg=pdt"><img src="/images/product-images/thumb/Biopas-2-min-thumb.png" class="img-responsive"></a></center>

             <a href="/product-details.php?productId=42&pg=pdt"  style="color: rgb(164, 204, 131);"><p class="text-center" style="word-break: break-all !important;"><strong>BioPass<sup>&trade;</sup> Pass Through</strong></p></a>


             <p>&nbsp;</p>

             <p class="text-justify">The <a href="/product-details.php?productId=42&pg=pdt" style="color: rgb(164, 204, 131);"><strong>BioPass<sup>&trade;</sup> Pass Through</strong></a> is integrated with <strong>Esco BioVap<sup>&trade;</sup> biodecontamination system</strong> which utilizes atomized hydrogen peroxide providing 6-log reduction of biological hazards within the chamber. It is designed and constructed in compliance to cGMP guidelines and requirements for manufacturing and handling of pharmaceuticals. Its double-width decontamination chamber can be customized to suit client&rsquo;s specifications.</p>

             <p class="text-justify">The system is configured to operate at positive pressure with interlocking doors to ensure that unfiltered air from the background environment will not reach the decontaminated environment. Customizable carts are capable of accommodating variations in client&rsquo;s daily loading requirements.</p>


             <p>&nbsp;</p>

             <p><strong>References:</strong></p>
             <ol style="padding-left: 40px !important;">
                 <li><p>1. Bioburden - an overview | ScienceDirect Topics. (ND). Retrieved from <a href="https://www.sciencedirect.com/topics/medicine-and-dentistry/bioburden">https://www.sciencedirect.com/topics/medicine-and-dentistry/bioburden</a></p></li>
                 <li><p>2. Bozenhardt, H., Bonzenhardt, E. (2019) Cleaning Sanitizing Sterilizing Or Wishing It Away What Are We Doing To Control Bioburden. Retrieved from <a href="https://www.pharmaceuticalonline.com/doc/cleaning-sanitizing-sterilizing-or-wishing-it-away-what-are-we-doing-to-control-bioburden-0001">https://www.pharmaceuticalonline.com/doc/cleaning-sanitizing-sterilizing-or-wishing-it-away-what-are-we-doing-to-control-bioburden-0001</a></p></li>
                 <li><p>3. Eissa, M. (2017) Bioburden Control in the Biopharmaceutical Industry. Accessed last 23 Apr 2019 from <a href="http://www.biopharminternational.com/bioburden-control-biopharmaceutical-industry">http://www.biopharminternational.com/bioburden-control-biopharmaceutical-industry</a></p></li>
             </ol>

             <p>&nbsp;</p>


             <p><strong>About our BRANDS</strong></p>
             <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

             <p>&nbsp;</p>

             <p><strong>About Esco Pharma</strong></p>
             <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

             <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>


             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Lessen Bioburden: Control in the Biopharmaceutical Business',
             'meta_description' => 'Lessen Bioburden: Control in the Biopharmaceutical Business',
              'created_at' => '2019-06-28 00:00:00'],


              ['news_category_id' => '1',
            'old_id' => '166',
             'slug' => 'quality-makes-pharmaceutical-industries',
             'title' => 'Quality Makes Pharmaceutical Industries',
             'author' => 'Esco Healthcare',
             'banner_img' => 'quality-makes-pharmaceutical-industries-min.jpg',
             'banner_thumb' => 'quality-makes-pharmaceutical-industries-min.jpg',
             'description' => 'Pharmaceutical industries need to gain a high degree of assurance that their manufacturing processes are consistently producing marketable drug products with the necessary attributes of identity, strength, quality, purity, and potency.',
             'content' => '

             <div class="row">
             <div class="col-md-12">
                 <div style="width: fit-content; margin: auto;">
                     <p style="font-size: 1.4em; font-weight: bold;" class="text-center">&ldquo;Quality is never an accident. It is always the result of intelligent effort. &rdquo;</p>
                     <p class="text-right">- John Ruskin</p>
                 </div>


                 <p class="text-justify">Achieving a high quality product is of prime importance in the pharmaceutical field as it denotes that the final product is safe and effective to use for its intended purpose.</p>

                 <p class="text-justify">Industries embed this same concept within the minds of all their staff to guarantee that quality is built into their final products. </p>

                 <p class="text-justify">This attribute of a pharmaceutical preparation cannot be easily measured and assured during in-process inspection and finished-product testing, since every stage of the manufacturing process affects the properties of the drug. This key fact opens up the necessity to properly train all personnel-- from the basic concepts of assuring quality like donning on their personal protective equipment (PPE) prior to entering production sites; up to the complex protocols of aseptic technique.</p>

                 <p class="text-justify">Additionally, a consistent yield of products of the highest calibre will not only depend on the operators, rather, even the material of construction of the cleanrooms and various equipment used for handling and preparing the final products can be of influence. As such, a keen sense of attention to detail is essential.</p>

                 <p class="text-justify">From the purchasing and storage of raw materials, to the in-process quality testing, up until the labelling and packaging of the final product, there must already be and established standard operating procedures (SOPs) in which the operators can easily grasp and understand.</p>

                 <p class="text-justify">Moreover, manufacturing firms are continuously improving their facilities by integrating various kinds of automation technology whose main advantage is rendering a reproducible process. However, this type of system still have certain limitations which demand the need for man power, and doing so would highly increase the possibility for human error and decrease the capacity of process replication. For industries, this type of situation cannot guarantee that all final products will have the same quality attributes. </p>

                 <p class="text-justify">To address issues on quality assurance, the US Food and Drug Administration (FDA) released a guideline on process validation whose major concern is the evaluation of data collected from the initial stage of drawing up the whole manufacturing process, until the commercial production scale. Gathered information will then be used as evidence to establish a manufacturing process that is capable of consistently producing high quality products.</p>

                 <p class="text-justify">There are three main activities to efficiently validate the whole production process:</p>

                 <ol style="padding-left: 40px !important; margin-top: 15px;">
                     <li><p>1. <em><strong>Process Design:</strong></em> this refers to the knowledge built from process development which will be subsequently used to establish the commercial scale method of manufacturing.</p></li>
                     <li><p>2. <em><strong>Process Qualification:</strong></em> this is when the process design is evaluated to verify that it is capable of reproducible commercial manufacturing.</p></li>
                     <li><p>3. <em><strong>Continued Process Verification:</strong></em> the pharmaceutical industry does not have a room for error, and it needs to be continuously assured that the manufacturing process will remain in a state of control and will only produce high quality products.</p></li>
                 </ol>

                 <p class="text-justify">Furthermore, understanding the information from the process development will ultimately help establish a way to manage the results of a manufacturing process to only have products with the desired attributes. In order to accomplish this, manufacturers should learn to understand the sources of variation, detect the presence and impact of a certain variation towards the entire process, and appropriately control the variation with regards to the risk it represents to the process and the final product.</p>

                 <p class="text-justify">Abiding to this will help industries gain a high degree of assurance that manufacturing processes are consistently producing marketable drug products that meet the necessary attributes of identity, strength, quality, purity, and potency. </p>

                 <p class="text-justify">Pharmaceutical companies cater to millions, if not billions, of patients each year, and it is only proper that they continuously improve their processes to assure that consumers are receiving their money&rsquo;s worth. </p>



                 <p>&nbsp;</p>

                 <p><strong>References:</strong></p>
                 <ol style="padding-left: 40px !important;">
                     <li><p>1. US FDA.(2011). Guidance for industry- Process Validation: General Principles and Practices. Retrieved on 17-May-19. Retrieved from: <a href="https://www.fda.gov/regulatory-information/search-fda-guidance-documents/process-validation-general-principles-and-practices">https://www.fda.gov/regulatory-information/search-fda-guidance-documents/process-validation-general-principles-and-practices</a></p></li>
                 </ol>

                 <p>&nbsp;</p>


                 <p><strong>About our BRANDS</strong></p>
                 <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

                 <p>&nbsp;</p>

                 <p><strong>About Esco Pharma</strong></p>
                 <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

                 <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
             </div>
         </div>


             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Lifesciences,Quality Makes Pharmaceutical Industries',
             'meta_description' => 'Pharmaceutical industries need to gain a high degree of assurance that their manufacturing processes are consistently producing marketable drug products with the necessary attributes of identity, strength, quality, purity, and potency.',
              'created_at' => '2019-06-03 00:00:00'],



              ['news_category_id' => '1',
            'old_id' => '164',
             'slug' => 'the-breakdown-of-drug-discovery-development',
             'title' => 'The Breakdown of Drug Discovery & Development',
             'author' => 'Esco Healthcare',
             'banner_img' => 'the-breakdown-of-drug-discovery-and-development-min.png',
             'banner_thumb' => 'the-breakdown-of-drug-discovery-and-development-min.png',
             'description' => 'Novel drugs do not just appear overnight, rather, they are borne from the ceaseless sacrifice of dedicated researchers. The story starts with exhaustively studying a promising compound and ends with a safe and properly documented final drug product in the market.',
             'content' => '


             <p class="text-justify">Novel drugs do not just appear overnight, rather, they are borne from the ceaseless sacrifice of dedicated researchers.</p>

             <p class="text-justify" style="font-size: 1.3em !important;"><strong>Step 1 Discovery</strong></p>
             <div class="text-subline"></div>
             <p class="text-justify">The story starts with understanding the pathology of a certain disease that the researcher aims to eradicate; or with the identification of a biological target responsible for the pathology of a disease. Doing so will enable them to know its nature, i.e.: how it spread, why it happened, and where it originated. </p>
             <p>&nbsp;</p>

             <img style=" margin:auto !important; box-shadow: 4px 3px 17px 0px #888888" src="/images/upload/step-one-discovery-min.png" class="img-responsive">
             <p>&nbsp;</p>

             <p class="text-justify">Afterwards, the researcher can begin to identify the mechanism/s of action required for a substance to stop or reverse the adverse effects of the disease. They will then study a wide array of compounds to check which can prove to be beneficial to their study.</p>

             <p class="text-justify">There are also instances wherein a promising molecular compound will appear first and will undergo extensive analyses to check its chemical or biological composition. Once researchers establish it, they can easily understand, and possibly foresee, how and what that compound will target once it reaches the circulatory system. Based on these information, researchers can develop a drug against a specific type of illness.</p>

             <p class="text-justify">There is a possibility that in this phase of scientific study numerous compounds, with varying health effects, may arise. But early testing as well as modification, optimization, and purification can help decrease that list.</p>

             <p>&nbsp;</p>

             <p class="text-justify" style="font-size: 1.3em !important;"><strong>Step 2 Preclinical Research</strong></p>
             <div class="text-subline"></div>

             <p>&nbsp;</p>

             <img style=" margin:auto !important; box-shadow: 4px 3px 17px 0px #888888" src="/images/upload/step-two-preclinical-research-min.png" class="img-responsive">
             <p>&nbsp;</p>

             <p class="text-justify">Once an active pharmaceutical ingredient is purified and formulated into a drug - easily taken in by patients - it is time to move towards Preclinical testing. This is where the dosing and the toxicity levels of the drug is studied; to verify the safety of the drug before proceeding towards human subjects.</p>

             <p class="text-justify">This phase involves two types:</p>
             <ul style="padding-left: 40px;">
                 <li>
                     <p class="text-justify">In Vitro: refers to procedures done in a controlled environment outside a living organism. </p>
                 </li>
                 <li>
                     <p class="text-justify">In Vivo: experiments utilizing a whole, living organism. These tests are often preferred rather than the latter, since researchers can readily observe the effects of the compound with a living subject.</p>
                 </li>
             </ul>
             <p>&nbsp;</p>

             <p class="text-justify">The Food and Drug Administration (FDA) requires researchers to use good laboratory practices (GLP):</p>
             <ul style="padding-left: 40px;">
                 <li>
                     <p>Study conduct</p>
                 </li>
                 <li>
                     <p>Personnel</p>
                 </li>
                 <li>
                     <p>Facilities</p>
                 </li>
                 <li>
                     <p>Equipment</p>
                 </li>
                 <li>
                     <p>Written protocols</p>
                 </li>
                 <li>
                     <p>Operating procedures</p>
                 </li>
                 <li>
                     <p>Study reports</p>
                 </li>
                 <li>
                     <p>System of quality assurance</p>
                 </li>

             </ul>

             <p class="text-justify">All these assure that the safety and integrity of FDA-regulated products are maintained.</p>


             <p>&nbsp;</p>

             <p class="text-justify" style="font-size: 1.3em !important;"><strong>Step 3 Clinical Research</strong></p>
             <div class="text-subline"></div>


             <p class="text-justify"><em>Clinical trial or clinical research</em> is the next phase; this focuses on the ways that the drug will interact with the human body. </p>
             <p>&nbsp;</p>

             <img style=" margin:auto !important; " src="/images/upload/step-three-clinical-research-min.png" class="img-responsive">
             <p>&nbsp;</p>

             <p class="text-justify">Prior to the start of the clinical trial, researchers must design their own clinical study based on what they want to accomplish on the different clinical research phases, and these are as follows:</p>

             <div style="overflow-x: auto !important;">
                 <table class="table table-striped table-bordered table-responsive" style="text-align: center;">
                     <tbody>
                       <tr>
                         <td><p><strong>Phase</strong></p></td>
                         <td><p><strong>Study Participants</strong></p></td>
                         <td><p><strong>Length of Study</strong></p></td>
                         <td><p><strong>Purpose</strong></td>
                       </tr>
                       <tr>
                         <td style="background:#E2EFD9 !important;">
                             <p>1</p>
                             <p style="font-size: 0.8em; text-align: left !important;">*Approximately 70% of drugs move to the next phase</p>
                         </td>
                         <td style="background:#E2EFD9 !important;"><p>20 to 100 healthy volunteers with the disease/condition.</p></td>
                         <td style="background:#E2EFD9 !important;"><p>Several months</p></td>
                         <td style="background:#E2EFD9 !important;"><p>Safety and dosage</p></td>
                       </tr>
                       <tr>
                         <td style="background:#FBE4D5 !important;">
                             <p>2</p>
                             <p style="font-size: 0.8em; text-align: left !important;">*Approximately 33% of drugs move to the next phase</p>
                         </td>
                         <td style="background:#FBE4D5 !important;"><p>Up to several hundred people with the disease/condition.</p></td>
                         <td style="background:#FBE4D5 !important;"><p>Several months to 2 years</p></td>
                         <td style="background:#FBE4D5 !important;"><p>Efficacy and side effects</p></td>
                       </tr>
                       <tr>
                         <td style="background:#FFE599 !important;" >
                             <p>3</p>
                             <p style="font-size: 0.8em; text-align: left !important;">*Approximately 25-30% of drugs move to the next phase</p>
                         </td>
                         <td style="background:#FFE599 !important;"><p>300 to 3,000 volunteers who have the disease/condition.</p></td>
                         <td style="background:#FFE599 !important;"><p>1 to 4 years</p></td>
                         <td style="background:#FFE599 !important;"><p>Efficacy and monitoring of adverse reactions</p></td>
                       </tr>
                       <tr>
                         <td style="background:#D9E2F3 !important;" >
                             <p>4</p>
                         </td>
                         <td style="background:#D9E2F3 !important;"><p>Several thousand volunteers who have the disease/condition.</p></td>
                         <td style="background:#D9E2F3 !important;">&nbsp;</td>
                         <td style="background:#D9E2F3 !important;"><p>Safety and efficacy</p></td>
                       </tr>
                     </tbody>
                   </table>
             </div>

             <p class="text-center" style="word-break: break-all !important;">Table 1 is referenced from: http://wcms-internet.fda.gov/patients/drug-development-process/step-3-clinical-research</p>

             <p>&nbsp;</p>

             <p class="text-justify">Clinical trials must follow a specifically designed study plan or protocol developed in-house. This where they must review all previous studies or information of the drug to formulate research questions and objectives. Only then can they decide on:</p>

             <ul style="padding-left: 40px;">
                 <li>
                     <p>The selection criteria for the population</p>
                 </li>
                 <li>
                     <p>The number of people that will take part</p>
                 </li>
                 <li>
                     <p>How long the study will last</p>
                 </li>
                 <li>
                     <p>Ways of limiting research bias, i.e.: control group</p>
                 </li>
                 <li>
                     <p>The dosage and drug delivery form of the drug during patient administration</p>
                 </li>
                 <li>
                     <p>What information will be collected and based on what tests</p>
                 </li>
                 <li>
                     <p>Method of data analysis</p>
                 </li>

             </ul>

             <p class="text-justify">Afterwards, the drug developers would need to submit to the FDA an Investigational New Drug (IND) application before they could begin with the clinical research proper. The application is comprised of:</p>

             <ul style="padding-left: 40px;">
                 <li>
                     <p>Information on animal studies with toxicity data</p>
                 </li>
                 <li>
                     <p>Manufacturing process information</p>
                 </li>
                 <li>
                     <p>Clinical protocols for all planned studies</p>
                 </li>
                 <li>
                     <p>All data from previous similar human researches</p>
                 </li>
                 <li>
                     <p>Investigator information</p>
                 </li>
             </ul>

             <p class="text-justify">Researchers will be able to ask the FDA for help during the process development to help enhance the study. Final approval of the clinical trial design will be given once it passes the FDA review, which can last at least 30 days. This process aims to protect volunteer participants from unreasonable risks of the trials.</p>


             <p>&nbsp;</p>

            <p class="text-justify" style="font-size: 1.3em !important;"><strong>Step 4 FDA Review</strong></p>
             <div class="text-subline"></div>
             <p>&nbsp;</p>

             <img style=" margin:auto !important; box-shadow: 4px 3px 17px 0px #888888" src="/images/upload/step-four-FDA-review-min.png" class="img-responsive">
             <p>&nbsp;</p>

             <p class="text-justify">Once the drug developer collected enough proof on the drug&rsquo;s safety and efficacy from the preclinical and clinical trials, they can file an application to market the drug. </p>

             <p class="text-justify">This is where the New Drug Application (NDA) comes in; it tells the full story that the drug has gone through. This application must include the reports on all studies, such as:</p>

             <ul style="padding-left: 40px;">
                 <li>
                     <p>Proposed labelling</p>
                 </li>
                 <li>
                     <p>Safety updates</p>
                 </li>
                 <li>
                     <p>Drug abuse information</p>
                 </li>
                 <li>
                     <p>Patent information</p>
                 </li>
                 <li>
                     <p>Institutional review board compliance information</p>
                 </li>
                 <li>
                     <p>Directions for use</p>
                 </li>
             </ul>

             <p class="text-justify">When the FDA approves this, it is a necessity that they work with the drug developers to refine prescribing information; this is known as &rsquo;labeling&rsquo;. This procedure provides information on the optimal use the drug.</p>


             <p class="text-justify">When alarming questions arise that needs careful consideration, the FDA can allow the public to make comments, as well as get an expert advise from one of its Advisory Committees.</p>
             <p>&nbsp;</p>


            <p class="text-justify" style="font-size: 1.3em !important;"><strong>Step 5 FDA Post-Market Safety Monitoring</strong></p>
             <div class="text-subline"></div>

             <p class="text-justify">After years of rigorous and delicate studies to ensure the safety and efficacy of a drug, there are still limitations that make it impossible to obtain a complete data on it. Thus, the ultimate safety of the product must be well observed even after years of its arrival in the market. </p>

             <p>&nbsp;</p>

             <img style=" margin:auto !important; box-shadow: 4px 3px 17px 0px #888888" src="/images/upload/step-five-FDA-post-market-safety-monitoring-min.png" class="img-responsive">
             <p>&nbsp;</p>

             <p class="text-justify">Should there be any report of unforeseen adverse reactions, it is the duty of both the drug manufacturer and the FDA to make necessary actions. </p>
             <p>&nbsp;</p>
             <p class="text-justify"><strong>References:</strong></p>
             <ol style="padding-left: 40px; ">
                 <li>
                     <p style="word-break: break-all !important;">1. The Marshall Protocol Knowledge Base.(2018). Differences between in vitro, in vivo, and in silico studies. Retrieved on 25 April 2019. Retrieved from: <a href="https://mpkb.org/home/patients/assessing_literature/in_vitro_studies">https://mpkb.org/home/patients/assessing_literature/in_vitro_studies</a></p>
                 </li>
                 <li>
                     <p style="word-break: break-all !important;">2. US FDA.(2018). The Drug Development Process. Retrieved on 25 April 2019. Retrieved from: <a href="https://www.fda.gov/ForPatients/Approvals/Drugs/default.html">https://www.fda.gov/ForPatients/Approvals/Drugs/default.html</a></p>
                 </li>

             </ol>



 <style type="text/css">
     a.btn-register-pharma{
         padding: 10px 20px;
         height: 36px;
         box-sizing: border-box;
         min-width: 90px;
         text-align: center;
         background: rgb(164, 204, 131);
         color: #fff;
         border: none;
         border-radius: 3px;
         font: inherit;
         font-size: 14px!important;
         cursor: pointer;
         white-space: nowrap;
         border: 1px solid rgb(164, 204, 131);
         transition: 0.3s;
         font-weight: bold;
         text-decoration: none !important;


     }

     a.btn-register-pharma:hover{
         color: rgb(164, 204, 131) !important;
         background:#fff !important;
     }

     .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
         border: 1px solid #000 !important;
     }

     .text-subline {
         position: relative;
         height: 1px;
         padding: 0;
         background: #e5e5e5;
         border: none;
     }
     .text-subline:before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         height: 1px;
         width: 50px;
         background: #a4cc83;
     }

 </style>



             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma,The Breakdown of Drug Discovery & Development',
             'meta_description' => 'The Breakdown of Drug Discovery & Development',
              'created_at' => '2019-05-03 00:00:00'],




              ['news_category_id' => '1',
            'old_id' => '162',
             'slug' => 'prioritizing-personnel-safety-in-antibiotic-production',
             'title' => 'Prioritizing Personnel Safety in Antibiotic Production',
             'author' => 'Esco Healthcare',
             'banner_img' => 'prioritizing-personnel-safety-in-antibiotic-production-min-min.png',
             'banner_thumb' => 'prioritizing-personnel-safety-in-antibiotic-production-min-min.png',
             'description' => 'Recent studies on antibiotic occupational exposure has shown evidences of high AMR levels and various adverse health effects among production line workers without proper equipment to isolate them from the process.',
             'content' => '


             <div class="row">
             <div class="col-md-12">
                 <p class="text-justify">Antibiotics are a medicinal class designed to kill (bactericide) or slow down (bacteriostatic) the growth of bacteria for the treatment of various infections. </p>

                 <p class="text-justify">The era of these drugs began in the 1940s with the introduction of penicillin by Alexander Fleming; and it has continued to develop with the presence of new types of antibiotics such as: </p>


                 <ul>
                     <li><p>Tetracyclines</p></li>
                     <li><p>Cephalosporins</p></li>
                     <li><p>Quinolones</p></li>
                     <li><p>Macrolides</p></li>
                     <li><p>Lincomycins</p></li>
                     <li><p>Sulfonamides</p></li>
                     <li><p>Glycopeptides</p></li>
                     <li><p>Aminoglycosides</p></li>
                     <li><p>Carbapenems </p></li>

                 </ul>

                 <p>&nbsp;</p>

                 <p class="text-justify">Recent studies show that antibiotics are still the main treatment response of today when it comes to fatal bacterial diseases, as such, they are responsible for preventing millions of deaths every year.</p>

                 <p class="text-justify">With this benefit, however, comes a compelling evidence that antibiotic use has led to the development of the global phenomenon -- antimicrobial resistance (AMR). </p>

                 <p class="text-justify">AMR happens when the strains of microorganisms, such as bacteria and fungi, have been exposed to improper use of antibiotics; thus, rendering the drug ineffective against these microbes. Since the infection will be left untreated, there is a risk of the illness to spread.</p>

                 <p class="text-justify">The trend of global AMR increased because of naturally-caused genetic changes; but more dramatically in the recent years due to the misuse of antimicrobials.</p>

                 <p class="text-justify">Furthermore, it is very common to encounter antibiotic-induced allergies; and in the US alone, there are reports that antibiotic-associated adverse events comprised 19.3% of the total emergency department visits for drug-related cases.</p>

                 <p class="text-justify">According to a study by Muzny et.al., the reason for this may be due to the small molecular size of antibiotics which gives way for these substances to easily combine with larger molecules and form a hapten-carrier complex. This in turn, stimulates the production of antibodies capable of eliciting an immune response. </p>

                 <p class="text-justify">In this regard, penicillins are the type of antibiotics extensively studied for their propensity to induce different immune-mediated hypersensitivity reactions. Cephalosporins, carbapenems, and monobactams may also cause allergic reactions and have notorious cross-reactivity issue with penicillins because they share a similar three-carbon, one nitrogen, and four member cyclic amide structure known as the &beta;-lactam ring. </p>

                 <p>&nbsp;</p>

                 <img src="/images/upload/the-different-types-of-antibiotics-with-b-lactam-rings-min.png" class="img-responsive">

                 <p class="text-center">Figure 1. The different types of antibiotics with &beta;-lactam rings.</p>


                 <p class="text-justify">Researches also show that these types of antibiotic triggers a hypertensive exaggerated allergic immune response, whose risk can range from skin rashes to life-threatening anaphylaxis. </p>

                 <p class="text-justify">Recent studies on antibiotic occupational exposure, mainly focused on penicillins, even provide evidence that production line workers have high levels of AMR and adverse health effects (respiratory diseases, dermatitis, and allergies); especially without proper isolation equipment and facility to ensure the cleanliness of the manufacturing area.</p>

                 <p class="text-justify">As such, the US Food and Drug Administration (US FDA) established special manufacturing requirements for penicillin as well as for non-penicillin &beta;-lactam drugs. They released a section within 21 Code of Federal Regulations (CFR) 211 - Current Good Manufacturing Practice for Finished Pharmaceuticals which requires pharmaceutical industries to set up strict facility controls that will prevent cross-contamination of the products. The guidelines stated that operations shall be performed within specifically dedicated and defined areas of adequate size to prevent contamination during the different stages of production. It also mentioned the importance of aseptic processing which includes the following:</p>

                 <ul>
                     <li><p>Smooth and hard floors, walls, and ceilings that are easily cleaned</p></li>
                     <li><p>Temperature and humidity controls</p></li>
                     <li><p>Air supply filtered through high-efficiency particulate air (HEPA) filters under positive pressure, regardless if airflow is laminar or non-laminar</p></li>
                     <li><p>Environmental monitoring system</p></li>
                     <li><p>Cleaning and disinfecting system for the room and the equipment </p></li>
                 </ul>


                 <p class="text-justify">Another guideline released was 21 CFR 211.46 for the ventilation, air filtration, air heating, and cooling of the facilities handling penicillin and other sensitizing drugs. Here, it also mentioned the necessity of an equipment to control the air pressure, microorganisms, dust, and humidity during the manufacture, processing, packing or holding of the product. It also specified that air-handling systems of different phases of penicillin production, shall be separated from other drug products.</p>
                 <p class="text-justify">The aim of the guidelines is to contain the compound and protect the personnel to prevent unnecessary adverse health events, and to lessen the spread of AMR.</p>
                 <p class="text-justify">Esco Pharma is a leading manufacturer of containment and isolation systems that can help you comply with the requirements and standards of antibiotic manufacture. </p>
                 <p class="text-justify">All units can be configured to suit the needs of the user; and there are even cases where Esco can enclose the whole manufacturing process within a fully customized isolator system with a validated bio-decontamination system.</p>

                 <p>&nbsp;</p>


                  <div style="overflow-x: scroll; width: 100%;">
                     <table class="table table-bordered table-responsive text-center" width="100%" style="text-align: left !important;">
                         <tbody>
                             <tr>
                                 <td class="text-center"><strong>Equipment</strong></td>
                                 <td class="text-center"><strong>Description</strong></td>
                             </tr>
                             <tr>
                                 <td>
                                     <a href="/product-details.php?productId=33&pg=pdt"><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" class="img-responsive"></a>
                                     <a href="/product-details.php?productId=33&pg=pdt"><p class="text-center"><strong>General Processing Platform Isolator (GPPI)</strong></p></a>
                                 </td>
                                 <td>
                                     <ul class="check_li">
                                         <li class="check_li_1"><p>Unidirectional/Laminar airflow</p></li>
                                         <li class="check_li_1"><p>User selectable positive or negative chamber pressure and single pass or recirculating airflow regimes</p></li>
                                         <li class="check_li_1"><p>BioVap<sup>&trade;</sup> biodecontamination system.</p></li>
                                         <li class="check_li_1"><p>Fully welded SS316L internal chambers with rounded coved corners</p></li>
                                         <li class="check_li_1"><p>Optional Bag-in Bag-out (BIBO) filters</p></li>
                                     </ul>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <a href="/product-details.php?productId=17&pg=pdt"><img src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" class="img-responsive"></a>
                                     <a href="/product-details.php?productId=17&pg=pdt"><p class="text-center"><strong>Aseptic Containment Isolator (ACTI)</strong></p></a>
                                 </td>
                                 <td>
                                     <ul class="check_li">
                                         <li class="check_li_1"><p>Adaptable aseptic containment solution with user defined pressure and airflow regimes</p></li>
                                         <li class="check_li_1"><p>Premium handling of biopharmaceutical germ seed cells and aseptic cell processing</p></li>
                                         <li class="check_li_1"><p>Premium solution for large volume sterility testing</p></li>
                                         <li class="check_li_1"><p>Pod Flange for small scale filling with auto loading/unloading Freeze Drier (ACTI-Pod)</p></li>
                                     </ul>
                                 </td>
                             </tr>

                             <tr>
                                 <td>
                                     <a href="/product-details.php?productId=35&pg=pdt"><img src="/images/product-images/thumb/containment-barrier-isolator-III-min.png" class="img-responsive"></a>
                                     <a href="/product-details.php?productId=35&pg=pdt"><p class="text-center"><strong>Containment Barrier Isolator </strong></p></a>
                                 </td>
                                 <td>
                                     <ul class="check_li">
                                         <li class="check_li_1"><p>Facilitates the isolation of a product or process while providing the required conditions for a sterile/aseptic environment</p></li>
                                         <li class="check_li_1"><p>Configured to operate at positive or negative pressure</p></li>
                                         <li class="check_li_1"><p>This equipment provides a personnel, product, and environmental protection</p></li>
                                         <li class="check_li_1"><p>Pharmacy Compounding (Chemotherapy/TPN)</p></li>
                                         <li class="check_li_1"><p>Small Batch Sterility Testing</p></li>
                                         <li class="check_li_1"><p>Small-scale Potent Material Handling</p></li>
                                         <li class="check_li_1"><p>Cell Processing</p></li>
                                         <li class="check_li_1"><p>Aseptic Processing</p></li>
                                         <li class="check_li_1"><p>Research and Development</p></li>

                                     </ul>
                                 </td>
                             </tr>

                             <tr>
                                 <td>
                                     <a href="/product-details.php?productId=36&pg=pdt"><img src="/images/product-images/thumb/streamline-compounding-isolator-thumb-min.png" class="img-responsive"></a>
                                     <a href="/product-details.php?productId=36&pg=pdt"><p class="text-center"><strong>Streamline<sup>&reg;</sup> Compounding Isolator - Gen 2 (SCI-G2)</strong></p></a>
                                 </td>
                                 <td>
                                     <ul class="check_li">
                                         <li class="check_li_1"><p>ULPA filters (as per IEST-RP-CC001.3 and HEPA (H14) filter as per EN 1822) with a typical efficiency of &gt;99.999% at 0.1 to 0.3 microns, providing ISO Class 3 air cleanliness as per ISO 14644-1.</p></li>
                                         <li class="check_li_1"><p>FDA-approved pressure-tight seals.</p></li>
                                         <li class="check_li_1"><p>Sentinel<sup>&trade;</sup> Gold Microprocessor controller supervises all functions and monitors airflow and pressure in real-time.</p></li>
                                         <li class="check_li_1"><p>Robust dual-wall construction. Unique Esco Dynamic Chamber<sup>&trade;</sup> plenum surrounds filter seals with negative pressure.</p></li>
                                         <li class="check_li_1"><p>Safe-change cuff rings permit glove changes with zero risk of contaminating the work zone or environment.</p></li>
                                     </ul>
                                 </td>
                             </tr>

                             <tr>
                                 <td>
                                     <a href="/product-details.php?productId=38&pg=pdt"><img src="/images/product-images/thumb/Healthcare-Platform-Isolator-2G-min.png" class="img-responsive"></a>
                                     <a href="/product-details.php?productId=38&pg=pdt"><p class="text-center"><strong>Isoclean<sup>&reg;</sup> Healthcare Platform Isolator (HPI)</strong></p></a>
                                 </td>
                                 <td>
                                     <ul class="check_li">
                                         <li class="check_li_1"><p>Facilitates the isolation of a product or process while providing the required for sterile/aseptic environment. It is configured to operate at positive or negative pressure.</p></li>
                                         <li class="check_li_1"><p>Pharmacy Compounding (Chemotherapy/TPN).</p></li>
                                         <li class="check_li_1"><p>Small-scale Potent Material Handling</p></li>
                                         <li class="check_li_1"><p>Aseptic Processing</p></li>
                                         <li class="check_li_1"><p>Research and Development</p></li>
                                         <li class="check_li_1"><p>Cell processing</p></li>


                                     </ul>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>


                 <p class="text-justify">With global footprints spanning the United States, Europe, and Asia, Esco Pharma is within the reach of all pharmaceutical industries. For more information check out the our wide range of pharmaceutical products at<a href="http://escopharma.com/">http://escopharma.com/</a>.</p>

                 <p class="text-justify">References:</p>



                 <ol style="list-style-type: decimal">
                     <li>
                         <p>ACS Chemistry for Life. (2019). Discovery and Development of Penicillin. Retrieved on 19 March 2019. Retrieved from:<a href="https://www.acs.org/content/acs/en/education/whatischemistry/landmarks/flemingpenicillin.html">https://www.acs.org/content/acs/en/education/whatischemistry/landmarks/flemingpenicillin.html</a> </p>
                     </li>
                     <li>
                         <p>AMR Industry Alliance. (2019). Common Antibiotic Manufacturing Framework. Retrieved on 19 March 2019. Retrieved from: <a href="https://www.amrindustryalliance.org/wp-content/uploads/2018/02/AMR_Industry_Alliance_Manufacturing_Framework.pdf">https://www.amrindustryalliance.org/wp-content/uploads/2018/02/AMR_Industry_Alliance_Manufacturing_Framework.pdf</a></p>
                     </li>
                     <li>
                         <p>BioPharm International. (2011). FDA Publishes Guidance for Preventing Cross-Contamination. Retrieved on 19 March 2019. Retrieved from: <a href="http://www.biopharminternational.com/fda-publishes-guidance-preventing-cross-contamination-0">http://www.biopharminternational.com/fda-publishes-guidance-preventing-cross-contamination-0</a> </p>
                     </li>
                     <li>
                         <p>ECA Academy. (2019). New FDA Guidance for the Prevention of Cross Contamination of Beta-Lactam Antibiotics. Retrieved on 19 March 2019. Retrieved from: <a href="https://www.gmp-compliance.org/gmp-news/new-fda-guidance-for-the-prevention-of-cross-contamination-of-beta-lactam-antibiotics">https://www.gmp-compliance.org/gmp-news/new-fda-guidance-for-the-prevention-of-cross-contamination-of-beta-lactam-antibiotics</a></p>
                     </li>
                     <li>
                         <p>Encyclopaedia Britannica.(2019). Hapten. Retrieved on 19 March 2019. Retrieved from: <a href="https://www.britannica.com/science/hapten">https://www.britannica.com/science/hapten</a> </p>
                     </li>
                     <li>
                         <p>Farshad, A., Enferadi, M., Bakand, S., Orak, R.J., and Mirkazemi, R.(2016). Penicillin dust exposure and penicillin resistance among pharmaceutical workers in Tehran, Iran. International Journal of Occupational and Environmental Health, 22(3). doi: <a href="https://dx.doi.org/10.1080%2F10773525.2016.1201238">10.1080/10773525.2016.1201238</a></p>
                     </li>
                     <li>
                         <p>Flasche, S. and Atkins, K.(2018). Balancing Benefits and Risks of Antibiotic Use, The Journal of Infectious Diseases, 218(9). <a href="https://doi.org/10.1093/infdis/jiy344">https://doi.org/10.1093/infdis/jiy344</a>  </p>
                     </li>
                     <li>
                         <p>Legendre, D., Muzny, C., Marshall, G., Swiatlo, E. (2014). Antibiotic Hypersensitivity Reactions and Approaches to Desensitization, Clinical Infectious Diseases, 58(8).doi: <a href="https://doi.org/10.1093/cid/cit949">https://doi.org/10.1093/cid/cit949</a></p>
                     </li>
                     <li>
                         <p>Nordqvist, Christian. (2019). What to know about antibiotics. Retrieved on 19 March 2019. Retrieved from: <a href="https://www.medicalnewstoday.com/articles/10278.php">https://www.medicalnewstoday.com/articles/10278.php</a></p>
                     </li>
                     <li>
                         <p>NPS MedicineWise. (2019). How do antibiotics work? Retrieved on 19 March 2019. Retrieved from: <a href="https://www.nps.org.au/medical-info/consumer-info/antibiotics-explained?c=how-do-antibiotics-work-0d496ac6">https://www.nps.org.au/medical-info/consumer-info/antibiotics-explained?c=how-do-antibiotics-work-0d496ac6</a> </p>
                     </li>
                     <li>
                         <p>Poon K.Y.T., and Macy, E. (2009). Self-reported antibiotic allergy incidence and prevalence: age and sex effects, The American Journal of Medicine, 122(8).doi:  10.1016/j.amjmed.2009.01.034.</p>
                     </li>
                     <li>
                         <p>Stephens, E. (2019). Antibiotics (Side Effects, List, Types). Retrieved on 19 March 2019. Retrieved from: <a href="https://www.emedicinehealth.com/antibiotics/article_em.htm">https://www.emedicinehealth.com/antibiotics/article_em.htm</a></p>
                     </li>
                     <li>
                         <p>US FDA. (2019). cGMP for Finished Pharmaceuticals- Design and Construction Features. Code of Federal Regulations. Retrieved on 18 March 2019. Retrieved from: <a href="https://www.accessdata.fda.gov/scripts/cdrh/cfdocs/cfcfr/CFRSearch.cfm?fr=211.176">https://www.accessdata.fda.gov/scripts/cdrh/cfdocs/cfcfr/CFRSearch.cfm?fr=211.176</a></p>
                     </li>
                     <li>
                         <p>US FDA. (2019). Questions and Answers on Good Manufacturing Practices Good Gidance Practices, Level 2 Guidance. Retrieved on 18 March 2019. Retrieved from: <a href="https://www.fda.gov/downloads/Drugs/./Guidances/UCM169670.pdf">https://www.fda.gov/downloads/Drugs/./Guidances/UCM169670.pdf</a> </p>
                     </li>
                     <li>
                         <p>World Health Organization. (2018). Antimicrobial resistance. Retrieved on 20 March 2019. Retrieved from: <a href="https://www.who.int/news-room/fact-sheets/detail/antimicrobial-resistance">https://www.who.int/news-room/fact-sheets/detail/antimicrobial-resistance</a> </p>
                     </li>

                 </ol>





                 <p>&nbsp;</p>

                 <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

                 <p>&nbsp;</p>

                 <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

                 <p>&nbsp;</p>

                 <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



                 <p>&nbsp;</p>

                 <p><strong>About our BRANDS</strong></p>
                 <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

                 <p>&nbsp;</p>

                 <p><strong>About Esco Pharma</strong></p>
                 <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

                 <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
             </div>
         </div>




         <style type="text/css">
             h2 {
                 text-align: left;
             }
             .articleContent ul {
                 margin-left: 25px !important;
             }
             ul.check_li {
                 list-style: none !important;
                 padding: 0 0 0 24px;
                 line-height: 26px;
             }
             ul.check_li li.check_li_1:before {
                 font-weight: bold;
                 content: "\2713";
                 float: left;
                 margin-left: -24px;
             }
         </style>

             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Healthcare,Prioritizing Personnel Safety in Antibiotic Production',
             'meta_description' => 'Prioritizing Personnel Safety in Antibiotic Production.',
              'created_at' => '2019-03-25 00:00:00'],




              ['news_category_id' => '1',
            'old_id' => '160',
             'slug' => 'the-gmp-know-hows',
             'title' => 'The GMP Know-Hows',
             'author' => 'Esco Healthcare',
             'banner_img' => 'the-gmp-know-hows2-min.jpg',
             'banner_thumb' => 'the-gmp-know-hows2-min.jpg',
             'description' => 'GMP, or Good Manufacturing Practice is one of the most important guidelines followed in the field of pharmacy. It tackles all aspects of production - from the raw materials, the facility, to the equipment.',
             'content' => '
             <div class="row">
             <div class="col-md-12">
                 <p class="text-justify">The pharmaceutical industry requires more demanding regulations as compared to other industries; to ensure that consumers will only be exposed to high quality products. This field also mandates that any changes to the machines, processes, and the product itself must comply to strict and evolving guidelines.</p>

                 <p class="text-justify">GMP, or Good Manufacturing Practice is one of the most important guidelines followed in the field of pharmacy. This regulation requires manufacturers, processors, and packagers of drugs, medical devices, food, and blood to follow certain steps for the production of effective, pure, and safe products.</p>

                 <p class="text-justify" style="font-size: 0.8em;">(See Esco Pharma Applications here: <a href="http://www.escopharma.com/application.php">http://www.escopharma.com/application.php</a>)</p>


                 <p class="text-justify">It is also referred as "cGMP", the addition of "c" stands for "current," stating that manufacturers must be up-to-date with the new technologies and systems to comply with the regulations.</p>

                 <p class="text-justify">GMP tackles all aspects of production - from the raw materials, the facility, to the equipment. It also involves personnel safety - encompassing training and personal hygiene. It is designed to lessen the risks, associated with any of the pharmaceutical production process, that cannot be eliminated in the final product.</p>

                 <p class="text-justify">Its regulations require a strict approach to manufacturing, compelling companies to minimize or eradicate possibilities of contamination and errors. Additionally, GMP addresses issues of record keeping, personnel qualifications, sanitation, cleanliness, equipment variation, process validation, and complaint handling.</p>

                 <p class="text-justify">Failure of compliance can result in serious consequences such as product recalls, fines, business seizure, and even jail time.</p>

                 <p class="text-justify" style="font-size: 0.8em;">(Learn more about Quality Control here: <a href="http://www.escopharma.com/articleSubPage.php?articleId=15&pg=apt">http://www.escopharma.com/articleSubPage.php?articleId=15&pg=apt</a>)</p>

                 <p class="text-justify">Since most GMP requirements are very general and open-ended, this gives manufacturers much space for deliberation on how they would interpret and implement the controls. This manner provides flexibility on how the regulations would deem fit for individual businesses&rsquo; systems.</p>


                 <p class="text-justify">At <a href="http://www.escopharma.com/">Esco Pharma</a>, we provide specialist services, cGMP compliant equipment packaged and process solutions, which leads to improved protection of operators, reduction of cross-contamination and more efficient processing; thereby advancing occupational health and human healthcare.</p>

                 <p class="text-justify">See our GMP compliant products here: <a href="http://www.escopharma.com/products.php">http://www.escopharma.com/products.php</a></p>

                 <p class="text-justify">References:</p>

                 <ol>
                     <li>
                         <p>GMP Resources. (2019). Accessed last 19 Mar 2019 from <a href="https://ispe.org/initiatives/regulatory-resources/gmp">https://ispe.org/initiatives/regulatory-resources/gmp</a></p>
                     </li>
                     <li>
                         <p>GMP Question and Answers. (2019). Accessed last 19 Mar 2019 from <a href="https://www.who.int/medicines/areas/quality_safety/quality_assurance/gmp/en/">https://www.who.int/medicines/areas/quality_safety/quality_assurance/gmp/en/</a></p>
                     </li>
                     <li>
                         <p>What is GMP. (2019). Accessed last 19 Mar 2019 from <a href="https://ispe.org/initiatives/regulatory-resources/gmp/what-is-gmp">https://ispe.org/initiatives/regulatory-resources/gmp/what-is-gmp</a></p>
                     </li>
                 </ol>

                 <p>&nbsp;</p>

                 <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

                 <p>&nbsp;</p>

                 <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

                 <p>&nbsp;</p>

                 <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



                 <p>&nbsp;</p>

                 <p><strong>About our BRANDS</strong></p>
                 <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

                 <p>&nbsp;</p>

                 <p><strong>About Esco Pharma</strong></p>
                 <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

                 <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
             </div>
         </div>

             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Healthcare, The GMP Know-Hows',
             'meta_description' => 'The pharmaceutical industry requires more demanding regulations as compared to other industries; to ensure that consumers will only be exposed to high quality products. This field also mandates that any changes to the machines, processes, and the product itself must comply to strict and evolving guidelines..',
              'created_at' => '2019-03-22 00:00:00'],



              ['news_category_id' => '1',
            'old_id' => '158',
             'slug' => 'kilo-labs-from-small-to-big',
             'title' => 'Kilo Labs: From small to Big!',
             'author' => 'Esco Healthcare',
             'banner_img' => 'kilo-labs-from-small-to-big-min.png',
             'banner_thumb' => 'kilo-labs-from-small-to-big-min.png',
             'description' => 'Kilo labs, also called pilot scale manufacturing, are able to mimic plant conditions to ensure that the desired form or polymorph of the active pharmaceutical ingredient is obtained.',
             'content' => '

             <p class="text-justify">In the drug development process, small scale production is done before proceeding to pilot batch manufacturing which ultimately leads to large scale production. Small scale productions, using batch system reactions, distillation set-ups, and chemical syntheses are done using kilo labs, which are laboratory settings utilizing large glass vessels to produce kilogram quantities of the material or drug.</p>


             <p>&nbsp;</p>

             <center><img style="max-width: 266px; margin:auto;" src="/images/upload/laboratory-reactor-min.jpg" class="img-responsive mb-3"></center>
             <p class="text-center">Figure 1. Laboratory reactor</p>
             <p>&nbsp;</p>

             <p class="text-justify">Kilo labs, also called pilot scale manufacturing, are able to mimic plant conditions to ensure that the desired form or polymorph of the active pharmaceutical ingredient is obtained. They are able to produce sufficient quantities (in kilograms) of an active pharmaceutical ingredient that can be used to provide important information such as the presence trace impurities and toxicological properties that are otherwise almost impossible to test on a small laboratory scale. They can also be used for low volume production of active pharmaceutical ingredients.</p>

             <p class="text-justify">One of the issues of manufacturing of drugs is its scalability. Even if it is possible to produce a drug in a laboratory setting, there are instances that a scale up production might not be feasible resulting in the waste of time and resources.  </p>

             <p>&nbsp;</p>

             <img style="margin: auto;" src="/images/upload/glass-pipe-chemical-reactor-equipment-min.jpg" class="img-responsive mb-3">
             <p class="text-center">Figure 2. Glass pipe chemical reactor equipment.</p>


             <p>&nbsp;</p>

             <p class="text-justify">Kilo labs do not abide to the rules of GMP hence it is cheaper and takes lesser time to set up and operate. Using these will allow the early detection of any problem that may arise in the production process; while also providing solutions for these with minimal waste of resource. They are also proven to be a cost-effective. After achieving successful results from the kilo labs, pilot batch manufacturing may proceed.</p>

             <p class="text-justify">In most instances, kilo labs may produce dust, vapour, fumes and/or liquids that may be hazardous to the operators, which may also be a source of contamination to other products; hence, kilo labs must be contained within enclosures. These in turn, will provide protection and ease of access and maintenance. Such enclosures are customizable and can cater features such as: airflow patterns, negative pressurization, and even chemical resistance. </p>
                 <p>&nbsp;</p>
             <p>&nbsp;</p>

             <div class="row">

               <div class="col-sm-7" style="padding:0px;">
                   <img src="/images/upload/esco-glassware-hoods1-min.jpg" style="min-height: 350px; max-height: 350px;width: 100%;" class="img-responsive mb-3">
               </div>
               <div class="col-sm-5" style="padding:0px;">
                   <img src="/images/upload/esco-glassware-hoods2-min.jpg" style="min-height: 350px; max-height: 350px;width: 100%;" class="img-responsive mb-3">
               </div>



             </div>
             <p class="text-center">Figure 3. Esco Glassware Hoods</p>

             <p>&nbsp;</p>

             <p class="text-justify"><a href="http://www.escopharma.com/" style="color: rgb(164, 204, 131);"><strong style="color: rgb(164, 204, 131);">Esco Pharma&rsquo;s</strong></a>  innovative pharmaceutical technology offers Esco Glassware Hoods. These are customizable units made to serve their containment purpose for glassware set-ups for batch reactions, distillation set-ups, and chemical synthesis used in kilo labs and pilot plant systems. Esco Glassware hoods also have the option to be designed as see-through </p>

             <p>&nbsp;</p>

             <img style="margin:auto;" src="/images/upload/integrated-frontier-acela-m-series-fume-hood-min-min.png" class="img-responsive mb-3">

             <p class="text-center">Figure 4. Integrated Frontier<sup>&reg;</sup> Acela M<sup>&trade;</sup> Series Fume Hood and Weighing and Dispensing Containment Isolator (WDCI)</p>

             <p>&nbsp;</p>

             <p class="text-justify">For a smaller scale production, another option is the use of an integrated system of the Frontier<sup>&reg;</sup> Acela M<sup>&trade;</sup> Series Fume Hood and Weighing and Dispensing Containment Isolator (WDCI). The fume hood is connected to the isolator with either a static or dynamic pass-through chamber utilizing inflatable seals ensuring a seamless transfers of hazardous chemicals used as precursors for drug production. An easy-to-decontaminate sliding tray facilitates the transfer of materials from one chamber to another. This system can be customized to allow the accommodation of the necessary glassware needed in compounding of hazardous drugs whilst preventing its exposure to the outside environment. Glassware used are placed inside the isolator while the starting material or chemicals and other equipment may be stored temporarily before processing inside the isolator.</p>
             <p>&nbsp;</p>

             <p class="text-justify">References:</p>

             <ol>
                 <li>
                     <p>Pisano, G., 1997. The Development Factory: Unlocking the Potential of Process Innovation. [ONLINE] available at: <a href="https://books.google.com.ph/books?id=xrnTsLrn9y4C&pg=PA129&lpg=PA129&dq=kilo+lab+importance&source=bl&ots=lixiNWSvdZ&sig=ACfU3U1Pi-USCi9Uq0xljPvoPkU7XJLuJw&hl=en&sa=X&ved=2ahUKEwinmPDdgrPgAhXBWisKHUrGDzU4ChDoATAAegQIChAB#v=onepage&q=kilo%20lab%20importance&f=false [Accessed 11 Feb 2019] ">https://books.google.com.ph/books?id=xrnTsLrn9y4C&pg=PA129&lpg=PA129&dq=kilo+lab+importance </a> </p>
                 </li>
             </ol>

             <p>&nbsp;</p>

             <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

             <p>&nbsp;</p>

             <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

             <p>&nbsp;</p>

             <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



             <p>&nbsp;</p>

             <p><strong>About our BRANDS</strong></p>
             <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

             <p>&nbsp;</p>

             <p><strong>About Esco Pharma</strong></p>
             <p class="text-justify">Esco Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

             <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

             <style type="text/css">
                 h2{
                     text-align: left;
                 }
             </style>
             ',
             'is_activated' => '1',
             'is_shareable' => '1',
             'meta_keywords' => 'Esco Pharma, Esco Healthcare, Kilo Labs, Laboratory reactor,  Integrated Frontier® Acela M™, Fume Hood, Dispensing Containment Isolator (WDCI) ',
             'meta_description' => 'Kilo labs, also called pilot scale manufacturing, are able to mimic plant conditions to ensure that the desired form or polymorph of the active pharmaceutical ingredient is obtained.',
              'created_at' => '2019-03-01 00:00:00'],



              ['news_category_id' => '1','old_id' => '156','slug' => 'orodispersible-films-a-modernized-drug-delivery-system','title' => 'Orodispersible Films: A Modernized Drug Delivery System','banner_img' => 'orodispersible-films-a-modernized-drug-delivery-system.jpg','banner_thumb' => 'orodispersible-films-a-modernized-drug-delivery-system.jpg','description' => '<p class="text-justify">Pharmaceutical manufacturers developed the Oral Film Technology (OFT), also known as <strong>Orodispersible films</strong> (ODFs), fast dissolving films, or fast disintegrating films. This type of pharmacokinetic mechanism allows it to avoid first-pass metabolism, thus, providing a fast onset of action with enhanced bioavailability.</p>','content' => '
              <p class="text-justify">Ground-breaking scientific discoveries led to the formulation of different medications to fight all sorts of diseases; and drug delivery is by far one of the most important part of those researches. </p>

              <p class="text-justify">The system of drug delivery refers to a formulation or a device that facilitates the entry of an active pharmaceutical ingredient across biological membranes toward its targeted site of action for drug absorption. It is also responsible for improving the safety and efficacy of the drug as it controls the rate, time, and place of drug release in the body.</p>

              <p>&nbsp;</p>

              <p class="text-justify">The different routes of drug delivery into the body are:</p>

              <ol class="list-unstyled pl-3">
                  <li><p>1. Oral</p> </li>
                  <li><p>2. Parenteral</p> </li>
                  <li><p>3. Intravenous (IV), intramuscular (IM), intradermal (ID), intrathecal (IT)</p> </li>
                  <li><p>4. Intranasal</p> </li>
                  <li><p>5. Sublingual, buccal</p> </li>
                  <li><p>6. Rectal</p> </li>
                  <li><p>7. Vaginal</p> </li>
                  <li><p>8. Ocular</p> </li>
                  <li><p>9. Otic</p> </li>
                  <li><p>10. Nasal, inhalation, nebulization</p> </li>
                  <li><p>11. Subcutaneous</p> </li>
              </ol>

              <p>&nbsp;</p>

              <p class="text-justify">Oral route is regarded as the most commonly preferred, most economical, and most convenient route of drug delivery in the pharmaceutical industry. However, among the geriatric and paediatric populations, conventional dosage forms such as tablets, capsules, solutions, and suspensions may cause difficulty in swallowing. </p>

              <p class="text-justify">To address this issue, pharmaceutical manufacturers developed the Oral Film Technology (OFT), also known as <strong>Orodispersible films</strong> (ODFs), fast dissolving films, or fast disintegrating films. These are postage sized strips of thin polymeric films intended to be placed on the tongue and rapidly disintegrate or dissolve within 30 seconds. This type of pharmacokinetic mechanism allows it to avoid first-pass metabolism, thus, providing a fast onset of action with enhanced bioavailability. </p>



              <p>&nbsp;</p>

              <p><strong>Manufacturing ODFs</strong></p>

              <p class="text-justify">The manufacture or preparation of ODFs require a careful selection of raw materials as they are targeting special populations (geriatrics and paediatrics).</p>
              <p class="text-justify">An ODF is comprised of:</p>

              <ol class="list-unstyled pl-3">
                  <li>
                      <p>1. Active Pharmaceutical Ingredient (API) - 30%</p>
                      <ul style="padding-left: 35px;">
                          <li><p>The main ingredient with the therapeutic effect. It is incorporated into the film via particulate or molecular dispersion.</p> </li>
                          <li><p>The particle size, distribution, and polymorphism of the API are critical attributes of the film as they can affect the solubility, dissolution rate, and bioavailability.</p> </li>
                          <li><p>There is a limited amount of drug that can be loaded into the film, thus, high potency low-dose drugs are preferred; maximum amount of drug load depends on the solubility and compatibility of the API with the excipients.</p> </li>
                      </ul>
                  </li>
                  <li>
                      <p>2. Water-soluble film-forming polymers - 40-50%</p>
                      <ul style="padding-left: 35px;">
                          <li><p>Film-forming polymers are critical ingredients of ODFs (patents of ODFs are based on the various polymers, APIs, and preparation methods).</p> </li>
                          <li><p>Polymer properties depend on their molecular masses: polymers with low-molecular-mass dissolve quicker, but polymers with higher mass has better mechanical properties.</p> </li>
                          <li><p>Polycarbophil or even polyacrylic acid can be used for the development of sustained-release or mucoadhesive films.</p> </li>
                      </ul>
                  </li>
                  <li>
                      <p>3. Plasticizers - 0-20%</p>
                      <ul style="padding-left: 35px;">
                          <li><p>Necessary to obtain a flexible and non-brittle ODF.</p> </li>
                          <li><p>Improves plasticity and elasticity of the resulting films.</p> </li>
                      </ul>
                  </li>
                  <li>
                      <p>4. Fillers, flavors, colors, etc. - 0-40%</p>
                      <ul style="padding-left: 35px;">
                          <li><p><strong>Flavorants:</strong> masks the unpleasant taste of APIs.</p> </li>
                          <li>
                              <p><strong>Others:</strong></p>
                              <ul style="padding-left: 35px;">
                                  <li><p><strong>Saliva-stimulating agents</strong> can shorten disintegration time.</p></li>
                                  <li><p>Addition of <strong>enzyme inhibitors</strong> to prevent drug degradation.</p></li>
                                  <li><p><strong>Surfactants</strong> improve spreading of the coating mass.</p></li>
                                  <li><p><strong>Stabilizers</strong> prevent sedimentation.</p></li>
                                  <li><p><strong>Natural gums</strong> improve viscosity and film-forming capacity.</p></li>

                              </ul>

                          </li>
                      </ul>
                  </li>
              </ol>


              <p>&nbsp;</p>

              <p class="text-justify">The two main methods of manufacturing ODFs are <strong>tablet coating</strong> and <strong>solvent casting</strong> or hot-melt extrusion. ODF preparation is flexible, and currently solvent casting is the method of choice.</p>
              <p class="text-justify"><strong>Solvent Casting</strong> refers to the process of suspending the API in a mixture of polymers, plasticizers, and other excipients which have undergone dissolution via volatile solvents (water or ethanol). The resulting material is referred to as film dope, which will then be spread upon a roll of release media (plastic impregnated paper). Later on, the coated media will go through a drying apparatus, either an oven or a convection chamber, to facilitate solvent removal. Lastly, the dried film will be cut into strips and will be individually packed in sealed pouches.</p>

              <p class="text-justify">This method is ideal when manufacturing a film with a heat-sensitive API, because the required temperature is relatively low than the ones used in hot-melt extrusion.</p>

              <p class="text-justify">On the other-hand, the method of <strong>hot-melt extrusion</strong> utilizes dry ingredients which will be heated, melted, and mixed via an extruder screw until it homogenizes. The melted material will then be subjected to a flat extrusion die that will press the <em>extrudate</em> into the desired film shape. Elongation rollers to improve the thickness and strength of the film will be used while the material is still hot and pliable. Finally, the extruded film will be cooled, cut, and then packed. </p>

              <p class="text-justify">Also, since this process involves the use of high temperature, all ingredients used should be devoid of water and any volatile solvents to prevent the presence of voids in the film that might affect the product&#39;s uniformity, strength, and appearance.  </p>

              <p class="text-justify">The problem with hot-melt extrusion is it exposes the ingredients of the film to a very high temperature; which may cause degradation of the raw materials.</p>

              <p>&nbsp;</p>

              <p><strong>Advantages and Disadvantages</strong></p>

              <p class="text-justify">ODFs are formulated to rapidly dissolve once placed on the tongue and in contact with the saliva, thus, eliminating the need to swallow. This drug delivery design increases compliance among paediatric and geriatric populations, as well as with bedridden patients suffering from dysphagia, Parkinson&#39;s disease, or even vomiting. </p>

              <p class="text-justify">Moreover, since the drugs are intended to be released and absorbed into the oral mucosa, it completely by-passes the first-pass metabolism; wherein the concentration of a drug may be greatly reduced before it reaches the circulatory system, as it is first absorbed and metabolised in the gastrointestinal tract and the liver.</p>

              <p class="text-justify">Unlike tablets, the problems of fragility during manufacture, storage, handling, and administration are non-existent with ODFs; instead they exhibit flexibility and robustness to mechanical forces. </p>

              <p class="text-justify">ODFs also offer accurate dosing since each film will contain a precise drug content; making them superior to conventional oral suspensions which must be poured out and measured to obtain a single dose. This characteristic heralds the potential of ODFs to be used for personalized medication therapy during extemporaneous pharmacy compounding. </p>

              <p class="text-justify">The major disadvantage of an ODF is its limited drug loading capacity; the reason why these films are apt for handling highly-potent low-dose drugs. There is also the problem of taste masking, as adding this type of excipient may greatly lessen the concentration of the API; for extremely bitter drugs, taste masking may even be impossible</p>

              <p>&nbsp;</p>

              <hr>

              <p>&nbsp;</p>

              <p class="text-justify">The continued convenience of intake presented by oral dosage forms, maintains their stand on the pedestal as the most preferred route of drug delivery. Due to this, pharmaceutical industries are undertaking studies to enhance the characteristics of these drugs; hence, the presence of fast-release tablets, fast-disintegrating tablets, oral suspensions, oral dispersible tablets, and now the orodispersible films. This rapidly dissolving transformed the conventional solid and liquid dosage forms into a advanced, stable, and effective delivery system. </p>

              <p class="text-justify">Esco Pharma&#39;s innovative pharmaceutical technology offers state-of-the-art isolators and numerous cleanroom equipment for the preparation of orodispersible films. Our customizations specialties and our compliance to international standards make us one of the most flexible pharmaceutical companies in the world.</p>

              <p>&nbsp;</p>

              <p class="text-justify">References:</p>

              <ol>
                  <li>
                      <p>1. Eva Maria Hoffmann, Armin Breitenbach, &amp; J&ouml;rg Breitkreutz. (2011). Advances in orodispersible film for drug delivery. <em>Expert opinion on drug delivery</em>, 8(3), 299-316. Doi: 10.1517/17425247.2011.553217. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.researchgate.net/publication/49801513_Advances_in_orodispersible_film_for_drug_delivery">https://www.researchgate.net/publication/49801513_Advances_in_orodispersible_film_for_drug_delivery</a> </p>
                  </li>
                  <li>
                      <p>2. Gijare C. &amp; Deshpande A.(2018). Orodispersible films: a systematic patent review. <em>National Center for Biotechnology Information</em>, 12(2), 110-120. </p>
                      <p>Doi:10.2174/1872211312666180509100216. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.ncbi.nlm.nih.gov/pubmed/?term=Gijare%20C%5BAuthor%5D&cauthor=true&cauthor_uid=29745346">https://www.ncbi.nlm.nih.gov/pubmed/?term=Gijare%20C%5BAuthor%5D&amp;cauthor=true&amp;cauthor_uid=29745346</a> </p>

                  </li>
                  <li>
                      <p>3. Jennifer Le.(2019). Drug Administration. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.msdmanuals.com/en-sg/home/drugs/administration-and-kinetics-of-drugs/drug-administration">https://www.msdmanuals.com/en-sg/home/drugs/administration-and-kinetics-of-drugs/drug-administration</a></p>
                  </li>
                  <li>
                      <p>4. Marta Slavkova &amp; Jorg Breitkreutz.(2015). Orodispersible drug formulations for children and elderly. <em>European Journal of Pharmaceutical Sciences</em>, 75(30), 2-9. </p>
                      <p>Doi.org/10.1016/j.ejps.2015.02.015. Retrieved on January 25, 2019. </p>

                  </li>
                  <li>
                      <p>5. Particle Sciences.(2010). Dissolving Films. Retrieved on January 28, 2019. Retrieved on: <a href="https://www.particlesciences.com/news/technical-briefs/2010/dissolving-films.html">https://www.particlesciences.com/news/technical-briefs/2010/dissolving-films.html</a> </p>
                  </li>
                  <li>
                      <p>6. Pooja Arora &amp; Vandana Arora Sethi.(2013). Orodispersible tablets: a comprehensive review. <em>International Journal of Research and Development in Pharmacy and Life Sciences</em> 2(2), 270-284. ISSN: 2278-0238. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.omicsonline.org/open-access/orodispersible-tablets-a-comprehensive-review-.pdf">https://www.omicsonline.org/open-access/orodispersible-tablets-a-comprehensive-review-.pdf</a> </p>
                  </li>
                  <li>
                      <p>7. ScienceDirect.(2015). Strategies to Modify the Drug Release from Pharmaceutical Systems. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.sciencedirect.com/science/article/pii/B9780081000922000035">https://www.sciencedirect.com/science/article/pii/B9780081000922000035</a></p>
                  </li>
                  <li>
                      <p>8. Springer Nature.(2019). Drug Delivery. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.nature.com/subjects/drug-delivery">https://www.nature.com/subjects/drug-delivery</a></p>
                  </li>
                  <li>
                      <p>9. University of Nottingham.(2013). Understanding First Pass Metabolism. Retrieved on January 25, 2019. Retrieved from: <a href="https://www.nottingham.ac.uk/nmp/sonet/rlos/bioproc/metabolism/01.html">https://www.nottingham.ac.uk/nmp/sonet/rlos/bioproc/metabolism/01.html</a> </p>
                  </li>
                  <li>
                      <p>10. Wen Chin Foo, Yuet Mei Khong, Rajeev Gokhale, &amp; Sui Yung Chan. (2018). A novel unit-dose approach for the pharmaceutical compounding of an Orodispersible film. <em>International Journal of Pharmaceutics</em> 539(2018), 165-174. Doi.org/10.1016/j.ijpharm.2018.01.047. Retrieved on January 25, 2019.</p>
                  </li>
              </ol>

              <p>&nbsp;</p>

              <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

              <p>&nbsp;</p>

              <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

              <p>&nbsp;</p>

              <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



              <p>&nbsp;</p>

              <p><strong>About our BRANDS</strong></p>
              <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

              <p>&nbsp;</p>

              <p><strong>About Esco Pharma</strong></p>
              <p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

              <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

                  <style type="text/css">
                  p {
                      margin: 0 0 3px;
                  }
                  h2 {
                      text-align: left;
                  }
              </style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Orodispersible Films: A Modernized Drug Delivery System','meta_description' => 'Orodispersible Films: A Modernized Drug Delivery System','created_at' => '2019-01-30 00:00:00'],

              ['news_category_id' => '1','old_id' => '157','slug' => 'handling-hpap-is-choosing-the-best-containment-strategies','title' => 'Handling HPAPIs: Choosing the Best Containment Strategies','banner_img' => 'Handling HPAPIs The Best Containment Strategies-min.jpg','banner_thumb' => 'Handling HPAPIs The Best Containment Strategies-min.jpg','description' => '<p class="text-justify">The determination of personnel and environmental potential exposure is usually required for the safe handling of high potency active pharmaceutical ingredients (HPAPIs). A selective process in selecting the most appropriate strategies is also a must for the assurance of containment.</p>','content' => '
              <p class="text-justify">The determination of personnel and environmental potential exposure is usually required for the safe handling of high potency active pharmaceutical ingredients (HPAPIs). A selective process in selecting the most appropriate strategies is also a must for the assurance of containment.</p>

              <p class="text-justify">HPAPIs are characterized by the occupational exposure limit (OEL) of at or lower than 10 micrograms per cubic meter of air (&micro;g/m3). The lower the value, the more potent the compound; and the greater need for a higher level of containment is required. Their ability to target pathogens are more precise and more selective in comparison with the other conventional medicines in the market.</p>

              <p class="text-justify">Antibody drug conjugates (ADCs), which use very toxic molecules specifically targeting cancer cells serve as one example for HPAPIs. These compounds represent an advancement in oncology treatment being highly potent cytotoxic drugs that do not harm the healthy cells unlike conventional chemotherapy.</p>

              <p class="text-justify">In the manufacture of these highly potent compounds, specialized considerations are needed to be deliberated for the facility design, equipment, operation, and safety to achieve the best level of containment of the drug product.</p>
              <p>&nbsp;</p>


              <p class="text-justify">The assurance of environmental and employee safety exposure would require specialized containment. The following factors show the facility design of a typical kilo-laboratory for HPAPI handling:</p>
              <ul style="padding-left: 35px;">
                  <li><p>Room pressure controls designed for containment, including monitoring and verification, with the main HPAPI-handling area (negatively pressured area to the surrounding rooms)</p> </li>
                  <li><p>Airlocks around the manufacturing and laboratory spaces must provide gowning and degowning area with proper pressure controls</p> </li>
                  <li><p>Misting showers must be included in the degowning and exit areas to purge the personnel of any unwanted contaminants prior to the removal of personal protective equipment (PPE)</p> </li>
                  <li><p>Only important trained employees must have access to the HPAPI-handling areas</p> </li>
                  <li><p>Heating, ventilation, and air conditioning (HVAC) systems must be designed for single-pass air with temperature, humidity, and particle controls</p> </li>
                  <li><p>Safe-change filters inside isolators, ventilated enclosures, general HVAC exhaust system, etc., must be used in the filtration and capture of contaminants</p> </li>
                  <li><p>Preventive maintenance and proper change-control procedures for the assurance of an effective operating equipment</p> </li>
              </ul>

              <p>&nbsp;</p>

              <p class="text-justify">Engineering controls are also a must in using HPAPIs, as they are the primary source of containment and isolation of potent compounds. There are five stages in the hierarchy of controls that define the best level of protection and it is as follows:</p>

              <ul style="padding-left: 35px;">
                  <li><p>Product isolation: closed-system glassware and reactors, &alpha;/&beta; valves</p> </li>
                  <li><p>Containment equipment: isolators, ventilated laminar flow enclosures, rapid-transfer ports, local exhaust ventilation, closed-system cleaning via clean-in-place</p> </li>
                  <li><p>Facility design: air pressurization, high number of air changes, single-pass air, restricted access, airlocks, safe-change filters, misting showers</p> </li>
                  <li><p>PPE: chemical suits needed for solvents and reagents, coveralls and hoods, powered air-purifying respirator (PAPR), proper glove selection</p> </li>
                  <li><p>Personnel: proper training, procedures and policies, education, health monitoring</p> </li>
              </ul>

              <p>&nbsp;</p>

              <img src="/images/upload/OEBOEL-min.png" class="img-responsive" style="margin:auto;">

              <p style="text-align: center;"><em>Figure 1. Operator exposure as defined by OEL/OEB with the appropriate Esco equipment for containment.</em></p>

              <p>&nbsp;</p>
              <div class="table-responsive">
          <table class="MsoTable15Grid5DarkAccent6" border="1" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; border: none;">
           <tbody><tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-left-alt:solid white .5pt;mso-border-left-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:5"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">BAND</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:solid white 1.0pt;mso-border-top-themecolor:background1;
            border-left:none;border-bottom:solid white 1.0pt;mso-border-bottom-themecolor:
            background1;border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 1</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:solid white 1.0pt;mso-border-top-themecolor:background1;
            border-left:none;border-bottom:solid white 1.0pt;mso-border-bottom-themecolor:
            background1;border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 2</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:solid white 1.0pt;mso-border-top-themecolor:background1;
            border-left:none;border-bottom:solid white 1.0pt;mso-border-bottom-themecolor:
            background1;border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 3</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:solid white 1.0pt;mso-border-top-themecolor:background1;
            border-left:none;border-bottom:solid white 1.0pt;mso-border-bottom-themecolor:
            background1;border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 4</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:solid white 1.0pt;mso-border-top-themecolor:background1;
            border-left:none;border-bottom:solid white 1.0pt;mso-border-bottom-themecolor:
            background1;border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 5</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:solid white 1.0pt;mso-border-top-themecolor:background1;
            border-left:none;border-bottom:solid white 1.0pt;mso-border-bottom-themecolor:
            background1;border-right:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 6</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-left:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-bottom-alt:solid white .5pt;mso-border-bottom-themecolor:
            background1;mso-border-right-alt:solid white .5pt;mso-border-right-themecolor:
            background1;background:#70AD47;mso-background-themecolor:accent6;padding:
            0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:1"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEB 7</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
           </tr>
           <tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-top:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-alt:solid white .5pt;mso-border-themecolor:background1;
            background:#70AD47;mso-background-themecolor:accent6;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:68"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OEL</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">&gt;1000 - 5000 &micro;g/m<sup>3</sup><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">&gt;100 - &#8804;1000 &micro;g/m<sup>3</sup><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">&gt;10 - &#8804;100 &micro;g/m<sup>3</sup><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">&gt;1 - &#8804;10 &micro;g/m<sup>3</sup><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">&lt;1.0 - 0.01 &micro;g/m3<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">0.01 - 0.001 &micro;g/m3<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">&lt;0.001 &micro;g/m<sup>3</sup>&nbsp;- &lt;1 ng/m<sup>3</sup><o:p></o:p></span></p>
            </td>
           </tr>
           <tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-top:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-alt:solid white .5pt;mso-border-themecolor:background1;
            background:#70AD47;mso-background-themecolor:accent6;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:4"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Equipment
            to Use</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Ventilation Containment<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Ventilation Containment or Flowhoods without downflow (single
            pass Fume cabinets)<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Downflow Booths or VBEs, Flowhoods<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">VBEs or DFBs with higher containment, Flowhoods with downflow
            and inflow for small volume<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Isolators recommended however if handling less than 3kg and
            short task duration, low dust cloud potential reverse oRABs possible<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Isolators<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Isolators<o:p></o:p></span></p>
            </td>
           </tr>
           <tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-top:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-alt:solid white .5pt;mso-border-themecolor:background1;
            background:#70AD47;mso-background-themecolor:accent6;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:68"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Production</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:68"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">OSD</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td colspan="3" style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">VBEs<o:p></o:p></span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">DFB with high containment screen<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">WDCI<o:p></o:p></span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">DFB with flexible isolator<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">WDCI<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">WDCI<o:p></o:p></span></p>
            </td>
           </tr>
           <tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-top:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-alt:solid white .5pt;mso-border-themecolor:background1;
            background:#70AD47;mso-background-themecolor:accent6;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:4"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Production
            common application</span></strong><b><span lang="EN-SG" style="font-family:
            &quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
            minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
            color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Fume Hoods<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Downflow Booths<o:p></o:p></span></p>
            </td>
            <td colspan="4" style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">Isolators<o:p></o:p></span></p>
            </td>
           </tr>
           <tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-top:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-alt:solid white .5pt;mso-border-themecolor:background1;
            background:#70AD47;mso-background-themecolor:accent6;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:68"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Production</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:68"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Injectable</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:68"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">If Aseptic
            needed (with HPV)</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=17&amp;pg=pdt"><span style="color:windowtext">ACTI (Aseptic Containment Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:
            &quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
            minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=35&amp;pg=pdt"><span style="color:windowtext">CBI-U (Containment Barrier Isolator Unidirectional)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:
            &quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
            minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=33&amp;pg=pdt"><span style="color:windowtext">GPPI (General Processing Platform Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=17&amp;pg=pdt"><span style="color:windowtext">ACTI (Aseptic Containment Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:
            &quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
            minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=35&amp;pg=pdt"><span style="color:windowtext">CBI-U(Containment Barrier Isolator Unidirectional)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:
            &quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
            minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=33&amp;pg=pdt"><span style="color:windowtext">GPPI (General Processing Platform Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">with closed transfer<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=17&amp;pg=pdt"><span style="color:windowtext">ACTI (Aseptic Containment Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">With complete closed transfer (RTPs)<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#C5E0B3;mso-background-themecolor:
            accent6;mso-background-themetint:102;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:64"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=17&amp;pg=pdt"><span style="color:windowtext">ACTI (Aseptic Containment Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline;mso-yfti-cnfc:64"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">With complete closed transfer (RTPs)<o:p></o:p></span></p>
            </td>
           </tr>
           <tr>
            <td style="border:solid white 1.0pt;mso-border-themecolor:background1;
            border-top:none;mso-border-top-alt:solid white .5pt;mso-border-top-themecolor:
            background1;mso-border-alt:solid white .5pt;mso-border-themecolor:background1;
            background:#70AD47;mso-background-themecolor:accent6;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:4"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">R&amp;D</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:4"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Qc/ IPQC</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline;mso-yfti-cnfc:4"><strong><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1;border:none windowtext 1.0pt;
            mso-border-alt:none windowtext 0in;padding:0in;font-weight:normal">Sampling</span></strong><b><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:white;mso-themecolor:background1"><o:p></o:p></span></b></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escoglobal.com/category/fume-hoods/"><span style="color:
            windowtext">FHs (Fume Hoods)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escoglobal.com/product/laboratory-fume-hoods/frontier-floor-mounted/EFF/"><span style="color:windowtext">EFF (Esco Frontier&reg; Floor)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escoglobal.com/product/laboratory-fume-hoods/frontier-acela-fume-hoods/EFA/"><span style="color:windowtext">EFA (Esco Frontier&reg; Acela&trade;)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=41&amp;pg=pdt"><span style="color:windowtext">CYT (Cytoculture&trade; Cytotoxic Safety Cabinets)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escoglobal.com/category/fume-hoods/"><span style="color:
            windowtext">FHs (Fume Hoods)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escoglobal.com/product/laboratory-fume-hoods/frontier-floor-mounted/EFF/"><span style="color:windowtext">EFF (Esco Frontier&reg; Floor)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escoglobal.com/product/laboratory-fume-hoods/frontier-acela-fume-hoods/EFA/"><span style="color:windowtext">EFA (Esco Frontier&reg; Acela&trade;)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=41&amp;pg=pdt"><span style="color:windowtext">CYT (Cytoculture&trade; Cytotoxic Safety Cabinets)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt"></td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=33&amp;pg=pdt"><span style="color:windowtext">GPPI (General Processing Platform Isolator)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=35&amp;pg=pdt"><span style="color:windowtext">CBI-T (Containment Barrier Isolator Turbulent)</span></a><o:p></o:p></span></span></p>
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;
            mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
            Calibri;mso-bidi-theme-font:minor-latin">&nbsp;</span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">roRABs (Reverse open RABs)<o:p></o:p></span></p>
            <p align="center" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;
            margin-left:0in;text-align:center;vertical-align:baseline"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin">VBEs (if small quantity)<o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=35&amp;pg=pdt"><span style="color:windowtext">CBI-T (Containment Barrier Isolator Turbulent)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            </td>
            <td style="border-top:none;border-left:none;border-bottom:solid white 1.0pt;
            mso-border-bottom-themecolor:background1;border-right:solid white 1.0pt;
            mso-border-right-themecolor:background1;mso-border-top-alt:solid white .5pt;
            mso-border-top-themecolor:background1;mso-border-left-alt:solid white .5pt;
            mso-border-left-themecolor:background1;mso-border-alt:solid white .5pt;
            mso-border-themecolor:background1;background:#E2EFD9;mso-background-themecolor:
            accent6;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt">
            <p align="center" style="margin:0in;margin-bottom:.0001pt;text-align:center;
            vertical-align:baseline"><span class="MsoHyperlink"><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin;color:windowtext;border:none windowtext 1.0pt;mso-border-alt:
            none windowtext 0in;padding:0in"><a href="http://www.escopharma.com/product-details.php?productId=35&amp;pg=pdt"><span style="color:windowtext">CBI-T (Containment Barrier Isolator Turbulent)</span></a></span></span><span lang="EN-SG" style="font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;
            mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
            minor-latin"><o:p></o:p></span></p>
            </td>
           </tr>
          </tbody></table>
          </div>

              <p style="text-align: center;"><em>Table 1. OEB/OEL with further recommendations of Esco containment equipment.</em></p>

              <p>&nbsp;</p>

              <p class="text-justify">As the number of potent compounds in the pharmaceutical development continues to increase, the opportunities for HPAPI manufacturers will rise as well. At Esco Pharma, the provision of the best product and service delivery is taken seriously. As we take on newer challenges, we are continuously soaring towards a greater progress. The issues regarding contamination for pharmaceutical, agricultural, medical, and production operations can be eliminated as we yield protection with containment.</p>



              <p>&nbsp;</p>

              <p class="text-justify">References:</p>

              <ol>
                  <li>
                      <p>1. Cleanroomtechnology.com (2018) Containment strategy for highly  potent API manufacturing. Accessed last 24 January 2019 from <a href="https://www.cleanroomtechnology.com/news/article_page/Containment_strategy_for_highly_potent_API_manufacturing/149845">https://www.cleanroomtechnology.com/news/article_page/Containment_strategy_for_highly_potent_API_manufacturing/149845</a></p>
                  </li>
                  <li>
                      <p>2. Lazarro, O. (2016) Choosing Containment Strategies For Highly  Potent APIs. Accessed last 24 January 2019 from <a href="http://www.pharmtech.com/choosing-containment-strategies-highly-potent-apis">http://www.pharmtech.com/choosing-containment-strategies-highly-potent-apis </a> </p>

                  </li>
                  <li>
                      <p>3. Pharmtech.com (2008) High-Potency APIs: Containment and Handling Issues. Accessed last 24 January 2019 from <a href="http://www.pharmtech.com/high-potency-apis-containment-and-handling-issues?id=&sk=&date=&%0A%09%09%09&pageID=3">http://www.pharmtech.com/high-potency-apis-containment-and-handling-issues?id=&amp;sk=&amp;date=&amp;%0A%09%09%09&amp;pageID=3</a></p>
                  </li>
                  <li>
                      <p>4. Van Arnum, P. (2009) Examining High-Potency API Manufacturing. Accessed last 24 January 2019 from <a href="http://www.pharmtech.com/examining-high-potency-api-manufacturing">http://www.pharmtech.com/examining-high-potency-api-manufacturing</a> </p>

                  </li>
              </ol>

              <p>&nbsp;</p>

              <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

              <p>&nbsp;</p>

              <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

              <p>&nbsp;</p>

              <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



              <p>&nbsp;</p>

              <p><strong>About our BRANDS</strong></p>
              <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

              <p>&nbsp;</p>

              <p><strong>About Esco Pharma</strong></p>
              <p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

              <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>



              <style type="text/css">
                  h2{
                      text-align: center;
                  }
                  p {
                      margin: 0 0 3px;
                  }
                  h2 {
                      text-align: left;
                  }
              </style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Handling HPAPIs: Choosing the Best Containment Strategies','meta_description' => 'Handling HPAPIs: Choosing the Best Containment Strategies','created_at' => '2019-01-30 00:00:00'],


              ['news_category_id' => '1','old_id' => '155','slug' => 'streamline-compounding-isolator-gen-2-efficiency-and-multi-functionality-in-one','title' => 'Streamline® Compounding Isolator – Gen 2: Efficiency and Multi-Functionality in One','banner_img' => 'streamline-compounding-isolator-gen-2-efficiency-and-multi-functionality-in-one-min.jpg','banner_thumb' => 'streamline-compounding-isolator-gen-2-efficiency-and-multi-functionality-in-one-min.jpg','description' => '<p class="text-justify">Esco welcomes 2019 with an innovative and internationally compliant equipment to add to its line of isolation technology: the Streamline&reg; Compounding Isolator - Gen 2 (SCI-G2).</p>','content' => '
              <p class="text-justify">Esco welcomes 2019 with an innovative and internationally compliant equipment to add to its line of isolation technology: the <strong>Streamline<sup>&reg;</sup> Compounding Isolator &ndash; Gen 2 (SCI-G2).</strong> </p>
              <p class="text-justify" >It provides a <strong>sterile environment</strong> for pharmaceutical preparations and can be configured to operate at <strong>positive or negative pressure</strong> in a <strong>recirculating</strong> or <strong>total exhaust</strong> air flow scheme. The SCI-G2 provides user, product, and environmental protection from exposure to hazards. </p>
              <p class="text-justify" >The innovative design of the <strong>SCI-G2</strong> makes it suitable for various applications including: potent formulation, aseptic compounding, chemotherapy, total parenteral nutrition (TPN) formulation, contained powder handling, and bioprocessing like gene, cell therapy, and tissue engineering among others. </p>


         <p>&nbsp;</p>


              <p class="text-justify"><strong><u>MAIN FEATURES</u> </strong> </p>
              <ul style="    padding-left: 35px;">
                <li><p>Designed in compliance with international cGMP standards.</p> </li>
                <li><p>Class 3 Containment, as per ISO 10648-2.</p> </li>
                <li><p>ULPA filters (as per IEST-RP-CC001.3 and HEPA (H14) filter as per EN 1822) with a typical efficiency of &gt;99.999% at 0.1 to 0.3 microns, providing ISO Class 3 air cleanliness as per ISO 14644-1.</p> </li>
                <li><p>FDA-approved pressure-tight seals.</p> </li>
                <li><p>Sentinel<sup>&trade;</sup> Gold microprocessor controller supervises all functions and monitors airflow and pressure in real-time.</p> </li>
                <li><p>Robust dual-wall construction. Unique Esco Dynamic Chamber<sup>&trade;</sup> plenum surrounds filter seals with negative pressure.</p> </li>
                <li><p>Safe-change cuff rings permit glove changes with zero risk of work zone or environment contamination.</p> </li>
              </ul>

         <p>&nbsp;</p>

              <p class="text-justify"><strong><u>OPTIONS</u></strong> </p>
              <ul style="    padding-left: 35px;">
                <li><p>Available in negative or positive pressure model, in recirculating or total exhaust airflow</p> </li>
                <li><p>Integration of mobile BioVap<sup>&trade;</sup> bio-decontamination system</p> </li>
                <li><p>Glove Leak Tester</p> </li>
                <li><p>CCTV integration</p> </li>
                <li><p>Height adjustable stand</p> </li>
                <li><p>Access to rear view monitor system</p> </li>
                <li><p>Sharps disposal system for smoother workflow and minimized transfer</p> </li>
                <li>
                  <p>External material of construction: </p>
                  <ul>
                    <li><p>Electrogalvanized steel with ISOCIDE<sup>&trade;</sup> powder coating</p></li>
                    <li><p>Stainless steel 304 L</p></li>
                  </ul>
                  <p style="font-size: 0.8em">*Note: the isolator can be customized to enable an automated pressure hold test.</p>
                </li>
              </ul>


         <p>&nbsp;</p>

              <p class="text-justify"><strong><u>SCI-G2 VALIDATION TESTS</u> </strong> </p>
              <p class="text-justify" >The equipment validation follows the Controlled Environment Testing Association (CETA), which is also compliant to the requirements of the United States Pharmacopeia (USP) &lt;797&gt;. </p>
              <p class="text-justify" >This document has been established for a consistent and repeatable testing of the equipment inside any facility.</p>


         <p>&nbsp;</p>
              <p><strong>Isolator Validation Tests Prior to Certification</strong></p>
              <div class="row">
                <div class="col-sm-12">
                <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none; margin: auto;">
               <tbody><tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">Procedure<o:p></o:p></span></b></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border:solid windowtext 1.0pt;
                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">Manufacturer<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border:solid windowtext 1.0pt;
                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">Field
                Test<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr style="mso-yfti-irow:1;height:13.85pt">
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt;height:13.85pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.01</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Airflow Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:13.85pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:13.85pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG"><o:p></o:p></span></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.02</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Chamber Pressure Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG"><o:p></o:p></span></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG"><o:p></o:p></span></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.03</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Site Installation Assessment Tests<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.04</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Gauntlet Breach Air Velocity Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG"><o:p></o:p></span></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">O<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.05</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                HEPA Filter Integrity Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.06</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Particle Containment Integrity and Enclosure Leak Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">O<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.07</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Recovery Time Determination Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">O<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.08</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Airflow Smoke Pattern Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.09</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Preparation Ingress and Egress Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.10</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Particle Count Tests<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">X<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.11</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Volatile Hazardous Drug Containment Tests<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">O<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.12</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Hazardous Particle Containment Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">O<o:p></o:p></span></b></p>
                </td>
               </tr>
               <tr>
                <td width="406" valign="top" style="width:304.55pt;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">2.13</span></b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">
                Pass-through Particle Purge Time Determination Test<o:p></o:p></span></p>
                </td>
                <td width="108" valign="top" style="width:72.95pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">D<o:p></o:p></span></b></p>
                </td>
                <td width="98" valign="top" style="width:73.3pt;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">
                <p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal"><b><span lang="EN-SG" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:EN-SG">O<o:p></o:p></span></b></p>
                </td>
               </tr>
              </tbody>
            </table>
              </div>
              </div>
              <p style="text-align: center;"><strong>X = Mandatory;&nbsp;&nbsp;&nbsp;&nbsp;O = Optional;&nbsp;&nbsp;&nbsp;&nbsp;D = Design Criteria Qualification</strong> </p>
              <p style="text-align: center; font-size: 0.8em;"><strong>Table 1.</strong> <em>Test responsibilities of a manufacturer in accordance to CETA CAG-002-2006.</em> </p>


         <p>&nbsp;</p>


              <p class="text-justify" >The major distinction that this new generation of Streamline<sup>&reg;</sup> Compounding Isolator (SCI-G2) has compared to old models is the <strong>pressure test</strong>. The SCI-G2 has been tested based on the ISO 10648-2 standard, which applies to enclosures or enclosure lines intended when handling:</p>
              <ul style="    padding-left: 35px;">
                <li><p>Radioactive and/or toxic products where containment is required for environmental and personnel protection,</p></li>
                <li><p>Sensitive products requiring a special atmosphere and/or a sterile medium.</p></li>
              </ul>
              <p>Passing this standard will ensure that the equipment&#8242;s design ultimately prevents the leakage of products contained or handled inside it, from being exposed to the external environment.</p>

         <p>&nbsp;</p>


              <p class="mb-3"><strong><u>Classification of Containment Enclosures According to their Leak Tightness</u> </strong></p>
              <center><img src="/images/upload/containment-enclosure-classification-according-to-hourly-leak-rate-as-per-ISO-10648-2-min.png" class="img-responsive" style="max-width: 650px;"></center>
              <p style="text-align: center; font-size: 0.8em;"><strong>Table 2.</strong> <em>Containment Enclosure Classification according to hourly leak rate, as per ISO 10648-2.</em> </p>



         <p>&nbsp;</p>

              <p class="mb-3"><strong><u>Streamline&reg; Compounding Isolator &ndash; Gen 2 (SCI-G2) Total Exhaust</u> </strong></p>
              <center><img src="/images/upload/streamline-compounding-isolator-gen-2--sci-g2--total-exhaust-min.jpg" class="img-responsive"></center>



         <p>&nbsp;</p>

              <hr style="border-width:3px; border-color: #000;">

         <p>&nbsp;</p>




              <p><strong>2019 Surprise!</strong></p>
              <p>Discounts are available for current users of the old SCI units who seek to have the SCI-G2 upgrade.</p>
              <ul>
                <li><p><strong>Terms and Conditions apply.</strong></p></li>
              </ul>
         <p>&nbsp;</p>




              <p><strong>REFERENCES:</strong></p>
              <ol>
                <li><p>1. International Organization for Standardization.(2018).ISO 10648-2 Containment Enclosures- Part 1: Classification according to leak tightness and associated checking methods. Retrieved on 18-Dec-2018. Retrieved from: <a href="https://www.iso.org/standard/20483.html">https://www.iso.org/standard/20483.html</a></p></li>
                <li><p>2. Controlled Environment Testing Association.(2006). CETA Compounding Isolator Testing Guide CAG-002-2006. Retrieved on 17-Dec-2018. Retrieved from: <a href="https://www.scribd.com/document/174780275/CETACompoundingIsolatorTestingGuide2006">https://www.scribd.com/document/174780275/CETACompoundingIsolatorTestingGuide2006</a> </p></li>
                <li><p>3. Health and Safety Executives.(2018). Handling Cytotoxic Drugs in Isolators in NHS Pharmacies. Retrieved on 18-Dec-2018. Retrieved from: <a href="http://www.hse.gov.uk/pubns/cytotoxic-drugs.pdf">http://www.hse.gov.uk/pubns/cytotoxic-drugs.pdf</a> </p></li>

              </ol>
           <p>&nbsp;</p>

            <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

            <p>&nbsp;</p>

            <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

            <p>&nbsp;</p>

            <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



            <p>&nbsp;</p>

            <p><strong>About our BRANDS</strong></p>
            <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

            <p>&nbsp;</p>

            <p><strong>About Esco Pharma</strong></p>
            <p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

            <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
          <style>
              img {
                  margin: auto;
              }
              p {
                  margin: 0 0 3px !important;
              }
          </style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Streamline® Compounding Isolator – Gen 2: Efficiency and Multi-Functionality  in One','meta_description' => 'Streamline® Compounding Isolator – Gen 2: Efficiency and Multi-Functionality  in One','created_at' => '2019-01-09 00:00:00'],


          ['news_category_id' => '1','old_id' => '154','slug' => 'data-integrity-in-the-pharmaceutical-industry','title' => 'Data Integrity in the Pharmaceutical Industry','banner_img' => 'data-integrity-in-the-pharmaceutical-industry.jpg','banner_thumb' => 'data-integrity-in-the-pharmaceutical-industry.jpg','description' => '<p class="text-justify">The Food and Drug Administration (FDA) has also published a new data integrity guidance aimed at assisting pharmaceutical manufacturers to meet the regulator\'s standards; which relates to the agenda of Good Manufacturing Practice (GMP)-related concerns.</p>','content' => '	<div class="row">
	    <div class="col-sm-12">
	        <p class="text-justify">There is a stringent focus inside the global pharmaceutical industry and regulatory agencies to ensure data integrity. The manufacturing and testing of pharmaceuticals is the biggest field wherein the accuracy data produced is strictly supervised by international guidelines such as: Medicines & Healthcare Products Regulatory Agency (MHRA), the U.S. Food & Drug Administration (FDA), Pharmaceutical Inspection Co-operation Scheme (PIC/S) and the Australian Therapeutic Goods Administration (TGA).</p>
	        <p class="text-justify">The Food and Drug Administration (FDA) has also published a new data integrity guidance aimed at assisting pharmaceutical manufacturers to meet the regulator&#39;s standards; which relates to the agenda of Good Manufacturing Practice (GMP)-related concerns.</p>
	       	<p class="text-justify">According to FDA, <em> data integrity</em> refers to the completeness, consistency, and accuracy of data. Complete, consistent, and accurate data should be attributable, legible, contemporaneously recorded, original or a true copy, and accurate (ALCOA). </p>
	       	<p class="text-justify">It is a crucial and a critical factor that must be considered throughout the cGMP data life cycle. This includes the creation, modification, processing, maintenance, archival, retrieval, transmission, and disposition of data whenever the record&#39;s retention period ends. A fully systematic design and control should easily detect errors, omissions, and deviations throughout the data&#39;s life cycle.</p>

	        <p class="text-justify">The minimum data requirements of FDA include:</p>
	        <ul style="padding-left: 34px;">
	        	<li>Data must be secured from different types of alteration, erasures, or loss. There must be an exact and complete back up data.</li>
	        	<li>Storage of data is required to prevent deterioration or loss.</li>
	        	<li>Certain activities should be documented at performance procedures and site controls should be scientifically complete.</li>
	        	<li>Records should be compiled and organized as original records, true copies, and/or other accurate reproductions/duplicates of the original records.</li>
	        	<li>Data should be documented in complete information, from the production to the tests performed; never fail to note any data.</li>
	        	<li>Metadata, the contextual information to understand the data, should be stored throughout the record&#39;s retention period.</li>
	        	<li>Storage of data is required to prevent deterioration or loss.</li>
	        	<li>Storage of data is required to prevent deterioration or loss.</li>
	        </ul>
	        <p>With the widespread information on data gathering and its integrity, some pharmaceutical companies still fail to follow the guidelines. FDA have assessed data integrity issues in numerous manufacturers&#39; facilities, and some of those are:</p>
	        <ul style="padding-left: 34px;">
	        	<li>Failure to maintain complete data gathered from all lab tests to ensure compliance with established specifications and standards.</li>
	        	<li>Failure to record and explain any deviations from mandatory laboratory control mechanisms.</li>
	        	<li>Failure to examine and document out-of-specification results.</li>
	        	<li>Failure to record activities at the time of performance.</li>
	        	<li>Failure to validate analytical methods used to test active pharmaceutical ingredients (APIs).</li>
	        	<li>Failure to practice appropriate controls over computer or related systems to assure that only authorized personnel institute changes in master production and control records, or other records.</li>
	        </ul>


	        <p>The approach to data integrity of pharmaceutical companies should be equally focused on paper-based and electronic data generation, management and storage.</p>
	        <p>FDA suggests that the drug shall be considered as adulterated if the methods, facilities, or controls used to manufacture, process, pack, or hold the drug does not adhere to cGMP. When the drug\'s safety, identity, and strength conform to quality standards, then one is assured that the pharmaceutical company adheres to cGMP.</p>


	        <p class="text-justify">Reference/s:</p>
	        <ol>
	        	<li>1. Chee, C. (2016) Data Integrity in the QC Laboratory &ndash; How to Handle Breaches. Accessed last 3 Jan 2019 from <a href="https://learnaboutgmp.com/data-integrity-alcoa/data-integrity-in-the-qc-laboratory-how-to-handle-breaches/"> https://learnaboutgmp.com/data-integrity-alcoa/data-integrity-in-the-qc-laboratory-how-to-handle-breaches/</a></li>
	        	<li>2. IndiaInfoOnline. (2018) What is data integrity in Pharmaceutical industry? Accessed last 3 Jan 2019 from https://www.indiainfoline.com/article/news-top-story/what-is-data-integrity-in-pharmaceutical-industry-118030600015_1.html</li>
	        	<li>3. Markalan, J. (2018) Keys to Manufacturing Data Integrity. Accessed last 3 Jan 2019 from http://www.pharmtech.com/keys-manufacturing-data-integrity</li>
	        	<li>4. U.S. Department of Health and Human Services, Food and Drug Administration, Center for Drug Evaluation and Research (CDER), Center for Biologics Evaluation and Research (CBER), Center for Veterinary Medicine (CVM). (2018). Data Integrity and Compliance With Drug CGMP. (p. 4).</li>
	        </ol>
	    </div>
	    <div class="col-sm-12">
	       	<p><strong>Contact Us</strong></p>
	        <p><strong><span style="color: #93C67D;">Esco Pharma Pte. Ltd.</span></strong><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
	        <p><strong><span style="color: #93C67D;">Esco Technologies, Inc.</span></strong><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
	        <p><strong><span style="color: #93C67D;">Esco GB Ltd.</span></strong><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
	        <p>&nbsp;</p>
	        <p><strong>About our BRANDS</strong></p>
	        <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
	        <p><strong>About Esco Pharma</strong></p>
	        <p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
	        <p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
	    </div>
	</div>
	<style>
	    img {
	        margin: auto;
	    }
    </style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Data Integrity in the Pharmaceutical Industry','meta_description' => 'Data Integrity in the Pharmaceutical Industry','created_at' => '2019-01-07 00:00:00'],


    ['news_category_id' => '1','old_id' => '153','slug' => 'the-best-of-2018-the-esco-pharma-year-ender','title' => 'The Best of 2018: The Esco Pharma Year Ender','banner_img' => '02-121018.png','banner_thumb' => '02-121018.png','description' => '<p class="text-justify">Various pharmaceutical industries who are in need for the right equipment and services are the company\'s main patrons. Esco Pharma visited various countries and participated in numerous exhibitions and conferences; staying true to its commitment of providing product awareness among healthcare professionals.</p>','content' => '<div class="row">
    <div class="col-sm-12">
        <p>Thank you 2018!</p>
        <p class="text-justify">It has truly been a thrilling year for Esco Pharma; as one of the leaders in providing containment, its mission is to provide protection to all those who require of it. Various pharmaceutical industries who are in need for the right equipment and services are the company\'s main patrons. Esco Pharma visited various countries and participated in numerous exhibitions and conferences; staying true to its commitment of providing product awareness among healthcare professionals.</p>
    </div>
    <div class="col-sm-12">
        <img src="/images/upload/03-121018.png" class="mb-3 img-responsive">
    </div>
    <div class="col-sm-12">
        <p class="text-justify">To kick off the start of the year, Esco Pharma joined is INTERPHEX last April 17-19 at New York, USA, a platform event to showcase major products and service solutions for the pharmaceutical industry. Several exhibitors from pharmacy, biotechnology, biosciences, medical, and biomedical engineering fields were present.</p>
        <p class="text-justify">In continuation with Esco&#39;s penetration in the United States, Esco Pharma was also present at the recent PACK EXPO last October 14-17 at Chicago, USA.</p>
    </div>
    <div class="col-sm-12">
        <img src="/images/upload/04-121018.png" class="mb-3 img-responsive">
    </div>
    <div class="col-sm-12">
        <p class="text-justify">Esco also participated in the International Society of Pharmaceutical Engineering (ISPE) Conference and Exhibition, an event dedicated to advancing the health of the public by providing a global forum of exchanging scientific information, all for the development of policy, education, and advocacy for the different fields in pharmacy.</p>
        <p class="text-justify">A lot of participants from the countries of Manila, Philippines (June 26-27), Singapore (August 30-31), and Ho Chi Minh, Vietnam (October 18-20) recognized the global presence of Esco, as well as the key solutions it offers.</p>
    </div>
    <div class="col-sm-12">
        <img src="/images/upload/05-121018.png" class="mb-3 img-responsive">
    </div>
    <div class="col-sm-12">
        <p class="text-justify">Another event that Esco exhibited at is the 2nd Philippine Herbal Medicine Summit last October 4-5, also at Manila, Philippines. The seminar focused on the propagation of new herbal medicines - a field that Esco is keen to venture and support.</p>
        <p class="text-justify">And being well known to Asia, Esco also participated in the biggest gathering of Asian pharmacists, the 27<sup>th </sup> Federation of Asian Pharmacists Association (FAPA) Congress last October 24-27 at Manila, Philippines. The event was prepared and presented by notable healthcare professionals; doctors, pharmacists, researchers, and scientists from all over the world. </p>
    </div>
    <div class="col-sm-12">
        <img src="/images/upload/06-121018.jpg" class="mb-3 img-responsive">
    </div>
    <div class="col-sm-12">
        <p class="text-justify">Esco also strengthened its name in Europe when it attended in the ACHEMA 2018 event in Frankfurt, Germany last June 11 - 15. It is one of the biggest worldwide exhibitions that hosted pharmaceutical, biotechnological, and chemical processing industries. Being held every 3 years, this event was attended by the leaders in the said major fields, and Esco proves to be one of the frontrunners.</p>
        <p class="text-justify">Madrid also became acquainted with Esco&#39;s presence as it participated the world&#39;s largest pharmaceutical exhibition, CPhI Worldwide at Madrid, Spain last October 9-11. The event covered all industry sectors &ndash; from ingredients and final drug products to machinery, packaging, outsourcing, and biopharmaceuticals.</p>
        <p class="text-justify">Esco also attended the Making Pharmaceuticals last April 24-25 at Coventry, England, proving that our range of coverage goes far and beyond.</p>
        <p class="text-justify">Esco Pharma will continue to spread awareness in containment services and isolation equipment that will suit to the patro&#39;s demands. Being the only pharmaceutical isolator company with three global factories able to manufacture isolators using common designs and parts and with offices in 25 countries and 40 locations, Esco can serve clients in any time zone with aftermarket support.</p>
        <p>We are local, yet global.</p>
        <p>See you on our future events this 2019!</p>
        <p>&nbsp;</p>
        <p><strong>Contact Us</strong></p>
        <p><strong><span style="color: #93C67D;">Esco Pharma Pte. Ltd.</span></strong><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
        <p><strong><span style="color: #93C67D;">Esco Technologies, Inc.</span></strong><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
        <p><strong><span style="color: #93C67D;">Esco GB Ltd.</span></strong><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
        <p>&nbsp;</p>
        <p><strong>About our BRANDS</strong></p>
        <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
        <p><strong>About Esco Pharma</strong></p>
        <p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
        <p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
    </div>
</div>
<style>
    img {
        margin: auto;
    }
</style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'The Best of 2018: The Esco Pharma Year Ender','meta_description' => 'The Best of 2018: The Esco Pharma Year Ender','created_at' => '2018-12-10 00:00:00'],

['news_category_id' => '1','old_id' => '152','slug' => 'esco-pharma-ventures-the-art-of-filling-line-systems','title' => 'Esco Pharma Ventures the Art of Filling Line Systems','banner_img' => '01-120718.png','banner_thumb' => '01-120718.png','description' => '<p class="text-justify">A filling line is an integral part of manufacturing sterile pharmaceutical products. It ensures that parenteral medications are prepared inside an ISO classified environment for the whole manufacturing cycle, which is achieved through the use of a Restricted Access Barrier System (RABS) or an isolator.</p>','content' => '<div class="row">
<div class="col-sm-12 text-justify">
    <p>A <strong>filling line</strong> is an integral part of manufacturing sterile pharmaceutical products. It ensures that parenteral medications are prepared inside an ISO classified environment for the whole manufacturing cycle, which is achieved through the use of a Restricted Access Barrier System (RABS) or an isolator.</p>
    <p>RABS achieves an ISO classified environment through its properly designed barrier, which can either have an integrated air handling system, or a shared one with the cleanroom. There is a possibility to recycle used air, thus, saving heating, ventilation, and air conditioning (HVAC) energy consumption.</p>
    <p>Meanwhile, an isolator is a state-of-the-art technology that provides the highest product protection. It is a fully enclosed, leak-tight equipment that can provide ultimate product, operator, and environmental protection. According to United States Pharmacopoeia (USP) General Chapter &lt;797&gt;, no air exchange should occur between the isolator and the surrounding environment unless the air is first passed through a microbial retentive filter (HEPA) system.</p>
    <p>This ensures that any airborne concentrations of the drug, and any other possible cross-contaminants, will be contained. This design of the isolator makes it suitable for both sterile pharmaceutical compounding and for handling highly potent active pharmaceutical ingredients (HPAPIs).</p>
    <p>Moreover, there are two main types of filling lines: the traditional and the flexible.</p>
    <p>Traditional filling lines have a dedicated &lsquo;fill-finish&rsquo; capabilities for a specific type of format, thus, adding different container filling capabilities require a significant amount of investment. It is highly efficient for high volume dedicated products where flexibility is not necessary.</p>
    <p>On the other-hand, flexible filling lines integrate other pharmaceutical equipment such as: a vial washer, a sterilization tunnel, a robotic arm, and even a freeze dryer. Doing so simplifies the entire manufacturing process. Unlike the traditional type, this has the capability to fill multiple container formats and sizes. Additionally, asset utilization can be increased.</p>
    <p>The normal workflow inside a filling line manufacturing plant is best represented by the diagram below.</p>
</div>
<div class="col-sm-12">
    <img src="/images/upload/normal-workflow-inside-a-filling-line-manufacturing-plant.jpg" class="mb-3 img-responsive">
</div>
<div class="col-sm-12">
    <p>Esco partners with filling line companies to create a client-specific technology, which utilizes GMP compliant isolators and high quality filling line accessories/technologies, to cater a safe and sterile manufacturing process.</p>
    <p>As a leading manufacturer of pharmaceutical and biopharmaceutical technologies, Esco Pharma is now reaching further to fulfill the filling line needs of pharmaceutical industries.</p>
    <p><strong>&nbsp;</strong></p>
    <p><strong>REFERENCES:</strong></p>
    <ol type=1>
        <li>IMA Life (2018). Overview of Barrier Systems: Open RABS and Isolators. Retrieved on Nov. 27, 2018. Retrieved from: <a href="https://ima.it/pharma/pharma-insights/product-insights/barrier-technology/open-rabs-closed-rabs-and-isolators-focus-on-energy-savings/" target="_blank">https://ima.it/pharma/pharma-insights/product-insights/barrier-technology/open-rabs-closed-rabs-and-isolators-focus-on-energy-savings/</a></li>
        <li>Longanesi, F. (2008). Innovation in Aseptic Manufacturing: RABS versus Isolators. Retrieved on Nov. 27, 2018. Retrieved from: <a href="http://www.gampitalia.it/documenti/ispe-affiliata-italiana/innovation-in-pharmaceutical-manufacturing/05_longanesi_ispe_28feb2008.pdf/download" target="_blank">http://www.gampitalia.it/documenti/ispe-affiliata-italiana/innovation-in-pharmaceutical-manufacturing/05_longanesi_ispe_28feb2008.pdf/download</a></li>
        <li>United States Pharmacopeia General Chapter &lt;797&gt;. (2018). Pharmaceutical Compounding &ndash; Sterile Preparations. Retrieved on Dec. 5, 2018. Retrieved from: <a href="http://www.usp.org/compounding/general-chapter-797" target="_blank">http://www.usp.org/compounding/general-chapter-797</a></li>
    </ol>
    <p>&nbsp;</p>
    <p><strong>Contact Us</strong></p>
    <p><span style="color: #70AD47;"><strong>Esco Pharma Pte. Ltd.</strong></span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
    <p><span style="color: #70AD47;"><strong>Esco Technologies, Inc.</strong></span><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
    <p><span style="color: #70AD47;"><strong>Esco GB Ltd.</strong></span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
    <p>&nbsp;</p>
    <p><strong>About our BRANDS</strong></p>
    <p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross-contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
    <p><strong>&nbsp;</strong></p>
    <p><strong>About Esco Pharma</strong></p>
    <p>Eso Pharma&rsquo;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
    <p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupations health and safety.</p>
</div>
</div>

<style>
img {
    margin: auto;
}
ol {
    list-style: initial;
}
</style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma Ventures the Art of Filling Line Systems','meta_description' => 'Esco Pharma Ventures the Art of Filling Line Systems','created_at' => '2018-12-08 00:00:00'],


['news_category_id' => '1','old_id' => '149','slug' => 'integrating-herbal-medicine-into-the-philippine-healthcare-system','title' => 'Integrating Herbal Medicine into the Philippine Healthcare System','banner_img' => 'ihmphs-01-100218.png','banner_thumb' => 'ihmphs-01-100218.png','description' => '<p class="text-justify">With the successful commencement of the first ever Philippine Herbal Medicine Summit last October 25, 2016, the University of the Philippines - National Institute of Health (UP - NIH) Institute of Herbal Medicine brings it back this October 4 - 5.</p>','content' => '<p class="text-justify">With the successful commencement of the first ever Philippine Herbal Medicine Summit last October 25, 2016, the University of the Philippines - National Institute of Health (UP &ndash; NIH) Institute of Herbal Medicine brings it back this October 4 &ndash; 5, with the theme <i>&ldquo;Integrating Herbal Medicine into the Philippine Healthcare System&rdquo;</i>. It will be held at AG New World Manila Bay Hotel in Ermita, Manila. </p>
<p class="text-justify">Both local and international speakers will impart their knowledge and expertise on herbal medicines and their incorporation into the healthcare system. On the second day, the five best chosen research papers will be presented.</p>
<p class="text-justify">With the continuous rise of herbal products and some emerging reports regarding adverse effects caused by excessive usage, there is a need to increase research efforts globally regarding the regulation of herbal products.</p>
<p class="text-justify">The goal of the summit is to unite the various pharmaceutical stakeholders to discuss and work towards the advancement of herbal medicines and the assurance of their efficacy, quality, and safety. It also aims for the provision of affordable and high quality herbal medicines through research collaborations, making them more accessible to the Filipinos. </p>
<p class="text-justify">Esco will be showcasing biological safety cabinets and laboratory ovens in the herbal medicine summit. The <a href="http://www.escoglobal.com/product/class-i-biological-safety-cabinets/class-i-biological-safety-cabinet-e-series/ac1-e/" target="_blank">Airstream<sup>&reg;</sup> biological safety cabinets</a> offer user and environmental protection when conducting experiments with organisms which are assigned under biosafety levels 1, 2, and 3. These energy-saving cabinets are equipped with protective features, such as the ISOCIDE<sup>&trade;</sup> powder coat which inhibits microbial growth and optional UV lamp for decontamination.</p>
<p class="text-justify">They are also equipped with a UV Door which provides safety against UV light. The cabinets are powered by an energy-efficient DC ECM Motor, offering 70% energy savings. Bearing the EN 12469 certification by the Public Health England (PHE), <a href="http://www.escoglobal.com/product/class-i-biological-safety-cabinets/class-i-biological-safety-cabinet-e-series/ac1-e/" target="_blank">Airstream<sup>&reg;</sup> biological safety cabinets</a> are essential components in the laboratory.</p>
<p class="text-justify"><a href="http://www.escoglobal.com/products/download/Isotherm-Combined-Catalogue-LR.pdf" target="_blank">Esco Isotherm<sup>&reg;</sup> laboratory ovens</a> are used for high-forced volume thermal convection applications. These ergonomic ovens generally provide uniform temperatures all throughout. Process applications for these ovens can be for annealing, die-bond curing, drying, polyimide baking, sterilizing, and other industrial laboratory functions. </p>
<p class="text-justify">Join us in the summit and get to know more about the company and what we can offer. To register, just visit <a href="https://docs.google.com/forms/d/e/1FAIpQLSfrEmFwT4IORVJ_iI5eqfY5GvrJEJZc6rbbfObvKZs6eQgY-Q/viewform">https://docs.google.com/forms/d/e/1FAIpQLSfrEmFwT4IORVJ_iI5eqfY5GvrJEJZc6rbbfObvKZs6eQgY-Q/viewform</a>.</p>
<p>See you there!</p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><strong><span style="color: #93C67D;">Esco Pharma Pte. Ltd.</span></strong><br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a><br /></p>
<p><strong><span style="color: #93C67D;">Esco Technologies, Inc.</span></strong><br />Esco Pharma Factory<br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p><strong><span style="color: #93C67D;">Esco GB Ltd.</span></strong><br />Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-10-01 00:00:00'],



['news_category_id' => '1','old_id' => '146','slug' => 'microspheres-a-novel-drug-delivery-system','title' => 'Microspheres: A Novel Drug Delivery System','banner_img' => 'microspheres-a-novel-drug-delivery-system.jpg','banner_thumb' => 'microspheres-a-novel-drug-delivery-system.jpg','description' => '<p>A novel drug delivery system has recently been acknowledged, and it is with the use of microspheres. They are defined as solid, spherical particles ranging in size from 1 to 1000 &micro;m.</p>','content' => '<p class="text-justify">Continuous technological and pharmaceutical innovation is currently emerging underway in providing the masses with a more comfortable and a healthier way of living. The emergence numerous ground-breaking discoveries still cannot deter the thirst of scientists for more. The pharmaceutical technology advancements have driven us to see a brighter future for healthcare.</p>
<p class="text-justify">A novel drug delivery system has recently been acknowledged, and it is with the use of microspheres. They are defined as solid, spherical particles ranging in size from 1 to 1000 &mu;m. Microspheres are normally free-flowing powders, consisting of biodegradable synthetic polymers or proteins. They provide a variety of product enhancements and advantages due to their density, improved dimensional stability, smoother outer surface, increased thermal insulation, and cost savings among others. Their characteristics are important in delivering the pharmacologic substance to the target site in a controlled release manner.</p>
<p class="text-justify">In the pharmaceutical industry, microspheres can be applied to encapsulate drugs for attain better drug release and for active pharmaceutical ingredient (API) protection. When applied to injectables or other sterile drug products, microspheres require an aseptic manufacturing process and an accurate selection of sizes, ranging from several hundred nanometers up to 250 micrometers. The production process for polymer microspheres is complex since the verification of the correct size fit for a certain pharmaceutical remains to be a difficult task.</p>
<p class="text-justify">Esco Pharma is concurrent with the advancements in the healthcare industry, promising to deliver specialist services, equipment packages, and process solutions from our core pharmaceutical technologies. Our state-of-the-art isolators and various cleanroom equipment provides the needed environment for the production of drugs embedded with microspheres. With its production processes including synthesis stages, formulation, freeze drying, etc., Esco Pharma has the right equipment and will comply according to the client\'s needs. Our customization specialties and compliance with the international standards and guidelines make us one of the most flexible world class pharmaceutical companies.</p>
<p>&nbsp;</p>
<p><strong>References:</strong></p>
<p class="text-justify">1.	Tofflon. (ND) <i>A brief introduction of microsphere</i>. Accessed last 20 Aug 2018 from <a href="http://en.tofflon.com/menu/a-brief-introduction-of-microsphere.html" target="_blank">http://en.tofflon.com/menu/a-brief-introduction-of-microsphere.html</a></p>
<p class="text-justify">2.	Varde, N.K., &amp; Pack, D.W. (2004) <i>Microspheres for controlled release drug delivery</i>. Expert Opinion on Biological Therapy, 4(1). doi: 10.1517/14712598.4.1.35</p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><span style="color:#70AD47;">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p><span style="color:#70AD47;">Esco Technologies, Inc.</span><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p><span style="color:#70AD47;">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-08-24 00:00:00'],



['news_category_id' => '3','old_id' => '4','slug' => 'esco-at-interphex-2014','title' => 'Esco at INTERPHEX 2014!','banner_img' => 'ESCO-AT-INTTERPHEX.jpg','banner_thumb' => 'ESCO-AT-INTTERPHEX-thumb.jpg','description' => '<p>INTERPHEX (International Pharmaceutical Expo) is the single source for complete biopharmaceutical and pharmaceutical manufacturing solutions to confidently process all dosage forms for life-enhancing drugs.</p>','content' => '<p>INTERPHEX (International Pharmaceutical Expo) is the single source for complete biopharmaceutical and pharmaceutical manufacturing solutions to confidently process all dosage forms for life-enhancing drugs.</p>

<p>Esco&rsquo;s Pharma division exhibited at Interphex 2014 for the first time ever this year at the Javits Center in NYC, NY on March 18-20.&nbsp; The company&rsquo;s first experience as an exhibitor at Interphex was a tremendous success! It was the first opportunity the public has seen our latest pharma products. Over 100 people stopped by the booth to take a closer look at the General Processing Platform Isolator, High Containment Screen and Weighing and Dispensing Containment Isolator that were showcased.&nbsp; Esco&rsquo;s Pharma team was met with great interest and compliments!</p>

<p>Esco plans to present their latest technologies again next year. Look for us at Javits Center in NYC on April 21-23, 2015!</p>

<center><img alt="Esco at INTERPHEX 2014!" src="/images/upload/Esco-at-Interphex-2014-1.jpg"  class="img-responsive"/></center>

<p>&nbsp;</p>
<center>
<p><a href="mailto:colin.londsdale@escoglobal.com"><span style=" color:="><img src="/images/upload/Esco-at-Interphex-2014-2.png" class="img-responsive"/></span></a></p></center>','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2014-05-26 13:57:06'],




['news_category_id' => '3','old_id' => '145','slug' => 'esco-pharma-is-heading-to-ispe-singapore-2018','title' => 'Esco Pharma is Heading to ISPE Singapore 2018!','banner_img' => 'esco-pharma-is-heading-to-ispe-singapore-2018.jpg','banner_thumb' => 'esco-pharma-is-heading-to-ispe-singapore-2018.jpg','description' => '<p>Esco Pharma will be exhibiting once again at the International Society for Pharmaceutical Engineering (ISPE) Singapore Conference and Exhibition this coming Aug. 29 - 31, at Suntec, Singapore International Convention & Exhibition Centre.</p>','content' => '
<p>Esco Pharma will be exhibiting once again at the International Society for Pharmaceutical Engineering (ISPE) Singapore Conference and Exhibition this coming Aug. 29 &ndash; 31, at Suntec, Singapore International Convention &amp; Exhibition Centre.</p> <p>Last year, ISPE has gathered over 800 pharmaceutical professionals, which created massive opportunities for them to meet and discuss over new products, technologies, and services for the betterment of many pharmaceutical operations.</p> <p>The main purpose of ISPE is to deliver technical and operational solutions to support members in the manufacture and delivery of quality medications across the globe. With this, Esco Pharma heads back to the exhibition to showcase advanced equipment ranging from isolators, bioreactors, biological safety cabinets, and more.</p> <p>Esco has also been invited to Germany for the ACHEMA 2018 Exhibition last June 11 &ndash; 15, 2018 at Messe Frankfurt, Frankfurt, Germany.</p> <p>Esco Pharma had shown a great array of innovative products, from Life Sciences, Medical, and Esco Healthcare. Bioreactors and isolators were exhibited, and Esco Pharma proudly presented the upgraded <strong>Turbulent Flow Aseptic Isolator (TFAI)&trade;</strong>. It is a free-standing isolator and is designed based on cGMP\'s standards. The TFAI&#39;s ability to meet turbulent Grade A conditions provides a high degree of containment separation for product, operator, and environment. It also offers the newest option: the Pod FlangeT&trade; a flexible and detachable worktop which can be integrated with different equipment, according to the operator&#39;s application. Displayed during the exhibition is the model that allows the integration of a semi-automated tabletop filling line from AST and a lyophlizer.</p> <p>&nbsp;</p> <p class="text-center" style="font-size: 0.85em;"><img src="/images/upload/the-turbulent-flow-aseptic-isolator-left-esco-team-discussing-with-clients-right.jpg" class="img-responsive my-3">Figure 1. The Turbulent Flow Aseptic Isolator (TFAI)&trade; (left). Esco team discussing with clients (right). </p> <p>&nbsp;</p> <p>The Lyophilizer Auto Loading/Unloading Isolator was also displayed with the latest conveyor push push auto loading and unloading system by SP Scientific, one of the most technically innovative freeze-drying manufacturers. The isolator maintains an ISO Class 5 environment, capable of automatically loading and unloading vials to/from a lyophilizer. The isolator is also linked upstream to a filling and stoppering line, then downstream to capping.</p> <p>&nbsp;</p> <p class="text-center" style="font-size: 0.85em;"><img src="/images/upload/esco-pharma-executives-alongside-the-sp-scientific-unit-the-lyophilizer-auto-loading-unloading-isolator.jpg" class="img-responsive my-3">Figure 2. Esco Pharma executives alongside the SP-Scientific unit, the Lyophilizer Auto-Loading/Unloading Isolator.</p> <p>&nbsp;</p> <p>With the company&#39;s continuous achievements, it is without a doubt that Esco Pharma keeps on pushing forward. Being the only Pharmaceutical Isolator company with three global factories able to manufacture isolators using common designs and parts, and with offices in 25 countries and 40 locations, Esco is able to serve our clients in every time zone with aftermarket support. We are local, yet global.</p> <p>Our team of experts will be available on-site to discuss your containment needs and on how we can provide safety right from Discovery to Delivery. Come and get your questions answered and get to see our state-of-the-art equipment, visit us at Booth 311! See you at ISPE Singapore 2018!</p> <p>&nbsp;</p> <p><strong>Contact Us</strong></p> <p><span style="color: #70AD47;">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p> <p><span style="color: #70AD47;">Esco Technologies, Inc.</span><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p> <p><span style="color: #70AD47;">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p> <p>&nbsp;</p> <p><strong>About our BRANDS</strong></p> <p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p> <p><strong>About Esco Pharma</strong></p> <p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p> <p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2018-07-30 00:00:01'],



['news_category_id' => '3','old_id' => '147','slug' => 'esco-healthcare-goes-to-fapa-2018','title' => 'Esco Healthcare Goes to FAPA 2018!','banner_img' => 'featured-image-082818.jpg','banner_thumb' => 'featured-image-082818.jpg','description' => '<p class="text-justify">This year, Esco Healthcare will be exhibiting for the first time in the upcoming <strong>27<sup>th</sup> Federation of Asian Pharmaceutical Associations (FAPA) Congress</strong> at the Philippine International Convention Center (PICC) in Manila, Philippines on October 24&ndash;27.</p>','content' => '
<p class="text-justify">This year, Esco Healthcare will be exhibiting for the first time in the upcoming <strong>27<sup>th</sup> Federation of Asian Pharmaceutical Associations (FAPA) Congress</strong> at the Philippine International Convention Center (PICC) in Manila, Philippines on October 24&ndash;27.</p>
<p class="text-justify">The theme for this year&#39;s international conference is <i>&ldquo;Pharmacists for the Global Goals: Creating Value Beyond Health&rdquo;</i>, which will be hosted by the Philippine Pharmacists Association (PPhA) after almost 40 years since last having hosted it. The event is only held every other year and is aimed to inspire pharmacists all over Asia.  </p>
<p class="text-justify">The FAPA Congress 2018 is an excellent ground for pharmacists to contribute in working towards the attainment of the Sustainable Development Goals (SDGs) by 2030 through producing and distributing safe and cost-effective pharmaceuticals, and at the same time delivering patient-centered pharmaceutical care services. It also serves as a great opportunity to meet fellow health professionals and to build and expand networks through various Asian countries. </p>
<p class="text-justify">The congress was granted with eighteen (18) Continuing Professional Development (CPD) units by the Professional Regulation Commission (PRC) CPD Council for Pharmacy. The event programme is filled with experienced pharmacy practitioners and researchers worldwide who continue to strive for the future of the profession.</p>
<p class="text-justify">Esco is looking forward to seeing you in October! We hope that you can join us in our exhibition. To register and to know more about the event details, visit <a href="http://fapa.asia/fapa2018/" target="_blank">www.fapa.asia/fapa2018</a>. </p>
<p>See you in Manila!</p>
<p><strong>Contact Us</strong></p>
<p><strong><span style="color: #93C57D;">Esco Pharma Pte. Ltd.</span></strong><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p><strong><span style="color: #93C57D;">Esco Technologies, Inc.</span></strong><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p><strong><span style="color: #93C57D;">Esco GB Ltd.</span></strong><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p><strong>About our BRANDS</strong></p>
<p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2018-08-28 00:00:00'],





['news_category_id' => '3','old_id' => '148','slug' => 'esco-healthcare-at-ispe-2018-breaking-boundaries','title' => 'Esco Healthcare at ISPE 2018: Breaking Boundaries','banner_img' => 'ehaispe2018bb-01-092818-min.jpg','banner_thumb' => 'ehaispe2018bb-01-092818-min.jpg','description' => '<p class="text-justify">Esco Healthcare gladly thanks all our partners, clients, and collaborators for visiting us at the International Society of Pharmaceutical Engineering (ISPE) Conference and Exhibition 2018 at Suntec, Singapore International Convention &amp; Exhibition Centre last Sept. 30-31.</p>','content' => '
<p class="text-justify">Esco Healthcare gladly thanks all our partners, clients, and collaborators for visiting us at the International Society of Pharmaceutical Engineering (ISPE) Conference and Exhibition 2018 at Suntec, Singapore International Convention &amp; Exhibition Centre last Sept. 30 &ndash; 31.</p>
<p class="text-justify">ISPE is an international organization dedicated to advancing the health of the public by providing a global forum for the open exchange of scientific information and for the development of policy, education, and advocacy for the different fields in pharmacy.</p>
<img src="/images/upload/ehaispe2018bb-02-092818-min.jpg" class="img-responsive center-block my-3" style="margin: auto;width: 80%;">
<p class="text-justify">Esco Healthcare proves its relentless provision of specialist services, equipment packages, and process solutions for being well represented into 3 divisions: Esco Pharma, TaPestle Rx, and Esco VacciXcell. </p>
<p class="text-justify">A lot of interested visitors queued up as the product specialists enthusiastically explained the innovative applications of all displayed equipment. Esco&#39;s buzz wire game called &lsquo;BIBO&rsquo; (Breath-In, Breath-Out) drew in a lot of visitors and potential clients to the booth. It became one of the highlights of attending the ISPE, which allowed the promotion of all Esco products and services.</p>
<img src="/images/upload/ehaispe2018bb-03-092818-min.jpg" class="img-responsive center-block my-3" style="margin: auto;width: 80%;">
<p class="text-justify">ISPE adheres to its theme, &ldquo;From Manufacturing to Patients,&rdquo; and so Esco Healthcare promises to give its best from discovery up to delivery. With continuous innovation, improved operator protection, reduction of cross-contamination, and more efficient processing, occupational health and human healthcare will advance.</p>
<p class="text-justify">Again, Esco Healthcare sincerely expresses gratitude to everyone who has visited the booth during the exhibit. See you on our next event!</p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><strong><span style="color: #93C67D;">Esco Pharma Pte. Ltd.</span></strong><br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p><strong><span style="color: #93C67D;">Esco Technologies, Inc.</span></strong><br />Esco Pharma Factory<br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p><strong><span style="color: #93C67D;">Esco GB Ltd.</span></strong><br />Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2018-10-01 00:00:00'],





['news_category_id' => '3','old_id' => '150','slug' => 'esco-group-joins-fapa-connects-with-asian-pharmacists','title' => 'Esco Group Joins FAPA; Connects With Asian Pharmacists
','banner_img' => 'esco-group-joins-fapa-2018-min.jpg','banner_thumb' => 'esco-group-joins-fapa-2018-min.jpg','description' => '<p class="text-justify">Esco Group of Companies joined the four-day exhibit of the 27th Federation of Asian Pharmacists Association (FAPA) Congress at the Philippine International Convention Center (PICC), last Oct. 24 to 27.</p>','content' => '

<p><i>Mabuhay!</i></p>
<p class="text-justify">Esco Group of Companies joined the four-day exhibit of the 27<sup>th</sup> Federation of Asian Pharmacists Association (FAPA) Congress at the Philippine International Convention Center (PICC), last Oct. 24 to 27.</p>
<p class="text-justify">The Philippines played host to the largest gathering of pharmacists from all over Asia, providing a rare platform for global and local health practitioners to learn from renowned professionals and researchers. </p>
<p class="text-justify">With the theme: <i>&ldquo;Pharmacists for the Global Goals: Creating Value Beyond Health,&rdquo;</i> the event featured an innovative educational program, prepared and presented by distinguished healthcare practitioners and researchers from all over the world. </p>
<img src="/images/upload/news01-110818.jpg" class="img-responsive my-3" style="margin: auto;">
<p class="text-center"><strong><i>Hurrah!</i></strong> Delegates from all over Asia flocked the Esco booth during the four-day FAPA event last Oct. 24-27.</p>
<p class="text-justify">Esco was able to educate participants with their display of innovative pharmaceutical technologies -- all of which guarantee product, personnel, and environmental safety. These technologies include:</p>
<ul>
    <li>Streamline&reg; Compounding Isolator Gen 2</li>
    <li>Cytoculture&reg; Cytotoxic Safety Cabinet (CYT-4A3)</li>
    <li>Airstream&reg; Class II Type A2 Biological Safety Cabinets (AC2-4E8)</li>
    <li>Esco HP Series Laboratory Refrigerators (HR1-400S)</li>
</ul>
<img src="/images/upload/news02-110818.jpg" class="img-responsive my-3" style="margin: auto;">
<p class="text-center"><strong><i>Tuloy po Kayo!</i></strong> FAPA&#39;s keynote speakers participated in the fun-filled booth of Esco Group of Companies at PICC, Oct. 24-27.</p>
<p class="text-justify">Also, to add to the visitor&#39;s delight, Esco set up a buzz wire game inside the isolator and the biosafety cabinet which allowed the players to have fun while experiencing the ease of utilizing the two equipment.</p>
<p class="text-justify">This year&#39;s FAPA not only enlightened hundreds of Asian pharmacists, but it also provided 18 Continuing Professional Development (CPD) units for Filipino pharmacists.</p>
<p class="text-justify">The Esco Group of Companies would like to thank all FAPA delegates who visited out booth!</p>
<p class="text-justify">Check out the highlights of our FAPA exhibit &rarr;	<a href=" https://youtu.be/uVzCxCRySqI" target="_blank"> https://youtu.be/uVzCxCRySqI</a></p>
<p class="text-justify">To learn more about Esco products and services click <a href="http://www.escoglobal.com/home.php" target="_blank">here</a>.</p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><strong style="color: #93C67D;">Esco Pharma Pte. Ltd.</strong><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: csis.pharma@escoglobal.com</p>
<p><strong style="color: #93C67D;">Esco Technologies, Inc.</strong><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com" target="_blank">eti.pharma@escoglobal.com</a></p>
<p><strong style="color: #93C67D;">Esco GB Ltd.</strong><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com" target="_blank">egb.pharma@escoglobal.com</a></p>
<p><strong>About our BRANDS</strong></p>
<p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>



','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2018-11-08 00:00:00'],


['news_category_id' => '3','old_id' => '151','slug' => 'esco-joins-the-gmp-workshop-at-ho-chi-minh-vn','title' => 'Esco Joins the GMP Workshop at Ho Chi Minh, VN
','banner_img' => 'gmp-01-110918.png','banner_thumb' => 'gmp-01-110918.png','description' => '<p class="text-justify">Esco continues to support the growing changes of the pharmaceutical industry by joining the ISPE GMP Workshop at New World Saigon Hotel, Ho Chi Minh City, Vietnam last Oct. 18-20.</p>','content' => '<p class="text-justify">Esco continues to support the growing changes of the pharmaceutical industry by joining the ISPE GMP Workshop at New World Saigon Hotel, Ho Chi Minh City, Vietnam last Oct. 18-20.</p>
<p class="text-justify">The event was organized by the International Society for Pharmaceutical Engineering (ISPE) Singapore, an international non-profit organization which provides an opportunity to different fields of pharmaceutical industry to gain innovative insights in pharmaceutical technology, in cooperation with the Drug Administration of Vietnam (DAV), an institution which develops and issues legal documents on the quality of pharmaceuticals and cosmetics.</p>
<p class="text-justify">The workshop focused on the current updates of the pharmaceutical quality system, quality assurance, current GMPs, and quality control.</p>
<p class="text-justify">Attendees from Vietnam and all over Asia were very attentive during the whole session, noting the important points and raising concerns and questions to the distinguished speakers. The topics of the workshop were comprised of the following: </p>
<ul>
    <li>International Regulatory System</li>
    <li>Risk Analysis</li>
    <li>Data Integrity</li>
    <li>Effectively and Efficiently Managing GMP Deviations using Quality Risk Management</li>
    <li>Deviation Management</li>
    <li>Commissioning and Qualification of HVAC Systems</li>
</ul>
<img src="/images/upload/gmp-01-110918.jpg" class="img-responsive" style="margin: auto;">
<p class="text-center"><i>Figure 1. (R-L) Esco team: Ho Chi Minh members with Esco Aster sales person and Esco Healthcare product specialists who attended the workshop.</i></p>
<p class="text-justify">Esco is one of the leaders in promoting healthcare and safety, and so supported the event by exhibiting at the ISPE GMP Workshop. Showcased were different materials that embodied Esco, ranging from laboratory and pharmaceutical equipment, and biotechnological products from <a href="http://www.vaccixcell.com/" target="_blank">Esco VacciXcell</a> and <a href="http://www.escoaster.com/" target="_blank">Esco Aster</a>.</p>
<img src="/images/upload/gmp-02-110918.jpg" class="img-responsive" style="margin: auto;">
<p class="text-center"><i>Figure 2. Pharmacists from Vietnam and all over Asia visiting the Esco booth.</i></p>
<p class="text-justify">Esco sincerely expresses gratitude to everyone who has visited the booth during the exhibit. See you on our next event!</p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><strong style="color: #70AD47;">Esco Pharma Pte. Ltd.</strong><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p><strong style="color: #70AD47;">Esco Technologies, Inc.</strong><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p><strong style="color: #70AD47;">Esco GB Ltd.</strong><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p class="text-justify">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2018-11-09 00:00:00'],




  ['news_category_id' => '3','old_id' => '159','slug' => 'esco-pharma-at-ispe-event-in-singapore','title' => 'Esco Pharma at ISPE Event in Singapore.','banner_img' => 'escopharma-gaining-attention-at-ispe-sg.jpg','banner_thumb' => 'escopharma-gaining-attention-at-ispe-sg.jpg','description' => '<p>Esco Pharma has just completed another successful ISPE Event held on June 22-25 at Suntec , Singapore after its remarkable participation in Interphex New York earlier this year.</p>','content' => '
		<p>Esco Pharma a Division of Esco Group of companies has just completed another successful ISPE Event in Singapore after having participated in Interphex New York earlier in the year. On exhibit was Esco Pharma&rsquo;s range of Aseptic / Containment isolators, Downflow Booths and Cross Contamination Facility Integrated Barriers.</p>

		<p>Esco Pharmas&rsquo; Downflow Booths are gaining popularity in USA and Asia thanks to a complete modularity in design and our building block approach having won recent projects with various MNCs.</p>

		<p>Esco Pharma pioneered the building block approach for booths using standard blocks allow up to 3 million different configurations to be offered to clients. Our range of isolators are built on the solid foundation of Esco Groups&rsquo; expertise in clean air and containment systems in addition to Esco Groups&rsquo; range of pharmacy compounding aseptic and containment isolators.</p>

		<p>XL Lin, Director of Market Development for Esco Group and founder of Esco Pharma presented as well under the Sterile Operations Track with a topic on Retrofitting and upgrading Containment Equipment to reduce PPE highlighting trends / updates / advancements in Aseptic Technology that could potentially lead to complete reduction of PPE in Aseptic Filling / Processing.</p>

		<p><strong>Esco Pharma would like to thank all our partners for contributing in the success of this event and we look forward to seeing you in the next Interphex at Javits Center, New York on April 21-23, 2015. </strong></p>
		<br />

	    <div class="row">

			    <div class="col-md-6" style="padding: 0px;">
				<img class="img-responsive img-rounded" src="/images/upload/esco-pharma-at-ispe-event-in-singapore4.jpg" style="margin:5px!important;padding: 0 5px; border-radius: 14px !important;" />
				</div>

				<div class="col-md-6" style="padding: 0px;">
				<img class="img-responsive img-rounded" src="/images/upload/esco-pharma-at-ispe-event-in-singapore2.jpg" style="margin:5px!important;padding: 0 5px; border-radius: 14px !important;" />
				</div>

	    </div>
	    <div class="row" style="margin-top: 10px!important;">
			    <div class="col-md-6" style="padding: 0px;">
				<img class="img-responsive img-rounded" src="/images/upload/esco-pharma-at-ispe-event-in-singapore3.jpg" style="margin:5px!important;padding: 0 5px; border-radius: 14px !important;" />
				</div>

				<div class="col-md-6" style="padding: 0px;">
				<img class="img-responsive img-rounded" src="/images/upload/esco-pharma-at-ispe-event-in-singapore1.jpg" style="margin:5px!important;padding: 0 5px; border-radius: 14px !important;" />
				</div>

	    </div>

<style type="text/css">
	h2{
		text-align: center;
	}
</style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2014-08-13 09:33:46'],



  ['news_category_id' => '3','old_id' => '9','slug' => 'discovery-to-delivery-hits-nyc','title' => 'Discovery to Delivery Hits NYC ','banner_img' => 'discovery-to-delivery-hits-nyc-min-min.jpg','banner_thumb' => 'discovery-to-delivery-hits-nyc-min-min.jpg','description' => 'Esco Healthcare will be exhibiting once again at INTERPHEX 2019 - the stage of the leading pharmaceutical, biotechnology, and device development and manufacturing this April 2-4 at Javits Center, New York City.','content' => '
  <p class="text-justify">Esco Healthcare will be exhibiting once again at INTERPHEX 2019 - the stage of the leading pharmaceutical, biotechnology, and device development and manufacturing this April 2-4 at Javits Center, New York City.</p>

  <p class="text-justify">INTERPHEX is one of the biggest exhibitions worldwide that brings over 11,000 global industry leaders and over 650 suppliers. Last year, the event showcased innovation through a combination of technical conferences, demonstrations, exhibits, and networking events to imply the best quality, efficiency, and cost effectiveness in the global market.</p>

  <p class="text-justify">At the event\'s 40<sup>th</sup> anniversary, experience with us <em>Science through Commercialization</em>, with Esco Healthcare\'s take - <em>Discovery to Delivery</em>. From research and development to clinical trials, pharmacy compounding to stem cell therapy, and final commercial production, we provide high-quality services, equipment packages, and process solutions for the protection of the operator, the product and the environment.</p>

  <p class="text-justify">Be sure to catch Esco Pharma at Booth 1942 as our team of experts will be available to discuss your containment needs and how we can provide safety with our state-of-the-art equipment.</p>

  <p class="text-justify">Esco Aster will also be debuting at INNOPHEX - offering access to the latest intelligence, technologies, and advancements in industry innovation at Booth 4152.</p>

  <p class="text-justify">Esco Aster, a globally-operating independent Contract Development and Manufacturing Organization (CDMO) will be displaying the <a href="http://www.vaccixcell.com/products-and-brands/celcradle/#content">CelCradle<sup>&trade;</sup> Tide Motion Bioreactor</a>, a disposable bioreactor capable of high-density cell culture for protein expression, virus, and monoclonal antibody production among others. Make sure to experience the <a href="http://www.vaccixcell.com/products-and-brands/tidecell/#content">TideCell<sup>&reg;</sup> Bioreactor System</a>, a linearly scalable Tide Motion bioreactor, that can scale up to 5,000 L packed bed volume, equipped with its own closed automated cell harvesting with closed automated cell harvesting in exciting VR technology!</p>

  <p class="text-justify">Click here for to register at INTERPHEX 2019 and see Esco Healthcare\'s technologies firsthand! <a href="https://www.interphex.com/Register/">https://www.interphex.com/Register/</a></p>

  <p class="text-justify">Can\'t make it this year? We offer a variety of online resources to learn more about our products and brands, upcoming events, and more!</p>


  <p>&nbsp;</p>

  <p><strong>Contact Us</strong><br><span style="color: rgb(164, 204, 131);">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>

  <p>&nbsp;</p>

  <p><span style="color: rgb(164, 204, 131);">Esco Technologies, Inc.</span> <br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a> </p>

  <p>&nbsp;</p>

  <p><span style="color: rgb(164, 204, 131);">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>



  <p>&nbsp;</p>

  <p><strong>About our BRANDS</strong></p>
  <p class="text-justify">Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

  <p>&nbsp;</p>

  <p><strong>About Esco Pharma</strong></p>
  <p class="text-justify">Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles..</p>

  <p class="text-justify"">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>

  <style type="text/css">

  </style>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Discovery to Delivery Hits NYC','meta_description' => 'Discovery to Delivery Hits NYC','created_at' => '2019-03-01 00:00:00'],



  ['news_category_id' => '2','old_id' => '15','slug' => 'esco-gb-ltd-hosted-the-2014-training-at-its-new-premises-in-barnsley','title' => 'Esco GB Ltd hosted the 2014 Training at its new premises in Barnsley','banner_img' => 'esco-gb-barnsley.jpg','banner_thumb' => 'esco-gb-barnsley.jpg','description' => '<p>"Thank you for your hospitality last week. The two days were very informative and will hopefully help us grow ESCO sales!" Cian Murphy, Medical Supply Company.</p>','content' => '
  <p class="text-center"><strong>&ldquo;Thank you for your hospitality last week. The two days were very informative and will hopefully help us grow ESCO sales!&rdquo; Cian Murphy, Medical Supply Company.</strong></p>
		<div class="row">
			<div class="col-md-8">
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>The first group of dealers took part in Esco GB&rsquo;s first ever dealer training in Esco&rsquo;s new state of the art premises informing first-hand about new product developments and Esco&rsquo;s plans for 2015.</p>
				<p>&nbsp;</p>
				<p>Being closer than ever to customers and channel partners the Esco GB team is looking to honour long-time relationships by offering trainings and seminars at the new location in Barnsley, just off the M1. The first training was held 4-9 December, more are demanded and will be announced January 2015.</p>
				<p>&nbsp;</p>
				<p>The first training covered Esco&rsquo;s broad product range of high quality clean air and biosafety cabinets, incubators, freezer as well as a briefing on commissioning &amp; testing of cabinets, future marketing plans, and the operations side at Esco GB.</p>
				<p>&nbsp;</p>

				<p>Esco is now operating their own hub and warehouse in Barnsley to meet the increasing demand of high quality laboratory equipment in UK and Ireland.</p>
				<p>&nbsp;</p>

				<p>Knowing the importance of after sales support, Esco decided to invest in an own dedicated service engineer. Together with approved service partners Esco ensures high quality and on time servicing of equipment throughout the UK.</p>
			</div>

			<div class="col-md-4">
				<img class="img-responsive mb-3" src="http://www.escoglobal.com/images/upload/esco-gb-at-barnsley.png" />
				<img class="img-responsive mb-3" src="http://www.escoglobal.com/images/upload/esco-gb-2014-training.jpg" />
				<img class="img-responsive mb-3" src="http://www.escoglobal.com/images/upload/esco-gb-2014-training-image.jpg" />
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-sm-4">
				<img class="img-responsive" src="http://www.escoglobal.com/images/upload/esco-gb-training-image.jpg" />
			</div>
			<div class="col-sm-4">
				<img class="img-responsive" src="http://www.escoglobal.com/images/upload/esco-pharma-rotherham.jpg" />
			</div>
			<div class="col-sm-4">
				<img class="img-responsive" src="http://www.escoglobal.com/images/upload/esco-pharma-at-rotherham.jpg" />
			</div>
		</div>

','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco GB Ltd hosted the 2014 Training at its new premises in Barnsley','meta_description' => 'Esco GB Ltd hosted the 2014 Training at its new premises in Barnsley','created_at' => '2014-12-15 18:02:25'],
  ['news_category_id' => '1','old_id' => '31','slug' => 'esco-pharma-is-proud-to-launch-its-new-range-of-containment-isolators','title' => 'Esco Pharma is Proud to Launch its New Range of Containment Isolators','banner_img' => 'blow-fill-seal-technology-and-isolators.jpg','banner_thumb' => 'blow-fill-seal-technology-and-isolators.jpg','description' => '<p>Esco Pharma, building on the success of our suite of Aseptic/Containment Isolators, is proud to launch our Containment Barrier Isolator (CBI) range of aseptic/containment isolators. The Esco CBI retains the same functionality and platform engineering that Esco Pharma pioneered whilst adding more innovative features.</p>','content' => '<div>
<div>
<div>
<p>Esco Pharma, building on the success of our suite of Aseptic/Containment Isolators, is proud to launch our Containment Barrier Isolator (CBI) range of aseptic/containment isolators. The Esco CBI retains the same functionality and platform engineering that Esco Pharma pioneered whilst adding more innovative features.</p>

<center><img class="img-responsive" src="/images/upload/containment-barrier-isolator-cbi.jpg" /></center>

<p><strong>Applications that are specifically optimized for our CBI are:</strong></p>
</div>

<p>&nbsp;</p>

<div>
<div>
<ul>
	<li>Pharmacy Compounding (Chemotherapy / TPN)</li>
	<li>As a Class III Cabinet for Biosafety Levels (BSL) 3 and 4</li>
	<li>Small Batch Sterility Testing</li>
	<li>Small-scale Potent Material Handling</li>
	<li>Cell Processing</li>
	<li>Aseptic Processing</li>
	<li>Research and Development</li>
</ul>
</div>
</div>

<p>&nbsp;</p>

<div>
<p>Our Esco CBI provides full unidirectional airflow across the entire work zone and comes in re-circulatory or single-pass options, in either positive or negative pressure.</p>

<p>It is built with a single-piece carcass and 19 mm coved ball radius corners on all 4 base corners. This allows for easy incorporation of 3rd party equipment and other process instrumentation.</p>

<p>Coved corners allow hydrogen peroxide vapors to reach all corners hence all surfaces can be easily biodecontaminated to a 6 log reduction. Its true single piece design allows rapid surface decontamination/sterilization, and easy cleaning in the event of any spillages.</p>

<p>&nbsp;</p>

<p>Esco CBI comes as well with 2 differing dynamic pass-through hatches sizes:</p>

<div>
<div>
<ul>
	<li>Larger dynamic pass-through with optional glove ports</li>
	<li>Smaller dynamic pass-through without glove ports that allows integration of a CCTV.</li>
	<li>Optional sliding trays (perforated or non &ndash; perforated can be provided).</li>
</ul>
</div>
</div>

<p>&nbsp;</p>

<div>
<p>For further information please contact your Esco office near your area today!</p>
</div>
</div>
</div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma is Proud to Launch its New Range of Isolation Containment','meta_description' => 'Esco Pharma is Proud to Launch its New Range of Isolation Containment','created_at' => '2015-04-15 19:02:26'],
  ['news_category_id' => '3','old_id' => '32','slug' => 'esco-at-ispe-exhibition','title' => 'Esco at ISPE Exhibition','banner_img' => 'Esco-Pharma-at-ISPE-exhibition.jpg','banner_thumb' => 'Esco-Pharma-at-ISPE-exhibition.jpg','description' => '<p>As we finish another successful exhibition-ISPE at Suntec, Singapore on 28-29 May, 2015, we would like to thank all of you for the continuous support and interest.</p>','content' => '<div class="container-fluid">
<div class="row-fluid">
<p>As we finish another successful exhibition&mdash;ISPE at Suntec, Singapore on 28-29 May, 2015, we would like to thank all of you for the continuous support and interest.</p>
<p>At the event, we displayed our latest products in the market under Esco:</p>
<ul>
  <li>Containment Barrier Isolator (CBI)</li>
  <li>General Performance Platform Isolator (GPPI)</li>
  <li>Full stainless steel Down Flow Booth (DFB) model</li>
  <li>TideCell bioreactor</li>
  <li>BelloStage bioreactor</li>
  <li>CelSafe Incubator</li>
  <li>Benchtop Shaker Incubator &ndash; AS1/ISB1</li>
  <li>Sublimate Freeze Dryer</li>
  <li>Ventilated Balance Enclosure (VBE)</li>
</ul>
<p>A full range of technologies from pharma containment systems, life sciences laboratory apparatus, to bioprocessing equipment were presented and demonstrated, drawing remarkable response from our booth visitors.</p>
<p>We are proud of what Esco has to offer, and we hope you enjoyed the show! Please do not hesitate to contact us for more information.</p>
<p>Next stop, Achema, Germany!</p>
<p>&nbsp;</p>
</div>
<div class="row">
<div class="col-sm-6"><img src="/images/upload/Esco-Pharma-products-at-ISPE-exhibition.jpg" class="img-responsive img-rounded"></div>
<div  class="col-sm-6"><img src="/images/upload/Esco-Pharma-products-ISPE-exhibition.jpg" class="img-responsive img-rounded"></div>
</div>
<p>&nbsp;</p>
<div  class="row">
<div  class="col-sm-6"><img src="/images/upload/ISPE-convention.jpg" class="img-responsive img-rounded"></div>
<div  class="col-sm-6"><img src="/images/upload/ISPE-exhibition.jpg" class="img-responsive img-rounded"></div>
</div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma at ISPE Exhibition','meta_description' => 'As we finished another successful exhibitionâ€”ISPE at Suntec, Singapore on 28-29 May, 2015, we would like to thank all of you for the continuous support and interest.','created_at' => '2015-06-09 11:54:07'],
  ['news_category_id' => '3','old_id' => '33','slug' => 'thank-you-for-visiting-esco-at-achema-2015','title' => 'Thank you for visiting Esco at ACHEMA 2015!','banner_img' => 'thank-you-for-visiting-esco-at-achea-2015.jpg','banner_thumb' => 'thank-you-for-visiting-esco-at-achea-2015.jpg','description' => '<p>ACHEMA 2015 was a great success, thanks to our visitors. We have received excellent feedback for our latest innovative technologies and product developments in Biosafety, Thermostatics, Isolators and Bioprocessing (Bioreactors) Technology.</p>','content' => '<div >
<p>ACHEMA 2015 was a great success, thanks to our visitors. We have received excellent feedback for our latest innovative technologies and product developments in Biosafety, Thermostatics, Isolators and Bioprocessing (Bioreactors) Technology.</p>

<p>Among them were our new CelSafe Incubator with High Heat Sterilization Cycle, and a no fuzz internal chamber, which allows easy, quick and safe sterilization.</p>

<p>Eagerly awaited is also the product launch of our Avona Stability Chamber, the Versati Benchtop/Micro Centrifuges and OrbiCult Ambient/Incubator Shakers, which were on display first time and exclusively at ACHEMA.</p>

<p>Our Pharma experts were sought after and the latest product development made in Britain - a Sterility Testing Isolator -&nbsp; as well as our Ventilated Balance Enclosure with a bag-in bag-out system, received the greatest interest alongside the Down Flow Booth and the TideCell Biorector for big batch applications.</p>

<p>On behalf of the entire Esco Lab and Pharma Team, we hope that you enjoyed the Exhibition as much as we did. Experience further innovative research solutions with Esco.</p>

<p>We are looking forward to seeing you again soon!</p>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Thank you for visiting Esco at ACHEMA 2015!','meta_description' => 'We have received excellent feedback for our latest innovative technologies and product developments in Biosafety, Thermostatics, Isolators and Bioprocessing (Bioreactors) Technology.','created_at' => '2015-06-26 18:18:51'],
  ['news_category_id' => '2','old_id' => '34','slug' => 'esco-pharma-partners-with-up-college-of-pharmacy','title' => 'Esco Pharma partners with UP College of Pharmacy','banner_img' => 'esco-pharma-partners-with-up-college-of-pharmacy.jpg','banner_thumb' => 'esco-pharma-partners-with-up-college-of-pharmacy.jpg','description' => '<p>It was indeed a success for Esco Pharma to be the corporate sponsor for the training workshop organized by the premiere academe for Industrial Pharmacy in the Philippines, the University of the Philippines College of Pharmacy (UPCP).</p>','content' => '

<p>It was indeed a success for Esco Pharma to be the corporate sponsor for the training workshop organized by the premiere academe for Industrial Pharmacy in the Philippines, the University of the Philippines College of Pharmacy (UPCP).</p>

<p>The training workshop focused on Process Validation and Quality Risk Management. This was attended by professionals from various pharmaceutical and food manufacturing industries in the Philippines. Among the distinguished experts from the industry and the academe who served as resource speakers of the event are Ms. Ma. Rosario B. Barangan (VP for Production, EL Laboratories), Mr. Carlo L. Perete (TS Manager, GSK Phils./President, ISPE Phils.), Paul Marvin T. Quizon (Pharex Health), Mr. Antonio B. Regadio (Founder, Regworks Phils.), Mr. Mario Carlo A. Soliven (QA/PD Director, Pascual Laboratories), and Asst. Prof. Bryan Paul I. Bulatao (UPCP).</p>

<p>&ldquo;Risk is intuitive and familiar to everyone, yet it is rarely defined with sufficient rigor for complex risk analysis&rdquo;, said Ms. Barangan during her lecture about QRM. More emphasis on risk management and its effect to quality has been the focus of the entire training workshop. Quality coupled with safety shall be emphasized as the mantra of effective and efficient pharmaceutical processes.</p>

<p>Esco Pharma looks forward seeing you on their next sponsored event!</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma partners with UP College of Pharmacy','meta_description' => 'Esco Pharma partners with UP College of Pharmacy','created_at' => '2015-07-09 17:46:29'],
  ['news_category_id' => '3','old_id' => '35','slug' => 'esco-pharma-exhibited-concurrently-in-pharma-expo-las-vegas-and-ipex-packaging-expo-in-jakarta','title' => 'Esco Pharma exhibited concurrently in Pharma Expo Las Vegas and IPEX Packaging Expo in Jakarta','banner_img' => 'esco-pharma-at-pharma-expo-and-ipex.jpg','banner_thumb' => 'esco-pharma-at-pharma-expo-and-ipex.jpg','description' => '<p>On Sept 28-30, at Pharma Expo in Las Vegas, Esco Pharma showcased its latest platform isolators, including the Aseptic Containment Isolator with integrated hydrogen peroxide bio-decontamination system, inflatable seals, and safe change filter housings.</p>','content' => '<p>Esco Pharma is dedicated to providing specialist services, equipment packages and process solutions from our core platform products leading to improved protection of operators, reduction of cross-contamination and more efficient processing.</p>

<p>To uphold our vision, Esco Pharma actively participates in exhibitions around the world to present our state-of-the-art equipment and show how our products became the no.1 choice of experts around the world.</p>

<p>On Sept 28-30, at Pharma Expo in Las Vegas, Esco Pharma showcased its latest platform isolators, including the Aseptic Containment Isolator with integrated hydrogen peroxide bio-decontamination system, inflatable seals, and safe change filter housings.</p>

<p>Esco Pharma also presented our latest healthcare platform isolator in IPEX Jakarta, along with its latest shaking incubators and bioreactors. Held on September 30 - October 3, this 4-day event significantly increased the industry&rsquo;s awareness on how our products are superior among others.</p>

<p>Esco Pharma is the only Life Sciences Company, with three (3) manufacturing sites in the USA, UK and Singapore, that globally produces these specific range of aseptic/containment downflow booths and isolator barrier systems.</p>

<p>We thank you for visiting us in our booths and we look forward to working with you as we make the world a healthier and safer place to live in.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma exhibited concurrently in Pharma Expo Las Vegas and IPEX Packaging Expo in Jakarta','meta_description' => 'Esco Pharma exhibited concurrently in Pharma Expo Las Vegas and IPEX Packaging Expo in Jakarta','created_at' => '2015-10-07 17:40:55'],
  ['news_category_id' => '3','old_id' => '36','slug' => 'vacci-xcell-commences-the-1-st-day-of-exhibition-at-the-europe-vaccine-congress-2015-in-madrid','title' => 'VacciXcell commences the 1st day of exhibition at the Europe Vaccine Congress 2015 in Madrid','banner_img' => 'europe-vaccine-congress-2015.jpg','banner_thumb' => 'europe-vaccine-congress-2015-thumb.jpg','description' => '<p>VacciXcell, a subsidiary of Esco Group of companies, completes day 1 of the European Vaccine Congress. Of great interest is our latest CelCradle Single-Use Bioreactor that drew large responses from the international delegates.</p>','content' => '<div style="width:80%;margin:auto">
<p>VacciXcell, a subsidiary of Esco Group of companies, completes day 1 of&nbsp;the European Vaccine Congress. Of great interest is our latest CelCradle Single-Use Bioreactor that drew large responses from the international delegates.</p>

<p>CelCradle is the only single-use packed bed bioreactor that has linear scalability from bench-scale to production scale with automated cell harvesting. Our system has already been proven for commercial production for various European and Asian Vaccine manufacturers across a wide variety of cell lines. Stock for our systems is kept in our regional HQs in USA, UK and Singapore.</p>

<p style="margin:auto"><img class="img-responsive" src="/images/upload/celcradleX-500pxW.png" style="margin:auto" /></p>

<p>VacciXcell is the only life sciences tools company globally dedicated to providing&nbsp;a turnkey bioprocess solution from upstream to downstream bioprocessing and formulation and filling.</p>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'VacciXcell commences the 1st day of exhibition at the Europe Vaccine Congress 2015 in Madrid','meta_description' => 'VacciXcell commences the 1st day of exhibition at the Europe Vaccine Congress 2015 in Madrid','created_at' => '2015-11-10 09:48:46'],
  ['news_category_id' => '2','old_id' => '37','slug' => 'esco-launches-vacci-xcell-and-tapestle-rx','title' => 'Esco Launches VacciXcell and TapestleRx','banner_img' => 'healthcare-pharmacy-isolator-min.jpg','banner_thumb' => 'healthcare-pharmacy-isolator-min.jpg','description' => '<p>Esco group of companies is excited to launch 2 new platforms VacciXcell and TaPestle Rx!</p>','content' => '<div >
<p>Esco group of companies is excited to launch 2 new platforms VacciXcell and TaPestle Rx!</p>

<p>VacciXcell provides design and manufacturing of single use and SIP bioreactors for the vaccine and cell therapy industry as well as being a sales and marketing arm of entire Esco Group Life Sciences Tools and partner companies that enter into this industry. VacciXcell aim is to provide developing countries with distributed manufacturing to allow vaccine self-sufficiency based on her innovative tide based bioreactors. VacciXcell is Esco&#39;s social entrepreneurship in line with our Group&#39;s vision to provide enabling technologies to make human lives safer and healthier.&nbsp;Find out more at <a href="http://www.vaccixcell.com/" target="_blank">www.vaccixcell.com</a></p>

<p>TaPestle Rx provides design and build services within Asean/Anz for Pharmacy Compounding and other Healthcare Facilities as well as being the sales and marketing arm globally&nbsp;for Esco Pharma Isolators that enter into the Pharmacy and Radiopharmacy compounding industry. As Pharmacy Compounding standards globally following the New England Case in USA are brought in line with cGMP standards, Esco is once again the pioneer in providing cGMP Isolators into the developing world building bridges to the world. TaPestle Rx is also&nbsp;our distribution arm for other partner products that enter into the pharmacy compounding industry within Asia Pacific.&nbsp;Find out more at <a href="http://www.tapestlerx.com" target="_blank">www.tapestlerx.com</a></p>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco group of companies is excited to launch 2 new platforms VacciXcell and TaPestle Rx!','meta_description' => 'Esco group of companies is excited to launch 2 new platforms VacciXcell and TaPestle Rx!','created_at' => '2015-12-03 13:10:23'],
  ['news_category_id' => '1','old_id' => '38','slug' => 'esco-pharma-ships-out-general-processing-platform-isolator-gppi-to-a-client-in-canada','title' => 'Esco Pharma ships out General Processing Platform Isolator (GPPI) to a client in Canada','banner_img' => 'Esco-Pharma-ships-GPPI-to-Canada.jpg','banner_thumb' => 'Esco-Pharma-ships-GPPI-to-Canada.jpg','description' => '<p>The platform design with pre-proven engineering provides a perfect solution to meet a potent product formulation application with the shortest engineering and fastest delivery time.</p>','content' => '<div><p>The platform design with pre-proven engineering provides a perfect solution to meet a potent product formulation application with the shortest engineering and fastest delivery time.<br />
&nbsp;<br />
The Esco GPPI features an integrated analytical load cell with external scale readout; an automated inlet and outlet dampers for automated pressure hold testing and; an onboard compressed air pump for pressure testing to class 2 standards as per ISO 10648-2. With the unit fitting through a standard doorway, installation consists of wheeling in place and plugging in. Provided is a wash gun for wash-in-place (WIP) in the interior of the isolator and a rapid transfer port (RTP) for contained loading in and out.<br />
&nbsp;<br />
Esco Pharma is dedicated to providing specialist services, equipment packages, and process solutions from our core platform that conform to international electrical standards such as CE marking and UL listing. Components of GPPI are considered UL listed.<br />
&nbsp;<br />
Esco Pharma is the only global supplier in the pharmaceutical industry that operates from three (3) global regional headquarters and factories - US, UK, and Singapore. Esco is an ISO 9001 and 14001 certified organization adhering to the most stringent quality management systems throughout our organization.<br />
&nbsp;<br />
Contact us for your next project today!</p></div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma ships out General Processing Platform Isolator (GPPI) to a client in Canada','meta_description' => 'Esco Pharma ships out General Processing Platform Isolator (GPPI) to a client in Canada','created_at' => '2016-01-04 17:09:24'],
  ['news_category_id' => '3','old_id' => '43','slug' => 'esco-at-the-2016-p-ph-a-national-convention-in-cebu-city','title' => 'Esco at the 2016 PPhA National Convention in Cebu City','banner_img' => 'Esco-at-the-2016-PPhA-National-Convention-in-Cebu-City.jpg','banner_thumb' => 'Esco-at-the-2016-PPhA-National-Convention-in-Cebu-City.jpg','description' => '<p>Esco Group of Companies, a global life sciences tools provider active in laboratory, medical and pharmaceutical equipment, took part for the 1st time in the annual Philippine Pharmacists Association (PPhA) National Convention last May 25 - 28, 2016 at the Waterfront Hotel in Cebu City, Philippines.</p>','content' => '<div>
<p>Esco Group of Companies, a global life sciences tools provider active in laboratory, medical and pharmaceutical equipment, took part for the 1st time in the annual Philippine Pharmacists Association (PPhA) National Convention last May 25 &ndash; 28, 2016 at the Waterfront Hotel in Cebu City, Philippines.</p>

<center><img class="img-responsive" src="/images/upload/Delegates-flocking-their-way-to-Escos-booth.jpg" /></center>

<p>Delegates flocking their way to Esco&#39;s booth.</p>

<p>&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/Pharmacists-from-Saint-Louis-University-dropping-by-the-Esco-booth-to.jpg" /></center>

<p>Pharmacists from Saint Louis University dropping by the Esco booth</p>

<p>&nbsp;</p>

<p>Considered as the biggest gathering for professional pharmacists across the country, the convention was attended by pharmacists from all areas of practice &ndash; community, hospital, industry, academe, veterinary medicine, cosmetic and wellness. The convention&rsquo;s highlights included plenary sessions that talked about &ldquo;Reducing the Global Burden of Disease: Optimizing Pharmacist&rsquo;s Contribution&rdquo;, poster presentations and trade exhibits to which Esco served as an exhibitor.</p>

<p>&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/Pharmacists-lining-up-for-registration.jpg" /></center>

<p>Pharmacists lining up for registration.</p>

<p>&nbsp;</p>

<p>Together with other companies, Esco showcased some of its top &ndash; calibre equipment. Those that were displayed at Esco&rsquo;s booth included a Ventilated Balance Enclosure (a containment system designed specifically for stability and accuracy while maintaining a high level of operator protection by containing hazardous airborne powder during weighing process), the Esco HP Series Laboratory Refrigerator (an exceptional product used for the protection of refrigerated drugs), and the Isotherm&reg; Forced Convection Laboratory Incubator (a world class laboratory incubator from Esco).</p>

<p>&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/PPhA-Vice-President-for-Luzon-and-Former-Board-of-Pharmacy-Chairman-Hon-Jennifer-M-Flores-at-the-Esco-booth.jpg" /></center>

<p>PPhA Vice President for Luzon and Former Board of Pharmacy Chairman -- Hon. Jennifer M. Flores at the Esco booth.</p>

<p>&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/Board-of-Pharmacy-Member-Dean-Adelina-Royo-and-Dean-Olivia-Limuaco-Vice-President-of-Centro-Escolar-University-Makati-Campus-visits-the-Esco-booth.jpg" /></center>

<p>Board of Pharmacy Member, Dean Adelina Royo &amp; Dean Olivia Limuaco, Vice President of Centro Escolar University (Makati Campus) visits the Esco booth.</p>

<p>&nbsp;</p>

<p>Delegates who came to visit Esco&rsquo;s exhibit expressed how happy they were to see actual equipment at the venue. A number of these delegates even extended their desire to acquire some of Esco&rsquo;s products for use in their hospitals, laboratory rooms and manufacturing areas. In addition, Esco&rsquo;s plush toy (Dr. Einesco) was a star himself as the convention participants were thrilled to have him as their freebie.</p>

<p>&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/Heide-Suing-Esco-Cebu-Branch-manager-talks-about-Escos-refrigerator.jpg" /></center>

<p>Heide Suing, Esco Cebu Branch manager talks about Esco&#39;s refrigerator to the current President of the Philippines&#39; Society of Hospital Pharmacists and newly elect PPhA Board of Director &ndash; Ms. Hazel faye Ricaforte-Docuyanan.</p>

<p>&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/Ms-Suing-talking-about-Escos-Isotherm-Incbator-to-Dr-Doralyn-Dalisay-a-pharmacist-and-a-microbiologist.jpg" /></center>

<p>Ms. Suing, talking about Esco&#39;s Isotherm Incbator to Dr. Doralyn Dalisay, a pharmacist and a microbiologist.</p>

<p>&nbsp;</p>

<p>All in all, the 4-day event was a success. Moreover, it was a great avenue for Esco to entice pharmacists to experience Esco&rsquo;s quality and innovative solutions for clinical, life science, research and industrial laboratory community.</p>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco at the 2016 PPhA National Convention in Cebu City','meta_description' => 'Esco at the 2016 PPhA National Convention in Cebu City','created_at' => '2016-06-01 10:27:33'],
  ['news_category_id' => '3','old_id' => '44','slug' => 'esco-at-the-ashp-in-baltimore','title' => 'Esco at the ASHP in Baltimore!','banner_img' => 'esco-at-ashp-baltimore.jpg','banner_thumb' => 'esco-at-ashp-baltimore.jpg','description' => '<p>Esco participated in the recently concluded prestigious conference, the American Society of Health-System Pharmacists (ASHP) Summer Meetings and Exhibitions 2016, held on June 11-15 at the Baltimore Convention Center, Baltimore, Maryland, USA.</p>','content' => '<div>
<p>Esco participated in the recently concluded prestigious conference, the American Society of Health-System Pharmacists (ASHP) Summer Meetings and Exhibitions 2016, held on June 11-15 at the Baltimore Convention Center, Baltimore, Maryland, USA.</p>

<p>&nbsp;</p>

<figcaption><i>Mr. Ryan Clayton, Ms. Zharmaine Solivet, and Mr. XL Lin during the ASHP Summer Meetings </i></figcaption>
</figure>

<p>&nbsp;</p>

<p>ASHP is a national professional organization whose more than 43,000 members include pharmacists, student pharmacists, and pharmacy technicians who serve as patient care providers on healthcare teams in acute and ambulatory settings. (ASHP, 2016)</p>

<p>Lectures were presented under the 4 main categories:</p>

<ol>
	<li>Medication Safety Collaborative</li>
	<li>Informatics Institute</li>
	<li>Pharmacy, Practice and Policy</li>
	<li>Ambulatory Care Conference</li>
</ol>

<p><strong>Handling Hazardous Drugs in Healthcare Settings</strong></p>

<p>A special topic on hazardous drugs was discussed. Patricia Kienle, the author of USP&lt;800&gt; Hazardous Drugs &ndash; Handling in Healthcare Settings, talked about the components of minimizing exposure to hazardous drugs during handling &ndash; <strong>1. Facilities</strong> and <strong>2. Other elements</strong>.</p>

<p><strong>Facilities</strong> include the following:</p>

<ol style="list-style-type:lower-alpha;">
	<li><strong>Primary Engineering Controls (PEC) </strong></li>
</ol>

<p style="margin-left:.25in;">Primary engineering controls such as Containment Ventilated Enclosures (CVE), Containment Aseptic Containment Isolators (CACI), and Biological Safety Cabinets (BSC) are highlighted as the main sources of operator protection during hazardous drug handling.</p>

<ol style="list-style-type:lower-alpha;">
	<li value="2"><strong>Secondary Engineering Controls (SEC)</strong></li>
</ol>

<p style="margin-left:.25in;">The room where the primary engineering control is placed should follow the minimum requirements such as fixed walls that separates the room from non-hazardous drug compounding area, negatively pressurized, and should have appropriate number of air changes per hour (ACPH).</p>

<ol style="list-style-type:lower-alpha;">
	<li value="3"><strong>Supplemental Engineering Controls</strong> e.g. closed-system transfer devices (CSTDs)</li>
</ol>

<p><strong>Other elements</strong> include the following:</p>

<ol style="list-style-type:lower-alpha;">
	<li>Personnel training and monitoring</li>
	<li>Medical surveillance</li>
	<li>Environmental monitoring</li>
	<li>Personal protective equipment</li>
	<li>Decontamination and cleaning</li>
	<li>Spill management</li>
</ol>

<p><strong>Esco&rsquo;s solution to USP &lt;797&gt;/&lt;800&gt; Pharmacy Compounding Challenges</strong></p>

<p>In relation to PECs, Esco has showcased its line of pharmacy compounding solutions during the exhibition.</p>

<p>Esco&rsquo;s pharmacy compounding isolators are compliant to international standards such as USP &lt;797&gt;/&lt;800&gt;, FDA cGMP, PIC/S, NIOSH, OSHA, and CETA. These isolators are designed to fit your applications.</p>

<p>&nbsp;</p>

<div class="row">
<div class="col-sm-6">
<table class="table table-bordered">
	<tbody>
		<tr>
			<td><strong>Positive Pressure Models</strong></td>
		</tr>
		<tr>
			<td>
			<p>Suitable for compounding <strong>non-hazardous drugs</strong> such as:</p>

			<ul>
				<li>Total Parenteral Nutrition</li>
				<li>Ophthalmic preparations</li>
				<li>Central IV Admixtures</li>
			</ul>
			</td>
		</tr>
		<tr>
			<td><strong>Negative Pressure Models</strong></td>
		</tr>
		<tr>
			<td>
			<p>Suitable for compounding <strong>hazardous drugs</strong> such as:</p>

			<ul>
				<li>Antineoplastic agents</li>
				<li>Hormones</li>
				<li>Antibody drug conjugates</li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>
</div>

<div class="col-sm-6"><img class="img-responsive" src="/images/upload/optimized-solution-for-pharmacy-applications.png" /></div>
</div>

<p>&nbsp;</p>

<p>In Esco, we consider the type of facility you are working at. If you have plans in upgrading your facilities, here are our recommendations for isolators:</p>

<table class="table table-bordered">
	<tbody>
		<tr>
			<td><strong>503 (a) facilities</strong></td>
			<td><strong>503 (b) facilities</strong></td>
		</tr>
		<tr>
			<td>
			<p><strong>Streamline&reg;</strong> Compounding Isolators</p>
			<strong>Isoclean&reg;</strong> Healthcare Platform Isolators</td>
			<td>
			<p><strong>Isoclean&reg;</strong> Healthcare Platform Isolators</p>

			<p><strong>Containment Barrier Isolator</strong></p>
			<strong>General Processing Platform Isolator</strong></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>See you also at:</p>

<table class="table table-bordered">
	<tbody>
		<tr>
			<td><strong>What?</strong></td>
			<td><strong>Where?</strong></td>
			<td><strong>When?</strong></td>
		</tr>
		<tr>
			<td>2016 Fall Hospital Pharmacy Conference</td>
			<td>Hyatt Regency O&rsquo;Hare, Chicago, Illinois</td>
			<td>October 17 &ndash; 19, 2016</td>
		</tr>
		<tr>
			<td>2016 ASHP Midyear Clinical Meeting and Exhibition</td>
			<td>Las Vegas, Nevada</td>
			<td>December 4 &ndash; 8, 2016</td>
		</tr>
	</tbody>
</table>
</div>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco at the ASHP in Baltimore!','meta_description' => 'Esco at the ASHP in Baltimore!','created_at' => '2016-06-23 17:16:49'],
  ['news_category_id' => '1','old_id' => '45','slug' => 'the-need-for-engineering-controls-in-preventing-compounding-pharmacy-mishaps','title' => 'The need for engineering controls in preventing compounding pharmacy mishaps','banner_img' => 'the-need-for-engineering-controls-in-preventing-pharmacy-compounding-mishaps-isoclean.jpg','banner_thumb' => 'the-need-for-engineering-controls-in-preventing-pharmacy-compounding-mishaps-isoclean.jpg','description' => '<p>Pharmacy compounding has been present since the beginning of time. It is essential in cases such as limited dosage strengths and dosage forms, drug allergies to certain ingredients, paediatrics, chemotherapy and veterinary medicine.</p>','content' => '<div >
<p>Pharmacy compounding has been present since the beginning of time. It is essential in cases such as limited dosage strengths and dosage forms, drug allergies to certain ingredients, paediatrics, chemotherapy and veterinary medicine.</p>

<p>Despite the importance of compounding, there are risks associated with this practice. Compounded preparations are not FDA-approved and there are cases that preparations are compounded under unsanitary conditions. These contaminated preparations expose the patients to even greater risks.</p>

<p>Through the years, compounding mishaps have been documented. Unfortunately, some of these incidents resulted to injuries and death. Here are a few examples of the documented incidents.</p>

<p style="text-align:center;"><img class="img-responsive" src="/images/upload/the-need-for-engineering-controls-in-preventing-pharmacy-compounding-mishaps.png" style="width: 600px;" /></p>

<p>&nbsp;</p>

<p><strong>&ldquo;Compounding Pharmacists Imprisoned for Dispensing Adulterated Drugs&rdquo;</strong></p>

<p>Excerpts from the article by Meghan Ross of Pharmacy Times</p>

<p><em>Alabama, USA - In 2011, 19 patients were infected after receiving Total Parenteral Nutrition (TPN) solutions contaminated with Serratia marcescens. Nine of the patients died. It was discovered that the amino acid solution used as a component for the TPN was contaminated with S. <em>marcescens</em>. Also, the TPN was prepared, packed, or held under unsanitary conditions.</em></p>

<p><em>According to the DOJ press release, &ldquo;Amino acid was prepared by Meds IV outside a laminar airflow workbench and was kept unrefrigerated, in a room that was not sterile, in a large pot sitting on the floor, sometimes overnight, before it was sterilized and used.&rdquo;</em></p>

<p><em>&nbsp;&ldquo;Producing unsafe and contaminated drugs poses a serious threat to the US public health and cannot be tolerated,&rdquo; said Director George Karavetsos, of the FDA&rsquo;s Office of Criminal Investigations, in a press release. &nbsp;&ldquo;The FDA remains fully committed to aggressively pursuing those who place unsuspecting American consumers at risk by distributing adulterated drugs</em>.&rdquo;&nbsp;</p>

<p>With these alarming malpractices in pharmacy compounding, it is a must that each pharmacist and pharmacy compounding facility adhere to good pharmacy compounding practices.</p>

<p><strong>Esco promotes Good Pharmacy Compounding Practices!</strong></p>

<p>Good pharmacy compounding practices imply having the right facility and equipment, personnel protective equipment and standard operating procedures.</p>

<p>International standards and guidelines such as USP, cGMP, and PIC/S recommend the use of engineering controls.</p>

<p style="text-align:center;"><img class="img-responsive" src="/images/upload/esco-promotes-good-pharmacy-compounding-practices.png" style="width: 200px;" /></p>

<p>&nbsp;</p>

<p>Engineering controls are the most effective way of preventing contamination of sterile preparations. It is also used to protect the personnel and environment when handling hazardous drugs. However, it does not mean that engineering controls alone should be enough when doing pharmacy compounding.</p>

<p><strong>Esco offers a variety of primary engineering controls suitable for your applications.</strong></p>

<p><strong>Non-sterile Hazardous Pharmacy Compounding</strong></p>


<div class="row">
<div class="col-md-4">
<a href="/products/ventilated-balance-enclosure/29" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/Ventilated-balance-enclosure-min.png" style="width: 400px;" /></a>
</div>

<div class="col-md-8">
<p>&nbsp;</p>
<p>&nbsp;</p>

<strong>Ventilated Balance Enclosure (VBE)</strong> is designed specifically for stability and accuracy while maintaining a high level of operator protection by containing hazardous airborne powder.
</div>
</div>
<p>&nbsp;</p>

<p><strong style="line-height: 1.6;">Sterile Non-hazardous Pharmacy Compounding</strong></p>

<p><span style="line-height: 1.6;">Esco&rsquo;s compounding isolators (positive pressure models) provide a safe and clean environment for compounding of non-hazardous, sterile drug preparation and IV admixtures in compliance with USP 797.</span></p>

<div class="row">
    <div class="col-md-3">
        <a href="/products/general-processing-platform-isolator-gppi/45"><img src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" alt="Aseptic Containment Isolator (ACTI)" title="null Aseptic Containment Isolator (ACTI)" class="product-img"></a>
        <p class="text-center"> Aseptic Containment Isolator (ACTI)</p>
    </div>
    <div class="col-md-3">
        <a href="/products/healthcare-platform-isolator-with-filter-below-workzone/22"><img src="/images/product-images/thumb/Healthcare-Platform-Isolator-2G-min.png" alt="Healthcare Platform Isolator - With Filter Below Workzone" title="Isoclean® Healthcare Platform Isolator - With Filter Below Workzone" class="product-img"></a>
        <p class="text-center">Isoclean® Healthcare Platform Isolator - With Filter Below Workzone</p>
    </div>
    <div class="col-md-3">
        <a href="/products/containment-barrier-isolator-u/30"><img src="/images/product-images/thumb/CBI-U-450px-min.png" alt="Containment Barrier Isolator (CBI) - Undirectional" title=" Containment Barrier Isolator (CBI) - Undirectional" class="product-img"></a>
        <p class="text-center">Containment Barrier Isolator (CBI) - Undirectional</p>
    </div>
    <div class="col-md-3">
            <a href="/products/general-processing-platform-isolator-gppi/45"><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" alt="General Processing Platform Isolator (GPPI)" title=" General Processing Platform Isolator (GPPI)" class="product-img"></a>
            <p class="text-center">General Processing Platform Isolator (GPPI)</p>
        </div>
</div>

<p>&nbsp;</p>

<p><strong>Sterile Hazardous Pharmacy Compounding</strong></p>

<p>Esco&rsquo;s compounding isolators (negative pressure models) are designed to provide user, product, environment, and cross-contamination protection from exposure to hazardous drugs.</p>


    <div class="w-25">
        <a href="/products/compounding-isolator/38"><img src="/images/product-images/thumb/streamline-compounding-isolator-thumb-min.png" alt="Compounding Isolator" title="Streamline® Compounding Isolator" class="product-img center-block"></a>
        <p class="text-center">Streamline® Compounding Isolator</p>
    </div>
<p>&nbsp;</p>

<p><em style="font-size: 11px; line-height: 1.6;">*Isoclean&reg; Healthcare Platform Isolators, Containment Barrier Isolator and General Processing Platform Isolators can be used for sterile hazardous pharmacy compounding if they are negatively pressurized.</em></p>

<p><strong>Through these engineering controls aligned with good pharmacy compounding practices, the risk of contamination will be greatly reduced. Moreover, the safety of the personnel, patient, and environment is further ensured when handling hazardous drugs.</strong></p>

<p><strong>References:</strong></p>

<p><span style="font-size:11px;">Multistate Outbreak of Fungal Meningitis and Other Infections | CDC. 2016. Multistate Outbreak of Fungal Meningitis and Other Infections | CDC. [ONLINE] Available at: https://www.cdc.gov/hai/outbreaks/meningitis.html. [Accessed 13 July 2016].</span></p>

<p><span style="font-size:11px;">Pharmacy Times. 2016. Compounding Pharmacists Imprisoned for Dispensing Adulterated Drugs. [ONLINE] Available at: http://www.pharmacytimes.com/news/compounding-pharmacists-imprisoned-for-dispensing-adulterated-drugs. [Accessed 13 July 2016].</span></p>

<p><span style="font-size:11px;">Sutton, S, 2013. GMP and Compounding Pharmacies. American Pharmaceutical Review, [Online]. 16/3, 48-59. Available at: http://www.americanpharmaceuticalreview.com/Featured-Articles/135985-GMP-and-Compounding-Pharmacies/ [Accessed 18 July 2016].</span></p>

<p>&nbsp;</p>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'The need for engineering controls in preventing compounding pharmacy mishaps','meta_description' => 'The need for engineering controls in preventing compounding pharmacy mishaps','created_at' => '2016-07-19 17:28:15'],
  ['news_category_id' => '1','old_id' => '46','slug' => 'discover-the-most-diverse-compounding-pharmacy-isolators','title' => 'Discover the most diverse compounding pharmacy isolators','banner_img' => 'blow-fill-seal-technology-and-isolators.jpg','banner_thumb' => 'blow-fill-seal-technology-and-isolators.jpg','description' => '<p>Esco Pharma is pleased to launch our latest range of isolators specifically engineered to meet the growing demands of pharmacy compounding (503A and 503B) industry in the United States.</p>','content' => '<div>
<div>
<div>
<p>&nbsp;</p>

<p>Esco Pharma is pleased to launch our latest range of isolators specifically engineered to meet the growing demands of pharmacy compounding (503A and 503B) industry in the United States.</p>

<p><strong>Most Diverse Isolator Range</strong></p>

<p>Esco currently has the most diverse range of standard isolators for every single application and budget requirement.</p>

<ul>
	<li>Streamline Compounding Aseptic Isolator</li>
	<li>Streamline Compounding Aseptic Containment Isolator (Recirculating or Total Exhaust)</li>
	<li>Healthcare Platform Isolator</li>
	<li>Healthcare Platform Isolator &ndash; Safe Change Exhaust (SCE)</li>
	<li>Containment Barrier Isolator &ndash; Unidirectional</li>
	<li>Containment Barrier Isolator &ndash; Turbulent</li>
	<li>General Processing Platform Isolator</li>
	<li>Aseptic Containment Isolator</li>
</ul>

<p><strong>First to LEAD and last to FOLLOW</strong></p>

<p>Esco has been designing and manufacturing systems for world-class quality for almost 40 years. Our company is the first to launch cGMP-compliant isolators into the pharmacy compounding industry in the United States, making Esco a proven market leader in clean air technology.</p>

<p><strong>Key Features and Benefits</strong></p>

<p>All our isolators for pharmacy compounding which exceeds the demands of 503A/503B facilities and are compliant with USP 797/800 and FDA cGMP standards, respectively. Initially engineered for the pharmaceutical industry, these isolators are now used in pharmacy compounding applications, following the trend of stricter guidelines and practices.</p>
</div>

<div>
<ul>
	<li>Pressure testing to Class 2 containment enclosure as described by ISO 10648-2 standard, which can be done on-site without using blanking plates and silicone. <strong><a href="https://www.youtube.com/watch?v=STAxaF9x5Vs&amp;feature=youtu.be">See video on HPI Pressure Testing</a></strong></li>
	<li>Full unidirectional airflow across entire workzone with 0.45 m/s &plusmn; 20%* providing ISO Class 5 (Grade A) environment</li>
	<li>316L stainless steel interior surface with <em>19-mm radius coved ball corners on all four sides</em>* for easy cleaning and high-resistance to hydrogen peroxide vapor</li>
</ul>
</div>

<img class="img-responsive center-block my-3" src="/images/upload/pressure-testing-with-plates-and-silicone.png" />

<div>
<ul>
	<li>Smooth, crevice-free, FDA-compliant glove ports, gaskets, and static seals allow easy cleaning with minimal trapping of contaminants</li>
	<li>Optional integrated Esco BioVap&trade; hydrogen peroxide biodecontamination system validated to 6 log reduction of bio-burden</li>
	<li>Glove leak testing using pressure decay method quantitatively measures pinhole leakages</li>
	<li>Bag-In-Bag-Out and Low Contamination filter changes in isolators ensures operator and environment protection during a filter change.</li>
</ul>

<p>Esco Technologies, Inc will be showcasing this range of isolators in the upcoming ASHP Midyear Clinical Meeting 2016 in Las Vegas on December 04-08, 2016. Come and meet our team at Booth #471 to discuss your application and specific compounding needs.</p>

<p>*not available on all models</p>

<p>For more information, you may contact:</p>

<p>Esco Technologies, Inc</p>

<p>eti.sales@escoglobal.com</p>

<p>215-441-9661</p>

<p>&nbsp;</p>
</div>
</div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Discover the most diverse compounding pharmacy isolators','meta_description' => 'Discover the most diverse compounding pharmacy isolators','created_at' => '2016-08-10 11:05:42'],
  ['news_category_id' => '1','old_id' => '47','slug' => 'unidirectional-or-turbulent-airflow-which-is-best-for-sterile-pharmacy-compounding','title' => 'Unidirectional or Turbulent Airflow: Which is best for Sterile Pharmacy Compounding?','banner_img' => 'which-is-best-for-pharmacy-compounding.png','banner_thumb' => 'which-is-best-for-pharmacy-compounding.png','description' => '<p>In sterile pharmacy compounding, the goal of the pharmacist or pharmacy technician is to protect the compounded sterile preparation from cross-contamination.</p>','content' => '<div>
<div>
<p>In sterile pharmacy compounding, the goal of the pharmacist or pharmacy technician is to protect the compounded sterile preparation from cross-contamination.</p>

<p>Isolators are one of the primary engineering controls recommended for this purpose. However, isolators have different airflow regimes. So the question is, which is best for sterile pharmacy compounding?</p>

<p><strong>Different Airflow Regimes in Isolators</strong></p>

<p>There are two airflow regimes usually encountered for isolators &ndash; 1. Turbulent Airflow and 2. Unidirectional Airflow.</p>
</div>

<table border="0" width="100%">
	<tbody>
		<tr>
			<td>
			<p><strong>Turbulent Airflow</strong></p>
			</td>
			<td>
			<p><strong>Unidirectional Airflow</strong></p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Turbulent Airflow is the process of introducing a supply of filtered air that mixes with and dilutes airborne contaminants, thus reducing its concentration in the environment. Most contaminants are ultimately removed from the environment through the air exhaust system. (CETA, 2005)</p>
			</td>
			<td>
			<p>Unidirectional Airflow provides the work zone with a continuous supply of filtered air. This mass airflow effect serves to sweep contaminants past and away from the preparation and out of the isolator environment. (CETA, 2005)</p>
			</td>
		</tr>
		<tr>
			<td>
			<figure><img class="img-responsive" src="/images/upload/turbulent-airflow.png" /></figure>
			</td>
			<td>
			<figure><img class="img-responsive" src="/images/upload/undirectional-airflow.png" /></figure>
			</td>
		</tr>
	</tbody>
</table>
</div>

<div>
<p><strong>What do the standards say?</strong></p>

<p>International Standards play an important role in the field of pharmacy compounding. These standards set minimum recommendations for institutions to follow. Depending on which part of the world, institutions follow different standards. The following sentences that talks about airflow regime requirements are excerpts from published standards.</p>

<p>&ldquo;The airflow in the primary engineering control (PEC) shall be unidirectional (laminar flow).&rdquo; &ndash; <strong>USP 797, USA</strong></p>

<p>&ldquo;Compounding aseptic containment isolator (CACI) is designed to provide worker protection from exposure to hazardous drugs. It provides an aseptic environment with unidirectional airflow for compounding sterile preparations.&rdquo; &ndash; <strong>USP 800, USA</strong></p>

<p>&ldquo;All aseptic manipulations, including processing of sterile materials, filling, and closing (e.g. placement and sealing of stoppers on vials) should be performed under unidirectional airflow that is ISO 5 or better.&rdquo; &ndash; <strong>FDA cGMP, USA</strong></p>

<p>&ldquo;Handling and filling of aseptically prepared products (open and closed procedures) should be performed in a grade A environment.&rdquo; <strong>&ndash; PIC/S</strong></p>

<p>Note: Grade A environment is easier to achieve when air flow is unidirectional.</p>

<p>&ldquo;A unidirectional airflow and lower velocities may be used in closed isolators and glove boxes.&rdquo; &ndash; <strong>EU GMP, Europe</strong></p>

<p>&ldquo;Supply air to the controlled work space shall be unidirectional and shall not induce turbulence within the work site.&rdquo; &ndash; <strong>AS 4273, Australia</strong></p>

<p>&nbsp;</p>

<p><strong>Why is unidirectional airflow best for sterile pharmacy compounding?</strong></p>

<p>Unidirectional airflow is more efficient with respect to eliminating contamination. Continuous showering of filtered air sweeps away contamination almost immediately.</p>

<p>According to the study conducted by Peters, et. al., &quot;all four unidirectional airflow isolators used met ISO Class 5 cleanliness requirements throughout all testing phases and areas of the work zone...The turbulent airflow isolator tested failed to achieve the ISO Class 5 operating condition at any time during the testing...&quot;</p>

<p>&quot;The unidirectional airflow isolators tested met the laminar-airflow workstation-equivalency requirements of USP 797, pharmaceutical aseptic processing standards, the industry-standard definition of a closed isolator, and the rigorous demands of pharmacy and nursing sterile compounding.&quot; (Peters, 2007)</p>

<p><strong>The verdict</strong></p>

<p>Having a unidirectional airflow for equipment used in sterile pharmacy compounding, e.g. isolators, is backed up by International Standards and evidences.</p>

<p>&nbsp;</p>

<p><strong>Esco offers isolators with unidirectional airflow</strong></p>

<p>Esco Isolators are tested to validate its airflow pattern and air quality, as specified under CETA Guidelines. Esco Isolators comply with International Standards such as USP 797/800, FDA cGMP, AS 4273, PIC/S, EU GMP, TGA GMP, JIS, CETA, and ISO.</p>
</div>
<div class="row">
    <div class="col-md-4">
        <a href="/products/streamline-closed-restricted-access-barrier-system/20"><img src="/images/product-images/thumb/Streamline-compounding-isolator-min.png" alt="Closed Restricted Access Barrier System (SLC-RABS)" title="Streamline® Closed Restricted Access Barrier System (SLC-RABS)" class="product-img"></a>
        <p class="text-center">Streamline® Closed Restricted Access Barrier System (SLC-RABS)</p>
    </div>
    <div class="col-md-4">
        <a href="/products/compounding-isolator/38"><img src="/images/product-images/thumb/streamline-compounding-isolator-thumb-min.png" alt="Compounding Isolator" title="Streamline® Compounding Isolator" class="product-img"></a>
        <p class="text-center">Streamline® Compounding Isolator</p>
    </div>
    <div class="col-md-4">
        <a href="/products/containment-isolator-class-iii/25"><img src="/images/product-images/thumb/streamline-compounding-isolator-class-iii-450px-min.png" alt="Containment Isolator - Class III" title="Streamline® Containment Isolator - Class III" class="product-img"></a>
        <p class="text-center">Streamline® Containment Isolator - Class III</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <a href="/products/general-processing-platform-isolator-gppi/45"><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" alt="General Processing Platform Isolator (GPPI)" title=" General Processing Platform Isolator (GPPI)" class="product-img"></a>
        <p class="text-center">General Processing Platform Isolator (GPPI)</p>
    </div>
    <div class="col-md-4">
        <a href="/products/healthcare-platform-isolator-with-filter-below-workzone/22"><img src="/images/product-images/thumb/Healthcare-Platform-Isolator-2G-min.png" alt="Healthcare Platform Isolator - With Filter Below Workzone" title="Isoclean® Healthcare Platform Isolator - With Filter Below Workzone" class="product-img"></a>
        <p class="text-center">Isoclean® Healthcare Platform Isolator - With Filter Below Workzone</p>
    </div>
    <div class="col-md-4">
        <a href="/products/containment-barrier-isolator-u/30"><img src="/images/product-images/thumb/CBI-U-450px-min.png" alt="Containment Barrier Isolator (CBI) - Undirectional" title=" Containment Barrier Isolator (CBI) - Undirectional" class="product-img"></a>
        <p class="text-center">Containment Barrier Isolator (CBI) - Undirectional</p>
    </div>
</div>

<div>
<p>&nbsp;</p>

<p><strong>References:</strong></p>

<p><span style="font-size:11px;"><em>CETA Applications Guide for the use of Compounding Isolators in Compounding Sterile Preparations in Healthcare Facilities (CAG-001-2005)</em></span></p>

<p><span style="font-size:11px;"><em>Committee ME/60. 1999. Australian Standard&trade; Design, installation and use of pharmaceutical isolators</em></span></p>

<p><span style="font-size:11px;"><em>ECA Academy. 2016. Guideline. [ONLINE] Available at: http://www.gmp-compliance.org/eca_guideline_120.html. [Accessed 15 August 2016].</em></span></p>

<p><span style="font-size:11px;"><em>Peters, G, 2007. Potential for airborne contamination in turbulent- and unidirectional-airflow compounding aseptic isolators. American Journal of Health-System Pharmacists, [Online]. 64(6), 622-31. Available at:http://www.ncbi.nlm.nih.gov/pubmed/17353571 [Accessed 20 July 2016].</em></span></p>

<p><span style="font-size:11px;"><em>Pharmaceutical Inspection Co-operation Scheme. 2016. Publications. [ONLINE] Available at: https://picscheme.org/en/publications#selSection_. [Accessed 15 August 2016].</em></span></p>

<p class="break-word"><span style="font-size:11px;"><em>U.S. Food and Drug Administration. 2014. Current Good Manufacturing Practice - Interim Guidance for Human Drug Compounding Outsourcing Facilities under Section 503B of the FD&amp;C Act. [ONLINE] Available at: http://www.fda.gov/downloads/drugs/guidancecomplianceregulatoryinformation/guidances/ucm403496.pdf. [Accessed 15 August 2016].</em></span></p>

<p><span style="font-size:11px;"><em>U.S. Pharmacopeial Convention. 2016. USP-NF General Chapters for Compounding. [ONLINE] Available at: http://www.usp.org/usp-healthcare-professionals/compounding/compounding-general-chapters. [Accessed 15 August 2016].</em></span></p>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => '','meta_description' => '','created_at' => '2016-08-26 17:37:53'],
  ['news_category_id' => '3','old_id' => '50','slug' => 'esco-healthcare-exhibits-at-the-16-th-ispe-singapore-affiliate','title' => 'Esco Healthcare exhibits at the 16th ISPE - Singapore Affiliate','banner_img' => 'esco-healthcare-exhibited-at-the-ispe-singapore-affiliate.jpg','banner_thumb' => 'esco-healthcare-exhibited-at-the-ispe-singapore-affiliate.jpg','description' => '<p>Esco Healthcare, a division of Esco Group of Companies, participated at the recently culminated 16th International Society for Pharmaceutical Engineering (ISPE) Congress - Singapore Affiliate at the Suntec Singapore International Convention and Exhibition Centre last August 25 - 27, 2016.</p>','content' => '<div>
<div>
<p>&nbsp;</p>

<p>Esco Healthcare, a division of Esco Group of Companies, participated at the recently culminated 16th International Society for Pharmaceutical Engineering (ISPE) Congress &ndash; Singapore Affiliate at the Suntec Singapore International Convention and Exhibition Centre last August 25 &ndash; 27, 2016.</p>

<p style="text-align: center;">&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/xl-lin-esco-heathcare-global-president-getting-ready-for-delegates.jpg" style="width: 500px;" /></center>

<p>&nbsp;</p>

<p style="text-align: center;"><span style="line-height: 1.6; font-size: 10px;">XL Lin, Esco Healthcare Global President, is getting ready to greet ISPE delegates.</span></p>

<p>With Singapore&#39;s emergent and thorough attention on biomedical sciences and the growing venture in pharmaceutical-grounded undertakings, the congress is indeed a timely event to further uphold and advance professional pharmaceutical and engineering infrastructure.</p>

<p><span style="line-height: 1.6;">The annual meeting was open to all pharmaceutical and biological manufacturing professionals, with this year&#39;s theme as &ldquo;Continuous Process Improvement.&rdquo; Some of this year&rsquo;s tracks included the following: Aseptic Process &amp; Technology, Good Automated Manufacturing Practices (GAMP), Regulatory Compliance, Risk-Based Approaches to Commissioning, Qualification &amp; Validation, Chromatography Community of Practice and many more.</span></p>

<p style="text-align: center;">&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/some-ispe-delegates-at-esco-booth.jpg" style="width: 500px;" /></center>

<p>&nbsp;</p>

<p style="text-align: center;"><span style="font-size: 10px; line-height: 1.6;">Some ISPE delegates at the Esco booth.</span></p>

<p>Esco Healthcare&rsquo;s products aim at enabling a complete Translational Discovery to Delivery within the healthcare industry. During the ISPE Congress, Esco exhibited four of its ever growing line of products. Two of Esco Pharma&rsquo;s isolators were exhibited that includes the following:</p>

<p style="text-align: center;">&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/esco-containment-barrier-isolator-cbi.jpg" style="width: 500px;" /></center>

<p>&nbsp;</p>

<p style="text-align: center;"><span style="font-size:11px;">Containment Barrier Isolator</span></p>

<p>Esco Containment Barrier Isolator (CBI) facilitates the isolation of a product or process while providing the required conditions for a sterile/aseptic environment. It is configured to operate at positive or negative pressure. This equipment provides a comprehensive range of personnel and product protection in addition to protection for the surrounding work areas and the environment. CBI&#39;s design has complete compliance to PIC/S and EU cGMP standards with its 19 mm radius coved internal corners in a single piece chamber (no perforations or grilles for contaminants to be trapped on all 4 corners). Its Rear Return Filter ensures that ducts are not contaminated. The system comes in either recirculatory or single pass airflow.</p>

<p style="text-align: center;">&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/esco-general-processing-platform-isolator-gppi.jpg" style="width: 500px;" /></center>

<p>&nbsp;</p>

<p style="text-align: center;"><span style="font-size:10px;">General Processing Platform Isolator (GPPI)</span></p>

<p>Esco General Processing Platform Isolator (GPPI) is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment. The GPPI&rsquo;s advanced control system allows the operator to select either positive or negative chamber pressure as well as single pass or recirculating airflow patterns. These features, along with the ability to perform safe change procedures on the supply and return ULPA filters, make the GPPI a highly versatile isolator that can be used for potent or non-potent aseptic materials. Also, Esco GPPI&rsquo;s design offers over 20 standard options and configurations ensuring that Esco can provide a standard solution to fit your specific process and facility requirements.</p>

<p style="text-align: center;">&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/ventilated-balance-enclosure-vbe.jpg" style="width: 500px;" /></center>

<p>&nbsp;</p>

<p style="text-align: center;"><span style="font-size:10px;">Ventilated Balance Enclosure (VBE)</span></p>

<p>Ventilated Balance Enclosure (VBE), an airflow containment that is designed specifically for stability and accuracy while maintaining a high level of operator protection by containing hazardous airborne powder. This technology makes use of an aerodynamic design on sash and arm rest plus a sectionalized baffle, wherein the airborne powders are well contained inside the enclosure and exhausted through a HEPA filter or directed to the laboratory exhaust.</p>

<p>To learn more about these innovative technologies, visit <u><a href="http://www.escopharma.com/"><span style="color:#0000CD;">www.escopharma.com</span></a></u></p>

<p style="text-align: center;">&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/congress-participants-taking-a-look-at-stir-cradle-pro.jpg" style="width: 500px;" /></center>

<p>&nbsp;</p>

<p style="text-align: center;"><span style="font-size:10px;">Congress participants taking a look at the StirCradle Pro</span></p>

<p>VacciXcell, a division of Esco Healthcare, showcased a 100L StirCradleTM Pro. The StirCradleTM Pro is a pilot/production scale stirred tank bioreactor for suspension culture but can also double up as a fermenter. This unit is a fully stainless steel system with an automated 5-step cycle sterilization-in-place (SIP) feature for both media and vessel. VacciXcell offers stirred tank bioreactors in various sizes &ndash; from 5L to 1,000L &ndash; along with customized sizes (as per customer request). Also displayed was the CelCradleTM tidemotion bioreactor system for adherent cell culture. The proprietary tidemotion technology was displayed in full view for all guests to see. Using tidemotion, cells are alternately exposed to oxygen and nutrients with almost no shear stress. This technology, combined with VacciXcell&rsquo;s BioNOCII macrocarrier, allows a yield of up to 5 Billion cells per 500ml bottle!</p>

<p>It was indeed a great avenue for people (Vice Presidents, Directors, General Managers, Plant Managers, Department Heads, Managers, Project Leaders, Scientists, Engineers, Specialists, Site and Project Directors, Quality Control / Quality Assurance Personnel, Professors) from various industries to interact and share their insights. Kudos and congratulations to the organizers and the participants. And see you at the 17<sup>th</sup> ISPE Congress in 2017.</p>
</div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Healthcare exhibited at the 16th ISPE â€“ Singapore Affiliate','meta_description' => 'Esco Healthcare exhibited at the 16th ISPE â€“ Singapore Affiliate','created_at' => '2016-09-15 16:17:48'],
  ['news_category_id' => '2','old_id' => '51','slug' => 'esco-isolator-finally-arrives-in-the-land-of-the-rising-sun','title' => 'Esco isolator finally arrives in the land of the rising sun','banner_img' => 'healthcare-pharmacy-isolator-min.jpg','banner_thumb' => 'healthcare-pharmacy-isolator-min.jpg','description' => '<p>Esco, the pioneer and leading manufacturer for clean air and containment solutions in the Far East and a global leader in general laboratory equipment and instrumentation, made a momentous event in Japan as Esco Isoclean&reg; Healthcare Platform Isolator (HPI) was exhibited in the Land of the Rising Sun for the first time.</p>','content' => '<div >
<div >


<p>Esco, the pioneer and leading manufacturer for clean air and containment solutions in the Far East and a global leader in general laboratory equipment and instrumentation, made a momentous event in Japan as Esco<a href="http://www.escopharma.com/isoclean%C2%AE-healthcare-platform-isolator-hpi-g3/38/70/"> Isoclean&reg; Healthcare Platform Isolator (HPI)</a> was exhibited in the Land of the Rising Sun for the first time.</p>

<p>The 26th Annual Meeting of the Japanese Society of Pharmaceutical Health Care Sciences paved way for this amazing opportunity to showcase Esco isolator. The exhibit ran from September 17 to 19, 2016 at the Kyoto International Conference Hall, Grand Prince Hotel Kyoto.</p>

<p>The annual meeting focused on the theme &quot;Team medical care to create a tomorrow.&quot;&nbsp;The 3-day event highlighted the significance of the revolution in the role of the pharmacist in the medical field, pharmaceutical comprehensive management, the safety and effectiveness of drug therapy, and other essential changes in the pharmacy profession. Various lectures relating to these issues were addressed during the plenary sessions attended by pharmacy and health care professionals.</p>

<p>An exhibit on different medical and pharmaceutical technologies was showcased where in <a href="http://www.escopharma.com">Esco Pharma</a>&rsquo;s Isoclean&reg; Healthcare Platform Isolator was one of them. Esco Healthcare President XiangLiang Lin, together with Esco Country Manager, Eiji Uenaka and Mizai (an Esco partner in Japan) proudly presented&nbsp;this innovative technology to the Japanese attendees who were delighted to learn more about such machinery.&nbsp;</p>

<center><img class="img-responsive" src="/images/upload/esco-isolator-finally-arrives-at-the-land-of-the-rising-sun.jpg" style="width: 600px;" /></p></center>

<p style="text-align: center;"><em><strong><span style="font-size:10px;">Esco booth in the 26th Annual Meeting of the Japanese Society of Pharmaceutical Health Care Sciences</span></strong></em></p>

<p>The Isoclean&reg; HPI facilitates the isolation of a product or process while providing the required for sterile/aseptic environment. It is configured to operate at positive or negative pressure. This isolator provides a comprehensive range of personnel and product protection in addition to the surrounding work areas and the environment. This is just one of the products that comprise Esco&rsquo;s most diverse isolator range used in Pharmacy Compounding (Chemotherapy/TPN), Small-scale Potent Material Handling, Aseptic Processing, Research and Development and even in Cell Processing. &nbsp;(For more information on this innovative product and other Esco isolators, you can visit <a href="http://www.escopharma.com/">www.escopharma.com</a>)</p>

<p>Congratulations to the leaders and organizers of the Japanese Society of Pharmaceutical Health Care Sciences, and kudos too, to the attendees and exhibitors. A special regard and compliments to Esco for another milestone!&nbsp;</p>

<p>&nbsp;</p>
</div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco isolator finally arrives in the land of the rising sun','meta_description' => 'Esco isolator finally arrives in the land of the rising sun','created_at' => '2016-09-26 13:44:52'],
  ['news_category_id' => '1','old_id' => '52','slug' => 'cytotoxic-drugs-safe-handling-in-the-workplace','title' => 'Cytotoxic Drugs: Safe Handling in the Workplace!','banner_img' => 'Cytotoxic-Drugs.jpg','banner_thumb' => 'Cytotoxic-Drugs-thumb.jpg','description' => '<p>Current statistics show that one in three people have a life-long risk of developing cancer. There is little scientific evidence currently available relating to whether working with cytotoxic drugs actually increases the risk of developing cancer or not.</p>','content' => '<div >
    <div >
        <p><strong>Cytotoxic drugs</strong></p>

        <p>-sometimes known as antineoplastics or chemotherapeutic agents, describe a group of medicines that contain chemicals which are toxic to cells, preventing their replication or growth, and so are primarily used to treat cancer. Once inside the body, their action is not generally tightly targeted, and they can produce side effects both to the patients and others who become exposed.</p>

        <p><strong>Potential Health Effects of Cytotoxic Drugs</strong></p>

        <p>Current statistics show that one in three people have a life-long risk of developing cancer. There is little scientific evidence currently available relating to whether working with cytotoxic drugs actually increases the risk of developing cancer or not. However, in the absence of such data, a strategy of prudent avoidance is recommended.</p>

        <p>In the workplace, occupational exposure may occur where control measures fail or are not in place. Exposure may be through skin contact, skin absorption, inhalation of aerosols and drug particles, ingestion and needle stick injuries resulting from the following activities:</p>

        <div >
            <table width="100%" border="0">
               <tbody>
                    <tr>
                        <td>
                            <center><img class="img-responsive" src="/images/upload/drug-preparation.jpg"  />
                            <p>drug preparation</p></center>
                        </td>
                        <td>
                            <center><img class="img-responsive" src="/images/upload/drug-administration.png"  />
                            <p>drug administration</p></center>
                        </td>
                        <td>
                            <center><img class="img-responsive" src="/images/upload/handling-patient-waste.jpg"  />
                            <p>handling patient waste</p></center>
                        </td>
                        <td>
                            <center><img class="img-responsive" src="/images/upload/transport-and-waste-disposal-or-spills.jpg"  />
                            <p>transport and waste disposal, or spills</p></center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><strong>Personnel likely to be involved in these activities include: </strong></p>

        <p> nurses and medical officers</p>

        <p> pharmacists</p>

        <p> laboratory staff, and</p>

        <p> cleaning, maintenance and waste disposal staff.</p>


        <p>&nbsp;Where control measures are not adequate, adverse health effects may result from occupational exposure. Health effects attributed to cytotoxic drugs exposure amongst people preparing and administering cytotoxic drugs include:</p>


        <p> abnormal formation of cells and mutagenic activity</p>

        <p> alterations to normal blood cell count</p>

        <p> foetal loss in pregnant women and malformations in the offspring of pregnant women</p>

        <p> abdominal pain, hair loss, nasal sores and vomiting</p>

        <p> liver damage, and</p>

        <p> contact dermatitis, local toxic or allergic reaction, which may result from direct contact with skin or mucous membranes.</p>

        <p>Health effects attributed to exposure to occupational cytotoxic drugs can be very serious. Research shows that where a high standard of risk control is in place, threats to health are reduced.</p>

        <p>No exposure limits are set for cytotoxic drugs. Medical opinion is such that even low-level exposure to cytotoxic drugs should be avoided as much as possible. Research has shown that the implementation of suitable safety precautions reduces the incidence of adverse health effects.</p>

        <p><strong>Control of Exposure!</strong></p>
        <div >
            <center><img class="img-responsive" src="/images/upload/exposure-control.png"  /></center>
        </div>
        <p>Measures to control exposure should be applied in the following order:</p>
        <p><strong>Engineering controls: </strong></p>
        <p>are plant or processes that reduce the generation of substance, suppress or contain substances, or limit the area of contamination in the event of spills and leaks.</p>
        <div >
            <center><img class="img-responsive" src="/images/upload/streamline.png"  />
            <p>ESCO Streamline Compounding Isolator</p></center>
        </div>
        <ul>
            <li>Install ventilation and air-filtering systems such as laminar-flow cytotoxic drug safety cabinets</li>
            <li>Use containment systems such as isolators as they provide rigid product, personnel and environment protection.</li>
            <li>Use wide-bore needles to transfer liquids from containers in the pharmacy</li>
            <li>Use needleless injection sets for drug administration</li>
            <li>Incorporate secure storage facilities</li>
        </ul>

        <p>The broad measures described above will include more specific controls, such as:</p>

        <ul>
            <li>reducing the quantities of drugs used; the number of employees potentially exposed; and their duration of exposure, to the minimum;</li>
            <li>ensuring safe handling, storage and transport of cytotoxic drugs and waste material containing or contaminated by them;</li>
            <li>using good hygiene practices and providing suitable welfare facilities, e.g. prohibiting eating, drinking and smoking in areas where drugs are handled and providing washing facilities;</li>
            <li>training staff who handle cytotoxic drugs or deal with contaminated waste, on the risks and the precautions to take.</li>
        </ul>

        <p><strong>Isolation: </strong></p>

        <p>involves separating people from the substance by distance or barriers to prevent or reduce exposure.</p>

        <ul>
            <li>Adopt closed-system operations</li>
            <li>Conduct drug preparation work in a properly designed and secure cleanroom</li>
            <li>Place dispensed drugs in impermeable packaging for delivery to administration areas</li>
            <li>Designate a cytotoxic drug administration area, which only permits entry to authorized people.</li>
        </ul>
        <p><strong>Personal Protective Equipment (PPE)</strong></p>
        <p>Personal protective equipment includes:</p>
        <div >
            <center><img class="img-responsive" src="/images/upload/PPE.jpg"  /></center>
        </div>
        <ul>
            <li>coveralls</li>
            <li>gowns</li>
            <li>head covering</li>
            <li>closed footwear</li>
            <li>overshoes</li>
            <li>gloves of appropriate material and thickness</li>
            <li>safety glasses</li>
            <li>respiratory protective devices</li>
        </ul>
        <p>PPE should be provided and used wherever risks cannot be adequately controlled in other ways. PPE should be selected based on your risk assessment. It is important that the PPE offers adequate protection for its intended use. Employees must be trained in the use of PPE and it must be adequately maintained and stored.</p>
        <p>Our equipment provides a comprehensive range of personnel and product protection in addition to protection for the surrounding work areas and the environment.</p>
        <div >
            <center><img class="img-responsive" src="/images/news-banner/thumb/blow-fill-seal-technology-and-isolators.jpg"  /></center>
        </div>
        <center>
            <h4><strong>Product Environment Protection?</strong></h4>
            <h4><strong>Worry No More! Esco Pharma has the Solution!</strong></h4>
        </center>

        <p>References:</p>

        <p>Safe Handling of Cytotoxic Drugs in the Workplace. [ONLINE] Available at: <a href="http://www.hse.gov.uk/healthservices/safe-use-cytotoxic-drugs.htm" target="_blank">http://www.hse.gov.uk/healthservices/safe-use-cytotoxic-drugs.htm</a>. (Accessed 14 October 2016)</p>

        <p class="break-word">Worksafe Victoria: Handling Cytotoxic Drugs in the Workplace. [ONLINE] Available at: <a class="" href="https://www.worksafe.vic.gov.au/__data/assets/pdf_file/0010/12223/handling_cytotoxic.pdf" target="_blank">https://www.worksafe.vic.gov.au/__data/assets/pdf_file/0010/12223/handling_cytotoxic.pdf.</a>. (Accessed 14 October 2016)</p>
    </div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Cytotoxic Drugs: Safe Handling in the Workplace!','meta_description' => 'Cytotoxic Drugs: Safe Handling in the Workplace!','created_at' => '2016-10-17 17:31:28'],
  ['news_category_id' => '1','old_id' => '55','slug' => 'be-safe-in-handling-high-potency-ap-is','title' => 'Be SAFE in Handling High Potency APIs','banner_img' => 'be-safe-in-handling-active-pharmaceutical-ingredients.jpg','banner_thumb' => 'be-safe-in-handling-active-pharmaceutical-ingredients.jpg','description' => '<p>A significant proportion of new drugs under development contain high potency active pharmaceutical ingredients (HPAPIs). The market of HPAPIs is increasing, with expected growth in the global arena of about &dollar;17.8 billion by 2018. However, due to its inherent cytotoxicity, HPAPIs present handling challenges.</p>','content' => '<p>A significant proportion of new drugs under development contain high potency active pharmaceutical ingredients (HPAPIs). The market of HPAPIs is increasing, with expected growth in the global arena of about $17.8 billion by 2018. However, due to its inherent cytotoxicity, HPAPIs present handling challenges.</p>

<p>&nbsp;</p>

<p><strong>What are HPAPIs?</strong></p>

<p><strong>Highly potent active pharmaceutical ingredients</strong>, also known as <strong>HPAPIs</strong>, are defined as:</p>

<p>1. A pharmacologically active ingredient or intermediate with biological activity at approximately 150 &micro;g/kg of body weight or below in humans (daily therapeutic dose at or below 10mg)</p>

<p>2. An active pharmaceutical ingredient or intermediate with an occupational exposure limit (OEL) at or below 10&micro;g/m<sup>3</sup> of air as an 8-h time-weighted average</p>

<p>3. A pharmacologically active ingredient or intermediate with high selectivity and/or with the potential to cause cancer, mutations, developmental effects, or reproductive toxicity at low doses</p>

<p>4. Or, by default, a novel compound of unknown potency and toxicity</p>

<p><em>Reference:</em></p>

<p><em>PharmTech, 2008. High-Potency APIs: Containment and Handling Issues. Available from: <a href="http://www.pharmtech.com/high-potency-apis-containment-and-handling-issues">http://www.pharmtech.com/high-potency-apis-containment-and-handling-issues</a></em></p>

<p>&nbsp;</p>

<p><strong>What are the handling challenges for HPAPIs?</strong></p>

<p>Handling HPAPIs is different from other active pharmaceutical ingredients. Specialized containment is required to protect workers, facilities, and environment from HPAPIs.&nbsp; Moreover, as applied to other pharmaceuticals, product protection from contamination and losses is also required.</p>

    <div class="row">
        <div class="col-md-4">
			<img class="img-responsive my-3 center-block" src="/images/upload/worker-protection.png" style="text-align: center;" />
            <center><strong>Worker Protection</strong></center>
        </div>
        <div class="col-md-4">
            <img class="img-responsive my-3 center-block" src="/images/upload/product-protection.png" style="text-align: center; " />
            <center><strong>Product Protection</strong></center>
        </div>
        <div class="col-md-4">
            <img class="img-responsive my-3 center-block" src="/images/upload/environment-protection.png" style="text-align: center;" />
            <center><strong>Environment Protection</strong></center>
        </div>
    </div>

<p>&nbsp;</p>

<p><strong>Containment Approach and Risks</strong></p>

<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:1000px;">
	<tbody>
		<tr>
			<td style="text-align: center;"><img class="img-responsive" src="/images/upload/containment-design.png" style="width: 300px; height: 257px;" /></td>
			<td>
			<p><strong>Containment Design</strong></p>

			<ul>
				<li>Contain at the Source</li>
				<li>Avoid technique-dependent systems</li>
				<li>Containment is a holistically engineered control system</li>
				<li>Minimize the number of transfers</li>
				<li>Design below the occupational exposure limit</li>
				<li>Plan for ergonomics, cleaning, sampling, waste material compatibility</li>
				<li>Provide redundancy/ secondary containment</li>
				<li>Engineer out the reliance on PPE</li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p><strong>What are the options for containment?</strong></p>

<p>Many types of equipment are used for design containment approaches for hazard and risk associated with handling HPAPIs, such as:</p>

<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:710px;">
	<tbody>
		<tr>
			<td style="border-radius: 10px; background-color: rgb(214, 220, 229); text-align: center; width: 170px; height: 100px;">
			<p><span style="font-size:14px;"><strong>Glove Box / Isolation Technology</strong></span></p>
			</td>
			<td style="width: 10px;">&nbsp;</td>
			<td style="border-radius: 10px; background-color: rgb(132, 151, 176); text-align: center; width: 170px;"><span style="font-size:14px;"><span style="color:#FFFFFF;"><strong>Ventilated Enclosures and Local Exhaust</strong></span></span></td>
			<td style="width: 10px;">&nbsp;</td>
			<td style="border-radius: 10px; background-color: rgb(214, 220, 229); text-align: center; width: 170px;"><span style="font-size:14px;"><strong>Powder Weighing Hoods</strong></span></td>
			<td style="width: 10px;">&nbsp;</td>
			<td style="border-radius: 10px; background-color: rgb(132, 151, 176); text-align: center; width: 170px;">
			<p><span style="font-size:14px;"><span style="color:#FFFFFF;"><strong>Vertical Process&nbsp;</strong></span></span><strong style="color: rgb(255, 255, 255); font-size: 14px;">Trains</strong></p>
			</td>
		</tr>
		<tr>
			<td style="height: 10px;">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="border-radius: 10px;background-color: rgb(132, 151, 176); text-align: center; width: 150px; height: 100px;">
			<p><span style="font-size:14px;"><strong><span style="color:#FFFFFF;">Intermediate Bulk Containers</span></strong></span></p>
			</td>
			<td>&nbsp;</td>
			<td style="border-radius: 10px;background-color: rgb(214, 220, 229); text-align: center;"><span style="font-size:14px;"><strong>Special Valves</strong></span></td>
			<td>&nbsp;</td>
			<td style="border-radius: 10px;background-color: rgb(132, 151, 176); text-align: center;"><span style="font-size:14px;"><span style="color:#FFFFFF;"><strong>Glove Bags</strong></span></span></td>
			<td>&nbsp;</td>
			<td style="border-radius: 10px;background-color: rgb(214, 220, 229); text-align: center;"><span style="font-size:14px;"><strong>Vacuum Transfers</strong></span></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p align="center"><strong>Barrier isolators are the most common equipment for contained handling of potent materials such as HPAPIs.</strong></p>

<hr />
<p style="text-align: center;">Esco provides containment systems for the manufacture and handling of HPAPIs. Our equipment are compliant with cGMP and other international standards, and provide comprehensive operator, product, and environment protection.</p>

<p style="text-align: center;">&nbsp;</p>

<p align="center"><strong>Our Products</strong></p>

<div class="row">

    <div class="col-md-6">
    <center><a href="/products/aseptic-containment-isolator/17" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" style="width: 250px; height: 247px;" /></a></center>
    <a class="text-center" href="/products/aseptic-containment-isolator/17" target="_blank"><strong>Aseptic Containment Isolator (ACTI)</strong>
</div>

    <div class="col-md-6">

    <center><a href="/products/general-processing-platform-isolator-gppi/45" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" style="width: 250px; height: 250px;" /></a></center>
    <a class="text-center" href="/products/general-processing-platform-isolator-gppi/45" target="_blank"><strong>General Processing Platform Isolator (GPPI)</strong></a>
</div>

    <div class="col-md-6">


    <center><a href="/products/weighing-and-dispensing-containment-isolator/26" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/Weighing-and-Dispensing-Containment-Isolator-min.png" style="width: 250px; height: 226px;" /></a></center>
    <a class="text-center" href="/products/weighing-and-dispensing-containment-isolator/26" target="_blank"><strong>Weighing and Dispensing Containment Isolator (WDCI)</strong></a>
    </div>

    <div class="col-md-6">

    <center><a href="/products/containment-barrier-isolator-u/30" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/CBI-U-450px-min.png" style="width: 250px; height: 258px;" /></a></center>
    <a class="text-center" href="/products/containment-barrier-isolator-u/30" target="_blank"><strong>Containment Barrier Isolator (CBI)</strong></a>
    </div>

</div>

<p>&nbsp;</p>

<p>For more information, contact us at:</p>

<p><img class="img-responsive" src="/images/logos/ESCO-Pharma.png" /></p>

<p>Tel: +65 6542 0833</p>

<p>Fax: +65 6542 6920</p>

<p>Email: <a href="http://mailto:csis.pharma@escoglobal.com" target="_blank">csis.pharma@escoglobal.com</a></p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'High Potency APIs, Active Pharmaceutical Ingredients, pharmacy compounding, Esco Pharma, safe pharma handling','meta_description' => 'Be SAFE in Handling High Potency APIs','created_at' => '2016-10-26 14:57:34'],
  ['news_category_id' => '1','old_id' => '58','slug' => 'why-isolators-are-still-preferred-when-handling-hpap-is','title' => 'Why isolators are still preferred when handling HPAPIs?','banner_img' => 'HPAPIs.jpg','banner_thumb' => 'HPAPIs-thumb.jpg','description' => '<p>Handling HPAPIs is different from other active pharmaceutical ingredients. Specialized containment is required to protect workers, facilities, and environment from HPAPIs. Moreover, as applied to other pharmaceuticals, product protection from contamination and losses is also required.</p>','content' => '<p><strong>Inherent risks associated with HPAPIs</strong></p>

<p>Highly-potent active pharmaceutical ingredients (HPAPIs) show effects at much smaller doses. Unintentional exposure to these agents could potentially result in undesirable effects on operators.</p>

<p>&nbsp;</p>

<p><strong>Handling challenges for HPAPIs</strong></p>

<p>Handling HPAPIs is different from other active pharmaceutical ingredients. Specialized containment is required to protect workers, facilities, and environment from HPAPIs. Moreover, as applied to other pharmaceuticals, product protection from contamination and losses is also required.</p>

    <div class="row">
        <div class="col-md-4">
			<img class="img-responsive my-3 center-block" src="/images/upload/worker-protection.png" style="text-align: center;" />
            <center><strong>Worker Protection</strong></center>
        </div>
        <div class="col-md-4">
            <img class="img-responsive my-3 center-block" src="/images/upload/product-protection.png" style="text-align: center; " />
            <center><strong>Product Protection</strong></center>
        </div>
        <div class="col-md-4">
            <img class="img-responsive my-3 center-block" src="/images/upload/environment-protection.png" style="text-align: center;" />
            <center><strong>Environment Protection</strong></center>
        </div>
    </div>

<p>&nbsp;</p>

<p><strong>Type of Containment Options</strong></p>

<p>&nbsp;</p>
<div class="table-responsive">
<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:850px;">
	<tbody>
		<tr>
			<td style="text-align: center; width: 150px; background-color: rgb(152, 192, 228);"><strong>Band Category</strong></td>
			<td colspan="2" style="text-align: center; width: 100px; background-color: rgb(152, 192, 228);"><strong>OEB 1</strong></td>
			<td colspan="2" style="text-align: center; width: 100px; background-color: rgb(152, 192, 228);"><strong>OEB 2</strong></td>
			<td colspan="2" rowspan="1" style="text-align: center; width: 100px; background-color: rgb(152, 192, 228);"><strong>OEB 3</strong></td>
			<td colspan="2" style="text-align: center; width: 100px; background-color: rgb(152, 192, 228);"><strong>OEB 4</strong></td>
			<td colspan="4" rowspan="1" style="text-align: center; background-color: rgb(152, 192, 228);"><strong>OEB 5</strong></td>
		</tr>
		<tr>
			<td style="text-align: center; height: 50px; background-color: rgb(152, 192, 228);"><strong>OEL (<span style="font-weight: bold; color: rgb(106, 106, 106); font-family: arial, sans-serif; font-size: small;">&mu;g/m3</span>)</strong></td>
			<td colspan="2" style="text-align: center; background-color: rgb(152, 192, 228);"><strong>10,000 to 1,000</strong></td>
			<td colspan="2" style="text-align: center; background-color: rgb(152, 192, 228);"><strong>1,000 to 100</strong></td>
			<td style="width: 100px; text-align: center; background-color: rgb(152, 192, 228);"><strong>100 to 50</strong></td>
			<td style="width: 100px; text-align: center; background-color: rgb(152, 192, 228);"><strong>50 to 10</strong></td>
			<td colspan="2" style="text-align: center; background-color: rgb(152, 192, 228);"><strong>10 to 1</strong></td>
			<td colspan="3" style="width: 100px; text-align: center; background-color: rgb(152, 192, 228);"><strong>1 to 0.1</strong></td>
			<td style="width: 100px; text-align: center; background-color: rgb(152, 192, 228);"><strong>0.1 to 0.01</strong></td>
		</tr>
		<tr>
			<td colspan="1" rowspan="9" style="text-align: center; background-color: rgb(215, 231, 245);"><strong>Equipment / Containment Systems</strong></td>
			<td colspan="5" rowspan="1" style="text-align: center; background-color: rgb(135, 194, 112);"><strong>Local Exhaust Ventilation</strong></td>
			<td colspan="7" rowspan="1" style="text-align: center; background-color: rgb(215, 231, 245);">&nbsp;</td>
		</tr>
		<tr>
			<td style="background-color: rgb(215, 231, 245);">&nbsp;</td>
			<td colspan="3" rowspan="1" style="background-color: rgb(135, 194, 112);">&nbsp;</td>
			<td colspan="8" rowspan="1" style="background-color: rgb(215, 231, 245);"><strong>&nbsp; Crossflow booth</strong></td>
		</tr>
		<tr>
			<td colspan="2" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
			<td colspan="4" rowspan="1" style="text-align: center; background-color: rgb(135, 194, 112);"><strong>Downflow Booths</strong></td>
			<td colspan="6" rowspan="1" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" rowspan="1" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
			<td colspan="4" rowspan="1" style="text-align: center; background-color: rgb(135, 194, 112);"><strong>Cone Valves</strong></td>
			<td colspan="4" rowspan="1" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="6" rowspan="1" style="text-align: right; background-color: rgb(215, 231, 245);"><strong>Split Butterfly Valves (SBV)&nbsp;</strong></td>
			<td colspan="2" style="background-color: rgb(135, 194, 112);">&nbsp;</td>
			<td colspan="4" rowspan="1" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="7" rowspan="1" style="text-align: right; background-color: rgb(215, 231, 245);"><strong>SBV with Air Extraction&nbsp;</strong></td>
			<td colspan="3" rowspan="1" style="text-align: right; background-color: rgb(135, 194, 112);">&nbsp;</td>
			<td colspan="2" rowspan="1" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" rowspan="1" style="text-align: right; background-color: rgb(215, 231, 245);"><strong>SBV with Washing&nbsp;</strong></td>
			<td style="background-color: rgb(135, 194, 112);">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" rowspan="1" style="text-align: right; background-color: rgb(215, 231, 245);"><strong>Rapid Transfer Ports (RTP)&nbsp;</strong></td>
			<td style="background-color: rgb(135, 194, 112);">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="6" rowspan="1" style="background-color: rgb(215, 231, 245);">&nbsp;</td>
			<td colspan="6" rowspan="1" style="text-align: center; background-color: rgb(135, 194, 112);"><strong>Isolators</strong></td>
		</tr>
	</tbody>
</table>
</div>

<p><span style="font-size:10px;"><em>Source:</em></span></p>

<ol>
	<li><span style="font-size:10px;"><em>Engineering Controls: Balancing Cost and Containment Hazard by P. Richards</em></span></li>
	<li><span style="font-size:10px;"><em><em>Occupational Exposure Banding by A. George</em></em></span></li>
	<li><span style="font-size:10px;"><em><em><em>Potent Product Process and Facility Design by S.C. Singhai</em></em></em></span></li>
</ol>

<p>&nbsp;</p>

<p><strong>Why choose isolator then?</strong></p>

<p style="text-align: center;">&nbsp;</p>

    <div class="row">
        <div class="col-md-8">
			<p><strong>Benefits of Isolators</strong></p>

			<ul style="margin-left: 40px;">
				<li style="text-align: left;"><strong>Minimized exposure to operator</strong></li>
				<li style="text-align: left;"><strong><strong>Lowest cross contamination</strong></strong></li>
				<li style="text-align: left;"><strong><strong><strong>Smaller contact surface area</strong></strong></strong></li>
				<li style="text-align: left;"><strong><strong><strong><strong>Minimal energy requirements</strong></strong></strong></strong></li>
				<li style="text-align: left;"><strong><strong><strong><strong><strong>Material handling without exposure</strong></strong></strong></strong></strong></li>
				<li style="text-align: left;"><strong><strong><strong><strong><strong><strong>Ideal for aseptic processing</strong></strong></strong></strong></strong></strong></li>
				<li style="text-align: left;"><strong><strong><strong><strong><strong><strong><strong>Localized inert gas environment is possible</strong></strong></strong></strong></strong></strong></strong></li>
				<li style="text-align: left;"><strong><strong><strong><strong><strong><strong><strong><strong>Suitable for OEB 4 and 5 potent materials</strong></strong></strong></strong></strong></strong></strong></strong></li>
            </ul>
            </div>
        <div class="col-md-4">


			<p><strong>Contamination and Containment</strong></p>

			<center><strong><img class="img-responsive" src="/images/upload/contamination-and-containment.png" style="width: 300px; height: 225px;" /></strong></center>
            </div>
    </div>

<p style="margin-left: 80px;"><span style="font-size:10px;"><em>Source: Potent Product Process and Facility Design by S.C. Singhai</em></span></p>

<p>&nbsp;</p>

<p align="center"><b>Esco is a world leader in Containment and Cleanroom Technologies</b></p>

<p style="text-align: center;">Esco provides containment systems for the manufacture and handling of HPAPIs. Our equipment are compliant with cGMP and other international standards, and provide comprehensive operator, product, and environment protection.</p>

<p style="text-align: center;">&nbsp;</p>

<p align="center"><strong>Our Products</strong></p>

<div class="row">

    <div class="col-md-6">
    <center><a href="/products/aseptic-containment-isolator/17" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" style="width: 250px; height: 247px;" /></a></center>
    <a class="text-center" href="/products/aseptic-containment-isolator/17" target="_blank"><strong>Aseptic Containment Isolator (ACTI)</strong>
</div>

    <div class="col-md-6">

    <center><a href="/products/general-processing-platform-isolator-gppi/45" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" style="width: 250px; height: 250px;" /></a></center>
    <a class="text-center" href="/products/general-processing-platform-isolator-gppi/45" target="_blank"><strong>General Processing Platform Isolator (GPPI)</strong></a>
</div>

    <div class="col-md-6">


    <center><a href="/products/weighing-and-dispensing-containment-isolator/26" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/Weighing-and-Dispensing-Containment-Isolator-min.png" style="width: 250px; height: 226px;" /></a></center>
    <a class="text-center" href="/products/weighing-and-dispensing-containment-isolator/26" target="_blank"><strong>Weighing and Dispensing Containment Isolator (WDCI)</strong></a>
    </div>

    <div class="col-md-6">

    <center><a href="/products/containment-barrier-isolator-u/30" target="_blank"><img class="img-responsive" src="/images/product-images/thumb/CBI-U-450px-min.png" style="width: 250px; height: 258px;" /></a></center>
    <a class="text-center" href="/products/containment-barrier-isolator-u/30" target="_blank"><strong>Containment Barrier Isolator (CBI)</strong></a>
    </div>

</div>

<p>&nbsp;</p>

<p>For more information, contact us at:</p>

<p><a href="http://escopharma.com" target="_blank"><img class="img-responsive" src="/images/logos/ESCO-Pharma.png" /></a></p>

<p>Tel: +65 6542 0833</p>

<p>Fax: +65 6542 6920</p>

<p>Email: <a href="http://mailto:csis.pharma@escoglobal.com" target="_blank">csis.pharma@escoglobal.com</a></p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'barrier isolator, compounding pharmacy, high potent active pharmaceutical ingredients, containment isolators, cleanroom technology','meta_description' => 'Why isolators are still preferred when handling HPAPIs?','created_at' => '2016-10-27 16:28:31'],
  ['news_category_id' => '1','old_id' => '61','slug' => 'how-clean-is-clean-enough','title' => 'How Clean is Clean Enough?','banner_img' => 'bio-vap-bio-decontamination-system.jpg','banner_thumb' => 'bio-vap-bio-decontamination-system-thumb.jpg','description' => '<p>Biodecontamination using hydrogen peroxide (H2O2), a highly effective sterilant being used in the disinfection of packaging materials and in processes where sterilisation is required.</p>','content' => '<p align="center"><strong>(BioVap&trade; Bio-decontamination System)</strong></p>

<p><strong><u>Bio-decontamination 101</u></strong></p>

<ul>
	<li>Hydrogen peroxide (H<sub>2</sub>O<sub>2</sub>) is a highly effective sterilant being used in the disinfection of packaging materials and in processes where sterilisation is required. It has a broad antimicrobial activity spectrum and shows low toxicity.</li>
	<li>Residues of H<sub>2</sub>O<sub>2</sub>&nbsp;decompose into neutral species, which underlines the environmental friendliness of this agent.
	<center><img class="img-responsive my-3" src="/images/upload/catalase.png" />
	<p>Source: http://brilliantbiologystudent.weebly.com/effect-of-temperature.html</p>
	</center>
	</li>
	<li>For complex geometries disinfection with liquid peroxide has limits. For this case H<sub>2</sub>O<sub>2</sub>&nbsp;in the vapor state has been widely used especially within the pharmaceutical and healthcare industries in many years.</li>
	<li>The efficacy, cleanliness, and overall performance for the bio-decontamination system are validated using biological indicators such as <em>Geobacillus stearothermophilus</em> spores.</li>
</ul>

<p><strong><u>Chemistry / Biocidal Effect</u></strong></p>

<ul>
	<li>The hydrogen peroxide molecule has a unique geometry with a high-energy angle, which makes splitting of O-O-bond easy.
	<center><img class="img-responsive my-3" src="/images/upload/o-o.png" /></center>
	</li>
	<li>The biocidal effect of hydrogen peroxide comes from the oxygen atom/radical, which is released under influence of the enzyme catalase at the microbial surface. The oxidative power of oxygen radicals cause irreversible damage to enzymatic systems and microbial DNA.
	<center><img class="img-responsive my-3" src="/images/upload/biocidal-effect.jpg" /></center>
	</li>
</ul>

<p><strong><u>Regulatory</u></strong></p>

<p><img class="img-responsive my-3" src="/images/upload/FDA.png" /></p>

<p>&ldquo;Guidance for Industry: Sterile Drug Products Produced by Aseptic Processing &mdash; Current Good Manufacturing Practice&rdquo; published by FDA in September 2004, within Appendix 1: Aseptic Processing Isolators explains the need for decontaminated surfaces:</p>

<p>&ldquo;1. Surface Exposure</p>

<p>Decontamination procedures should ensure full exposure of all isolator surfaces to the chemical agent. <em><u>The capability of a decontaminant to penetrate obstructed or covered surfaces is limited</u>&hellip;</em>.&rdquo;</p>

<p>&ldquo;2. Efficacy</p>

<p>The decontamination method should render the inner surfaces of the isolator free of viable microorganisms. Multiple available vaporized agents are suitable for achieving decontamination&hellip;. <em><u>Cycles should be developed with an appropriate margin of extra kill to provide confidence in robustness of the decontamination processes. Normally, a four- to six-log reduction can be justified depending on the application</u></em>.&rdquo;</p>

<p>&ldquo;E. Filling Line Sterilization</p>

<p>&hellip;<em><u>Where decontamination methods are used to render certain product contact surfaces free of viable organisms, a minimum of a six-log reduction should be demonstrated</u></em> using a suitable biological indicator.&rdquo;</p>

<p><img class="img-responsive my-3" src="/images/upload/PICS.png" /></p>

<p>PIC/S Recommendation &ldquo;Isolators used for Aseptic Processing and Sterility Testing&rdquo;; Chapter &ldquo;An expansion of the detailed points to be considered for the implementation of the principles to isolators subjected to a sporicidal process&rdquo; collects 14 points for the sporicidal process. Point 9.4.1 mentions H<sub>2</sub>O<sub>2</sub> bio-decontamination:</p>

<p>&ldquo;&hellip;The agent selected for gas generation should be sporicidal. The agent used for gas generation or other means of application should be capable of rapidly killing bacterial endospores, fungal spores and vegetative microorganisms. &hellip; Peracetic acid, <em><u>hydrogen peroxide</u></em> and formaldehyde are used. &hellip;&rdquo;</p>

<h2 align="center"><strong>What is BioVap&trade;?</strong></h2>

<p><strong>Esco Pharma</strong> has developed an effective hydrogen peroxide based bio-decontamination system capable of achieving a 6-log reduction in bio-burden validated using stainless steel ribbons populated with <em>Geobacillus stearothermophilus</em> spores as biological indicators.</p>

<p><strong>Science Behind the Process:</strong></p>

<p>&nbsp;</p>

<center><img class="img-responsive my-3" src="/images/upload/bioVap.jpg" /></center>

<p>&nbsp;</p>

<p>The <strong>Esco BioVap&trade;</strong> system is a process of atomizing the hydrogen peroxide sterilant creating a dry fog as it is injected into the space. This unique system (patent pending) creates a charge on the atomized droplets as it passes through the nozzle generating droplets of the sterilant to contain billions of reactive molecules to execute a microbial kill. Also, the mutual repulsion of the charged droplets contribute to the superior distribution of the sterilant. Due to the attraction to the uncharged surfaces, the droplets burst on impact and immediately start the sterilisation process.</p>

<p>The volume of sterilant used therefore is minimised and can be of less concentration unlike conventional vaporising systems.</p>

<p>This revolutionary bio-decontamination system is not affected by the temperature or relative humidity. Therefore, there is no requirement to pre-condition the space being bio-decontaminated which leads to reduced cycle.</p>

<p><strong>Conventional Gaseous Systems</strong></p>

<table width="100%">
	<tbody>
		<tr height="21">
			<td height="21" style="height: 15.75pt; width: 25%; text-align: center; background-color: blue; color: white;" width="25%"><span lang="EN-US">Pre-conditioning</span></td>
			<td style="width: 25%; text-align: center; background-color: red; color: white;" width="25%"><span lang="EN-US">Gassing / Injection</span></td>
			<td style="width: 25%; text-align: center; background-color: yellow;" width="25%"><span lang="EN-US">Dwell</span></td>
			<td style="width: 25%; text-align: center; background-color: green;" width="25%"><span lang="EN-US">Aeration</span></td>
		</tr>
	</tbody>
</table>

<p><strong>Esco BioVap&trade; System</strong></p>

<table width="70%">
	<tbody>
		<tr height="21">
			<td style="width: 25%; text-align: center; background-color: red; color: white;" width="25%"><span lang="EN-US">Gassing / Injection</span></td>
			<td style="width: 25%; text-align: center; background-color: yellow;" width="25%"><span lang="EN-US">Dwell</span></td>
			<td style="width: 25%; text-align: center; background-color: green;" width="25%"><span lang="EN-US">Aeration</span></td>
		</tr>
	</tbody>
</table>

<p><strong>Flexibility Features</strong></p>

<p><strong>Esco BioVap&trade;</strong> system is developed to be flexible enough to adapt to different requirements of customers and facilities, from cabinets and transfer hatches up to modular enclosures to isolators.</p>

<p>&nbsp;</p>

<h2 align="center"><strong>BioVap&trade; apt for <a href="http://www.escopharma.com/isolation-containment/70/">Esco Isolators!</a></strong></h2>

<center><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/9gpk1NV-gMA" width="100%"></iframe></center>

<p><span style="font-size:10px;">References:</span></p>

<p class="break-word"><span style="font-size:10px;"><a href="http://www.gmpua.com/Equipment/Sterility/Isolator/Bio-DecontaminationH2O2.pdf">http://www.gmpua.com/Equipment/Sterility/Isolator/Bio-DecontaminationH2O2.pdf</a></span></p>

<p class="break-word"><span style="font-size:10px;"><a href="http://www.fda.gov/downloads/Drugs/GuidanceComplianceRegulatoryInformation/Guidances/UCM070342.pdf">http://www.fda.gov/downloads/Drugs/GuidanceComplianceRegulatoryInformation/Guidances/UCM070342.pdf</a></span></p>

<p class="break-word"><span style="font-size:10px;"><a href="https://www.picscheme.org/layout/document.php?id=158">https://www.picscheme.org/layout/document.php?id=158</a></span></p>

<p>For more information, visit our website, <a href="http://www.escopharma.com">www.escopharma.com</a>, or Meet us at these events:</p>

<table width="100%">
	<tbody>
		<tr>
			<td width="33.33%">
			<p><strong>Pharmtech Expo 2016</strong></p>
			</td>
			<td width="33.33%">
			<p><strong>November 22 - 25</strong></p>
			</td>
			<td width="33.33%">
			<p><strong>Crocus Expo IEC, Pavilion 2, Moscow, Russia</strong></p>
			</td>
		</tr>
		<tr>
			<td width="33.33%">
			<p><strong>MENA Pharmaceutical Manufacturing Congress</strong></p>
			</td>
			<td width="33.33%">
			<p><strong>November 29 - December 1</strong></p>
			</td>
			<td width="33.33%">
			<p><strong>Le Meridien Jeddah, Jeddah, KSA</strong></p>
			</td>
		</tr>
		<tr>
			<td width="33.33%">
			<p><strong>2016 ASHP Midyear Clinical Meeting and Exhibition</strong></p>
			</td>
			<td width="33.33%">
			<p><strong>December 4 - 8</strong></p>
			</td>
			<td width="33.33%">
			<p><strong>Mandalay Bay Convention Centre, Las Vegas, Nevada</strong></p>
			</td>
		</tr>
	</tbody>
</table>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'BioVapâ„¢ Bio-decontamination System','meta_description' => 'BioVapâ„¢ Bio-decontamination System','created_at' => '2016-11-07 15:54:04'],
  ['news_category_id' => '1','old_id' => '64','slug' => 'blow-fill-seal-technology-and-isolators','title' => 'Blow-Fill-Seal Technology and Isolators','banner_img' => 'blow-fill-seal-technology-and-isolators.jpg','banner_thumb' => 'blow-fill-seal-technology-and-isolators.jpg','description' => '<p>Blow-fill-seal (BFS) aseptic processing is an advanced technology perceived to be a proficient and safe system in filling and packaging sterile pharmaceutical liquids and other related health products used in ophthalmic and respiratory condition management.</p>','content' => '<p>Microbial contamination is one severe concern for pharmaceutical companies manufacturing liquid formulations, which serves as desirable growth areas for various types of microorganisms. Sterile preparations that are contaminated may cause drug deterioration, and even toxic reactions. Hence, any form of microbial contamination is hazardous.&nbsp;</p>

<p>Blow-fill-seal (BFS) aseptic processing is an advanced technology perceived to be a proficient and safe system in filling and packaging sterile pharmaceutical liquids and other related health products used in ophthalmic and respiratory condition management. It allows container to be formed from plastic, aseptically-filled and hermetically-sealed in an uninterrupted, assimilated and spontaneous operation.&nbsp;</p>

<p style="text-align: center;"><center><img class="img-responsive center-block my-3" src="/images/upload/steps-of-blow-fill-sealing-process.png" /></center></p>

<p><strong>The BFS</strong> manufacturing technique is used to produce small, (0.1mL) and large volume, (500mL +) liquid-filled containers. It is considered to be the superior form of aseptic processing&nbsp;by various medicine regulatory agencies including the U.S. Food and Drug Administration (FDA)&nbsp;in the packaging of pharmaceutical and healthcare products.</p>

<p>Isolators modified for B/F/S enclosure applications provide a higher level of sterility assurance for liquid preparations with plastic metered-dose containers and rubber/silicone stoppers via Class 100 environment.</p>

<p style="text-align: center;"><center><img class="img-responsive center-block my-3" src="/images/upload/blow-fill-seal-technology-and-isolators.jpg"  /></center></p>

<p>The control of air quality is a serious consideration in the manufacturing of sterile drug products. Esco&rsquo;s isolators are designed for particular measures to decrease microbial contamination as well as particle levels that can contaminate the exposed product.</p>

<p>Esco offers a wide-range of modular isolators that will meet and satisfy your specific needs.&nbsp;</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'pharmacy isolators, hospital isolators, compounding isolator, pharma isolator','meta_description' => 'Blow-Fill-Seal Technology and Isolators','created_at' => '2016-11-22 10:34:49'],
  ['news_category_id' => '1','old_id' => '65','slug' => 'feeling-alienated-by-safety','title' => 'Feeling Alienated by Safety?','banner_img' => 'fealing-alienated-by-safety.png','banner_thumb' => 'fealing-alienated-by-safety.png','description' => '<p>Protecting yourself from highly hazardous materials doesn\'t have to make you look out of this world.</p>','content' => '<p>Protecting yourself from highly hazardous materials doesn&rsquo;t have to make you look out of this world.</p>

<h4>Are you confident with your isolator&rsquo;s safe change filter feature?</h4>

<p>Equipped with high efficiency particulate air (HEPA) filters, an isolator is capable of containing the hazardous drugs manufactured.</p>

<p>HEPA filters then have direct contact and contain high level of hazardous drug concentration. This possess an occupational risk during HEPA filter replacement.</p>

<h4>Why HEPA filter replacement poses a risk?</h4>

<table align="center" border="0" cellpadding="1" cellspacing="1" width="100%">
	<tbody>
		<tr>
			<td style="width: 200px;"><img class="img-responsive" src="/images/upload/HEPA-filter-replacement.png" /></td>
			<td>
			<ul style="margin-left: 10px;">
				<li>Since HEPA filters prevent the passage of hazardous drugs out of the containment primary engineering control (C-PEC) such as isolators and BSCs, it gets loaded overtime.</li>
				<li>HEPA filters should be replaced when it gets loaded, damaged or when in-house safety protocol requires filter replacement.</li>
				<li>HEPA filters are fragile. During replacement, hazardous drug particles may be released to the area, thereby exposing the personnel and environment.</li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>

<h4>Why HEPA filter replacement poses a risk?</h4>

<table align="center" border="0" cellpadding="1" cellspacing="1" width="100%">
	<tbody>
		<tr>
			<td style="width: 200px;"><img class="img-responsive" src="/images/upload/lab-user.png" /></td>
			<td>
			<ul style="margin-left: 10px;">
				<li>Due to its inherent occupational hazard risk, HEPA filter change should be dealt by trained personnel with appropriate personal protective equipment only.</li>
				<li>In case of filter leaks, immediately stop the operation, cover the equipment with plastic, and notify your immediate supervisor.</li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<h4>SAFE HEPA FILTER REPLACEMENT</h4>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<colgroup>
		<col />
		<col />
		<col />
	</colgroup>
	<tbody>
		<tr style="border-bottom: 10px solid #fff;">
			<td align="center" rowspan="3" style="width:200px;">
			<p><strong>Level of Protection</strong></p>

			<center><img class="img-responsive" src="/images/upload/Level-of-Protection.png" /></center>
			</td>
			<td align="center" style="background-color: rgb(157,195,230);">
			<p><strong>BIBO Safe Change</strong></p>

			<p>It utilizes a Bag-in, Bag-out Filter to safely remove the filter after biodecontamination. It provides protection against exposure for the maintenance personnel and the environment.</p>
			</td>
			<td style="width:200px;">
			<center><img class="img-responsive" src="/images/upload/BIBO-Safe-Change.png" /></center>
			</td>
		</tr>
		<tr style="border-bottom: 10px solid #fff;">
			<td align="center" style="background-color: rgb(244,177,131);">
			<p><strong>Low-contamination Filter Change</strong></p>

			<p>Filter change is done inside the closed isolator, through the glove ports. The used filter is placed in a safety disposal bag and removed from the isolator through the pass chamber. This provides a minimal exposure to the maintenance personnel and the environment.</p>
			</td>
			<td style="width:200px;">
			<center><img class="img-responsive" src="/images/upload/Low-contamination-Filter-Change.png" /></center>
			</td>
		</tr>
		<tr style="border-bottom: 10px solid #fff;">
			<td align="center" style="background-color: rgb(169,209,142);">
			<p><strong>Safe Change Procedure</strong></p>

			<p>Facilities shall develop SOPs for safe change of HEPA filters such as wearing of appropriate PPE. The filter should be changed and the scrap filter be placed in a safety disposal bag. However, among the methods for safe filter change, this is the least effective because the only protection is because the only protection is the PPE.</p>
			</td>
			<td style="width:200px;">
			<center><img class="img-responsive" src="/images/upload/Safe-Change-Procedure.png" /></center>
			</td>
		</tr>
	</tbody>
</table>

<p align="center"><strong><u>BIBO Safe Change allows removal without exposure to contaminated filters.</u></strong></p>

<p align="center"><strong>Full body PPE is now a thing of the past, heavy protection doesn&rsquo;t have to be worn.</strong></p>

<p>&nbsp;</p>

<h3 align="center" style="background-color: teal; color:#fff;">HEPA Filters of ESCO Isolators can be upgraded to safe change BIBO!</h3>

<p>As <strong>Platform Specialists, Esco Pharma</strong> provides specialist services, equipment packages, and process solutions from our core platform products leading to improved protection of operators, reduction of cross-contamination and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>

<p>For more information, please log on to <a href="http://www.escopharma.com">www.escopharma.com</a> or meet us at these following events:</p>

<table class="table table-bordered" width="100%">
	<tbody>
		<tr>
			<td style="width:25%;">
			<p align="center"><strong>Exhibition</strong></p>
			</td>
			<td style="width:25%;">
			<p align="center"><strong>Date</strong></p>
			</td>
			<td style="width:25%;">
			<p align="center"><strong>Venue</strong></p>
			</td>
			<td style="width:25%;">
			<p align="center"><strong>Country</strong></p>
			</td>
		</tr>
		<tr>
			<td style="width:25%;">
			<p>Pharmtech Expo 2016</p>
			</td>
			<td style="width:25%;">
			<p>Nov. 22-25, 2016</p>
			</td>
			<td style="width:25%;">
			<p>Crocus Expo IEC, Pavilion 2</p>
			</td>
			<td style="width:25%;">
			<p>Moscow, Russia</p>
			</td>
		</tr>
		<tr>
			<td style="width:25%;">
			<p>MENA Pharmaceutical Manufacturing Congress 2016</p>
			</td>
			<td style="width:25%;">
			<p>Nov. 29- Dec. 01, 2016</p>
			</td>
			<td style="width:25%;">
			<p>Le Meridien Jeddah</p>
			</td>
			<td style="width:25%;">
			<p>Jeddah, KSA</p>
			</td>
		</tr>
		<tr>
			<td style="width:25%;">
			<p>2016 ASHP Midyear Clinical Meeting and Exhibition</p>
			</td>
			<td style="width:25%;">
			<p>Dec. 04-08, 2016</p>
			</td>
			<td style="width:25%;">
			<p>Mandalay Bay Convention Centre</p>
			</td>
			<td style="width:25%;">
			<p>Las Vegas, Nevada USA</p>
			</td>
		</tr>
	</tbody>
</table>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Feeling Alienated by Safety?','meta_description' => 'Feeling Alienated by Safety?','created_at' => '2016-11-24 11:38:38'],
  ['news_category_id' => '3','old_id' => '66','slug' => 'esco-joins-the-biggest-pharma-event-in-south-asia','title' => 'Esco joins the biggest pharma event in South Asia!','banner_img' => 'Mr-Singh-General-Manager-Mr-Reyes-Product-Specialist-and-Mr-Gallardo-Service-Engineer.jpg','banner_thumb' => 'Mr-Singh-General-Manager-Mr-Reyes-Product-Specialist-and-Mr-Gallardo-Service-Engineer.jpg','description' => '<p>CPhI-India and P-MEC were recently held last November 21 - 23, 2016 at two venues - 1. Bombay Convention & Exhibition Centre, Goregaon, Mumbai and 2. MMRDA Grounds, BKC, Mumbai.</p>','content' => '<p><strong>CPhI-India</strong> and <strong>P-MEC</strong> were recently held last November 21 &ndash; 23, 2016 at two venues &ndash; <strong>1. Bombay Convention &amp; Exhibition Centre, Goregaon, Mumbai</strong> and <strong>2. MMRDA Grounds, BKC, Mumbai.</strong></p>

<p>Esco Biotech (India) Pvt. Ltd., a subsidiary of Esco Micro (Singapore) Pte. Ltd., is one of the various exhibitors during the P-MEC event.</p>

<p>Two booths were dedicated to show the different Esco products</p>


<center><img class="img-responsive" src="/images/upload/Mr-Saple-General-Manager-at-Esco-Biotech-booth.jpg" />
<p>Mr Saple (General Manager) at Esco Biotech booth</p>
</center>

<p>&nbsp;</p>

<p>Here are the products displayed during the P-MEC event.</p>

<center><img class="img-responsive" src="/images/upload/esco-pharma-news-2.png" /></center>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td>
      <center>
      <a href="/products/biopass-pass-through/6"><img src="/images/product-images/thumb/Biopas-2-min-thumb.png" alt="Pass Through" title="BioPass™ Pass Through" class="product-img"></a>

      <p><strong>BioPass&trade; Pass Through</strong></p>

      <p>BioPass&trade; is a floor standing airtight transfer chamber with onboard ventilation and integrated hydrogen peroxide-based bio-decontamination system. It is designed for moving large equipment into an ISO Class 5 cleanroom in an aseptic manner.</p>

    </center>
      </td>
    </tr>
    <tr>
      <td width="300px">
      <center>
      <a href="/products/general-processing-platform-isolator-gppi/45"><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" alt="General Processing Platform Isolator (GPPI)" title=" General Processing Platform Isolator (GPPI)" class="product-img"></a>


      <p><strong>General Processing Platform Isolator</strong></p>

      <p>The Esco General Processing Platform Isolator (GPPI) is a highly adaptable, unidirectional airflow that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment.</p>
       </center>
      </td>
    </tr>
    <tr>
      <td width="300px">
      <center>
                <a href="http://www.escopharma.com/ventilated-balance-enclosure/39/69/" target="_blank">
                    <img class="img-responsive" src="/images/upload/Biovap-news.jpg" />
                </a>


      <p>Our GPPI is integrated with our very own automated bio-decontamination system &ndash; <strong>Biovap&trade;</strong>!</p>

      <p>The Esco Biovap&trade; is an effective hydrogen peroxide-based bio-decontamination system capable of achieving a 6-log reduction in bioburden.</p>
      </center>
      </td>
    </tr>
    <tr>
      <td width="300px">
      <center>
      <a href="/products/ventilated-balance-enclosure/29"><img src="/images/product-images/thumb/Ventilated-balance-enclosure-min.png" alt="Ventilated Balance Enclosure (VBE)" title=" Ventilated Balance Enclosure (VBE)" class="product-img"></a>

      <p><strong>Ventilated Balance Enclosure</strong></p>

      <p>Delivering stability, accuracy, and safety in powder weighing applications</p>

      <p>Ventilated Balance Enclosure (VBE) is designed specifically for stability and accuracy while maintaining a high level of operator protection by containing hazardous airborne powder.</p>
    </center>
      </td>
    </tr>
  </tbody>
</table>

<center><img class="img-responsive" src="/images/upload/vacciXcell-news.png" /></center>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td width="300px">
      <center>
                <a href="http://www.vaccixcell.com/brands/celcradle/#content" target="_blank">
                    <img class="img-responsive" src="/images/upload/CelCradle-news.png" />
                </a>

      <p><strong>CelCradle&trade;</strong> is a disposable bioreactor capable of high-density cell culture for protein expression, virus, and monoclonal antibody production. It is designed based on the concept of bellow-induced intermittent flow of media and air through porous matrices, where cells reside. This provides a low shear, high aeration, and foam-free culture environment.</p>
    </center>
      </td>
    </tr>
    <tr>
      <td width="300px">
      <center>
                <a href="http://www.vaccixcell.com/products-and-brands/stircradle-pro/#content" target="_blank">
                    <img class="img-responsive" src="/images/upload/StirCradle-Pro-news.png" />
                </a>

      <p>The <strong>StirCradle-Pro</strong> is a fully stainless steel fermenter/bioreactor system designed with an automated 5-step cycle SIP system for both culture medium and reactor vessel.</p>
    </center>
      </td>
    </tr>
  </tbody>
</table>

<center><img class="img-responsive" src="/images/upload/Esco-medical-news.png" /></center>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td width="300px">
      <center>
                <a href="https://www.esco-medical.com/product/benchtop-multi-room-incubator/2/" target="_blank">
                    <img class="img-responsive" src="/images/upload/Miri-news.jpg" />
                </a>

      <p>The <strong>Miri&reg;</strong> is a revolution, in form and functionality, of CO2 incubators for in-vitro fertilization (IVF). With 6 chambers, the Miri&reg; is a multi-room incubator that allows users to access their cultures in one chamber without affecting the neighbouring chambers. Thus, the harmful effects of fluctuations in temperature and gas caused by frequent incubator access are avoided. Built specifically to equip IVF laboratories and clinics to provide the best standards of care, it boasts a unique set of features that cannot be found elsewhere.</p>
    </center>
      </td>
    </tr>
  </tbody>
</table>

<center><img class="img-responsive" src="/images/upload/Esco-Global-news.png" /></center>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td width="300px">
      <center>
                <a href="https://www.esco-medical.com/product/co2-incubator/3/" target="_blank">
                    <img class="img-responsive" src="/images/upload/CelCulture-news.jpg" />
                </a>


      <p>Esco <strong>CelCulture</strong> CO2 incubators are widely used in scientific research to grow and maintain cell cultures. Typical fields of application include tissue engineering, in vitro fertilization, neuroscience, cancer research, stem cell research, regenerative medicine, and other mammalian cell research.</p>

      <p>Sleek, reliable and intuitive, Esco CelCulture CO2 incubators provide all-rounded sample protection that brings your scientific dreams one step closer to reality.</p></center>
      </td>
    </tr>
    <tr>
      <td width="300px">
      <center>
                <a href="http://www.escoglobal.com/product/laboratory-shaker/incubator-benchtop-shaker/ibs/" target="_blank">
                    <img class="img-responsive" src="/images/upload/Orbicult-news.jpg" />
                </a>


      <p><strong>Orbicult&trade;</strong> Incubator Benchtop Shaker offers a wide range and precisely controlled temperature best for specified application. The forced convection ventilation design of this model ensures consistent and stable temperature. Precise programmable microprocessor extends versatilities through controllable time, speed, and temperature.</p>
    </center>
      </td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p><strong>Customer Spotlights</strong></p>

<center><img class="img-responsive my-3" src="/images/upload/Ms-Baluyot-Product-Specialist-shows-BioPass-to-clients.jpg" />
<p>Ms Baluyot (Product Specialist) shows BioPass&trade; to clients</p>
</center>

<center><img class="img-responsive my-3" src="/images/upload/Mr-Guillermo-discussing-about-GPPI.jpg" />
<p>Mr Guillermo discussing about GPPI</p>
</center>

<center><img class="img-responsive my-3" src="/images/upload/Mr-Reyes-talking-about-StriCradle-Pro.jpg" />
<p>Mr Reyes talking about StriCradle-Pro</p>
</center>

<p>&nbsp;</p>

<p>To the visitors of the booth, dhanyavaad for dropping by and inquiring about our products. See you next year!</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco joins the biggest pharma event in South Asia!','meta_description' => 'Esco joins the biggest pharma event in South Asia!','created_at' => '2016-11-28 17:39:56'],
  ['news_category_id' => '1','old_id' => '71','slug' => 'rabs-vs-isolators-understanding-the-differences','title' => 'RABS vs Isolators: Understanding the differences','banner_img' => 'General-Processing-Platform-Isolator-min.png','banner_thumb' => 'General-Processing-Platform-Isolator-min.png','description' => '<p>During the last 2 decades, aseptic processing has advanced with the use of isolators and Restricted Access Barrier Systems (RABS) as a means of detaching the operator from "critical areas" thereby reducing potentials risks in products.</p>','content' => '<p>During the last 2 decades, aseptic processing has advanced with the use of isolators and Restricted Access Barrier Systems (RABS) as a means of detaching the operator from &ldquo;critical areas&rdquo; thereby reducing potentials risks in products. These systems have been slowly replacing traditional cleanroom.</p>

<p>But what exactly are the differences between these two systems?</p>

<p style="margin-left:6pt;"><strong>Restricted Access Barrier System (RABS)</strong></p>

<ul>
	<li>Includes Compounding Aseptic Isolator (CAI) or Compounding Aseptic Containment Isolator (CACI)&nbsp;</li>
	<li>Provide an ISO Class 5 environment for preparing Compounded Sterile Preparations (CSPs)</li>
	<li>All transport ports must be closed during compounding</li>
	<li>Located within at least ISO Class 7 area to prepare Category 2 CSPs, or within a segregated compounding area to prepare Category 1 CSPs</li>
</ul>

<p style="margin-left:6pt;"><strong>Isolator</strong></p>

<ul>
	<li>Provides isolation from the surrounding area and maintains ISO Class 5 air quality</li>
	<li>High-integrity transfer ports</li>
	<li>Decontaminated using an automated system</li>
	<li>Maintains constant overpressure of at least 0.05-inch water column</li>
	<li>Can be located in an ISO Class 8 area when preparing Category 2 CSPs</li>
</ul>

<p>&nbsp;</p>

<table class="table table-bordered" align="center" border="0" cellpadding="2" cellspacing="2" style="width:100%;">
	<tbody>
		<tr>
			<td style="width: 200px; text-align: center;">
			<p><strong>Criteria</strong></p>
			</td>
			<td style="width: 400px; text-align: center;"><strong>RABS</strong></td>
			<td style="text-align: center; width: 400px;"><strong>ISOLATOR</strong></td>
		</tr>
		<tr>
			<td><strong>Decontamination</strong></td>
			<td>Manually disinfected</td>
			<td>
			<p>Quantifiable and high reproducible method by an automated system</p>
			</td>
		</tr>
		<tr>
			<td><strong>Assurance of Separation</strong></td>
			<td>No complete physical separation</td>
			<td>
			<p>Quantifiable hourly leak rate (closed) and continuously controlled differential pressure</p>
			</td>
		</tr>
		<tr>
			<td><strong>Surrounding Environment</strong></td>
			<td>
			<p>Passive: ISO 5</p>

			<p>Active: ISO 7</p>
			</td>
			<td>
			<p>Quantifiable leakage tightness</p>

			<p>(ISO 10648-2)</p>
			</td>
		</tr>
		<tr>
			<td><strong>Capital Costs</strong></td>
			<td>
			<p>Higher than conventional cleanroom (CCR); reduced with renovation and retrofit application</p>
			</td>
			<td>
			<p>HIgh equipment costs</p>
			</td>
		</tr>
		<tr>
			<td><strong>Operating Costs</strong></td>
			<td>
			<p>Higher than CCR</p>
			</td>
			<td>Cost saving in energy consumption (HVAC) and clothing</td>
		</tr>
		<tr>
			<td><strong>Toxic Containment</strong></td>
			<td>
			<p>Low Capability</p>
			</td>
			<td>Good reliability</td>
		</tr>
	</tbody>
</table>

<p>Source: Innovation in Aseptic Manufacturing RABS versus Isolators by Francesco Longanesi (Feb 2008)</p>

<p>&nbsp;</p>

<p style="text-align: center;"><strong>Esco offer ISOLATORS apt for your compounding needs!</strong></p>

<p>&nbsp;</p>

<p><strong>ESCO RABS</strong></p>
<div class="row">
    <div class="col-md-4">
        <a href="/products/streamline-closed-restricted-access-barrier-system/20"><img src="/images/product-images/thumb/Streamline-compounding-isolator-min.png" alt="Closed Restricted Access Barrier System (SLC-RABS)" title="Streamline® Closed Restricted Access Barrier System (SLC-RABS)" class="product-img"></a>
        <p class="text-center">Streamline® Closed Restricted Access Barrier System (SLC-RABS)</p>
    </div>
    <div class="col-md-4">
        <a href="/products/compounding-isolator/38"><img src="/images/product-images/thumb/streamline-compounding-isolator-thumb-min.png" alt="Compounding Isolator" title="Streamline® Compounding Isolator" class="product-img"></a>
        <p class="text-center">Streamline® Compounding Isolator</p>
    </div>
    <div class="col-md-4">
        <a href="/products/containment-isolator-class-iii/25"><img src="/images/product-images/thumb/streamline-compounding-isolator-class-iii-450px-min.png" alt="Containment Isolator - Class III" title="Streamline® Containment Isolator - Class III" class="product-img"></a>
        <p class="text-center">Streamline® Containment Isolator - Class III</p>
    </div>
</div>
<p>&nbsp;</p>

<p><strong>ESCO ISOLATORS</strong></p>
<div class="row">
    <div class="col-md-4">
        <a href="/products/general-processing-platform-isolator-gppi/45"><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" alt="General Processing Platform Isolator (GPPI)" title=" General Processing Platform Isolator (GPPI)" class="product-img"></a>
        <p class="text-center">General Processing Platform Isolator (GPPI)</p>
    </div>
    <div class="col-md-4">
        <a href="/products/healthcare-platform-isolator-with-filter-below-workzone/22"><img src="/images/product-images/thumb/Healthcare-Platform-Isolator-2G-min.png" alt="Healthcare Platform Isolator - With Filter Below Workzone" title="Isoclean® Healthcare Platform Isolator - With Filter Below Workzone" class="product-img"></a>
        <p class="text-center">Isoclean® Healthcare Platform Isolator - With Filter Below Workzone</p>
    </div>
    <div class="col-md-4">
        <a href="/products/containment-barrier-isolator-u/30"><img src="/images/product-images/thumb/CBI-U-450px-min.png" alt="Containment Barrier Isolator (CBI) - Undirectional" title=" Containment Barrier Isolator (CBI) - Undirectional" class="product-img"></a>
        <p class="text-center">Containment Barrier Isolator (CBI) - Undirectional</p>
    </div>
</div>


','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'RABS vs Isolators, pharmacy compounding isolator, hospital pharmacy isolator, pharmaceutical isolator, compounding aseptic containment isolator','meta_description' => 'RABS vs Isolators','created_at' => '2016-12-07 11:38:03'],
  ['news_category_id' => '2','old_id' => '94','slug' => 'esco-pharma-advancing-aseptic-pharmaceutical-processing-with-sp-scientific-penn-tech-and-ess-technologies','title' => 'Esco Pharma Advancing Aseptic Pharmaceutical Processing with SP Scientific PennTech and ESS Technologies','banner_img' => 'oRABS-450px-min.png','banner_thumb' => 'oRABS-450px-min.png','description' => '<p>Esco Pharma partners with SP Scientific Penntech and ESS Technologies in developing liquid filling solutions to meet the stringent requirements for 503B sterile pharmaceutical compounding applications.</p>','content' => '<p>Esco Pharma partners with SP Scientific Penntech and ESS Technologies in developing liquid filling solutions to meet the stringent requirements for 503B sterile pharmaceutical compounding applications. Esco Pharma supplied Open Restricted Access Barrier Systems (oRABS) that house different liquid filling technologies to carry out aseptic operations.</p>

<p>The Esco oRABS has a full unidirectional airflow system providing an ISO 5 environment required in aseptic processing with gloveports. It is manufactured in an all stainless steel &amp; toughened safety glass construction that provides a total physical separation of the process and the operators.</p>

<p>&nbsp;</p>

<p><strong>Aseptic Filling, Stopper-inserting, Capping Machine for VIALS</strong></p>

<p><img class="img-responsive" src="/images/upload/Open-Restricted-Access-Barrier-System-oRABS.jpg" style="margin-left: 12px; margin-right: 12px; float: left; width: 157px; height: 202px;" /></p>

<p>&nbsp;</p>

<p>The SP Scientific PennTech&rsquo;s FSC-1R is a 1-up filling, stoppering, and capping system for pre-sterilized 2-100 mL vials enclosed in an extended oRABS designed for aseptic application in a Class 100 environment with an output of up to 25 vials per minute. This system uses the highest precision and most advanced pumps that are driven by PLC-controlled individual servo motors. The drip-free filling is an inherent feature. The FSC-1R is also equipped with a nitrogen purge to ensure longer shelf life. Viable and non-viable particulate monitoring is available to ensure and control the quality of sterile products.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Sterile Automated Filling and Capping System for SYRINGES</strong></p>

<p>ESS Technologies&rsquo; new TaskMate&reg; Robotic Syringe Filler and Capper integrates two (2) FANUC clean class LR Mate robots with Esco oRABS to increase production speeds and efficiency and reduce labor overhead while giving comprehensive protection to products and operator from contamination. This system can fill up to 15 syringes per minute. A flexible feeding system feeds syringes to the first robot, an LR200iD clean class from FANUC, which uses vision to pick the syringe and place it on the filling station. The second FANUC LR Mate 200iD robot picks a cap from the tray and places it into the torque station. A servo driven pick and place unit transfers the syringe from the fill station to the final torque station. The robotic system discharges the filled and capped syringes via a divided gravity chute to a customer-supplied discharge bin. In the event of a station error, bad syringes are discharged via the opposite side of the chute for customer inspection.</p>

<p>Esco Pharma custom designed both oRABS in a manner where OEMs would not need to rework the bedplate design and would easily retrofit to the standard models of SP Scientific PennTech and ESS Technologies. Designing sophisticated custom engineering controls, Esco Pharma is proven to be a leading manufacturer of containment and isolation systems.</p>

<p>Esco Pharma provides specialist services, equipment packages and process solutions leading to improved protection of operators, reduction of cross-contamination, and more efficient processing, thereby advancing occupational health and human healthcare. Esco Pharma is also able to develop solutions for other filling line companies. Contact us for your next aseptic filling isolator/barrier project</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><a href="http://escopharma.com" target="_blank"><img class="img-responsive" src="/images/logos/ESCO-Pharma.png" /></a></p>

<p>Esco Technologies Inc &ndash; Pharma Division</p>

<p><a href="mailto:Eti.pharma@escoglobal.com">Eti.pharma@escoglobal.com</a></p>

<p>215-322-2155</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Open Restricted Access Barrier System (ORABS), Esco Pharma Advancing Aseptic Pharmaceutical Processing with SP Scientific PennTech and ESS Technologies, Sterile Automated Filling and Capping System for SYRINGES','meta_description' => 'Esco Pharma Advancing Aseptic Pharmaceutical Processing with SP Scientific PennTech and ESS Technologies','created_at' => '2017-01-26 17:17:45'],
  ['news_category_id' => '2','old_id' => '97','slug' => 'esco-isoclean-isolators-aid-in-a-pharmacy-compounding-facility-in-singapore','title' => 'Esco Isoclean® Isolators Aid in a Pharmacy Compounding Facility in Singapore','banner_img' => 'Esco-Isoclean-Isolators-Aid-in-a-Pharmacy-Compounding-Facility-in-Singapore-min.jpg','banner_thumb' => 'Esco-Isoclean-Isolators-Aid-in-a-Pharmacy-Compounding-Facility-in-Singapore-min.jpg','description' => '<p>Esco Pharma has been awarded to be the supplier of three (3) pharmacy compounding isolators for a hospital in Singapore. The Esco Isoclean&reg; Healthcare Platform Isolator (HPI) recirculating model with 2 Type D pass through chambers is the model the hospital chose for their compounding pharmacy applications.</p>','content' => '<p>Esco Pharma has been awarded to be the supplier of three (3) pharmacy compounding isolators for a hospital in Singapore. The Esco Isoclean&reg; Healthcare Platform Isolator (HPI) recirculating model with 2 Type D pass through chambers is the model the hospital chose for their compounding pharmacy applications.</p>

<p>With the global trends in pharmacy compounding moving towards cGMP (Current Good Manufacturing Practice) compliance and clearer definitions between a closed restricted access barrier systems (cRABS) and cGMP isolators, Esco Pharma designed an isolator that meets and exceeds existing pharmacy isolator standards.</p>

<p>Esco HPI is capable of being pressure tested at the factory and on site to a Class 2 containment enclosure as per the ISO 10648-2 standards. It is equipped with glove port covers made of medical grade plastic with FDA-approved static seals. The integrity of the gloves can be measured quantitatively applying the pressure decay method. Esco isolators come with optional carbon filters to capture volatile hazardous drugs for sites that cannot be externally vented due to building constraints.*</p>

<p>In addition to isolators as primary engineering controls, Esco also offers biological safety cabinets, cytotoxic safety cabinets, laminar flow cabinets (vertical and horizontal), dynamic pass boxes (Active Transfer Hatches), air showers, and ceiling room side replaceable fan filter units with remote closed loop controls.</p>

<p>Esco, with its design and build division TaPestle Rx, offers complete turnkey design and build services for cGMP pharmacy compounding centres with in-house pharmacists providing consultation and training within the Southeast Asia and Australia/New Zealand regions.</p>

<p>Esco is accredited by NEBB for Cleanroom Performance Testing (CPT). Building the first cleanroom in Singapore in the 1980s for Siemens Components, Esco boasts its rich heritage in clean air and containment technology, in-house consultants, and validation experts. The company is well poised to provide a truly complete solution within the healthcare industry.</p>

<p><em>*Esco recommends externally venting out the equipment for all hazardous drug compounding. It is the sole responsibility of the pharmacy institution to provide risk assessment depending on the type of drugs being compounded, ensure compliance to relevant guidelines and standards, and ensure sufficient protection to healthcare team. Esco is not liable if an adverse event occurs as Esco only provides consultation. Final decision will be made by the pharmacy institution. Refer to Ministry of Health regulations on workplace for further details.</em></p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Pharmacy Compounding Isolators, Hospital Pharmacy Isolator, Pharmaceutical Isolator','meta_description' => 'Esco IsocleanÂ® Isolators Aid in a Pharmacy Compounding Facility in Singapore','created_at' => '2017-03-17 20:20:50'],
  ['news_category_id' => '3','old_id' => '100','slug' => 'esco-pharma-at-interphex-2017','title' => 'Esco Pharma at INTERPHEX 2017','banner_img' => 'Esco-Pharma-at-Interphex-2017-min.jpg','banner_thumb' => 'Esco-Pharma-at-Interphex-2017-min.jpg','description' => '<p>Esco Pharma exhibited at the INTERPHEX 2017, the event for pharmaceutical and biotech professionals held last March 21-23, 2017 at Javits Center, NY, USA. The conference featured state-of-the-art solutions a manufacturer needs in developing and producing quality drug products.</p>','content' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; color: rgb(119, 119, 119); background-color: rgb(255, 255, 255); line-height: 30px !important;">Esco Pharma exhibited at the INTERPHEX 2017, the event for pharmaceutical and biotech professionals held last March 21-23, 2017 at Javits Center, NY, USA. The conference featured state-of-the-art solutions a manufacturer needs in developing and producing quality drug products.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; color: rgb(119, 119, 119); background-color: rgb(255, 255, 255); line-height: 30px !important;">Esco Pharma provides specialist services, equipment packages and process solutions leading to improved protection of operators, reduction of cross-contamination, and more efficient processing, thereby advancing occupational health and human healthcare. One of its forefront in the pharmaceutical industry is the Pharmacon Downflow Booth (DFB), which provides operator, process, and product protection by utilizing HEPA-filtered unidirectional downflow to maintain an ISO 5 environment at rest within the work zone and capture particulates during open handling operations.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; color: rgb(119, 119, 119);  background-color: rgb(255, 255, 255); line-height: 30px !important;">Featured in this event is the High Containment Screen (HCS) which boosts containment capabilities of downflow booths by achieving containment performance targets of 1-10 &micro;g/m<span style="box-sizing: border-box; font-size: 11.25px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;">3</span>. During the event, the attendees were able to test its ergonomics by pulling stick through the HCS in the hopes of dropping a green ball. Lucky winners got a chance to win exciting prizes from Esco.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; color: rgb(119, 119, 119); background-color: rgb(255, 255, 255); line-height: 30px !important;">The Esco General Processing Platform Isolator (GPPI), one in a range of systems that Esco offers, is a highly adaptable, unidirectional airflow isolator that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; color: rgb(119, 119, 119); background-color: rgb(255, 255, 255); line-height: 30px !important;">In addition to DFB and GPPI, Esco Pharma also offers other containment isolators, restricted access barrier systems (RABs), dynamic pass boxes (Active Transfer Hatches), air showers, and ceiling room side replaceable fan filter units with remote closed loop controls, and other engineering solutions to achieve aseptic and containment targets.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; color: rgb(119, 119, 119); background-color: rgb(255, 255, 255); line-height: 30px !important;">Esco Pharma would like to thank everyone for the opportunity to connect with you! Congratulations to all the winners. See them in their next exhibit at the Healthcare Packaging Expo in Las Vegas, USA.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma at INTERPHEX 2017','meta_description' => 'Esco Pharma at INTERPHEX 2017','created_at' => '2017-04-04 19:27:16'],
  ['news_category_id' => '2','old_id' => '101','slug' => 'esco-pharma-gb-is-moving','title' => 'Esco Pharma GB is moving!','banner_img' => 'Esco-Pharma-GB-is-moving-min.jpg','banner_thumb' => 'Esco-Pharma-GB-is-moving-min.jpg','description' => '<p>Esco Pharma GB factory celebrated a moved to a larger facility to serve existing and future clients better. The opening was graced by her honor, Mayor of Barnsley Cllr Linda Burgess and her delegates.</p>','content' => '

<p>Esco Pharma GB factory celebrated a moved to a larger facility to serve existing and future clients better. The opening was graced by her honor, Mayor of Barnsley Cllr Linda Burgess and her delegates.</p>

<p>You can now visit our new factory at the address below:</p>

<p style="margin-left: 40px;">Unit 2 R-Evolution @ Gateway 36, Kestrel Way, Barnsley, S70 5SZ</p>

<p style="margin-left: 40px;">Tel: +44 (0) &lrm;01226 360799</p>

<p style="margin-left: 40px;">Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>

<p>The factory is now on to a busy start with five (5) pharma isolators currently in production. These isolators are integrated with Esco BioVap&trade; and catalytic converter for sterile/aseptic processing.</p>

<p>Esco, globally only utilizes high-performance Outokumpu stainless steel for Pharma products and have full sheet metal traceability with high-quality welding &amp; polishing. Stainless steel fabrication is completely segregated from electro-galvanized (EG) steel products production and with the companies semi-automated powder coating line.</p>

<p>Esco Pharma boasts its strengths on multiple manufacturing sites - Singapore, United Kingdom, and the United States, allowing them to serve customers globally. These three locations utilize the same engineering standards to produce better quality equipment with components which are available internationally. Fully certified by ISO 9001, 14001 18001, 13486,</p>

<p>Esco is the only company with distributed manufacturing sites but with direct sales, engineering and service support from local Esco offices.</p>

<p>Esco Pharma extends gratitude for the loyalty and support from customers that fueled the growth, making the move necessary.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma GB staff with the Barnsley Council Members headed by Mayor of Barnsley, Cllr Linda Burgess','meta_description' => 'Esco Pharma GB staff with the Barnsley Council Members headed by Mayor of Barnsley, Cllr Linda Burgess','created_at' => '2017-05-15 09:36:07'],
  ['news_category_id' => '1','old_id' => '102','slug' => 'defects','title' => 'Defects','banner_img' => 'detect-pharma-news.jpg','banner_thumb' => 'detect-pharma-news.jpg','description' => '<p>A defect is an undesirable characteristic of a product. It is defined as a failure to conform to specifications or a unit of a product which contains one or more defects is called a defective.</p>','content' => '<div >

  <p>A defect is an undesirable characteristic of a product. It is defined as a failure to conform to specifications or a unit of a product which contains one or more defects is called a defective.</p>

  <p>Defects can be classified as follows:</p>

  <ol>
    <li>According to measurability:
    <ul>
      <li>Variable defect &ndash; a defect which can be measured directly by instruments giving dimensions of length, weight, height, thickness, concentration, volume, viscosity, pH or size particles.</li>
      <li>Attribute defect &ndash; a defect which cannot be measured directly by instruments. It shows mainly the conformance or nonconformance of the material to specifications.</li>
    </ul>
    </li>
    <li>According to seriousness or gravity:
    <ul>
      <li>Critical defect &ndash; a defect which may endanger life or property and may render the product non &ndash; functional.</li>
      <li>Major defect &ndash; a defect which may affect the function of the object and therefore, may render the product useless.</li>
      <li>Minor defect &ndash; a defect which does not endanger life or property nor will it affect the function but nevertheless remains a defect since it is outside the prescribed limits.</li>
    </ul>
    </li>
    <li>According to nature:
    <ul>
      <li>Ocular defect - a defect that is visible.</li>
      <li>Internal defect - a defect which is not seen although present.</li>
      <li>c. Performance defect - a defect in function.</li>
    </ul>
    </li>
  </ol>

  <p>In cases of defects, a product recall is necessary to assure the integrity of the company. Product recalls have two classes.</p>

  <ul>
      <li>Class I recall: a situation in which there is a reasonable probability that the use of or exposure to a violative product will cause serious adverse health consequences or death.</li>
      <li>Class II recall: a situation in which use of or exposure to a violative product may cause temporary or medically reversible adverse health consequences or where the probability of serious adverse health consequences is remote.</li>

  </ul>

  <p>Consequently, Esco Pharma&rsquo;s focus on quality and timeliness is relentless. Continuous improvement is a mantra. Cross functional teams from Esco Pharma&rsquo;s Production, R&amp;D, Quality Assurance, Senior Management, are regularly assembled to review and implement areas for improvement.</p>

  <p>Esco Pharma&rsquo;s manufacturing advantage stems from the extensive degree of vertical integration, enabled by the company&rsquo;s world leading throughput. All processes, with a few exceptions, are performed in house. This allows the company to achieve quality and reliability that is truly world-class. This include a) Incoming materials inspection and warehousing b) CNC-controlled sheet metal fabrication and welding, c) Environmentally-friendly powder coating lines, d) Electromechanical final product assembly, e) Electrical / electronics sub-assembly, f) Multi-step electrical and physical performance testing, g) Independent quality control at each step in the production cycle and f) Microbiology, chemistry, containment test labs.</p>

  <p>The combination of predictive maintenance, historical data and geospecific proximity assures the customers that parts and labor are available whenever service is scheduled through the local sales organization. Quality control at Esco Pharma extends from research and development through engineering, manufacturing, shipment, delivery and customer feedback. Esco Pharma maintains an aggressive program to encourage warranty card registration by mail, email or online submittal so that the company knows where Esco Pharma products are located and how they are being used. Data from our warranty registration program is confidential and provides with valuable contact information for after sales notification.</p>

  <p>References: www.fda.gov</p>

</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Defects','meta_description' => 'Defects','created_at' => '2017-06-16 09:35:32'],
  ['news_category_id' => '1','old_id' => '103','slug' => 'quality-assurance-system','title' => 'Quality Assurance System','banner_img' => 'Quality-Assurance-System-news.jpg','banner_thumb' => 'Quality-Assurance-System-news.jpg','description' => '<p>In the large scale production of medicines quality, is not achieved by accident. It is result of a carefully constructed quality assurance system. This system must ensure that each medicinal product conforms to its intended use.</p>','content' => '<div >

  <p>In the large scale production of medicines quality, is not achieved by accident. It is result of a carefully constructed quality assurance system. This system must ensure that each medicinal product conforms to its intended use. This applies in terms of safety, therapeutic effectiveness and acceptability.</p>

  <p>The quality assurance system must a) establish specific activities before production, b) control factors during production and c) evaluate results following production.</p>

  <p>In a pharmaceutical production process, quality assurance is involved in all of the following activities such as purchasing, dispatching warehousing, operational protocols, manufacturing, training, quality control, validation and packaging. Hence, the system can likewise ensure quality to clients, provide evidence in cases of glitches and generate confidence on the part of the employees.</p>

  <p>Implementing a quality assurance system in a manufacturing facility is expensive, but these can provide utmost benefits such as higher standards of production, compliance with regulatory requirements, reduced waste and less risk of product defects.</p>

  <p>As lots of countries are already implementing comprehensive, modern quality systems and risk management process, the QA system in lined with the&nbsp; Current Good Manufacturing Practices (cGMP) are reinforced not just to minimize running cost but to harmonize the guidelines with other non-US pharmaceutical regulatory systems and with FDA&rsquo;s own systems regulation.</p>

  <p>Notably, Esco Pharma, as one of the leading companies on providing safe and effective products to patients, is not just accentuating on quality control and management but on more recently developed quality systems stress quality management, quality assurance, and the use of risk management tools, in addition to quality control.</p>

  <p>References: www.fda.gov</p>


</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Quality Assurance System','meta_description' => 'Quality Assurance System','created_at' => '2017-06-16 09:42:39'],
  ['news_category_id' => '3','old_id' => '105','slug' => 'esco-pharma-at-high-potent-medicines-conference-2017','title' => 'Esco Pharma at High Potent Medicines Conference 2017','banner_img' => 'Esco-Pharma-at-High-Potent-Medicines-Conference-2017-min.jpg','banner_thumb' => 'Esco-Pharma-at-High-Potent-Medicines-Conference-2017-min.jpg','description' => '<p>Esco Pharma was one of the exhibitors at the High Potent Medicines Conference last June 6-7, 2017 in Berlin, Germany. The conference focused on strategies and challenges in the high potent medicines industry.</p>','content' => '
<p>&nbsp;</p>

<p>Esco Pharma was one of the exhibitors at the High Potent Medicines Conference last June 6-7, 2017 in Berlin, Germany. The conference focused on strategies and challenges in the high potent medicines industry.</p>

<p>One of the highlights of the conference is about containment and aseptic strategies for the safe handling of antibody drug conjugates. The main objective is to protect the products while protecting the personnel from the hazardous substances.</p>

<p>Esco exhibited in this event aiming to increase exposure in this industry as a global pharmaceutical equipment provider that represents innovation and forward-thinking designs.</p>

<p>Esco Pharma boasts its strengths on multiple manufacturing sites - Singapore, United Kingdom, and the United States, allowing them to serve customers globally. These three locations utilize the same engineering standards to produce better quality equipment with components which are available internationally. Esco operates under ISO 9001, 14001 and 13485. &nbsp;</p>

<p>Esco is the only company with distributed manufacturing sites but with direct sales, engineering and service support from local Esco offices.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma was one of the exhibitors at the High Potent Medicines Conference last June 6-7, 2017 in Berlin, Germany. The conference focused on strategies and challenges in the high potent medicines industry.','meta_description' => 'Esco Pharma was one of the exhibitors at the High Potent Medicines Conference last June 6-7, 2017 in Berlin, Germany. The conference focused on strategies and challenges in the high potent medicines industry.','created_at' => '2017-06-21 14:14:57'],
  ['news_category_id' => '1','old_id' => '111','slug' => 'inhaled-insulin-boon-or-bane','title' => 'Inhaled Insulin: Boon or Bane?','banner_img' => 'Inhaled-Insulin-Boon-or-Bane-1.jpg','banner_thumb' => 'Inhaled-Insulin-Boon-or-Bane-1.jpg','description' => '<p>For the past few decades, pharmaceutical companies are investing on modernized ways and methods to find a viable way to get insulin into the bodies of people with diabetes without needles. Naturally the idea of an insulin inhaler, similar to an asthma inhaler, was an appealing prospect.</p>','content' => '<div align="justify">
<p>For the past few decades, pharmaceutical companies are investing on modernized ways and methods to find a viable way to get insulin into the bodies of people with diabetes without needles.</p>

<p>Naturally the idea of an insulin inhaler, similar to an asthma inhaler, was an appealing prospect. But it wasn&rsquo;t until new technologies appeared on the scene in the late 1990&rsquo;s that researchers could really begin to experiment with turning insulin into a concentrated powder with particles sized for inhalation into the lungs.</p>

<p>Insulin (Human) will be provided as insulin spray-dried powder, comprised of recombinant human insulin, sodium citrate, mannitol and glycine; and is presented in pre-dispensed 1 and 3 mg unit dose blisters. For pulmonary drug delivery, a reusable manually operated dry powder inhaler is used. Key functions of the pulmonary inhaler are the dispersion of powder to form an aerosol cloud (inspiratory independent) into a holding chamber and the delivery of the aerosolized powder to the patient. The insulin pulmonary inhaler is CE certified.</p>

<p><strong>Description of the Manufacturing Process </strong></p>

<p>The manufacturing process of the drug product consists of three steps: (1) The solution preparation and (2) the spray drying process for the manufacture of the insulin spray dried powder and 3) filling and packaging. Insulin spray dried powder is an intermediate in the manufacturing process of the drug product. The powder is stored in steel containers and shipped to the blister-filling site, where it is filled in 1mg and 3mg blisters.</p>

<p><strong>In-process controls</strong></p>

<p>The fermentation process, the downstream processing and purification of the expression product are sufficiently controlled by appropriate in-process controls and acceptance criteria. The efficiency of the concentration and purification steps is monitored by HPLC analysis. The structure of most byproducts has been elucidated and their removal is either demonstrated by validation data and/or limits are set for in-process control testing at the respective purification stages.</p>

<p><strong>Development of the Manufacturing Process of the Active Substance </strong></p>

<p>During the early development phase of insulin inhalation powder, pre-dispensed, different recombinant human insulin sources deriving from modified manufacturing processes were used for clinical (Phase 3) and development batches. Information demonstrating the equivalence between these sources was provided.</p>

<p><strong>Modification and Purification </strong></p>

<p>The inactivated cells are separated by centrifugation and disrupted by pressure-expansion treatment to obtain the fusion protein that is enriched by on-line washing and centrifugation steps. The downstream processing of the fusion protein to human insulin is a sequence of modification and purification steps. Sub-batches are mixed to obtain the final drug substance and stored at -20&deg;</p>

<p>The rise of inhaled insulin paves the way to modernization and continuous evolution of drugs for an optimum health care delivery. Esco Pharma&reg; offers flexible solution to comply with the innovative requirements inhaled insulin have. General Processing Platform Isolator (GPPI) is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment. The GPPI&rsquo;s advanced control system allows the operator to select either positive or negative chamber pressure as well as single pass or recirculating airflow patterns. These features, along with the ability to perform safe change procedures on the supply and return ULPA filters, make the GPPI a highly versatile isolator that can be used for potent or non-potent aseptic materials. With a company like Esco Pharma, the public can be assured that from the research and development stage up until the drugs&rsquo; final formulation on its dosage form, continuous innovation will fuel every step of drug discovery and development for an optimum health care delivery.</p>

<p>References:</p>

<ol>
  <li>Amy Tenderich, Healthline: The Story of Inhaled Insulin, 2016</li>
  <li>Scientific Discussion on Inhaled Insulin, Exubera&reg;. Retrieved from http://www.ema.europa.eu.</li>
</ol>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Inhaled Insulin: Boon or Bane?','meta_description' => 'Inhaled Insulin: Boon or Bane?','created_at' => '2017-07-17 15:28:29'],
  ['news_category_id' => '1','old_id' => '112','slug' => 'nanotechnology-in-pharmaceutical-r-d-drug-delivery-system','title' => 'Nanotechnology in Pharmaceutical R&D: Drug Delivery System','banner_img' => 'Nanotechnology-in-Pharmaceutical-R-D-Drug-Delivery-System-1.png','banner_thumb' => 'Nanotechnology-in-Pharmaceutical-R-D-Drug-Delivery-System-1.png','description' => '<p>Pharmaceutical industry now utilize <em>Nanotechnology</em> as a platform for new technology development. It is the science that deals with the processes that occur at molecular level and of nanolength scale size.</p>','content' => '<div align="justify">
<p>Pharmaceutical industry now utilize <em>Nanotechnology</em> as a platform for new technology development. It is the science that deals with the processes that occur at molecular level and of nanolength scale size. It opened new opportunities for improvement in different aspects of pharmaceutical manufacturing, e.g. drug designing.</p>


<p>The scope of pharmaceutical nanotechnology is very wide, from smart material for tissue engineering to intelligent tools for delivery of drugs. Novel drug delivery comprises a number of features of nanotechnology, and its importance is in the concept and ability to manipulate molecules and supramolecules for producing devices with programmed function. Examples of the current nano drug delivery systems are: liposomes, polymeric micelles, nanoparticles, and dendrimers.</p>

<p>Liposomes are small artificial vesicles of spherical shape that can be created from cholesterol and natural non-toxic phospholipids. They are the most developed nanotechnology product for the novel and targeted drug delivery due to their size and amphiphilic (hydrophobic-hydrophilic) character. They have been successfully used in cancer therapy, pulmonary delivery, ophthalmic drug delivery, leishmaniasis, and as carrier for antigens.</p>

<p>Polymeric micelles are nanoscopic supramolecular core-shell structure that is composed of amphiphilic block copolymers. They are used for the systemic delivery of water-insoluble drugs. Polymeric micelles have proved an excellent novel drug delivery system due to high and versatile loading capacity, stability in physiological conditions, slower rate of dissolution, high accumulation of drug at target site, and possibility of functionalization of end group for conjugation of targeting ligands.</p>

<p>Nanoparticles can be classified into two groups: (1) Polymeric nanoparticles; and (2) Metallic nanoparticles. Polymeric nanoparticles are colloidal carriers having inherent properties like biocompatibility, nonimmunogenicity, nontoxicity, and biodegrability. They are usually used for intracellular and site specific delivery. For metallic nanoparticles, they are good delivery carriers for drug and biosensor. Silver and gold nanoparticles are of great importance for biomedical use among all metallic nanoparticles.</p>

<p>Dendrimers are hyperbranched, tree-like structures and have compartmentalized chemical polymer. They bear promising properties for delivery of bioactives ranging from drugs, vaccines, metal, and genes to desired sites. Most important applications of dendrimers are gene therapy, immunoassay, and MRI contrast agent.</p>

<p align="center"><img class="img-responsive" src="/images/upload/Nanotechnology-in-Pharmaceutical-R-D-Drug-Delivery-System-3.png" /></p>

<p>The use of these carriers allows for a much higher active moiety/carrier material ratio compared to &quot;direct&quot; molecular conjugates, and is also capable of carrying multiple drug species. They also provide a higher degree of protection from enzymatic degradation and other destructive factors upon administration because the carrier wall completely isolates drug molecules from the environment.</p>
<p>The method of preparation for nanopharmaceuticals will always vary depending on the physical character of the polymer and the active ingredient used. For example, for nanopharmaceuticals used in ophthalmology, the ultimate goal is to keep the product sterile or free from contaminating microorganisms. To make it possible, it is advised to use an isolation system in preparing this type of drug. It is required to maintain a positive pressure so as to maintain the sterility of the product. However, for nanopharmaceuticals containing cytotoxic drugs, the requirement is unique for its preparation since hazardous substances are involved. The product should still be sterile and free from contamination, without compromising the safety of the operator and the environment.</p>
<p>These novel drug delivery systems offer tremendous opportunity for development of site-specific delivery systems for drugs and genes. They are especially critical in an era of rising healthcare cost and development of multidrug resistance in cancer and infectious diseases. Esco Pharma supports this by promoting research and providing continuous innovation from discovery up to the delivery of drugs. Thereby, improving the healthcare industry.</p>

<p>References:</p>

<ol align="justify">
  <li>
  <p align="justify">Mansoor M. Amiji, Nanotechnology for Drug Delivery: An Overview. Northeastern University, Boston, 2006.</p>
  </li>
  <li>
  <p align="justify">N.K. Jain, Pharmaceutical Technology: Pharmaceutical Nanotechnology, 2007.</p>
  </li>
  <li>
  <p align="justify">Saurabh&nbsp;Bhatia, Nanotechnology and Its Drug Delivery Applications, 2016.</p>
  </li>
</ol>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Nanotechnology in Pharmaceutical R&D: Drug Delivery System','meta_description' => 'Nanotechnology in Pharmaceutical R&D: Drug Delivery System','created_at' => '2017-07-17 15:54:03'],
  ['news_category_id' => '1','old_id' => '113','slug' => 'how-safe-is-your-food','title' => 'How SAFE is your FOOD?','banner_img' => 'organic-foods.jpg','banner_thumb' => 'organic-foods.jpg','description' => '<p>Ensuring food safety starts with production, at the farm level. In this regard, misuse of agro-chemicals, including pesticides, growth hormones and veterinary drugs may have harmful effects on human health.</p>','content' => '<div >
  <p>Ensuring food safety starts with production, at the farm level. In this regard, misuse of agro-chemicals, including pesticides, growth hormones and veterinary drugs may have harmful effects on human health. The microbial and chemical risks could be
    introduced at the farm level (e.g. using water contaminated by industrial waste or poultry farm waste for irrigation of crops). Good agricultural practices should be applied to reduce microbial and chemical hazards. Organic farming (without the use
    of pesticides) has been promoted in many countries globally, as there is a significant segment of health-conscious people. Although organic products are more expensive as compared to commonly available food items, there is a tendency among health-
    conscious consumers to eat less, but buy organic foods.</p>
  <p>&nbsp;</p>
  <p><strong>How food quality is evaluated</strong></p>
  <div >
    <div >
      <p>Careful <em>sampling of the food</em> is necessary for sensory evaluation and can done by consumers only. But it is not always possible to detect with sensory methods alone the contamination of food by pesticides, veterinary drug residues and adulteration,
        hence, qualified personnel is needed. Objective evaluation is done which includes chemical, physiochemical, microbial and physical methods of analysis. Chemical methods include the determination of nutritive value of foods before and after cooking,
        and to detect the products of decomposition and adulterants in foods. The most widely employed objective evaluation is the measurement of physical properties by the use of instruments. Measurements of the appearance and volume of foods are also
        important.</p>
    </div>
    <div >
      <center>
        <img class="img-responsive" src="/images/upload/food-quality.png"  />
      </center>
    </div>
  </div>
  <p>&nbsp;</p>
  <p><strong>What tests and analyses are conducted on food samples?</strong></p>
  <p>The following are tests that can be conducted on food samples</p>
  <ul>
    <li>Food allergen testing</li>
    <li>Food chemical analysis</li>
    <li>Food contact tests</li>
    <li>Food contaminant testing</li>
    <li>Nutritional analysis and testing</li>
    <li>GMO (Genetically Modified Organism) testing</li>
    <li>Melamine contamination testing</li>
    <li>Microbiological testing</li>
  </ul>
  <p>It is also noted to utilize containers that are clean, dry, leak-proof, wide-mouthed, <strong><em>sterile,</em></strong> and of a size suitable for samples of the product. Containers such as plastic jars or metal cans that are leak-proof may be hermetically
    sealed. Whenever possible, avoid glass containers, which may break and contaminate the food product. For dry materials, use <strong><em>sterile</em></strong> metal boxes, cans, bags, or packets with suitable closures. Sterile plastic bags (for dry,
    unfrozen materials only) or plastic bottles are useful containers for line samples.&nbsp;</p>

  <p><strong>What solutions Esco Pharma can offer?</strong></p>
  <div >
    <div >
      <p>To aid in the food sampling process<strong><em>, Down Flow Booths (DFB)</em></strong>, an ultra-compact booth that fits perfectly for applications in research facilities, pilot labs, small scale powder handling, formulation labs and retrofitting
        into existing buildings where space is a premium. A form of &shy;&shy;containment providing product integrity, and operator/environmental protection.</p>
    </div>
    <div >
      <center>
        <img class="my-3 img-responsive" src="/images/product-images/thumb/down-flow-booths-min.png"  />
      </center>
    </div>
  </div>
  <p>&nbsp;</p>
  <p><a href="/products/ceiling-laminar-airflow/1"><strong><em>Ceiling Laminar Airflow Units</em></strong></a> can also be used since these units provide enhanced aseptic work zones by utilizing uni-directional airflow to positively
    pressurise and remove contaminants from the working environment.</p>
  <div >
    <div >
      <center>
        <img class="my-3 img-responsive" src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png"  />
      </center>
    </div>
    <div >
      <p>Esco Pharma&reg; offers services and solution to various applications such as but not limited to food handling and processing. Standard measures on containment and sterility must be assured to protect the food samples from any kind of contamination
        and cross contamination hence, providing accurate results.</p>
    </div>
  </div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'How SAFE is your FOOD?','meta_description' => 'How SAFE is your FOOD?','created_at' => '2017-08-30 15:39:09'],
  ['news_category_id' => '3','old_id' => '114','slug' => 'innovative-solutions-for-the-next-generation-esco-pharma-at-ispe-2017','title' => 'Innovative Solutions for the Next Generation: Esco Pharma at ISPE 2017','banner_img' => 'Esco-Pharma-at-ISPE-2017-thumb-min.jpg','banner_thumb' => 'Esco-Pharma-at-ISPE-2017-thumb-min.jpg','description' => '<p>The recently concluded International Society for Pharmaceutical Engineering (ISPE 2017) held last August 24-26, 2017 at Suntec Convention Center showcases different solutions for every pharmaceutical manufacturing needs.</p>','content' => '<div>
<p>The demand for safe and cost-effective medicine is at hyped, creating a challenge for most pharmaceutical industries manufacturing different kinds of dosage forms. These industries need continuous development on every processes such as but not limited to quality control, storage and packaging, hence striving to innovate to meet the demands of the consumers.</p>

<p>Consequently, the recently concluded International Society for Pharmaceutical Engineering (ISPE 2017) held last August 24-26, 2017 at Suntec Convention Center showcases different solutions for every pharmaceutical manufacturing needs.</p>

<center><img class="img-responsive" src="/images/upload/Esco-Pharma-at-ISPE-2017.jpg" /></center>

<p>Esco Pharma&reg;, one of the divisions under Esco Healthcare is a topnotch provider of pharmaceutical equipment giving innovative and flexible solutions that can fit with most of the processing requirements. The company showcased the Containment Barrier Isolator (CBI) integrated with Biological Safety Cabinet (BSC), a customizable unit for a client to adapt specific testing requirements.</p>

<p>Most of the visitors in the booth were very attentive as the product specialists explain the parts and the clinical applications of each unit. &nbsp;Moreover, the product specialists are also focused on assessing the process needs of each client while carefully recommending the right equipment for their products.</p>

<center><img class="img-responsive" src="/images/upload/Esco-Pharma-at-ISPE-2017-2.jpg" /></center>

<p>With continuous innovation, Esco Pharma&reg; provides specialist services, equipment packages and process solutions leading to improved protection of operators, reduction of cross-contamination and more efficient processing, thereby advancing occupational health and human healthcare. Thus, Esco Pharma&reg; absolutely meets <em>innovation for the next generation</em> on the field pharmaceutical engineering creating better products and services for a healthier life.</p>

<center><img class="img-responsive" src="/images/upload/esco-pharma-einesco.jpg" /></center>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Innovative Solutions for the Next Generation: Esco Pharma at ISPE 2017','meta_description' => 'Innovative Solutions for the Next Generation: Esco Pharma at ISPE 2017','created_at' => '2017-08-30 17:11:25'],
  ['news_category_id' => '1','old_id' => '115','slug' => 'it-s-more-than-just-being-fragile-how-to-handle-potent-formulation','title' => 'It\'s more than just being Fragile : How to Handle Potent Formulation?','banner_img' => 'it-s-more-than-just-being-fragile-how-to-handle-potent-formulation-min.jpg','banner_thumb' => 'it-s-more-than-just-being-fragile-how-to-handle-potent-formulation-min.jpg','description' => '<p style="text-align: justify;">Many modern medicines are highly potent, with only tiny doses required to achieve a therapeutic effect. But a nanomolar medicine poses extra hazards during manufacturing, whether the product is a biologic or a small molecule.</p>','content' => '<p style="text-align: justify;">Many modern medicines are highly potent, with only tiny doses required to achieve a therapeutic effect. But a nanomolar medicine poses extra hazards during manufacturing, whether the product is a biologic or a small molecule. These issues have to be evaluated and addressed in the design of a manufacturing facility for such products. Not only is it vital that the product not become contaminated, but employees and the general public must be protected from the product. Exposure to just a small quantity of a highly potent compound can pose significant health risks.</p>
<p style="text-align: justify;">Highly potent products have their individual manufacturing requirements. But the issues pertaining to safe handling are often common and not product specific. Potency is often a function of structural class, but it cannot be predicted for new molecules or new biological products without sufficient testing. A dramatic increase in development of new drugs, particularly in oncology, is more likely to require engineering controls for containment. Proper handling of these materials involves specialized facilities that are carefully designed to minimize containment risks.</p>
<p style="text-align: justify;"><strong>Facility Design</strong></p>
<p style="text-align: justify;">Some facility design requirements are common to all product types. Most significant type of facility design is known to be as <strong><em>process isolation</em></strong>. In this process, enclosed equipment such as sealed reactors and dryers are utilize for product transfer systems, thus, for moving materials through a process train. A facility should also be designed with equipment such as <a href="/products/compounding-isolator/38"><strong>isolators</strong></a><strong>, </strong><a href="http://www.escoglobal.com/product/laminar-flow-cabinets"><strong>laminar flow hoods</strong></a><strong>, and </strong><a href="/products/ventilated-balance-enclosure/29"><strong>local exhaust ventilation</strong></a> appropriate for potent compound handling.</p><center>
<div class="row">
<div class="col-md-6">
    <img class="center-block" src="/images/upload/cbi.png"/>
</div>
<div class="col-md-4">
    <img class="center-block" src="/images/upload/labculture.png" />
</div>

</div></center>
<p style="text-align: justify;">Airflow within the facility should be single pass to prevent cross-contamination or concentration of materials. Exhaust air should be filtered to ensure that escaping product is captured before its release to the external environment. In addition, proper air-pressure differentials must be established to keep potent compound&ndash;handling areas negative to all adjacent vestibules or airlocks. Equipment and facility engineering controls apply not only to the manufacturing areas, but also support areas such as process development and quality control laboratories.</p>
<p style="text-align: justify;">Even with extensive engineering controls, personnel working with potent compounds should wear suitable personal protective equipment (PPE), including respiration equipment for those working around the most potent products. Proper training on procedures for operation and maintenance of containment and isolation equipment is critical. Staff members must understand why the use of engineering controls is crucial for a manufacturing process.</p>
<p><strong>Product Categories</strong></p>
<p style="text-align: justify;">Before work begins on any drug product, it must be evaluated and characterized to assess potential hazards. For contract manufacturers, the first call is clearly to the customer, who should have information about a product&rsquo;s safety and toxicology. Other information can be gleaned by making comparisons with similar products with known toxicological properties. The drug is then categorized according to its potential hazards so correct handling procedures can be established.</p>
<p style="text-align: justify;">The performance-based exposure control limits (PBECL) categorization system links compound toxicity and potency to procedures for safe handling practices. This system was established in the late 1980s by health and safety departments within large pharmaceutical companies working on development projects for which insufficient data were available to determine occupational exposure limits (OELs). The industry uses many different categorization systems &mdash; including three, four, and five-tier systems &mdash; but this most common system has four categories.</p>
<p style="text-align: justify;"><strong>Category 1</strong>&nbsp;compounds are low potency with higher dosage levels. They have minimal acute or chronic health effects and good warning properties. These products will have no genetic effects and will not be sensitizers. Absorption will be slow, and no medical intervention will be required following exposure to them.</p>
<p style="text-align: justify;"><strong>Category 2</strong>&nbsp;compounds have moderate acute or chronic toxicity, but their effects are reversible. They may be weak sensitizers. Most have fair warning properties, a moderate absorption rate, and no genic effects, but medical intervention may be required after exposure to them.</p>
<p style="text-align: justify;"><strong>Category 3</strong>&nbsp;compounds have elevated potency, with high acute or chronic toxicity. These effects may be irreversible. The products may be moderate sensitizers, and their warning properties are likely to be poor or absent. Their absorption rates may be rapid, they may have suspected or known genic effects, and moderate to immediate medical intervention will be required. At SAFC Pharma, we consider this to be the default category.</p>
<p style="text-align: justify;"><strong>Category 4</strong>&nbsp;compounds have high potency and extreme acute and chronic toxicity. They cause irreversible effects and are likely to be strong sensitizers, with poor or no warning properties and a rapid absorption rate. These products will have known genetic effects and require a higher degree of medical intervention. They may also affect sensitive subpopulations to a greater extent than the public overall.</p>
<p style="text-align: justify;">All potent products fall into category 3 or 4, depending on their cumulative risk factors. Requirements for containment and protection vary among the categories, and the precise ways they are put into practice differ. The details depend on whether a product is an infectious biologic such as a viral vector or vaccine, a highly potent small molecule (made by chemical reaction or fermentation), or an antibody drug conjugate that links a biologic to a potent small molecule.</p>
<p><strong>Containment of Hazards</strong></p>
<p style="text-align: justify;">A facility manufacturing a high-potency active pharmaceutical ingredient (API) will resemble a standard API manufacturing plant, but it will house additional containment equipment (such as isolators and single air-pass systems) and facility engineering controls. For nonhazardous chemicals, ingredients can usually be added to an open reactor. For highly potent compounds, they cannot. To prevent escape, everything must be sealed throughout the manufacturing process, from raw material addition to the reactor through to the packaging of a final product.</p>
<p style="text-align: justify;">For a <strong>category 1 molecule</strong> &mdash; which offers little risk during manufacturing &mdash; generally safe laboratory practices and gowning are sufficient. Open handling may be acceptable for small quantities of product, but local ventilation is advisable for handling larger quantities. However, no containment is needed. Standard laboratory practices and gowning are enough for <strong>category 2 </strong>as well, but the cut-off point for local ventilation is lower, and containment is needed for high-energy, dust-generating operations such as milling.</p>
<p style="text-align: justify;">If a molecule falls into <strong>category 3,</strong> then it requires high-potency manufacturing methods. Operators need additional gowning and respiratory protection when handling powders, which should not be handled openly. Although small quantities of such products can be handled within a laminar-flow enclosure, processing at large scale presents more complex challenges. Operators wear protective clothing, but process isolation equipment is the primary control at our company. Additional facility controls need to be in place for containment, notably closed-system solution and solid transfers, even at glassware scale. Material handling takes place in an isolator glove box, and charge bottles are filled with raw materials, which are added to reactors through closed-system technologies such as &alpha;&ndash;&beta; valves.</p>
<p style="text-align: justify;"><strong>Category 4 </strong>products (the most hazardous) require full gowning and supplied-air respiratory protection in a specialized facility in addition to all the requirements for category 3. In addition to full containment of all solutions and powders as well as restrictions against open handling, deactivation and/or verifiable dissolution and rinsing are required for cleaning.</p>
<p style="text-align: justify;">Using process isolation and containment equipment is the most important means of protection. By ensuring that an entire manufacturing process is carried out in closed systems &mdash; from raw materials to product packaging &mdash; the chances of employee exposure can be minimized.</p>
<p><strong>Requirements for Different Product Types</strong></p>
<p style="text-align: justify;">Many general requirements for chemical API plants are the same for facilities manufacturing highly potent biologics, but there are some important differences.&nbsp;<strong>Viral vectors and vaccines </strong>are manufactured in sealed <a href="http://www.vaccixcell.com/products-and-brands/bioreactors-and-fermenters/#content"><strong>bioreactors</strong></a>, and because they are infectious, these products must be carefully contained. Operators and the public must be protected in the event of an escape. As with chemical facilities, air should be single-pass and HEPA-filtered, with each manufacturing suite exhausting separately through further HEPA filters to prevent cross-contamination. People, equipment, and raw materials should all flow from clean to dirty areas, with exit vestibules providing the final line of containment.</p>
<center>
<div class="rows"><img src="/images/upload/pf-img2.png" width="50%" hspace="12" /></div></center>
<p style="text-align: justify;">TideCell&reg; High Density bioreactor system is the extended large scale system of the lab scale CelCradle&reg; bioreactor system. In this system, a matrix vessel is packed with porous BioNoc&trade; II carriers and functions as an artificial lung with huge contact surface for nutrition and aeration.</p>
<p style="text-align: justify;">Cross-contamination is an even greater issue with virus-based products. One means of prevention is the use of <a href="http://www.vaccixcell.com/products-and-brands/tide-motion-bioreactor/#content"><strong>disposable bioreactors</strong></a> with a minimum of hard piping. This eliminates the problem of infectious materials remaining inside bioreactors after cleaning and sterilization. Each reactor itself is sealed once a process is finished and product isolated, and the remains are disposed of as a biohazard. Single-use technology might seem to add cost through consumables, but it removes the need for cleaning and validation, which allows much faster changeover between different products. That&rsquo;s particularly important in multipurpose facilities that produce many different viruses and vaccines.</p>
<center><div class="rows"><img src="/images/upload/pf-img3.png" width="50%"  hspace="12" /></div></center>
<p style="text-align: justify;">CelCradle&trade; is a disposable bioreactor capable of high-density cell culture for protein expression, virus, and monoclonal antibody production. It is designed based on the concept of bellow-induced intermittent flow of media and air through porous matrices, where cells reside. This provides a low shear, high aeration, and foam-free culture environment.</p>
<p style="text-align: justify;">An&nbsp;<strong>antibody&ndash;drug conjugate</strong>&nbsp;combines an antibody that targets a specific site in a patient&rsquo;s body with a small-molecule payload that provides a therapeutic effect. As high-potency small molecules become more frequent in bioconjugates, containment issues become crucial. Not only do the chemical issues have to be considered, but manufacturing the antibodies also requires a biologic facility &mdash; and biologic and chemical facilities have very different requirements. Facilities designed for conjugating antibodies to small-molecule potent compounds must combine the two facility types to ensure that containment, cleaning, and proper aseptic handling techniques are incorporated.</p>
<p style="text-align: justify;">It makes more sense when designing a facility for manufacture of antibody&ndash;drug conjugates to introduce chemical handling capabilities into a facility designed for biological manufacturing rather than vice versa. This can be done by installing a <a href="http://tapestlerx.com/products/containment-barrier-isolator-3"><strong>containment isolator</strong></a> (complete with airlock, rapid transfer port, and utility connection plate) into an aseptic environment that also contains a biological safety cabinet and other equipment necessary for biologics. Essentially, introducing all the equipment for high-potency API manufacture within a biologics facility adds greatly to its complexity.</p>
<p style="text-align: justify;"><strong>Secondary metabolites</strong>&nbsp;involve current good manufacturing practice (CGMP) compliant manufacture of highly potent small-molecule drugs using biologic systems, generally organisms such as yeast or fungi. A growing number of APIs and advanced intermediates are being manufactured in bioreactors. Just like small-molecule pharmaceutical chemical products, their containment issues depend on the precise nature of each chemical, so a full assessment must first be carried out to evaluate the risks. If the purified product poses enough risk, then purification process will need to be carried out under containment.</p>
<center>
<div class="rows"><img src="/images/upload/pf-img4.png" width="50%" hspace="12" /></div></center>
<p style="text-align: justify;">Containment Barrier Isolator (CBI) integrated with a Biological Safety Cabinet (BSC) made out of full stainless steel</p>
<p style="text-align: justify;">If a secondary metabolite product is highly potent, then a combination of biological-and chemical-enhanced containment will be necessary, with level 2 large-scale biological safety alongside the ability to isolate highly potent compounds up to category 4. Each separate manufacturing suite will require single-pass HEPA air supply and separate exhaust complete with room pressure differentials and full airlocks and vestibules around each manufacturing suite as well as directional flow (from clean to dirty) of personnel, materials, and waste. For multipurpose facilities of this type, strict changeover procedures must be observed using automated steam-and clean-in-place (SIP and CIP).</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'It&rsquo;s more than just being Fragile : How to Handle Potent Formulation?','meta_description' => 'It&rsquo;s more than just being Fragile : How to Handle Potent Formulation?','created_at' => '2017-09-25 00:00:00'],
  ['news_category_id' => '1','old_id' => '116','slug' => 'nanotechnology-containment-strategies-and-engineering-controls','title' => 'Nanotechnology: Containment Strategies and Engineering Controls','banner_img' => 'cosmetics_img1.jpg','banner_thumb' => 'cosmetics_img1.jpg','description' => '<p style="text-align: justify;">Control measures for nanoparticles, dusts, and other hazards should be implemented within the context of a comprehensive occupational safety and health management system [ANSI/AIHA 2012].</p>','content' => '<p style="text-align: justify;">Control measures for nanoparticles, dusts, and other hazards should be implemented within the context of a comprehensive occupational safety and health management system [ANSI/AIHA 2012]. The critical elements of an effective occupational safety and health management system include management commitment and employee involvement, worksite analysis, hazard prevention and control, and sufficient training for employees, supervisors, and managers.</p>
<p style="text-align: justify;">In developing measures to control occupational exposure to nanomaterials, it is important to remember that processing and manufacturing involve a wide range of hazards. Conducting a preliminary hazard assessment (PHA) encompasses a qualitative life cycle analysis of an entire operation, appropriate to the stage of development:</p>
<ul style="text-align: justify;">
<li> Chemicals/materials being used in the process</li>
<li> Production methods used during each stage of production</li>
<li> Process equipment and engineering controls employed</li>
<li> Worker&rsquo;s approach to performing job duties</li>
<li> Exposure potential to the nanomaterials from the task/operations</li>
<li> The facility that houses the operation</li>
</ul>
<p style="text-align: justify;">PHAs are frequently conducted as initial risk assessments to determine whether more sophisticated analytical methods are needed and to prepare an inventory of hazards and control measures needed for these hazards. As part of the assessment, the health and safety professional should evaluate the magnitude of the emissions (or potential emissions) and the effects of exposure to these emissions. PHAs are an important first step toward developing control measures that can be considered during the planning stage. Essentially, hazard control should be an integral component of facility, process, and equipment design and construction. This includes design for inherent process safety. The use of engineering controls should be considered as part of a comprehensive control strategy for hazards associated with processes/ tasks that cannot be effectively eliminated, substituted for, or contained through process equipment modifications.</p>
<ol style="text-align: justify;" type="A">
<li><strong>Prevention through Design (PtD)</strong></li>
</ol>
<p style="text-align: justify;">The concept of Prevention through Design (PtD) is to design out or minimize hazards, preferably, early in the design process. PtD is also called inherent or intrinsic safety, safety by design, design for safety, and safe design. When PtD is implemented, the control hierarchy is applied by designers (e.g., engineers, architects, industrial designers) and business leaders (e.g., owners, purchasers, managers) who consider the benefits of designing safety into things external to the worker to prevent work-related injuries and illnesses.</p>
<p style="text-align: justify;">Other PtD strategies can be considered:</p>
<ul style="text-align: justify;">
<li>Limiting process inventories by producing the nanomaterials as they are consumed in the process.</li>
<li>&nbsp;Operating a process at a lower energy state (e.g., lower temperature or pressure), which typically results in lower fugitive emissions and therefore safer operation.</li>
<li>Using fail-safe devices where possible. Fail-safe devices are designed so that if they fail, the system reverts to a safer condition. An example of a fail-safe device is a valve controlling a reagent for a reaction. If the safe condition for the system is for this valve to be closed, the fail-safe valve would automatically close in the event of a failure.</li>
<li>Installing a closed transport system to eliminate worker exposures during transport activities.</li>
</ul>
<p style="text-align: justify;">PtD strategies typically do not include administrative controls and personal protective equipment (PPE) as the primary controls. These measures require worker interaction with the process or active steps to limit the extent of the hazard. Most effective PtD approaches reduce or eliminate hazardous conditions without relying on input from workers. Humans are generally recognized as being much less reliable than most machines, particularly in emergencies [Kletz 2001]. The use of administrative controls and PPE in PtD strategies is generally for redundancy&mdash;further safeguards should the primary control fail.</p>
<ol style="text-align: justify;" start="2" type="A">
<li><strong>OELs as Applied to Nanotechnology</strong></li>
</ol>
<p style="text-align: justify;">Occupational exposure limits (OELs) are useful in reducing work-related health risks by providing a quantitative guideline and basis to assess the worker exposure potential and the performance of engineering controls and other risk management approaches. Currently, no regulatory standards for nanomaterials have been established in the United States. However, NIOSH has recently published two current intelligence bulletins (CIBs) regarding occupational exposures to nanomaterials. In a CIB on titanium dioxide (TiO2 ), NIOSH recommends exposure limits of 2.4 mg/m3 for fine TiO2 and 0.3 mg/m3 for ultrafine (including engineered nanoscale) TiO2 , as time-weighted average (TWA) concentrations for up to 10 hours per day during a 40-hour work week [NIOSH 2011]. In a CIB on carbon nanotubes and nanofibers, NIOSH recommends that worker exposure be limited to no more than 1 &micro;g/m3 [NIOSH 2013].</p>
<p style="text-align: justify;"><strong>1.3.3 Control Banding</strong></p>
<p style="text-align: justify;">Control banding is a qualitative risk characterization and management strategy, intended to protect the safety and health of workers in the absence of chemical and workplace standards. Control banding groups workplace risks into hazard bands based on evaluations of hazard and exposure information [NIOSH 2009b]. Note that control banding is not intended to be a substitute for OELs and does not alleviate the need for environmental monitoring or industrial hygiene expertise.</p>
<p style="text-align: justify;">To determine the appropriate control scheme, one should consider the characteristics of the substance, the potential for exposure, and the hazard associated with the substance. Four main control bands, based on an overall risk level, have been developed:</p>
<ul style="text-align: justify;">
<li> Good industrial hygiene (IH) practice, general ventilation, and good work practices</li>
<li> Engineering controls including fume hoods or local exhaust ventilation</li>
<li> Containment or process enclosure allowing for limited breaks in containment</li>
<li> Special circumstances requiring expert advice</li>
</ul>
<p><strong>Engineering Controls</strong></p>
<ul type="disc">
<li style="text-align: justify;">Work with nanomaterials in ventilated enclosures (e.g., glove box, laboratory hood, process chamber) equipped with high-efficiency particulate air (HEPA ) filters.</li>
<li style="text-align: justify;">Where operations cannot be enclosed, provide local exhaust ventilation (e.g., capture hood, enclosing hood) equipped with HEPA filters and designed to capture the contaminant at the point of generation or release.</li>
</ul>
<div class="row">
<div class="col-sm-4"><img style="display: block; margin-left: auto; margin-right: auto; width: 70%;" src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" />
<p align="center"><a href="/products/ceiling-laminar-airflow/1">Ceiling Laminar Air Flow (CLAF)</a></p>
</div>
<div class="col-sm-4"><img style="display: block; margin-left: auto; margin-right: auto; width: 74%;" src="/images/product-images/thumb/down-flow-booths-min.png" />
<p align="center"><a href="/products/downflow-booths/3">Downflow Booth (DFB)</a></p>
</div>
<div class="col-sm-4" ><img style="display: block; margin-left: auto; margin-right: auto; width: 74%;" src="/images/product-images/thumb/soft-capsule-soft-wall-cleanroom-min.png" />
<p align="center"><a href="/products/soft-wall-cleanroom/15">Soft Wall Capsule Cleanroom</a></p>
</div>
</div>
<div class="row" style="clear: both;">
<div class="col-sm-12">
<p align="center"><a href="/products"><strong>AIRFLOW CONTAINMENT</strong></a></p>
<p>Reference:</p>
<p style="text-align: justify;">Current Strategies for Engineering Controls in Nanomaterial Production and Downstream Handling Processes, Department of Health and Human Services, Centers for Disease Control and Prevention, National Institute for Occupational Safety and Health</p>
</div>
</div>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Nanoparticles in Cosmetics: Beauty Beyond Borders','meta_description' => 'Nanoparticles in Cosmetics: Beauty Beyond Borders','created_at' => '2017-09-26 00:00:00'],
  ['news_category_id' => '1','old_id' => '117','slug' => 'a-perfect-mate','title' => 'A Perfect Mate','banner_img' => 'perfect_mate.png','banner_thumb' => 'perfect_mate.png','description' => '<p style="text-align: justify;">Trevose, PA - Esco Pharma USA Factory has mated the Esco Weighing and Dispensing Containment Isolator (WDCI) with the Esco Frontier Acela (EFA) Fume Hood. </p>','content' => '
<p style="text-align: justify;">Trevose, PA &ndash; Esco Pharma USA Factory has mated the Esco Weighing and Dispensing Containment Isolator (WDCI) with the Esco Frontier Acela (EFA) Fume Hood. This integrated system simplifies the workflow from weighing and dispensing of potent raw materials, to combining with other materials to make a sample slurry or solution, up to wet chemical analysis. The three-way pass chamber allows a product to be transferred between operations while maintaining maximum personnel protection.</p>
<p style="text-align: justify;">The Esco WDCI is an advanced containment system providing a controlled negative pressure environment to maximize personnel protection during weighing and dispensing of potent products, handling of new chemical entities, and containing of these compounds during sub-division and sampling processes. It is designed for handling potent compounds that fall under Occupational Exposure Band (OEB) Category 5 down to 5 ng/m<sup>3</sup> containment protection over an 8-hour TWA.</p>
<p style="text-align: justify;">Esco&rsquo;s largest range of standard inbuilt configurations allows users to operate for different processes and research and development needs. It is configured with a turbulent airflow with push-push safe change filters allowing maximum containment. Low chamber pressure permits stable and accurate dispensing and weighing of highly potent substances.</p>
<div class="row">
<div class="col-sm-8">
<p style="text-align: justify;">Esco WDCI is constructed with fully-welded single piece Outokumpu stainless steel internal chambers with round coved corners. An integrated vacuum oven placed on an elevated surface level inside the isolator provides a fast and economical way of drying sample materials for weighing and dispensing.</p>
<p>&nbsp;</p>
<p style="text-align: justify;">The isolator is equipped with a nitrogen purge system with oxygen analyzer to maintain an inert environment within the chamber for the processing of potentially explosive dust/gases or hygroscopic products.</p>
  <p style="text-align: justify;">A positively pressurized ventilated cabinet underneath the isolator houses the thermostat control module (TCM) which supplies hot or cold process utilities inside the isolator and the fume hood. The inbuilt retort stands in this system allows chemistry process. It also has utility supplies and pass-throughs for process control and measurement devices.</p>
</div>
<div class="col-sm-4" float:right;"><img class="center-block" src="/images/upload/Internal-Chamber-with-Oven.jpg" width="72%"  style="padding: 10px; margin-left: 45px;" /><p class="text-center"><em>Internal chamber showing integrated oven</em></p></div>
</div>


<div class="row">
<div class="col-sm-8">
<p style="text-align: justify;">The isolator is connected to the fume hood through a pass chamber with interlock mechanism ensuring safety and environment purge sequences between door opening or closures.</p>

<p style="text-align: justify;">The EFA is designed to provide personnel protection against toxic fumes, vapors, and dust. It is also equipped with dual stage Bag-in Bag-out (BIBO) filters, a safe change method for removing contaminated filters. Its secondary function includes protection against chemical spills, runaway reactions, and fires by acting as a physical barrier.</p>
  <p style="text-align: justify;">Based on a patented airflow technology, the EFA has unique Hot Zone Baffle design that draws most contaminants back in single pass displacement of the air. With this design, thermal heat relief is quickly achieved. The EFA boasts this exceptional design as it provides a robust stream of bypass air into the hood cavity. The aerodynamic foil entry brings in maximum airflow &ldquo;sweep&rdquo; on the critical boundary layer. This helps reduce turbulence and eliminate backflow.</p>
  <p style="text-align: justify;">The Sentinel XL facilitates real-time monitoring of the face velocity in EFA. The system generates an alarm once the face velocity is lower or higher than the set points.</p>
</div>
<div class="col-sm-4" float:right;"><img class="center-block" src="/images/upload/pass-through-to-fume-hood.jpg" width="72%"  style="padding: 10px; margin-left: 45px;" /><p class="text-center"><em>Pass chamber connected to fume hood</em></p></div>
</div>


<p style="text-align: justify;">Esco provides complete integrated containment solutions for every known hazard from chemical processing, potent material handling, aeroallergens, biohazards, and radioactive material manipulation &ndash; fume hoods to lead-lined isolators and biosafety cabinets. Utilizing Esco&rsquo;s own designed and manufactured equipment from its Laboratory and Pharmaceutical Divisions allows single full control over design changes and customization to provide a truly integrated solution to meet the client\'s needs.</p>
<p style="text-align: justify;">Esco Pharma boasts its strengths on multiple manufacturing sites - Singapore, United Kingdom, and the United States, allowing them to serve customers globally. These three locations utilize the same engineering standards to serve the international market and produce quality equipment with components which are available internationally. Fully certified by ISO 9001, 14001 18001, 13486, Esco is the only company with distributed manufacturing sites but with direct sales and service support from local Esco offices.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">Contact Esco Pharma to learn more about Esco&rsquo;s broad range of integrated solutions such as Pharmacon&trade; Downflow Booths with Flow Hoods and Biological Safety Cabinets.</p>
<p style="text-align: justify;">Esco Technologies Inc &ndash; Pharma Division</p>
<p style="text-align: justify;">Eti.pharma@escoglobal.com</p>
<p style="text-align: justify;">215-322-2155</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'A Perfect Mate','meta_description' => 'A Perfect Mate','created_at' => '2017-09-27 00:00:00'],
  ['news_category_id' => '3','old_id' => '118','slug' => 'esco-pharma-is-at-two-places-at-once','title' => 'Esco Pharma is at Two Places at Once','banner_img' => 'two-places-at-one.jpg','banner_thumb' => 'two-places-at-one.jpg','description' => '<p style="text-align: justify;">Last September 25-27, the Esco Pharma USA team showcased the Esco VacciXcell Cell Processing Isolator at the Healthcare Packaging Expo in Las Vegas, USA.</p>','content' => '
<p style="text-align: justify;">Esco Pharma is committed in delivering innovative technologies and discoveries to help make the world a safer, healthier, and better place to live in. To uphold its vision, Esco Pharma actively participated in two exhibitions to showcase cutting-edge solutions for various application.</p>
<div class=\'row\'>
  <div class=\'col-sm-8\' style=\'width:62%; float: left; \'>
<p style="text-align: justify;">Last September 25-27, the Esco Pharma USA team showcased the Esco VacciXcell Cell Processing Isolator at the <strong>Healthcare Packaging Expo</strong> in Las Vegas, USA. This annual event gathers 250 exhibitors and 5,000 professionals exploring end-to-end solutions for pharmaceutical, biological, and neutraceutical industries.</p>
<p style="text-align: justify;">The Esco VacciXcell Cell Processing Isolator is a one-stop solution that integrates various cell processing equipment in a cGMP isolator necessary for aseptic bioprocessing. Visitors tried and experience to work inside the isolator with a little entertainment by playing a Vegas-themed game &ndash; Mini Roulette. Lucky winners got a chance to take home exciting prizes from Esco.</p>
<p style="text-align: justify;">The attendees also consulted Esco Pharma experts for the full range of solutions for aseptic filling.</p>
    <p style="text-align: justify;">On a separate location, the Esco Pharma UK team highlighted products and services at the <strong>ISPE 2017 Europe Biotechnology Conference</strong> in Dublin, Ireland last September 26-27, 2017. The interest from attendees and quality of the conference sessions demonstrated the continued investment and growth of biopharmaceuticals in Ireland.</p>
<p style="text-align: justify;">Esco looks forward to catering to valued inquiries and continued support of this market from our UK and US manufacturing locations and local Ireland representation. As an international organization with localized manufacturing for each major region, Esco takes delight in delivering products and ensuring local support from initial inquiry to post-delivery service.</p>
  </div>
  <div class="col-sm-4" style="width:300px; float:right;padding: 35px;">
    <img src="/images/upload/two-places-at-one-img2.jpg" width="100%"  style="/*margin-left: 25px;*/" /><p align=\'center\'><em>Attendees playing the Mini-Roulette game</em></p>
  </div>
</div>

<p style="text-align: justify;">Esco Pharma would like to thank everyone for the opportunity to connect with you. See you in the succeeding exhibitions.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma is at Two Places at Once','meta_description' => 'Esco Pharma is at Two Places at Once','created_at' => '2017-10-05 00:00:00'],
  ['news_category_id' => '2','old_id' => '119','slug' => 'esco-life-sciences-and-healthcare-is-strengthening-its-core-in-biocontainment','title' => 'Esco Life Sciences and Healthcare is Strengthening its Core in Biocontainment','banner_img' => 'Esco-Life-Sciences-and-Healthcare-is-Strengthening-its-Core-in-Biocontainment.jpg','banner_thumb' => 'Esco-Life-Sciences-and-Healthcare-is-Strengthening-its-Core-in-Biocontainment.jpg','description' => '<p style="text-align: justify;">From the world&rsquo;s most certified Biological Safety Cabinet manufacturer, Esco is now the only manufacturer of biocontainment solutions with vertically integrated and regional factories to provide customized Class III Biological Safety Cabinets which exceed international standards from NSF 49 to EN 12469.</p>','content' => '
<p style="text-align: justify;">From the world&rsquo;s most certified Biological Safety Cabinet manufacturer, Esco is now the only manufacturer of biocontainment solutions with vertically integrated and regional factories to provide customized&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.escoglobal.com/category/class-iii-cabinets/" target="_blank" rel="noopener">Class III Biological Safety Cabinets</a></span>&nbsp;which exceed international standards from NSF 49 to EN 12469.</p>
<p style="text-align: justify;">The latest addition to the series of Class III Biological Safety Cabinet, Containment Barrier Isolator&ndash;III (CBI-III), is designed from the isolation containment expertise of Esco. It comes with food-grade seals, automated pressure hold testing, safe-change gloves, and fully-welded single-piece carcass with coved corners for primary process and pass-through chambers.</p>
<p style="text-align: justify;">Compared to other Esco Class III cabinets such as&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.escoglobal.com/product/biological-safety-cabinets/class-iii-biological-safety-cabinets/AC3-B/" target="_blank" rel="noopener">Esco Airstream Class III</a>&nbsp;</span>(AC3), the CBI-III is constructed of internal 316L and external 304 Outokumpu stainless steel with full sheet metal traceability. It is ergonomically designed allowing ease of material handling with a sloped front for operators in both sitting and standing position. The CBI-III front sloped visors are manufactured from tempered glass with a single side laminate. This material prevents scratches due to harsh biological and hazardous cleaning reagents. &nbsp;CBI-III also comes with a built-in exhaust fan that guarantees that the negative (-ve) pressure within the chamber is maintained even in the event of building exhaust failure and glove breach conditions.</p>
<p style="text-align: justify;">CBI-III is equipped with a dedicated control system to monitor, control, and provide an alarm, based on the environmental conditions inside the chambers. The system runs on Programmable Logic Controller (PLC) with Human Machine Interface (HMI) which is designed to meet 21 CFR part 11 compliance and GAMP 5 software requirements. It can also be incorporated into plant SCADA systems such as WonderWare, Siemens Pcs7, or DeltaV.</p>
<p style="text-align: justify;">Esco provides options for either Esco BioVap&trade; biodecontamination utilizing atomized hydrogen peroxide or a system using ammonia/formalin. Both systems are automatically controlled through an integrated HMI/PLC-based control and monitoring system. Esco BioVap provides a 6-log reduction of biological hazards within the work zone and can also be used to decontaminate even within flasks or spots that are difficult to reach. These biodecontamination systems also ensure product and operator safety when handling BSL 3 and BSL 4 applications as well as during filter maintenance. Gas cycles are developed as part of client\'s full loading within the cabinet by Esco-trained microbiologist team and field service engineers.</p>
<p style="text-align: justify;">An optional integrated&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.escoglobal.com/category/class-ii-bsc/" target="_blank" rel="noopener">Class II&nbsp;</a></span>Biological Safety Cabinet is available to meet the user&rsquo;s need. The Class II Biological Safety Cabinet is connected to CBI-III through either a static or dynamic pass-through chamber utilizing inflatable seals ensuring a seamless transfer. An easy-to-decontaminate sliding tray facilitates the transfer of materials from one chamber to another.</p>
<p style="text-align: justify;">As an integrated system, CBI-III can accommodate other equipment such as an autoclave, microscope,&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.escoglobal.com/category/co2-incubators/" target="_blank" rel="noopener">CO2&nbsp;incubator</a></span>,&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.escoglobal.com/category/laboratory-centrifuge/" target="_blank" rel="noopener">centrifuge</a></span>, and&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.escoglobal.com/category/lab-ovens/" target="_blank" rel="noopener">oven</a></span>, among others providing a complete and contained work environment for maximum biosecurity. Additional options and accessories like biodunk tank and HVAC skids designed and manufactured in-house are also available.</p>
<p style="text-align: justify;">Inherently designed as an isolator, a total system integration with CBI-III, Class II Biological Safety Cabinet, and<span style="box-sizing: border-box; text-decoration: underline;">&nbsp;<a href="http://www.vaccixcell.com/tide-technology/Tide-Motion-CelCradle-TideCell-VacciXcell/#content" target="_blank" rel="noopener">Tide Motion bioreactors</a></span>&nbsp;can be achieved. Tide Motion bioreactors such as&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.vaccixcell.com/products-and-brands/tidecell/#content" target="_blank" rel="noopener">TideCell&reg;</a></span>&nbsp;and&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><a href="http://www.vaccixcell.com/products-and-brands/vaccixcell-hybrid-bioreactor/#content" target="_blank" rel="noopener">Hybrid bioreactor</a></span>, are perfect for the production of secreted and non-secreted viruses, oncolytic viruses and virus-like particles, adeno-associated viruses (AAV) and lentiviruses (LV) for human/animal vaccines, cell and gene therapy, antibody drug conjugates (ADC) production, and other large molecule bioprocessing.</p>
<p style="text-align: justify;">Other bioreactor systems incorporated into fermentation as well as other applications within the cosmeceutical and healthcare industry can be integrated with CBI-III.</p>
<p style="text-align: justify;">Esco continues to innovate and advance its status as the leading supplier of world-class Biological Safety Cabinets aiding in vaccine and virus biologics production. It promotes biosecurity and biosafety programs in countries with high biocontainment facilities for allergy and infectious diseases, food &amp; agricultural research, aerobiology, military &amp; defense, science &amp; technology, and other national institutes of health worldwide.</p>
<p style="text-align: justify;">Globally, Esco is the only company with proprietary isolators and patented bioreactors manufactured in its factories in USA, UK, and Asia. It is also the only global manufacturer able to provide the widest range of biocontainment tools offering both standard and customized Class I, Class II (Types A2, B1, and B2), and Class III Biological Safety Cabinets. With its direct presence in more than 25 countries and a network of 100 distributors and representatives, Esco has the world&rsquo;s largest number of NSF 49 field certifiers to provide the ultimate security in after-sales service.&nbsp;</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Life Sciences and Healthcare is Strengthening its Core in Biocontainment','meta_description' => 'Esco Life Sciences and Healthcare is Strengthening its Core in Biocontainment','created_at' => '2017-10-18 00:00:00'],
  ['news_category_id' => '1','old_id' => '120','slug' => 'the-horror-behind-the-gross-art-of-sneeze-and-cough','title' => 'The Horror Behind the Gross Art of Sneeze and Cough','banner_img' => 'sneeze-and-cough.jpg','banner_thumb' => 'sneeze-and-cough.jpg','description' => '<p style="text-align: justify;">A single coughs expels thousands of tiny droplets of saliva. An estimate of 3,000 droplets are expelled in a single cough with an average speed of 50 miles per hour. But a sneeze is even worse.</p>','content' => '
<p style="text-align: justify;">But a sneeze is even worse.</p>
<p style="text-align: justify;">A sneeze can produce as many as <strong><em>40,000 droplets</em></strong> with a speed greater than 200 miles per hour. Most droplets less than 100 microns in size, which is a size comparable to human hair</p>
<p style="text-align: justify;">The heavier the droplets are, the faster they tend to fall to the ground. While the lighter and smaller droplets are less affected by gravity. They remain suspended in the air, hence, the term <em>airborne.</em></p>
<p style="text-align: justify;">While the lighter droplets automatically become airborne particles, it is not an assurance that the heavier droplets will remain stagnant on the ground. Movements inside a room can disturb the heavier droplets, making them also airborne. Opening a door can dramatically disturbed the airflow inside a room, spreading the contaminants even more.</p>
<p style="text-align: justify;">More movement means higher possibility of producing airborne particles, thus, affecting the safety and purity of drug products. In order to minimize this kind of contamination, a clean room is required specifically for those products that are intended to be consumed by human, either in a sterile or non-sterile form.</p>

<p style="text-align: justify;">Most airborne diseases like tuberculosis (TB) is also transmitted through airborne particles. TB patients accessing services at healthcare facilities require access to facilities for sputum induction and collection. Sputum induction and collection is considered a high risk activity due to the nature of TB transmission and the methods normally used. Facilities that can minimized contamination is needed during sputum testing and collection and the best accepted equipment to control contaminants for these processes is the sputum booth.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/product-images/thumb/Sputum-Booth-min.png" width="30%" /></p>

<p style="text-align: justify;">A cleanroom is a specially constructed room in which the concentration of airborne particles is controlled, with respect to airborne particulates, temperature, humidity, airflow patterns, air motion and pressure. (ISO)</p>
<p style="text-align: justify;">Moreover, sets of equipment are also recommended to maintain the efficacy of cleanrooms. Esco Pharma offers the Cross Contamination Facility Integrated Barrier (CCFIB). These equipment can prevent contamination in all forms, keeping the product sterile while providing optimum protection for the operator and the environment &ndash; living a life with <strong><em>NO FEAR.</em></strong></p>
<p>References:</p>
<p>1. Keegan, Natalie. February 2017. <em>Time to Put Your Hand Up</em>. Retrieved from https://www.thesun.co.uk/living/2784458/this-is-how-far-germs-from-a-cough-or-sneeze-can-travel-and-its-utterly-gross/, accessed last October 27, 2017</p>
<p>2. Jaslow, Ryan.&nbsp; April 2014. <em>Gross! Coughs and Sneezes from Travelling Disease Clouds</em>. Retrieved from https://www.cbsnews.com/news/gross-coughs-and-sneezes-form-traveling-disease-clouds/, accessed last October 27, 2017</p>



<table class="table table-bordered" width="0">
<tbody>
<tr>
<td valign="top" width="222">
<p><a href="/products/cleanroom-air-showers/7"><img class="center-block" src="/images/product-images/thumb/Cleanroom-air-showers-min.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td width="426">
<p align="center"><a href="/products/cleanroom-air-showers/7">Cleanroom Airshowers</a></p>
<p>Air Showers are self-contained chambers installed at entrances to cleanrooms and other controlled environments. They minimize particulate matter entering or exiting the clean space. Personnel and materials entering or exiting the controlled environment are "scrubbed" by high velocity HEPA-filtered air jets with velocities of 20-22m/s (4000-4300fpm). Contaminated air is then drawn through the base within the unit, filtered and recirculated.</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/biopass-pass-through/6"><img class="center-block" src="/images/product-images/thumb/Biopas-2-min-thumb.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td width="426">
<p align="center"><a href="/products/biopass-pass-through/6">BioPass&trade; Pass Through</a></p>
<p>Floor standing airtight transfer chamber with onboard ventilation and integrated hydrogen peroxide based biodecontamination system designed for passing large equipment into a ISO Class 5 cleanroom in an aseptic manner.</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/garment-storage-cabinet/11"><img class="center-block" src="/images/product-images/thumb/garment-storage-cabinet-min.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td width="426">
<p align="center"><a href="/products/garment-storage-cabinet/11">Laminar Flow Storage Cabinet</a></p>
<p>Cleanroom garments and accessories can accumulate contamination during storage and between laundry washes, which in turn may lead to lower product yields and increased product quality issues. Laminar flow storage cabinets make a positive contribution to maintaining the cleanliness of a cleanroom environment.</p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/dynamic-passboxes-dynamic-floor-laminar-hatches/8"><img class="center-block" src="/images/product-images/thumb/dynamic-pass-boxes-min.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td width="426">
<p align="center"><a href="/products/dynamic-passboxes-dynamic-floor-laminar-hatches/8">Dynamic Passboxes and Floor Label Hatches</a>&nbsp;</p>
<p>Dynamic Passboxes and Dynamic Floor Label Hatches are aseptic architectural systems utilized to prevent contaminants from leaking into aseptic suits. They are utilized for aseptic transfer of materials into and out from the critical process environments.</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/soft-wall-cleanroom/15"><img class="center-block" src="/images/product-images/thumb/soft-capsule-soft-wall-cleanroom-min.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td width="426">
<p align="center"><a href="/products/soft-wall-cleanroom/15">Esco Soft Capsule Soft Wall Cleanroom</a>&nbsp;</p>
<p>Esco Soft Capsule Soft Wall Cleanrooms are an ideal solution when clean air areas need to be created on a small to mid scale. Flexible and economical, they may be easily relocated when application requirements change. Esco offers a complete range of soft wall cleanrooms to meet various construction, dimensional and cleanliness class requirements.</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/laminar-flow-horizontal-vertical-trolley/4"><img class="center-block" src="/images/product-images/thumb/laminar-flow-horizontal-vertical-trolley-min.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td width="426">
<p align="center"><a href="/products/laminar-flow-horizontal-vertical-trolley/4">Dynamic Passboxes and Dynamic Floor Label Hatches</a>&nbsp;</p>
<p>Dynamic Passboxes and Dynamic Floor Label Hatches are aseptic architectural systems utilized to prevent contaminants from leaking into aseptic suits. They are utilized for aseptic transfer of materials into and out from the critical process environments.</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/esco-air-shower-pass-box/9"><img class="center-block" src="/images/product-images/thumb/Infinity-air-shower-pass-box-min.png" width="60%" border="0" hspace="12" /></a></p>
</td>
<td rowspan="2" width="426">
<p align="center"><a href="/products/esco-air-shower-pass-box/9">Infinity&reg; Air Shower Pass Box</a> and <a href="/products/cleanroom-transfer-hatch/14">Transfer Hatch</a></p>
<p>Controlling the ingress of particulate contamination into cleanrooms and other controlled environments is paramount in order to maintain the integrity of products and processes. Personnel traffic is the most important factor which must be controlled. Esco Pass Boxes and Transfer Hatches are an effective solution as they allow materials to be transferred into the controlled environment without actual personnel movement. They may also be used to protect the external environment from egress of contamination, for example, in biological safety laboratory applications.</p>
</td>
</tr>
<tr>
<td valign="top" width="222">
<p><a href="/products/cleanroom-transfer-hatch/14"><img class="center-block" src="/images/product-images/thumb/infinity-cleanroom-transfer-hatch-min.png" width="60%" border="0" /></a></p>
</td>
</tr>
</tbody>
</table>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'The Horror Behind the Gross Art of Sneeze and Cough','meta_description' => 'The Horror Behind the Gross Art of Sneeze and Cough','created_at' => '2017-10-27 00:00:00'],
  ['news_category_id' => '1','old_id' => '121','slug' => 'survivor-101-safe-change-filtration','title' => 'Survivor 101: Safe Change Filtration','banner_img' => 'survivor-banner-min.jpg','banner_thumb' => 'survivor-banner-min.jpg','description' => '<p>Safe change filtration was originally designed to handle radiopharmaceuticals for the nuclear market. In more recent times, this technology has been extended and utilized for the handling of most pharmaceutical compounds.</p>','content' => '<p>Safe change filtration was originally designed to handle radiopharmaceuticals for the nuclear market. In more recent times, this technology has been extended and utilized for the handling of most pharmaceutical compounds. Safe change filtration allows
	the changing of the ULPA or the HEPA filter without exposing the operator, minimizing the risk of contact to any potent and hazardous substance.</p>
<p>The bag-in, bag-out filter housings are equipped with PVC or PE bags to seal the filter-housing during filter replacement. Some systems have gloves sealed into the bags for easier handling of the filter elements. Because of the size of typical bag-in, bag-out systems, they are installed above the clean room in the technical area. The filter housing can be equipped with an automatic filter scanning system to proof the filter tightness.</p>
<p>Equipped with HEPA filters, an isolator is capable of containing the hazardous drugs compounded. HEPA filters then have direct contact and contain high level of hazardous drug concentration. This poses an occupational risk during HEPA filter replacements.</p>
<p>In Esco Pharma, every equipment can be configured to have a safe change filter replacement. Filters of the isolators can be upgraded for example to BIBO.</p>
<p><strong>BIBO Safe Change</strong> &nbsp;</p>
<p style="text-align: justify;">It utilizes a Bag-in, Bag-out Filter to safely remove the filter after biodecontamination. It provides protection against exposure for the maintenance personnel and the environment.&nbsp;</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/survivor-img1.png" class="my-3" alt="rx_eblast_safe-change - bibo.png" width="40%" /></p>
<p><strong>Low-Contamination Filter Change</strong></p>
<p style="text-align: justify;">Filter change is done inside the closed isolator, through the glove ports. The used filter is placed in a safety disposal bag and removed from the isolator through the pass chamber. This provides a minimal exposure to the maintenance personnel and environment.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/survivor-img2.png" class="my-3" alt="rx_eblast_safe-change - low contaminatio.png" width="40%" /></p>
<p><strong>Safe Change Procedure</strong></p>
<p style="text-align: justify;">Facilities shall develop SOPs for safe change of HEPA filters such as wearing of appropriate PPE. The filter should be changed and the scrap filter be placed in a safety disposal bag. However, among the methods for safe filter change, this is the least
	effective because the only protection you have is the PPE.&nbsp;</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/survivor-img3.png" class="my-3" alt="rx_eblast_safe-change - safe change.png" width="40%" /></p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Survivor 101: Safe Change Filtration','meta_description' => 'Survivor 101: Safe Change Filtration','created_at' => '2017-11-07 00:00:00'],
  ['news_category_id' => '3','old_id' => '122','slug' => 'esco-pharma-gb-exhibited-at-c-ph-i-and-p-mec-in-germany','title' => 'Esco Pharma GB exhibited at CPhI and P-Mec in Germany','banner_img' => 'gb-exhibited-at-cphl-and-p-mec-min.jpg','banner_thumb' => 'gb-exhibited-at-cphl-and-p-mec-min.jpg','description' => '<p style="text-align: justify;">Esco GB Ltd &ndash; Pharma Division was thrilled to be one of the exhibitors at CPhI Worldwide last October 24-26, 2017 at Messe Frankfurt, Germany.</p>','content' => '</p>
<p style="text-align: justify;">Esco GB Ltd &ndash; Pharma Division was thrilled to be one of the exhibitors at CPhI Worldwide last October 24-26, 2017 at Messe Frankfurt, Germany.</p>
<p style="text-align: justify;">CPhI and P-Mec Worldwide hosted the world&rsquo;s largest pharmaceutical platform, bringing together top buyers and suppliers in the industry under one roof.</p>
<p style="text-align: justify;">This event paved the way for Esco GB - Pharma to meet with global partners, existing and new customers. Featured in the booth was a representation of Esco Downflow Booth with High Containment Screen. Visitors were engaged in a more fun learning experience by playing with giant Jenga blocks through the high containment screen, which stimulated the ease of operation of this piece of equipment.</p>
<p style="text-align: justify;">Esco Downflow Booths provide an operator, process and/or product protection by utilizing HEPA-filtered unidirectional laminar downflow to maintain an ISO 5 environment at rest within the work zone and entrain particulates during open handling processes. Incorporating a high containment screen achieves an operator exposure level of 1-10 &micro;g/m<sup>3</sup>.</p>
<p style="text-align: justify;">Esco provides complete integrated containment solutions for every known hazard and clean air requirements from potent material handling, aseptic/sterile filling, sterility testing, chemical processing, aeroallergens, biohazards, and radioactive material manipulation. Utilizing Esco&rsquo;s own designed and manufactured equipment from its Laboratory and Pharmaceutical Divisions allows single full control over design changes and customization to provide a truly integrated solution to meet the client\'s needs.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma GB exhibited at CPhI and P-Mec in Germany','meta_description' => 'Esco Pharma GB exhibited at CPhI and P-Mec in Germany','created_at' => '2017-11-08 00:00:00'],
  ['news_category_id' => '2','old_id' => '123','slug' => 'bio-decontamination-within-the-efficiency-of-esco-bio-vap-inside-the-isolators','title' => 'Bio-decontamination Within The Efficiency of Esco BioVap™ Inside the Isolators','banner_img' => 'esco-biovap-banner.jpg','banner_thumb' => 'esco-biovap-banner.jpg','description' => '<p style="text-align: justify;">Esco BioVap<strong>&trade;</strong> is a bio-decontamination system that utilizes atomized hydrogen peroxide to decontaminate the chamber and the equipment prior and after operations</p>','content' => '<p style="text-align: justify;">Esco BioVap<strong>&trade;</strong> is a bio-decontamination system that utilizes atomized hydrogen peroxide to decontaminate the chamber and the equipment prior and after operations. The atomization of the hydrogen peroxide is achieved through simultaneous injection of the solution and pressurized air thereby delivering a fine mist that will saturate the chamber. After injection, the solution is allowed to &ldquo;dwell&rdquo; to increase contact time thereby efficiently utilizing antimicrobial the activity. Finally, filtered air is allowed to enter the chamber after the excess hydrogen peroxide has been exhausted, until the concentration reaches the safe level of about &lt;1 ppm.</p>
<p style="text-align: justify;">Esco validation specialists with the help of the in-house microbiologists, have proved that the Esco BioVap<strong>&trade;</strong> can decontaminate not only the nominal part of the cabinet but also the hard-to-reach areas. Hard-to-reach areas are identified as the chamber&rsquo;s corners and gloves, and the inner surface of the <em>labware</em> inside the isolator.</p>
<center><img src="/images/upload/esco-biovap-img1.jpg" width="42%" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/images/upload/esco-biovap-img2.jpg" width="40%" />
<p style="font-size: 13px;"><em>For the experiment, erlenmeyer flask (left) was used as a sample laboratory glassware since it can be contaminated easily because of its &ldquo;wide-mouth&rdquo; opening. The chemical indicator (3M of Hydrogen Peroxide) was placed inside the flask. The biological indicator attached in the inner areas of the gloves was inoculated with 6 log of Geobacillus stearothermophilus.</em></p>
</center>
<p>&nbsp;</p>
<p style="text-align: justify;">The biological and the chemical indicators are either on different sampling points. The chemical indicator is placed in the <em>labware</em> while the biological indicators are placed in the various points of the cabinet as shown below:</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/esco-biovap-img3.jpg" alt="" width="50%" /></p>
<p>For this experiment, the bio-decontamination cycle using Esco BioVap<strong>&trade;</strong> took 113 minutes from the priming until the aeration.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/esco-biovap-img4.jpg" width="60%" /></p>
<p style="text-align: justify;">After the cycle was finished, all the indicators were removed. The results obtained have no significant different to the passing criteria. Change of colors are observed in the chemical indicators and no turbidity is seen on all of the biological indicators, hence, there are no contamination observe.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/esco-biovap-img5.jpg" alt="" width="80%" /></p>
<p style="text-align: center; font-size: 13px;"><em>The Esco BioVap&trade; is effective for the overall decontamination of the isolators. There are no growth of microorganisms observed,since no turbidity took place (left photo) and changed of colors (right photo) is obtained from the chemical indicator.</em></p>
<p>&nbsp;</p>
<p style="text-align: justify;">The results indicated that the H<sub>2</sub>O<sub>2</sub> mist injected by the Esco BioVap<strong>&trade;</strong> could reach all the sampling points and saturate the cabinet enough to kill 6 log of <em>Geobacillus stearothermophilus </em>spore even on the inner part of the <em>labware</em>. Although the H<sub>2</sub>O<sub>2</sub> generated by the Esco BioVap<strong>&trade;</strong> is not in a gas phase, due to the pressured air, the fine mist injected from the nozzle of the Esco BioVap<strong>&trade;</strong> was distributed evenly during the injection phase.</p>
<p style="text-align: justify;">The experiment has established that Esco BioVap<strong>&trade;</strong> with atomized hydrogen peroxide system can decontaminate hard-to-reach areas of the isolator such as its corners, gloves, and insides of<em> labware</em> inside the isolator.</p>
<p style="text-align: justify;">Esco BioVap<strong>&trade; </strong>is developed to be flexible enough to work in all areas, from cabinets and transfer hatches up to modular enclosures to isolator to meet all the customers&rsquo; process and product requirements. No pre-conditioning is needed, thus, reducing the bio-decontamination cycle.</p>
<a href="/products/general-processing-platform-isolator-gppi/45"><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" alt="General Processing Platform Isolator (GPPI)" title=" General Processing Platform Isolator (GPPI)" class="product-img center-block"></a>
<p align="center" style="font-size: 13px;"><em>A General Processing Platform Isolator (GPPI) integrated with Esco BioVap<strong>&trade;.</strong></em></p>
<p style="text-align: justify;">&nbsp;</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Bio-decontamination Within The Efficiency of Esco BioVap&trade; Inside the Isolators','meta_description' => 'Bio-decontamination Within The Efficiency of Esco BioVap&trade; Inside the Isolators','created_at' => '2017-11-28 00:00:00'],
  ['news_category_id' => '2','old_id' => '124','slug' => 'raising-your-standards-with-esco-downflow-booth-airflow-containment-on-its-best','title' => 'Raising Your Standards with Esco Downflow Booth Airflow Containment on Its Best','banner_img' => 'esco-downflow-booth-airflow-containment.jpg','banner_thumb' => 'esco-downflow-booth-airflow-containment-thumb.jpg','description' => '<p style="text-align: justify;">The fundamental principle of Downflow Booth is to provide operator protection during the handling of nuisance, toxic, or sensitizing products either in a powder or liquid form.</p>','content' => '<p style="text-align: justify;">The fundamental principle of <a href="/products/downflow-booths/3">Downflow Booth</a> is to provide operator protection during the handling of nuisance, toxic, or sensitizing products either in a powder or liquid form. Air is delivered to the Operator&rsquo;s Breathing Zone (OBZ) through the overhead HEPA filters, thus providing a clean and safe environment. Potential dust clouds are suppressed and removed into the exhaust filtration system.</p>
<p style="text-align: justify;">The operator carries out tasks in the high-velocity zone at the rear of the Booth so that dangerous dust will not rise into the breathing zone.</p>
<a href="/products/downflow-booths/3"><img src="/images/product-images/thumb/down-flow-booths-min.png" alt="Downflow Booths" title="Pharmacon™ Downflow Booths" class="product-img my-3 center-block"></a>
<p><a href="/products/downflow-booths/3">Downflow Booths</a> are versatile equipment that can:</p>
<ul>
<li>Control exposure risk from hazardous materials for a wide variety of equipment and processes</li>
<li>Provide <a href="/solutions/oel-oeb">Operator Exposure Levels (OEL&rsquo;s)</a> &le;100 &micro;g/m&sup3; over an 8-hour Time&nbsp;&nbsp; Weighted Average (TWA) when used with proper operator&nbsp; techniques</li>
<li>Reduce levels to &le;10 &mu;g/m&sup3; by incorporating High Containment Screens for the most potent products</li>
<li>Enhance cGMP practices during powder handling operations</li>
<li style="list-style: none;"></li>
</ul>
<p style="text-align: justify;">Esco <a href="/products/downflow-booths/3">Downflow Booths</a> can be widely used for many different applications to various industries such as providing contamination control for operators. Typical applications include dispensing, sub-division, milling and grinding, process pack off and charging. These are used in applications that require high-degree of flexibility for containment assurance. The standard open layout allows easy access for both personnel and materials entry. Although the standard Booth range offers a practical solution to most operations, customising the size and layout to suit other processes and product requirements can also be done. End user involvement is actively sought at all stages, from the design to the built of the equipment, creating a flexible and controlled facility to suit the changing work practices.</p>
<p style="text-align: justify;">Operator protection can also be acquired by customizing the layout of the booth and integrating high containment screens and personnel and material airlocks.</p>
<p style="text-align: justify;">High containment screens provide an actual physical barrier between the operator and the product. The operator works through large ergonomically positioned oval glove ports with Hypalon glass. High containment screen allows multi direction movement for the operators&rsquo; freedom to move left, right, front, back, and even rotate whilst being protected. From OEL of &le;100 &micro;g/m&sup3;, the integration of this screen gives as much as &le;10 &micro;g/m&sup3; over an 8-hour TWA.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img1.png" width="30%" hspace="12" /></p>
<p align="center"><em>An example of a lay-out of a Downflow Booth (DFB) integrated with High Containment Screen.</em></p>
<p style="text-align: justify;">Aside from High Containment Screens, customized operator workstation can also be done. All powder handling operations are kept behind the door where the exhaust flow is the greatest. Operator is totally segregated from the product, thus, this arrangement is particularly useful for levels between 10 to 50 &micro;g/m&sup3;.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img2.png" width="50%" hspace="12" /></p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img3.png" width="60%" hspace="12" /></p>
<p align="center"><em>The integration of split level workbench for powder subdivisions.</em></p>
<p align="center"><em>&nbsp;</em></p>
<p>Split level workbench is designed to suit applications which involve sub dividing products from larger drum to smaller container.</p>
<p>Airlock Booths are used to ensure that no contaminated air enters the booth from the warehouse area. Incoming air is controlled by positively charging the airlocks with HEPA-filtered air prior to entering the Booth at low level. With these control processes, it is possible to achieve between 10-50 &micro;g/m&sup3; <a href="/solutions/oel-oeb">OEL</a> when sampling to defined SOP&rsquo;s.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/dfb_img4.png" width="50%" hspace="12" /></p>
<p align="center"><em>An example of a layout of a Downflow Booth (DFB) with airlock.</em></p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Raising Your Standards with Esco Downflow Booth Airflow Containment on Its Best','meta_description' => 'Raising Your Standards with Esco Downflow Booth Airflow Containment on Its Best','created_at' => '2017-11-29 00:00:00'],
  ['news_category_id' => '3','old_id' => '125','slug' => 'esco-pharma-at-the-52-nd-ashp-midyear-clinical-meeting-and-exhibition-2017','title' => 'Esco Pharma at the 52nd ASHP Midyear Clinical Meeting and Exhibition 2017','banner_img' => 'esco-pharma-at-the-52nd-ashp-midyear-clinical-meeting-and-exhibition-2017-min-min.jpg','banner_thumb' => 'esco-pharma-at-the-52nd-ashp-midyear-clinical-meeting-and-exhibition-2017-min-min.jpg','description' => '<p style="text-align: justify;">With USP &lt;800&gt; being pushed back to a later official date, pharmacies are now given more time to prepare their facilities to comply with the guideline. Esco recognizes this as an opportunity to equip manufacturing companies and compounding facilities optimum solutions for every process and product needs.</p>','content' => '
<p style="text-align: justify;">With USP &lt;800&gt; being pushed back to a later official date, pharmacies are now given more time to prepare their facilities to comply with the guideline. Esco recognizes this as an opportunity to equip manufacturing companies and compounding facilities optimum solutions for every process and product needs.</p>
<p style="text-align: justify;">In relation to compliance with primary engineering controls (PEC) requirements of USP &lt;800&gt;, Esco Pharma USA showcased various solutions for hazardous compounding of both sterile and non-sterile drugs last <em>December 4-6</em> at the <em>52nd ASHP Midyear Clinical Meeting &amp; Exhibitions in Orlando, Florida</em>.</p>
<p style="text-align: justify;">Esco <a href="/products/ventilated-balance-enclosure/29">Ventilated Balance Enclosure (VBE)</a> is explicitly designed for stability and accuracy while maintaining a high level of operator protection by containing hazardous airborne powders. Through the aerodynamic design of sash and armrest, and the sectionalized baffle, the airborne particles are well contained inside the enclosure and exhausted through a HEPA filter or direct to the pharmacy exhaust. Esco VBE is your trusted partner in providing protection when handling non-sterile hazardous compounds.</p>
<p style="text-align: justify;">The <a href="/products/compounding-isolator/38">Streamline&reg; Compounding Isolator (SCI)</a> is suitable for work involving hazardous drugs such as, antineoplastic/cytotoxic compounding applications. The work zone and pass-through interchange are under negative pressure to the room to maintain operator protection in cases of a breach in the barrier isolation system.</p>
<table style="height: 284px; width: 100.375%; border-collapse: collapse;" border="0" cellpadding="0">
<tbody>
<tr style="height: 266px;">
<td style="width: 50%; height: 225px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/booth-2.jpg" width="226" height="264" hspace="12" /></td>
<td style="width: 50%; height: 225px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/Booth-1.jpg" width="226" height="266" hspace="12" /></td>
</tr>
<tr style="height: 18px;">
<td style="width: 50%; height: 10px; text-align: center; vertical-align: top;">
<p><em>Esco&nbsp;Ventilated Balance Enclosure</em></p>
</td>
<td style="width: 50%; height: 10px; text-align: center; vertical-align: top;">
<p><em>Esco&nbsp;Ventilated Balance Enclosure</em><br /><em>Streamline Compounding Isolator</em><br /> <em>(Total Exhaust)</em></p>
</td>
</tr>
</tbody>
</table>
<p style="text-align: justify;">Esco always associates fun with learning. The visitors were put to the test by matching pairs of cards showing Esco&rsquo;s diverse range of equipment for pharmacy compounding, playing inside Esco isolator and ventilated balance enclosure. Exciting prizes were given away to the best matchmakers.</p>
<table style="width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr>
<td style="width: 50%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/player.jpg" width="170" height="227" hspace="12" /></td>
<td style="width: 50%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/Winner.jpg" width="290" height="217" hspace="12" /></td>
</tr>
<tr>
<td style="width: 50%;">
<p align="center"><em>Attendee playing the memory game through the isolator</em></p>
</td>
<td style="width: 50%;">
<p align="center"><em>Winners of the Esco Memory Game</em></p>
</td>
</tr>
</tbody>
</table>
<p>Esco would like to thank everyone for the opportunity to learn and network. &nbsp;We are one with the pharmacy community in creating THE FUTURE!</p>
<p>See you again next year!</p>
<p>Contact Esco Pharma USA to learn more about our pharmacy solutions.</p>
<p>Esco Technologies Inc<br />2512 Metropolitan Dr,<br />Trevose, PA<br />T: 215-322-2155<br />E: eti.pharma@escoglobal.com</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Pharma at the 52nd ASHP Midyear Clinical Meeting and Exhibition 2017','meta_description' => 'Esco Pharma at the 52nd ASHP Midyear Clinical Meeting and Exhibition 2017','created_at' => '2017-12-15 00:00:00'],
  ['news_category_id' => '3','old_id' => '126','slug' => 'isolator-like-hot-cells-are-burning-this-2018','title' => 'Isolator-like hot cells are burning this 2018!','banner_img' => 'nuclear_industry.jpg','banner_thumb' => 'nuclear_industry.jpg','description' => '<p style="text-align: justify;">The nuclear energy industry plays an important role in job creation and economic growth, providing both near-term and lasting employment and economic benefits. The nearly 100 reactors in the United States generate substantial domestic economic value in electricity sales and revenue—&dollar;40 billion to &dollar;50 billion each year—with more than 100,000 workers contributing to that production.</p>','content' => '<p style="text-align: center; font-size: 12px;"><em>The nuclear energy industry plays an important role in job creation and economic growth, providing both near-term and lasting employment and economic benefits. The nearly 100 reactors in the United States generate substantial domestic economic value in electricity sales and revenue&mdash;$40 billion to $50 billion each year&mdash;with more than 100,000 workers contributing to that production</em>.</p>
<p style="text-align: justify;"><strong><em>Zero containment</em></strong> is the blueprint of most manufacturing companies for the design and built of cleanroom facilities especially for radioactive material handling and processing.&nbsp; In the production area where every process entails a greater need for shielded facilities with well controlled ventilation, careful planning along with a containment specialist is required. The use of radioactive materials is evolving rampantly, thus, containment solutions must also progress with growing emphasis on the optimization of protection and safety.&nbsp;</p>
<p style="text-align: justify;">The recent developments in the use of radioisotopes created an immense impact on the amendments of most of the international guidelines and regulations currently being complied by the manufacturing facilities and production laboratories. The current Good Manufacturing Practice (cGMP) requires improvements in the construction of isolator-like hot cells and clean rooms with HEPA-filtered ventilation and air conditioning (HVAC) systems. (IAEA, 2014).</p>
<p style="text-align: justify;">Over time, isolator-like hot cells are used for the first extraction cycle of a nuclear reprocessing. This process is considered as a highly active cycle and requires lead shielding. These equipment are arranged in the manufacturing facilities in series or in blocks. Conventional hot cells are usually made of ordinary mild steel covered by good quality epoxy resin paint or stainless steel. Alternatively, since radioisotope production is evolving, shielding with lead, lead glass, or depleted uranium eventually arose.</p>
<p style="text-align: justify;">Adequate shielding is given the first priority with provision for accident conditions. Lead and to a lesser extent steel, are used for smaller equipment while high density concrete are utilized for the manufacture of large isolator-like hot cells. Moreover, possible increase on operations and the complexity of processes should also be considered at the planning stage.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/nuclear_industry_2.jpg" width="60%" align="center" hspace="12" /></p>
<p style="text-align: justify;">Here in Esco, we offer customization of every equipment including those that are used in the handling of radioisotopes. We have an in-house containment solution specialist and a team of architect and engineers that can help you plan, design, and build the containment facility of your choice.</p>
<p>References:</p>
<ol>
<li>Nuclear Energy Institute. <em>Why Nuclear Energy. </em>Retrieved from <a href="https://www.nei.org/Issues-Policy/Economics/">https://www.nei.org/Issues-Policy/Economics/</a>. Accessed last 12/28/2017</li>
</ol>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'ISOLATOR-LIKE HOT CELLS ARE <em>BURNING</em> THIS 2018!','meta_description' => 'ISOLATOR-LIKE HOT CELLS ARE <em>BURNING</em> THIS 2018!','created_at' => '2018-01-04 00:00:00'],
  ['news_category_id' => '1','old_id' => '127','slug' => 'ketamine-the-solution-to-stopping-suicide','title' => 'Ketamine: The Solution To Stopping Suicide?','banner_img' => 'ketamine-img1.jpg','banner_thumb' => 'ketamine-img1.jpg','description' => '<p style="text-align: justify;">Ketamine, a N-methyl-d-aspartate antagonist, is a legal prescription medication indicated as a painkiller, sedative, anesthetic, and anti-depressant. Ketamine&rsquo;s use as an antidepressant and a post-traumatic stress disorder (PTSD) treatment is gaining
    more attention, and so further investigational researches are being conducted.</p>','content' => '<p style="text-align: justify;">Ketamine, a N-methyl-d-aspartate antagonist, is a legal prescription medication indicated as a painkiller, sedative, anesthetic, and anti-depressant. Ketamine&rsquo;s use as an antidepressant and a post-traumatic stress disorder (PTSD) treatment is gaining
    more attention, and so further investigational researches are being conducted.</p>
<p><strong>What&rsquo;s New?</strong></p>

<p style="text-align: justify;">A research published by the American Journal of Psychiatry has recently found out that ketamine may lessen the tendencies of depressed people with suicidal thoughts. The effects appear to be much faster than any medication existing within the course of
    treatment.</p>
<p style="text-align: justify;">A study from Columbia University Medical Center and the New York State Psychiatric Institute identified that ketamine produced mood improvements upon testing to a certain group of depressed patients. A low-dose ketamine was compared against midazolam,
    a sedative, to 80 patients who were actively considering suicide. After 24 hours, ketamine was found to be significantly more effective at controlling imminent thoughts for about one-third of the patients.</p>
<p style="text-align: justify;">According to Dr. Michael Grunebaum, <em>&ldquo;Additional research to evaluate ketamine\'s antidepressant and anti-suicidal effects may pave the way for the development of new antidepressant medications that are faster-acting and have the potential to help individuals who do not respond to currently available treatments.&rdquo;</em> This just says that the possibilities for ketamine are endless, and the need for it to be manufactured into a larger scale for the usage of patients is pivotal for the advancement of not just healthcare, but of society.</p>
<p><strong>How Is It Compounded?</strong></p>
<p align="center"><img src="/images/upload/ketamine-img2.jpg" width="60%" class="my-3" />&nbsp;</p>
<p style="text-align: justify;">Ketamine, a non-hazardous sterile drug, is compounded in a strict enclosed environment devoid of any harmful microbes that could contaminate the drug. According to USP 797, compounding facilities should be physically designed and environmentally controlled
    to minimize airborne contamination from contacting critical sites.</p>
<p style="text-align: justify;">The facilities should also provide a comfortable and well-lighted working environment. The Primary Engineering Controls (PEC) should maintain an ISO Class 5, or even better conditions for 0.5-&micro;m particles while compounding CSPs. The airflow inside
    the PEC should have a unidirectional laminar flow, also requiring for the &ldquo;first air&rdquo; at the face of the filter to be free from airborne contamination.</p>
<p style="text-align: justify;">For large scale manufacturing, ketamine can be prepared by using sampling isolators which provide a high level of operator protection against hazardous and sensitizing materials during product sampling process. They are ideally situated in warehouses and production areas for processes such as raw material and active pharmaceutical ingredient sampling, which in this case is ketamine.</p>
<p style="text-align: justify;">In lieu with this, <a href="/">Esco Pharma</a> provides equipment which fit the needs for compounding and handling sterile preparations, such as ketamine.</p>
<p style="text-align: justify;">The <a href="/products/general-processing-platform-isolator-gppi/45">General Processing Platform Isolator (GPPI)</a> is used as a barrier to provide biologically free environment for aseptic and potent formulation and other related processes requiring sterile environment and containment solutions. For a fully contained environment during active product handling, containment solution that provides uncompromised total barrier isolation is in need. <a href="/products/containment-barrier-isolator-u/30">Containment Barrier Isolator (CBI)</a> facilitates the isolation of a product or process while providing the required conditions for a sterile/aseptic formulation.</p>
<p style="text-align: justify;">One of the main goals of Esco Pharma to aid in producing notable pharmaceuticals and giving the best personnel and product protection. The public can be assured that with continuous innovation, from discovery to delivery of drugs, quality is built into
    the products with the use of Esco Pharma&rsquo;s equipment.</p>
<p>&nbsp;</p>
<p><strong>References:</strong></p>
<ol>
    <li>Nield, D. (2017) Ketamine Can Ease Suicidal Thoughts Within Hours, Study Shows. Retrieved on 21 Dec 2017 from<a href="https://sciencealert.com/ketamine-eases-suicidal-thoughts-depression-within-hours"> https://sciencealert.com/ketamine-eases-suicidal-thoughts-depression-within-hours</a></li>
    <li>2016 U.S. Pharmacopoeia-National Formulary [USP 39 NF 34]. Volume 1. Rockville, Md: United States Pharmacopeial Convention, Inc; 2015. &lt;797&gt; Pharmaceutical Compounding &ndash; Sterile Preparations.</li>
    <li>Vande Voort, J., et. al. (2017) Antisuicidal Response Following Ketamine Infusion Is Associated With Decreased Nighttime Wakefulness in Major Depressive Disorder and Bipolar Disorder. The Journal Of Clinical Psychiatry, 78(8), 1068-1074. http://dx.doi.org/10.4088/jcp.15m10440</li>
</ol>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Ketamine: The Solution To Stopping Suicide?','meta_description' => 'Ketamine: The Solution To Stopping Suicide?','created_at' => '2018-01-04 00:00:00'],
  ['news_category_id' => '1','old_id' => '128','slug' => 'esco-healthcare-welcomes-2018','title' => 'Esco Healthcare Welcomes 2018!','banner_img' => 'esco-healthcare-welcomes-2018-min.jpg','banner_thumb' => 'esco-healthcare-welcomes-2018-min.jpg','description' => '<p style="text-align: justify;"><strong>Esco Healthcare</strong>, a member of the Esco Group of companies, is comprised of 3 divisions namely, Esco Pharma, TaPestle Rx, and Esco VacciXcell.&nbsp;Altogether, these 3 divisions aim&nbsp;to make your 2018 a year of continuous learning for unsurmountable growth and development.</p>','content' => '

<p style="text-align: justify;"><strong>Esco Healthcare</strong>, a member of the Esco Group of companies, is comprised of 3 divisions namely, Esco Pharma, TaPestle Rx, and Esco VacciXcell.&nbsp;Altogether, these 3 divisions aim&nbsp;to make your 2018 a year of continuous learning for unsurmountable growth and development.</p>

<p align="center"><a href="http://www.escopharma.com/"><img class="img-responsive" src="/images/logos/ESCO-Pharma.png" style="display: block; margin-left: auto; margin-right: auto;" width="45%" /></a></p>

<p>&nbsp;</p>

<p style="text-align: justify;">With the evolving markets and more stringent regulatory requirements, the demand for flexible containment solutions increases.&nbsp;<strong>Esco Pharma</strong> continues to innovate, design, and revolutionize equipment such as, but not limited to, isolators, downflow booths, pass boxes, and ventilated balance enclosures for every manufacturing processes. Since most clients need a smaller footprint because of space constraints, <strong>Esco Pharma</strong> also provides custom products that can be configured based on the clients&rsquo; needs and requirements. The core technologies from isolation through ventilation containment are the company&rsquo;s platform to improve operator protection and reduce cross-contamination while maintaining efficient processing in the pharmaceutical and biopharmaceutical industries. Through the use of isolators, grade A large cleanroom ballparks, full-suits Personnel Protective Equipment (PPE), and the use of additional cleanroom garments are eliminated, emphasizing the SAFETY DOESN&rsquo;T HAVE TO WORN!</p>

<p>&nbsp;</p>

<p align="center"><a href="http://tapestlerx.com/"><img class="img-responsive" src="/images/logos/tapestle-min.png" style="display: block; margin-left: auto; margin-right: auto;" width="50%" /></a></p>

<p>&nbsp;</p>

<p style="text-align: justify;">The rise of a stricter regulatory requirements for healthcare facilities and laboratories would increase the demand for experts and specialists in this field. <strong>TaPestle Rx</strong>, the pioneer in automation-centered architecture, promises to continue its expertise in delivering state-of-the-art facilities. <strong>TaPestle Rx</strong> also envisions a world where pharmacy processes, such as compounding, dispensing, and drug administration, are done safely and consistently by providing various solutions to every pharmacy compounding need. In the coming year, <strong>TaPestle Rx&rsquo;s</strong> pursuit for excellence will continue. This 2018, expect continuous development in our diverse isolator line and our strengthened dedication in research and development.</p>

<p>&nbsp;</p>

<p align="center"><a href="http://www.vaccixcell.com/"><img class="img-responsive" src="/images/logos/Esco-VXL-min.png" style="display: block; margin-left: auto; margin-right: auto;" width="50%" /></a></p>

<p style="text-align: justify;">Biopharmaceutical companies will be changing in the coming years and this change will come rather rapidly. &nbsp;<strong>Esco Vaccixcell</strong> will continue to develop, adopt, and adapt to these coming trends to make bioprocessing cost-effective, faster, and simpler. The promise of next generation therapies, in spite the encountered challenges, have made <strong>Esco VacciXcell </strong>to reemerge as a division capable of producing successful biologics at a low cost. Its platform to provide the complete solution for bioprocessing needs paves a future to meet expectations for clinical success.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => 'Esco Healthcare Welcomes 2018!','meta_description' => 'Esco Healthcare Welcomes 2018!','created_at' => '2018-01-05 00:00:00'],
  ['news_category_id' => '1','old_id' => '129','slug' => 'blood-cell-labeling-101','title' => 'Blood Cell Labeling 101','banner_img' => 'Blood Cell Labeling 101-min.jpg','banner_thumb' => 'Blood Cell Labeling 101-min.jpg','description' => 'Variety of methods for the labeling of erythrocytes (red blood cells or RBC), leukocytes (white blood cells or WBC), and thrombocytes (platelet) have been established, employing either Tc-99m or In-111 as two of the most common radionuclides','content' => '<p>Variety of methods for the labeling of erythrocytes (red blood cells or RBC), leukocytes (white blood cells or WBC), and thrombocytes (platelet) have been established, employing either Tc-99m or In-111 as two of the most common radionuclides.<sub>&nbsp; </sub>Cardiovascular
  blood pool imaging, detection of GI bleeding and hemangioma, localization of inflammatory lesions, and thrombus detection are some of the applications in which blood cell labeling is utilized.</p>
<p><strong>Erythrocytes </strong></p>
<center><img src="/images/upload/Erythrocytes.jpg" class="img-responsive" /></center>
<p>The methodology of RBC labeling is the most common of all the blood cell labeling to the point wherein several test kits are now available. In-111-oxine and Tc-99m-HMPAO (Hexamethylpropyleneamineoxime) are two of the most available test kits for non-specific
  techniques involving the use of lipophilic chelates through passive diffusion. Hence, the use of RBCs includes five major areas such as the following:</p>
<ol style="list-style-type: lower-alpha;">
  <li>measurement of the total RBC volume,</li>
  <li>measurement of the RBC survival time,</li>
  <li>identification of sites of RBC destruction,</li>
  <li>blood pool imaging studies, and</li>
  <li>selective spleen imaging</li>
</ol>
<p><strong>Thromboyctes</strong></p>
<p>Platelets are extremely important physiologic mediator of clot formation and generation. According to a study (Coller et al., 1983), aside from In-111 and Tc-99m radionuclides such as I-123 and I-131 are also used for the same purpose. Labeling with I-123
  and I-131 is equally effective in comparison with Tc-99m or In-111, since these isotopes of iodine yield an estimate of 80% binding capacity depending upon the reaction conditions.</p>
<p><strong>Leukocytes</strong></p>
<center><img src="/images/upload/Leukocytes.jpg" class="img-responsive" /></center>
<p>Studies on WBC labeling are still preliminary, although, promising researches (Locher et al., 1986) have been concluded that these blood components can locate abscesses and other inflammatory lesions. Tc-99m is the most preferred radionuclide with its
  90% binding capacity although I-123 is more favored in cases of chronic lesions.</p>
<p><strong>Facility Requirements for Blood Cell Labeling</strong></p>
<p>Personnel and facility requirements are necessary to prevent operator exposure from the norms of radionuclides since the use of radionuclides is apparent in blood cell. In a document made by the Tygerberg Hospital and Stellenbosch University, several
  guidelines have been established for blood cell labeling.</p>
<p>A cleanroom with an ISO Class 7 or Grade C condition is required for blood cell labelling. Air monitoring for viable and non-viable particles should be performed regularly depending on the processes being handled inside a specific cleanroom. &nbsp;According
  to ISPE&rsquo;s Sterile Manufacturing Facilities Guide, a cleanroom should maintain &ldquo;<em>a strict design regime, not only on the process area, but [also] on the interactions with surrounding areas and the movement of people, materials, and equipment, so as not to compromise the aseptic conditions</em>.&rdquo;
  &nbsp;&nbsp;</p>
<p>Laminar Air Flow (LAF) cabinets and isolators should maintain an ISO Class 5 environment. Regular checks for the filter integrity (using dioctyl phthalate), air velocity, airflow patterns (using smoke test), and particle count should be made monthly (maximum)
  or quarterly (maximum). It is advisable that HEPA filters should be replaced every 2-3 years, depending on the usage or if there are no pre-filters integrated. Ultraviolet (UV) lights should also be installed if possible.&nbsp; Centrifuges and laboratory
  refrigerators must be calibrated quarterly to monitor the wear and tear of parts.</p>
<p>Methods and protocols should be validated prior to first enactment and before the introduction for each new variation. Re-evaluation of the processes at regular intervals (every 6 months) is recommended to trace human or machine error.</p>
<p>The quality control (QC) process of blood cell labelling requires a four-step method which includes a) sterility testing, b) labeling efficiency, c) cell viability, and d) bio distribution. Out of these QC processes, sterility testing remains the priority
  since the maintenance of the purity of all the materials being handled will dictate the success of the entire blood cell labelling.</p>
<p>From conceptualization, planning, procurement, and installation, Esco is able to provide a comprehensive solution for cleanroom needs. Design consultation, site and workflow analysis, equipment selection, furniture design and material selection, shop
  drawings, lead time planning, product fabrication, installation, and commissioning services guarantees an ISO class environment of your choice.</p>
<p>Different classes of LAF and isolators suitable to the required process and budget requirements offer various degrees of containment while assuring a clean environment.</p>
<p>&nbsp;</p>
<center><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" class="img-responsive" /></center>
<p><em>The Esco </em><a href="/products/general-processing-platform-isolator-gppi/45"><em>General Processing Platform Isolator (GPPI)</em></a><em> is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment. The GPPI&rsquo;s advanced control system allows the operator to select either positive or negative chamber pressure as well as single pass or recirculating airflow patterns.</em></p>
<p>&nbsp;</p>
<center><img src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" class="img-responsive" /></center>
<p><a href="/products/aseptic-containment-isolator/17"><em>A</em>septic Containment Isolator</a> (ACTI) provides a premium handling of biopharmaceutical drug products and aseptic cell processing &nbsp;assuring an ISO Class 5 environment.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-02-01 00:00:00'],
  ['news_category_id' => '1','old_id' => '130','slug' => 'antibody-drug-conjugates-the-new-wave-of-pharmaceuticals','title' => 'Antibody Drug Conjugates: The New Wave of Pharmaceuticals','banner_img' => 'antibody-drug-conjugates-the-new-wave-of-pharmaceuticals-min.jpg','banner_thumb' => 'antibody-drug-conjugates-the-new-wave-of-pharmaceuticals-min.jpg','description' => '<p>Antibody Drug Conjugates (ADCs) are the new class of highly potent biopharmaceutical drug with high specificity for cancer therapy. The design and synthesis of an effective ADC is challenging, requiring specialized equipment for the concept to be a reality.</p>','content' => '<p>The global market for Antibody Drug Conjugates (ADCs) is expected progress in the coming years. These new and promising pharmaceuticals are expected to be one of the innovative solutions for the treatment of cancer. Moreover, the increasing research on
  the development of advanced drugs can act as the foundation for the identification of new pharmaceuticals, along with the collaboration between biopharmaceutical companies.</p>
<p><strong>What are ADCs?</strong></p>
<p>Antibody Drug Conjugates (ADCs) are the new class of highly potent biopharmaceutical drug with high specificity for cancer therapy. There are three components that make up an ADC: 1) a monoclonal antibody (mAb), 2) a linker, and 3) a biologically active
  pharmaceutical ingredient with cytotoxic properties. These novel pharmaceuticals are quite unique and target-specific since it can deliver highly potent cytotoxic drugs to the tumour site and not harm the healthy cells unlike conventional chemotherapy.</p>
<p>ADCs deliver deactivated cytotoxins to specific cancer cells. Once attached to the affected cell, the ADC internalizes into the cell and undergoes the process of receptor-mediated endocytosis wherein the cytotoxin is released, producing a cytotoxic activity.
  The final process leads to a rapid cancer cell death.</p>
<p>The design and synthesis of an effective ADC is challenging, requiring specialized equipment for the concept to be a reality.</p>
<p><strong>How are ADCs Made?</strong></p>
<p>In order to deliver quality antibody drug conjugates, these undergo a tedious process of manufacturing in very stringent conditions. Under strict containment, the process starts from dispensing and weighing of cytotoxic agents, up to packing-off the finished
  products.</p>
<p>Weighing and preparation of cytotoxins with organic solvents are done in an isolator, since it permits safe handling of cytotoxins in a negative pressure environment. The mixture is then transferred into a conjugation site by a hard-piped transfer line.
  The isolator must be designed with a Clean-In-Place (CIP) system that permits inactivation of the cytotoxin or other microbes which comes in contact with potent cytotoxins to remove the contamination.</p>
<p>In the conjugation site, the linking of the antibody and cytotoxin is performed inside a strict containment facility, in a sealed temperature and pH controlled stainless steel tank, with nitrogen overlay. Special equipment like double mechanical seals,
  overflow trays, and positive displacement pumps are also needed to strengthen personnel protection. After this process, the ADC contained in the buffer is transferred to the formulation site for bulk formulation.</p>
<p>All the wastes from the process are inactivated and incinerated on site, depending on the process requirements. After the cytotoxic agent concentration adjustment and excipient addition in the formulation site, the Bulk Drug Substance (BDS) is stored
  frozen at around -20 to -60 &deg;C using a controlled freezer and aseptically dispensed into multiple PETG (polyethylene terephthalate glycol) bottles for bulk storage.</p>
<p><strong>Esco Pharma Solutions</strong></p>
<p><a href="/">Esco Pharma</a> has a wide array of manufacturing <a href="/products">products</a> which can be used specifically for the development of the next generation of pharmaceuticals.</p>
<p>The general workflow for the production of ADCs:</p>
<center>
    <img src="/images/upload/Esco-Pharma-Solutions.jpg" class="img-responsive">
</center>
<p>&nbsp;</p>
<ol>
  <li><strong>Sample Preparation</strong></li>
</ol>
  <center>
    <a href="/page/products/downflow-booths?" target="_blank">
      <img src="/images/product-images/thumb/down-flow-booths-min.png" class="img-responsive">
    </a>
  </center>
<p align="center">Pharmacon&trade; Downflow Booths</p>
<p>For the handling of raw materials, Esco Pharma offers the <a href="/page/products/downflow-booths">Downflow Booth</a>, which is primarily used in the pharmaceutical industry to provide a safe working area for operators to protect
  them from hazardous, sensitizing, or toxic substances during manual handling of powders and solvents.</p>
  <p>&nbsp;</p>
<ol start="2">
  <li><strong>Formulation</strong></li>
</ol>
  <center>
    <a href="/page/products/weighing-and-dispensing-containment-isolators" target="_blank">
      <img src="/images/product-images/thumb/Weighing-and-Dispensing-Containment-Isolator-min.png" class="img-responsive">
    </a>
  </center>
<p align="center">Weighing &amp; Dispensing Containment Isolators (WDCI)</p>
<p><a href="/page/products/weighing-and-dispensing-containment-isolators">Weighing and Dispensing Isolators</a> are advanced containment systems providing controlled negative pressure environments to maximize personnel protection.
  This equipment is especially designed for the weighing and dispensing of APIs, and as for ADC production, the isolator can be used for the mixing and blending with excipients. BioVap&trade; bio-decontamination system can also be installed in the equipment,
  wherein atomized hydrogen peroxide is sprayed throughout the equipment, thus sterilizing the system.</p>
<p>Formulation isolators are offered by Esco Pharma to fit the needs of the client for ADC manufacturing. Auto-loading and unloading systems can also be integrated in isolators for a better and faster workflow. Utilization of half suits for manual loading
  and unloading can also be installed, as well as the addition a blender, mixer, centrifuge, sieve and a lyophilizer for the production of the active pharmaceutical ingredient (API) and its salts. The integration of freeze dryers is also applicable, for
  the finalization and storage of the ADCs.</p>
  <center>
    <a href="http://www.vaccixcell.com/products-and-brands/tidecell/" target="_blank">
      <img src="/images/upload/Antibody-Drug-Conjugates-The-New-Wave-of-Pharmaceuticals-Esco-TideCell-Bioreactor-System.png" class="img-responsive">
    </a>
  </center>
<p align="center">Esco TideCell&reg; Bioreactor System</p>
<p>Esco offers tide motion bioreactors for the production of monoclonal antibodies (mAbs), wherein it features the same bioprocess method from seed preparation to production scale.&nbsp;&nbsp; The <a href="http://www.vaccixcell.com/products-and-brands/tidecell/#content">Esco TideCell&reg; Bioreactor System</a>  is the world&rsquo;s largest linearly scalable single-use bioreactor, from seed preparation to 5000 liters with closed automated cell harvesting.</p>
<p>&nbsp;</p>
<ol start="3">
  <li><strong>Filling process</strong></li>
</ol>
<p>Antibody drug conjugates are produced in either a small or a large scale, after being processed in different stages. Esco can provide these needed qualifications and has also established collaborations with companies which provide filling lines, fit for
  potent formulation and is also ideal for a small to a medium batch production.</p>
  <center>
    <a href="/page/products/active-open-restricted-access-barriers-system-orabs" target="_blank">
      <img src="/images/product-images/thumb/oRABS-450px-min.png" class="img-responsive">
    </a>
  </center>
<p align="center">Active Open Restricted Access Barriers System (oRABS)</p>
<p>Transfer of products to the main process chamber happens via a Rapid Transfer Port (RTP). The entry and exit of vials happen inside an ISO Class 6 environment, but the whole process happens inside an ISO Class 5 production. The <a href="/page/products/active-open-restricted-access-barriers-system-orabs">Active Open Restricted Access Barriers System (oRABS)</a>  is an example of a containment system which can serve as a fully integrated system for the filling of injectable biopharmaceutical products into ready-to-use containers, including vials, syringes, and cartridges. It can serve different cleanliness classifications
  as required, depending on the state of the product to be processed inside.</p>
  <p>&nbsp;</p>
<ol start="4">
  <li><strong>Sterility testing</strong></li>
</ol>
<center>
    <a href="/page/products/general-processing-platform-isolator" target="_blank">
      <img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" class="img-responsive">
    </a>
  </center>
<p align="center">General Processing Platform Isolator (GPPI)</p>
<p><a href="/products/general-processing-platform-isolator-gppi/45">Esco General Processing Platform Isolator (GPPI)</a> which is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes that require
  an ISO Class 5 (Grade A) aseptic environment. The GPPI&rsquo;s advanced control system allows the operator to select either positive or negative chamber pressure as well as single pass or recirculating airflow patterns.</p>
<p>Esco Pharma provides aseptic and containment isolators, giving the best personnel, product, and environmental protection. Customization of equipment to fulfil the client&rsquo;s needs is what Esco can truly offer, so that provision of a truly integrated
  solution will be available whenever needed. With continuous innovation, quality is built into the products with the use of Esco&rsquo;s equipment.</p>
  <p>&nbsp;</p>
<p>Reference:</p>
<p>ADC Review. (2016).&nbsp;<em>What Are Antibody-Drug Conjugates or ADCs?</em> Retrieved last 15 January 2018, from <a href="https://adcreview.com/adc-university/adcs-101/antibody-drug-conjugates-adcs/">https://adcreview.com/adc-university/adcs-101/antibody-drug-conjugates-adcs/</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-02-05 00:00:00'],
  ['news_category_id' => '1','old_id' => '131','slug' => 'radiopharmaceutical-products-the-origin','title' => 'Radiopharmaceutical Products: The Origin','banner_img' => 'radiopharmaceutical-products-the-origin.jpg','banner_thumb' => 'radiopharmaceutical-products-the-origin-thumb.jpg','description' => '<p>According to the World Health Organization (WHO), the scope of <strong>radiopharmaceutical products</strong> include organic and inorganic compounds, peptides, proteins, monoclonal antibodies and fragments, and oligonucleotides labelled with radionuclides with half-lives from a few seconds to several days.</p>','content' => '<p>According to the World Health Organization (WHO), the scope of <strong>radiopharmaceutical products</strong> include organic and inorganic compounds, peptides, proteins, monoclonal antibodies and fragments, and oligonucleotides labelled with radionuclides with half-lives from a few seconds to several days.</p>
<br />
<p>Radiopharmaceuticals should be manufactured in agreement with the basic principles of the current Good Manufacturing Practices (cGMP). The cGMP guidelines covered the general requirements for the production and quality control of radiopharmaceuticals.</p>
<br />
<p>The quality control for radiopharmaceuticals is extremely challenging since these drugs have a short half-life and are required to be administered shortly after the manufacturing process. This type of quality control management is known as the <strong>retrospective validation</strong>. This validation procedure should be based on established documented evidence that the product or the process conformed satisfactorily to the given guidelines. In this case, radiopharmaceutical products have already been distributed in the market immediately after its manufacture, thus quality control procedures are technically disregarded. Hence to ensure that the radiopharmaceutical products are safe and effective, adherence to cGMP is strictly monitored because of the nature of the validation procedure.</p>
<br />
<p><strong>Product and Operator Protection Guidelines</strong></p>
<p>A. Lighting, heating, ventilation, and if necessary, air conditioning should be designed to maintain a satisfactory temperature and relative humidity to ensure operators&apos; comfort especially when personnel are wearing protective clothing. (WHO, 2013)</p>
<p>B. Ventilation of radiopharmaceutical production facilities should meet the requirement to prevent the contamination of products and the exposure of working personnel to radioactivity. Suitable pressure and airflow patterns should be maintained by appropriate isolation and enveloping methods. Air handling systems for both radioactive and non-radioactive areas should be fitted with alarms so that the working personnel in the laboratory are warned in cases of failures. (WHO, 2013)</p>
<p>C. Any radioactive materials must be handled under negative pressure. The production of sterile radioactive products should therefore be carried under negative pressure surrounded by a positive pressure zone. (WHO, 2013)</p>
<br />
<img style="display: block; margin: 0 auto; width: 300px; height: 209px;" src=\'/images/upload/the-origin-blood-cell.jpg\' class=\'img-responsive\' >
<p style="text-align: center; margin-bottom: 15px;"><a class="notThis" target="_blank" href="/products/blood-cell-labeling-isolators/18">Blood Cell Labeling Isolator</a></p>
<img style="display: block; margin: 0 auto; width: 300px; height: 430px;" src=\'/images/upload/the-origin-technetium.jpg\' class=\'img-responsive\' >
<p style="text-align: center; margin-bottom: 15px;"><a class="notThis" target="_blank" href="/products/technetium-dispensing-isolators/27">Technetium Dispensing Isolator</a></p>
<img style="display: block; margin: 0 auto; width: 300px; height: 355px;" src=\'/images/upload/the-origin-radiopharma.jpg\' class=\'img-responsive\' >
<p style="text-align: center; margin-bottom: 15px;"><a class="notThis" target="_blank" href="/products/radiopharmacy-hood-lead-shielded-biological-safety-cabinet/41">Radiopharmacy Hood</a></p>

<img style="display: block; margin: 0 auto; width: 500px; height: 130px;" src=\'/images/upload/the-origin1.jpg\' class=\'img-responsive\' >
<br>
<img style="display: block; margin: 0 auto; width: 500px; height: 303px;" src=\'/images/upload/the-origin2.jpg\' class=\'img-responsive\' >
<br />
<p>Ensuring cGMP compliance for manufacturing companies producing radiopharmaceuticals is a challenging task, since the processes are incomparable with the conventional drug production. This involves a well-qualified personnel, a valid design and application processes, and production protocols.</p>
<br />
<p>References:</p>
<p>1. Directory of Cyclotrons Used for Radionuclide Production in member States. IAEA-DCRP/CD, 2006.</p>
<p>2. Radioisotope Handling Facilities and Automation of Radioisotope Production. IAEA-TECDOC-1430.</p>
<p>3. The European Contrast Media and Radiopharmaceuticals Markets. Market Research.com. Retrieved from http://www.marketresearch.com/map/prod/1058730.html. Accessed last February 2018.</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-03-01 14:25:00'],
  ['news_category_id' => '1','old_id' => '132','slug' => 'the-need-for-containment-on-high-potency-active-pharmaceutical-ingredients ','title' => 'The Need for Containment on High Potency Active Pharmaceutical Ingredients','banner_img' => 'the-need-for-containment-on-high-potency-active-min.jpg','banner_thumb' => 'the-need-for-containment-on-high-potency-active-min.jpg','description' => '<p>High Potency Active Pharmaceutical Ingredients (HPAPIs) are drugs that represent a pivotal change in the new generation of developing patient therapies.</p>','content' => '<p>High Potency Active Pharmaceutical Ingredients (HPAPIs) are drugs that represent a pivotal change in the new generation of developing patient therapies. The use of HPAPIs have lead a shift from the conventional use of ordinary medicines, to a pipeline of more effective ones.</p>
<p>An active pharmaceutical ingredient (API) is classified as an HPAPI if the occupational exposure limit is at or below 10 micrograms per cubic meter of air. Their ability to target the diseased cells are more precise and more selective in comparison with APIs. They are considered to be highly effective at smaller doses, therefore are much more efficient in the treatment of certain diseases. With such revolutionary effects, these innovations also lead to new manufacturing challenges.</p>
<p>HPAPIs pose health hazards to workers if there is an occurrence of spillage throughout the production, that checking must be done regularly in the different areas, even with remote substances. Engineering controls should be used as the primary source for the containment and isolation of potent compounds. Particular machinery is required when dealing with HPAPIs and managing air quality. Additional protection, which is PPE, only comes in secondary for minimizing the risk of exposure.</p>
<p>Strict procedures must be employed in every aspect of the HPAPI-handling process, from initial project evaluation, to the disposal of wastes. The opportunities for HPAPI manufacturers will increase with the growing number of potent compounds in the pharmaceutical development area.</p>
<p>With many years of experience and successful product and service delivery, Esco Pharma takes on newer challenges and makes your vision a reality. Together, we can move highly potent compounds to the next level.</p>
<img style="display: block; margin: 0 auto; width: 300px; height: 296px;" src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" class=\'img-responsive\' >
<p><a href="/products/aseptic-containment-isolator/17">Aseptic Containment Isolator (ACTI)</a>provides a premium handling of biopharmaceutical drug products, aseptic cell processing, and high potency active pharmaceutical ingredients. Safety is assured with the provision of an ISO Class 5 environment.</p>
<img style="display: block; margin: 0 auto; width: 300px; height: 302px;" src="/images/product-images/thumb/containment-barrier-isolator-III-min.png" class=\'img-responsive\' >
<p><a href="/products/containment-barrier-isolator-iii/32">Esco Containment Barrier Isolator (CBI)</a>facilitates the isolation of a product or process while providing the required conditions for a sterile/aseptic environment. This equipment provides a comprehensive range of personnel and product protection in addition to protection for the surrounding work areas and the environment.</p>
<p>References:</p>
<p>Bormett, D. (2018) High-Potency APIs: Containment and Handling Issues. Accessed last 21 February 2018, from http://www.pharmtech.com/high-potency-apis-containment-and-handling-issues?id=&pageID=1&sk=&date=</p>
<p>EPM Magazine. (2016) Keep it all in: How to handle demand for HPAPIs. Accessed last 21 February 2018, from https://www.epmmagazine.com/news/keep-it-all-in/</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-03-01 16:50:00'],
  ['news_category_id' => '1','old_id' => '133','slug' => 'r-d-laboratory-containment-isolator-made-its-way-to-big-pharma','title' => 'R&D Laboratory Containment Isolator Made Its Way to Big Pharma','banner_img' => 'rd-lab-containment.jpg','banner_thumb' => 'rd-lab-containment.jpg','description' => '<p>Esco Pharma USA factory successfully completed the design, ergonomic trials, manufacture, assembly, testing, and delivery of a 14-glove double-sided R&D Laboratory Containment Isolator for one of the largest pharmaceutical manufacturing companies in the world.</p>','content' => '<p>Esco Pharma USA factory successfully completed the design, ergonomic trials, manufacture, assembly, testing, and delivery of a 14-glove double-sided R&amp;D Laboratory Containment Isolator for one of the largest pharmaceutical manufacturing companies in the world. This system is designed to achieve a containment level of 12.5 ng/m3 over an 8-hour TWA when handing potent chemical entities.</p>
<p>The R&amp;D Laboratory Containment Isolator is regarded as a challenging project with large quantity of process equipment housed and integrated within the isolator for R&D applications. These pieces of process equipment were positioned to be ergonomically accessible including approximately sixty-five (65) through-wall process utility connections fit for the specified purpose and activities. In addition, successful delivery in a clean and cGMP manner made it even more challenging. With the space constraints getting into the facility and final positioning placement, the unit must be brought it in as few pieces as possible without compromising the integrity of the system as a whole.</p>
<p>The system has a built-in automated pressure hold test feature allowing a quick and straightforward verification each time the equipment is started. It is equipped with FDA-approved and USP Class VI compliant inflatable seals and is controlled via an Allen Bradley PLC/HMI.</p>
<p>Esco&apos;s standardized use of internationally available, major brand sub-components at all of it&apos;s global manufacturing locations ensures that spares and service activities are well supported after sales. Esco also offers a comprehensive Preventive Maintenance (PM) contract directly from local offices which provides customers with peace of mind.</p>
<p>Esco continuously innovates and designs custom solutions to meet the developing markets and dynamic regulatory requirements.</p>
<p>Contact Esco Pharma to learn more about the broad range of integrated solutions such as Pharmacon&trade; Downflow Booths, Aseptic Isolators, VHP Pass-Throughs, Restricted Access Barriers Systems (RABS) and Filling Line Isolators.</p>
<p>Esco Pharma&apos;s experienced staffs are fully equipped at each global manufacturing location will assess your needs and develop a solution to your specific processing requirements.</p>
<p><strong>USA:</strong></p>
<p><strong>Esco Technologies Inc - Pharma Division</strong></p>
<p>2512 Metropolitan Drive, Suite 120-B</p>
<p>Trevose, PA 19053, USA</p>
<p>Office: +1 215-322-2155</p>
<p>Email: eti.pharma@escoglobal.com</p>
<p>Pharma Web: www.escopharma.com</p>
<br>
<p><strong>UK:</strong></p>
<p><strong>Esco GB Ltd - Pharma Division</strong></p>
<p>Unit 2 R-Evolution @ Gateway 36</p>
<p>Kestrel Way</p>
<p>Barnsley, S Yorks. UK</p>
<p>S70 5SZ</p>
<p>Office Phone: +44 (0) 1226 360799</p>
<p>Email: egb.pharma@escoglobal.com</p>
<p>Pharma Web: www.escopharma.com</p>
<br>
<p><strong>Singapore:</strong></p>
<p>Esco Micro Pte Ltd</p>
<p>21 Changi South Street 1 Singapore 486777</p>
<p>Tel: +65 65420833</p>
<p>Fax: +65 65426920</p>
<p>Email: mail@escoglobal.com</p>
<p>Website: www.escoglobal.com</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-03-01 17:09:00'],
  ['news_category_id' => '1','old_id' => '134','slug' => 'the-nutraceutical-potential','title' => 'The Nutraceutical Potential','banner_img' => 'the-nutraceutical-potential-min.jpg','banner_thumb' => 'the-nutraceutical-potential-min.jpg','description' => '<p>Nutraceuticals contain nutrients derived from food products which are then formulated into different kinds of dosage forms. The definition of these drugs depends on their source - from natural resources, chemical syntheses, and pharmacological conditions.</p>','content' => '<p>There is currently an increasing demand for the production of nutraceuticals due to claims that these drugs provide better health benefits than conventional drugs. Subsequently, people are having renewed interest in personal healthcare products, as well as food and dietary supplements. With this, the need for preventive healthcare and innovative medicine is wanted in the market.</p>
<p>Dietary supplements provide alternative on lowering medicinal expenses. They prevent the formation of diseases at a lower cost, avoiding the need for excessive spending on different kinds of treatment. </p>
<p>Nutraceuticals contain nutrients derived from food products which are then formulated into different kinds of dosage forms. The definition of these drugs depends on their source - from natural resources, chemical syntheses, and pharmacological conditions.</p>
<p>Nutraceuticals are mostly produced from the growth of whole grains, tropical fruits, and other sources that embody large foundations of vitamins and minerals. They are harvested and subjected to certain processes for the removal of active ingredients, which are formulated into different dosage forms for patient intake.</p>
<p>Different kinds of synthetic processes are another way to manufacture nutraceuticals. These usually include fermentation processes for producing the desired product. There are certain types of microorganisms that can be cultured to include nutrients and are then incorporated to food, serving as easier and simpler forms for body consumption. Genetically engineering microorganisms can also be done, although this process can be too strenuous compared to the other methods.</p>
<p>In all the discussed production processes, an implementation of strict protocols and requirements are followed. Containment and sterility of the work zone must always be present, as well as adherence to the supplied guidelines. In line with this, Esco Pharma supports the production of nutraceuticals by providing the best equipment amongst the market.</p>
<p><a href="/">Esco Pharma</a> will continue to grow, together with the nutraceutical market and the processes along with it. Quality is guaranteed in the provision of safety and effectivity, for greatness is embedded in all available products and services. Esco will always be in line with the continuous expansion of the nutraceutical horizon.</p>
<img style="display: block; margin: 0 auto; width: 300px; height: 296px;" src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" class=\'img-responsive\' >
<p style="text-align:center;"><a href="/products/aseptic-containment-isolator/17">Aseptic Containment Isolator (ACTI)</a> provides a premium handling of biopharmaceutical drug products, aseptic cell processing, and high potency active pharmaceutical ingredients. Safety is assured with the provision of an ISO Class 5 environment.</p>
<img style="display: block; margin: 0 auto; width: 300px; height: 296px;" src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" class=\'img-responsive\' >
<p style="text-align:center;"><a href="/products/ceiling-laminar-airflow/1">Ceiling Laminar Airflow Units</a> provide enhanced aseptic work zones by utilizing uni-directional airflow to positively pressurise and purge working environment from contaminants.</p>
<p><strong>References:</strong></p>
<ol style="list-style: decimal;">
	<li>Oaks, A. (2017) Supplement Industry: How are Nutraceuticals Produced? Accessed last 15 March 2018, from <a href="https://guidelineshealth.com/women/supplement-industry-how-are-nutraceuticals-produced/">https://guidelineshealth.com/women/supplement-industry-how-are-nutraceuticals-produced/</a></li>
	<li>Wiley. (2018) Efforts are needed to tap into the potential of nutraceuticals. Accessed last 15 March 2018, from <a href="https://www.sciencedaily.com/releases/2018/02/180213084414.htm">https://www.sciencedaily.com/releases/2018/02/180213084414.htm</a></li>
</ol>
<p><strong>Contact Us</strong></p>

<p>Esco Pharma Pte. Ltd.</p>
<p>21 Changi South Street 1 Singapore 486777</p>
<p>Tel: +65 65420833</p>
<p>Fax: +65 65426920</p>
<p>Email: csis.pharma@escoglobal.com</p>
<br />
<p><strong>Esco Technologies, Inc.</strong></p>
<p>Esco Pharma Factory</p>
<p>2512 Metropolitan Dr. Suite 120-B</p>
<p>Feasterville-Trevose, PA 19053-6738</p>
<p>Tel: +1 215-322-2155</p>
<p>Email: eti.pharma@escoglobal.com</p>
<br />
<p><strong>Esco GB Ltd.</strong></p>
<p>Unit 2 R-Evolution @ Gateway 36</p>
<p>Kestrel Way, Barnsley, S70 5SZ</p>
<p>Tel: +44 (0) 1226 360799</p>
<p>Email: egb.pharma@escoglobal.com</p>

<p style="color: #a4cc83; font-weight: 900;">About our BRANDS</p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p style="color: #a4cc83; font-weight: 900;">About Esco Pharma</p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-03-23 14:07:00'],
  ['news_category_id' => '1','old_id' => '135','slug' => 'oral-solid-dosage-forms-pharma-s-booming-treasure','title' => 'Oral Solid Dosage Forms: Pharma’s Booming Treasure','banner_img' => 'oral-solid-dosage-forms-pharmas-booming-treasure-min.jpg','banner_thumb' => 'oral-solid-dosage-forms-pharmas-booming-treasure-min.jpg','description' => '<p><strong>Oral solid dosage forms (OSDs)</strong> are one of the most prevalent drug delivery systems. Its market reached an estimate of $24.5 billion dollars back in 2016 and continually grows as the era for personalized medicine emerges.</p>','content' => '<p><strong>Oral solid dosage forms (OSDs)</strong> are one of the most prevalent drug delivery systems. Its market reached an estimate of $24.5 billion dollars back in 2016 and continually grows as the era for personalized medicine emerges.</p>
<p>These dosage forms have a broad patient acceptability, owing to their increased physico-chemical stability and cost-effectiveness, accurate dosing, and ease of handling. Moreover, they offer modified release options which increases patient compliance.</p>
<p>There are two basic types of oral solid dosage forms: the tablet and the capsule. </p>
<p><strong>Tablets</strong> are prepared by mixing powdered or granular active pharmaceutical ingredients (API) with excipients to form a compact mass of predetermined shape. This type of dosage form includes: molded tablets (prepared by triturating medicinal substances and shaping it with a mold); compressed tablets (chewable, buccal, and sublingual); and special oral tablets (multiple layered, press-coated, sugar-coated, and film-coated).</p>
<p><strong>Capsules</strong> are OSDs utilizing either a hard or soft soluble container, known as \'shells\', to enclose the API and excipient mixture. The shells are made from gelatin, starch or other suitable materials. Additionally, the size of the hard shell capsules vary from 000 (largest) to 5 (smallest).</p>
<p>The preparation of these two OSDs differ. Tablets undergo screening, mixing, granulation, milling, compression, and coating (film or sugar). In the manufacture of capsules there are two stages: the production of the gelatin enclosure (Pin method, Plate, Rotary Die, and Reciprocating Die processes) and the filling of the shells. Filling hard shell capsules involve imprinting, sealing or banding, locking cap; while soft gel capsules utilize encapsulation.</p>
<p>These methods ensure that the end-product conforms with the standards of physicochemical compatibility and pharmacodynamics set by the United States Pharmacopoeia.</p>
<p><strong>Conventional Manufacturing Process of OSD:</strong></p>
<img style="display: block; margin: 0 auto;" class="img-responsive my-3" src="/images/upload/osd1.png" alt="OSD Manufacturing Process" />
<p>Esco Pharma provides customized solutions from the dispensing process up to packaging; not only of over the counter OSDs but also the potent ones.</p>
<p>The company offers the airflow containment booth which utilizes high velocity air intended to capture airborne dust particles. It preserves the purity of raw materials during processes of dispensing and sampling to prevent cross-contamination. Airflow containment booths also ensure personnel safety from toxic particles during operations. This type of equipment is a combination of modular construction and cutting-edge airflow technology making it cost-effective with maximum manufacturing outcomes. The booths also guarantee operator efficiency by providing unrestricted movement range along with improved vision and breathing zones.</p>
<p>Air flows down towards the operator\'s waist level, thus, drawing away powder particulates from the breathing zone. This design offers a greater amount of protection as compared to a horizontal or a vertical airflow scheme.</p>
<p>Moreover, Esco provides the Turnkey OSD Potent Line Isolator, suitable for the whole manufacturing process of potent drugs. All equipment possess the following: a full stainless steel 316L interior with coved corners; a wash in place and/or clean in place sloped chamber drain; a touch screen interface HMI control system; a closed transfer method; optional Atex Rated; 21 Code of Federal Regulations Part II compliant; single contact project management; and an optional process development support.</p>
<div class="table-responsive">
<table class="table">
	<tr>
		<td style="border: solid 1px #000;" width="33%"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/hpi-g-3-with-footswitch-white-gloves-thumb-min.png" alt="Healthcare Platform Isolator "><p style="text-align: center;"><strong>Healthcare Platform Isolator (HPI-G3)</strong></p></td>
		<td style="border: solid 1px #000;" width="33%"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/streamline-compounding-isolator-thumb-min.png" alt="Streamline Compounding Isolator"><p style="text-align: center;"><strong>Streamline<sup>&reg;</sup> Compounding Isolator (Compounding Aseptic Containment Isolator)</strong></p></td>
		<td style="border: solid 1px #000;" width="33%"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/containment-barrier-isolator-III-min.png" alt="Containment Barrier Isolator"><p style="text-align: center;"><strong>Containment Barrier Isolator </strong></p></td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;" colspan="3" style="text-align:justify;"> These isolators provide a sterile environment for the compounding of hazardous drugs. All can be configured to function under positive or negative pressure. Notably, the work zones and pass-thru interchange are under negative pressure to the environment, thus, maintaining operator protection even with a system\'s breach.</td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/glass-hood-2-min.png" alt="Glassware Hoods"><p style="text-align: center;"><strong>Glassware Hoods/ Kilo Labs</strong></p></td>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/down-flow-booths-min.png" alt="Pharmacon Downflow Booth"><p style="text-align: center;"><strong>Pharmacon&trade; Downflow Booth</strong></p></td>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/upload/osd5.jpg" alt="Pharmaflow Flowhoods Gloveports"><p style="text-align: center;"><strong>Pharmaflow Flowhoods without gloveports</strong></p></td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;" style="text-align:justify;">This can be used for scaling up for early clinical trials. It comes with integrated chemical reactors to produce kilograms of powders.</td>
		<td style="border: solid 1px #000;" style="text-align:justify;">The Downflow booth provides a clean and contained environment for handling of raw materials. It also serves to protect operators from hazardous, sensitizing and toxic substances. These can be configured to be in recirculatory, single pass, or even combination system.</td>
		<td style="border: solid 1px #000;" style="text-align:justify;">For weighing and dispensing raw materials in smaller drums, this flowhood without gloveports can be used during manufacturing scale up.</td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/Weighing-and-Dispensing-Containment-Isolator-min.png" alt="Weighing and Dispensing Containment"><p style="text-align: center;"><strong>Weighing and Dispensing Containment Isolator (WDCI)</strong></p></td>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" alt="Aseptic Containment Isolator "><p style="text-align: center;"><strong>Aseptic Containment Isolator (ACTI)</strong></p></td>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" alt="Ceiling Laminar Airflow"><p style="text-align: center;"><strong>Ceiling Laminar Airflow Units (CLAF)</strong></p></td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;">The WDCI is essential for handling, weighing, dispensing, and containing potent drugs. This is Esco\'s ultimate platform for handling potent substances.</td>
		<td style="border: solid 1px #000;">For preparing sterile hazardous products like parenterals, it is best to use ACTI. Formulation into different dosage forms is best carried out within this isolator unit.</td>
		<td style="border: solid 1px #000;">These units enhance aseptic workflow environments through its unidirectional airflow which positively pressurize and purge contaminants from work zones.</td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/oRABS-450px-min.png" alt="Open RAB"><p style="text-align: center;"><strong>Open Restrictive Access Barrier Isolators  (oRABs)</strong></p></td>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/cRABS-450px-min.png" alt="Closed RAB"><p style="text-align: center;"><strong>Closed Restrictive Access Barrier Isolators (cRABs)</strong></p></td>
		<td style="border: solid 1px #000;"><img class="img-responsive" style="display: block; margin: 0 auto; width: 200px;" src="/images/product-images/thumb/Cleanroom-air-showers-min.png" alt="Cleanroom Air Showers"><p style="text-align: center;"><strong>Cleanroom Air Showers</strong></p></td>
	</tr>
	<tr>
		<td style="border: solid 1px #000;" colspan="2">These two RABs aim to isolate both the process and the product from sources of contamination. The open RABs permit operator intervention during aseptic and decontamination processes. For closed RABs, these units provide a higher level control on product contamination. This is due to its closed doors during the last step of bio-decontamination until the initial set-up of the process.</td>
		<td style="border: solid 1px #000;">These are intended to minimize the entry and exit of air particulates in and out the cleanroom. The units use high velocity shower jets to quickly purge contaminants from the operator.</td>
	</tr>
</table>
</div>
<p>Esco Pharma offers equipment packages and process solutions which aims to advance occupational health and human healthcare. This ultimately leads to improved operator protection, cross-contamination reduction, and increased processing efficiency.</p>
<p>As a world leading manufacturer of pharmaceutical equipment, Esco offers tailored-fit solutions that meet the demands of the client. With the company\'s dedication to continuous innovation, quality is always a guaranteed characteristic of the end-product.</p>

<p><strong>REFERENCES:</strong></p>
<p>Cision Pr Newswire.(2017). Future Market Insights. Retrieved last  2 March 2018, from <a href="https://www.businesswire.com/news/home/20110221005477/en/Research-Markets-Manufacturing-Solid-Dosage-Forms--">https://www.businesswire.com/news/home/20110221005477/en/Research-Markets-Manufacturing-Solid-Dosage-Forms--</a></p>
<p>Recipharm Ab. (2018). Oral Solid Dosage Trends. Retrieved last 2 March 2018, from <a href="https://www.recipharm.com/insights/oral-solid-dosage-trends">https://www.recipharm.com/insights/oral-solid-dosage-trends</a></p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-03-27 15:49:00'],
  ['news_category_id' => '1','old_id' => '136','slug' => 'contain-don-t-feel-don-t-let-them-in','title' => 'Contain, Don’t Feel, Don’t Let Them In!','banner_img' => 'Contain-Dont-Feel-Dont-Let-Them-In.jpg','banner_thumb' => 'Contain-Dont-Feel-Dont-Let-Them-In.jpg','description' => '<p>Biocontainment involves the provision of a physical containment to prevent the unintentional infection of a personnel. Harmful discharge into the immediate workplace is also lessened during scientific research or manufacturing processes.</p>','content' => '<p>&nbsp;</p>
<p>Whatever industry or environment you are working in, contamination prevention is a top priority in handling materials needing premium protection. Most of the time, you already feel assured that the personal protective equipment you wear can shield you
	from every harmful organism. But is this a fact or a bluff?</p>
<p>For the continuous protection of the operator, product, and environment, guidelines must be followed in applying the right kind of safety. This is where the concept of biocontainment comes in &ndash; which is related to laboratory safety, extending to
	even manufacturing industries handling specialized products.</p>
<p>Biocontainment involves the provision of a physical containment to prevent the unintentional infection of a personnel. Harmful discharge into the immediate workplace is also lessened during scientific research or manufacturing processes.</p>
<p>Primary containment is the main chamber that has a direct contact with the product. This serves as the protection from hazardous agents of both the personnel and the immediate outside environment. Usage of proper storage containers, standard operating
	procedures (SOPs), and suitable safety equipment such as isolators are required.</p>
<p>Secondary containment is the safety provision of the external environment from exposure to harmful materials. This is the place wherein the primary containment is placed, and where the personnel operates. This type of containment involves a combination
	of facility design and operational practices.</p>
<p>At <a href="http://www.escopharma.com/">Esco Pharma</a>, our focus is to provide the best product and service delivery, as we take on newer challenges and soar towards greater progress. The problems regarding contamination for pharmaceutical, agricultural,
	medical, and production operations can be eliminated as we yield protection with containment.</p>
<center>
	<img src="/images/product-images/thumb/Aseptic-containment-isolator-min.png" class="img-responsive"/>
</center>
<p align="center"><a href="/products/aseptic-containment-isolator/17">Aseptic Containment Isolator (ACTI)</a>&nbsp;provides a premium handling of biopharmaceutical drug products, aseptic cell processing, and high potency active pharmaceutical
	ingredients. Safety is assured with the provision of an ISO Class 5 (Grade A) environment.</p>
	<center>
		<img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" class="img-responsive"/>
	</center>
<p align="center">The <a href="/products/general-processing-platform-isolator-gppi/45">Esco General Processing Platform Isolator (GPPI)</a> is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes
	that require an ISO Class 5 (Grade A) aseptic environment. Truly, the <em>every man&rsquo;s isolator</em> can fit all the needs of the client.</p>
<p align="center">&nbsp;</p>
<p>Reference/s:</p>
<p>Skilton, R. (ND)<em> Intoduction to Biocontainment Laboratories &ndash; Levels of Containment.</em> Accessed last 18 Apr 2018, from <a href="http://hpc.ilri.cgiar.org/beca/training/Lab_MW/course/biocontainment.pdf">http://hpc.ilri.cgiar.org/beca/training/Lab_MW/course/biocontainment.pdf</a></p>
<p>Esco Pharma goes global! Do not forget to catch us on our next event!</p>
<center>
	<img src="/images/upload/achema-2018.png" class=" my-3 img-responsive"/>
</center>
<p><strong>Contact Us</strong></p>
<p>Esco Pharma Pte. Ltd.</p>
<p>21 Changi South Street 1 Singapore 486777</p>
<p>Tel: +65 65420833</p>
<p>Fax: +65 65426920</p>
<p>Email: csis.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><strong>Esco Technologies, Inc.</strong></p>
<p>Esco Pharma Factory</p>
<p>2512 Metropolitan Dr. Suite 120-B</p>
<p>Feasterville-Trevose, PA 19053-6738</p>
<p>Tel: +1 215-322-2155</p>
<p>Email: eti.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><strong>Esco GB Ltd.</strong></p>
<p>Unit 2 R-Evolution @ Gateway 36</p>
<p>Kestrel Way, Barnsley, S70 5SZ</p>
<p>Tel: +44 (0) 1226 360799</p>
<p>Email: egb.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly
	advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
<p>&nbsp;</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-04-26 17:55:00'],
  ['news_category_id' => '3','old_id' => '137','slug' => 'esco-pharma-at-interphex-2018-showcasing-innovation','title' => 'Esco Pharma at Interphex 2018: Showcasing Innovation','banner_img' => 'Esco-Pharma-at-Interphex-2018-Showcasing-Innovation-min.jpg','banner_thumb' => 'Esco-Pharma-at-Interphex-2018-Showcasing-Innovation-min.jpg','description' => '<p>Esco Pharma would like to thank all our partners, clients, and collaborators for taking time and visiting us at INTERPHEX 2018 last April 17-19, 2018 at Javits Center, New York, USA.</p>','content' => '<p><a href="http://www.escopharma.com/">Esco Pharma</a> would like to thank all our partners, clients, and collaborators for taking time and visiting us at INTERPHEX 2018 last April 17-19, 2018 at Javits Center, New York, USA. INTERPHEX is the stage wherein
	numerous major products and service solutions was put on show. Several exhibitors were about Pharmacy, Pharmaceutical, Biotechnology, Biosciences, Medical Devices and Biomedical Engineering.</p>
<p>Esco Pharma leads in providing specialist services, equipment packages, and process solutions which lead to supreme operator protection, reduction of cross-contamination, and more effective processing.</p>
<p>&nbsp;</p>
<center>
	<img src="/images/upload/Esco-Pharma-at-Interphex-2018-Showcasing-Innovation-2.jpg" class="img-responsive">
</center>
<p>&nbsp;</p>
<p>Esco Pharma exhibited our popular <a href="http://www.escopharma.com/product-details.php?productId=18&amp;pg=pdt">Weighing Dispensing Containment Isolator (WDCI)</a>, an ultimate platform for powder handling, which has numerous installations around the
	world and within USA. We have received enormous response for our state-of-the-art high containment applications and facilities and showcased our ability to achieve down to nanogram performance, as verified by third party Containment Performance Testing.</p>
<p>Esco Pharma takes pride in pioneering one of the most innovative equipment employed in the pharmaceutical industry, the <a href="http://www.escopharma.com/product-details.php?productId=6&amp;pg=pdt">Pharmacon&trade; Downflow Booth (DFB)</a>, which primarily
	delivers operator, process, and product protection.</p>
<p>Various applications were discussed as well for differing potent handling with drum tippers and other material handling devices. Process integration with powder handling equipment, such as integrated high containment mills with inter-changeable heads
	was also deliberated. Aseptic processing, pharmaceutical formulations, modular and sterility test isolators were also discussed with the participants of the event.</p>
<p>In addition, Esco Pharma keeps on coming strong as from our previous years, as various partnerships were solidified, and we were awarded with yet another Filling Line Isolator for a Nasdaq listed biotechnology company. Esco Filling Lines are made in USA
	with our full mechanical, electrical controls &amp; instrumentation, assembly and site validation teams. Our aftermarket support extends to providing spare parts, replacements, upgrades, retrofits, relocations and preventive maintenance.</p>
<p>&nbsp;</p>
	<center>
		<img src="/images/upload/Esco-Pharma-at-Interphex-2018-Showcasing-Innovation3.png" class="img-responsive">
	</center>
<p>&nbsp;</p>
<p>Esco Filling Line Isolators with their latest conveyor push push auto loading and unloading system will be shown in SP Scientific Booth, one of the most technically innovative freeze drying manufacturers, at Achema 2018, at Hall 1.1 Stand D27 and Hall
	3.0 Stand J82.</p>
<p>Esco Pharma is the only Pharmaceutical Isolator company with three global factories able to manufacture isolators using common designs and parts, allowing Esco to serve our clients in every time zone with aftermarket support.</p>
<p>&nbsp;</p>
<center>
	<img src="/images/upload/Esco-Pharma-at-Interphex-2018-Showcasing-Innovation4.jpg" class="img-responsive">
</center>
<p>&nbsp;</p>
<p>Our coverage expands worldwide, as Esco Pharma has just completed an exhibition in Making Pharmaceuticals last April 24-25, 2018 at Ricoh Arena, Coventry, UK.</p>
<p>Once again, Esco Pharma would like to thank everyone for the opportunity to connect with you! See you at our next exhibition in ISCT Canada where we will be showcasing our HPI which Esco recently sold 20 units to a biotechnology company in USA.</p>
<p>Esco Pharma goes global! Do not forget to catch us on our next event!</p>
<p>&nbsp;</p>
<center>
	<img src="/images/upload/Esco-Pharma-at-Interphex-2018-Showcasing-Innovation5.png" class="img-responsive">
</center>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p>Esco Pharma Pte. Ltd.</p>
<p>21 Changi South Street 1 Singapore 486777</p>
<p>Tel: +65 65420833</p>
<p>Fax: +65 65426920</p>
<p>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p>Esco Technologies, Inc.</p>
<p>Esco Pharma Factory</p>
<p>2512 Metropolitan Dr. Suite 120-B</p>
<p>Feasterville-Trevose, PA 19053-6738</p>
<p>Tel: +1 215-322-2155</p>
<p>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p>Esco GB Ltd.</p>
<p>Unit 2 R-Evolution @ Gateway 36</p>
<p>Kestrel Way, Barnsley, S70 5SZ</p>
<p>Tel: +44 (0) 1226 360799</p>
<p>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly
	advancing occupational health and human healthcare.</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>
<p>&nbsp;</p>
','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-05-02 00:00:00'],
  ['news_category_id' => '3','old_id' => '138','slug' => 'guten-tag-germany','title' => 'Guten Tag, Germany!','banner_img' => 'guten-tag-germany-min.jpg','banner_thumb' => 'guten-tag-germany-min.jpg','description' => '<p>Esco Pharma will be coming back at the leading show for process industries, ACHEMA 2018 exhibition and conference at Frankfurt am Main, Germany, this coming June 11-15, 2018.</p>','content' => '<p>Esco Pharma will be coming back at the leading show for process industries, ACHEMA 2018 exhibition and conference at Frankfurt am Main, Germany, this coming June 11-15, 2018.</p>
<p><a href="https://www.achema.de/en.html">ACHEMA</a> is one of the biggest worldwide exhibitions catering pharmaceutical, biotechnological, and chemical processing industries. Held every 3 years and attended by leaders in their fields, the event gives suppliers and clients all over the world a great opportunity to meet and discuss.</p>
<p>Esco Pharma is excited to return to ACHEMA this year and display advanced equipment ranging from isolators, bioreactors, biological safety cabinets, and more. Our team of experts will be available on-site to discuss your containment needs and on how we can provide safety right from Discovery to Delivery. Come and get your questions answered and get to see our state-of-the-art equipment.</p>
<p>Catch us there and know why Esco Pharma leads in &ldquo;The Generation of Innovation.&rdquo;</p>
<p>Can\'t make it this year? We offer a variety of online resources to learn more about our products and brands, upcoming events, and more!</p>
<p><a href="http://www.escopharma.com/products.php">Click Here for More Esco Pharma Products!</a></p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong><br />Esco Pharma Pte. Ltd.<br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email:&nbsp;<a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p>Esco Technologies, Inc.<br />Esco Pharma Factory<br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email:&nbsp;<a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p>Esco GB Ltd.<br />Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email:&nbsp;<a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p>&nbsp;</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p style="margin: 0in 0in 8pt; line-height: 107%; font-size: 11pt; font-family: Calibri, sans-serif;">Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-05-30 00:00:00'],
  ['news_category_id' => '1','old_id' => '139','slug' => 'sterility-safety-and-quality','title' => 'Sterility, Safety and Quality','banner_img' => 'sterility-safety-and-quality.jpg','banner_thumb' => 'sterility-safety-and-quality.jpg','description' => '<p>What do implants, vaccines, allergenic extracts, dialysis and ophthalmic solutions have in common? Sterility. </p>','content' => '<p>What do implants, vaccines, allergenic extracts, dialysis and ophthalmic solutions have in common? Sterility.</p>
<p>Parenterals refer to sterile preparations intended to be administrated directly into the systemic circulation. They may come in the form of solutions, suspensions, emulsions for injection or infusion, powders for injection or infusion, and gels for injection and implants.</p>
<p>Sterility is a critical attribute for parenteral product safety. They must meet the following compendia criteria:.</p>
<p style="text-indent: 3em;">&nbsp;To be sterile and pyrogen-free</p>
<p style="text-indent: 3em;">&nbsp;To be exempt of visible particle and to be free from sub-visible particles as required by the European, United States and Japanese Pharmacopeias</p>
<p style="text-indent: 3em;">&nbsp;To have no evidence of phase separation for emulsions, or aggregate formation for aqueous dispersion such as injectable monoclonal antibody (mAb) preparations</p>
<p style="text-indent: 3em;">&nbsp;To be readily dispersed upon shaking of suspensions to give stable formulations and ensure the correct dose is withdrawn and injected.</p>
<p>&nbsp;</p>
<p>For decades, the US FDA had numerous initiatives to improve the quality and safety of sterile drug products, example of which are parenteral preparations. Likewise, the International Council for Harmonisation of Technical Requirements for Pharmaceuticals for Human Use (ICH) Q8a (R2) advises manufacturers, &ldquo;For those products intended to be sterile, an appropriate method of sterilization for the drug product and primary packaging material should be chosen and the choice justified.&rdquo; A great deal of effort has been applied to develop technologies for use with aseptic processing. Through a coordinated effort among investigators and reviewers, and even partnering with industries and independent scientists, an overall improvement in manufacturing quality systems has evolved with concurrent product quality enhancement.</p>
<p>&nbsp;</p>
    <center>
        <img class="img-responsive" src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png" />
    </center>
    <p class="text-center"><a href="/products/general-processing-platform-isolator-gppi/45">General Processing Platform Isolator (GPPI)</a></p>

<p>&nbsp;</p>
<p>The Esco General Processing Platform Isolator (GPPI) is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment. It is used as a containment equipment for aseptic and potent formulations.</p>
<p>The Esco General Processing Platform Isolator (GPPI), also known as &ldquo;every man&rsquo;s isolator&rdquo; can meet any needs of the client. Esco Pharma focuses to provide the best product and service delivery. Quality is guaranteed in the provision of safety and effectivity.</p>
<p>&nbsp;</p>
<p>References:</p>
<p>1. Blouet, E. (ND) Parenteral Preparations: Challenges in Formulations. Accessed last 22 May 2018, from <a href="https://www.pharmafocusasia.com/articles/parenteral-preparations-challenges-in-formulations"> https://www.pharmafocusasia.com/articles/parenteral-preparations-challenges-in-formulations</a></p>
<p>2. Hussong, D. (2010) Sterile Products: Advances and Challenges in Formulation, Manufacturing and Regulatory Aspects&mdash;A Regulatory Review Perspective. Accessed last 22 May 2018, from <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2974144/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2974144/</a></p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p>Esco Pharma Pte. Ltd.<br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
<p><br /><strong>Esco Technologies, Inc.</strong></p>
<p>Esco Pharma Factory<br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p>
<p><br /><strong>Esco GB Ltd.</strong></p>
<p>Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p>&nbsp;</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-05-30 00:00:00'],
  ['news_category_id' => '1','old_id' => '140','slug' => 'rabs-and-isolators-a-clash-of-roles','title' => 'RABS and Isolators: A Clash of Roles','banner_img' => 'rabs-and-isolators-a-clash-of-roles.jpg','banner_thumb' => 'rabs-and-isolators-a-clash-of-roles.jpg','description' => '<p>The International Society for Pharmaceutical Engineering (ISPE) released the term \'Advanced Aseptic Processing (AAP)\', which covers both the Restricted Access Barrier System (RABS) and the isolators, which aims to cater for product protection and containment during on-going manufacturing operations by separating operators from the process.</p>','content' => '<p>The main purpose of a cleanroom is to keep contaminants from entering and possibly tainting the processes and main products within it. But even with the most stringent protocols, high risk for bacterial entry brought about by cleanroom personnel, remains. Hence, there is an increasing demand for a solution that will distance the operator from the open manufacturing processes.</p>
<p>In response, the International Society for Pharmaceutical Engineering (ISPE) released the term &lsquo;Advanced Aseptic Processing (AAP)&rsquo;, which covers both the Restricted Access Barrier System (RABS) and the isolators. Generally, AAP aims to cater for product protection and containment during on-going manufacturing operations by separating operators from the process itself. Such techniques have been designed to eliminate risks of product exposure, to any viable or non-viable contaminants, during critical processes.</p>
<p>The most important factor in AAP operation is maintaining absolute ingress control. To achieve this, the equipment must be a complete rigid wall enclosure which physically separates the operator&rsquo;s arms and hands from the process. Thus, operations using open-front cabinets such as Laminar Flow Hoods (LFHs) or Biosafety Cabinets (BSCs) do not fit the criteria of AAP.</p>
<p><strong>RABS and ISOLATORS</strong></p>
<p><strong>RABS</strong> can be utilized in fill-finish areas. The equipment provides an enclosed environment which reduces the risk of contaminating the product, containers, closures, and direct contact surfaces. It grants superior protection than conventional cleanroom operations by providing a level of separation between operator and product.</p>
<p>The configurations of RABS include:</p>
<ul>
<li>ISO Class 5 environment with unidirectional airflow</li>
<li>Rigid wall enclosure</li>
<li>Use of glove port/s, half suit/s, to access all areas of the enclosure during filling operations</li>
<li>Sterilization-In-Place (SIP) is preferred for contact parts (fluid pathways). Other materials coming from the outside environment must undergo autoclaving prior to RABS entry via aseptic transfer ports.</li>
</ul>
<p>Since the equipment is open to the surrounding room, it is commonly located in an ISO Class 7 or better environment.</p>
<p>Moreover, RABS are further divided into two: open RABS (oRABS) or closed RABS (cRABS).</p>
<p>An oRABS can either have: a dedicated air handling system (active) which is completely independent from the room&rsquo;s air supply; or a shared one with the cleanroom&rsquo;s downflow (passive), which recycles air from the surrounding environment. Additionally, its barrier doors can be opened for operator intervention at defined risk stages of aseptic processes.</p>
<p>However, cRABS provide a higher level of contamination control since its barrier doors remain closed from the last bio-decontamination through the initial set-up. It also has a dedicated air handling system which will circulate within the barriers. cRABS also make use of gaseous decontamination system.</p>
<p>Isolators, on the other-hand, are fully enclosed and sealed units with either unidirectional or turbulent HEPA or ULPA filtered air which is responsible for maintaining an ISO Class 5 working interior. The chamber may utilize an automatic bio-decontamination system with a H<sub>2</sub>O<sub>2</sub> sanitant. Access inside the containment system is limited through glove ports and sterile transfer systems. Since the equipment is properly sealed from the outside atmosphere, it can be located within an ISO Class 8 environment or even a segregated compounding area. Isolators also provide a higher level of protection towards both the operator and the product when handling potent drugs. Since the number of novel drugs are arising (which are more complex and hazardous), the need for isolators also increase.</p>
<p><strong>RABS vs ISOLATORS</strong></p>
<p>A debate over which AAP&ndash; RABS or isolators &ndash; to employ, is ongoing among experts. But what industries have in common is their desire for two things: (1) operator, environment, and product protection; and (2) cost-cutting.</p>
<p>Maintaining a cleanroom is expensive; additional expenses are also factored, namely: energy, operating, and room validation costs. The reality of the paid 2 hours spent by operators gowning and de-gowning must also be ruled in. Thus, with the AAPs sweeping in to save the day, discussion on which can provide the highest level of protection while effectively lowering costs, continues up to this day.</p>
<p>An insightful approach of differentiating the two would be through <strong>energy consumption, </strong>as it is in line with the recent trend towards green pharmaceutical manufacturing.</p>
<p>The energy consumed by the two varies greatly. The main difference between RABS and isolators consists of smaller cleanroom space and its classification. Isolators can be operated in ISO Class 8 cleanrooms while RABS must be in ISO Class 7. RABS do not recirculate fresh air, and they also require additional areas for airlocks and gowning rooms, in studies, active RABS can save only 30% of energy. Isolators, however, can be integrated into the technical building services. It is desirable that as little as possible outside air must be conditioned for the isolator. An isolator with a system that uses air from the surrounding room to condition the process air can save up to 65% of energy.</p>
<p>In terms of the <strong>personnel protective equipment (PPE)</strong> to be used, operators must gown according to the classification of the area surrounding the AAP system.</p>
<p>Since isolators are commonly located in ISO Class 8 cleanrooms, PPE is composed of jumpsuit or plant uniforms; lab coat; head and shoe covers; and single non-latex gloves. The latter is used as a precaution during isolator operation using the glove ports.</p>
<p>For RABS, PPE of personnel should comply with standards set by ISO Class 7 cleanrooms. This includes additional full and sterile one-piece suits, sterile face masks, sterile head and shoe covers, goggles, and multiple layers of gloves. Maintaining a higher class of cleanroom for one AAP would also result in higher expenses. Thus, isolators present a solution for reduced gowning costs.</p>
<p>These facts are the primary reasons why manufacturing companies are starting to lean more towards the use of isolators in their processes.</p>
<p>Some still argue that the two AAP methods appear to be similar, as they both provide ISO Class 5 cleanroom space and ensure the physical separation of the operator and the process. Of the two though, isolators are the most widely accepted within the industry, specifically for filling operations.</p>
<p>At <strong>Esco</strong>, a wide range of turnkey solutions are available for the specific needs of any industry. Moreover, Esco provides Potent Line Isolator, suitable for the whole manufacturing process of potent drugs.</p>
<p>All equipment possess the following:</p>
<ul>
<li>Wash-in-place (WIP) and/or clean-in-place (CIP) sloped chamber drain</li>
<li>A closed transfer method</li>
<li>21 Code of Federal Regulations Part II compliant</li>
<li>Single contact project manager</li>
<li>Optional process development support</li>
<li>Either full stainless steel 316L or electrogalvanized steel with Esco Isocide&trade; antimicrobial powder coating</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="col-md-auto">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" scope="col"><strong>EQUIPMENT</strong></th>
        <th class="text-center" ><strong>DESCRIPTION</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" >
          <img src="/images/product-images/thumb/Weighing-and-Dispensing-Containment-Isolator-min.png" />
          <p><u><strong>Weighing and Dispensing Containment Isolator</strong></u></p>
        </th>
        <td  style="vertical-align: middle;">
          <ul>
            <li>Provides controlled negative pressure environments to maximize personnel protection</li>
            <li>Designed for weighing and dispensing</li>
            <ul>
              <li>Potent compounds</li>
              <li>Handling New Chemical Entities</li>
              <li>Containment solutions for compounds during sub-division & sampling processes</li>
            </ul>
          </ul>
        </td>
      </tr>

      <tr>
        <th class="text-center" ><img src="/images/product-images/thumb/Aseptic-containment-isolator-min.png"  />
          <p><u><strong>Aseptic Containment Isolator</strong></u></p></th>
        <td style="vertical-align: middle;">
          <ul>
            <li>Adaptable aseptic containment solution with user defined pressure & airflow regimes</li>
            <li>Premium solution for large volume sterility testing</li>
          </ul>
    </t>
    </tr>

  <tr>
    <th class="text-center" ><img src="/images/product-images/thumb/General-Processing-Platform-Isolator-min.png"  />
      <p><u><strong>General Platform Processing Isolator</strong></u></p></th>
    <td style="vertical-align: middle;">
      <ul>
        <li>Highly adaptable, unidirectional laminar airflow isolator</li>
        <li>For sterility testing requiring ISO Class 5 environment</li>
        <li>Advanced control system allows for:</li>
        <ul>
          <li>Positive or Negative Pressure</li>
          <li>Alteration of airflow patterns: Single Pass or Recirculating</li>
        </ul>
      </ul>
  </t>
  </tr>




  <tr>
    <th class="text-center" ><img src="/images/product-images/thumb/hpi-g-3-with-footswitch-white-gloves-thumb-min.png"  /><p><u><strong>Healthcare Platform Isolator (HPI-G3)</strong></u></p></th>
    <td style="vertical-align: middle;">
      <ul>
        <li>Highly efficient filters with 99.999% filtration rate of 0.1 to 0.3 microns</li>
        <li>Fully enclosed work zone for operator, product, and environment protection</li>
        <li>Esco ISOCIDE&trade;	 antimicrobial coating to minimize contamination</li>
        <li>ISO Class 5 work zone</li>
      </ul>
</t>
</tr>



  <tr>
    <th class="text-center" ><img src="/images/product-images/thumb/streamline-compounding-isolator-thumb-min.png"  /><p><u><strong>Streamline&reg;	 Compounding Isolator (Compounding Aseptic Containment Isolator</strong>

</u></p></th>
    <td style="vertical-align: middle;">
      <ul>
        <li>Fully enclosed working area for enhanced protection of operator, product, and environment
</li>
        <li>Esco ISOCIDE antimicrobial coating on all painted surfaces minimizes contamination
</li>
        <li>Robust dual-wall construction
</li>
        <li>ISO Class 5 work zone
</li>
      </ul>
</t>
</tr>



</tbody>
</table>
</div>


<p>&nbsp;</p>
<p><strong>REFERENCES:</strong></p>
<p style="padding: 10px;">1. Advanced Aseptic Processing: RABS and Isolator Operations. (2018). Retrieved from https://www.europeanpharmaceuticalreview.com/article/1372/advanced-aseptic-processing-rabs-and-isolator-operations/<br /><br />2. Beyond cleanrooms: Debating RABS and isolators | Healthcare Packaging. (2018). Retrieved from https://www.healthcarepackaging.com/article/beyond-cleanrooms-debating-rabs-and-isolators<br /><br />3. <strong>International Society of Pharmaceutical Engineers&nbsp;</strong>(2018). Retrieved from https://a3p.org/wp-content/uploads/2015/03/article_regulatory_2015_RABS-definition.pdf<br /><br />4. Isolators and RABS. (2018). Retrieved from https://www.pharmaceuticalonline.com/doc/isolators-and-rabs-0001<br /><br />5. KGaA, W. (2018). RABS versus Isolators | chemanager-online.com - Chemie und Life Science. Retrieved from https://www.chemanager-online.com/themen/reinraumtechnik/rabs-versus-isolators<br /><br />6. Restricted Access Barriers vs Isolators An Energy Consumption Comparison. (2018). Retrieved from https://www.pharmaceuticalonline.com/doc/restricted-access-barriers-vs-isolators-an-energy-consumption-comparison-0001<br /><br />7. Weston, F. (2018). Debating the Role of RABS and Isolators in Aseptic Manufacturing. Retrieved from <a href="http://www.pharmtech.com/debating-role-rabs-and-isolators-aseptic-manufacturing">http://www.pharmtech.com/debating-role-rabs-and-isolators-aseptic-manufacturing</a></p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><strong>&nbsp;</strong><em>Esco Pharma Pte. Ltd.</em><br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email: csis.pharma@escoglobal.com<br /><em>Esco Technologies, Inc.</em></p>
<p>Esco Pharma Factory<br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email: eti.pharma@escoglobal.com</p>
<p><em>&nbsp;</em><em>Esco GB Ltd.</em><br />Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p>&nbsp;</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-06-29 00:00:00'],
  ['news_category_id' => '1','old_id' => '141','slug' => 'the-future-radionanomedicine-trailblazes','title' => 'The Future: Radionanomedicine Trailblazes','banner_img' => 'the-future-radionanomedicine-trailblazes.jpg','banner_thumb' => 'the-future-radionanomedicine-trailblazes.jpg','description' => '<p>The new medicinal technology, radionanomedicine, is the simultaneous application of nuclear medicine with nanomedicine. This takes advantage of radiomedicine using trace technology, where minute amounts of materials are biologically distributed in vivo.</p>','content' => '<p>Conventional and modern medicine is providing people with healthier and longer lives, but researchers still want to make a new developments and discoveries. The advances in pharmaceutical technology have propelled the usual medications into greater heights, making the future of medicine brighter.</p>
<p>&nbsp;</p>
<p>The new medicinal technology, <strong>radionanomedicine</strong>, is the simultaneous application of nuclear medicine with nanomedicine. This takes advantage of radiomedicine using trace technology, where minute amounts of materials are biologically distributed <em>in vivo</em>. Radionanomedicine can be greatly used for targeted delivery and imaging for theranostic - therapeutic and diagnostic - purposes.</p>
<p>&nbsp;</p>
<p>The importance of nuclear medicine\'s theranostic application has recently grown due to the lack of treatment courses or options raised by individualized patient medications. Examples are imaging technologies: positron emission tomography (PET) and single photon emission computed tomography (SPECT), which help elucidate biodistribution and identify its potential for therapeutic success.</p>
<p>&nbsp;</p>
<p>Nuclear medicine is based on tracer technology, enabling its entry into the clinical field despite the radiation hazards of radionuclides. Patient use only require very minute amounts of radionuclides or radioisotopes and does not necessarily raise any concern of a hazardous pharmacologic effect.</p>
<p>&nbsp;</p>
<p>Radiopharmaceuticals are required to be produced under controlled conditions as with any other medicinal products. They are tested for their quality using validated operating procedures prior to patient administration.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>The production of radiopharmaceuticals requires quality and delivery by manufacturers, as well as the medical personnel in the safe handling of large quantities of radioactive substances and chemical processing. These include the operation and maintenance of processing facilities, complying with the guidelines of the current good manufacturing practices (cGMP), guaranteeing effective quality assurance and control systems, radioactive material transport, and the registration of drug products to the governing health authorities.</p>
<p>&nbsp;</p>
<p>Esco Pharma&rsquo;s units can serve as the primary engineering controls for the manufacture of radiopharmaceuticals:</p>
<p>&nbsp;</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/product-images/thumb/blood-cell-labeling-isolator-450px-min.png" alt="" width="301" height="210" /></p>
<p style="text-align: center;" align="center"><a href="/products/blood-cell-labeling-isolators/18">Blood Cell Labelling Isolator</a></p>
<p style="text-align: left;" align="center">&nbsp;</p>
<p style="text-align: left;" align="center"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/product-images/thumb/technetium-dispensing-isolator450px-min.png" alt="" width="287" height="341" /></p>
<p style="text-align: center;" align="center"><a href="/products/technetium-dispensing-isolators/27">Technetium Dispensing Isolator</a></p>
<p style="text-align: left;" align="center"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/product-images/thumb/radiopharmacy-ood-450px-min.png" width="284" height="408" /></p>
<p style="text-align: center;" align="center"><a href="/products/radiopharmacy-hood-lead-shielded-biological-safety-cabinet/41">Radiopharmacy Hood</a></p>
<p style="text-align: left;" align="center">&nbsp;</p>
<p style="text-align: left;" align="center">&nbsp;</p>
<p>Esco Pharma has a vision of providing the best for its clients. As the generation progresses, so does the company. With the option of customizing various products of the company, the alignment of Esco Pharma to the adjustment of what will be the future, continues.</p>
<p>&nbsp;</p>
<p><strong>References:</strong></p>
<p>1. Bakht, M., et al. (2017). The Potential Roles of Radionanomedicine and Radioexosomics in Prostate Cancer Research and Treatment. Current Pharmaceutical Design, 23(20). doi: 10.2174/1381612823666170216122412</p>
<p>&nbsp;</p>
<p>2. Lee, D. (2016). Radionanomedicine. European Journal of Nanomedicine, 8(2). doi: 10.1515/ejnm-2016-0010</p>
<p>&nbsp;</p>
<p><strong>Contact Us</strong></p>
<p><br /><em>Esco Pharma Pte. Ltd.</em><br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email: csis.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><em>Esco Technologies, Inc.</em><br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email: eti.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><em>Esco GB Ltd.</em><br />Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email: egb.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p>&nbsp;</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-06-29 00:00:00'],
  ['news_category_id' => '3','old_id' => '142','slug' => 'esco-joins-ispe-philippines','title' => 'Esco joins ISPE Philippines','banner_img' => 'esco-team-in-their-assigned-exhibitors-booth-during-the-first-day-of-the-ispe-event.jpg','banner_thumb' => 'esco-team-in-their-assigned-exhibitors-booth-during-the-first-day-of-the-ispe-event.jpg','description' => '<p>Esco, with its continued commitment and competence, have participated in the recent International Society for Pharmaceutical Engineering (ISPE) Philippines Affiliate Annual Meeting and Exhibition last June 26-27 at Makati Shangri-La Hotel. </p>','content' => '<p>Esco, with its continued commitment and competence, have participated in the recent International Society for Pharmaceutical Engineering (ISPE) Philippines Affiliate Annual Meeting and Exhibition last June 26-27 at Makati Shangri-La Hotel. ISPE is an international non-profit organization which provides an opportunity to different fields of Pharmaceutical Industry to gain innovative insights in Pharmaceutical Technology. <br /><br />Vivien Santillan, current President of the ISPE Philippines, spearheaded the event. A total of 20 exhibitors and approximately 180 participants have attended the ISPE Philippines Exhibition.</p>
<p>&nbsp;</p>

<p>Esco being one of the leading companies in the manufacture for pharmaceutical equipment, gains attention worldwide from different countries like Taiwan, Thailand, and even in the USA. Most of the inquiries were focused on the design and built of cleanrooms, preventive maintenance services, and the conduct of end-user seminars. Esco Team had the opportunity to discuss the company&rsquo;s overview specifically emphasizing the use of Aseptic Isolator.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="http://www.escoglobal.com/images/upload/esco-pharmas-product-specialist-mer-va-crisostomo-discussing-to-attendees-escos-company-overview.png" alt="" width="691" height="518" /></p>
<p style="text-align: center;"><em><span style="font-size: 10.0pt; line-height: 107%; font-family: Arial, sans-serif;">Esco Pharma&rsquo;s Product Specialist, Mer-va Crisostomo discussing to attendees Esco&rsquo;s company overview</span></em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="http://www.escoglobal.com/images/upload/awarding-of-ispe-board-members-to-esco-team-l-r-paul-quizon-mira-meneses-vivien-santillan.png" alt="" width="691" height="518" /></p>
<p style="text-align: center;"><em><span style="font-size: 10.0pt; line-height: 107%; font-family: Arial, sans-serif;">Awarding of ISPE board members to Esco Team. (L-R, Paul Quizon, Mira Meneses, Vivien Santillan) </span></em></p>
<p style="text-align: center;">&nbsp;</p>
<p>Esco is an advocate for the advancement of technology in pharmaceutical manufacturing industry both locally and internationally. It was indeed a successful event for both the attendees and the ISPE Philippines Organization.</p>
<p>&nbsp;</p>
<p>We hope to see you on the next event!</p>
<p><strong>&nbsp;</strong></p>
<p><strong>Contact Us</strong></p>
<p>Esco Pharma Pte. Ltd.<br />21 Changi South Street 1 Singapore 486777<br />Tel: +65 65420833<br />Fax: +65 65426920<br />Email: csis.pharma@escoglobal.com</p>
<p><br /><strong>Esco Technologies, Inc.</strong></p>
<p>Esco Pharma Factory<br />2512 Metropolitan Dr. Suite 120-B<br />Feasterville-Trevose, PA 19053-6738<br />Tel: +1 215-322-2155<br />Email: eti.pharma@escoglobal.com</p>
<p><br /><strong>Esco GB Ltd.</strong></p>
<p>Unit 2 R-Evolution @ Gateway 36<br />Kestrel Way, Barnsley, S70 5SZ<br />Tel: +44 (0) 1226 360799<br />Email: egb.pharma@escoglobal.com</p>
<p>&nbsp;</p>
<p><strong>About our BRANDS</strong></p>
<p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p>
<p>&nbsp;</p>
<p><strong>About Esco Pharma</strong></p>
<p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p>
<p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p>','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-07-02 00:00:00'],
  ['news_category_id' => '1','old_id' => '143','slug' => 'biological-safety-101','title' => 'Biological Safety 101','banner_img' => 'biological-safety-101.png','banner_thumb' => 'biological-safety-101.png','description' => '<p>Biosafety is defined as the discipline which addresses the containment and safe handling of infectious microorganisms and hazardous biological materials.</p>','content' => '<p>What is biosafety? It is defined as the discipline which addresses the containment and safe handling of infectious microorganisms and hazardous biological materials. This safe handling practice can be accomplished by applying containment principles and thorough risk assessment.</p> <p>Laboratory-acquired infections were first reported in the mid to late 1800&#39;s. This was when microbiology had advanced to the point wherein causative bacterial agents of common diseases such as cholera and tuberculosis were identified using Koch&#39;s postulates. Wooden and steel boxes were designed to avoid these laboratory-acquired infections; however, it wasn&#39;t until after several years more before the discipline of biosafety had developed.</p> <p>Biological safety or biosafety was established at the U.S. Army Biological Research Laboratories in Fort Detrick Maryland by Arnold G. Wedum, Director of Industrial Health and Safety. He is the Father of Modern Biosafety. He was one of the original pioneers of the first ever Biological Safety Conference. He was also a key person in the establishment of the American Biological Safety Association (ABSA).</p> <p>Laboratory safety can be achieved through the application of layered containment principles, in conjunction with thorough risk evaluation to protect the laboratory personnel from pathogens. These safety layers include primary and secondary containment.</p> <p>Primary containment offers immediate protection from biological and chemical hazard exposure to the laboratory personnel. Primary barriers include fume hoods, biological safety cabinets, and other engineering equipments. Personal Protective Equipment (PPE) like gloves, safety glasses, and laboratory coats may also be included as primary containment.</p> <p>Secondary containment, on the other hand, offers protection from unintended biohazard contamination to the laboratory personnel, community, and environment. This containment includes architectural and mechanical design elements of a facility.</p> <p>Containment is described in various levels which increase in complexity along with lab-associated risks. All the levels of containment have specific primary and secondary containment features. There are four containment or biosafety levels; BSL 1 to BSL 4. The criteria for each level are defined by the Centers for Disease Control and Prevention (CDC) and National Institutes of Health (NIH).</p> <p>Each BSL builds up on the previous level; thereby forming layer upon layer of constraints. These lab levels are determined by the following factors:</p> <ul> <li>containment risks</li> <li>infection severity</li> <li>transmissibility</li> <li>work nature</li> <li>microbial origin</li> <li>biological agent</li> <li>exposure route</li> </ul> <p>Biosafety Level 1 (BSL 1) classification is suitable for a working environment involving well-characterized agents that do not consistently cause diseases in immunocompetent adults, and present minimal potential hazard to the laboratory personnel and the environment. </p> <p>In general, work is conducted on open bench tops using standard microbiological practices. Special facilities or equipment for containment are not required, but may be used as determined by proper risk assessment. Laboratory personnel must be supervised by a well-trained scientist and have the proper training in the laboratory procedures to be conducted. </p> <p>Biosafety Level 2 (BSL 2) builds upon BSL 1. BSL 2 classification is suitable for handling agents which pose moderate hazards to the personnel and the environment. This level differs from BSL 1 in that access to the laboratory is restricted when work is being conducted. Another difference is that all procedures which may cause infectious agents to spread are conducted in biosafety cabinets or other containment equipments. </p> <p>Biosafety Level 3 (BSL 3) is applied in diagnostics, clinical, research, teaching, or production facilities which involve the handling of exotic agents which may cause serious or potentially lethal disease when inhaled. All procedures which involve infectious materials are conducted within physical containment equipments. Laboratory personnel must be trained in handling these potentially lethal agents and must be supervised by competent scientists who are able to handle infectious agents. BSL 3 laboratories have special engineering and design features. </p> <p>Biosafety Level 4 (BSL 4) is applicable when handling dangerous agents which pose high risks of laboratory infection and life-threatening diseases, for which there are no available vaccines or treatments. Biological agents with a similar antigenic relationship to agents requiring BSL 4 containment must also be handled at this level, until sufficient data are obtained. Laboratory personnel must be competent and have thorough training in handling extremely hazardous infectious agents. They must be able to understand the primary and secondary containment functions of standard and special practices, as well as laboratory designs. </p> <p>There are two models for BSL 4 laboratories: cabinet laboratory and suit laboratory. For cabinet laboratories, agent handling is performed in a Class III biosafety cabinet while for suit laboratories, a positive pressure-supplied air protective suit is worn by a laboratory personnel. Both have special engineering and design features to prevent the spread of microorganisms into the environment. </p> <p>Class III biosafety cabinets are applicable in the research and development of new drugs, particularly in vaccine production. The manufacturing of vaccines is critical and entails stringent facility requirements. Since vaccines are given to millions of healthy individuals, they are held to high safety standards. </p> <p class="text-center"> <a href="http://www.escoglobal.com/product/class-ii-type-b1-biological-safety-cabinets/class-ii-type-b1-biological-safety-cabinet-e-series/lb1/"> <img src="http://www.escoglobal.com/images/upload/LB1.png" class="img-responsive" style="margin: auto;"> </a> <br> <strong><a href="http://www.escoglobal.com/product/class-ii-type-b1-biological-safety-cabinets/class-ii-type-b1-biological-safety-cabinet-e-series/lb1/">Labculture&reg; Class II Type B1 Biological Safety Cabinet (E-Series)</a></strong> </p> <p>Key Features:</p> <ul> <li>Energy-efficient, using the latest generation DC ECM motor</li> <li>Ergonomic, with arm rest, angled front, and ADA-compliant control pad</li> <li>Compliant to NSF/ANSI 49</li> <li>Provides operator, product, and environmental protection</li> <li>Negative pressure plenum surrounds the contaminated positive pressure plenum</li> </ul> <p class="text-center"> <a href="http://www.escopharma.com/products-sub-page.php?productId=40&amp;pg=pdt"> <img src="http://www.escopharma.com/images/products/containment-barrier-isolator-iii.jpg" class="img-responsive" style="margin: auto;width:50%;"> </a> <br> <strong><a href="http://www.escopharma.com/products-sub-page.php?productId=40&amp;pg=pdt">Containment Barrier Isolator &mdash; III (CBI-III)</a></strong> </p> <p>Esco offers a range of Class III cabinets like the CBI-III. These cabinets provide the highest level of personnel, product, and environment protection against agents belonging to BSL 1, 2, 3, and 4. They are frequently used for handling the deadliest biohazards such as bacteria, viruses, and microorganisms.</p> <p>&nbsp;</p> <p><strong>References:</strong> </p> <ol> <li>1. Chosewood, L. C. (2009). Biosafety in Microbiological and Biomedical Laboratories. Retrieved last 17 July 2018, from <a href="https://www.cdc.gov/biosafety/publications/bmbl5/BMBL.pdf">https://www.cdc.gov/biosafety/publications/bmbl5/BMBL.pdf</a> </li> <li>2. Consolidated Sterilizer Systems. (n.d.) Do you know the Difference in Laboratory Biosafety Levels 1, 2, 3 &amp; 4? Retrieved last 17 July 2018, from <a href="https://consteril.com/biosafety-levels-difference/">https://consteril.com/biosafety-levels-difference/</a></li> </ol> <p>&nbsp;</p> <p><strong>Contact Us</strong></p> <p><span style="color: #92D050;">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p> <p><span style="color: #92D050;">Esco Technologies, Inc.</span><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a><br></p> <p><span style="color: #92D050;">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email:<a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p> <p>&nbsp;</p> <p><strong>About our BRANDS</strong></p> <p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p> <p><strong>About Esco Pharma</strong></p> <p>Esco Pharma&#39;s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p> <p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p> ','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-07-27 00:00:00'],
  ['news_category_id' => '1','old_id' => '144','slug' => 'track-and-trace-compliance-the-serialization-challenge','title' => 'Track and Trace Compliance: "The Serialization Challenge"','banner_img' => 'track-and-trace-compliance-the-serialization-challenge.png','banner_thumb' => 'track-and-trace-compliance-the-serialization-challenge.png','description' => '<p>Last June 2017, the United States Food and Drug Administration (FDA) have released Draft Guidance regarding Product Identifier Requirements under the Drug Supply Chain Security Act (DSCSA).</p>','content' => '<p>The Pharmaceutical Industry is currently facing a global challenge in the packaging phase of pharmaceutical manufacturing. Last June 2017, the United States Food and Drug Administration (FDA) have released Draft Guidance regarding Product Identifier Requirements under the Drug Supply Chain Security Act (DSCSA).</p> <p>According to FDA, a Product Identifier is a &ldquo;unique identity for individual prescription drug packages and cases, which will allow trading partners. This includes the product&#39;s lot number, expiration date, national drug code (NDC) and a serial number.&rdquo; Each serial number is different for each package, creating a unique product identifier.</p> <p>Automatically, a drug product is deemed &ldquo;misbranded&rdquo; if it fails to bear the product identifier. Usually, the pharmaceutical industry is known for falsified and counterfeit drug products. According to studies, 7-15% of all medicines circulated in developed countries are falsified along with the 30-40% of circulated in developing. Serialization will assure the consumers that the drug product they are buying is 100% safe and effective. </p> <p>FDA started to implement the policy last 27 November 2017 but the requirements, the standard developments, and the product tracing system will continue to be phased and studied in until 2023.</p> <p>Meanwhile, DSCSA in the US is not the only pharmaceutical landscape to set new standards though, as the European Union (EU) will also be enforcing new standards for tracking drugs via the Falsified Medicines Directive (FMD) and its associated Delegated Regulation (DR). The deadline set was not later than February 2019. </p> <p>Naturally, US &amp; EU unprepared manufacturers and trading partners like wholesaler distributors, repackagers, contract manufacturing organization (CMO) have expressed their concerns in the implementation of product identifiers.</p> <p>&nbsp;</p> <p>Some of the major concerns include: </p> <ol> <li>1. One year complacency is not enough; insisting normal transition and implementation period is 18 months and above. </li> <li>2. New validation protocol in packaging line operations for regulatory requirement</li> <li>3. Investment for new technology for hardware/software and the physical equipment</li> <li>4. Verification of the authenticity and integrity of the pharma package</li> </ol> <p>&nbsp;</p> <p>While the US FDA gives much extension to their pharmaceutical companies, in EU countries, there is a possibility of medicines being rejected by government authorities and having the shipments to stop if a pharmaceutical company didn&#39;t get to comply after February 2019.</p> <p>The widespread selling of adulterated, misbranded, and counterfeit drugs is the main factor why serialization is being imposed by FMD and DSCSA. Not only will this improve the pharmaceutical supply chain but will also help the current public health system. A safer drug supply chain is truly worth it, and Esco Pharma will be there along the way!</p> <p>&nbsp;</p> <p style="font-size: 0.85em;">Reference/s:</p> <ol style="font-size: 0.85em;"> <li>1. Tallant, S. (2018). Serialization and Line Validation &ndash; the Impacts. Retrieved from <a href="http://blog.systechone.com/blog/serialization-line-validation-impact" target="_blank">http://blog.systechone.com/blog/serialization-line-validation-impact</a> </li> <li>2. EU serialisation: Challenges facing pharma one year out. (2018). Retrieved from <a href="https://www.in-pharmatechnologist.com/Article/2018/02/12/EU-serialisation-Challenges-facing-pharma-one-year-out" target="_blank">https://www.in-pharmatechnologist.com/Article/2018/02/12/EU-serialisation-Challenges-facing-pharma-one-year-out</a></li> <li>3. MD, USA. (2017). Product Identifier Requirements under the Drug Supply Policy Chain Security Act - Compliance Policy Guidance for Industry [Ebook] (1st ed.). Retrieved July 17 2018 from <a href="https://www.fda.gov/downloads/Drugs/GuidanceComplianceRegulatoryInformation/Guidances/UCM565272.pdf" target="_blank">https://www.fda.gov/downloads/Drugs/GuidanceComplianceRegulatoryInformation/Guidances/UCM565272.pdf</a></li> <li>4. Serialisation. (2018). Retrieved from <a href="https://www.recipharm.com/manufacturing/serialisation" target="_blank">https://www.recipharm.com/manufacturing/serialisation</a></li> </ol> <p>&nbsp;</p> <p><strong>Contact Us</strong></p> <p><span style="color: #70AD47;">Esco Pharma Pte. Ltd.</span><br>21 Changi South Street 1 Singapore 486777<br>Tel: +65 65420833<br>Fax: +65 65426920<br>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p> <p><span style="color: #70AD47;">Esco Technologies, Inc.</span><br>Esco Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155<br>Email: <a href="mailto:eti.pharma@escoglobal.com">eti.pharma@escoglobal.com</a></p> <p><span style="color: #70AD47;">Esco GB Ltd.</span><br>Unit 2 R-Evolution @ Gateway 36<br>Kestrel Way, Barnsley, S70 5SZ<br>Tel: +44 (0) 1226 360799<br>Email: <a href="mailto:egb.pharma@escoglobal.com">egb.pharma@escoglobal.com</a></p> <p>&nbsp;</p> <p><strong>About our BRANDS</strong></p> <p>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products leading to improved operator protection, reduction of cross contamination, and more efficient processing, thereby directly and indirectly advancing occupational health and human healthcare.</p> <p><strong>About Esco Pharma</strong></p> <p>Esco Pharma\'s largest global network of localized application specialists and service offices provides faster response and local service translating into more competitive costs on maintenance, and shorter project life cycles.</p> <p>Esco provides standardized platforms with inbuilt configurations without constraints on operational parameters. This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with international standards for occupational health and safety.</p> ','is_activated' => '1','is_shareable' => '1','meta_keywords' => NULL,'meta_description' => NULL,'created_at' => '2018-07-30 00:00:00'],



           ];



        foreach($news as $singleNews){
        	$get = $this->createPage($singleNews);
        	//	var_dump($get);
        }

    }
    public function createPage($news)
    {
    	$this->news->create($news);
    	return $this;
    }

}
