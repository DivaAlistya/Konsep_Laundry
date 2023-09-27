<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    protected $rent;

    protected $rentService;

    public function _construct(Rent $rent, )
    {
        $this->rent = $rent;
    }

    public function index()
    {
        $rent = $this->rent->get();
        return view('rent.index', compact('pinjam'));
    }

    public function create()
    {
        return view('rent.create');
    }

    
    public function destroy($id)
    {
        $rent = Rent::find($id);
        $rent->delete();

        return redirect()->route('rent.index');
    }
}
