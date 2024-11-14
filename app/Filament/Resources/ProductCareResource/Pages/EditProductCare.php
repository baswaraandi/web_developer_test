<?php

namespace App\Filament\Resources\ProductCareResource\Pages;

use App\Filament\Resources\ProductCareResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCare extends EditRecord
{
    protected static string $resource = ProductCareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
