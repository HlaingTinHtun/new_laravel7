<?php

namespace App\Casts;

use App\Name;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class NameCast implements CastsAttributes
{

    /**
     * @inheritDoc
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return new Name($value);
//        return new Name(
//            $attributes['name']
//        );
    }

    /**
     * @inheritDoc
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return $value->name;
//        return [
//            'name' => $value->name
//        ];
    }
}
