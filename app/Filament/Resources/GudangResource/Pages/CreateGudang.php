<?php

namespace App\Filament\Resources\GudangResource\Pages;

use App\Filament\Resources\GudangResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGudang extends CreateRecord
{
    protected static string $resource = GudangResource::class;

    protected function afterSave()
    {
        // Redirect to the list page after the record is saved
        return redirect()->route(GudangResource::getPages()['index']);
    }
}
