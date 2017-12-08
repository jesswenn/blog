<?php



namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class Model extends Eloquent
{
	
	 ///////////////////////////////////////////
        	//OBS!!!!!!
		// ELOQUENT extends our own model
        	//SENASTE HÄR TA BORT DENNA OM EJ FUNGERAR
        	// Gör en egen MODEL parent class is guarded
        	// extend eloquent and then you dont have try eloquent in eveo repeat yourself
    ////////////////////////////////////////////
    protected $guarded =[];

}