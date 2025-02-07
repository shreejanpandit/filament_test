<?php

namespace App\Filament\Resources\AgencyResource\Tables;

use App\Filament\Contracts\ResourceFieldContract;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

final class AgencyResourceTable implements ResourceFieldContract
{
    /**
     * Get table fields
     *
     * @return array<mixed>
     */
    public static function getFields(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('phone')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('address')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('website')->sortable()->searchable(),
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
