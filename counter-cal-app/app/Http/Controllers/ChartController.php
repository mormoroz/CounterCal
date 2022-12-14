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

        $records = auth()->user()->weights()->get();

//        dd($records);

        $data = [];

        foreach($records as $record) {
            $data['label'][] = $record->date->format('d.m.Y');
            $data['data'][] = (int) $record->weight;
        }

        $data['chart_data'] = json_encode($data);
        return view('statistic', $data);
    }

}
