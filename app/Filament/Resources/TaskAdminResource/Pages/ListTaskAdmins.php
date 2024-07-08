<?php

namespace App\Filament\Resources\TaskAdminResource\Pages;

use App\Filament\Resources\TaskAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaskAdmins extends ListRecords
{
    protected static string $resource = TaskAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
