<?php
namespace Cianflone\Again\Controllers\Admin;

use View;
use Cianflone\Again\CommandBus\CommandBus;
use Cianflone\Again\Shows\GetAllShowsCommand;

class DashboardController extends BaseController
{
    protected $command;

    public function __construct(CommandBus $command)
    {
        $this->command = $command;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $command = new GetAllShowsCommand();
        $shows = $this->command->execute($command);

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
        //
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

}
