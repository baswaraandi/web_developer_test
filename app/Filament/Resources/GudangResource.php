<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GudangResource\Pages;
use App\Filament\Resources\GudangResource\RelationManagers;
use App\Models\Gudang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GudangResource extends Resource
{
    protected static ?string $model = Gudang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('CreatedAt')
                    ->required(),
                Forms\Components\TextInput::make('Created')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Status')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('NamaPerusahaan')
                    ->required()
                    ->maxLength(200),
                Forms\Components\Textarea::make('Alamat')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('Phone')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('Email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('IdProvince')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('IdRegencies')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CreatedAt')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Created')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('NamaPerusahaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('IdProvince')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('IdRegencies')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListGudangs::route('/'),
            'create' => Pages\CreateGudang::route('/create'),
            'edit' => Pages\EditGudang::route('/{record}/edit'),
        ];
    }
}
