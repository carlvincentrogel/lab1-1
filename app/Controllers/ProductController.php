<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $products;
    private $category;
    
    public function __construct(){
        $this->products = new \App\Models\ProductModel();
        $this->category = new \App\Models\CategoryModel();
    }

    public function delete($Product_id){
        $this->products->delete($Product_id);
        return redirect()->to('/prod');
    }

    public function edit($Product_id)
    {
        $data = [
            'products' => $this->products->FindAll(),
            'prod' => $this->products->where('Product_id', $Product_id)->first(),
            'category' => $this->category->distinct()->FindAll(),
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


    public function Categorydelete($Category_id){
        $this->category->delete($Category_id);
        return redirect()->to('/prod');
    }

    public function Categoryedit($Category_id)
    {
        $data = [
            'category' => $this->category->distinct()->FindAll(),
            'products' => $this->products->FindAll(),
            'cate' => $this->category->where('Category_id', $Category_id)->first(),
        ];
        return view('product', $data);
    }


    public function Categorysave()
    {
        $Category_id = $_POST['Category_id'];
        $data = [
            'ProductCategory' => $this->request->getVar('ProductCategory'),
        ];
        if($Category_id != null){
            $this->category->set($data)->where('Category_id', $Category_id)->update();
        }else{
            $this->category->save($data);
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
        $data['category'] = $this->category->distinct()->findAll();
        return view('product', $data);
    }
    
    public function index()
    {
        $data = [
            'products' => $this->products->FindAll(),
            'category' => $this->category->distinct()->FindAll(),
    ];
        return view('products', $data);
    }
}
