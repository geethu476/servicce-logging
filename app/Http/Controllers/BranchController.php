<?php

namespace App\Http\Controllers;

use Session;
use App\Branch;
use Illuminate\Http\Request;
use DougSisk\CountryState\CountryState;
// use App\Http\Requests\CreateBranchRequest;
// use App\Http\Requests\UpdateBranchRequest;


class BranchController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \View::share('page_name', 'Branch');
        $this->countryState = new CountryState;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.settings.branch.index',['branches' => Branch::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.settings.branch.create', [
            'countries' => $this->countryState->getCountries(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBranchRequest $request)
    {


        $response = Branch::create([
            'name' => $request->name,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'location' => $request->location,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
        ]);
      
 
        if ($response) {
            if ($request->file('avatar')) {
                $response->update([
                    'avatar' => $request->file('avatar')->store('avatar'),
                ]);
            }
        }

       // return response()->create($response, 'branch');

        $return_url = 'branch';
        if($request->return_url) $return_url = $request->return_url;
        return response()->create($response, $return_url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::findOrFail($id);

        return view('pages.settings.branch.show', [
            'countries' => $this->countryState->getCountries(),
            'branch' => $branch
        ]);
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
    public function update(UpdateBranchRequest $request, $id)
    {
        $branch = Branch::find($id);

        $response = $branch->update([
            'name' => $request->name,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'location' => $request->location,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
        ]);

        if ($response && $request->file('avatar')) {
            if ($branch->avatar && \Storage::disk('local')->exists($branch->avatar)) {
                \Storage::delete($branch->avatar);
            }

            $branch->update([
                'avatar' => $request->file('avatar')->store('avatar'),
            ]);

        }

        return response()->update($response, 'branch/' . $branch->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id)->load('employees', 'doctors', 'departments', 'customers', 'leads','expenses','doctorsettings');

        $response = $branch->delete();

        return response()->delete($response, 'branch');
    }
   

}
