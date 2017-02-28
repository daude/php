<?php

use Illuminate\Database\Seeder;
use App\PageSetting;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page=new PageSetting();
        $page->email="info@coffee.com";
        $page->facebook="https://www.facebook.com/coffee";
        $page->twitter="https://www.twitter.com/coffee";
        $page->pinterest="https://www.pinterest.com/coffee";
        $page->blogger="https://www.blogger.com/coffeeblog";
        $page->dribbble="https://www.dribbble.com/coffee";
       	$page->save();
    }
}
