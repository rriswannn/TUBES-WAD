<?php

// gambar


// app/Models/YourModel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YourModel extends Model
{
    

    public function getImageAttribute()
    {
        return asset('images/' . $this->image); 
    }
}
