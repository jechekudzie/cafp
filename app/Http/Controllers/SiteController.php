<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\CouncilMember;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Pillar;
use App\Models\Plant;
use App\Models\Secretariat;
use App\Models\ThematicArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    //

    public function index()
    {
        $partners = Partner::all();
        $pillars = Pillar::all();
        $plants = Plant::all();
        $featured_highlights = Event::all();
        return view('welcome', compact('partners', 'pillars', 'plants','featured_highlights'));
    }

    public function about()
    {
        return view('about.establishment');
    }

    public function vision_mission()
    {
        return view('about.vision_mission');
    }

    public function cafp_approach()
    {
        return view('about.cafp_approach');
    }

    public function framework()
    {
        return view('about.framework');
    }


    public function thematic_areas()
    {
        $thematic_areas = ThematicArea::all();
        return view('policy.thematic_areas', compact('thematic_areas'));
    }

    public function thematic_area_detail(ThematicArea $thematicArea)
    {
        $thematic_areas = ThematicArea::all();

        return view('policy.thematic_area_detail', compact('thematicArea', 'thematic_areas'));
    }

    public function capacity()
    {
        return view('policy.capacity');
    }

    public function projects()
    {
        return view('policy.projects');
    }

    public function data()
    {
        return view('policy.data');
    }

    public function covid()
    {
        return view('policy.covid');
    }


    public function governance()
    {
        return view('about.governance');
    }

    public function trustees()
    {
        $board_members = CouncilMember::all();
        return view('about.trustees', compact('board_members'));
    }

    public function trustee_detail(CouncilMember $councilMember)
    {

        $councilMembers = CouncilMember::all();
        return view('about.trustee_detail', compact('councilMember', 'councilMembers'));
    }

    public function team_detail(Secretariat $secretariat)
    {
        $secretariats = Secretariat::all();
        return view('about.team_detail', compact('secretariats', 'secretariat'));
    }

    public function team()
    {
        $team_members = Secretariat::all();
        return view('about.team', compact('team_members'));
    }

    public function funding()
    {
        return view('about.funding');
    }

    public function contact()
    {
        return view('contact_us');
    }

    public function send_email()
    {
        $contact = request()->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'message' => 'required',
        ]);
        Mail::to('info@cafp.org.zw')
            ->send(new Contact($contact));
        return back()->with('message', 'Thank you for contacting us, our team will get back to your shortly. You can also use our live chat for real-time response.');

    }

    public function event_details(Event $event)
    {
        $featured_highlights = Event::all();
        return view('event_detail', compact('event','featured_highlights'));
    }
}
