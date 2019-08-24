<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'product_name'=>$this->name,
          'product_details'=>$this->detail,
          'product_price'=>$this->price,
          'product_stock'=>$this->stock,
          'product_discount'=>$this->discount,
          'href'=>[
            'review' => route('review.index',$this->id),
          ],
        ];
    }
}
