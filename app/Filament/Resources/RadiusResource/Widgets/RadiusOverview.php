<?php

namespace App\Filament\Resources\RadiusResource\Widgets;

use App\Models\Radius;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget as ChartWidget;

class RadiusOverview extends ChartWidget
{
    protected static ?string $navigationLabel = "Dashboard-Radius";

    public function table(Table $table): Table
    {
        return $table->query(function () {
            return Radius::query();
        })->columns([
            Tables\Columns\TextColumn::make('name')->label('Name'),
            Tables\Columns\TextColumn::make('description')->label('Description'),
            Tables\Columns\TextColumn::make('client')->label('Client'),
            Tables\Columns\TextColumn::make('ip_address')->label('IP Address'),
            Tables\Columns\TextColumn::make('technical')->label('Technical'),
            Tables\Columns\TextColumn::make('created_at')->label('Created At'),
            // Adicione mais colunas conforme necessário
        ]);
    }
}
