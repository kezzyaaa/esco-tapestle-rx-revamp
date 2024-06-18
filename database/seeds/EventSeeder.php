<?php

use Illuminate\Database\Seeder;
use App\Event;


class EventSeeder extends Seeder
{
    protected $Event;

    public function __construct(Event $Event)
    {
    	$this->Event = $Event;
    }

    public function run()
    {
		$Events = [
		    [
                'banner_img' => 'gene-and-cell-summit-updated-min.jpg',
                'title' => 'Annual Cell and Gene Therapy Innovation Summit',
                'location' => 'Radisson Blu Alexanderplatz, Berlin, Germany',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-02-05 00:00:00',
                'event_end' => '2020-02-06 00:00:00',
            ],

		    [
                'banner_img' => 'world-advanced-therapies-congress-and-expo-min.jpg',
                'title' => 'World Advanced Therapies Congress and Expo',
                'location' => 'Paris, France',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-03-30 00:00:00',
                'event_end' => '2020-04-01 00:00:00',
            ],

		    [
                'banner_img' => '2020-ispe-europe-annual-conference-min.jpg',
                'title' => '2020 ISPE Europe Annual Conference',
                'location' => 'Melia Avenida America, Madrid, Spain',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-03-30 00:00:00',
                'event_end' => '2020-04-02 00:00:00',
            ],

		    [
                'banner_img' => 'analytica-2020-min.jpg',
                'title' => 'Analytica 2020',
                'location' => 'Neue MEsse Munchen, Munich, Germany',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-03-31 00:00:00',
                'event_end' => '2020-04-03 00:00:00',
            ],

		    [
                'banner_img' => 'Pharmaconex-min.jpg',
                'title' => 'Pharmaconex',
                'location' => 'Egypt International Exhibition Center (EIEC), Cairo, Egypt',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-04-05 00:00:00',
                'event_end' => '2020-04-07 00:00:00',
            ],

		    [
                'banner_img' => 'Interphex-min.jpg',
                'title' => 'Interphex',
                'location' => 'Javits Center, New York City',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-04-28 00:00:00',
                'event_end' => '2020-04-30 00:00:00',
            ],

		    [
                'banner_img' => 'scientific-laboratory-show-conference-min.jpg',
                'title' => 'Scientific Laboratory Show & Conference',
                'location' => 'De Vere East Midlands Conference Center, Nottingham, United Kingdom',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-05-20 00:00:00',
                'event_end' => '2020-05-20 00:00:00',
            ],

		    [
                'banner_img' => '2-nd-annual-gene-and-cell-therapy-quality-developments-to-commercialization-summit-min.jpg',
                'title' => '2nd Annual Gene and Cell Therapy: Quality Developments to Commercialization Summit',
                'location' => 'Munich, Germany',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-06-03 00:00:00',
                'event_end' => '2020-06-04 00:00:00',
            ],

		    [
                'banner_img' => 'ISPE-singapore-min.jpg',
                'title' => 'International Society for Pharmaceutical Engineering (ISPE) Singapore 2020',
                'location' => 'Suntec, Singapore',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-08-26 00:00:00',
                'event_end' => '2020-08-28 00:00:00',
            ],

		    [
                'banner_img' => 'c-phl-milan-italy-min.jpg',
                'title' => 'CPhI',
                'location' => 'Fiera Milano, Rho, Italy',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-10-13 00:00:00',
                'event_end' => '2020-10-15 00:00:00',
            ],

		    [
                'banner_img' => 'world-vaccine-congress-europe-min.jpg',
                'title' => 'World Vaccine Congress Europe',
                'location' => 'Palau de Congressos de Catalunyo Barcelona, Spain',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-10-19 00:00:00',
                'event_end' => '2020-10-22 00:00:00',
            ],


		    [
                'banner_img' => 'esgct-bsgct-min.jpg',
                'title' => 'European Society of Gene and Cell Therapy / British Society for Gene and Cell Therapy Collaborative Congress (ESGCT/BSGCT)',
                'location' => 'The Exchange, Edinburgh EH3 8EE, Scotland UK',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '1',
                'event_start' => '2020-10-24 00:00:00',
                'event_end' => '2020-10-24 00:00:00',
            ],

		    [
                'banner_img' => 'IPEX-min.jpg',
                'title' => 'IPEX Indonesia Pharmaceutical Expo',
                'location' => 'Jakarta International Expo, Kemayoran-Indonesia',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-10-30 00:00:00',
                'event_end' => '2020-11-02 00:00:00',
            ],

		    [
                'banner_img' => 'saphex-2020-min.jpg',
                'title' => 'SAPHEX 2020',
                'location' => 'Gallagher Convention Centre, Midrand, South Africa',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-11-03 00:00:00',
                'event_end' => '2020-11-04 00:00:00',
            ],

		    [
                'banner_img' => 'lab-innovations-min.jpg',
                'title' => 'Lab Innovations',
                'location' => 'National Exhibition Center, Marston Green, United Kingdom',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-11-04 00:00:00',
                'event_end' => '2020-11-05 00:00:00',
            ],

		    [
                'banner_img' => 'healthcare-packaging-expo-min.jpg',
                'title' => 'Healthcare Packaging Expo',
                'location' => 'McCormick Place, Chicago, Illinois, USA',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-11-08 00:00:00',
                'event_end' => '2020-11-12 00:00:00',
            ],

		    [
                'banner_img' => 'pharmtech-ingredients-2020-min.jpg',
                'title' => 'Pharmtech & Ingredients 2020',
                'location' => 'Crocus Expo, Krasnogorsk, Russia',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-11-08 00:00:00',
                'event_end' => '2020-11-12 00:00:00',
            ],

		    [
                'banner_img' => 'ispe-uk-min.jpg',
                'title' => 'International Society for Pharmaceutical Engineering (ISPE) UK Annual Conference',
                'location' => 'Manchester, UK',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '1',
                'event_start' => '2020-11-10 00:00:00',
                'event_end' => '2020-11-13 00:00:00',
            ],

		    [
                'banner_img' => 'cell-therapy-manufacturing-and-gene-therapy-congress-min.jpg',
                'title' => 'Cell Therapy Manufacturing and Gene Therapy Congress',
                'location' => 'RAI, Amsterdam',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-12-01 00:00:00',
                'event_end' => '2020-12-04 00:00:00',
            ],

            [
                'banner_img' => '120920-singapore-conference-exhibition-2020-min.jpg',
                'title' => 'ISPE Singapore Conference & Exhibition',
                'location' => 'Virtual Conference',
                'link' => null,
                'is_activated' => '1',
                'to_be_confirmed' => '0',
                'event_start' => '2020-12-09 00:00:00',
                'event_end' => '2020-12-11 00:00:00',
            ],
           ];



        foreach($Events as $Event){
        	$get = $this->createEvent($Event);
        	//	var_dump($get);
        }

    }
    public function createEvent($Event)
    {
    	$this->Event->create($Event);
    	return $this;
    }
}
