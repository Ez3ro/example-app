<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class TextWidget extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'key',
        'image',
        'content',
        'title',
        'active',
    ];

    public static function getTitle(string $key): string
    {
        $widget= Cache::get('text-widget-'.$key, function() use($key){
            return TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        });

        if ($widget){
            return $widget->title;
        }
        return '';

        # code...
    }


    public static function getContent(string $key): string
    {

        $widget= Cache::get('text-widget-'.$key, function() use($key){
            return TextWidget::query()
            ->where('key', '=', $key)
            ->where('active', '=', 1)
            ->first();

            
        });

       
        if ($widget){
            return $widget->content;
        }
        return '';

        # code...
    }

    public static function getImage(string $key): string
    {

        $widget= Cache::get('text-widget-'.$key, function() use($key){
            return TextWidget::query()
            ->where('key', '=', $key)
            ->where('active', '=', 1)
            ->first();

            
        });

       
        if ($widget){
            return $widget->image;
        }
        return '';

        # code...
    }
}
