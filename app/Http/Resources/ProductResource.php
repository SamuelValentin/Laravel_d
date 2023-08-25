<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' => $this->name,
            'valor' => $this->price,
            'categoria' => [
                'id' => $this->categories_id,
                'nome' => $this->category->name,
            ],
            'usuario' => [
                'id' => $this->user_id,
                'nome' => $this->user->name,
            ]
        ];
    }
}
