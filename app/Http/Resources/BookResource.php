<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'ratings_average' => $this->ratings->count('score'),
            'ratings' => $this->ratings
        ];
    }
}
