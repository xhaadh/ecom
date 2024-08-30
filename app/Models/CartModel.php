<?php namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $allowedFields = ['product_id', 'quantity', 'user_id', 'session_id'];
    
    public function getCartItems($userId, $sessionId)
    {
        return $this->where('user_id', $userId)
                    ->orWhere('session_id', $sessionId)
                    ->join('products', 'products.id = cart.product_id')
                    ->select('products.name, products.price, cart.quantity')
                    ->findAll();
    }
}
