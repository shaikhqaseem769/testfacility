<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public $incrementing = false;
    
    public $dates = ['deleted_at'];

    public static function boot() {
        parent::boot();

        self::creating(function ($model) {
            $uuid1 = Uuid::uuid1();
            $model->id = $uuid1->toString();
            $model->created_by = (Auth::check()) ? Auth::user()->id : null;
        });

        self::updating(function ($model) {
            $model->updated_by = (Auth::check()) ? Auth::user()->id : null;
        });
    }
}
