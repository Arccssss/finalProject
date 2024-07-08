<?php

namespace App\Filament\Resources\TaskAdminResource\Pages;

use App\Filament\Resources\TaskAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTaskAdmin extends EditRecord
{
    protected static string $resource = TaskAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
