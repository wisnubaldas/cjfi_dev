<?php
/**
 * 
 */
namespace App\Traits;
use App\Models\UserBoking;
use App\Models\StatusBoking;

trait MobilParkirTrait
{
    public function getParkiran()
    {
        return StatusBoking::all();
    }
}