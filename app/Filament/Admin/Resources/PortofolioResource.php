<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PortofolioResource\Pages;
use App\Filament\Admin\Resources\PortofolioResource\RelationManagers;
use App\Models\Portofolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('client_id')
                    ->relationship('client', 'name')
                    ->label('Client')
                    ->required()
                    ->searchable(),

                Forms\Components\TextInput::make('name')
                    ->label('Nama Project')
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),

                Forms\Components\TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->placeholder('https://...'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama'),
                Tables\Columns\TextColumn::make('client.name')->label('Client'),
                Tables\Columns\TextColumn::make('url')->label('URL'),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y H:i')->label('Dibuat'),
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
        \App\Filament\Admin\Resources\PortofolioResource\RelationManagers\ImagePortofoliosRelationManager::class,
    ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
        ];
    }
}
