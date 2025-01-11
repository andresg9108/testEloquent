<?php

use Illuminate\Database\Eloquent\Model;

class Example extends Model {
    protected $table = 'example';
    protected $fillable = ['name', 'last', 'phone'];

    public function example2s() {
        return $this->hasMany(Example2::class);
    }
}

