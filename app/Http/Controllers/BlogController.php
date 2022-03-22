<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function userlist()
    {
        return response('this is controller')->header('username', 'shaon')->header('token', '26264tgdxsjdwihidgu@##$uwgug');
    }
    public function userstore()
    {
        return 'shhshs';
    }
    public function productlist()
    {
        $products = array('Shirt', '2pices', '1000Tk');

        $products_info = array(
            'key' => 'value',
            'column' => 'value',
            'Course_name' => 'Laravel',
            'Course_fee' => '10000',
            'Course_duration' => '12month',
            'Course_time' => '2.30pm',
        );

        return response()->json($products_info);
    }

    public function homepage()
    {

        $details = array(
            array(
                'key' => 'value',
                'column' => 'value',
                'Course_name' => 'Laravel',
                'Course_fee' => '10000',
                'Course_duration' => '12month',
                'Course_time' => '2.30pm',
            ),
            array(
                'key' => 'value',
                'column' => 'value',
                'development' => 'Laravel9',
            )

        );

        return response()->json($details);
    }


    public function order()
    {
        $filepath = 'orderlist.pdf';

        return response()->download($filepath);
    }
}
