<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Carbon\Carbon;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreatePost extends CreateRecord
{
    
    protected static string $resource = PostResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();
    $data['streamKey'] = Str::random(10);
    $data['published_at'] = Carbon::now();
 
    return $data;
}
protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

}
