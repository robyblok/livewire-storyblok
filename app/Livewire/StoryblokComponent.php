<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class StoryblokComponent extends Component
{
    private $editable;

    #[Reactive]
    public $component = [];

    public $editableAttributes = '';

    public function render()
    {
        $this->editable = $this->extractEditableInfo($this->component);
        $this->editableAttributes = $this->getEditableString();

        return view('livewire.'.$this->component['component']);
    }

    private function extractEditableInfo($blok)
    {
        if (! is_array($blok) || ! array_key_exists('_editable', $blok)) {
            return [];
        }

        $options = json_decode(
            preg_replace(['/^<!--#storyblok#/', '/-->$/'], '', $blok['_editable']),
            true
        );

        if ($options) {
            return [
                'data-blok-c' => json_encode($options),
                'data-blok-uid' => $options['id'].'-'.$options['uid'],
            ];
        }

        return [];
    }

    private function getEditableString()
    {
        return "data-blok-c='".$this->editable['data-blok-c']."' "
            ." data-blok-uid='".$this->editable['data-blok-uid']."'";
    }
}
