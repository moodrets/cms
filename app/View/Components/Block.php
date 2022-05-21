<?php

namespace App\View\Components;

use App\Models\CMS\Template;
use Illuminate\View\Component;

class Block extends Component
{

    public $block;
    public $loop;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($block, $loop = null)
    {
        $this->block = $block;
        $this->loop = $loop;
        $this->template = null;

        if ($block->pivot) {
            $this->template = Template::find($block->pivot->template_id)->name;
        } else {
            $this->template = Template::find($block->blockable->template_id)->name;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $template = $this->template;

        return view("blocks.$template", [
            'block' => $this->block,
            'loop' => $this->loop,
            'template' => $template
        ]);
    }
}
