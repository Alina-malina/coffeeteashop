<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create()->id;
        } else {
            $order = Order::find($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder(
            $request->name,
            $request->phone,
            $request->city,
            $request->street,
            $request->entrance,
            $request->floor,
            $request->flat,
            $request->intercom,
            $request->comment
        );

        if ($success) {
            return redirect()->route('thanks');
        } else {
            session()->flash('warning', 'Произошла ошибка ! Повторите снова через некоторое время.');
        }

        // dd($request);

    }

    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);

        return view('order', compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->quantity++;
            $pivotRow->update();
        } else {
            //$order = $order->first();
            $order->products()->attach($productId);
        }

        $product = Product::find($productId);

        session()->flash('success', 'Добавлен товар ' . $product->name);

        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return view('basket', compact('order'));
        }
        $order = Order::find($orderId);
        $order->products()->detach($productId);

        $product = Product::find($productId);

        session()->flash('warning', 'Удален товар ' . $product->name);

        return view('basket', compact('order'));
    }
}
