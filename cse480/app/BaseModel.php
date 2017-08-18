<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
     public function selectQuery($sql_stmt) { //string parameter that contains the SQL statement to be executed. 
        return DB::select($sql_stmt); 
    }

    public function sqlStatement($sql_stmt) { ////executes the SQL statement
        DB::statement($sql_stmt);
    }
}
