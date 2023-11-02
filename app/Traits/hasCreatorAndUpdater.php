<?php

namespace App\Traits;

trait HasCreatorAndUpdater
{
    protected static function bootHasCreatorAndUpdater() 
    {
        static::create(function($model) {
            $model->created_by = auth()->id();
            $model->updated_by = auth()->id();
        });

        static::update(function($model) {
            $model->updated_by = auth()->id();
        });
    }
}