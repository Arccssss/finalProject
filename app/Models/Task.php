<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function setUsername($value) {
        parent::__set('foo', $value);
        return $this;
    }
  
    public function getUsername() {
        return parent::__get('foo');
    }
}
