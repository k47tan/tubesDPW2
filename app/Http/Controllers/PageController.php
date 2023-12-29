<?php
namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function all_product()
    {
        $data = Product::all();
        return view('product/all', compact('data'));
    }
    public function mod()
    {
        $category = 'Mod';

        $data = product::where('category_product', $category)->get();
        return view('product/mod', compact('data'));
    }
    public function liquid()
    {
        $category = 'Liquid';

        $data = product::where('category_product', $category)->get();
        return view('product/liquid', compact('data'));
    }

    public function battery()
    {
        return view('product/battery');
    }
    public function atomizer()
    {
        return view('product/atomizer');
    }

    public function admin()
    {
        return view('admin/dashboardAdmin');
    }


}
?>