<?php

namespace App\Filament\Resources\ContactResource\Tables;

use App\Filament\Contracts\ResourceFieldContract;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

final class ContactResourceTable implements ResourceFieldContract
{
    /**
     * Get table fields
     *
     * @return array<mixed>
     */
    public static function getFields(): array
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('name')
                ->sortable()
                ->searchable(),
            TextColumn::make('phone')
                ->sortable()
                ->searchable(),
            TextColumn::make('email')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('deleted_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
