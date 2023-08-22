<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

class MySqlService
{
    public function testConnection()
    {
        try {
            $pdo = DB::connection()->getPDO();
            $dbName = DB::connection()->getDatabaseName();
            dump($pdo, $dbName);
            // $brands_online_cities = BrandOnlineCities::all();
            // dump($brands_online_cities);
            // return response()->json(["collection" => $brands_online_cities]);
        } catch (\Exception $e) {
            return response()->json(["MySqlService->testConnection" => $e]);
        }
    }
    function getTableDataFromMySql($tableName)
    {
        try {
            $brands = DB::table($tableName)->get();
            return $brands;
        } catch (\Exception $e) {
            error_log($e);
            return false;
        }
    }
}
