<?php

class Product extends Eloquent {
    protected $table = 'product';
    
    public function selectId() {
        $products = DB::table('product')->get();
        return array($products);
    }
}

