<?php
namespace Cianflone\Again\Controllers;

use View;
use Cianflone\Again\Repositories\ShowRepository;

class HomeController extends BaseController
{
    protected $show;

    public function __construct(ShowRepository $show)
    {
        $this->show = $show;
    }

    public function index()
    {
        $shows = $this->show->findAllShows();

        return View::make('front.pages.main')->with(["shows" => $shows, "is_mobile" => "desktop"]);
    }

    public function mobile()
    {
        $shows = $this->show->findAllShows();

        return View::make('front.pages.main')->with(["shows" => $shows, "is_mobile" => "mobile"]);
    }
}
