<?php
namespace Cianflone\Again\Repositories;

interface ShowRepository
{
    public function findAllShows();

    public function save(array $show);

    public function delete($showId);

    public function get($showId);

    public function createNewShow(array $show);
}
