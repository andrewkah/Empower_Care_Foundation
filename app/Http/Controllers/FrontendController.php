<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\AlbumService;
use App\Services\ArticleService;
use Illuminate\Http\Request;
use App\Services\CauseService;
use App\Services\ContactService;
use App\Services\EventService;
use App\Services\FAQService;
use App\Services\PartnerService;
use App\Services\ProgramService;
use App\Services\TeamService;
use App\Services\VideoService;

class FrontendController extends Controller
{

    //
    public function __construct(private VideoService $videoService, private ContactService $contactService, private FAQService $faqService, private TeamService $teamService, private CauseService $causeService, private ArticleService $articleService, private AlbumService $albumService, private EventService $eventService, private PartnerService $partnerService, private ProgramService $programService)
    {
        
    }
    public function index(){
        $articles = $this->articleService->getAllArticleOrderByCreatedAt();
        $album = $this->albumService->getAllAlbumOrderByCreatedAt();
        $events = $this->eventService->getAllEventsOrderByCreatedAt();
        $partners = $this->partnerService->getAllPartnersOrderByCreatedAt();
        return view('website.dashboard.index', compact('partners', 'events', 'album', 'articles' ));
    }
    public function programs(){
        $programs = $this->programService->getAllProgramsOrderByCreatedAt();
        return view('website.pages.programs',compact('programs'));
    }
    public function program_details($id){
        $programs = $this->programService->getProgramBySlug($id);
        return view('website.pages.program_details', compact('programs'));
    }
    public function causes(){
        $causes = $this->causeService->getAllCausesOrderByCreatedAt();
        return view('website.pages.cause', compact('causes'));
    }
    public function events(){
        $events = $this->eventService->getAllEventsOrderByCreatedAt();
        return view('website.pages.events', compact('events'));
    }

    public function events_details($id){
        $details = $this->eventService->getEventBySlug($id);
        return view('website.pages.events-details', compact('details'));
    }

    public function articles(){
        $articles = $this->articleService->getAllArticleOrderByCreatedAt();
        return view('website.pages.articles', compact('articles'));
    }


    public function article_details($id){
        $article = $this->articleService->getArticleBySlug($id);
        return view('website.pages.article-details', compact('article'));
    }
    
    public function team(){
        $team = $this->teamService->getAllTeamsOrderByCreatedAt();
        return view('website.pages.team', compact('team'));
    }
    public function album(){
        $album = $this->albumService->getAllAlbumOrderByCreatedAt();
        return view('website.pages.album', compact('album'));
    }
    public function faqs(){
        $faqs = $this->faqService->getAllFaqsOrderByCreatedAt();
        return view('website.pages.faqs', compact('faqs'));
    }
    public function videos(){
        $videos = $this->videoService->getAllVideosOrderByCreatedAt();
        return view('website.pages.videos', compact('videos'));
    }
    public function contact_us(ContactRequest $request){
        $contacts = $this->contactService->storeContact($request);
        if ($contacts) return redirect()->route('home')->with('success', "Message sent successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }
    
}
