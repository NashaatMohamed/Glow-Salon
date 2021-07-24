<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Service;
use Livewire\Component;

class ClickEvent extends Component
{
    public function render()
    {
        return view('livewire.click-event')->extends("home");
    }
    public function call(){
        $services =Service::select('name')->get();
    }
    public function cal(){
        $products = Product::select('name')->get();
        return $products;
    }

}
