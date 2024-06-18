<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;
use App\ProductCategory;
use App\Solution;
use App\SocialMedia;
use App\Slider;
use App\Product;
use App\Configurations;
use App\Product_application_category;



class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer(['includes.nav'], function($view){
            $about_sub_menus = Page::submenu('about')->get();
            $services_sub_menus = Page::submenu('services')->get();
            $resources_sub_menus = Page::submenu('resource')->get();
            $socialmedias = SocialMedia::all();
            $solutions = Solution::getparents()->get();
            $productCategories = ProductCategory::all();
            $view->with([
                            'about_sub_menus' => $about_sub_menus,
                            'services_sub_menus' => $services_sub_menus,
                            'productCategories' => $productCategories,
                            'resources_sub_menus' => $resources_sub_menus,
                            'socialmedias' => $socialmedias,
                            'solutions' => $solutions
                        ]);
        });

        view()->composer(['components.homeslider'], function($view){
            $sliders = Slider::get()->where('is_activated','=', 1)->sortBy('sort');
            $view->with([
                            'sliders' => $sliders
                        ]);
        });


        view()->composer(['components.floatingsocialicons'], function($view){
            $socialmedias = SocialMedia::all();
            $view->with([
                            'socialmedias' => $socialmedias
                        ]);
        });


        view()->composer(['components.footerNewsletter'], function($view){
            $socialmedias = SocialMedia::all();
            $view->with([
                            'socialmedias' => $socialmedias
                        ]);
        });

        view()->composer(['components.newsletterpopup'], function($view){
            $socialmedias = SocialMedia::all();
            $view->with([
                            'socialmedias' => $socialmedias
                        ]);
        });

        view()->composer(['includes.footer'], function($view){
            $products = Product::all();
            $product_application_categories = Product_application_category::all()->where('is_activated', '=', 1);
            $products_sidebar = collect($products->where('product_application_category_id','0')->where('is_activated', '=', 1));
            $product_application_categories_sidebar = collect($product_application_categories);
            $products_categories_footer_products =  collect($products_sidebar->merge($product_application_categories_sidebar));

            $view->with([
                            'footerproducts' => $products_categories_footer_products
                        ]);
        });

        view()->composer(['includes.head'], function($view){
            $config = Configurations::first();
            $view->with([
                            'config' => $config
                        ]);
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
