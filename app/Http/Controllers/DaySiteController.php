<?php

namespace App\Http\Controllers;

use App\Mail\DayEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DaySiteController extends Controller
{
    public function home(){
        return view('DaySite.home');
    }
    public function about(){
        return view('DaySite.about');
    }
    public function services(){
        return view('DaySite.services');
    }
    public function portfolio(){
        return view('DaySite.portfolio');
    }
    public function portfolioDetails(){
        return view('DaySite.portfolio-details');
    }
    public function pricing(){
        return view('DaySite.pricing');
    }
    public function team(){
        return view('DaySite.team');
    }
    public function contact(){
        return view('DaySite.contact');
    }
    public function contactForm(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $data = $request->except('_token');
        Mail::to('admin@admin')->send(new DayEmail($data));
        return redirect()->route('day.contact');

    }
}
