<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostOld
{
    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->slug,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                ))
                ->sortByDesc("date");
        });
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
//        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
//            return new ModelNotFoundException();
//        }
//
//        return cache()->remember("posts.{$slug}", now()->addDays(1), fn() => file_get_contents($path));
    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);
        if (!$post) throw new ModelNotFoundException();
        return $post;
    }
}
