<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    //
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request) {
        $order = Order::create($request->all());

        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            OrderDetail::create($data);
        }

        if ($request->payment_type == 'pay_later'){
            //mail
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);
            //xoa cart
            Cart::destroy();

            return redirect('checkout/result')
                ->with('notification', 'Success! You will pay . Please check your email.');
        }

        if ($request->payment_type == 'online_payment'){
            $data_url = VNPay::vnpay_create_payment([
               'vnp_TxnRef' => $order->id,
                'vnp_OrderInfo' => 'Mo ta don hang',
                'vnp_Amount' => Cart::total(0, '', '') * 23075,
            ]);

            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request) {
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount');

        if ($vnp_ResponseCode != null) {
            if ($vnp_ResponseCode == 00)
            {
                $order = Order::find($vnp_TxnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal);

                Cart::destroy($order);

                return redirect('checkout/result')
                    ->with('notification', 'Success! Has paid online. Please check your email.');
            }else {
                Order::find($vnp_TxnRef)->delete();

                return redirect('checkout/result')
                    ->with('notification', 'ERROR! Payment failed.');
            }
        }
    }

    public function result() {
        $notification = session('notification');

        return view('front.checkout.result', compact('notification'));
    }

    private function sendEmail($order, $total, $subtotal) {
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to) {
            $message->from('accfreefireno0@gmail.com', 'BookStore');
            $message->to($email_to, $email_to);
            $message->subject('Order notification');
        });
    }
}
