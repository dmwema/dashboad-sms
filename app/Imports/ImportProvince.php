<?php

namespace App\Imports;

use App\Models\Province;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProvince implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        ini_get('max_execution_time', 180);
        return new Province([
            'name' => $row[0]
        ]);
    }
}
