<?php

use Illuminate\Database\Seeder;
Use App\SocialMedia;


class SocialMediaSeeder extends Seeder
{
    protected $socialMedia;


    public function __construct(SocialMedia $socialMedia)
    {
    	$this->socialMedia = $socialMedia;

    }

    public function run()
    {
    	$socialMedias = [
            [
            'name' => 'facebook',
            'link' => 'https://facebook.com/escopharma/',
            'tag' => 'Like Us!',
            'icon' => 'fa-facebook',
            'type' => 'social',
            'sort' => 1,
            'is_activated' => 1],


            [
                'name' => 'youtube',
                'link' => 'https://www.youtube.com/channel/UCPwQenLmQ62MWlnnElNx9uA',
                'tag' => 'Watch Us!',
                'icon' => 'fa-youtube',
                'type' => 'social',
                'sort' => 2,
                'is_activated' => 1],

            [
                'name' => 'linkedin',
                'link' => 'https://www.linkedin.com/company/esco-healthcare',
                'tag' => 'Follow Us!',
                'icon' => 'fa-linkedin',
                'type' => 'social',
                'sort' => 3,
                'is_activated' => 1],
            [
                'name' => 'envelope',
                'link' => 'mailto:csis.pharma@escoglobal.com',
                'tag' => 'Contact Us!',
                'icon' => 'fa-envelope',
                'type' => 'mail',
                'sort' => 4,
                'is_activated' => 1],


            ];


            foreach($socialMedias as $socialMedia){
                $get = $this->createSocialMedia($socialMedia);
                //	var_dump($get);
            }

    }

    public function createSocialMedia($socialMedia)
    {
    	$this->socialMedia->create($socialMedia);
    	return $this;
    }

}
