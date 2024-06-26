<?php

namespace App\Http\Controllers;

use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $existingOrder = Order::where('accommodatie_id', $request->accommodatie_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date]);
            })->first();

        if ($existingOrder) {
            return redirect()->route('accommodaties')->with('status', 'Excuus voor het ongemak maar deze kamer is dan al bezet!');
        }

        $order = new Order;
        $order->accommodatie_id = $request->accommodatie_id;
        $order->start_date = $request->start_date;
        $order->end_date = $request->end_date;
        $order->save();

        return redirect()->route('accommodaties')->with('status', 'Het reserveren van de kamer is gelukt!');
    }
}
