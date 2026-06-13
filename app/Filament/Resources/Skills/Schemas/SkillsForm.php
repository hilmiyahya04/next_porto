<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;


class SkillsForm
{
    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('level'),

                Select::make('type')
                    ->options([
                        'language' => 'Language',
                        'framework' => 'Framework',
                        'tools' => 'Tools',
                    ])
                    ->required(),
            ]);
    }
}
