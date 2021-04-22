<?php

namespace App\Http\Controllers;
use App\Models\organization;
use App\Models\Events;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $status = array(
            0 => "Inactive",
            1 => "Active",
            2 => "Inactive",
        );
        $events = Events::all();



        //dd($jobs);
        return view('admin.event.index', compact('events', 'status'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$organizations = organization::all();

        return view('admin.event.new', compact('organizations'));
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
        $event = Events::create([
            'titel' => $request['neame'],

            'user_id' => Auth::id(),
            'slug' => $slug = Str::slug($request['neame'], '-'),

            'stard_datum' => $request['event_date'],

            'aanvang_tijd' => $request['aanvang_tijd'],
            'stard_tijd' => $request['event_tijd'],
            'eind_tijd' => $request['eind_tijd'],
            'organization_id' => $request['organization_id'],

           'artiest' => "",
           'locatie_id' => 1,
           'genres_id' => 1,
           'status' => 2,

        ]);
        return redirect()->route('admin.event.edit', [ $event->id ])->with('message', 'evnt is seved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($subdomain, $slug, Events $events)
    {
        // dd($slug);
        $event = Events::where('slug', $slug)->first();

        return view('event.show', compact('event'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show_index(Events $events)
    {
           $status = array(
            0 => "Inactive",
            1 => "Active",
            2 => "Inactive",
        );
        $events = Events::orderBy('stard_datum', 'ASC')->orderBy('stard_tijd', 'ASC')->paginate(10);



        //dd($jobs);
        return view('home', compact('events', 'status'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Events $events)
    {
        //
         function maakgetal($nummer){
            $pieces = explode(",", $nummer);
            if(isset($pieces[1])){
                return number_format($pieces[0].".".$pieces[1], 2, '.', '');
            }else{
                return number_format($pieces[0], 2, '.', '');
            }


        }
        function prijs($nummer){
           return number_format($nummer, 2, ',', '');
        }
        $organizations = organization::all();

        $event = Events::where('id', $id)->first();
        // dd($event);
        return view('admin.event.edit', compact('organizations', 'event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Events $events)
    {
        $file = NULL;
        if (isset($request->photo) ) {
            $paths = [];
           // $files = $request->file('files');
            //dd($request->all());
            $file = $request->file('photo');
            //dd($file);
        // Generate a file name with extension
        $fileName = 'cover_'.Str::slug($request['neame']).'-'.time().'.'.$file->getClientOriginalExtension();

        // Save the file
       // Storage::put('img/'.$fileName, $files);
        $path = Storage::putFileAs('public/cover', new File($file), $fileName);


        $file = $fileName;

        }

        function maakgetal($nummer){
            $pieces = explode(",", $nummer);
            if(isset($pieces[1])){
                return number_format($pieces[0].".".$pieces[1], 2, '.', '');
            }else{
                return number_format($pieces[0], 2, '.', '');
            }


        }

       //dd($request->all())


  // dd($fileName);


            $event = Events::where('id', $id)->update( [
            'titel' => $request['neame'],
            'user_id' => Auth::id(),
            //'slug' => $slug = Str::slug($request['neame'], '-'),
            'stard_datum' => $request['event_date'],
            'aanvang_tijd' => $request['aanvang_tijd'],
            'stard_tijd' => $request['event_tijd'],
            'eind_tijd' => $request['eind_tijd'],
            'sub_titel' => $request['sub_titel'],
            'description' => $request['description'],
            'prijs_add' => maakgetal($request['prijs_add']),
            'prijs_vvd' => maakgetal($request['prijs_vvd']),
            'link_vvd' => $request['link_vvd'],
            'tump' => $file,
            'link_fb_event' => $request['link_fb_event'],
            'status' => 1,
        ]);
        return redirect()->route('admin.event.edit', [ $id ])->with('message', 'evnt is update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Events $events)
    {
         $events = Events::findOrFail($id)->delete();

        return back()->withInput();
    }
}
