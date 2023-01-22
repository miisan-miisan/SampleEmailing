<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailCount extends Model
{
    use HasFactory;
    protected $fillable = ['daily_mail_counts','sending_date'];

    protected $dates = [
        'sending_date'
    ];
}
