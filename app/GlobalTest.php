<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalTest extends Model {

    protected $table = "global_tests";

    protected $fillable = [
        'name',
        'level'
    ];

    public function tests()
    {
        return $this->hasMany('App\Test');
    }

}
