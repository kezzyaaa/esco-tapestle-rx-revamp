<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductCategory;
use App\ContainmentControl;
use App\Product_application_category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $product;


    public function __construct(ProductCategory $prodCat, Product $product, Product_application_category $prodAppCat, ContainmentControl $containmentControl)
    {
    	$this->product = $product;

    }


    public function run()
    {

        $prods  = [


            ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'old_id' => '31',
             'slug' => 'ceiling-laminar-airflow',
             'brand' => null,
             'name' => 'Ceiling Laminar Airflow',
             'details' => '<p>Ceiling Laminar Airflow (CLAF) unit is a containment equipment module utilizing a zoned unidirectional (laminar) downflow supply of air to positively pressurize and purge the working environment from potential contaminants; thereby providing enhanced aseptic work zones for maintaining process integrity and/or product protection.</p>
             <h3 class="mt-3 prod-detail-list-title">Applications</h3>
                         <ul class="image-list-style-ul-lg">
                             <li><h4 class="prod-detail-list-title-normal-and-weight">Medical Industry (i.e., operating theatre)</h4></li>
                             <li><h4 class="prod-detail-list-title-normal-and-weight">Filling Line System ISO Class 5 coverage</h4></li>
                             <li><h4 class="prod-detail-list-title-normal-and-weight">Nanotechnology</h4></li>
                             <li><h4 class="prod-detail-list-title-normal-and-weight">High-End Electronics</h4></li>
                             <li><h4 class="prod-detail-list-title-normal-and-weight">Space Industry</h4></li>
                             <li><h4 class="prod-detail-list-title-normal-and-weight">Pharmaceutical Industry</h4></li>
                             <li><h4 class="prod-detail-list-title-normal-and-weight">Research and Development Laboratories</h4></li>
                         </ul>',
            'applications' => '
            <h2 class="mt-3 prod-detail-list-title"><a href="/">Esco Pharma’s</a> Ceiling Laminar Airflow units are customizable to be:</h2>
            <ul class="image-list-style-ul-lg">
                <li>Utilized as open restricted access barrier system over filling and capping machines</li>
                <li>Stand-alone units mounted via eye bolts and drop rods over specific applications</li>
                <li>Stand-alone units mounted over mobile stands for mobile aseptic zones</li>
            </ul>
                ',

             'image' => 'ceiling-laminar-airflow-units-min.png',
             'image_thumb' => 'ceiling-laminar-airflow-units-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'Ceiling Laminar Airflow (CLAF) | Esco Pharma',
             'meta_keywords' => 'ceiling laminar airflow, laminar flow ceiling',
             'meta_description' => 'Esco Pharma Ceiling Laminar Airflow (CLAF) units provide enhanced aseptic work zones via unidirectional airflow to purge contaminants from critical areas.'],

            ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'old_id' => '41',
             'slug' => 'cytotoxic-safety-cabinet',
             'brand' => 'Cytoculture®',
             'name' => 'Cytotoxic Safety Cabinet',
             'details' => '<p>Esco’s Cytoculture® Cytotoxic Safety Cabinet is the premium solution for cytotoxic/antineoplastic drug processing; providing the highest level of patient, pharmacist, and environmental protection. This revolutionary product builds on Esco’s experience of more than 20 years as a global leader in biological safety containment technology.
             </p>
             <p>The unique demands of handling and preparing cytotoxic drugs for use in chemotherapy require a specialized cabinet. With this in mind, Esco has developed a highly specialized cabinet designed especially for the preparation of these potentially dangerous drugs.
             </p>
                         <p class="my-3"><strong>Key Benefits:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Safe filter changing</p></li>
                             <li><p>Safer dual exhaust filters</p></li>
                             <li><p>HEPA certified to EN 12469</p></li>
                         </ul>',
             'image' => 'Cytoculture-min.png',
             'image_thumb' => 'cytoculture-ytotoxic-safety-cabinets-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Airflow Containment, Cytotoxic compounding, Chemotherapy, Trifilter system, Sterile Compounding, Hazardous Drugs, Pharmacy Compounding',
             'meta_description' => 'Esco’s Cytoculture® Cytotoxic Safety Cabinet is the premium solution for cytotoxic/antineoplastic drug processing; providing the highest level of patient, pharmacist, and environmental protection. This revolutionary product builds on Esco’s experience of more than 20 years as a global leader in biological safety containment technology'],

            ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'old_id' => '6',
             'slug' => 'downflow-booths',
             'brand' => 'Pharmacon™',
             'name' => 'Downflow Booths',
             'details' => '<p class="text-justify">Esco Pharma Downflow Booth (DFB) is designed in compliance with international cGMP guidelines. It is fully equipped to provide operator, process, and/or product protection during open handling processes such as: weighing / dispensing or charging of powder into intermediate bulk container (IBC), bins or equivalent, and sampling in cGMP warehouses.</p>
             <p class="text-justify">Standard Esco DFB has over 420 possible dimensional models with approximately 3.5 million possible system configurations. As an established manufacturer and supplier of sampling / dispensing booths, Esco Pharma can guarantee a standard solution to fit your specific process and facility requirements. Should a standard option not fit your requirements, Esco can offer a customized solution.
             </p>
             <h3 class="mt-3 prod-detail-list-title">Pharmacon™ DFB Applications</h3>
                        <div class="row">
                            <div class="col-6">
                                <ul class="image-list-style-ul-lg">
                                    <li>Pharmaceutical</li>
                                    <li>Cosmetics</li>
                                    <li>Nutraceutical</li>
                                    <li>Food</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="image-list-style-ul-lg">
                                    <li>Biological</li>
                                    <li>Animal</li>
                                    <li>Robotic</li>
                                    <li>Electronic</li>
                                </ul>
                            </div>
                        </div>',
             'image' => 'downflow-booth-min.png',
             'image_thumb' => 'down-flow-booths-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'Downflow Booths | Esco Pharma',
             'meta_keywords' => 'downflow booths, dispensing booths, pharmaceutical sampling booths, pharmaceutical weighing booths, Pharmacon',
             'meta_description' => 'Downflow Booths provide operator, process and / or product protection by utilizing HEPA filtered unidirectional downflow of air, to maintain an ISO Class 5 environment at rest within the work zone and to capture particulates during open handling processes'],


            ['code' => 'lfht/lfvt',
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'slug' => 'laminar-flow-horizontal-vertical-trolley',
             'brand' => '',
             'name' => 'Laminar Flow Horizontal Trolley / Laminar Flow Vertical Trolley',
             'details' => '<p>Esco Pharma Laminar Flow Horizontal / Vertical Trolley (LFHT/LFVT) are mobile transport carts or trolleys providing ISO Class 5 clean air (as per ISO 14644-1). These laminar flow trolleys utilize a unidirectional airflow to eliminate contamination during the transfer of sterile/aseptic materials.</p>
                         <p>Laminar trolleys are customizable units that can provide:</p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Aseptic zones in recirculating or single pass airflow</p></li>
                             <li><p>Positive pressure (standard) for non-hazardous aseptic/sterile products/material transport</p></li>
                             <li><p>Negative pressure for hazardous products/material containment</p></li>
                         </ul>',
             'image' => 'LF-HORIZON-_-VERTICAL-TROLLY-min.png',
             'image_thumb' => 'laminar-flow-horizontal-vertical-trolley-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'laminar flow vertical trolley, laminar flow horizontal trolley, vertical laminar air flow trolley, horizontal laminar air flow trolley',
             'meta_title' => 'Laminar Flow Horizontal / Vertical Trolley | Esco Pharma',
             'meta_description' => 'Esco Pharma Laminar Flow Horizontal/ Vertical Trolley (LFHT/LFVT) utilizes unidirectional ISO Class 5 clean air to allow for the aseptic transfer of materials.'],


            ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'old_id' => '7',
             'slug' => 'laminar-flow-straddle-units',
             'brand' => '',
             'name' => 'Laminar Flow Straddle Units',
             'details' => '<p>Esco Enterprise Laminar Flow Straddle Units are designed for the protection of large-scale industrial processes which typically require multiple units connected in an assembly line configuration. These straddle units eliminate the operating costs associated with a full-sized ISO Class 3 or 4 cleanroom as it can easily be placed inside an ISO Class 8 area to provide an ultra-clean environment for the main process.</p>
                         <p>Esco laminar flow clean benches are the premium selection for the discerning purchaser, offering a combination of value, high quality construction, low operating noise levels, and a wide product range to suit all budgets, from the industry leader.</p>
                         <p class="my-3"><strong>Key Benefits:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Low noise</p></li>
                             <li><p>Reduced vibration</p></li>
                             <li><p>Energy Efficient</p></li>
                             <li><p>Disposable prefilter</p></li>
                         </ul>',
             'image' => 'lf-stradle-unit-min.png',
             'image_thumb' => 'enterprise-laminar-flow-straddle-units-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Lamnar Straddle Units, Straddle Units, Sterile Process, Assembly Line, Large-Scale Process, Airflow Containment',
             'meta_description' => 'Esco Enterprise Laminar Flow Straddle Units are designed for the protection of large-scale industrial processes which typically require multiple units connected in an assembly line configuration. '],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '42',
             'slug' => 'biopass-pass-through',
             'brand' => 'BioPass™',
             'name' => 'Pass Through',
             'details' => '<p>BioPass™ Pass Through, a floor standing airtight transfer chamber, is an all-in-one automated hydrogen peroxide (H<sub>2</sub>O<sub>2</sub>) based biodecontamination solution functioning as a pass through cabinet to facilitate in the transfer of materials or specimen in and out of controlled environments such as cleanrooms or biosafety laboratories.
             <br><br>
             This is equipped with onboard ventilation, and built-in/ integrated Esco BioVap™ biodecontamination system with automated pressure testing capabilities.
             <br><br>
             Unlike ordinary pass through boxes or cabinets intended only for small material transfers, the BioPass™ Pass Through allows passing of large equipment into an ISO Class 5 cleanroom in an aseptic manner.
             <br><br>
             BioPass™ Pass Through cabinet is  designed in compliance with cGMP requirements, and is constructed as a full 316L stainless steel pass through; therefore, making it suitable for extensive laboratory and/or cleanroom applications.
             </p>
                         ',

             'applications' => '
             <h3 class="mt-3 prod-detail-list-title">Industries Served:</h3>
                <div class="row">
            <div class="col-md-6">
            <ul class="image-list-style-ul-lg">
            <li>Hospital</li>
            <li>Food, Beverages & Confectionary</li>
            <li>Manufacturing Facilities</li>
            <li>Veterinary Surgeries</li>
            </ul>
            </div>
            <div class="col-md-6"><ul class="image-list-style-ul-lg">
            <li>Dentist</li>
            <li>Primary Healthcare Facilities</li>
            <li>Pharmaceutical Industry</li>
            </ul></div>
            </div>
             ',

             'image' => 'biopass-2-min-full.png',
             'image_thumb' => 'Biopas-2-min-thumb.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'BioPass™ Pass Through Chamber with H₂O₂ | Esco Pharma',
             'meta_keywords' => 'Esco Healthcare, BioPass, pass through cabinets, pass through chambers, biodecontamination, H2O2, cleanroom pass through',
             'meta_description' => 'Esco Pharma BioPass™ Pass Through is an all-in-one automated biodecontamination solution for material transfers between controlled environments.'],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '26',
             'slug' => 'cleanroom-air-showers',
             'brand' => '',
             'name' => 'Cleanroom Air Showers',
             'details' => '<p>Esco Air Showers (EAS) are self-contained chambers installed strategically at entrances to cleanrooms and other controlled environments. They minimize particulate matter entering or exiting the clean space to mitigate the risk for cross-contamination.</p>
             <p>Personnel and materials entering or exiting the controlled environment are “scrubbed” with ULPA-filtered air by high-velocity air jets running at 18-30 m/s (3543-5906 fpm). Contaminated air is then drawn through the base within the unit, filtered and recirculated.
             </p>
             <p class="mb-0">Esco is the pioneering company for the manufacture and construction of cleanroom air showers with
             </p>
             <h3 class="prod-detail-list-title-normal">different applications in the following areas:</h3>
             <ul class="image-list-style-ul-lg">
                <li>micro-electronics</li>
                <li>semiconductors</li>
                <li>pharmaceutical</li>
                <li>spray painting</li>
                <li>laboratory animal research</li>
                <li>food markets</li>
            </ul>
            <p>With greater than 40 years of experience in the industry, Esco is consistently manufacturing, and supplying reliable air showers and clean air solutions to reduce the potential for cross-contamination, and enhance cleanroom integrity.</p>',
             'image' => 'Cleanroom-air-showers-min.png',
             'image_thumb' => 'Cleanroom-air-showers-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'Cleanroom Air Showers | Esco Pharma',
             'meta_keywords' => 'cleanroom air showers, air shower manufacturer, esco air shower, air shower',
             'meta_description' => 'Esco Pharma is the pioneer company for the manufacture of reliable air showers intended to "scrub" off surface contaminants, and enhance cleanroom integrity'],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '34',
             'slug' => 'dynamic-passboxes-dynamic-floor-laminar-hatches',
             'brand' => '',
             'name' => 'Dynamic Passboxes / Dynamic Floor Laminar Hatches (DPB/DFLH)',
             'details' => '<p class="mb-3">Esco Dynamic Passboxes (DPB) and Esco Dynamic Floor Laminar Hatches (DFLH) are aseptic architectural systems used to prevent contaminants from leaking into aseptic suites. They are utilized for aseptic transfer of materials into and out of the critical process environments.</p>
             <h2 class="mt-3 prod-detail-list-title">Applications:</h2>
             <ul class="image-list-style-ul-lg">
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Manufacturing Facilities</h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Pharmaceutical Industry</h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Cleanroom and Controlled Environments </h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">cGMP facilities</h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Nanotechnology</h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Semiconductors Industry</h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Space Industry</h3></li>
                 <li><h3 class="prod-detail-list-title-normal-and-weight">Automotive Industry</h3></li>
             </ul>',
             'image' => 'dynamic-pass-boxes-min.png',
             'image_thumb' => 'dynamic-pass-boxes-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Dynamic pass boxes, Pass through cabinet',
             'meta_title' => 'Dynamic Pass Box/ Dynamic Floor Laminar Hatch | Esco Pharma',
             'meta_description' => 'Esco Pharma manufactures dynamic pass boxes/ dynamic floor laminar hatches (DPB/ DFLH) which can provide ISO Class 5 (Grade A) air cleanliness.'],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '25',
             'slug' => 'esco-air-shower-pass-box',
             'brand' => 'Infinity®',
             'name' => 'Esco Air Shower Pass Box',
             'details' => '<p>The Esco Air Shower Pass Box (EAS-PB) is a cost-effective solution in controlling the ingress of contamination into cleanrooms and its surrounding facilities. Its high velocity ULPA-filtered air jets ensure that all materials are scrubbed off of possible particulates that might affect the sterility of the process and final products. </p>
             <p class="my-3"><strong>Key Benefits:</strong></p>
             <ul class="image-list-style-ul-lg">
                 <li><p>Energy Efficient</p></li>
                 <li><p>SS 304 nozzles</p></li>
                 <li><p>SS 304 base surface</p></li>
                 <li><p>Acrylic doors</p></li>
                 <li><p>Disposable prefilter</p></li>
             </ul>
             ',
             'image' => 'Infinity-air-shower-pass-box-min.png',
             'image_thumb' => 'Infinity-air-shower-pass-box-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Pass Box, Air Shower, Integrated Chamber, Material Transfer, Controlled Room Environment, Cleanroom Facility, ISO Class, Sterile Compounding, Aseptic Processing, Scrub, Air Jets, Cross-Contamination Prevention, Ready to Install, Interlocked, Centrifugal blower, High Velocity, UV light ',
             'meta_description' => 'The Esco Air Shower Pass Box (EAS-PB) is an effective solution in controlling the ingress of contamination into cleanrooms and its surrounding facilities. Its high velocity ULPA-filtered air jets ensure that all materials are scrubbed off of possible particulates that might affect the sterility of the process and final products.'],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'slug' => 'esco-sputum-booth',
             'brand' => '',
             'name' => 'Esco Sputum Booth',
             'details' => '<p>Esco Sputum Collection Booth (ESB) controls exposure risk to harmful aerosols / airborne diseases by providing containment using air flow to capture and exhaust out aerosols from sputum during expectoration, handling, or processing. We provide both operator / patient and environmental protection. </p>',
             'image' => 'sputum-booth-min.png',
             'image_thumb' => 'Sputum-Booth-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Chamber, Booth, Operator Protection, Patient Protection, Environment Protection, Airborne, Aerosol, Droplet Nuclei, Disease, Virus, Containment, Air Entrapment, Expectoration, Sputum, Samples, Negative Pressure, ISO Class 5, UV light, Downflow Air',
             'meta_description' => 'Esco Sputum Collection Booth (ESB) controls exposure risk to harmful aerosols / airborne diseases by providing containment using air flow to capture and exhaust out aerosols from sputum during expectoration, handling, or processing. We provide both operator / patient and environmental protection.'],

            ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'old_id' => '9',
             'slug' => 'garment-storage-cabinet',
             'brand' => 'Esco',
             'name' => 'Garment Storage Cabinet',
             'details' => '<p>Esco laminar flow cabinets are the premium selection for the discerning user, offering a combination of value, high quality construction, low operating noise levels, and a wide product range to suit all budgets, from an industry leader. </p>
                         <p>Esco garment storage cabinets make a positive contribution to maintaining the cleanliness of a cleanroom environment as it enables garments to be stored in a visible and organized manner. </p>',
             'image' => 'garment-storage-cabinet-min.png',
             'image_thumb' => 'garment-storage-cabinet-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Garment Storage Cabinet, Storage Cabinet, Cleanroom Equipment, Pharmaceutical Manufacture',
             'meta_description' => 'Esco garment storage cabinets make a positive contribution to maintaining the cleanliness of a cleanroom environment as it enables garments to be stored in a visible and organized manner.

             '],

            ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'slug' => 'glassware-hoods',
             'brand' => 'Esco',
             'name' => 'Glassware Hoods',
             'details' => '<p>The Esco Glassware Hood is the premium solution for containing specialized equipment in a kilo lab, pilot plant or R&D environment. Coined after “glassware reactors” and “fume hoods”, glassware hoods are customizable units designed for the containment of glassware set-ups for batch reactions, distillation set-ups, and chemical synthesis. It provides operator protection against fumes and spillages/breakages as well as protection against the explosive properties of fumes/vapors.</p>',
             'image' => 'glass-hoods-2-min.png',
             'image_thumb' => 'glass-hood-2-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Glassware Hood, Laboratory Hood, Laboratoy Setup, Pharmaceutical Manufacture, Sterile Process, Lab Sash, Lab Hood, Airflow Containment',
             'meta_description' => 'The Esco Glassware Hood is the premium solution for containing specialized equipment in a kilo lab, pilot plant or R&D environment. '],


            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '30',
             'slug' => 'pass-boxes-transfer-hatches',
             'brand' => 'Infinity®',
             'name' => 'Pass Boxes',
             'details' => '<p>This allows the aseptic transfer of materials in and out of <strong>cleanroom</strong> areas. It lessens operator traffic inside controlled facilities, thus, decreasing the risk for cross-contamination of processes and final products.</p>
                         <p><strong>Key Benefits:</strong> </p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Reliable Mechanical Interlock</p></li>
                             <li><p>SS 304 base surface</p></li>
                             <li><p>Polycarbonate viewing windows</p></li>
                         </ul>
                         ',
             'image' => 'infinity-pass-box-min.png',
             'image_thumb' => 'infinity-pass-box-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Pass Box, Hatch, Material Transfer, Integrated, Controlled Room Environment, Cleanroom Facility, Sterile Compounding, Aseptic Processing, Cross-Contamination Prevention, Interlocked, UV light, ISO Class, CGMP Compliant',
             'meta_description' => 'This allows the aseptic transfer of materials in and out of cleanroom areas. It lessens operator traffic inside controlled facilities, thus, decreasing the risk for cross-contamination of processes and final products.'],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '27',
             'slug' => 'cleanroom-transfer-hatch',
             'brand' => 'Infinity®',
             'name' => 'Cleanroom Transfer Hatches',
             'details' => '<p>This allows the aseptic transfer of materials into and out of cleanroom areas. It lessens operator traffic inside controlled facilities, thus, decreasing the risk for cross-contamination of processes and final products.</p>
                         <p class="my-3"><strong>Key Benefits:</strong> </p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Reliable Mechanical Interlock</p></li>
                             <li><p>Easy-to-clean full pharmaceutical grade SS interior and exterior with coved corners</p></li>
                             <li><p>10 mm tempered glass</p></li>
                         </ul>
                         ',
             'image' => 'infinity-cleanroom-transfer-hatch-min.png',
             'image_thumb' => 'infinity-cleanroom-transfer-hatch-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Pass Box, Hatch, Material Transfer, Integrated, Controlled Room Environment, Cleanroom Facility, Sterile Compounding, Aseptic Processing, Cross-Contamination Prevention, Interlocked, UV light, ISO Class, CGMP Compliant',
             'meta_description' => 'This allows the aseptic transfer of materials into and out of cleanroom areas. It lessens operator traffic inside controlled facilities, thus, decreasing the risk for cross-contamination of processes and final products.'],

            ['code' => null,
             'product_category_id' => '2',
             'product_application_category_id' => '0',
             'old_id' => '28',
             'slug' => 'soft-wall-cleanroom',
             'brand' => 'Soft Capsule®',
             'name' => 'Soft Wall Cleanroom',
             'details' => '<p>The ideal solution when clean air areas need to be created on a small to mid scale. Flexible and economical, they may be easily relocated when application requirements change.</p>
                         <p class="my-3"><strong>Applications:</strong> </p>
                         <div class="row">
                             <div class="col-md-6">
                                 <ul class="image-list-style-ul-lg">
                                     <li><p>Pharmaceuticals, Grade A filling suites</p></li>
                                     <li><p>Medical devices, plastic injection moulding</p></li>
                                     <li><p>Electronics assembly</p></li>
                                     <li><p>Contact lens packaging</p></li>
                                     <li><p>Hospital pharmacy (USP 797)</p></li>
                                 </ul>
                             </div>
                             <div class="col-md-6">
                                 <ul class="image-list-style-ul-lg">
                                     <li><p>Biotechnology</p></li>
                                     <li><p>Nanotechnology</p></li>
                                     <li><p>Aerospace</p></li>
                                     <li><p>Quality control</p></li>
                                     <li><p>Food industries</p></li>
                                 </ul>
                             </div>

                         </div>
                         ',
             'image' => 'soft-capsule-soft-wall-cleanroom-min.png',
             'image_thumb' => 'soft-capsule-soft-wall-cleanroom-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Aseptic Processing, Controlled Environment, Sterile Compounding, ISO Class 5, Mobile, Soft-walled Cleanroom, Free-standing, Stand-alone, Laminar Air Flow, Downward Air Stream',
             'meta_description' => 'The ideal solution when clean air areas need to be created on a small to mid scale. Flexible and economical, they may be easily relocated when application requirements change.'],

            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'slug' => 'advanced-processing-platform-isolator',
             'brand' => null,
             'name' => 'Advanced Processing Platform Isolator (APPI)',
             'details' => '<p>The Advanced Processing Platform Isolator (APPI) is used as a barrier to provide a biologically free environment for aseptic processes and other related activities requiring a sterile environment. It eliminates the need to use a high degree of Personal Protective Equipment within a cleanroom facility. </p>
                         <p class="my-3"><strong>Applications:</strong> </p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Pharmacy Compounding (Chemotherapy/TPN) </p></li>
                             <li><p>Small Batch Sterility Testing </p></li>
                             <li><p>Small-scale Potent Material Handling </p></li>
                             <li><p>Cell Processing </p></li>
                             <li><p>Aseptic Processing </p></li>
                             <li><p>Research and Development </p></li>
                         </ul>
                         ',
             'image' => 'Advanced-processing-platform-isolator-min.png',
             'image_thumb' => 'Advanced-processing-platform-isolator-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => null],


            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'old_id' => '17',
             'slug' => 'aseptic-containment-isolator',
             'brand' => null,
             'name' => 'Aseptic Containment Isolator (ACTI)',
             'details' => '<p>Esco Aseptic Containment Isolator (ACTI) works in conjunction with advanced material transfer techniques and a biodecontamination system which provides a 6 log reduction in viable contaminants.</p>
                         <p>ACTI provides standard configurable designs able to adapt to various batch sizes and process flows. Through a user-friendly operating system, this isolator can be setup to operate under recirculating or total exhaust airflow scheme and in positive or negative pressure mode. This allows the system to be multifunctional and caters all of the requirements for both toxic and non-toxic aseptic materials.</p>',
             'image' => 'Aseptic-containment-isolator-min.png',
             'image_thumb' => 'Aseptic-containment-isolator-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Aseptic Containment, Isolator, Containment Isolator, Aseptic Process, Sterile Test. Sterility Testing Isolator',
             'meta_description' => 'Esco Aseptic Containment Isolator (ACTI) works in conjunction with advanced material transfer techniques and a biodecontamination system which provides a 6 log reduction in viable contaminants.'],


            ['code' => null,
             'product_category_id' => '5',
             'product_application_category_id' => '6',
             'slug' => 'blood-cell-labeling-isolators',
             'brand' => null,
             'name' => 'Blood Cell Labeling Isolators',
             'details' => '<p>Blood Cell Labelling Isolator is designed for aseptic manipulation and radiolabelling of blood cells. It is configured to operate at a negative pressure in a single pass airflow. It provides a comprehensive personnel and product protection.</p>
                         <p>The isolator is integrated with a centrifuge located below the workstation to minimize the number of transfers out of the Grade A environment.</p>
                         <p class="my-3"><strong>Applications:</strong> </p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Blood Cell Labelling</p></li>

                         </ul>',
             'image' => 'blood-cell-labeling-isolator-1500px-min.png',
             'image_thumb' => 'blood-cell-labeling-isolator-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Blood Cell Labelling Isolator, Radiopharmacy Equipment, Chemotherapy, Oncology, Radioisotopes, Radioactive substances, Lead-lined isolator',
             'meta_description' => 'Blood Cell Labelling Isolator is designed for aseptic manipulation and radiolabelling of blood cells. It is configured to operate at a negative pressure in a single pass airflow. It provides a comprehensive personnel and product protection.'],

             ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'slug' => 'cell-processing-isolator',
             'brand' => '',
             'name' => 'Cell Processing Isolator (CPI)',
             'details' => '<p>The Cell Processing Isolator (CPI) is an integrated system that combines several types of equipment into one isolation technology.</p>
                         <p>It is designed to isolate the process to ensure operator safety without compromising product quality. It also provides a sterile ISO Class 5/Grade A environment that is required to carry out aseptic processes.</p>
                         <p class="my-3"><strong>Applications:</strong> </p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Allogenic Cell Therapy </p></li>
                             <li><p>Autologous Cell Therapy </p></li>
                             <li><p>Biosafety/Animal Biosafety Level 3/4 Containment</p></li>
                             <li><p>Cell Banking </p></li>
                             <li><p>Monoclonal Antibody Productiong </p></li>
                             <li><p>Phase III Clinical Trial</p></li>
                             <li><p>Protein Production</p></li>
                             <li><p>Vaccine Research</p></li>
                             <li><p>Virus Production</p></li>

                         </ul>',
             'image' => 'containment-processing-isolator-min.png',
             'image_thumb' => 'containment-processing-isolator-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Cell Processing Isolator, Cell Therapy, Vaccine Research, Vaccine Production, Cell Banking, Phase III Clinical Trial',
             'meta_description' => 'The Cell Processing Isolator (CPI) is an integrated system that combines several types of equipment into one isolation technology'],


            ['code' => 'slc-rabs',
             'product_category_id' => '3',
             'product_application_category_id' => '1',
             'slug' => 'streamline-closed-restricted-access-barrier-system',
             'brand' => 'Streamline®',
             'name' => 'Closed Restricted Access Barrier System (SLC-RABS)',
             'details' => '<p>The Streamline® Closed Restricted Access Barrier System (SLC-RABS) provides a safe and clean environment for the preparation of sterile     non-hazardous drugs in compliance to the United States Pharmacopeia General Chapter <797>. </p>
                         <p>Closed Restricted Access Barrier System (cRABS) provides a full unidirectional airflow scheme for an ISO Class 5 environment for aseptic processing. SLC-RABS is designed with a rigid wall enclosure and glove port access for process manipulation; this prevents the risk of cross-contamination. The interior of the enclosure is manually sanitised with process components introduced via pass-through chambers. </p>
                         <p>As such, cRABS provide superior sterility as compared to open front clean air devices (laminar flow clean benches and Class II biological safety cabinets). These systems are a safe and efficient solution for the production of low-volume pharmaceuticals as well as with practices concerning: </p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Operator aseptic technique training  </p></li>
                             <li><p>Expiration settings </p></li>
                             <li><p>Product quality maintenance (once CSP leaves the pharmacy) </p></li>
                         </ul>
                         <p class="mt-3">Furthermore, cRABS can reduce operating and renovation costs by taking up less space than a traditional cleanroom facility. </p>',
             'image' => 'closed-restricted-access-barrier-min.png',
             'image_thumb' => 'Streamline-compounding-isolator-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Closed Restricted Access Barrier System, c-RABS, o-RABS, Active Open Restricted Access Barrier System, RABS, Glovebox, cGMP Gloveboxes, Compounding Aseptic Isolator, CAI',
             'meta_description' => 'The Streamline® Closed Restricted Access Barrier System (SLC-RABS) provides a safe and clean environment for the preparation of sterile     non-hazardous drugs in compliance to the United States Pharmacopeia General Chapter <797>.'],


            ['code' => 'hpi-wof',
             'product_category_id' => '3',
             'product_application_category_id' => '4',
             'slug' => 'healthcare-platform-isolator-without-filter-below-workzone',
             'brand' => 'Isoclean®',
             'name' => 'Healthcare Platform Isolator - Without Filter Below Workzone',
             'details' => '<p><em>Optimized Solution for Sterile/Aseptic Applications</em></p>
                         <p>The Isoclean® Healthcare Platform Isolator (HPI-G3) facilitates the isolation of a product or process while providing the required sterile/aseptic environment. It is configured to operate at positive or negative pressure in single or recirculating airflow. This equipment provides a comprehensive range of personnel and product protection in addition to the surrounding work areas and the environment.</p>',
             'image' => 'hpi-g-3-with-footswitch-white-gloves-min.png',
             'image_thumb' => 'hpi-g-3-with-footswitch-white-gloves-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Healthcare Platform Isolator, Compounding Aseptic Containment ISolator, Compounding Aseptic Isolator, CAI, CACI, Chemotherapy Compounding, Sterile Compounding, Sterile Processing, Glovebox, Pressure-tested',
             'meta_description' => 'The Isoclean® Healthcare Platform Isolator (HPI-G3) facilitates the isolation of a product or process while providing the required sterile/aseptic environment. It is configured to operate at positive or negative pressure in single or recirculating airflow. This equipment provides a comprehensive range of personnel and product protection in addition to the surrounding work areas and the environment'],

             ['code' => 'hpi-wf',
             'product_category_id' => '3',
             'product_application_category_id' => '4',
             'slug' => 'healthcare-platform-isolator-with-filter-below-workzone',
             'brand' => 'Isoclean®',
             'name' => 'Healthcare Platform Isolator - With Filter Below Workzone',
             'details' => '<p><em>Optimized Solution for Sterile/Aseptic Applications</em></p>
                         <p>The Isoclean® Healthcare Platform Isolator (HPI-G3) facilitates the isolation of a product or process while providing the required sterile/aseptic environment. It is configured to operate at positive or negative pressure in single or recirculating airflow. This equipment provides a comprehensive range of personnel and product protection in addition to the surrounding work areas and the environment.</p>
                         <p>The positive pressure HPI-G3 model is suitable for work involving non-hazardous materials, while the negative pressure isolator is suitable for work involving hazardous materials e.g. cytotoxic compounding applications.</p>
                         <p>The work zone and pass chamber interchange are either under positive or negative pressure to the room to maintain sterility or operator protection, respectively, in case of a breach in the barrier isolation system.</p>
                         <p class="my-3"><strong>Key Benefits:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Designed in accordance with international cGMP standards</p></li>
                             <li><p>Class 2 containment enclosure on manual pressure leak test and Class 3 containment enclosure on automated pressure test as per ISO 10648-2</p></li>
                             <li><p>Suitable for various applications such as pharmacy compounding, as Class III cabinet for Biosafety Levels (BSL) 3 and 4, small-scale potent material handling, aseptic processing, research and development, and cell processing</p></li>
                         </ul>',
             'image' => 'hpi-2-g-8-ns-2-0-w-filter-below-full-min.png',
             'image_thumb' => 'hpi-2-g-8-ns-2-0-w-filter-below-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Healthcare Platform Isolator, Compounding Aseptic Containment ISolator, Compounding Aseptic Isolator, CAI, CACI, Chemotherapy Compounding, Sterile Compounding, Sterile Processing, Glovebox, Pressure-tested',
             'meta_description' => 'The Isoclean® Healthcare Platform Isolator (HPI-G3) facilitates the isolation of a product or process while providing the required sterile/aseptic environment. It is configured to operate at positive or negative pressure in single or recirculating airflow. This equipment provides a comprehensive range of personnel and product protection in addition to the surrounding work areas and the environment.'],



            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '3',
             'slug' => 'general-processing-platform-isolator-static-seals',
             'brand' => '',
             'name' => 'General Processing Platform Isolator - Static Seals (GPPI-SS)',
             'details' => null,
             'image' => 'general-processing-platform-isolator-SS-min.png',
             'image_thumb' => 'general-processing-platform-isolator-SS-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 0,
             'meta_keywords' => null,
             'meta_description' => null],

            ['code' => 'orabs',
             'product_category_id' => '3',
             'product_application_category_id' => '7',
             'slug' => 'open-restricted-access-barrier-system',
             'brand' => '',
             'name' => 'Open Restricted Access Barrier System',
             'details' => '<p>An open operation RABS, by definition, provides recognition that the barrier doors can be opened for operator intervention(s), at defined risk assessed stages during aseptic production operations, after the last bio-decontamination step. </p>',
             'image' => 'oRABS-450px-min.png',
             'image_thumb' => 'oRABS-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'ext_link' => '/rabs/open-restricted-access-barrier-system',
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => null],


            ['code' => 'sci-iii',
             'product_category_id' => '3',
             'product_application_category_id' => '5',
             'slug' => 'containment-isolator-class-iii',
             'brand' => 'Streamline®',
             'name' => 'Containment Isolator - Class III',
             'details' => '<p>The Streamline® Containment Isolator Class III (SCI Class III) configuration solely operates in a negative pressure, with its on-board fan providing -37 Pa to -125 Pa (max) in the process chamber and -25 Pa to -75 Pa (max) in the pass-through chamber.</p>
             <small class="mb-3"><em>"To comply fully with biosafety standards, the unit must be ducted to the building exhaust to meet negative pressure BSL-3 requirements."</em></small>
             <p class="mt-3">It provides an ISO Class 5 unidirectional total exhaust airflow, ensuring the sterility of the work zone during the whole manufacturing process. It is also equipped with double exhaust HEPA filters via Bag-In, Bag-Out (BIBO) system to prevent untoward exposure during filter change procedures. It has an option to place one (1) dunk at the side of the work zone (external).</p>
             <p>Plug and Play! For clients or facilities that do not have the capacity to provide a 100% ducting system, the SCI Class III and its optional feature for an integrated enhanced blower exhaust module system, can easily achieve a pressure of up to -125Pa.</p>
                             <p><strong>Key Benefits:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li><p>Complies with the international cGMP standards</p></li>
                                 <li><p>Class 3 pressure tested as per ISO 10648-2</p></li>
                                 <li><p>ISO Class 5 air cleanliness as per ISO 14644-1</p></li>
                                 <li><p>Fast purging time</p></li>
                                 <li><p>Compliant to USP <797> <800></p></li>
                             </ul>',
             'image' => 'streamline-compounding-isolator-class-iii-1500px-min.png',
             'image_thumb' => 'streamline-compounding-isolator-class-iii-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Streamline Containment solator, Compounding Aseptic Containment Isolator, CACI, Chemotherapy Compounding, Sterile Compounding, Sterile Processing, Glovebox, Pressure-tested, Class III Cabinet, Pathogenic Substances, BSL-4',
             'meta_description' => 'Streamline® Compounding Isolator - Class III (SCI-Class III) cabinet is a negatively pressured gas-tight enclosure that provides an ISO Class 5 environment in the work zone and pass-through chambers.'],

            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'old_id' => '18',
             'slug' => 'weighing-and-dispensing-containment-isolator',
             'brand' => null,
             'name' => 'Weighing and Dispensing Containment Isolator (WDCI)',
             'details' => '<p>The Esco Weighing and Dispensing Containment Isolators (WDCI) are advanced containment systems providing controlled negative pressure environments to maximize personnel protection during weighing and dispensing of potent compounds.</p>
                             <p>Esco WDCIs’ provide standard configurable designs that are able to adapt to various weighing and dispensing quantities and accuracies. </p>',
             'image' => 'wdci-3-g-1-g-celgene-usa-full-min.png',
             'image_thumb' => 'wdci-3-g-1-g-celgene-usa-full-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Weighing and Dispensing Containment Isolator, Hazardous Powders, Aseptic Processing, Containment Isolator, cGMP isolator, Powder-weighing',
             'meta_description' => 'The Esco Weighing and Dispensing Containment Isolators (WDCI) are advanced containment systems providing controlled negative pressure environments to maximize personnel protection during weighing and dispensing of potent compounds.'],

            ['code' => null,
             'product_category_id' => '5',
             'product_application_category_id' => '6',
             'slug' => 'technetium-dispensing-isolators',
             'brand' => null,
             'name' => 'Technetium Dispensing Isolators',
             'details' => '<p><em>For Safe Handling of Radiopharmaceuticals</em></p>
             <p>Radioisotope Dispensing Isolator is designed to provide safe, controlled, and sterile environment for elution and dispensing of radiopharmaceuticals. It is configured to operate at a negative pressure in a single pass airflow. It provides a comprehensive personnel and product protection.</p>
             <p>Personnel protection is achieved by adequate shielding of the generator as well as the whole workstation. The air of each enclosure is provided with HEPA filters with MPPS of 99.997% to ensure product protection. Constructed of 316L stainless steel, the Radioisotope Dispensing Isolator, it consists of 2 parts: the Process Chamber and Pass-through Chamber.</p>
             <p class="my-3"><strong>Applications:</strong></p>
             <ul class="image-list-style-ul-lg">
                 <li><p>Generator-based radioisotope dispensing</p></li>
                 <li><p>Handling of radiopharmaceuticals</p></li>
                 <li><p>QC tests of radiopharmaceuticals</p></li>
             </ul>
             ',
             'image' => 'technetium-dispensing-isolator1500px-min.png',
             'image_thumb' => 'technetium-dispensing-isolator450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Radioisotope Dispensing Isolator, Radioisotope Dispensing, Chemoterhapy Compounding, Lead-lined isolator',
             'meta_description' => 'Radioisotope Dispensing Isolator is designed to provide safe, controlled, and sterile environment for elution and dispensing of radiopharmaceuticals. It is configured to operate at a negative pressure in a single pass airflow. It provides a comprehensive personnel and product protection.'],


            ['code' => 'tfai',
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'old_id' => '19',
             'slug' => 'turbulent-flow-aseptic-isolator',
             'brand' => null,
             'name' => 'Turbulent Flow Aseptic Isolator™ (TFAI™)',
             'details' => '<p>The Esco Turbulent Flow Aseptic Isolator (TFAI) is a free-standing isolator complying with the most stringent regulatory requirements. The isolator has an automated airflow and pressure control to assure a safe, clean, and microbial-free environment in performing testing and other processes requiring the same environmental parameters. The TFAI’s ability to meet turbulent grade A conditions provide a high degree of containment separation for product, operator, and environment.</p>',
             'image' => 'Turbulent-Flow-Aseptic-Isolator-min-full.png',
             'image_thumb' => 'Turbulent-Flow-Aseptic-Isolator-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Turbulent Flow Aseptic Isolatorr, Containment isolator, Sterility Test, Sterile Hazardous Powders, Powder-weighing, cGMP isolator',
             'meta_description' => 'The Esco Turbulent Flow Aseptic Isolator (TFAI) is a free-standing isolator complying with the most stringent regulatory requirements. The isolator has an automated airflow and pressure control to assure a safe, clean, and microbial-free environment in performing testing and other processes requiring the same environmental parameters. The TFAI’s ability to meet turbulent grade A conditions provide a high degree of containment separation for product, operator, and environment.'],


            ['code' => null,
             'product_category_id' => '4',
             'product_application_category_id' => '0',
             'old_id' => '39',
             'slug' => 'ventilated-balance-enclosure',
             'brand' => '',
             'name' => 'Ventilated Balance Enclosure (VBE)',
             'details' => '<p>Esco Pharma’s Ventilated Balance Enclosure (VBE) is specifically designed​ for a stable and accurate handling and weighing of potent powders while ensuring a high containment level for operator​ protection. The aerodynamically designed sash and arm rest with its sectionalized baffle, guarantees that the airborne powders​ are well contained inside the enclosure and exhausted through a HEPA​ filter or directly to the laboratory exhaust.</p>
                             <p class="my-3"><strong>Key Features:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li>Negative pressure application for a high level of operator protection from hazardous airborne particles.</li>
                                 <li>Disposal port is equipped with O-ring to provide a sealed trash bag, as an additional powder containment solution.</li>
                                 <li>VBE is equipped with a filter and a blower module for better airflow​ control.</li>
                             </ul>',
             'image' => 'Ventilated-balance-enclosure-min.png',
             'image_thumb' => 'Ventilated-balance-enclosure-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'Ventilated Balance Enclosure (VBE) |  Esco Pharma',
             'meta_keywords' => 'ventilated balance enclosure',
             'meta_description' => 'Esco Pharma\'s Ventilated Balance Enclosure (VBE) is designed for the safe handling of potent powders during the preparation of non-sterile HDs as per USP 800. '],

            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '2',
             'old_id' => '35',
             'slug' => 'containment-barrier-isolator-u',
             'brand' => '',
             'name' => 'Containment Barrier Isolator (CBI) - Undirectional',
             'details' => '<p><em>Your Practical Solution to cGMP Compliance</em></p>
                         <p><strong>Containment Barrier Isolator - Unidirectional (CBI-U)</strong> utilizes unidirectional/laminar airflow and facilitates the isolation of a product or process while providing the required conditions (ISO Class 5/ Grade A Environment) for a sterile/aseptic environment. This equipment provides a comprehensive range of personnel, product, and environmental protection.</p>
                         <p>It is factory-configured to operate at positive or negative pressure in single pass or recirculating airflow. The type of application dictates the operating parameters (pressure/airflow) of the CBI-U.</p>
                         <p class="my-3"><strong>Applications:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Pharmacy Compounding (Chemotherapy/TPN)</p></li>
                             <li><p>Small-Scale Potent Material Handling</p></li>
                             <li><p>Aseptic Processing </p></li>
                             <li><p>Sterility Testing </p></li>
                             <li><p>Research and Development</p></li>
                             <li><p>Cell Processing</p></li>
                         </ul>',
            'image' => 'CBI-U-1500px-min.png',
            'image_thumb' => 'CBI-U-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Containment Barrier Isolator, Sub-division Isolator, Compounding Aseptic Isolator, Chemotherapy Compounding, Sterile Compounding, Unidirectional Airflow',
             'meta_description' => 'Containment Barrier Isolator - Unidirectional (CBI-U)utilizes unidirectional/laminar airflow and facilitates the isolation of a product or process while providing the required conditions (ISO Class 5/ Grade A Environment) for a sterile/aseptic environment. This equipment provides a comprehensive range of personnel, product, and environmental protection.'],


            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '2',
             'old_id' => '43',
             'slug' => 'containment-barrier-isolator-t',
             'brand' => '',
             'name' => 'Containment Barrier Isolator - Turbulent (CBI-T)',
             'details' => '<p><em>Your Practical Solution to cGMP Compliance</em></p>
                         <p><strong>Containment Barrier Isolator - Turbulent (CBI-T)</strong> utilizes turbulent airflow and facilitates the isolation of a product or process while providing the required condition for handling potent powder compounds.</p>
                         <p>In CBI-T, a supply filtered air is introduced into the chamber that mixes with and dilutes airborne contaminants, thus reducing the concentration within the environment. Most contaminants are ultimately removed from the environment through the air exhaust system. Contamination removal takes longer to achieve because the air turbulence keeps particles suspended and the dilution process is dependent on the volume of air cycling through the space.</p>
                         <p class="my-3"><strong>Applications:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Potent Powder Handling</p></li>
                             <li><p>HPAPI QC Testing</p></li>
                             <li><p>Research and Development</p></li>
                         </ul>',
             'image' => 'CBI-T-1500px-min.png',
             'image_thumb' => 'CBI-T-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Containment Barrier Isolator, Sub-division Isolator, Compounding Aseptic Isolator, Chemotherapy Compounding, Sterile Compounding, Turbulent Airflow',
             'meta_description' => 'Containment Barrier Isolator - Turbulent (CBI-T) utilizes turbulent airflow and facilitates the isolation of a product or process while providing the required condition for handling potent powder compounds.'],


            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '2',
             'old_id' => '44',
             'slug' => 'containment-barrier-isolator-iii',
             'brand' => '',
             'name' => 'Containment Barrier Isolator - III (CBI-III)',
             'details' => '<p><em>Your Practical Solution to cGMP Compliance</em></p>
                         <p><strong>Containment Barrier Isolator - Class III Biosafety Cabinet (CBI-III)</strong> offers the highest level of operator, product, and environmental protection from infectious/biohazardous aerosols and is suitable for microbiological work with agents assigned to biosafety levels 1,2,3, or 4. It is designed for an absolute level of containment, it is frequently used for work involving the deadliest biohazards, bacteria, viruses, and microorganisms.</p>
                         <p>CBI-III is configured to operate at a minimum of -125 Pa to provide adequate containment for handling highly pathogenic and lethal biological agents.</p>
                         <p class="my-3"><strong>Applications:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Laboratory containment for handling biological agents of up to level 4</p></li>
                             <li><p>Virus and vaccine production</p></li>
                             <li><p>Cell Processing</p></li>
                             <li><p>Research and development</p></li>
                         </ul>',
             'image' => 'containment-barriee-isolatior-III-min.png',
             'image_thumb' => 'containment-barrier-isolator-III-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Containment Barrier Isolator, Sub-division Isolator, Compounding Aseptic Isolator, Chemotherapy Compounding, Sterile Compounding, Class III Cabinet, BSL-3, Biological Agents, Research and Development',
             'meta_description' => 'Containment Barrier Isolator - Class III Biosafety Cabinet (CBI-III) offers the highest level of operator, product, and environmental protection from infectious/biohazardous aerosols and is suitable for microbiological work with agents assigned to biosafety levels 1,2,3, or 4. It is designed for an absolute level of containment, it is frequently used for work involving the deadliest biohazards, bacteria, viruses, and microorganisms'],


            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '2',
             'old_id' => '45',
             'slug' => 'containment-barrier-isolators-h',
             'brand' => '',
             'name' => 'Containment Barrier Isolators - H: Hybrid (CBI-H)',
             'details' => '<p><em>Your Practical Solution to cGMP Compliance</em></p>
                         <p><strong>Containment Barrier Isolator - Convertible Class III/Class I Biosafety Cabinet (CBI-H)</strong> builds on Esco Pharma’s success of CBI-III. It allows operators to work via a removable glove visor to convert the cabinet and function as a Class III or a Class I Biosafety Cabinet as per EN 12469 standards. In BSC Class III mode, the operator works through a glove port attached to a removable panel. It can be converted to a BSC Class I by removing the closure panel and attaching a blanking plate over the inlet HEPA filter.</p>
                         <p>To ensure maximum performance, commissioning and preventive maintenance of the cabinet must be done in both modes.</p>
                         <p class="my-3"><strong>Applications:</strong></p>
                         <ul class="image-list-style-ul-lg">
                             <li><p>Laboratory containment for handling biological agents of up to level 4</p></li>
                             <li><p>Research and development</p></li>
                         </ul>',
             'image' => 'containment-barriee-isolatior-Hybrid-min.png',
             'image_thumb' => 'containment-barrier-isolator-hybrid-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Containment Barrier Isolator, Sub-division Isolator, Compounding Aseptic Isolator, Chemotherapy Compounding, Sterile Compounding, Class III Cabinet, BSL-3, Class I Cabinet, Research and Development, Biological Agents',
             'meta_description' => 'Containment Barrier Isolator - Convertible Class III/Class I Biosafety Cabinet (CBI-H)</strong> builds on Esco Pharma’s success of CBI-III. It allows operators to work via a removable glove visor to convert the cabinet and function as a Class III or a Class I Biosafety Cabinet as per EN 12469 standards. In BSC Class III mode, the operator works through a glove port attached to a removable panel. It can be converted to a BSC Class I by removing the closure panel and attaching a blanking plate over the inlet HEPA filter.'],


            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '3',
             'slug' => 'general-processing-platform-isolator-inflatable-seals',
             'brand' => '',
             'name' => 'General Processing Platform Isolator - Inflatable Seals (GPPI-IS)',
             'details' => null,
             'image' => 'general-processing-platform-isolator-IS-min.png',
             'image_thumb' => 'general-processing-platform-isolator-IS-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 0,
             'meta_keywords' => null,
             'meta_description' => null],


            ['code' => 'hpi-is',
             'product_category_id' => '3',
             'product_application_category_id' => '4',
             'slug' => 'healthcare-platform-isolator-inflatable-seal-model',
             'brand' => 'Isoclean® ',
             'name' => 'Healthcare Platform Isolator - Inflatable Seal Model (HPI-IS)',
             'details' => '<p>Esco Pharma’s Isoclean® Healthcare Platform Isolator – Inflatable Seal (HPI-IS) model guarantees the full isolation of a product or process inside an ISO Class 5 or Grade A environment, for high-quality final products.</p>
             <p>Along with its inflatable seals and automated dampers, HPI-IS is equipped with an automated pressure​ hold testing (APHT) and mobile BioVap™ biodecontamination system. </p>
             <p>This model can be factory-configured to operate in either a positive or negative pressure mode, with a recirculating or single pass/total exhaust airflow scheme. </p>

                           ',
             'applications' => '<h3 class="mt-3 prod-detail-list-title">Applications:</h3>
             <div class="row">
             <div class="col-md-6">
             <ul class="image-list-style-ul-lg">
                 <li><h4 class="prod-detail-list-title-normal-and-weight">Aseptic and/or Potent Compounding</h4></li>
                 <li><h4 class="prod-detail-list-title-normal-and-weight">Pharmacy Compounding</h4></li>
                 <li><h4 class="prod-detail-list-title-normal-and-weight">Sterility Testing </h4></li>
             </ul>
             </div>
             <div class="col-md-6">
             <ul class="image-list-style-ul-lg">
                 <li><h4 class="prod-detail-list-title-normal-and-weight">Cell and Gene Therapy</h4></li>
                 <li><h4 class="prod-detail-list-title-normal-and-weight">Peptide Production</h4></li>
                 <li><h4 class="prod-detail-list-title-normal-and-weight">Biosafety Facility Level 3 or 4</h4></li>
             </ul>
             </div>
             </div>
       ',
             'image' => 'isoclean-healthcare-platform-isolator-inflatable-seal-model-full-min.png',
             'image_thumb' => 'isoclean-healthcare-platform-isolator-inflatable-seal-model-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'Healthcare Platform Isolator - Inflatable Seal Model | Esco Pharma',
             'meta_keywords' => 'healthcare Platform Isolator, inflatable healthcare platform isolator, isoclean',
             'meta_description' => 'Esco Pharma’s Isoclean® Healthcare Platform Isolator –Inflatable Seal (HPI-IS) model, is designed for compounding, sterility testing, & cell processing.'],


            ['code' => null,
             'product_category_id' => '3',
             'product_application_category_id' => '4',
             'slug' => 'healthcare-platform-isolator-g3-k',
             'brand' => 'Isoclean® ',
             'name' => 'Healthcare Platform Isolator-G3-K (HPI-G3-K)',
             'details' => null,
             'image' => null,
             'image_thumb' => 'Healthcare-Platform-Isolator-2G.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 0,
             'meta_keywords' => null,
             'meta_description' => null],

             ['code' => null,
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'slug' => 'biobooth',
             'brand' => null,
             'name' => 'BioBooth™',
             'details' => '<p>Esco’s BioBooth™ is similar to a Biological Safety Cabinet Class II which can provide an ISO Class 5 work environment to house relatively larger research devices, apparatus, equipment, machineries and operating robotics under appropriate controlled cleanroom conditions. The BioBooth™ utilizes airflow design mechanism which allows adequate control on the inflow and exhaust of air, ensuring operator, product, and environmental protection.</p>',
             'image' => 'biobooth1500px-min.png',
             'image_thumb' => 'biobooth450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, BioBooth, Large-Scale Process, Sterile Process, Quality Control, Containment Booth, Airflow Containment',
             'meta_description' => 'Esco’s BioBooth™ is similar to a Biological Safety Cabinet Class II which can provide an ISO Class 5 work environment to house relatively larger research devices, apparatus, equipment, machineries and operating robotics under appropriate controlled cleanroom conditions.'],


             ['code' => 'sci',
             'product_category_id' => '3',
             'product_application_category_id' => '5',
             'slug' => 'compounding-isolator',
             'brand' => 'Streamline®',
             'name' => 'Compounding Isolator',
             'details' => '<p>Esco Pharma’s Streamline® Compounding Isolator (SCI) provides a sterile environment for sterile/aseptic preparations and is designed in compliance with USP <797> and <800> criteria. It is factory-configured to operate either in a positive or negative pressure mode or with a recirculating or total exhaust airflow scheme.</p>
                             <p>This compounding aseptic/sterile containment isolator (CACI) is designed in compliance with international cGMP standards and classified under Class 3 Leak Tight Containment as per ISO 10648-2. </p>
                             <p>Positive pressure is for sterile non-hazardous materials while negative pressure is for containment of sterile hazardous substances.</p>

                             <p class="my-3"><strong>Key Benefits:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li><p>Complies with the international cGMP standards</p></li>
                                 <li><p>Compliant to USP <797> and <800> guidelines</p></li>
                                 <li><p>Class 3 pressure tested as per ISO 10648-2</p></li>
                                 <li><p>ISO Class 5 air cleanliness as per ISO 14644-1</p></li>
                                 <li><p>Fast purging time</p></li>
                             </ul>',
             'image' => 'streamline-compounding-isolator-full-min.png',
             'image_thumb' => 'streamline-compounding-isolator-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_title' => 'Streamline® Compounding Isolator | Esco Pharma',
             'meta_keywords' => 'Streamline Compounding Isolator, streamline isolator',
             'meta_description' => 'Esco Pharma’s Streamline® Compounding Isolator (SCI) is designed for sterile/aseptic compounding operating either in a positive or negative pressure mode.'],


             ['code' => 'gc-rdi',
             'product_category_id' => '5',
             'product_application_category_id' => '6',
             'slug' => 'gmp-compliant-radioisotope-dispensing-isolator',
             'brand' => null,
             'name' => 'GMP-compliant Radioisotope Dispensing Isolator',
             'details' => '<p><em>Aseptic Preparation and Dispensing of Radiopharmaceuticals</em></p>
                             <p>The GMP-compliant Radioisotope Isolator is designed for the aseptic elution and dispensing of generator-produced radioisotopes, such as Tc-99m and Ga-68. It is configured to operate at a negative pressure in a single pass airflow. It provides a comprehensive personnel and product protection.</p>

                             <p class="my-3"><strong>Applications:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li><p>Radiopharmaceutical dispensing</p></li>
                                 <li><p>QC of radiopharmaceuticals</p></li>
                                 <li><p>Radiolabeling</p></li>
                             </ul>',
             'image' => 'radiopharmacy-isolator-1500px-min.png',
             'image_thumb' => 'radiopharmacy-isolator-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco Healthcare, Streamline Compounding solator, Compounding Aseptic Containment ISolator, Compounding Aseptic Isolator, CAI, CACI, Chemotherapy Compounding, Sterile Compounding, Sterile Processing, Glovebox, Pressure-tested',
             'meta_description' => 'Streamline® Compounding Isolator (SCI) provides a sterile environment for aseptic preparations. It is factory-configured to operate at positive or negative pressure in a recirculating or total exhaust airflow scheme.'],

             ['code' => 'LS2',
             'product_category_id' => '5',
             'product_application_category_id' => '6',
             'slug' => 'cytoculture-lead-shielded-class-ii-biosafety-cabinet',
             'brand' => 'Cytoculture®',
             'name' => 'Lead-Shielded Class II Biosafety Cabinet',
             'details' => '<p><em>Superior Protection for Radioisotope Laboratories</em></p>
                             <p>The Esco Cytoculture® Lead-Shielded Class II Biosafety Cabinet is designed for radiopharmaceuticals handling and provides operator protection during work involving radioisotopes.</p>

                             <p class="my-3"><strong>Key Benefits:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li><p>Lead-shielded sides, work zone bottom and front sliding sash</p></li>
                                 <li><p>Tri-filter system</p></li>
                             </ul>',
             'image' => 'lead-shielded-class-II-biosafety-cabinet-hr-min.png',
             'image_thumb' => 'lead-shielded-class-II-biosafety-cabinet-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco healthcare, Esco Cytoculture® Lead-Shielded Class II Biosafety Cabinet, Lead-Shielded Class II Biosafety Cabinet, biosafety cabinet, bsc',
             'meta_description' => 'The Esco Cytoculture® Lead-Shielded Class II Biosafety Cabinet is designed for radiopharmaceuticals handling and provides operator protection during work involving radioisotopes.'],


             ['code' => 'rph',
             'product_category_id' => '5',
             'product_application_category_id' => '6',
             'slug' => 'radiopharmacy-hood-lead-shielded-biological-safety-cabinet',
             'brand' => null,
             'name' => 'Radiopharmacy Hood (Lead Shielded Biological Safety Cabinet)',
             'details' => '<p><em>Superior Protection for Radioisotope Laboratories</em></p>
                             <p>The <strong>Esco Lead-shielded Biosafety Cabinet</strong> is designed for radiopharmaceutical dispensing of generator-produced radioisotopes and dose calibration of all radioisotopes.</p>

                             <p class="my-3"><strong>Applications:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li><p>Radiopharmaceuticals dispensing and other handling procedures</p></li>
                                 <li><p>QC tests of radiopharmaceuticals</p></li>
                             </ul>',
             'image' => 'radiopharmacy hood-1500px-min.png',
             'image_thumb' => 'radiopharmacy-ood-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco healthcare, Radio pharmacy Hood, equipment for radio isotopes, radio pharmacy equipment,',
             'meta_description' => 'The Esco Lead-shielded Biosafety Cabinet is designed for radiopharmaceutical dispensing of generator-produced radioisotopes and dose calibration of all radioisotopes.'],



             ['code' => 'efi',
             'product_category_id' => '5',
             'product_application_category_id' => '6',
             'slug' => 'radioisotope',
             'brand' => 'Frontier®',
             'name' => 'Radioisotope™',
             'details' => '<p>Esco Frontier® Radioisotope™ Fume Hood is designed to be used when handling radioactive materials. This specialized fume hood is built with stainless steel internal surfaces (including the work surface) with coved seamless welded corners for easy cleaning and decontamination. Frontier® Radioisotope™ fume hoods have been engineered to provide maximum safety when handling radiopharmaceuticals and other radioactive materials. In addition, these hoods provide containment performance similar to that of high performance low velocity fume hoods.</p>

                             <p class="my-3"><strong>Key Benefits:</strong></p>
                             <ul class="image-list-style-ul-lg">
                                 <li><p>UL classified</p></li>
                                 <li><p>Smooth coved corners</p></li>
                                 <li><p>Reinforced worksurface</p></li>
                                 <li><p>Excellent aesthetics</p></li>
                                 <li><p>5 degree sloped front</p></li>
                                 <li><p>Superior containment at 0.3m/s</p></li>
                                 <li><p>High energy savings</p></li>
                             </ul>
                             <p class="my-3"><small>Disclaimer: Esco Frontier® is UL classified.  Due to the custom nature of the range, some options do not qualify for the UL label.</small></p>',
             'image' => 'frontier-radioisotope-hr-min.png',
             'image_thumb' => 'frontier-radioisotope-thumb-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco healthcare, Radio pharmacy Hood, equipment for radio isotopes, radio pharmacy equipment,',
             'meta_description' => 'The Esco Lead-shielded Biosafety Cabinet is designed for radiopharmaceutical dispensing of generator-produced radioisotopes and dose calibration of all radioisotopes.'],


             ['code' => 'fli',
             'product_category_id' => '3',
             'product_application_category_id' => '7',
             'slug' => 'filling-line-isolator',
             'brand' => null,
             'name' => 'Filling Line Isolator',
             'details' => '<p>Filling lines enclosed in an isolation technology are now widely utilized for the aseptic manufacture of sterile pharmaceuticals in various container formats.</p>
             <p>Esco Pharma’s filing line isolator provides an ISO Class 5 / Grade A environment, ensuring the sterility of the work zone for the most demanding sterile/aseptic operations.</p>
             <p class="my-3"><strong>Applications:</strong></p><ul class="image-list-style-ul-lg">
                             <li><p>Aseptic manufacture of cell therapy and injectables</p></li>
                             <li><p>Continuous manufacture </p></li>
                             <li><p>Processing of materials with high OEB levels </p></li>
                             <li><p>Aseptic Processing </p></li>
                             <li><p>Research and Development </p></li>
                             <li><p>Vaccine Manufacture</p></li>
                         </ul>',
             'image' => 'BAT-Filling-Line-Isolator-HR-min.png',
             'image_thumb' => 'BAT-Filling-Line-Isolator-thumbnail-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Esco healthcare, Filling Line Isolator, Isolator, Isolation Containment, Dispensing Process barrier',
             'meta_description' => 'Filling lines enclosed in an isolation technology are now widely utilized for the aseptic manufacture of sterile pharmaceuticals in various container formats.'],


             ['code' => 'crabs',
             'product_category_id' => '3',
             'product_application_category_id' => '7',
             'slug' => 'closed-restricted-access-barrier-system',
             'brand' => null,
             'name' => 'Closed Restricted Access Barrier System',
             'details' => '<p>The closed RABS is an intermediate solution between isolators and open RABS. A closed operation RAB provides a higher level of contamination control because the RABS barrier doors remain closed from the point of the last bio-decontamination, through initial set-up through processing. These systems typically use transfer systems that are similar to isolator type transfer systems that are closed and dock with the RABS.</p>',
             'image' => 'cRABS-450px-min.png',
             'image_thumb' => 'cRABS-450px-min.png',
             'banner_img' => null,
             'video' => null,
             'ext_link' => '/rabs/closed-restricted-access-barrier-system',
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => null],

             ['code' => 'gppi',
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'old_id' => '33',
             'slug' => 'general-processing-platform-isolator-gppi',
             'brand' => '',
             'name' => 'General Processing Platform Isolator (GPPI)',
             'details' => '<p>Esco Pharma\'s General Processing Platform Isolator (GPPI) is a highly adaptable, unidirectional laminar airflow isolator that can be used for sterility testing or other processes that require an ISO Class 5 (Grade A) aseptic environment. The GPPI’s advanced control system allows the operator to select either positive or negative chamber pressure as well as single pass or recirculating airflow patterns.</p>
             <p>These features, along with the ability to perform safe change procedures on the supply and return ULPA filters, make the GPPI a highly versatile isolator that can be used for potent or non-potent aseptic materials.</p>
             <p>In addition, the Esco GPPI’s design offers over 20 standard options and configurations ensuring that Esco can provide a standard solution to fit your specific process and facility requirements. Should a standard option not fit your requirements Esco can offer customized solutions as well.</p>',
             'image' => 'General-Processing-Platform-Isolator-min.png',
             'image_thumb' => 'General-Processing-Platform-Isolator-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => 'Esco Pharma\'s General Processing Platform Isolator (GPPI) is highly versatile with cGMP compliant features and is designed for potent or non-potent aseptic/sterile processing'],


             ['code' => 'HPI-IS-BVP',
             'product_category_id' => '3',
             'product_application_category_id' => '4',
             'old_id' => null,
             'slug' => 'healthcare-platform-isolator-inflatable-seal-bio-vap',
             'brand' => 'Isoclean®',
             'name' => 'Healthcare Platform Isolator - Inflatable Seal – BioVap™  (HPI-IS-BVP)',
             'details' => '<p><em>Optimized Solution for Sterile/Aseptic Applications​</em>
             <br><br>
             The Isoclean® Healthcare Platform Isolator – Inflatable Seal - BioVap™ Model (HPI-IS-BVP) ensures the isolation of a product/process while providing the required ISO Class 5 / Grade A environment. ​
             <br><br>
             HPI-IS-BVP is equipped with inflatable seals and automated dampers. As standard, the standard unit is fully integrated with both the auto-pressure hold testing and BioVap™ (hydrogen peroxide biodecontamination system with H2O2 sensors and catalytic converter).​
             <br><br>
             Integration of Esco BioVap™ allows both master and independent​ biodecontamination process of main chamber and pass-through chambers (PTCs). This improved design facilitates ease of isolation control especially during pressure decay testing and bio-decontamination process. ​
             <br><br>
             This model can be adjusted on-site to operate in positive or negative pressure regime.  It is also available in recirculating or total exhaust configuration.​</p>',
             'applications' => '       <p class="mt-3"><strong>Applications:</strong></p>
             <div class="row">
         <div class="col-md-6">
         <p>
         </p><ul class="image-list-style-ul-lg">
         <li>Aseptic and/or Potent Compounding</li>
         <li>Pharmacy Compounding</li>
         <li>Sterility Testing</li>
         <li>Cell and Gene Therapy</li>
         <li>Peptide Production</li>
         <li>Biosafety Facility Level 3 or 4</li>

         </ul>
         <p>
         </p></div>
         <div class="col-md-6">
         <p>
         </p><ul class="image-list-style-ul-lg">
         <li>Benchtop/Small-scale Aseptic Formulation and Filling</li>
         <li>Small-scale Potent Material Handling</li>
         <li>Cosmeceutical</li>
         <li>R&D and Clinical Trials</li>
         </ul>
         <p>
         </p></div>
         </div>',
             'image' => 'HPI-IS-BVP-HR-min.png',
             'image_thumb' => 'HPI-IS-BVP-thumbnail-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => 'Esco Pharma’s Isoclean® Healthcare Platform Isolator –Inflatable Seal-BioVap™ (HPI-IS-BVP) model, is equipped with its own biodecontamiantion system for sterile/aseptic processes like sterility testing and cell processing'],


             ['code' => 'evdc',
             'product_category_id' => '1',
             'product_application_category_id' => '0',
             'old_id' => null,
             'slug' => 'evidence-drying-cabinet',
             'brand' => '',
             'name' => 'Evidence Drying Cabinet',
             'details' => '<p>Esco Evidence Drying Cabinet is a negative pressure cabinet designed to provide security, tamper proof, and prevent loss of integrity and credibility and possible cross contamination of evidence and impede any harmful airborne pathogens, putrid odours and other gases from escape that may harm or infect employees / technicians.​</p>',
             'image' => 'Evidence-Horizontal-vertical-HR-min.png',
             'image_thumb' => 'Evidence-Horizontal-vertical-min.png',
             'banner_img' => null,
             'video' => null,
             'is_activated' => 1,
             'meta_keywords' => 'Evidence Drying Cabinet, Esco Evidence Drying Cabinet, High quality ULPA filters, Sentinel Control System',
             'meta_description' => 'Esco Evidence Drying Cabinet is a negative pressure cabinet designed to provide security, tamper proof, and prevent loss of integrity and credibility.'],

             ['code' => 'cai',
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'slug' => 'compounding-aseptic-isolator-cai',
             'brand' => null,
             'name' => 'Compounding Aseptic Isolator (CAI)',
             'details' => '<p>Designed in accordance with the United States Pharmacopeia General Chapter <797> guidelines, Esco Pharma’s CAI ensures a sterile/aseptic compounding environment within the isolator at all times, from compounding up to material transfer operations.</p>',
             'image' => 'Compounding-Aseptic-Isolator-min.png',
             'image_thumb' => 'Compounding-Aseptic-Isolator-min.png',
             'banner_img' => null,
             'video' => null,
             'ext_link' => '/compounding-aseptic-isolator/compounding-aseptic-isolator-cai',
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => null],


             ['code' => 'caci',
             'product_category_id' => '3',
             'product_application_category_id' => '0',
             'slug' => 'compounding-aseptic-containment-isolator-caci',
             'brand' => null,
             'name' => 'Compounding Aseptic Containment Isolator (CACI)',
             'details' => '<p>The Compounding Aseptic Containment Isolator (CACI) by Esco Pharma is designed in compliance with the United States Pharmacopeia General Chapter <797> and <800> guidelines. It aims to provide a safe and clean environment for compounding of sterile hazardous drug preparations in.</p>',
             'image' => 'CACI-Recirculating-min.png',
             'image_thumb' => 'CACI-Recirculating-min.png',
             'banner_img' => null,
             'video' => null,
             'ext_link' => '/compounding-aseptic-isolator/compounding-aseptic-containment-isolator-caci',
             'is_activated' => 1,
             'meta_keywords' => null,
             'meta_description' => null],

         ];





        foreach($prods as $prod){
        $get = $this->createProductData($prod);
        //	var_dump($get);
        }

        // custom related products
        // Streamline® Compounding Isolator - Class III
        $myproductspec = Product::find(25)->relProd()->sync([32,33]);
        // Cell Processing Isolator (CPI)
        $myproductspec = Product::find(19)->relProd()->sync([38,35,21,28,45,16,17]);
        // BioPass™ Pass Through
        $myproductspec = Product::find(6)->relProd()->sync([13,14,8,9]);
        // Dynamic Passboxes / Dynamic Floor Laminar Hatches (DPB/DFLH)
        $myproductspec = Product::find(8)->relProd()->sync([14,13,9,6]);

        // Related Articles
        // Filling Line Isolator
        $myproductspec = Product::find(43)->relNews()->sync([7]);

        // Blood Cell Labeling Isolators
        $myproductspec = Product::find(18)->relNews()->sync([98]);

        // Cell Processing Isolator (CPI)
        $myproductspec = Product::find(19)->relNews()->sync([14,13]);


        // Streamline® Closed Restricted Access Barrier System (SLC-RABS)
        $myproductspec = Product::find(20)->relNews()->sync([66]);


        // Ventilated Balance Enclosure (VBE)
        $myproductspec = Product::find(29)->relNews()->sync([4]);

        // Isoclean® Healthcare Platform Isolator – Inflatable Seal – BioVap™ (HPI-IS-BVP)

        $myproductspec = Product::find(46)->relNews()->sync([5]);


        // Pharmacon™ Downflow Booths
        $myproductspec = Product::find(3)->relNews()->sync([20,93]);


        // Laminar Flow Horizontal Trolley / Laminar Flow Vertical Trolley
        $myproductspec = Product::find(4)->relNews()->sync([1]);



        var_dump('success');

    }


    public function createProductData($prod)
    {
    	$this->product->create($prod);
    	return $this;
    }



}
