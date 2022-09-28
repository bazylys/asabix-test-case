<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Repository\TagRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TagController extends Controller
{
    protected TagRepositoryInterface $tagsRepository;

    public function __construct(TagRepositoryInterface $tagsRepository)
    {
        $this->tagsRepository = $tagsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tag::query()->simplePaginate();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  TagStoreRequest  $request
     * @return TagResource
     */
    public function store(TagStoreRequest $request)
    {
        $usedFields = $request->only('name');
        $tag = $this->tagsRepository->createTag($usedFields);
        return new TagResource($tag);
    }

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
