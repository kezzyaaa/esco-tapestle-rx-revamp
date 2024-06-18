<?php

namespace App\Http\Controllers;

use App\Page;
use App\ProductCategory;
use App\Product;
use App\Product_application_category;
use App\ContainmentControl;
use App\Country;
use App\News;
use App\Event;
use App\NewsCategory;
use Carbon\Carbon;
use App\DownloadCategory;
use App\ProductBrochure;
use App\Solution;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */



    public function show($slug,$prod=null)
    {
        // dd('romuell');

        $user_browser = $this->checkBrowser();

        $activePage = Page::current($slug)->get();


        if ($activePage->isEmpty()) {

            return $this->redirectOldUrl($slug);
        }
        else
        {
            return $this->redirectPage($slug,$activePage,$user_browser,$prod);
        }


    }

    public function show2param($pageCat,$slug)
    {
        $prod=null;
        $user_browser = $this->checkBrowser();

        $activePage = Page::current($slug)->get();

        if ($activePage->isEmpty()) {

            return $this->redirectOldUrl($slug);
        }
        else
        {
           return $this->redirectPage($slug,$activePage,$user_browser,$prod);
        }


    }
    public function show3param($pageCat,$page,$slug )
    {

        $prod=null;
        $user_browser = $this->checkBrowser();

        $activePage = Page::current($slug)->get();

        if ($activePage->isEmpty()) {

            return $this->redirectOldUrl($slug);
        }
        else
        {
           return $this->redirectPage($slug,$activePage,$user_browser,$prod);
        }


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }


    public function checkBrowser()
    {
        $arr_browsers = ["Opera", "Edge", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];

        $agent = $_SERVER['HTTP_USER_AGENT'];

        $user_browser = '';
        foreach ($arr_browsers as $browser) {
            if (strpos($agent, $browser) !== false) {
                $user_browser = $browser;
                break;
            }
        }

        switch ($user_browser) {
            case 'MSIE':
                $user_browser = 'Internet Explorer';
                break;

            case 'Trident':
                $user_browser = 'Internet Explorer';
                break;

            case 'Edge':
                $user_browser = 'Microsoft Edge';
                break;
        }

        return $user_browser;
    }

    public function redirectPage($slug, $activePage, $user_browser,$prod)
    {
        $activePageSection = $activePage->first()->page_category_id;
        $layout = $activePage->first()->layout;
        $Breadcrumb_banner = $activePage->first()->banner_img;
        $page_title = $activePage->first()->title;
        $breadcrumb_section = $activePage->first()->section;
        $breadcrumb_name = $activePage->first()->name;
        $sidebar_menus = Page::sidemenu($activePageSection)->get();
        $sidebar_title = "This is Esco TapestleRx";
        if($activePage->first()->page_category_id != '0'){
            $sidebar_title = $activePage->first()->pageCategory()->first()->sidebar_title;
        }
        $productCategories = ProductCategory::all();
        // $products = Product::find(1);
        $products = Product::all();
        if ($slug == 'products') {


            $product_application_categories = Product_application_category::all()->where('is_activated', '=', 1);
            $products_sidebar = collect($products->where('product_application_category_id','0')->where('is_activated', '=', 1));
            $product_application_categories_sidebar = collect($product_application_categories);
            $products_categories_sidebar =  collect($products_sidebar->merge($product_application_categories_sidebar));
            $Containment_controls = ContainmentControl::all();
            // $product_containment = $products->containmentcontrol[0]->pivot->is_activated;

            // dd($product_containment);

            $sample_product_list = [
              'Biosafety Cabinet Class I',
              'Biosafety Cabinet Class IIA',
              'Biosafety Cabinet Class IIB',
              'Blood Cell Labelling Isolator',
              'Cleanroom Air Shower',
              'Containment Barrier Isolator',
              'Cytoculture Cytotoxic Safety Cabinet',
              'Cytotoxic Lead-shielded Class II Biosafety Cabinet (LS2)',
              'Esco Garment Storage Cabinet',
              'Filling Line Isolators',
              'Frontier Radioiodine Fumehood',
              'General Processing Platform Isolator',
              'GMP-compliant Radioisotope Dispensing Isolator',
              'Isoclean Healthcare Platform Isolator',
              'Laboratory Freezers',
              'Laboratory Refrigerators',
              'Laminar Flow Cabinet',
              'Pass Boxes/Transfer Hatches/Dynamic Pass Boxes',
              'Radiopharmacy Hood (Lead-shielded Biosafety Cabinet)',
              'Streamline Closed RABS',
              'Streamline Compounding Isolator',
              'Technetium DIspensing Isolator',
              'Ultra-low Dispensing Freezer',
              'Ventilated Balance Enclosure'
            ];

            $row_items_1 = [
              '','','','','','','','','','',''
              ];

              $row_items_2 = [
              '','','','','',''
              ];

              $row_items_3 = [
              '','','','','',''
              ];

            // dd($trash);
            return view('productDirectory', compact('row_items_1','row_items_2','row_items_3','sample_product_list',
            'activePage','layout', 'productCategories', 'products', 'product_application_categories', 'products_categories_sidebar', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'user_browser', 'Containment_controls'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }

        elseif ($slug == 'news') {

            // $product_containment = $products->containmentcontrol[0]->pivot->is_activated;

            $newslist = News::get()->where('is_activated', '=', 1)->sortByDesc('created_at');
            $newscategories = NewsCategory::all()->sortBy('sort');
            $latest = $newslist->take(3)->collect()->values();
            $today = Carbon::now();
            $upcomingevents = Event::upcomming($today)->take(3);
            $eventsTitle = 'Upcoming Events';
            if(count($upcomingevents) < 1){
                $upcomingevents = Event::previous($today)->sortByDesc('event_end')->take(3);
                $eventsTitle = 'Previous Events';
            }


            return view('newsDirectory', compact('activePage','layout', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'latest','newscategories', 'upcomingevents','eventsTitle'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }


        elseif ($slug == 'events') {

            // $product_containment = $products->containmentcontrol[0]->pivot->is_activated;

            // dd($product_containment);
            $today = Carbon::now();
            $previousEvents = Event::previous($today);

            $eventsList = Event::upcomming($today);
            // dd($eventsList);
            $recentNews = News::all()->take(5);

            return view('eventsDirectory', compact('activePage','layout', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'eventsList', 'recentNews', 'previousEvents'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }

        elseif ($slug == 'contact-us') {

            // $product_containment = $products->containmentcontrol[0]->pivot->is_activated;
            $product_list = Product::all()->where('is_activated', '=', 1)->sortBy('name');
            $countries = Country::all()->where('is_activated', '=', 1)->sortBy('name');
            return view('contactUs', compact('activePage','layout', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name','countries','prod','product_list'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }


        elseif ($slug == 'downloads') {

            // $product_containment = $products->containmentcontrol[0]->pivot->is_activated;

            // dd($product_containment);

            // dd($trash);
            $downloadCategories = DownloadCategory::all()->sortBy('sort');
            return view('downloads', compact('activePage','downloadCategories','layout' ,'productCategories', 'products', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'sidebar_menus','sidebar_title'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }

        elseif ($slug == 'questionnaires') {

            // $product_containment = $products->containmentcontrol[0]->pivot->is_activated;

            // dd($product_containment);

            // dd($trash);
            $questionnaires = ProductBrochure::all()->where('type','2');

            return view('questionnaires', compact('activePage','questionnaires','layout','productCategories', 'products', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'sidebar_menus','sidebar_title'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }

        elseif ($slug == 'videos') {


            return view('videos', compact('activePage','layout','productCategories', 'products', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'sidebar_menus','sidebar_title'));

            // if(request()->has('productId'))
            // return redirect('/about/profile/'.request()->get('productId'));
        }

        else
        {

            return view('page', compact('activePage','layout','productCategories', 'products', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'sidebar_menus','sidebar_title'));
        }
    }

    public function redirectOldUrl($slug){
        switch($slug) {
            case 'about':
                return redirect('about/profile', 301);
                break;
            case 'compounding-aseptic-isolator':
                return redirect('compounding-aseptic-isolator/compounding-aseptic-isolator-cai', 301);
                break;
            case 'solutions':
                return redirect('solutions/by-application', 301);
                break;
            case 'news-category':
                return redirect('news', 301);
                break;
            case 'formulation-and-filling-line':
                return redirect('formulation-and-filling-line/traditional-filling-line-system', 301);
                break;
            case 'rabs':
                return redirect('rabs/restricted-access-barrier-system', 301);
                break;
            case 'services':
                return redirect('services/aftermarket-support', 301);
                break;
            // old urls
            case 'products.php':
                return redirect('products', 301);
                break;
            case 'news.php':
                return redirect('news', 301);
                break;
            case 'about-us.php':
                return redirect('about/profile', 301);
                break;
            case 'brands.php':
                return redirect('products', 301);
                break;
            case 'services.php':
                return redirect('services/aftermarket-support', 301);
                break;
            case 'application.php':
                return redirect('solutions/by-application', 301);
                break;
            case 'drug-segment.php':
                return redirect('solutions/drug-segment', 301);
                break;
            case 'hazard.php':
                return redirect('solutions/by-hazard', 301);
                break;
            case 'ddf.php':
                return redirect('solutions/drug-dosage-form', 301);
                break;
            case 'packaging.php':
                return redirect('solutions/by-packaging', 301);
                break;
            case 'phase.php':
                return redirect('/solutions/by-drug-development-process', 301);
                break;
            case 'unit-operations.php':
                return redirect('solutions/by-application', 301);
                break;
            case 'downloadsPage.php':
                return redirect('resource/downloads', 301);
                break;
            case 'resources.php':
                return redirect('resource/downloads', 301);
                break;
            case 'contact-us.php':
                return redirect('contact-us', 301);
                break;
            case 'conditions-of-supply-new.php':
                return redirect('customer-service/conditions-of-supply', 301);
                break;
            case 'new-events-page.php':
                return redirect('events', 301);
                break;
            case 'resource':
                return redirect('resource/downloads', 301);
                break;
            case 'products-sub-page.php':
                if(request()->has('productId')){
                    switch(request()->query('productId')) {

                        case '5':
                            return redirect('/products/downflow-booths/3', 301);
                            break;
                        case '6':
                            return redirect('/products/cleanroom-transfer-hatch/14', 301);
                            break;
                        case '1':
                            return redirect('/products/biopass-pass-through/6', 301);
                            break;
                        case '2':
                            return redirect('/products/ventilated-balance-enclosure/29', 301);
                            break;
                        case '31':
                            return redirect('/products/cleanroom-air-showers/7', 301);
                            break;
                        case '34':
                            return redirect('/products/ceiling-laminar-airflow/1', 301);
                            break;
                        case '52':
                            return redirect('/products/weighing-and-dispensing-containment-isolator/26', 301);
                            break;
                        case '49':
                            return redirect('/products/downflow-booths/3', 301);
                            break;
                        case '38':
                            return redirect('/compounding-aseptic-isolator/compounding-aseptic-containment-isolator-caci', 301);
                            break;
                        case '43':
                            return redirect('/products/dynamic-passboxes-dynamic-floor-laminar-hatches/8', 301);
                            break;
                        case '42':
                            return redirect('/products/downflow-booths/3', 301);
                            break;
                        case '41':
                            return redirect('/products/downflow-booths/3', 301);
                            break;
                        case '40':
                            return redirect('/products/containment-barrier-isolator-u/30', 301);
                            break;
                        case '39':
                            return redirect('/compounding-aseptic-isolator/compounding-aseptic-isolator-cai', 301);
                            break;
                        case '37':
                            return redirect('/rabs/closed-restricted-access-barrier-system', 301);
                            break;
                        case '35':
                            return redirect('/products/gmp-compliant-radioisotope-dispensing-isolator/39', 301);
                            break;
                        case '44':
                            return redirect('https://escovaccixcell.com/products-and-brands/BioXcell', 301);
                            break;
                        case '4':
                            return redirect('/products/general-processing-platform-isolator-gppi/45', 301);
                            break;
                        case '7':
                            return redirect('/products/general-processing-platform-isolator-gppi/45', 301);
                            break;
                        case '3':
                            return redirect('/products/garment-storage-cabinet/11', 301);
                            break;
                        case '32':
                            return redirect('/rabs/open-restricted-access-barrier-system', 301);
                            break;
                        case '33':
                            return redirect('/products/aseptic-containment-isolator/17', 301);
                            break;
                        case '50':
                            return redirect('/products/general-processing-platform-isolator-gppi/45', 301);
                            break;
                        case '48':
                            return redirect('https://escovaccixcell.com/tide_technology/cell_seeding/tide_motion_bioreactors', 301);
                            break;
                        case '47':
                            return redirect('/products/laminar-flow-horizontal-vertical-trolley/4', 301);
                            break;
                        case '36':
                            return redirect('/products/healthcare-platform-isolator-without-filter-below-workzone/21', 301);
                            break;
                        default:
                            return redirect('products', 301);
                            break;
                    }
                }else{
                    return redirect('products', 301);
                    break;
                }

            case 'general-processing-platform-isolator':
                return redirect('/products/general-processing-platform-isolator-gppi/45', 301);
                break;
            case 'downflow-booths':
                return redirect('/products/downflow-booths/3', 301);
                break;
            case 'weighing-and-dispensing-containment-isolators':
                return redirect('/products/weighing-and-dispensing-containment-isolator/26', 301);
                break;
            case 'active-open-restricted-access-barriers-system-orabs':
                return redirect('/rabs/open-restricted-access-barrier-system', 301);
                break;
            case 'customer-service':
                return redirect('/customer-service/terms-and-conditions', 301);
                break;
            // case 'core-tech-sub-page.php':
            //     return redirect('products', 301);
            //     break;
            }
        if(request()->has('newsId')){
            $name = request()->query('newsId');
            $oldnews = News::old($name)->get();
            if ($oldnews->isEmpty()) {
                return abort(404);
            }else{
                return redirect('/news'.'/'.$oldnews->first()->slug, 301);
            }
        }

        if(request()->has('ctId')){
            switch(request()->query('ctId')) {
                case '72':
                    return redirect('/products/ventilated-balance-enclosure/29', 301);
                    break;
                default:
                    return redirect('products', 301);
                }
        }elseif(request()->has('productId')){
            switch(request()->query('productId')) {
                case '32':
                    return redirect('/products/laminar-flow-horizontal-vertical-trolley/4', 301);
                    break;
                case '37':
                    return redirect('/compounding-aseptic-isolator/compounding-aseptic-isolator-cai', 301);
                    break;
                case '36':
                    return redirect('/products/compounding-isolator/38', 301);
                    break;
                case '38':
                    return redirect('/compounding-aseptic-isolator/compounding-aseptic-containment-isolator-caci ', 301);
                    break;

                }
            $name = request()->query('productId');
            $oldproduct = Product::old($name)->get();
            if ($oldproduct->isEmpty()) {
                return abort(404);
            }else{
                return redirect('/products'.'/'.$oldproduct->first()->slug.'/'.$oldproduct->first()->id, 301);
            }

        }
        elseif(request()->has('articleId') && request()->has('pg')){
            switch(request()->query('articleId')) {
                case '101':
                    return redirect('/solutions/cell-and-gene-therapy', 301);
                    break;
                case '99':
                    return redirect('/solutions/combinations-antibody-drug-conjugates', 301);
                    break;
                case '100':
                    return redirect('/solutions/by-drug-development-process', 301);
                    break;
                case '93':
                    return redirect('/solutions/by-drug-development-process', 301);
                    break;
                case '97':
                    return redirect('/solutions/by-drug-development-process', 301);
                    break;
                case '95':
                    return redirect('/solutions/by-drug-development-process', 301);
                    break;
                case '94':
                    return redirect('/solutions/combinations-antibody-drug-conjugates', 301);
                    break;
                case '96':
                    return redirect('/solutions/by-drug-development-process', 301);
                    break;

                }
            $name = request()->query('articleId');

            $oldsolution = Solution::old($name)->get();
            if ($oldsolution->isEmpty()) {
                return abort(404);
            }else{
                return redirect('/solutions'.'/'.$oldsolution->first()->slug, 301);
            }

        }
        elseif(request()->has('hazardId') && request()->has('pg')){

            $name = request()->query('hazardId');

            $oldsolution = Solution::old($name)->get();
            if ($oldsolution->isEmpty()) {
                return abort(404);
            }else{
                return redirect('/solutions'.'/'.$oldsolution->first()->slug, 301);
            }

        }
        else{
            return abort(404);
        }

    }
}
