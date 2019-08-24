<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'product_name'=>$this->name,
          'product_price'=>$this->price,
          'product_discount'=>$this->discount,
          'href'=>[
            'review' => route('products.show',$this->id),
          ],
        ];
    }
}
