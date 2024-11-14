<?php

namespace App\Filament\Resources\ProductCareResource\Pages;

use App\Filament\Resources\ProductCareResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductCares extends ListRecords
{
    protected static string $resource = ProductCareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
