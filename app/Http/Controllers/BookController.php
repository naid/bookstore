<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
	    'book' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
            'req' => $request,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	$book = Book::find($id);

        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
            'req' => $request,
        ]);
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
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
            'req' => $request,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
            'req' => $request,
        ]);
    }
}
