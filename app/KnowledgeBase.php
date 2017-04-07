<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{
   protected $fillable = ['knowledge_base_category_id','title','body'];

    public function knowledge_base_category()
    {
        return $this->belongsTo(KnowledgeBaseCategory::class);
    }
}
