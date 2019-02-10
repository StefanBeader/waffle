<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public static function rules()
    {
        return [
            'email' => 'required|email|max:255',
            'name' => 'string|max:255',
            'content' => 'required|string|max:512',
        ];
    }
}
