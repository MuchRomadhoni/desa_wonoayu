<?php

namespace App\Http\Controllers;

use App\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        return view('statistics.adminstatistics', [
            'statistics' => Statistic::all(),
        ]);
    }

    public function edit(Statistic $statistic)
    {
        return view('statistics.edit', compact('statistic'));
    }

    public function update(Statistic $statistic)
    {
        //validate the field
        $attr = request()->validate([
            'penduduk' => 'required',
            'kepala_keluarga' => 'required',
            'anggota_keluarga' => 'required',
            'male' => 'required',
            'female' => 'required',
        ]);

        $statistic->update($attr);

        session()->flash('success', 'Statistik berhasil di edit');

        return redirect('admin/statistics');
    }
}
