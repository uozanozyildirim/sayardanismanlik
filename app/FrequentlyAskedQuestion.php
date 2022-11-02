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


    public function getItemsByServiceSlug($slug)
    {

        $serviceId =
            DB::table('services')
                ->where('slug', '=', $slug)
                ->select('id')
                ->first();

        $serviceId = $serviceId->id;


        return
            DB::table('frequently_asked_questions')
            ->where('frequently_asked_questions.service_id', '=', $serviceId)
            ->orderByDesc('id')
            ->get();

    }


}
