<?php

namespace App\Repositories\Eloquent;

use App\Contracts\Repository\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{

    public function getAllTags($params = [])
    {

    }

    public function showTag($tagId)
    {
        return Tag::query()
            ->findOrFail($tagId);
    }

    public function createTag($tagData)
    {
        return Tag::query()
            ->create($tagData);
    }

    public function deleteTag($tagId, $softDelete = true)
    {
        $tagQuery = Tag::query()
            ->where('id', $tagId);

        if (!$softDelete) {
            return $tagQuery->forceDelete();
        }

        return $tagQuery->delete();
    }

    public function updateTag($tagId, $tagData)
    {
        $tag = Tag::query()
            ->find($tagId);

        $tag->name = $tagData['name'];

        return $tag->saveOrFail();
    }
}
