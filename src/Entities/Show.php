<?php
namespace Cianflone\Again\Entities;

class Show extends BaseEntity
{
    protected $table ='dashboard';

    protected $fillable = [
        'headliner',
        'description',
        'main_image',
        'show_date',
        'show_location',
        'show_time',
        'supporting_cast',
        'show_link',
        'save_the_date',
        'is_live'
    ];

    public function getIsLiveAttribute($value)
    {
        return $value === '1' ? true : false;
    }
}
