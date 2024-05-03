<?php

namespace App\Filament\Resources\RadiusResource\Widgets;

use App\Models\Radius;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\PieChartWidget as ChartWidget;

class RadiusOverview extends ChartWidget
{
    protected static ?string $navigationLabel = "Dashboard-Radius";

    public function table(Table $table): Table
    {
        return $table
            ->query(function () {
                return Radius::query()->toBase();
            })
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ]);
    }
}