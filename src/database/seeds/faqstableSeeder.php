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
        $faqs = array(
            'چطور می توانم وارد بخش سوالات متداول شوم' => 'برای ورود به بخش سوالات متداول در بخش آدرس صفحه faq/ را وارد نمایید',
            'چطور می توانم وارد مدیریت بخش سوالات متداول شوم' => 'برای ورود به بخش مدیریت بخش سوالات متداول می توانید از منوی بالای صفحه استفاده کرده یا در بخش آدرس صفحه faq/admin/ را وارد نمایید',
            'اضافه کردن سوال و جواب جدید به چه صورتی است' => 'پس از ورود به بخش مدیریت صفحه، ابتدا یک فرم اضافه کردن سوال و جواب وجود دارد که می توانید از آن استفاده نمایید',
            'ویرایش سوال و جواب به چه صورتی است' => 'در پایین صفحه یک جدول وجود دارد که لیست سوالات در آن نوشته شده است. برای ویرایش و حذف می توانید از کلیدهای مقابل هر سوال استفاده کنید',
            'مشاهده یک سوال و جواب خاص چگونه امکانپذیر است' => 'برای این منظور می توانید از قسمت مشاهده مربوط به سوال استفاده کرده یا روی خود سوال کلیک کنید',


        );
        foreach ($faqs as $q => $a) {
            db::table('faqs')->insert([
                'q' => $q,
                'a' => $a,
            ]);
        }
    }
}
