<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patterns\Decorator\OilChange;
use App\Patterns\Decorator\TireRotation;
use App\Patterns\Decorator\BasicInspection;
class PatternsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function decorate()
    {
        $service = new TireRotation(new BasicInspection);
        return view('patterns.decorator', compact('service'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function observe()
    {
        return view('patterns.observer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adapt()
    {
        return view('patterns.adapter');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function template()
    {
        return view('patterns.template');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function strategize()
    {
        return view('patterns.strategy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chain()
    {
        return view('patterns.responsibility');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function specify()
    {
        return view('patterns.specification');
    }

    
}
