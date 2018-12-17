<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function addActivity($type, $notification){
        $this->type = $type;
        $this->notification = $notification;
        $this->time = Time();

        $this->save();
    }
}
