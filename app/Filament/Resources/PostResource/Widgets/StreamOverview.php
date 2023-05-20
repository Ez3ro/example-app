<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Widgets\Widget;

use App\Models\StreamView;
use Illuminate\Database\Eloquent\Model;
use App\Models\LikeDislike;

class StreamOverview extends Widget
{
    
    public ?Model $record = null;

    protected int | string | array $columnSpan = 3;

    protected function getViewData(): array
    {
        if (! $this->record) {
            return ['Views' => null,
            'likes' => null,
            'dislikes' =>null,
        ];

        }else{
            return [
            
                'Views' => StreamView::where('post_id', $this->record->id)->count(),
                'likes' => LikeDislike::where('post_id', $this->record->id)->where('is_like', true)->count(),
                'dislikes' => LikeDislike::where('post_id', $this->record->id)->where('is_like', false)->count(),
            ];

        }
       
    }
    
    protected static string $view = 'filament.resources.post-resource.widgets.stream-overview';
}
