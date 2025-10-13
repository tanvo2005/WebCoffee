<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webCoffeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function product($id){
        $drint = [
            'cafe' => [
                ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55000',
                'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.',
                'image' => 'images/latte.jpg'],
    
                ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45000',
                'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác
                quan.', 'image' => 'images/americano.jpg'],
    
                ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60000',
                'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ
                trụ.', 'image' => 'images/coldbrew.jpg'],
    
                ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' =>
                '58000', 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt
                sữa trắng.', 'image' => 'images/macchiato.jpg']
            ],

            'tra' => [
                ['id' => 5, 'name' => 'Trà Thiên Hà Sen Vàng', 'price' => '52000',
                'description' => 'Trà sen thơm ngát, mang vị thanh khiết và dịu nhẹ như ánh sáng thiên hà.',
                'image' => 'images/trasenvang.jpg'],

                ['id' => 6, 'name' => 'Trà Xanh Sao Băng', 'price' => '48000',
                'description' => 'Trà xanh nguyên chất, vị chát nhẹ hòa cùng hương thơm tươi mát, như làn gió từ sao băng.',
                'image' => 'images/traxanh.jpg'],

                ['id' => 7, 'name' => 'Trà Đào Mặt Trăng', 'price' => '55000',
                'description' => 'Trà đào thơm ngọt, mang vị trái cây tự nhiên và cảm giác dịu dàng như ánh trăng.',
                'image' => 'images/tradao.jpg'],

                ['id' => 8, 'name' => 'Trà Sữa Ngân Hà', 'price' => '59000',
                'description' => 'Trà sữa béo ngậy, hòa quyện cùng hương trà đậm đà, như dải ngân hà trong ly.',
                'image' => 'images/trasua.jpg']

            ],

            'banh' => [
                ['id' => 9, 'name' => 'Thiên Thạch Cheesecake', 'price' => '65000',
                'description' => 'Bánh cheesecake mềm mịn, vị béo ngậy như mảnh thiên thạch ngọt ngào rơi giữa vũ trụ.',
                'image' => 'images/cheesecake.jpg'],

                ['id' => 10, 'name' => 'Mặt Trăng Tiramisu', 'price' => '70000',
                'description' => 'Lớp kem mascarpone hoà cùng cacao đắng nhẹ, mang đến hương vị ngọt ngào như ánh trăng đêm.',
                'image' => 'images/tiramisu.jpg'],

                ['id' => 11, 'name' => 'Sao Băng Brownie', 'price' => '60000',
                'description' => 'Brownie socola đậm vị, phủ vụn hạt giòn tan như vệt sao băng lướt qua bầu trời.',
                'image' => 'images/brownie.jpg'],

                ['id' => 12, 'name' => 'Dải Ngân Hà Mousse', 'price' => '68000',
                'description' => 'Bánh mousse mịn màng với lớp gương phủ lấp lánh như dải ngân hà rực rỡ.',
                'image' => 'images/mousse.jpg']

            ]

        ];
        return view('product');
    }

    public function menu(){
        return view('menu');
    }
    public function beanstory(){
        return view('beanstory');
    }
    public function contact(){
        return view('contact');
    }
    
}

