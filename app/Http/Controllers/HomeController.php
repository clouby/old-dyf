<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;
use App\Models\{Category, Shopping, Transfer, Dispotition};
use App\Models\Service;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /*dd
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shop = new Shopping;
        $token = Request()->session()->token();
        $count = $shop->getMyCart($token)->count();

        $categories = Category::all();
        return view('home', compact(['categories', 'count']));
    }

    public function landing()
    {
        return view('landing');
    }

    public function platform(Request $request)
    {
        $latestServices = DB::table('services')
            ->latest()
            ->take(8)
            ->get();

        $categories = Category::all();

        return view('platform', compact(['categories', 'latestServices']));
    }

    public function platformSearch() {
        return view('platform-search');
    }

    public function servicesPerCartegory(Category $category)
    {
        $shop = new Shopping;
        $token = Request()->session()->token();
        $count = $shop->getMyCart($token)->count();
        $services = Service::relaModel($category->id)->active()->paginate(6);
        return view('demo.servicesPerCategory', compact(['category', 'services', 'count']));
    }

    public function serviceReview(Service $service)
    {
        $shop = new Shopping;
        $token = Request()->session()->token();
        $count = $shop->getMyCart($token)->count();
        $transfers = Transfer::distinct()->get(['traslados']);
        $horarios = Dispotition::distinct()->get(['horario']);

        $x = $service->category->id;
        switch ($x) {
            case '1':
                return view('demo.ServiceForCategory.gastroReview', compact(['service', 'count']));
                break;

            case '2':
                return view('demo.ServiceForCategory.nauticaReview', compact(['service', 'count']));
                break;

            case '3':
                return view('demo.ServiceForCategory.islaReview', compact(['service', 'count']));
                break;

            case '4':
                return view('demo.ServiceForCategory.tourReview', compact(['service', 'count']));
                break;

            case '5':
                return view('demo.ServiceForCategory.transferReview', compact(['service', 'count', 'horarios', 'transfers']));
                break;
        }
    }

    public function serviceReviewPlatform(Service $service)
    {
        $shop = new Shopping;
        $token = Request()->session()->token();
        $count = $shop->getMyCart($token)->count();
        $transfers = Transfer::distinct()->get(['traslados']);
        $horarios = Dispotition::distinct()->get(['horario']);

        $x = $service->category->id;
        switch ($x) {
            case '1':
                return view('demo.ServiceForCategory.gastroReview', compact(['service', 'count']));
                break;

            case '2':
                return view('demo.ServiceForCategory.nauticaReview', compact(['service', 'count']));
                break;

            case '3':
                return view('demo.ServiceForCategory.islaReview', compact(['service', 'count']));
                break;

            case '4':
                return view('demo.ServiceForCategory.tourReview', compact(['service', 'count']));
                break;

            case '5':
                return view('demo.ServiceForCategory.platformTransfer', compact(['service', 'count', 'horarios', 'transfers']));
                break;
        }
    }

    public function search(Request $request)
    {
        $validateQuery = $request->validate([
            'q' => 'required'
        ]);

        $query = $request->input('q');

        $operatorSearchLike = [ 'like', "%{$query}%" ];

        $results = Service::query()
            ->where('service_name', ...$operatorSearchLike)
            ->orWhere('key_words', ...$operatorSearchLike)
            ->paginate(8);

        return view('platform-search', compact('searchResults', 'query', 'results'));
    }

    public function searchCategory(Request $request)
    {
        $validateQuery = $request->validate([
            'q' => 'required'
        ]);

        $searchResults = (new Search())
            ->registerModel(Service::class, ['service_name','key_words','category_id'])
            #->registerModel(Category::class, ['category','key_words'])
            ->perform($request->input('q'));

        return view('demo.searchQuery', compact('searchResults'));
    }
}
