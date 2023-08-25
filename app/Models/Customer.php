<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Refactoring codes - Extracting part of query(using Laravel convension)
    // public function scopeActive($query){
    //     return $query->where('active', 1);
    // }
    // public function scopeInactive($query){
    //     return $query->where('active', 0);
    // }

    // RefactoringLaravel code - Mass assignment
    // 1.1 Mass assignment - fillable 
    //protected $fillable = ['name','age','address','contactno','mailid','active']; // Related with mass assignment(Insert record using validated variable $data) 
        // White listing the field names

    // 1.2 Mass assignment - fillable including companies (child) table 
    //protected $fillable = ['name','age','address','contactno','mailid','active','companyid']; // Related with mass assignment(Insert record using validated variable $data) 
        // White listing the field names

    // 2. Mass assignment - protected guarded - opposite to fillable
     protected $guarded = []; // All the fields in the table are enabled to be saved, no field is excluded

     public function company(){
        	return $this->belongsTo(Company::class); }
       
    
    // Accessor Method – Format 1 
//     public function getActiveAttribute($attribute){
//         $status=[
//             0=>'Inactive',
//             1=>'Active'
//         ];
//        return $status[$attribute]; 
//    }
      
   
   // Accessor Method – Format 2 
       // public function getActiveAttribute($attribute){
        
       // Shortest notation of the above code [Accessor Format - Refactoring method]
    //    return [
    //        0=>'Inactive',
    //        1=>'Active'
    //    ][$attribute];
    //   }
   
// Accessor Format 
public function getActiveAttribute($attribute){
    //  $status=[
    //      0=>'Inactive',
    //      1=>'Active'
    //  ];
    //  return $status[$attribute]; 

    // Shortest notation of the above code [Accessor Format - Refacoring method]
    // return [
    //     0=>'Inactive',
    //     1=>'Active'
    // ][$attribute];

    // Refactoring..... Using activeOptions()
    return $this->activeOptions()[$attribute]; 

  }
  public function activeOptions(){
    return [ 
       0 => 'Inactive',
       1 => 'Active',
     
    ];
   }

    }
