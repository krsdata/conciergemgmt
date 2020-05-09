<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Boat extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'sn_no',
        'cat_id',
        'slider_id',
        'status',
        'is_deleted',
        'boat_script'
    ];

    protected $rules = [
        'cat_id' => 'exists:categories,id|nullable',
        'slider_id' => 'exists:sliders,id|nullable',
        'title' => 'required'
    ];

    protected $errors;

    public function validate($data)
    {
        $valid = Validator::make($data, $this->rules);
        if ($valid->fails())
        {
            $this->errors = $valid->errors();
            return false;
        }
        return true;
    }

    public function errors()
    {
        return $this->errors;
    }

    public function detail() {
        return $this->hasMany('App\BoatDetail');
    }
}
