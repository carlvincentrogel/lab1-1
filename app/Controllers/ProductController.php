<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $products;
    public function __construct(){
        $this->products = new \App\Models\ProductModel();
    }

    public function delete($Product_id){
        $this->products->delete($Product_id);
        return redirect()->to('/prod');
    }

    public function edit($Product_id)
    {
        $data = [
            'products' => $this->products->findAll(),
            'prod' => $this->products->where('Product_id', $Product_id)->first(),
        ];
        return view('product', $data);
    }
    
    

    public function save(){
        $Product_id = $_POST['Product_id'];
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        if($Product_id != null){
            $this->products->set($data)->where('Product_id', $Product_id)->update();
        }else{
            $this->products->save($data);
        }  
        return redirect()->to('/prod');
    }

    public function prod($products)
    {
        echo $products;
    
    }

    public function eryel()
    {
        $data['products'] = $this->products->findAll();
        return view('product', $data);
    }
    
    public function index()
    {
        //
    }
}
