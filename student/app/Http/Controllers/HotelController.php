<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view('student.index');
        // return view('student.index',['name'=>'mm']);
        // return view('student.index',['name'=>'Moksha','age'=>'18']);
        $data = [
            [
                'name' => 'Moksha',
                'age' => '18',
                'mobile'=>'0912-345-678',
            ],
            [
                'name' => 'lun',
                'age' => '17',
                'mobile'=>'0912-345-678',
            ],
            [
                'name' => 'Yang',
                'age' => '18',
                'mobile'=>'0912-345-678',
            ],
        ];
            return view('student.index',['data'=> $data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function excel()
    {
        return view('student.excel');
    }
    public function childPage()
    {
        return view('child');
    }
    public function layout()
    {
        return view('p1');
    }
    
    public function f1()
    {
        return view('hotel.f1');
    }
    public function f2()
    {
        return view('hotel.f2');
    }
    public function f3()
    {
        return view('hotel.f3');
    }
}
