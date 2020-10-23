<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checks = Check::latest()->paginate(5);

        return view('checks.index', compact('checks'))
        ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'=>'required',
            'customer_business_name'=>'required',
            'salesman'=>'required',
            'sale_condition'=>'required',
            'payment_condition'=>'required',
            'delivery_date'=>'required',
            'delivery_address'=>'required'
        ]);
        Check::create($request->all());
        return redirect()->route('checks.index')
        ->with('succes','Check Creado Satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function show(Check $check)
    {
        return view('checks.show',compact('check'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function edit(Check $check)
    {
       return view('checks.edit',compact('check'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check $check)
    {
        $request->validate([
            'customer_name'=>'required',
            'customer_business_name'=>'required',
            'salesman'=>'required',
            'sale_condition'=>'required',
            'payment_condition'=>'required',
            'delivery_date'=>'required',
            'delivery_address'=>'required'
        ]);
        $check->update($request->all());
        return redirect()->route('checks.index')
        ->with('success', 'Check modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check $check)
    {
        $check->delete();
        return redirect()->route('checks.index')
        ->with('success', 'Check eliminado correctamente');
    }
}
