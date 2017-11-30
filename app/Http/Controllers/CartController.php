<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller{

  public function index(){
    if(request()->ajax()){
      $items = [];
      \Cart::getContent()->each(function($item) use (&$items)
      {
        $items[] = $item;
      });
      return response(array(
        'success' => true,
        'data' => $items,
        'message' => 'cart get items success'
      ),200,[]);
    }
    else{
      return view('cart.show');
    }
  }

  public function add(){
    $id = request('id');
    $name = request('name');
    $price = request('price');
    $qty = request('qty');
    \Cart::add($id, $name, $price, $qty, array());
  }

  public function delete($id){
    \Cart::remove($id);
    return response(array(
      'success' => true,
      'data' => $id,
      'message' => "cart item {$id} removed."
    ),200,[]);
  }

  public function details(){
    return response(array(
      'success' => true,
      'data' => array(
        'total_quantity' => \Cart::getTotalQuantity(),
        'sub_total' => \Cart::getSubTotal(),
        'total' => \Cart::getTotal(),
      ),
      'message' => "Get cart details success."
    ),200,[]);
  }

  public function checkout(Request $request){
    $data = [
      'items' => [
        [
          'id' => 18,
          'description' => 'Laravel PS Simple Checkout',
          'quantity' => 1,
          'shippingCost' => 3.5,
          'width' => 50,
          'weight' => 45,
          'height' => 45,
          'length' => 60,
          'amount' => 1.15,
        ]
      ],
      'shipping' => [
        'address' => [
          'postalCode' => '06410030',
          'street' => 'Rua da Selva',
          'number' => '12',
          'district' => 'Jardim dos Camargos',
          'city' => 'Barueri',
          'state' => 'SP',
          'country' => 'BRA',
        ],
        'type' => 2,
        'cost' => 30.4,
      ],
      'sender' => [
        'email' => $senderEmail,
        'name' => 'Isaque de Souza Barbosa',
        'documents' => [
          [
            'number' => '80808080822',
            'type' => 'CPF'
          ]
        ],
        'phone' => '11985445522',
        'bornDate' => '1988-03-25',
      ]
    ];
    try {
      Config::set('use-sandbox', true);
      $facade = new CheckoutFacade();
      $credentials = new Credentials($credentialKey, $credentialEmail);
      $checkout = $facade->createFromArray($data);
      $information = $checkout->send($credentials);
      printf('<pre>%s</pre>', print_r($information, 1));
      printf('<a href="%s">Clique para pagar</a>', $information->getLink());
    } catch (\Exception $e) {
      printf('<pre>%s</pre>', print_r((string)$e, 1));
    }

  }

}
