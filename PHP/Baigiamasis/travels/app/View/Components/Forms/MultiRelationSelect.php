<?php

namespace App\View\Components\Forms;

use Closure;
use App\Models\Destination;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class MultiRelationSelect extends Component
{
    public function __construct(
        public Model $model,
        public Collection $relationItems,
        public string $tagName,
        public string $relationName = ''
    )
    {
        if(!$this->relationName){
            $this->relationName = $this->tagName;
        }
    }
    public function selected($relationItem){
        return $this->model->{$this->relationName}->contains($relationItem->id);
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.multi-relation-select');
    }
}
