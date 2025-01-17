<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Iklan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\IklanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\IklanResource\RelationManagers;

class IklanResource extends Resource
{
    protected static ?string $model = Iklan::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationGroup = 'Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama'),
                FileUpload::make('gambar')
                ->image()
                ->openable()
                ->deletable()
                ->directory('iklan')
                ->preserveFilenames(),
                Select::make('posisi')
                ->options([
                    'main' => 'Main',
                    'sidebar' => 'Sidebar',
                    'post_sidebar' => 'Post Sidebar',
                ])
                ->native(false),
                DatePicker::make('tanggal_mulai')
                ->native(false),
                DatePicker::make('tanggal_selesai')
                ->native(false),
                Select::make('status')
                ->options([
                    'aktif' => 'Aktif',
                    'nonaktif' => 'Nonaktif',
                ])
                ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                ImageColumn::make('gambar'),
                TextColumn::make('posisi'),
                TextColumn::make('tanggal_mulai'),
                TextColumn::make('tanggal_selesai'),
                TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
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
            'index' => Pages\ListIklans::route('/'),
            'create' => Pages\CreateIklan::route('/create'),
            'edit' => Pages\EditIklan::route('/{record}/edit'),
        ];
    }
}
