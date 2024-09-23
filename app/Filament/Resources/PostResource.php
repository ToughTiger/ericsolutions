<?php

namespace App\Filament\Resources;

use App\Enums\PostStatusEnum;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make("Create Post")
                            ->description("Create a new post here.")
                            ->schema([//
                                TextInput::make('title'),
                                TextInput::make('slug'),
                                Forms\Components\MarkdownEditor::make('content')
                                    ->columnSpan('full')
                            ])->columns(2),
                    ])->columnSpan(2),
                Group::make()
                    ->schema([
                        Section::make("Meta")
                            ->description('Metadata for SEO')
                            ->schema([
                                TextInput::make('keywords')
                                    ->helperText("Enter keywords that capture the blog's essence"),
                                TextInput::make('meta_description')
                                    ->helperText("Enter description about the blog's essence"),
                                Forms\Components\Toggle::make('is_featured')->label('Featured')
                                    ->helperText('is this a featured blog?'),
                                Forms\Components\Radio::make('status')->options(PostStatusEnum::class)->helperText('is this a published post?'),

                            ]),
                        Section::make("Image Upload")
                            ->description('Upload an image for images and set Alt tag')
                            ->Schema([
                                Forms\Components\FileUpload::make('image')
                                    ->directory('form-attachments')
                                    ->preserveFilenames()
                                    ->image()
                                    ->imageEditor(),
                                TextInput::make('alt'),

                            ])->collapsible(),

                    ]),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->searchable()
                ->sortable(),
                TextColumn::make('author.name')
                ->searchable()
                ->sortable(),
                IconColumn::make('is_featured')
                ->boolean()
                ->searchable()
                ->sortable(),
                TextColumn::make('status')->badge()
                ->searchable()
                ->sortable()->toggleable(),
                TextColumn::make('created_at')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_featured')
                ->label('Featured')
                ->boolean()
                ->trueLabel('Only Featured Post')
                ->falseLabel('Only Drafted Post')
                ->native(false)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
