<?php

namespace App\Filament\Resources\ProductCareItemResource\Pages;

use App\Filament\Resources\ProductCareItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCareItem extends EditRecord
{
    protected static string $resource = ProductCareItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
