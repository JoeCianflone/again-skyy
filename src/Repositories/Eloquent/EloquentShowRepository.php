<?php
namespace Cianflone\Again\Repositories\Eloquent;

use Cianflone\Again\Entities\Show;
use Cianflone\Again\Exceptions\ShowDoesNotExistException;
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
        $show = $this->show->find($showId);
        if (is_null($show)) {
            throw new ShowDoesNotExistException('Show ID does not exist');
        }

        return $show->toArray();
    }

    public function createNewShow(array $show)
    {
        return $this->show->create($show);
    }
}
