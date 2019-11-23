<?php

namespace App\Http\Controllers;

use App\User;
use App\Branch;
use App\Employee;
use Illuminate\Http\Request;
use DougSisk\CountryState\CountryState;

class EmployeeController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \View::share('page_name', 'Employee');

        $this->countryState = new CountryState;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'DESC')->get();

        return view('pages.employee.index', [
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $branches = Branch::orderBy('id', 'ASC')->get();

        return view('pages.employee.create', [
            'branches' => $branches,
            'countries' => $this->countryState->getCountries(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = Employee::create([
            'branch_id' => $request->branch_id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
        ]);

        if ($employee) {
            User::create([
                'userable_id' => $employee->id,
                'userable_type' => 'employee',
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            if ($request->file('avatar')) {

                $employee->update([
                    'avatar' =>  $request->file('avatar')->store('public/avatar'),
                ]);
            }
        }

        return response()->create($employee, 'employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branches = Branch::orderBy('name', 'ASC')->get();
      
        $employee = Employee::findOrFail($id);

        return view('pages.employee.show', [
            'branches' => $branches,
            'employee' => $employee,
            'countries' => $this->countryState->getCountries(),
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
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $response = $employee->update([
            'branch_id' => $request->branch_id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'email' => $request->email,
        ]);

        if ($response && $request->file('avatar')) {
            if ($employee->avatar && \Storage::disk('local')->exists($employee->avatar)) {
                \Storage::delete($employee->avatar);
            }

            $employee->update([
                'avatar' =>  $request->file('avatar')->store('public/avatar'),
            ]);
        }

        $employee->user()->update([
            'email' => $request->email,
        ]);

        if($request->password) {
            $employee->user()->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return response()->update($response, 'employee/' . $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
