<?php

namespace App\Filament\Resources\TaskAdminResource\Pages;

use App\Filament\Resources\TaskAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTaskAdmin extends CreateRecord
{
    protected static string $resource = TaskAdminResource::class;
}
