<?php namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        // $data = [
        //     'title' => 'Products',
        //     'products' => $model->findAll()
        // ];
        $products = $model->findAll();
        return view('product/index', ['products' => $products]);
    }

    public function create()
    {
        $data = ['title' => 'Add Product'];
        return view('product/create', $data);
    }

    public function deleteProduct($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($id);

        if ($product) {
            $productModel->delete($id);

            return $this->response->setJSON([
                'status' => true,
                'message' => 'Product deleted successfully.',
                'redirect_url' => site_url('product'), // Adjust the redirect URL as needed
            ]);
        } else {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Product not found.',
            ]);
        }
    }

    public function store()
    {
        $model = new ProductModel();
        // Handle file upload
        $file = $this->request->getFile('image');
        // $imagePath = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imagePath = $file->getRandomName(); // Generate a random file name
            $file->move('uploads/', $imagePath); // Save the file to the uploads directory


        $model->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'image' => $imagePath,
        ]);
        return redirect()->to('/product');
    }
}
}
