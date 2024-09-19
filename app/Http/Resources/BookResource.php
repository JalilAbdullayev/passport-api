<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id' => (string)$this->id,
            'type' => 'Books',
            'attributes' => [
                'name' => $this->name,
                'author' => $this->author,
                'description' => $this->description,
                'published_at' => $this->published_at,
                'created-at' => $this->created_at,
                'updated-at' => $this->updated_at
            ]
        ];
    }
}
