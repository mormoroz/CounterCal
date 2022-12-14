<?php

namespace App\Http\Controllers;

use App\Models\User_weight;
use Illuminate\Http\Request;
use Redirect,Response;
Use DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $record = User_weight::select(\DB::raw(("DAYNAME(date) as day_name,DAY(date) as day,weight")))
            ->get();

        $data = [];

        foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->weight;
        }

        $data['chart_data'] = json_encode($data);
        return view('statistic', $data);
    }

}
