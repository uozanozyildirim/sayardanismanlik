<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class FrequentlyAskedQuestion extends Model
{

    protected $table = 'frequently_asked_questions';


    public function getItems()
    {
        return
            DB::table($this->table)
                ->orderByDesc('id')
                ->get();
    }


}
