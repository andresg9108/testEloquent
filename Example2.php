<?php

use Illuminate\Database\Eloquent\Model;

class Example2 extends Model {
    protected $table = 'example2';
    protected $fillable = ['example_id', 'description'];
    
    public function example() {
        return $this->belongsTo(Example::class);
    }
}