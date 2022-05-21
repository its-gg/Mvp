<?php

namespace App\Controllers;

use App\Models\StoreModel;
use App\Models\HomeTestimonial;
use App\Models\Showtesti;
use App\Models\Admincategory;
use App\Models\Banner;


// use PharIo\Manifest\Library;
class Dashboard extends BaseController
{
    public function index()
    {
        return view("Admin/index");
    }
    public function products()
    {
        $products = new StoreModel();
        $data['products'] = $products->findAll();
        return view("Admin/products", $data);
    }
    public function new()
    {
        $category = new Admincategory();

        $data['category'] = $category->findAll();
        return view("Admin/new", $data);
    }
    public function writeTestimonial()
    {
        echo view("Admin/writeTestimonial");
    }
    public function sendTestimonial()
    {
        $productStore = new HomeTestimonial();
        // $files_info = [];
        // $files = $this->request->getFile('theFile');
        // if(!$files->hasMoved()){
        //     $files->move('./uploads/images/testimonial/');
        // }
        //     $files_info[] = $files->getName();
        // $sendd = $files->getName();

        $files = $this->request->getFiles();
        foreach ($files['files'] as $file) {
            if (!$file->hasMoved()) {
                $file->move('./uploads/images/testimonial/');
                $files_info[] = $file->getName();
            }
        }
        $sendd = "";
        foreach ($files_info as $file) {
            $sendd = $sendd . $file . ",";
        }
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Email' => $this->request->getPost('Email'),
            'Images' => $sendd,
            'Message' => $this->request->getPost('Message'),
            'PR_ID' => $this->request->getPost('PR_ID'),

        ];
        $productStore->insert($data);
        return redirect()->to(base_url('Admin/testi'))->with('status', 'Added sucessfully');
    }
    public function store()
    {
        $productStore = new StoreModel();
        $files_info = [];
        $files = $this->request->getFiles();
        foreach ($files['files'] as $file) {
            if (!$file->hasMoved()) {
                $file->move('./uploads/images');
                $files_info[] = $file->getName();
            }
        }
        $sendd = "";
        foreach ($files_info as $file) {
            $sendd = $sendd . $file . ",";
        }
        $data = [
            'Name' => $this->request->getPost('Name'),
            'PR_ID' => $this->request->getPost('PR_ID'),
            'Images' => $sendd,
            'Price' => $this->request->getPost('Price'),
            'Discount_Price' => $this->request->getPost('Discount_Price'),
            'Description' => $this->request->getPost('Description'),
            'Category' => $this->request->getPost('Category'),
            'Questions' => $this->request->getPost('Questions'),
        ];

        $productStore->insert($data);
        return redirect()->to(base_url('Admin/'))->with('status', 'Added sucessfully');
    }
    public function edit($PR_ID)
    {
        $hey = new StoreModel();
        $data['productInfo'] = $hey->where('PR_ID', $PR_ID)->first();
        return view('Admin/edit', $data);
    }
    public function update($PR_ID)
    {
        $productUpdate = new StoreModel();
        $data = [
            'ID' => $this->request->getPost('ID'),
            'Name' => $this->request->getPost('Name'),
            'Price' => $this->request->getPost('Price'),
            'Discount_Price' => $this->request->getPost('Discount_Price'),
            'Description' => $this->request->getPost('Description')
        ];
        $productUpdate->save($data);
        return redirect()->to(base_url('Admin/'))->with('status', 'Updated sucessfully');
    }
    public function delete($PR_ID)
    {
        $deleteProduct = new StoreModel();
        $deleteProduct->where('PR_ID', $PR_ID)->delete();
        return redirect()->to(base_url('Admin/'))->with('status', 'Deleted sucessfully');
    }

    public function testi()
    {
        $testi = new HomeTestimonial();

        $data['products'] = $testi->findAll();
        echo view('Admin/testi', $data);
    }
    public function addtesti($ID)
    {
        $Addreview = new Showtesti();
        $getreview = new HomeTestimonial();
        $data = $getreview->where('ID', $ID)->first();
        $Addreview->insert($data);
        return redirect()->to(base_url('Admin/displayedTesti'))->with('status', 'Deleted sucessfully');
    }
    public function displayedTesti()
    {
        $products = new Showtesti();
        $data['products'] = $products->findAll();
        return view("Admin/displayedTesti", $data);
    }
    public function category()
    {
        $category = new Admincategory();

        $data['category'] = $category->findAll();
        return view("Admin/category", $data);
    }
    public function createcategory()
    {
        $category = new Admincategory();
        $data = [
            'Name' => $this->request->getPost('Name'),
        ];
        $category->insert($data);

        return redirect()->to(base_url('Admin/category'))->with('status', 'Added sucessfully');
    }

    public function deleteTesti($ID)
    {
        $deleteProduct = new Showtesti();
        $json = $deleteProduct->where('ID', $ID)->first();
        // var_dump($json);
        $file = $json['Images'];
        echo base_url('/uploads/images/testimonial/' . $file);

        helper('filesystem');
        $deleteProduct->where('ID', $ID)->delete();
        delete_files(base_url('/uploads/images/testimonial/' . $file));
        return redirect()->to(base_url('Admin/displayedTesti'))->with('status', 'Deleted sucessfully');
    }
    public function changehome()
    {
        $banner = new Banner();
        $data['banner'] = $banner->findAll();
        return view('Admin/changehome', $data);
    }
    public function storebannerimgs()
    {
        $productStore = new Banner();
        $files_info = [];
        $files = $this->request->getFile('theFile');
        if (!$files->hasMoved()) {
            $files->move('./uploads/images/banner/');
        }
        $files_info[] = $files->getName();
        $sendd = $files->getName();

        $data = [
            'path' => $sendd,

        ];
        $productStore->insert($data);
        return redirect()->to(base_url('Admin/changehome'))->with('status', 'Added sucessfully');
    }
}
