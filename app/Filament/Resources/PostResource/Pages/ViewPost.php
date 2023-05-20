<?php

namespace App\Filament\Resources\PostResource\Pages;

use pp\Filament\Widgets;
use App\Filament\Resources\PostResource\Widgets\StreamOverview;
use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;
    

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            StreamOverview::class
        ];
    }
}
