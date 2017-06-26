<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Carbon\Carbon;


use App\Ride;

class RidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {		
       $rides= Ride::orderBy('id','DESC')->paginate(5);
	   return view('rides.index',compact('rides'))
		 ->with('i',($request->input('page',1)-1)*5);
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('rides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		 'address'=>'required',
		 'car'=>'required',
		 'date'=>'required',
		 ]);
		 
		 
	    $ride = new Ride($request->all());
		$ride->user_id = $request->user()->id;
        $ride->date = Carbon::createFromFormat('d/m/Y H:i', $request->get('date'));
		$ride->save();
		
		return redirect()->route('rides.index')
						->with('sucess','Ride created sucessfully');
						

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $rides=Ride::find($id);
	   return view('rides.show',compact('rides'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rides=Ride::find($id);
		return view('rides.edit',compact('rides'));
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
        $this->validate($request, [
		 'address'=>'required',
		 'car'=>'required',
		 'date'=>'required',
		 ]);
		 
		 Ride::find($id)->update($request->all());
		 return redirect()->route('rides.index')
							->with('sucess','Ride updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ride:find($id)->delete();
		return redirect()->route('rides.index')
						->with('sucess','Ride deleted sucessfylly');
    }
}
