<?php

use App\Configurations;
use App\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ConfigurationsSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(PageCategoriesSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductApplicationSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductSpecificationSeeder::class);
        $this->call(ProductContainmentsSeeder::class);
        $this->call(DownloadCategorySeeder::class);
        $this->call(ProductBrochureSeeder::class);
        $this->call(SolutionsSeeder::class);
        // $this->call(NewsCategorySeeder::class);
        // $this->call(NewsSeeder::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(CountriesSeeder::class);




    }
}
