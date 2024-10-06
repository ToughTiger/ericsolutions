<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $posts = Post::whereDate('created_at', '>=', now()->subDays(30))->orderBy('created_at', 'DESC')->get();
        $weekdata = [];
        foreach ($posts as $post) {
            $p = $post->created_at->week;
            $weekdata[$p][] = $post;
        }
//        print_r($weekdata);
        return [
           Stat::make('Total Posts', Post::count())
             ->description('23% increase')
             ->descriptionIcon('heroicon-o-arrow-trending-up')
               ->chart([2,3,5, 4, 6,8,7,9,10])
             ->color('success'),
            Stat::make('Total Visitors', Visitor::all()->count())
                ->label('Total Visitors')
                ->description('Total visitors per day')
                ->descriptionIcon('heroicon-s-chart-bar-square')
                ->color('primary'),
            Stat::make('Total Comments', Comment::all()->count())
                ->label('Total Comment')
                ->description('Total Comments per day')
                ->descriptionIcon('heroicon-s-chat-bubble-left-right')
                ->color('warning')
        ];
    }
}
