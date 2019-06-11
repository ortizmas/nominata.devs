<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = ['initials', 'slug', 'name', 'union_id'];

    public function getResults(array $data, int $total): object
    {

        if(!isset($data['filter']) && !isset($data['name']) && !isset($data['description']) && !isset($data['category_id']) && !isset($data['id']))
            return $this->with('category')->paginate($total);
                
        return $this->with('category')->where(function($query) use ($data){

            if(isset($data['filter'])){
                $filter = $data['filter'];
                $query->where('name', $filter);
                $query->orWhere('description', 'LIKE', '%{$filter}%');
            }

            if(isset($data['id'])){
                $query->where('id', $data['id']);
            }

            if(isset($data['name'])){
                $query->where('name', $data['name']);
            }

            if(isset($data['category_id'])){
                $query->where('category_id', $data['category_id']);
            }

            if(isset($data['description'])){
                $description = $data['description'];
                $query->where('description', 'LIKE', '%{$description}%');
            }
            
        })->paginate($total);
        
    }

    public function union()
    {
        return $this->belongsTo(Union::class);
    }

    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }
}
