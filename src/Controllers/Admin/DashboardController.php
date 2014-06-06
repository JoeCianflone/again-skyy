<?php
namespace Cianflone\Again\Controllers\Admin;

use View;
use Input;
use Flash;
use Redirect;
use Cianflone\Again\Exceptions\UnableToCreateNewShowException;
use Cianflone\Again\Exceptions\UnableToDeleteShowException;
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
        if (Input::hasFile("main_image")) {
            $destinationPath = "../public/assets/imgs/uploads";
            $filename = Input::file('main_image')->getClientOriginalName();
            $extension = Input::file('main_image')->getClientOriginalExtension();
            $file = Input::file('main_image')->move($destinationPath, $filename);
            $inputs['main_image'] = preg_replace("/(http(s?)\:)/", "", asset("/assets/imgs/uploads/{$filename}"));
        }
        try {
            $this->show->createNewShow($inputs);
        } catch (UnableToCreateNewShowException $e) {
            Flash::error($e->getMessage());

            return Redirect::route('dashboard');
        }
            Flash::message("Show successfully created");

            return Redirect::route('dashboard');
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
    public function update($showId)
    {

        $inputs = Input::except(["_token", "_method"]);

        if (array_key_exists('is_live', $inputs) && $inputs['is_live'] == 'true') {
            $inputs['is_live'] = true;
        } else {
             $inputs['is_live'] = false;
        }

        if (Input::hasFile("main_image")) {
            $destinationPath      = "../public/assets/imgs/uploads";
            $filename             = Input::file('main_image')->getClientOriginalName();
            $extension            = Input::file('main_image')->getClientOriginalExtension();
            $file                 = Input::file('main_image')->move($destinationPath, $filename);
            $inputs['main_image'] = preg_replace("/(http(s?)\:)/", "", asset("/assets/imgs/uploads/{$filename}"));
        }
        $this->show->update($showId, $inputs);

        Flash::success('Updated');

        return Redirect::route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function destroy($showId)
    {
        try {
            $this->show->delete($showId);
        } catch (UnableToDeleteShowException $e) {
            Flash::error($e->getMessage());
            Redirect::route('dashboard');
        }
        Flash::message('Successfully deleted that show');

        return Redirect::route('dashboard');
    }

}
