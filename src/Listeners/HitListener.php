<?php
namespace Unisharp\Hittable;

use Illuminate\Database\Eloquent\Model;

class HitListener
{
    public function handle(Model $model, $column='hits')
    {
        $model->increment($column);
    }
}
