<?php
namespace Cianflone\Again\Repositories\Eloquent;

use Cianflone\Again\Entities\Show;
use Cianflone\Again\Repositories\ShowRepository;

class EloquentShowRepository implements ShowRepository
{
    protected $show;

    public function __construct(Show $show)
    {
        $this->show = $show;
    }

    public function findAllShows()
    {
        return $this->show->all()->toArray();
    }

    public function save(array $show)
    {

    }

    public function delete($showId)
    {

    }

    public function get($showId)
    {

    }
}
