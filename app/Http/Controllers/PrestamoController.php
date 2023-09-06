<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\PrestamoModel;
use App\Models\Libro;
class PrestamoController extends Controller
{
    public function showAll(){
        $loans = PrestamoModel::showAll();
        return view('allLoans', compact('loans'));
    }
    public function loanDetail($id){
        $loan = PrestamoModel::findId($id);
        return view('loanDetail', compact('loan'));
    }
    public function updateLoan($id){
        $loan = PrestamoModel::find($id);
        Session::put('id', $id);
        return view('editLoan', compact('loan'));
    }
    public function updatedLoan(Request $request){
        $id = Session::get('id');
        PrestamoModel::updatedLoan($id, $request);
        return Redirect::to('/allLoans');
    }
    public function deleteLoan($id){
        $loan = PrestamoModel::deleteLoan($id);
        return Redirect::to('/allLoans');
    }
}
