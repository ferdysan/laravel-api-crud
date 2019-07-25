<?php

namespace App\Imports;

use App\Movie;
use Maatwebsite\Excel\Concerns\ToModel;

class MoviesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Movie([
            //
        ]);
    }
}
