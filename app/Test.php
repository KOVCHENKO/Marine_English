<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

	public function global_tests()
    {
        return $this->belongsTo('App\GlobalTest');    
    }
    
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function statistics()
    {
        return $this->hasMany('App\Statistic');
    }


}
