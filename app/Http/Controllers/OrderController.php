<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
    
    public function addToOrder(Request $request) {

        $order = new Order;
        $order->status = 'pending';
        $order->user_id = 1;
        $order->total = 1;
        $order->save();

        return redirect('/');

    }


    public function deleteOrder($orderId) {
        $order = Order::find($orderId);

        if ($order) $order->delete();

        return(redirect('orders'));
    }

}