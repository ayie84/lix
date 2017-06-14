<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\device_type;
use Illuminate\Http\Request;
use Session;

class device_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $device_types = device_type::where('device', 'LIKE', "%$keyword%")
				->orWhere('notes', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $device_types = device_type::paginate($perPage);
        }

        return view('device_types.index', compact('device_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('device_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        device_type::create($requestData);

        Session::flash('flash_message', 'device_type added!');

        return redirect('device_types');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $device_type = device_type::findOrFail($id);

        return view('device_types.show', compact('device_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $device_type = device_type::findOrFail($id);

        return view('device_types.edit', compact('device_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $device_type = device_type::findOrFail($id);
        $device_type->update($requestData);

        Session::flash('flash_message', 'device_type updated!');

        return redirect('device_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        device_type::destroy($id);

        Session::flash('flash_message', 'device_type deleted!');

        return redirect('device_types');
    }
}
