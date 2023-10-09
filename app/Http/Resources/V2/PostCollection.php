<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * This isn't necessary, but anyway I added it
     */
    public $collects = PostResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Why Not Inc.',
                'authors' => [
                    'Alonso Rmz',
                    'Why Not Inc.'
                ]
            ],
            'type' => 'articles'
        ];
    }
}
