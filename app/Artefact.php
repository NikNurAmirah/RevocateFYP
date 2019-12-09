<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artefact extends Model
{
    public $table = "artefacts";

    public $fillable = ['project_name','artefact_name','artefact_type','extension'];

}
