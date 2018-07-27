<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    public $timestamps = false;
    protected $table = 'service';
    protected $primaryKey = 'serviceid';
    protected $fillable = [
    	'servicecategoryid',
        'servicename',
        'sizetype',
        'class',
        'estimatedtime',
        'initialprice'  	
    ];

    public function servicecategory()
    {
        return $this->belongsTo('App\ServiceCategory','ServiceCategoryID');
    }

    public function serviceperformed()
    {
        return $this->hasMany('App\ServicePerformed','ServiceID');
    }
}