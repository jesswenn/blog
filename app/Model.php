<?php



namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class Model extends Eloquent
{
	
///////////////////////////////////////////
	// ELOQUENT extends our own model
	// SENASTE HÄR TA BORT DENNA OM EJ FUNGERAR
	// extend eloquent and then you dont have 
	// use this model to not repeat yourself
 ////////////////////////////////////////////
    protected $guarded =[];

}