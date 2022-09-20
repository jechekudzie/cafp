<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $event = request()->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'description' => 'nullable',
        ]);
        $image = '';

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('events', $file_name);
        }
        $event['image'] = $image;

        Event::create($event);

        return back()->with('message', 'Event successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($event)
    {
        //
        $event = Event::find($event);
        return view('admin.events.show', compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($event)
    {
        //
        $event = Event::find($event);
        return view('admin.events.edit', compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($event)
    {
        //
        $event = Event::find($event);
        $updated = request()->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'speaker' => 'nullable',
            'description' => 'nullable',
        ]);

        $image = $event->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('events', $file_name);

            /*$old_path = $event->image;
            if ($old_path != null) {
                unlink($old_path);
            }*/
        }

        $updated['image'] = $image;

        $event->update($updated);

        return back()->with('message', 'Event updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($event)
    {
        //
        $event = Event::find($event);
        $event->delete();
        return redirect('/admin/events')->with('message', 'Event deleted successfully');
    }


    public function event_images(Event $event)
    {
        request()->validate([
            'image' => 'required',
        ]);

        $files = request()->file('image');
        $number = 0;
        if (request()->hasfile('image')) {

            //get the file field data and name field from form submission
            foreach ($files as $file) {
                //get file original name
                $name = $file->getClientOriginalName();

                //create a unique file name using the time variable plus the name
                $file_name = $number . time() . $name;

                //upload the file to a directory in Public folder
                $path = $file->move('event_images', $file_name);

                $event_image['file'] = $path;

                $event->addImages($event_image);

                $number = $number + 1;
            }

        }

        return back()->with('message', 'Images added successfully');
    }

    public function event_files(Event $event)
    {
        request()->validate([
            'file' => 'required',
            'name' => 'nullable',
        ]);

        $files = request()->file('file');
        $number = 0;
        if (request()->hasfile('file')) {

            //get the file field data and name field from form submission
            foreach ($files as $file) {
                //get file original name
                $name = $file->getClientOriginalName();
                //create a unique file name using the time variable plus the name
                $file_name = $number . time() . $name;

                //upload the file to a directory in Public folder
                $path = $file->move('event_files', $file_name);


                $event_file['file'] = $path;
                $event_file['name'] = $name;

                $event->addDocuments($event_file);

                $number = $number + 1;
            }

        }

        return back()->with('message', 'files added successfully');
    }


}
