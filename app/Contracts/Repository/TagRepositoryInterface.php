<?php

namespace App\Contracts\Repository;

interface TagRepositoryInterface
{
    public function getAllTags($params = []);

    public function showTag($tagId);

    public function createTag($tagData);

    public function deleteTag($tagId, $softDelete = true);

    public function updateTag($tagId, $tagData);
}
