<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Response;

class AuthorController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection {
        return AuthorResource::collection(Author::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request): AuthorResource {
        $author = Author::create(['name' => $request->name]);
        return new AuthorResource($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): AuthorResource {
        return AuthorResource::make($author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author): AuthorResource {
        $author->update(['name' => $request->name]);
        return new AuthorResource($author);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): \Illuminate\Http\Response {
        $author->delete();
        return Response::noContent();
    }
}
