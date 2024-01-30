<?php

namespace App\Http\Controllers;
// LocationController.php

use App\Models\Country;
use App\Models\States;
use App\Models\LocalGovernment;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function createForm()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'country' => 'required|string',
            //'code' => 'required|string',
            'state' => 'required|string',
            'lga' => 'required|string',
        ]);

        // Create or find the country, state, and local government
        $country = Country::firstOrCreate(['name' => $request->input('country')]);
        //$code = Code::firstOrCreate(['name' => $request->input('code')]);
        $state = States::firstOrCreate(['name' => $request->input('state'), 'country_id' => $country->id]);
        $lga = LocalGovernment::firstOrCreate(['name' => $request->input('lga'), 'state_id' => $state->id]);

        // Optionally, you can redirect the user or show a success message
        return redirect('/location/create')->with('success', 'Location data stored successfully.');
    }
}
