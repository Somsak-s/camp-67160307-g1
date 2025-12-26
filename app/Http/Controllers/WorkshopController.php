<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    // เรียกหน้า Workshop #HTML-FORM
    public function index()
    {
    return view('html101');
    }

    // รับค่าจากฟอร์ม แล้วส่งไปแสดงผลหน้าใหม่
    public function store(Request $request)
    {
        $data = $request->except('photo'); // ยังไม่ upload ไฟล์

        return view('workshop.result', compact('data'));
    }
}
