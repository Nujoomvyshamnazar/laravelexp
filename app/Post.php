<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

  use SoftDeletes;
    // set if not default
    //protected $table='posts';
    //protected $primaryKey ='posts';


// Need to assign as fillable to do mass entry
  /*  protected $fillable =[
'title',
'body',
'image'

];

*/
protected $dates = ['deleted_at'];

}
