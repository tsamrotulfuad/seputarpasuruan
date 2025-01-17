<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Author;
use App\Models\Kategori;
use App\Models\Tag;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Post';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug'),
                RichEditor::make('konten'),
                Select::make('kategori_id')
                ->options(Kategori::all()->pluck('nama', 'id'))
                ->searchable()
                ->native(false),
                Select::make('tags')
                ->options(Tag::all()->pluck('nama', 'id'))
                ->searchable()
                ->multiple()
                ->native(false),
                Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'publish' => 'Publish'
                ])
                ->native(false),
                Select::make('author_id')
                ->options(Author::all()->pluck('nama', 'id'))
                ->searchable()
                ->native(false),
                FileUpload::make('featured_image')
                ->image()
                ->imageEditor()
                ->preserveFilenames(),
                DatePicker::make('tanggal')
                ->label('Tanggal Publish')
                ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul'),
                TextColumn::make('konten')
                ->limit(25),
                TextColumn::make('kategori.nama'),
                TextColumn::make('status'),
                ImageColumn::make('featured_image'),
                TextColumn::make('tanggal')
                ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
