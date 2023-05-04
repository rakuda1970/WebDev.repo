<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produce;
use App\Models\Hexcolors;

class chartJsController extends Controller
{
    
    public function makeBarChartVertical(){

        $hexcolors = Hexcolors::select('hexcode')->limit(10)->get();

        $hexString = $hexcolors->pluck('hexcode')->map(function($hexcode) {
            return "'{$hexcode}'";
        })->implode(',');

        $fruits = Produce::select('name', 'popularity')
                ->where('category', '=', 'fruit')
                ->orderBy('popularity', 'DESC')
                ->limit(10)
                ->get();
        
        $shuffled = $fruits->shuffle();
        
        $fruitNames = $shuffled->pluck('name')->map(function($name) {
            return "'{$name}'";
        })->implode(',');
                
        $fruitPop = $shuffled->pluck('popularity')->implode(',');

        $vegetables = Produce::select('name', 'popularity')
                ->where('category', '=', 'vegetable')
                ->orderBy('popularity', 'DESC')
                ->limit(10)
                ->get();

        $vegNames = $vegetables->pluck('name')->implode(',');

        return view('chartjs.barchart-vertical')
        ->with('fruitNames',$fruitNames)
        ->with('fruitPop',$fruitPop)
        ->with('hexString',$hexString);

    }

    public function makeBarChartHorizontal(){



        $hexcolors = Hexcolors::select('hexcode')->limit(10)->get();

        $hexString = $hexcolors->pluck('hexcode')->map(function($hexcode) {
            return "'{$hexcode}'";
        })->implode(',');

        $fruits = Produce::select('name', 'popularity')
        ->where('category', '=', 'fruit')
        ->orderBy('popularity', 'DESC')
        ->take(10)
        ->get();

        $shuffled = $fruits->shuffle();
        
        $fruitNames = $shuffled->pluck('name')->map(function($name) {
            return "'{$name}'";
        })->implode(',');

        $fruitPop = $shuffled->pluck('popularity')->implode(',');

        $popularityValues = $fruits->pluck('popularity')->toArray();
    
        return view('chartjs.barchart-horizontal', compact('fruitNames', 'popularityValues'))
        ->with('fruitPop',$fruitPop)
        ->with('hexString',$hexString);

    

    }
}
