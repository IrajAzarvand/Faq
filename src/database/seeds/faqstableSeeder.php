<?php

namespace iraj\faq;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class faqstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $faqs =array (
            'چطور می توانم وارد مدیریت بخش سوالات متداول شوم؟' => 'برای ورود به بخش مدیریت بخش سوالات متداول در بخش آدرس صفحه faq/admin را وارد نمایید',
        );
        foreach($faqs as $q => $a) {
            db::table('faqs')->insert([
                'q' => $q,
                'a' => $a,
            ]);

            for($i=2;$i<4950;$i++){
                db::table('faqs')->insert([
                    'q'=>'سوال شماره '.$i,
                    'a'=>'پاسخ شماره '. $i,
                ]);
            }
        }
    }
}
