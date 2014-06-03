<?php
namespace Cianflone\Again\Controllers\Admin;

use View;
use Input;
use Flash;
use Redirect;
use Cianflone\Again\Exceptions\UnableToCreateNewShowException;
use Cianflone\Again\Exceptions\ShowDoesNotExistException;
use Cianflone\Again\CommandBus\CommandBus;
use Cianflone\Again\Repositories\ShowRepository;

class DashboardController extends BaseController
{
    protected $command;
    protected $show;

    public function __construct(CommandBus $command, ShowRepository $show)
    {
        $this->show = $show;
        $this->command = $command;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shows = $this->show->findAllShows();

        return View::make('admin.pages.dashboard.index')->with([
            'shows' => $shows
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.pages.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $inputs = Input::except('_token');
        try {
            $this->show->createNewShow($inputs);
        } catch (UnableToCreateNewShowException $e) {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit($showId)
    {
        try {
            $show = $this->show->get($showId);
        } catch (ShowDoesNotExistException $e) {
            Flash::error($e->getMessage());

            return Redirect::route('dashboard');
        }

        return View::make('admin.pages.dashboard.edit')->with([
            'show' => $show
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function destroy($showId)
    {
        //
    }

}
