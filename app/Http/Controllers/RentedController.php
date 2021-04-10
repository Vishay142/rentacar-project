<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Hiervoor zorg ik met inner join dat ik 2 tables met elkaar voeg.
        $data = DB::table('rent')
            ->join('cars', 'cars.id', '=', 'rent.car_id')
            ->join('users', 'users.id', '=', 'rent.user_id')
            ->select('cars.merk','cars.license_plate', 'users.first_name','users.last_name','users.phone_number', 'rent.start_date', 'rent.end_date', 'rent.id')
            ->get();

        $rent = Rent::all();


        //Hier zorg ik ervoor dat de data te zien is in gereserveerd met een array.
        return view('rented.index', compact('data', 'rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rented)
    {

        $rented->delete();
        return redirect('/rented');

}
}
