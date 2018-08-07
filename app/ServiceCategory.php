<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model {

    public $timestamps = true;
    protected $table = 'service_category'; //the name of the table the model relates to.
    protected $primaryKey = 'servicecategoryid';
    protected $fillable = ['servicecategoryid','servicecategoryname','description']; //a model/copy of the columns of table service_category
    
}