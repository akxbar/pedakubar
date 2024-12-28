<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Peserta;
use App\Models\Pengumuman;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class BeritaOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $peserta = Peserta::count();
        $event = Event::where('publish',1)->count();
        $pengumuman = Pengumuman::where('publish',1)->count();
        return [
            Stat::make('Perserta Pemondokan',  $peserta)
            ->description('Jumlah Peserta ')
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        Stat::make('Total Event', $event )
            ->description('Jumlah Event')
            ->color('primary')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        Stat::make('Pengumuman', $pengumuman)
            ->description('Jumlah Pengumuman')
            ->color('info')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
