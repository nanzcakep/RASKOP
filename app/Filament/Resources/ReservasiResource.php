<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservasiResource\Pages;
use App\Filament\Resources\ReservasiResource\RelationManagers;
use App\Models\Reservasi;
use Faker\Provider\ar_EG\Text;
use Filament\Actions\ViewAction;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservasiResource extends Resource
{
    protected static ?string $model = Reservasi::class;

    protected static ?string $slug = 'reservasi';

    protected static ?string $navigationLabel = 'Reservasi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Info Customer & Order')
                ->relationship('customer')
                ->Schema([
                    TextInput::make('name')->label('nama'),
                    TextInput::make('phone')->label('no telp'),
                    Textarea::make('order')
                        ->label('order'),
                    TextArea::make('note'),
                ])->columnSpanFull(),
                Section::make('Info Ruangan & Waktu')
                ->Schema([
                    Select::make('room')->label('ruangan')->relationship('room', 'room_name'),
                    DatePicker::make('tanggal')->label('tanggal')->required()->native(false),
                    TimePicker::make('jam_mulai')->label('jam mulai')->required()->seconds(false),
                    TimePicker::make('jam_selesai')->label('jam selesai')->required()->seconds(false),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_reservasi'),
                TextColumn::make('tanggal')->dateTime('j F Y')
                ->sortable(),
                TextColumn::make('jam_mulai')->dateTime('H:i'),
                TextColumn::make('jam_selesai')->dateTime('H:i'), 
                TextColumn::make('status')
                ->sortable()
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'pending' => 'warning',
                    'approved' => 'success',
                    'rejected' => 'danger',
                })
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make('view')
                ->label('Detail')
                ->icon('heroicon-o-eye')
                ->form([
                    Section::make('Info Customer & Order')
                    ->relationship('customer')
                    ->Schema([
                        TextInput::make('name')->label('nama')->disabled(),
                        TextInput::make('phone')->label('no telp')->disabled(),
                        Textarea::make('order')
                            ->label('order'),
                        TextArea::make('note'),
                    ])->columnSpanFull(),
                    Section::make('Info Ruangan & Waktu')
                    ->Schema([
                        Select::make('room')->label('ruangan')->relationship('room', 'room_name'),
                        DatePicker::make('tanggal')->label('tanggal')->required()->native(false),
                        TimePicker::make('jam_mulai')->label('jam mulai')->required()->seconds(false),
                        TimePicker::make('jam_selesai')->label('jam selesai')->required()->seconds(false),
                    ])
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListReservasis::route('/'),
            // 'create' => Pages\CreateReservasi::route('/create'),
            'edit' => Pages\EditReservasi::route('/{record}/edit'),
            'view' => Pages\ViewReservasi::route('/{record}'),
        ];
    }
}
