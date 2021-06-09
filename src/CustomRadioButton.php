<?php

namespace Abdoghost\CustomRadioButton;

use Laravel\Nova\Fields\Field;

class CustomRadioButton extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'custom-radio-button';

    public function items($items){
        return $this->withMeta([
            'items' => $items,
        ]);
    }

    public function labelColor($color){
        return $this->withMeta([
            'color' => $color,
        ]);
    }
}
