<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class DataOfViolation extends Model
{
    use HasFactory;
    use SearchableTrait;

    protected $guarded = [];
    protected $with = ['santri','violation','sanction'];

    protected $searchable = [
        "columns" => [
            "santris.nama_santri" => 10,
            "santris.nis" => 10,
        ],
        "joins" => [
            "santris" => ["santris.id", "data_of_violations.santri_id"],
        ],
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function sanction()
    {
        return $this->belongsTo(Sanction::class);
    }

    public function violation()
    {
        return $this->belongsTo(Violation::class);
    }
}
