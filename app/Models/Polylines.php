<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polylines extends Model
{
    use HasFactory;

    protected $table = 'table_polylines';
    protected $guarded = ['id'];

    // protected $fillable = [
    //     'name',
    //     'description',
    //     'geom',
    //     'image'
    // ];

//Mengambil data gari dari database dan mengubah data geometri ke format GeoJSON
    public function polylines()
    {
        return $this->select(DB::raw('id, name, description, image, ST_AsGeoJSON(geom) as geom, created_at, updated_at'))->get();
    }

    public function polyline($id)
    {
        return $this->select(DB::raw('id, name, description, image, ST_AsGeoJSON(geom) as geom, created_at, updated_at'))->where('id', $id)->get();
    }
}
