<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\by_own_type;
//use App\Models\by_own_type;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
    ];


    public function own(array $params, int $type, String $paginate): mixed
    {
        //return by_own_type($this->where($params), $type, $paginate);
        return data_get($this->whereIn($params),$type, $paginate);
    }

    public function getByIds(array $ids): ?Collection
    {
        return $this->whereIn('id', $ids)->get();
    }
}
