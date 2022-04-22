<?php

namespace App\Controllers;

use App\Models\StoreModel;
use App\Models\HomeTestimonial;
use App\Models\Showtesti;
use App\Models\HomeContact;
use App\Models\Admincategory;
use App\Models\Banner;


class Home extends BaseController
{
    public function index()
    {
        $banner = new Banner();
        $category = new Admincategory();
        $data['banner'] = $banner->findAll();
        $data['category'] = $category->findAll();
        return view("index", $data);
    }
    public function products()
    {
        $products = new StoreModel();
        $category = new Admincategory();
        $sorted  = array();
        $temp = array();
        $data['products'] = $products->findAll();
        $data['category'] = $category->findAll();
        
       
        return view("products",$data);
    }
    public function pro()
    {
        $banner = new Banner();
        $category = new Admincategory();
        $data['banner'] = $banner->findAll();
        $data['category'] = $category->findAll();
        return view("pro", $data);
    }
    public function product($PR_ID){
        $hey = new StoreModel();
        $data['productInfo'] = $hey->where('PR_ID', $PR_ID)->first();
        return view('product',$data);
    }
    public function contact()
    { 
        echo view("contact");
    }
    public function sendcontact(){
        $contact = new HomeContact();
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Email' => $this->request->getPost('Email'),
            'Message' => $this->request->getPost('Message'),
        ];
        echo $data['Name'];
        echo var_dump($data);
        $contact->insert($data);
    }
    public function about()
    { 
        echo view("about");
    }
    public function login()
    { 
        echo view("login");
    }
    public function signup()
    { 
        echo view("signup");
    }
    public function testimonial()
    { 
        echo view("testimonial");
    }
    
    public function sendtestinomial(){
        $testimonial = new HomeTestimonial();
        $files = $this->request->getFiles();
        foreach($files['files'] as $file){
            if(!$file->hasMoved()){
                $file->move('./uploads/images/testimonial/');
                $files_info[] = $file->getName();
           }
        }
        $sendd = "";
        foreach($files_info as $file){
            $sendd = $sendd . $file.",";
        }
        $data = [
            'Name' => $this->request->getPost('name'),
            'Email' => $this->request->getPost('email'),
            'Images'=>$sendd,
            'Message' => $this->request->getPost('message'),
            ];
            $testimonial->insert($data);
        return redirect()->to(base_url('Home/testimonial'))->with('status','Added sucessfully');

    }
    public function showtestimonial(){
        $showtestidata = new Showtesti();
        $data['reviews'] = $showtestidata->findAll();
        return view('showtestimonial',$data);
    }
    public function cart($PR_ID){
        $hey = new StoreModel();
        $data['productInfo'] = $hey->where('PR_ID', $PR_ID)->first();
        return view('cart',$data);
    }
    public function order($PR_ID){
        $hey = new StoreModel();
        $data['productInfo'] = $hey->where('PR_ID', $PR_ID)->first();
        return view('order',$data);
    }
    public function banner(){
        return view('banner');
    }
    
}