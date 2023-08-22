<?php

namespace App\Http\Controllers;

use App\Http\Services\MySqlService;
use App\Http\Services\OpenSearchService;
use Exception;
use Illuminate\Http\Request;
use \OpenSearch\Common\Exceptions\OpenSearchException;
use Laravel\Lumen\Routing\Controller;

class MySqlController extends Controller
{
    protected $mysqlservice;
    public function __construct(MySqlService $mysqlservice)
    {
        $this->mysqlservice = $mysqlservice;
    }
    public function testMySql()
    {
        try {
            return $this->mysqlservice->testConnection();
        } catch (Exception $e) {
            return response()->json(["testMySql" => $e]);
        }
    }
    public function migrateMySqltable(Request $request, OpenSearchService $opensearchservice)
    {
        try {
            $tableName = $request->tableName;

            $brands = $this->mysqlservice->getTableDataFromMySql($tableName);
            error_log($brands);
            if (!$brands) {
                return response("MySQl Table Doesnot Exist");
            }
            $temp = (array)[];
            foreach ($brands as $document) {
                array_push($temp, (array)$document);
            }
            return $opensearchservice->indexDocuments($tableName, $temp);
        } catch (OpenSearchException $e) {
            return response()->json(["getAllBrands" => $e]);
        }
    }
}
