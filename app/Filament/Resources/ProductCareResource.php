<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCareResource\Pages;
use App\Filament\Resources\ProductCareResource\RelationManagers;
use App\Models\ProductCare;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductCareResource extends Resource
{
    protected static ?string $model = ProductCare::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('gudang_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('customer_name')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(13),
                Forms\Components\TextInput::make('latitude_pickup')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('longitude_pickup')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('product_care_date')
                    ->required(),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('payment_method')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('payment_status')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('product_care_type')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('product_care_status')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('created_by')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('pickup_at'),
                Forms\Components\TextInput::make('pickup_by')
                    ->numeric(),
                Forms\Components\DateTimePicker::make('delivered_at'),
                Forms\Components\TextInput::make('delivered_by')
                    ->numeric(),
                Forms\Components\TextInput::make('updated_by')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('gudang_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude_pickup')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude_pickup')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_care_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_care_type')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_care_status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pickup_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pickup_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('delivered_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('delivered_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_by')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListProductCares::route('/'),
            'create' => Pages\CreateProductCare::route('/create'),
            'edit' => Pages\EditProductCare::route('/{record}/edit'),
        ];
    }
}
