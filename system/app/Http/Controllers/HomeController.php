<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller
{


    function showindex()
    {
        return view('frontview.index');
    }


    function showdetail()
    {
        return view('frontview.detail');
    }

    function showshop()
    {
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(4)->get();
        return view('frontview.shop', $data);
    }

    function showcheckout()
    {
        return view('frontview.checkout');
    }




    function showcolegan()
    {
        return view('backview.colegan');
    }

    function showdashboard()
    {
        return view('backview.dashboard');
    }

    function showkategori()
    {
        return view('backview.kategori');
    }


    function showproduk2()
    {
        return view('backview.produk');
    }

    function showpromo()
    {
        return view('backview.promo');
    }


    function showsupplier()
    {
        return view('backview.supplier');
    }

    function showuser()
    {
        return view('backview.user');
    }

    function showlogin()
    {
        return view('frontview.login');
    }

    function showregistrasi()
    {
        return view('frontview.registrasi');
    }

    public function testCollection()
    {
        $list_jam = ['Digital', 'Rantai', 'Emas', 'Anak', 'Dewasa'];
        $list_jam = collect($list_jam);
        $list_produk = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga'));

        // Filter

        // $filtered = $list_produk->filter(function ($item) {
        // $item->harga < 20000;
        // });

        // dd($filtered);

        //$sum = $list_produk->max('stok');
        //dd($sum);


        $data['list'] = Produk::simplePaginate(3);
        return view('test-collection', $data);


        dd($list_jam, $list_produk);
    }
}
