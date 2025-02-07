<?php

// namespace App\Filament\Resources\AgencyResource\RelationManagers;

// use App\Filament\Resources\ContactResource\Tables\ContactResourceTable;
// use Filament\Forms;
// use Filament\Forms\Form;
// use Filament\Resources\RelationManagers\RelationManager;
// use Filament\Tables;
// use Filament\Tables\Columns\TextColumn;
// use Filament\Tables\Table;
// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

// class ContactsRelationManager extends RelationManager
// {
//     protected static string $relationship = 'contacts';

//     public function form(Form $form): Form
//     {
//         return $form
//             ->schema([
//                 Forms\Components\TextInput::make('name')->required(),
//                 Forms\Components\TextInput::make('phone'),
//                 Forms\Components\TextInput::make('email')->email(),
//             ]);
//     }

//     public function table(Table $table): Table
//     {
//         return $table
//             ->recordTitleAttribute('name')
//             ->columns(ContactResourceTable::getFields())
//             ->filters([
//                 //
//             ])
//             ->headerActions([
//                 Tables\Actions\CreateAction::make(),
//             ])
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//                 Tables\Actions\DeleteAction::make(),
//             ])
//             ->bulkActions([
//                 Tables\Actions\BulkActionGroup::make([
//                     Tables\Actions\DeleteBulkAction::make(),
//                 ]),
//             ]);
//     }
// }
