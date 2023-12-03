<?php

namespace App\Filament\Resources\ReservasiResource\Pages;

use App\Filament\Resources\ReservasiResource;
use App\Models\Reservasi;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewReservasi extends ViewRecord
{
    protected static string $resource = ReservasiResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Action::make('approve')
            ->label('Konfirmasi')
            ->icon('heroicon-o-check-circle')
            ->color('success')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-check-circle')
            ->modalDescription('Apakah anda yakin ingin menerima reservasi ini?')
            ->modalSubmitActionLabel('Terima')
            ->action(function (Reservasi $reservasi) {
                $reservasi->status = 'approved';
                $reservasi->save();
                Notification::make()
                ->title($reservasi->kode_reservasi.' Berhasil Diterima')
                ->icon('heroicon-o-check-circle')
                ->iconColor('success')
                ->send();
                redirect()->to('/admin/reservasi');
            })
            ->successRedirectUrl('/admin/reservasi')
            ,
            Action::make('reject')
            ->label('Tolak')
            ->icon('heroicon-o-x-circle')
            ->color('danger')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-x-circle')
            ->modalDescription('Apakah anda yakin ingin menolak reservasi ini?')
            ->modalSubmitActionLabel('Tolak')
            ->action(function (Reservasi $reservasi) {
                $reservasi->status = 'rejected';
                $reservasi->save();
                Notification::make()
                ->title($reservasi->kode_reservasi.' Ditolak')
                ->icon('heroicon-o-x-circle')
                ->iconColor('danger')
                ->send();
                redirect()->to('/admin/reservasi');
            })
        ];
    }

    
}
