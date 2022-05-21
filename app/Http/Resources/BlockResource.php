<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class BlockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $order = 0;
        $template_id = null;
        $blocks = BlockResource::collection($this->whenLoaded('blocks'));
        if ($this->pivot) {
            $template_id = $this->pivot->template ? $this->pivot->template->id : null;
            $order = $this->pivot ? $this->pivot->order : 0;
        } else {
            $template_id =  $this->blockable ? $this->blockable->template_id : null;
            $order = $this->blockable ? $this->blockable->order : 0;
        }





        return [
            'id' => $this->id,
            'content' => $this->content,
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'name' => $this->name,
            'link' => $this->link,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'attributes' => AttributeResource::collection($this->whenLoaded('attributes')),
            'blocks' => $blocks,
            'images' => FileResource::collection($this->whenLoaded('images')),
            'files' => FileResource::collection($this->whenLoaded('files')),
            'order' => $order,
            'template_id' => $template_id
        ];
    }
}
