<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookTransaction;

class BookTransactionController extends Controller
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
	    'book_transaction' => BookTransaction::with('book')
                 ->with('bookRepository.bookstore')
                 ->with('bookRepository.library')
                 ->with('bookRepository.kiosk')
                 ->with('customer.user')
                 ->with('employee.user')
                 ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * sample input:
     * {
     *     "book_id": 1,
     *     "book_repository_id": 2,
     *     "customer_id": 3,
     *     "employee_id": 4
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'book_id' => 'required|numeric',
          'book_repository_id' => 'required|numeric',
          'customer_id' => 'required|numeric',
          'employee_id' => 'required|numeric',
        ]);

        $bookTransaction = new BookTransaction;
        $bookTransaction->book_id = $request->input('book_id');
        $bookTransaction->book_repository_id = $request->input('book_repository_id');
        $bookTransaction->customer_id = $request->input('customer_id');
        $bookTransaction->employee_id = $request->input('employee_id');

	$result = $bookTransaction->save();

        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
	    'result' => $result,
	    'req' => $request->post()
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
        //
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
