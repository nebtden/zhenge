<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //语句预留函数
    public static $_time_index=[
        21=>'10:30',
        22=>'11:00',
        23=>'11:30',
        24=>'12:00',
        25=>'12:30',
        26=>'13:00',
        27=>'13:30',
        28=>'14:00',
        29=>'14:30',
        30=>'15:00',
        31=>'15:30',
        32=>'16:00',
        33=>'16:30',
        34=>'17:00',
        35=>'17:30',
        36=>'18:00',
        37=>'18:30',
        38=>'19:00',
        39=>'19:30',
    ];
}
