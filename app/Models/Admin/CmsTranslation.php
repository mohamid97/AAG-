<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['des', 'name' , 'small_des' ,'meta_des' , 'meta_title' , 'alt_image' , 'title_image' , 'slug'];

}
