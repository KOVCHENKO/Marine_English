<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    protected $fillable = [
        'question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'scores',
        'answer'
    ];

    public function setAnswerAttribute($value)
    {
        switch ($value) {
            case 1:
                $this->attributes['answer'] = $this->answer1;
                break;
            case 2:
                $this->attributes['answer'] = $this->answer2;
                break;
            case 3:
                $this->attributes['answer'] = $this->answer3;
                break;
            case 4:
                $this->attributes['answer'] = $this->answer4;
                break;
        }
    }
    
    public function tests()
    {
        return $this->belongsTo('App\Test');
    }
    

}
