<?php

namespace App\Filament\Resources\Skills;

use App\Filament\Resources\Skills\Pages\CreateSkills;
use App\Filament\Resources\Skills\Pages\EditSkills;
use App\Filament\Resources\Skills\Pages\ListSkills;
use App\Filament\Resources\Skills\Schemas\SkillsForm;
use App\Filament\Resources\Skills\Tables\SkillsTable;
use App\Models\Skills;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SkillsResource extends Resource
{
    protected static ?string $model = Skills::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user';

    protected static UnitEnum|string|null $navigationGroup = 'Navigation';

    protected static ?int $navigationSort = 2;


    public static function form(Schema $schema): Schema
    {
        return SkillsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SkillsTable::configure($table);
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
            'index' => ListSkills::route('/'),
            'create' => CreateSkills::route('/create'),
            'edit' => EditSkills::route('/{record}/edit'),
        ];
    }
}
