<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
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
            'employee' => Employee::with('user')
                ->get()
        ]);
    }

    /**
     * Display books available to a location.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTransactions($id)
    {
        return response()->json([
            'method' => __METHOD__,
            'file'  => __FILE__,
            'linenum'  => __LINE__,
            'book_transactions' => Employee::with('bookTransaction.bookRepository.bookstore')
                 ->with('bookTransaction.bookRepository.library')
                 ->with('bookTransaction.bookRepository.kiosk')
                 ->with('bookTransaction')
                 ->with('bookTransaction.customer.user')
                 ->with('bookTransaction.employee.user')
                 ->where(['id' => $id])
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
