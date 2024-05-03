<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadiusResource\Pages;
use App\Models\Radius;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RadiusResource extends Resource
{
    protected static ?string $model = Radius::class;

    protected static ?string $navigationIcon = 'heroicon-o-server-stack';

    protected static ?string $navigationLabel = "Radius";

    protected static ?string $label = "Server";

    protected static ?string $navigationGroup = "Servers";

    protected static ?string $slug = "servers";

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nome')
                ->required(),
            Forms\Components\TextInput::make('description')
                ->label('Descrição')
                ->required(),
            Forms\Components\TextInput::make('client')
                ->label('ID + Razão cliente')

                ->required(),
            Forms\Components\TextInput::make('ip_address')
                ->label('IP')

                 ->required(),
            Forms\Components\TextInput::make('technical')
                ->label('Técnico do suporte')

                ->required(),
            Forms\Components\DateTimePicker::make('create_at')
                ->label('Criado em'),

            Forms\Components\TextInput::make('password_radius')
                ->label('Senha radius')
                ->password()
                ->required()
                ->revealable()
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')
            ->label('ID')
            ->sortable(),
            Tables\Columns\TextColumn::make('description')
                ->label('Descrição')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('name')
                ->label('Nome')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('client')
                ->label('Cliente')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('ip_address')
                ->label('IP')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('technical')
                ->label('Técnico')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('last_activity')
                ->label('Última atividade')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Criado em')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->label('Atualizado em')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Editar'),
                Tables\Actions\ViewAction::make()
                ->label('Visualizar'),
                Tables\Actions\DeleteAction::make()
                ->label('Deletar')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRadius::route('/radius'), // Definindo a rota para /radius
            'create' => Pages\CreateRadius::route('/radius/create'), // Definindo a rota para /radius/create
            'edit' => Pages\EditRadius::route('/radius/{record}/edit'), // Definindo a rota para /radius/{record}/edit
        ];
    }
}
