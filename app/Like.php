<?php

namespace App;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $table = 'likeable';
    protected $fillable = ['user_id'];

    public function likeable()
    {
        return $this->morphTo();
    }

    # получить пользователя по лайку (обратное отношение)
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
