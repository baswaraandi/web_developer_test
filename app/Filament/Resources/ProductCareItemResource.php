<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCareItemResource\Pages;
use App\Filament\Resources\ProductCareItemResource\RelationManagers;
use App\Models\ProductCareItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductCareItemResource extends Resource
{
    protected static ?string $model = ProductCareItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('product_care_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('serial_number')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('maintenance_count')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('refill_count')
                    ->required()
                    ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_care_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('serial_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('maintenance_count')
                    ->searchable(),
                Tables\Columns\TextColumn::make('refill_count')
                    ->searchable(),
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
            'index' => Pages\ListProductCareItems::route('/'),
            'create' => Pages\CreateProductCareItem::route('/create'),
            'edit' => Pages\EditProductCareItem::route('/{record}/edit'),
        ];
    }
}
