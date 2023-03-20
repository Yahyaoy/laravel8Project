<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;

class paymentsController extends Controller
{
    public function create(){
        return view('payments.create');
    }

    public function store(){

        ProductPurchased::dispatch('toy');
        event(new PaymentReceived('toy'));


//        \request()->user()->notify(new PaymentReceived(1000));
//        return Notification::send(\request()->user(), new PaymentReceived());
    }
}
