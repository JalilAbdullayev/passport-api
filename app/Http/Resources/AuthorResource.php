<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id' => (string)$this->id,
            'type' => 'Authors',
            'attributes' => [
                'name' => $this->name,
                'created-at' => $this->created_at,
                'updated-at' => $this->updated_at
            ]
        ];
    }
}
