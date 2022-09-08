<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $table = 'services';

    public function getServices($pagination = 5)
    {
        DB::table($this->table)
            ->select('*')
            ->paginate($pagination)
            ->get();
    }

}
