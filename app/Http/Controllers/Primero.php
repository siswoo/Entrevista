<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\Orders_detail;

class Primero extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $productos = DB::table('product')->get();
        foreach ($productos as $producto)
        {
            echo $producto->product_id;
        }
        */
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uno()
    {   
        $customers = DB::table('customer')->get();
        return View('uno', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dos(Request $request)
    {
        $id = $_GET['id'];
        $customer_product = DB::table('customer_product')->where('customer_id',$id)->get();
        foreach($customer_product as $row1)
        {
            $product = DB::table('product')->where('product_id',$row1->product_id)->get();
            foreach($product as $row2)
            {
                $html = '
                      <div class="row mb-4">
                        <div class="col-12"><strong>Id</strong>: '.$row2->product_id.'</div>
                        <div class="col-12"><strong>Nombre</strong>: '.$row2->name.'</div>
                        <div class="col-12"><strong>Precio</strong>: '.$row2->price.'</div>
                        <div class="col-12"><strong>Cantidad Deseada: </strong>
                            <select class="form-control" name="cantidad">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_producto" value="'.$row2->product_id.'">
                        <input type="hidden" name="customer_id" value="'.$id.'">
                      </div>
                ';
                }
        }
        return $html;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function guardar1(Request $request)
    {
        $product_id = $_GET['id_producto'];
        $cantidad = $_GET['cantidad'];
        $customer_id = $_GET['customer_id'];
        $delivery_address = $_GET['delivery_address'];
        $fecha = date('Y-m-d');

        $product = DB::table('product')->where('product_id',$product_id)->first();
        $total = $product->price * $cantidad;

        $order = new Order;
        $order->customer_id = $customer_id;
        $order->total = $total;
        $order->creation_date = $fecha;
        $order->save();

        $order_detail = new Orders_detail;
        $order_detail->order_id = $order->id;
        $order_detail->product_description = $product->product_description;
        $order_detail->price = $product->price;
        $order_detail->quantily = $cantidad;
        $order_detail->delivery_address = $delivery_address;
        $order_detail->save();

        return view('exito1');
    }

    public function tres()
    {   
        $customers = DB::table('customer')->get();
        return View('tres', compact('customers'));
    }

     public function cuatro(Request $request)
    {
        $id = $_GET['id'];
        $orders = DB::table('orders')->where('customer_id',$id)->get();
        $html = "";
        foreach($orders as $row1)
        {
            $orders_detail = DB::table('orders_details')->where('order_id',$row1->order_id)->get();
            foreach($orders_detail as $row2)
            {
                $html .= '
                      <div class="row mb-4 mt-2">
                        <div class="col-12">
                            <table border="1" style="width:100%;">
                                <tr>
                                    <th class="text-center">Creation Date</td>
                                    <th class="text-center">Order ID</td>
                                    <th class="text-center">Total $</td>
                                    <th class="text-center">Delivery Address</td>
                                    <th class="text-center">Products</td>
                                </tr>
                                <tr>
                                    <td>'.$row1->creation_date.'</td>
                                    <td>'.$row2->order_id.'</td>
                                    <td>'.$row1->total.'</td>
                                    <td>'.$row2->delivery_address.'</td>
                                    <td>'.$row2->product_description.'</td>
                                <tr>
                            <table>
                        </div>
                      </div>
                ';
            }
        }
        return $html;
    }

     public function cinco(Request $request)
    {
        $id = $_GET['id'];
        $orders = DB::table('orders')->where('customer_id',$id)->orderBy('order_id', 'desc')->get();
        $html = "";
        foreach($orders as $row1)
        {
            $orders_detail = DB::table('orders_details')->where('order_id',$row1->order_id)->get();
            foreach($orders_detail as $row2)
            {
                $html .= '
                      <div class="row mb-4 mt-2">
                        <div class="col-12">
                            <table border="1" style="width:100%;">
                                <tr>
                                    <th class="text-center">Creation Date</td>
                                    <th class="text-center">Order ID</td>
                                    <th class="text-center">Total $</td>
                                    <th class="text-center">Delivery Address</td>
                                    <th class="text-center">Products</td>
                                </tr>
                                <tr>
                                    <td>'.$row1->creation_date.'</td>
                                    <td>'.$row2->order_id.'</td>
                                    <td>'.$row1->total.'</td>
                                    <td>'.$row2->delivery_address.'</td>
                                    <td>'.$row2->product_description.'</td>
                                <tr>
                            <table>
                        </div>
                      </div>
                ';
            }
        }
        return $html;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
