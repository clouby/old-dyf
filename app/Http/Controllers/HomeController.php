<?php

namespace App\Http\Controllers;

use Spatie\Searchable\Search;
use App\Models\{Category, Service, Shopping, Transfer, Dispotition};
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

    public function platform()
    {
        return view('platform');
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
        $searchResults = (new Search())
            ->registerModel(Service::class, ['service_name'])
            ->registerModel(Category::class, ['category'])
            ->perform($request->input('q'));

        return view('demo.searchQuery', compact('searchResults'));
    }
}
