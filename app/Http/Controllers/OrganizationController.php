<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Events;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = organization::all();

        $status = array(
            0 => "Inactive",
            1 => "Active"
        );


        //dd($jobs);
        return view('admin.organization.index', compact('organizations', 'status'));

        //
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
        // dd($request->all());
        $organization = organization::create([
            'naam' => $request['neame'],

            'user_id' => Auth::id(),
            'slug' => $slug = Str::slug($request['neame'], '-'),

            'email' => $request['email'],
            'adres' => $request['address'],
            'postcode' => $request['zip'],
            'plaats' => $request['city'],
            'land' => $request['land'],
            'telefoon' => $request['phone'],
            'kvk' => $request['kvk'],

        ]);

        return redirect()->route('admin.organization.edit', [ $organization->id ])->with('message', 'organization is seved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Organization $organization)
    {
        $organization = organization::where('slug', $slug)->first();

        $events = Events::where('organization_id', $organization->id)->orderBy('stard_datum', 'ASC')->orderBy('stard_tijd', 'ASC')->paginate(10);

        return view('organization.show', compact('organization', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Organization $organization)
    {
        $organization = organization::findOrFail($id);
        return view('admin.organization.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Organization $organization)
    {

       // dd($request->all());

        $cover = NULL;
        if (isset($request->cover) ) {
            $paths = [];
            $cover = $request->file('cover');
          //  dd($cover);
            $fileName = 'cover_'.Str::slug($request['neame']).'-'.time().'.'.$cover->getClientOriginalExtension();
            $path = Storage::putFileAs('public/cover', new File($cover), $fileName);
            $cover = $fileName;
        }
        $logo = NULL;
        if (isset($request->logo) ) {
            $paths = [];
            $logo = $request->file('logo');
            $fileName = 'logo_'.Str::slug($request['neame']).'.'.$logo->getClientOriginalExtension();
            $path = Storage::putFileAs('public/logo', new File($logo), $fileName);
            $logo = $fileName;
        }
        $organization = organization::where('id', $id)->update( [
            'naam' => $request['neame'],

            'user_id' => Auth::id(),
            'slug' => $slug = Str::slug($request['neame'], '-'),
            'email' => $request['email'],
            'adres' => $request['address'],
            'postcode' => $request['zip'],
            'plaats' => $request['city'],
            'telefoon' => $request['phone'],
            'kvk' => $request['kvk'],
            'tump' => $cover,
            //'status' => $request['status'],
        ]);

        return redirect()->route('admin.organization')->with('message', 'category is updae');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Organization $organization)
    {
        $deletedRows = organization::findOrFail($id)->delete();

        return back()->withInput();
    }
}
