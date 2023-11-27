<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $table ='borrows';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 
        'students_id', 
        'staff_id', 
        'books_id'
    ];

    public function students()
    {
        return $this->belongsTo('App\Models\Student', 'students_id', 'id');
    }

    public function staff()
    {
        return $this->belongsTo('App\Models\Staff', 'staff_id', 'id');
    }

    public function books()
    {
        return $this->belongsTo('App\Models\Book', 'books_id', 'id');
    }
}
