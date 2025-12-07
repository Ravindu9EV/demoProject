<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Ramsey\Collection\Collection;
use Laravel\Sanctum\HasApiTokens;
use App\Models\by_own_type;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
     * Method own
     *
     * @param Array $params [explicite description]
     * @param Int $type [explicite description]
     * @param String $paginate [explicite description]
     *
     * @return mixed
     */
    public function own(array $params, int $type, String $paginate): mixed
    {
        //return by_own_type($this->whereIn($params),$type, $paginate);
        return data_get($this->whereIn($params),$type, $paginate);
    }

    public function getByIds(array $ids): ?Collection
    {
        return $this->whereIn('id', $ids)->get();
    }

    // private function by_own_type(array $array,int $type,String $paginate):mixed
    // {
    //     return "";
    // }
}
