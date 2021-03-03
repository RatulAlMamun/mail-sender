<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mail_sender (Request $request) {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|numeric',
            'presentAddress' => 'required',
            'presentDistrict' => 'required',
            'presentThana' => 'required',
            'bDate' => 'required',
            'permanentAddress' => 'required',
            'permanentDistrict' => 'required',
            'permanentThana' => 'required',
            'postalCode' => 'required|numeric'
        ]);

        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'presentAddress' => $request->presentAddress,
            'presentDistrict' => $request->presentDistrict,
            'presentThana' => $request->presentThana,
            'bDate' => $request->bDate,
            'permanentAddress' => $request->permanentAddress,
            'permanentDistrict' => $request->permanentDistrict,
            'permanentThana' => $request->permanentThana,
            'postalCode' => $request->postalCode
        ];

        Mail::to('ahmed.amit107@gmail.com')->send(new \App\Mail\MyTestMail($data));

        return $data;
    }
}
