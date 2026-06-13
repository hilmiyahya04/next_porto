<?php

namespace App\Filament\Widgets;

use App\Models\experiences;
use App\Models\projects;
use App\Models\skills;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class StatDashboard extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $countProjects = projects::count();
        $countSkills = skills::count();
        $countExperiences = experiences::count();
        return [
            Stat::make('Jumlah Projects', $countProjects . ''),
            Stat::make('Jumlah Skills', $countSkills . ''),
            Stat::make('Jumlah Experiences', $countExperiences . ''),
        ];
    }
}
