<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // set if not default
    //protected $table='posts';
    //protected $primaryKey ='posts';


// Need to assign as fillable to do mass entry
    protected $fillable =[
'title',
'body',
'image'

];

}
