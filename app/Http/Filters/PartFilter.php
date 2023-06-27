<?php

namespace App\Http\Filters;

use App\Models\CarPart;
use Illuminate\Database\Eloquent\Builder;

class PartFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const ARTICLE = 'article';
    public const CATEGORY_ID = 'category_id';
    public const CAR = 'car';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::ARTICLE => [$this, 'article'],
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::CAR => [$this, 'car'],
        ];
    }

    public function name(Builder $builder, $value) {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function article(Builder $builder, $value) {
        $builder->where('article', 'like', "%{$value}%");
    }

    public function categoryId(Builder $builder, $value) {
        $builder->where('category_id', $value);
    }

    public function car(Builder $builder, $value) {
        $builder->whereIn('id', CarPart::where('car_id', $value)->get()->pluck('part_id'));
    }
}
