<?php

namespace App\Models;

Class Info {
    private static $blog_posts = [

        [
            "title" => "DWCU - Yogyakarta, Indonesia",
            "slug" => "dwcu-yogyakarta-indonesia",
            "body" => "I am currently enrolled at Duta Wacana Christian University, where I am pursuing a major in Computer Science. This educational journey has been both challenging and rewarding as I delve into the fascinating world of technology and programming. Through rigorous coursework and hands-on experiences, I am gaining a deep understanding of computer systems, software development, and problem-solving in the digital realm. With each passing day, I am not only expanding my knowledge but also preparing myself for a future where innovation and technology play pivotal roles. My time at Duta Wacana Christian University has been instrumental in shaping my academic and personal growth as I work towards becoming a proficient computer scientist.",
        ],
        [
            "title" => "NUS - Queenstown, Singapore",
            "slug" => "nus-queenstown-singapore",
            "body" => "Manifesting dulu sih heheheh.",
        ]

        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug) {
            $infos = static::all();
            return $infos->firstWhere('slug',$slug);
        }
}