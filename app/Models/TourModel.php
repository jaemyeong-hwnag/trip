<?php namespace App\Models;

use App\Models\BaseModel;

class TourModel extends BaseModel
{
    protected $table         = 'tour';
    protected $allowedFields = [
        'name', 'sdate', 'edate', 'price', 'pic', 'kind_no', 'air_no', 'txt'
    ];
    protected $returnType    = 'App\Entities\TourEntity';
    protected $useTimestamps = true;

}