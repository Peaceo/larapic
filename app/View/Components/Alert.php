<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class Alert extends Component
{
    public $dismissible;
    public $type;
    protected $types = [
        "success",
        "danger",
        "warning",
        "primary",
        "light"
    ];
    /**
     * Create a new component instance.
     */
    public function __construct($type = "info", $dismissible = false)
    {
        $this->dismissible = $dismissible;
        $this->type = $type;
    }

    public function validType()
    {
        return in_array($this->type, $this->types) ? $this->type : "info";
    }


    public function link($text, $target = "#")
    {
        return new HtmlString("<a href=\"{$target}\" class=\"alert-link\">{$text}</a>");
    }

    public function icon($url = null)
    {
        $icon = $url ?? asset("icons/icon-{$this->type}.svg");
        return new HtmlString("<img src=\" {$icon} \" class=\"me-2\" alt=\"\" >");
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
