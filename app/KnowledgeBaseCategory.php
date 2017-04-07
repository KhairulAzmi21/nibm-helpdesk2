<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseCategory extends Model
{
    protected $fillable = ['name'];

     public function knowledge_base()
    {
        return $this->hasMany(KnowledgeBase::class);
    }
}
