<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function indexAdmin()
    {
        $orders = DB::table('orders')->where('status_cucian', '!=', 'Selesai')->orderBy('created_at', 'asc')->get();

        return view('pages.admin.home', ['pages' => 'Home'], compact('orders'));
    }

    public function product()
    {
        $products = DB::table('products')->get();
        // dd($products);
        return view('pages.admin.product', ['pages' => 'Product'], compact('products'));
    }

    public function addproduct()
    {
        return view('pages.admin.addproduct', ['pages' => 'Add Product']);
    }

    public function storeProduct(Request $request)
    {
        // return $request->file('gambar')->store('product-images');

        $validatedData = $request->validate([
            'gambar' => 'image|file|required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('product-images');

        Product::create($validatedData);
        return redirect('/Product')->with('success', 'Produk Berhasil Ditambahkan!');
    }

    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();

        return redirect('/Product')->with('delete', 'Produk Berhasil Dihapus!');
    }

    public function editProduct(Request $request)
    {
        $id = $request->id;
        $product = DB::table('products')->where('id', '=', $id)->get();
        return view('pages.admin.editproduct', ['pages' => 'Edit Product'], compact('product'));
    }

    public function storeeditProduct(Request $request)
    {
        $id = $request->id;
        $validatedData = $request->validate([
            'id' => 'required',
            'gambar' => 'image|file',
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('product-images');
        }
        
        $validatedData = Product::find($id);
        $validatedData->id = $id;
        $validatedData->nama_produk = $request->nama_produk;
        if ($request->file('gambar')) {
            $validatedData->gambar = $request->file('gambar')->store('product-images');
        }
        $validatedData->harga = $request->harga;
        $validatedData->deskripsi = $request->deskripsi;
        $validatedData->save();

        return redirect('/Product')->with('edit', 'Produk Berhasil Diedit!');

    }

    public function orderDetail(Request $request)
    {
        $id = $request->get('id');
        $orders = Order::find($id);

        return view('pages.admin.orderdetail', ['pages' => 'Order Detail'], compact('orders'));
    }

    public function updateOrder(Request $request, $id)
    {
        $data = Order::find($id);
        $data->status_cucian = $request->status_cucian;
        $data->save();

        return redirect('/HomeAdmin')->with('success', 'Data Order Berhasil Diupdate!');
    }

    public function selesai()
    {
        $orders = DB::table('orders')->where('status_cucian', '=', 'Selesai')->orderBy('created_at', 'asc')->get();

        return view('pages.admin.finish', ['pages' => 'Pesanan Selesai'], compact('orders'));
    }

    public function finishDetail(Request $request)
    {
        $id = $request->get('id');
        $orders = Order::find($id);

        return view('pages.admin.finishdetail', ['pages' => 'Finish Order Detail'], compact('orders'));
    }
    
    public function profileAdmin()
    {
        return view('pages.admin.profile', ['pages' => 'Profile']);
    }
}