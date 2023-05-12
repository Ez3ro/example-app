<?php

namespace App\Filament\Resources\TextWidgetResource\Pages;

use App\Filament\Resources\TextWidgetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Support\Str;

class CreateTextWidget extends CreateRecord
{
    protected static string $resource = TextWidgetResource::class;
 
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

}
