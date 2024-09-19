<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Response;

class BookController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection {
        return BookResource::collection(Book::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request): BookResource {
        $book = Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'published_at' => $request->published_at
        ]);
        return new BookResource($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): BookResource {
        return new BookResource($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book): BookResource {
        $book->update([
            'name' => $request->name,
            'description' => $request->description,
            'published_at' => $request->published_at
        ]);
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): \Illuminate\Http\Response {
        $book->delete();
        return Response::noContent();
    }
}
