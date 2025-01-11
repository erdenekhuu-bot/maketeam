<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'name' => $this->name,
            'web' => $this->web,
            'city' => $this->city,
            'logo' => $this->logo,
            'cover' => $this->cover,
            'gallery' => $this->gallery,
            'about' => $this->about,
            'description' => $this->description,
            'social_media' => [
                'linkedin' => $this->linkedin,
                'twitter' => $this->twitter,
                'facebook' => $this->facebook,
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
