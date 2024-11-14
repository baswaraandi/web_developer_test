<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('IdCategoryProduct')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('IdSubCategoryProduct')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('CreateSN')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('IdProduct')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('PNO')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('Price_lama')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Price')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Stock')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('MinQty')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Weight')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Expired')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('warranty')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ExpiredSNI')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('WarrantySNI')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('CreatedDate')
                    ->required(),
                Forms\Components\TextInput::make('Status')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('panjang')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lebar')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tinggi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('fire_rating')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('media')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kapasitas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kelas_kebakaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tabung_silinder')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('IdCategoryProduct')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('IdSubCategoryProduct')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('CreateSN')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('IdProduct')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('PNO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Price_lama')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('MinQty')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Weight')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Expired')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('warranty')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ExpiredSNI')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('WarrantySNI')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('CreatedDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('panjang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lebar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fire_rating')
                    ->searchable(),
                Tables\Columns\TextColumn::make('media')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas_kebakaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tabung_silinder')
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
