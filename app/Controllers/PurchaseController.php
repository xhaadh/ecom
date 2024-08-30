<?php namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class PurchaseController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->findAll();
        return view('user/purchase', ['products' => $products]);
    }

    public function addToCart($productId)
    {
        $session = session();
        $model = new ProductModel();
        $product = $model->find($productId);

        if (!$product) {
            return redirect()->to('/purchase')->with('error', 'Product not found!');
        }

        $cart = $session->get('cart') ?? [];
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1
            ];
        }

        $session->set('cart', $cart);
        return redirect()->to('/checkout')->with('success', 'Product added to cart!');
    }
}
