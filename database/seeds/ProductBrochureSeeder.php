<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductBrochure;
use App\DownloadCategory;

class ProductBrochureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $ProductBrochure;

    public function __construct(ProductBrochure $ProductBrochure)
    {

        $this->productBrochure = $ProductBrochure;

    }

    public function run()
    {
        $productBrochures = [

            //1
            ['title' => 'Esco Pharmaceutical Products Catalogue​ - English',
            'file' => '9010149_Esco Pharmaceutical Products Combined Brochure_A4_LR-min.pdf',
            'type' => '1',
            'img_thumb' => 'esco-pharmaceutical-products-combined-brochure-cover-min.jpg',
            'is_activated' => '1'],
            //2
            ['title' => 'Ceiling Laminar Airflow ​Sell Sheet​(English)​​',
            'file' => 'brochures_CLAF-Sellsheet-A4-vA1.pdf',
            'type' => '1',
            'img_thumb' => 'ceiling-laminar-airflow-min.jpg',
            'is_activated' => '1'],
            //3
            ['title' => 'Cytoculture™ Cytotoxic Cabinet Brochure​',
            'file' => '9010031-Compounding-Equipment-CYT-Brochure-A4-vD-LR-090519.pdf',
            'type' => '1',
            'img_thumb' => 'cytoculture-min.jpg',
            'is_activated' => '1'],
            //4
            ['title' => 'Pharmacon™ Downflow Booth Brochure​ (English)',
            'file' => 'brochures_PHARMACON.pdf',
            'type' => '1',
            'img_thumb' => 'pharmacon-ENG-min.jpg',
            'is_activated' => '1'],
            //5
            ['title' => 'Pharmacon™ Downflow Booth Brochure​ (Veitnamese)​',
            'file' => 'brochures_VN-Pharmacon-Sell-Sheet.pdf',
            'type' => '1',
            'img_thumb' => 'pharmacone-VN-min.jpg',
            'is_activated' => '1'],
            //6
            ['title' => 'Laminar Flow Horizontal/Vertical Trolley Sell Sheet​',
            'file' => 'brochures_LFHT-LFVT-Sellsheet.pdf',
            'type' => '1',
            'img_thumb' => 'laminar-flow-trolley-min.jpg',
            'is_activated' => '1'],
            //7
            ['title' => 'Laminar Flow Straddle Units, Single and Double (Brochure)​',
            'file' => 'brochures_EQU.pdf',
            'type' => '1',
            'img_thumb' => 'laminar-flow-stradle-units-min.jpg',
            'is_activated' => '1'],
            //8
            ['title' => 'Cleanroom Air Shower (AES-EUS) Brochure ​​​',
            'file' => 'Cleanroom_EAS-EUS_PharmaBrochure_A4_vA_LR_webDF.pdf',
            'type' => '1',
            'img_thumb' => 'cleanroom-air-showers-brochure-cover.jpg',
            'is_activated' => '1'],

            //9
            ['title' => 'Dynamic Passbox / Dynamic Floor Label Hatch (DPB/DFLH) Brochure​ (English)​​​',
            'file' => 'brochures_DPB-DFLH.pdf',
            'type' => '1',
            'img_thumb' => 'Dynamic Passboxes and Dynamic Floor Label Hatches.jpg',
            'is_activated' => '1'],


            //10
            ['title' => 'Pass Boxes and Transfer Hatches ',
            'file' => 'brochures_EPB.pdf',
            'type' => '1',
            'img_thumb' => 'Air Shower Pass Box.jpg',
            'is_activated' => '1'],

           //11
           ['title' => 'Esco Sputum Booth Sell Sheet​ (English)​',
           'file' => '9010246_ Sputum_Booth_Sellsheet_A4_vB_LR(7).pdf',
           'type' => '1',
           'img_thumb' => 'Sputum_Booth_Sellsheet_cover_Page_1.jpg',
           'is_activated' => '1'],


           //12
           ['title' => 'Infinity® Pass Boxes Brochure​ (English)​',
           'file' => 'brochures_EPB2.pdf',
           'type' => '1',
           'img_thumb' => 'laminar-flow-stradle-units-min.jpg',
           'is_activated' => '1'],

          //13
          ['title' => 'Infinity® Transfer Hatches (English)​',
          'file' => 'brochures_EPB2.pdf',
          'type' => '1',
          'img_thumb' => 'laminar-flow-stradle-units-min.jpg',
          'is_activated' => '1'],
          //14
          ['title' => 'Soft Capsule® Soft Wall cleanroom Brochure​ (English)​',
          'file' => 'brochures_STL-SC.pdf',
          'type' => '1',
          'img_thumb' => 'Soft Capsule Soft Wall Cleanroom.jpg',
          'is_activated' => '1'],

          //15
          ['title' => 'Esco Glassware Hoods Sell Sheet​​',
          'file' => 'Esco Glassware Hoods_A4_vA_LR_1555048137_1590021222.pdf',
          'type' => '1',
          'img_thumb' => 'Glassware Hoods_cover.jpg',
          'is_activated' => '1'],


          //16
          ['title' => 'Aseptic Containment Isolator (ACTI) Sell Sheet​',
          'file' => 'brochures_ACTI_Sellsheet.pdf',
          'type' => '1',
          'img_thumb' => 'aseptic-containment-isolator-acti-sell-sheet.jpg',
          'is_activated' => '1'],


          //17
          ['title' => 'Cell Processing Isolator Sell Sheet​ (English)​​',
          'file' => 'Cell Processing Isolator Sellsheet A4_vB_EscoGB_HR_1595811746.pdf',
          'type' => '1',
          'img_thumb' => 'cell-processing-isolator-sell-sheet.jpg',
          'is_activated' => '1'],

          //18
          ['title' => 'Cell Processing Isolator: A Highly Modular and Adaptable Solution for Cell Processing​​​',
          'file' => 'Sample Brochure.pdf',
          'type' => '1',
          'img_thumb' => 'laminar-flow-stradle-units-min.jpg',
          'is_activated' => '1'],

          //19
          ['title' => 'Streamline Closed Restricted Access Barrier System (SLC-RABS) Catalogue',
          'file' => 'streamline-closed-restricted-access-barrier-system-brochure-a-4-v-b-lr.pdf',
          'type' => '1',
          'img_thumb' => 'streamline-closed-restricted-access-barrier-system-slc-rabs-catalogue-thumb.jpg',
          'is_activated' => '1'],


        //20
        ['title' => 'Isoclean® Healthcare Platform Isolator (HPI) Catalogue​​​​​',
        'file' => 'brochures_9010292-Esco-Isoclean-HPI-Gen3-Brochure-A4-vD-LR-1572413172.pdf',
        'type' => '1',
        'img_thumb' => 'Isoclean® Healthcare Platform Isolator (HPI) Catalogue.jpg',
        'is_activated' => '1'],


        //21
        ['title' => 'Isoclean® Healthcare Platform Isolator (HPI-G3) Brochure​ (English)​',
        'file' => 'Sample Brochure.pdf',
        'type' => '1',
        'img_thumb' => 'laminar-flow-stradle-units-min.jpg',
        'is_activated' => '1'],

        //22
        ['title' => 'Containment Barrier Isolator (CBI) Catalogue​',
        'file' => 'brochures_CBI-Product-Brochure-A4-vC-LR12112019.pdf',
        'type' => '1',
        'img_thumb' => 'Containment Barrier Isolator (CBI) Catalogue.jpg',
        'is_activated' => '1'],
        //23
        ['title' => 'Streamline® Compounding Isolator​ (English)​​',
        'file' => 'brochures-SCI-Brochure-A4-vE-HR.pdf',
        'type' => '1',
        'img_thumb' => 'Streamline® Compounding Isolator Catalogue.jpg',
        'is_activated' => '1'],

       //24
       ['title' => 'Turbulent Flow Aseptic Isolator (TFAI) Brochure​ (English)​',
       'file' => 'Turbulent_Flow Aseptic Isolator_Brochure_A4_vC_LR_1533280360 (1)_1590021222.pdf',
       'type' => '1',
       'img_thumb' => 'Turbulent_Flow Aseptic Isolator_cover.jpg',
       'is_activated' => '1'],


       //25
       ['title' => 'Ventilated Balance Enclosure Sell Sheet​ (English)​',
       'file' => 'Esco_Pharma_VBE_Sellsheet_A4_vC_LR.pdf',
       'type' => '1',
       'img_thumb' => 'VBE_Sellsheet_cover.jpg',
       'is_activated' => '1'],


       //26
       ['title' => 'Robust and Modular; Esco GB ships VBE to a Major Company in Ireland​',
       'file' => 'Sample Brochure.pdf',
       'type' => '1',
       'img_thumb' => 'laminar-flow-stradle-units-min.jpg',
       'is_activated' => '1'],

      //27
      ['title' => 'BioBooth™ Sell Sheet​​',
      'file' => 'Biobooth_Sellsheet_ A4_vA_LR_1588207829.pdf',
      'type' => '1',
      'img_thumb' => 'Biobooth_Sellsheet_Cover-min.png',
      'is_activated' => '1'],


        //28
        ['title' => 'Esco Radiopharmacy Equipment Catalogue​​',
        'file' => 'Radiopharmacy-Compounding-Equipment-vA-A4-LR.pdf',
        'type' => '1',
        'img_thumb' => 'Radiopharmacy-Compounding-Equipment-vA-A4-LR_Page_01-min.png',
        'is_activated' => '1'],


        //29
        ['title' => 'Esco Pharmaceutical Products Catalogue - French​',
        'file' => 'Fench-Esco-Pharma-product-guide-vA2-LR.pdf',
        'type' => '1',
        'img_thumb' => 'esco-pharmaceutical-product-catalog-french-min.jpg',
        'is_activated' => '1'],


        //30
        ['title' => 'Esco Healthcare Product Line Card​',
        'file' => 'Esco Product Line Card_A4_vB_HR.pdf',
        'type' => '1',
        'img_thumb' => 'healthcare-linecard-min.jpg',
        'is_activated' => '1'],

        //31
        ['title' => 'Esco Garment Storage Cabinet Brochure​',
        'file' => 'brochures_ES1311-EGSC-vf-LR.pdf',
        'type' => '1',
        'img_thumb' => 'laminar-flow-storage-cabinet.jpg',
        'is_activated' => '1'],

        //32
        ['title' => 'Weighing and Dispensing Containment Isolator (WDCI) Sell Sheet​',
        'file' => 'brochures_WDCI-SellSheet.pdf',
        'type' => '1',
        'img_thumb' => 'Weighing and Dispensing Containment Isolator (WDCI) Sell Sheet.jpg',
        'is_activated' => '1'],


        //33
        ['title' => 'General Processing Platform Isolator (GPPI) Sell Sheet​',
        'file' => 'brochures_Pharma Containment_GPPI_G2_Sellsheet_A4_vE_LR.pdf',
        'type' => '1',
        'img_thumb' => 'General Processing Platform Isolator (GPPI) Sell Sheet.jpg',
        'is_activated' => '1'],

        //34
        ['title' => 'BioVap SellSheet',
        'file' => 'brochures_BioVap-A4-Sellsheet-VA-HR.pdf',
        'type' => '1',
        'img_thumb' => 'BioVap SellSheet.jpg',
        'is_activated' => '1'],


        //35
        ['title' => 'Compounding Pharmacy Equipment',
        'file' => 'brochures_9010283-Compounding-Pharmacy-Equipment-Catalogue-A4-VB-LR-03162017.pdf',
        'type' => '1',
        'img_thumb' => 'Compounding Pharmacy Equipment.jpg',
        'is_activated' => '1'],

        //36
        ['title' => 'BioPass™ SellSheet',
        'file' => 'Biopass_Sellsheet_A4_vA_LR_1590021222.pdf',
        'type' => '1',
        'img_thumb' => 'Biopass_Sellsheet_cover.jpg',
        'is_activated' => '1'],

        //37
        ['title' => 'Downflow Booth',
        'file' => 'downflow-booth-questionnaire.docx',
        'type' => '2',
        'img_thumb' => 'downflowbooth-questionnaire.png',
        'is_activated' => '1'],

        //388
        ['title' => 'Isolator General',
        'file' => 'isolator-general-questionnaire.docx',
        'type' => '2',
        'img_thumb' => 'Isolatorgeneral-questionnaire.png',
        'is_activated' => '1'],

        //39
        ['title' => 'Pharmacy Compounding',
        'file' => 'pharmacy-compounding-questionnaire.docx',
        'type' => '2',
        'img_thumb' => 'pharmacy-compounding-questionnaire.png',
        'is_activated' => '1'],

        //40
        ['title' => 'Radiopharmacy Equipment',
        'file' => 'radiopharmacy-equipment-questionnaire.docx',
        'type' => '2',
        'img_thumb' => 'radiopharmacy-questionnaire.png',
        'is_activated' => '1'],

        //41
        ['title' => 'Filling Line System Information in Esco VacciXcell Product Guide​',
        'file' => '9010289_Vaccixcell_Product Guide_A4_Brochure_vD_LR_05212019.pdf',
        'type' => '1',
        'img_thumb' => 'Vaccixcell_Product Guide_cover-01.jpg',
        'is_activated' => '1'],

        //42
        ['title' => 'Isolator Filling Line',
        'file' => 'filling-line-isolator-questionnaire.docx',
        'type' => '2',
        'img_thumb' => 'bat-fillingline-isolator-brochure-thumbnail-min.jpg',
        'is_activated' => '1'],

        //43
        ['title' => 'Streamline® Containment Isolator - Class III Brochure',
        'file' => 'SCI-Class-III-Brochure-A4-vC_LR.pdf',
        'type' => '1',
        'img_thumb' => 'sci-class-3-brochure-cover.jpg',
        'is_activated' => '1'],
        //44
        ['title' => 'Cleanroom Air Showers Brochure',
        'file' => '9010053_Cleanroom_EAS_PharmaBrochure_A4_vE_LR.pdf',
        'type' => '1',
        'img_thumb' => 'cleanroom-air-showers-brochure-cover-2.jpg',
        'is_activated' => '1'],
        //45
        ['title' => 'Healthcare Platform Isolator (Inflatable Seal Model) Brochure',
        'file' => 'hpi-g-3-is-sellsheet-a-4-v-a-3-lr-online.pdf',
        'type' => '1',
        'img_thumb' => 'hpi-g-3-is-sellsheet-a-4-v-a-3-lr-online.jpg',
        'is_activated' => '1'],

        //46
        ['title' => 'Healthcare Platform Isolator – Inflatable Seal – BioVap™ Brochure',
        'file' => 'HPI-IS-BVP_Sellsheet_A4_vB_LR_1607649797.pdf',
        'type' => '1',
        'img_thumb' => 'healthcare-platform-isolator-inflatable-seal-model-brochure.jpg',
        'is_activated' => '1'],

        //46
        ['title' => 'Evidence Drying Cabinet Sellsheet',
        'file' => 'Evidence-Drying-Cabinet-Sellsheet-A4-HR.pdf',
        'type' => '1',
        'img_thumb' => 'Evidence-Drying-Cabinet-Sellsheet.jpg',
        'is_activated' => '1'],
            ];

            foreach($productBrochures as $productBrochure){
                $get = $this->createProductBrochureData($productBrochure);
                //  var_dump($get);
            }

            // $myproducts = Product::all();
            // foreach ($myproducts as $myproduct) {
            //     $myproduct->productBrochure()->sync([1]);
            // }


        // CEILING LAMINAR AIRFLOW​
        $myproductspec = Product::find(1)->productBrochure()->sync([1,2]);

         // CYTOCULTURE™ CYTOTOXIC SAFETY CABINET
        $myproductspec = Product::find(2)->productBrochure()->sync([1,3]);

         // Pharmacon™ Downflow Booths
         $myproductspec = Product::find(3)->productBrochure()->sync([1,4,5]);

        // LAMINAR FLOW HORIZONTAL/VERTICAL TROLLEY
        $myproductspec = Product::find(4)->productBrochure()->sync([1,6]);

        // Laminar Flow Straddle Units
        $myproductspec = Product::find(5)->productBrochure()->sync([1,7]);

        // BioPass™ Pass Through
        $myproductspec = Product::find(6)->productBrochure()->sync([1,36]);

        // Cleanroom Air Showers
        $myproductspec = Product::find(7)->productBrochure()->sync([1,44,8]);

        // DYNAMIC PASS BOX / DYNAMIC FLOOR LABEL HATCHES (DPB/DFLH)
        $myproductspec = Product::find(8)->productBrochure()->sync([1,9]);

        // ESCO AIR SHOWER PASS BOX
        $myproductspec = Product::find(9)->productBrochure()->sync([1,10]);

        // Esco Sputum Booth
        $myproductspec = Product::find(10)->productBrochure()->sync([1,11]);

        // Esco Gament Storage Cabinet
        $myproductspec = Product::find(11)->productBrochure()->sync([1,31]);
        // Infinity® Pass Boxes / Transfer Hatches
        $myproductspec = Product::find(13)->productBrochure()->sync([1,10]);

        // Infinity® Pass Boxes / Transfer Hatches
        $myproductspec = Product::find(14)->productBrochure()->sync([1,10]);

        // Soft Capsule® Soft Wall Cleanroom
        $myproductspec = Product::find(15)->productBrochure()->sync([1,14]);

        // ESCO GLASSWARE HOODS
        $myproductspec = Product::find(12)->productBrochure()->sync([1,15]);

        // Advanced Processing Platform Isolator (APPI)
        $myproductspec = Product::find(16)->productBrochure()->sync([1]);

        // Advanced Processing Platform Isolator (APPI)
        $myproductspec = Product::find(17)->productBrochure()->sync([1,16]);


        // Blood Cell Labeling Isolators
        $myproductspec = Product::find(18)->productBrochure()->sync([1,28]);


        // Advanced Processing Platform Isolator (APPI)
        $myproductspec = Product::find(19)->productBrochure()->sync([1,17]);

        // Streamline® Closed Restricted Access Barrier System (SC-RABS)
        $myproductspec = Product::find(20)->productBrochure()->sync([1,19]);

        // Streamline® Closed Restricted Access Barrier System (SC-RABS)
        $myproductspec = Product::find(21)->productBrochure()->sync([1,20]);

        // Isoclean® Healthcare Platform Isolator - Without Filter Below Workzone
        $myproductspec = Product::find(22)->productBrochure()->sync([1,20]);

        // General Processing Platform Isolator - Static Seals (GPPI-SS)

        $myproductspec = Product::find(23)->productBrochure()->sync([1,33]);

        // General Processing Platform Isolator - Inflatable Seals (GPPI-IS)
        $myproductspec = Product::find(34)->productBrochure()->sync([1,33]);

        // Containment Barrier Isolator (CBI) – Undirectional
        $myproductspec = Product::find(30)->productBrochure()->sync([1,22]);
        // Containment Barrier Isolator – Turbulent (CBI-T)
        $myproductspec = Product::find(31)->productBrochure()->sync([1,22]);
        // Containment Barrier Isolator - III (CBI-III)
        $myproductspec = Product::find(32)->productBrochure()->sync([1,22]);
        // Containment Barrier Isolators - H (CBI-H)
        $myproductspec = Product::find(33)->productBrochure()->sync([1,22]);
        // Streamline® Compounding Isolator – Class III
        $myproductspec = Product::find(25)->productBrochure()->sync([1,43]);
        // TFAI™ Turbulent Flow Aseptic Isolator (TFAI)
        $myproductspec = Product::find(28)->productBrochure()->sync([1,24]);
        // Weighing and Dispensing Containment Isolator (WDCI)
        $myproductspec = Product::find(26)->productBrochure()->sync([1,32]);


        // Technetium Dispensing Isolators
        $myproductspec = Product::find(27)->productBrochure()->sync([1, 28]);

        // TFAI™ Ventilated Balance Enclosure (VBE)
        $myproductspec = Product::find(29)->productBrochure()->sync([1,25]);
        // BioBooth™
        $myproductspec = Product::find(37)->productBrochure()->sync([1,27]);

        // Isoclean® Healthcare Platform Isolator-Inflatable Seals (HPI-IS)
        $myproductspec = Product::find(35)->productBrochure()->sync([1,45]);
        // Isoclean® Healthcare Platform Isolator-G3-K (HPI-G3-K)
        $myproductspec = Product::find(36)->productBrochure()->sync([1,20]);
        // Streamline® Compounding Isolator
        $myproductspec = Product::find(38)->productBrochure()->sync([1,23]);

        // Esco Profile
        $myproductspec = DownloadCategory::find(1)->productBrochure()->sync([1,29,30]);

        // Airflow containment
        $myproductspec = DownloadCategory::find(2)->productBrochure()->sync([5,4,31,7,2,6,27]);

        // Isolation containment
        $myproductspec = DownloadCategory::find(3)->productBrochure()->sync([16,33,34,35,22,20,23,19,43]);

        // Cross Contamination Facility Barrier
        $myproductspec = DownloadCategory::find(4)->productBrochure()->sync([10,8,14,9,44]);

        // GMP-compliant Radioisotope Dispensing Isolator
        $myproductspec = Product::find(39)->productBrochure()->sync([1,28]);

        // Cytoculture® Lead-Shielded Class II Biosafety Cabinet
        $myproductspec = Product::find(40)->productBrochure()->sync([1,28]);

        // Radiopharmacy Hood (Lead Shielded Biological Safety Cabinet)
        $myproductspec = Product::find(41)->productBrochure()->sync([1,28]);

        // Frontier® Radioisotope™
        $myproductspec = Product::find(42)->productBrochure()->sync([1,28]);

        // Filling Line Isolator
        $myproductspec = Product::find(43)->productBrochure()->sync([1,41]);

        // General Processing Platform Isolator (GPPI)
        $myproductspec = Product::find(45)->productBrochure()->sync([1,33]);

        // Isoclean® Healthcare Platform Isolator – Inflatable Seal – BioVap™ (HPI-IS-BVP)
        $myproductspec = Product::find(46)->productBrochure()->sync([1,46]);

        // Isoclean® Healthcare Platform Isolator – Inflatable Seal – BioVap™ (HPI-IS-BVP)
        $myproductspec = Product::find(47)->productBrochure()->sync([1,47]);
    }

    public function createProductBrochureData($productBrochure)
    {
        $this->productBrochure->create($productBrochure);
        return $this;
    }


}
