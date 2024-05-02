<?php

namespace App\Filament\Resources\RadiusResource\Widgets;

use App\Models\Radius;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RadiusOverview extends BaseWidget
{
    protected static ?string $navigationLabel = "Dashboard-Radius";

    public function table(Table $table): Table
    {
        return $table
            ->recordClasses([
                'even:bg-gray-100',
                'odd:bg-white',
            ])
            ->query(function () {
                return Radius::query();
            })
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('user_id')->sortable(),
                Tables\Columns\TextColumn::make('description')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('client')->searchable(),
                Tables\Columns\TextColumn::make('ip_address')->searchable(),
                Tables\Columns\TextColumn::make('technical')->searchable(),
                Tables\Columns\TextColumn::make('create_at')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('last_activity')->numeric()->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ]);
    }
}
