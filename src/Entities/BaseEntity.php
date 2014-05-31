<?php
namespace Cianflone\Again\Entities;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class BaseEntity extends Eloquent
{
    /**
     * [$softDelete description]
     * @var boolean
     */
    protected $softDelete = false;
}
