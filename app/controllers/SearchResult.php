<?php

class SearchResult extends BaseController {
    
    public function getAllData() {
        
        $product = new Product();
        $data   = $product
                ->join('product_details', 'product_id', '=','product.id' )
                ->get();
        return Response::json($data);
    }
}

