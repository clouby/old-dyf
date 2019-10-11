<?php

namespace App\Http\Controllers;

use Spatie\Searchable\Search;
use App\Models\{Category, Service, Shopping, Transfer, Dispotition};
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Quotation;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function platform()
    {
        $latestServices = DB::table('services')
            ->latest()
            ->take(8)
            ->get();

        $shop = new Shopping;
        $token = Request()->session()->token();
        $count = $shop->getMyCart($token)->count();

        $categories = Category::all();

        return view('platform', compact(['categories', 'latestServices', 'count']));
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
        $anotherServices = Service::where('id', '!=', $service->id)->take(4)->get();

        $x = $service->category->id;

        $response = ['service', 'count', 'anotherServices'];
        switch ($x) {
            case '1':
                return view('demo.ServiceForCategory.gastroReview', compact( $response));
                break;

            case '2':
                return view('demo.ServiceForCategory.nauticaReview', compact( $response));
                break;

            case '3':
                return view('demo.ServiceForCategory.islaReview', compact( $response));
                break;

            case '4':
                return view('demo.ServiceForCategory.tourReview', compact( $response));
                break;

            case '5':
                return view('demo.ServiceForCategory.platformTransfer', compact(['service', 'count', 'horarios', 'transfers', 'anotherServices']));
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
            ->where('key_words', ...$operatorSearchLike)
            ->orWhere('service_name', ...$operatorSearchLike)
            ->paginate(20);
            $resultpage = new Paginator($results,2,1,[]);

        return view('platform-search', compact('query', 'results'));
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
