<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Video;
use App\Models\Author;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VideoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VideoResource\RelationManagers;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    protected static ?string $navigationGroup = 'Post';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama'),
                FileUpload::make('cover')
                ->image()
                ->imageEditor()
                ->preserveFilenames(),
                Select::make('author_id')
                ->options(Author::all()->pluck('nama', 'id'))
                ->searchable()
                ->native(false),
                DatePicker::make('tanggal')
                ->native(false),
                TextInput::make('link'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                ImageColumn::make('cover')
                 ->width(150)
                 ->height(75),
                TextColumn::make('author.nama'),
                TextColumn::make('tanggal'),
                TextColumn::make('link')->limit(15),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->after(function (Video $record) {
                        // delete single
                        if ($record->cover) {
                        Storage::disk('public')->delete($record->cover);
                        }
                    }),
                ]),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
