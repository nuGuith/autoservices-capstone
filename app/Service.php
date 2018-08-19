<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    public $timestamps = true;
    protected $table = 'service';
    protected $primaryKey = 'serviceid';
    protected $fillable = [
    	'servicecategoryid',
        'servicename',
        'sizetype',
        'class',
        'estimatedtime',
        'initialprice',
        'quantity',
        'warrantydurationmode',
        'warrantyduration'  	
    ];

    public function servicecategory()
    {
        return $this->belongsTo('App\ServiceCategory','ServiceCategoryID');
    }

    public function productservice()
    {
        return $this->hasMany('App\ProductService', '');
    }
    public function serviceperformed()
    {
        return $this->hasMany('App\ServicePerformed','ServiceID');
    }
}