<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Article;
use App\Models\Associate;
use App\Models\CapacityDevelopment;
use App\Models\CouncilMember;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Pillar;
use App\Models\Plant;
use App\Models\PublicationCategory;
use App\Models\Secretariat;
use App\Models\ThematicArea;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    //

    public function index()
    {
        $articles = Article::sortByDesc('id');
        $vacancies = Vacancy::all();
        $x = 0;
        $z = 0;
        return view('holdindex', compact('articles', 'x', 'z','vacancies'));
    }

    public function welcome()
    {
        $x = 0;
        $z = 0;
        $partners = Partner::all();
        $pillars = Pillar::all();
        $plants = Plant::all();
        $events = Event::all();
        $articles = Article::all()->sortByDesc('id');
        $vacancies = Vacancy::all();
        return view('welcome', compact('partners', 'pillars', 'plants', 'events', 'articles', 'x', 'z','vacancies'));
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

    public function partnerships()
    {
        $partners = Partner::whereNotIn('id',[10,12])->get();
        return view('about.partnerships', compact('partners'));
    }

    public function trustees()
    {
        $board_members = CouncilMember::whereNotIn('id', [1])->get();
        $chair = CouncilMember::where('id', 1)->first();
        return view('about.trustees', compact('board_members', 'chair'));
    }

    public function trustee_detail(CouncilMember $councilMember)
    {

        $councilMembers = CouncilMember::all();
        return view('about.trustee_detail', compact('councilMember', 'councilMembers'));
    }

    public function staff()
    {
        //$team_members = Secretariat::whereNotIn('id', [1])->get();
        $team_members = Secretariat::all();
        $associates = Associate::all();
        $ceo = Secretariat::where('id', 1)->first();
        return view('about.team', compact('team_members', 'ceo','associates'));
    }

    public function staff_bio(Secretariat $secretariat)
    {
        $secretariats = Secretariat::all();
        $associates = Associate::all();

        return view('about.team_detail', compact('secretariats', 'secretariat','associates'));
    }

    public function associate()
    {
        $associates = Associate::all();

        return view('about.associate', compact('associates',));
    }

    public function associate_bio(Associate $associate)
    {
        $associates = Associate::all();
        $team_members = Secretariat::all();
        return view('about.associate_detail', compact('associate', 'associates','team_members'));
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

    public function events()
    {
        //dd($event);
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function event_details(Event $event)
    {
        //dd($event);
        $featured_highlights = Event::all();
        return view('event_detail', compact('event', 'featured_highlights'));
    }

    public function article_details(Article $article)
    {
        $featured_highlights = Article::all();
        return view('article_detail', compact('article', 'featured_highlights'));
    }


    public function publications()
    {
        //dd($publicationCategory);
        return view('publications');
    }
    public function vacancies()
    {
        $vacancies = Vacancy::all();
        return view('vacancies',compact('vacancies'));
    }

    public function capacity_development(CapacityDevelopment $capacity_development)
    {
        $capacity_developments = CapacityDevelopment::all();
        return view('r&d.capacity_development', compact('capacity_developments'));
    }

    public function capacity_development_details(CapacityDevelopment $capacity_development)
    {

        return view('r&d.capacity_development_details', compact('capacity_development'));
    }

}
