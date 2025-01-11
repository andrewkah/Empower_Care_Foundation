<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\DonationRequest;
use App\Http\Requests\VolunteerRequest;
use App\Services\AlbumService;
use App\Services\ArticleService;
use App\Services\BannerService;
use Illuminate\Http\Request;
use App\Services\CauseService;
use App\Services\ContactService;
use App\Services\DonationService;
use App\Services\EventService;
use App\Services\FAQService;
use App\Services\PartnerService;
use App\Services\PolicyService;
use App\Services\ProgramService;
use App\Services\TeamService;
use App\Services\VideoService;

class FrontendController extends Controller
{

    //
    public function __construct(private PolicyService $policyService, private BannerService $bannerService, private DonationService $donationService, private VideoService $videoService, private ContactService $contactService, private FAQService $faqService, private TeamService $teamService, private CauseService $causeService, private ArticleService $articleService, private AlbumService $albumService, private EventService $eventService, private PartnerService $partnerService, private ProgramService $programService)
    {
        
    }
    public function index(){
        $banners = $this->bannerService->getAllBannersOrderByCreatedAt();
        $articles = $this->articleService->getAllArticleOrderByCreatedAt();
        $album = $this->albumService->getAllAlbumOrderByCreatedAt();
        $events = $this->eventService->getAllEventsOrderByCreatedAt();
        $partners = $this->partnerService->getAllPartnersOrderByCreatedAt();
        return view('website.dashboard.index', compact('partners', 'events', 'album', 'articles', 'banners' ));
    }
    public function programs(){
        $programs = $this->programService->getAllProgramsOrderByCreatedAt();
        return view('website.pages.programs',compact('programs'));
    }
    public function program_details($id){
        $program = $this->programService->getProgramBySlug($id);
        return view('website.pages.program_details', compact('program'));
    }
    public function causes(){
        $causes = $this->causeService->getAllCausesOrderByCreatedAt();
        return view('website.pages.cause', compact('causes'));
    }
    public function events(){
        $events = $this->eventService->getAllEventsOrderByCreatedAt();
        return view('website.pages.events', compact('events'));
    }

    public function event_details($id){
        $details = $this->eventService->getEventBySlug($id);
        return view('website.pages.events-details', compact('details'));
    }
    public function article_category($id){
        $articles = $this->articleService->getArticleByCategory($id);
        return view('website.pages.articles', compact('articles'));
    }

    public function articles(){
        $articles = $this->articleService->getAllArticleOrderByCreatedAt();
        return view('website.pages.articles', compact('articles'));
    }
    public function article_tag($id){
        $articles = $this->articleService->getArticleByTag($id);
        return view('website.pages.articles', compact('articles'));
    } 
    public function article_search(Request $request){
        $articles = $this->articleService->ArticleSearch($request);
        return view('website.pages.articles', compact('articles'));
    }
    public function article_details($id){
        $article = $this->articleService->getArticleBySlug($id);
        $all_tags = $this->articleService->getAllTags(); 
        $article_categories = $this->articleService->getAllArticleCategoryAndNumberOfArticles();
        return view('website.pages.article-details', compact('article','all_tags','article_categories'));
    }
    
    public function team(){
        $team = $this->teamService->getAllTeamsOrderByCreatedAt();
        return view('website.pages.team', compact('team'));
    }
    public function album(){
        $album = $this->albumService->getAllAlbumOrderByCreatedAt();
        return view('website.pages.album', compact('album'));
    }
    public function album_details($id){
        $album = $this->albumService->getAlbumBySlug($id);
        return view('website.pages.album-details', compact('album'));
    }
    public function faqs(){
        $faqs = $this->faqService->getAllFaqsOrderByCreatedAt();
        return view('website.pages.faqs', compact('faqs'));
    }
    public function videos(){
        $videos = $this->videoService->getAllVideosOrderByCreatedAt();
        return view('website.pages.videos', compact('videos'));
    }
    public function policies(){
        $policies = $this->policyService->getAllPoliciesOrderByCreatedAt();
        return view('website.pages.policies', compact('policies'));
    }
    public function contact_us(ContactRequest $request){
        $contacts = $this->contactService->storeContact($request);
        if ($contacts) return redirect()->route('contact-us')->with('success', "Message sent successfully.");
        return redirect()->back()->with('error', "Something went wrong. Check your Internet connection and try again");
    }
    public function donate(){
        return view('website.pages.donate');
    }
    public function donate_store(DonationRequest $request){
        $donations = $this->donationService->storeDonation($request);
        if ($donations) return redirect()->route('donate')->with('success', "Donation Request sent successfully.");
        return redirect()->back()->with('error', "Something went wrong. Check your Internet connection and try again");
    }
    public function volunteer_request (){
        return view('website.pages.sponsors');
    }
    public function volunteer_store(VolunteerRequest $request){
        $volunteers = $this->donationService->storeVolunteer($request);
        if ($volunteers) return redirect()->route('volunteer')->with('success', "Volunteer Request sent successfully.");
        return redirect()->back()->with('error', "Something went wrong. Check your Internet connection and try again");
    }
    
}
