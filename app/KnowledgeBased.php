<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBased extends Model
{
     protected $fillable = ['knowledge_based_category_id','title','body'];
       public function knowledge_based_categories()
    {
        return $this->belongsTo(KnowledgeBasedCategory::class);
    }
}
