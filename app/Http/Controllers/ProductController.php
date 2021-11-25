<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Textos;

class ProductController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function thankyou()
    {
        /* $products = Product::all();*/

        return view('thankyou');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');

        return view('products.create-step-one', compact('product'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        /*    $validatedData = $request->validate([
            'nombre' => 'required|unique:products',
            'email' => 'required|numeric',
            'description' => 'required',
        ]);*/
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|max:49',
            'telefono' => 'required|string|min:5|max:49',
            'pais' => 'required',
        ]);

        if (empty($request->session()->get('product'))) {
            $product = new Product();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }


        return redirect()->route('products.create.step.two');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');

        return view('products.create-step-two', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {



        $product = $request->session()->get('product');
        $texto = Textos::inRandomOrder()->limit(1)->get();
        foreach ($texto as $key) {
            $product->textoIni = $key->texto;
        }
        $request->session()->put('product', $product);

        /*  $product->textoIni = 'asdf';*/

        $product->save();

        return redirect()->route('products.create.step.three');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {




        $product = $request->session()->get('product');
        return view('products.create-step-three', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {


        $product = $request->session()->get('product');
        $request->session()->put('product', $product);
        print_r($product);
        $product->textoRedaccion = $request->input('textoRedaccion');

        $product->save();

        $request->session()->forget('product');
        /*
        return redirect()->route('products.index');
        */
        return redirect()->route('thankyou');
    }
}