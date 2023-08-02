<?php

namespace Rickodev\Pos\Livewire;

class ProductGrid extends \Livewire\Component
{
    public $products = [];

    public function render()
    {

        return view('rickodev::livewire.products-grid');

    }
}
