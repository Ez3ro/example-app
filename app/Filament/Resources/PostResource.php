<?php

namespace App\Filament\Resources;

use Closure;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Forms\Components\Placeholder;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;
use Masterminds\HTML5;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-status-online';

    protected static ?string $navigationGroup = 'Content';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)
                    ->schema([Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function(Closure $set, $state){
                        $set('slug', Str::slug($state));
                    })
                    ->maxLength(2048),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(2048),]),
                    

                    
                    Forms\Components\TextInput::make('streamKey')
                    ->required()
                    ->maxLength(2048)
                    ->extraInputAttributes(['readonly' => true])
                    ->visibleOn('edit'),
            Fileupload::make('thumbnail')
            ->required()
            ->imagePreviewHeight('200')
            ->loadingIndicatorPosition('left')
            ->panelAspectRatio('2:1')
            ->panelLayout('integrated')
            ->removeUploadedFileButtonPosition('right')
            ->uploadButtonPosition('left')
            ->uploadProgressIndicatorPosition('left'),
            Forms\Components\RichEditor::make('body')
                ->required(),
            Forms\Components\Toggle::make('active')
                ->required(),
            Forms\Components\Select::make('category_id')
                ->multiple()
                ->preload()
                ->relationship('categories', 'title')
                ->required(),])
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('streamKey'),
                
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
{
                // @ts-ignore
    if(!Auth::user()->hasRole('admin')){
        return parent::getEloquentQuery()->whereBelongsTo(auth()->user());
    }
     return parent::getEloquentQuery()->where('id', '>', 0);
}
 
}
