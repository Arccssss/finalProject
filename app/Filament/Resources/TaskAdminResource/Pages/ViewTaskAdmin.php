<?php

namespace App\Filament\Resources\TaskAdminResource\Pages;

use App\Filament\Resources\TaskAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTaskAdmin extends ViewRecord
{
    protected static string $resource = TaskAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
