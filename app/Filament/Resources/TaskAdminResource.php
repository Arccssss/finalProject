<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskAdminResource\Pages;
use App\Filament\Resources\TaskAdminResource\RelationManagers;
use App\Models\TaskAdmin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TaskAdminResource extends Resource
{
    protected static ?string $model = TaskAdmin::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTaskAdmins::route('/'),
            'create' => Pages\CreateTaskAdmin::route('/create'),
            'view' => Pages\ViewTaskAdmin::route('/{record}'),
            'edit' => Pages\EditTaskAdmin::route('/{record}/edit'),
        ];
    }
}
