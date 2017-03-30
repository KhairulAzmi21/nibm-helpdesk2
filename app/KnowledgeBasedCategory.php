<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBasedCategory extends Model
{
	protected $fillable = ['name'];
     public function knowledge_based()
    {
        return $this->hasMany(KnowledgeBased::class);
    }
}
