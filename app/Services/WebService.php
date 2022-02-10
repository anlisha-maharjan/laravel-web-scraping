<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class WebService {
    /**
     * Insert the formatted website content to DB.
     * @param type $content
     * @return type
     */
    public function store($content) {
        try {
            //# prepare the data for insertion.
            DB::beginTransaction();
            $result = DB::table('web_text')->insertGetId(['content'=>$content,'created_at' => Carbon::now()->toDateTimeString()]);
            DB::commit();
            return $result;
        } catch (\Exception $e) {
            DB::rollback();
            Log::error(['error'=>$e->getMessage()]);
        }
        return false;
    }
}
