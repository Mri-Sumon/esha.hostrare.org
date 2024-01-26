<?php
namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    use HasFactory;
    
    protected $table = 'cheques';
    protected $fillable = [
        'ac_number',
        'date',
        'pay_to',
        'amount',
        'amount_in_word',
        'signature',
    ];
}
