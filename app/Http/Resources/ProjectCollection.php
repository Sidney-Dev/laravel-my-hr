<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->transform(function ($project) {
            return [
                'id' => $project->id,
                'name' => $project->name,
                'start_date' => $project->start_date,
                'end_date' => $project->end_date,
                'priority' => $project->priority,
                'description' => $project->description,
            ];
        })->toArray();
    }
}
