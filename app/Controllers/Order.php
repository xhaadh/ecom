<?php namespace App\Controllers;

use App\Models\OrderModel;

class Order extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        $data = [
            'title' => 'Orders',
            'orders' => $model->findAll()
        ];
        return view('order/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Add Order'];
        return view('order/create', $data);
    }

    public function store()
    {
        $model = new OrderModel();
        $model->save([
            'product_id' => $this->request->getPost('product_id'),
            'quantity' => $this->request->getPost('quantity'),
            'total_price' => $this->request->getPost('total_price'),
            'status' => $this->request->getPost('status'),
        ]);
        return redirect()->to('/order');
    }
}
