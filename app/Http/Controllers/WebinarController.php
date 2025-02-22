<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebinarRequest;
use Illuminate\Http\Request;
use App\Models\Webinars;

class WebinarController extends Controller
{
    public function index()
    {
        $data['data'] = Webinars::all();
        return view('webinars/index', $data);
    }

    public function store(StoreWebinarRequest $request){
        $webinar = Webinars::create($request->all());

        return redirect()->route('webinar.index')->with('success', 'Webinar created successfully');
    }

    public function update(Request $request, $id)
    {
        $webinar = Webinars::findOrFail($id);
        $webinar->update($request->all());

        return redirect()->route('webinar.index')->with('success', 'Webinar updated successfully');
    }

    public function destroy($id)
    {
        $webinar = Webinars::findOrFail($id);
        $webinar->delete();

        return redirect()->route('webinar.index')->with('success', 'Webinar deleted successfully');
    }
}
