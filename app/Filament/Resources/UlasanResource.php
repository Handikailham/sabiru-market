<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UlasanResource\Pages;
use App\Models\Ulasan;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class UlasanResource extends Resource
{
    protected static ?string $model = Ulasan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Ulasan';
    protected static ?string $navigationGroup = 'Landing Page';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('nama')
                ->label('Nama')
                ->required()
                ->maxLength(255),
            Textarea::make('ulasan')
                ->label('Ulasan')
                ->required()
                ->maxLength(1000),
            FileUpload::make('profile')
                ->label('Profile')
                ->image()
                ->directory('') // File akan disimpan di public/profile
                ->disk('public_profile')       // Pastikan menggunakan disk public
                ->nullable(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('nama')
                ->label('Nama')
                ->sortable()
                ->searchable(),
            TextColumn::make('ulasan')
                ->label('Ulasan')
                ->limit(50),
            ImageColumn::make('profile')
                ->label('Profile')
                ->circular(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListUlasans::route('/'),
            'create' => Pages\CreateUlasan::route('/create'),
            'edit'   => Pages\EditUlasan::route('/{record}/edit'),
        ];
    }
}
