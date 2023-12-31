<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Other;



class SponsorController extends Controller
{

    public function index()
    {
        $sponsor = Sponsor::latest()->paginate(10);
        return view('sponsor.index', compact('sponsor'));
    }

    public function create()
    {
        return view('sponsor.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logo = $request->file('foto');
        $logo->storeAs('public/sponsor', $logo->hashName());
        $sponsor = Sponsor::create([
            'logo' => $logo->hashName(),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_acara' => $request->nama_acara,
            'kategori' => $request->kategori,
            'start_date' => $request->start_date,
            'feedback' => $request->feedback,
            'SnK' => $request->SnK,

        ]);
        if ($sponsor) {
            return redirect()->route('sponsor.index')->with(['success' => 'Data Berhasil Disimpan!']);

        } else {
            return redirect()->route('sponsor.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = Sponsor::find($id);
        return view('sponsor.update', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        if ($request->file('logo') == "") {
            $sponsor->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'nama_acara' => $request->nama_acara,
                'kategori' => $request->kategori,
                'start_date' => $request->start_date,
                'feedback' => $request->feedback,
                'SnK' => $request->SnK,
            ]);
        } else {
            Storage::disk('local')->delete('public/sponsor/' . $sponsor->logo);
            $logo = $request->file('logo');
            $logo->storeAs('public/sponspr', $logo->hashName());
            $sponsor->update([
                'logo' => $logo->hashName(),
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'nama_acara' => $request->nama_acara,
                'kategori' => $request->kategori,
                'start_date' => $request->start_date,
                'feedback' => $request->feedback,
                'SnK' => $request->SnK,
            ]);
        }

        if ($sponsor) {
            return redirect()->route('sponsor.index')->with(['success' => 'Data berhasil diubah!']);
        } else {
            return redirect()->route('sponsor.index')->with(['error' => 'Data gagal diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        Storage::disk('local')->delete('public/sponsor/' . $sponsor->logo);
        $sponsor->delete();
        if ($sponsor) {
            return redirect()->route('sponsor.index')->with(['success' => 'Data berhasil dihapus!']);
        } else {
            return redirect()->route('sponsor.index')->with(['error' => 'Data gagal dihapus!']);
        }
    }
    public function detail($id)
    {
        $sponsor = Sponsor::find($id);

        return view('sponsor.detail', compact('sponsor'));
    }

    public function getData()
    {
        $data = Sponsor::selectRaw('MONTH(start_date) as month, COUNT(*) as total')
            ->groupByRaw('MONTH(start_date)')
            ->get();
            return response()->json($data);
    }

    public function sponsorChart()
    {
        $data = Sponsor::selectRaw('MONTH(start_date) as month, COUNT(*) as total')
            ->groupByRaw('MONTH(start_date)')
            ->get();

        return view('sponsorChart', [
            'chart' => $this->sponsorChart($data)
        ]);
    }

    protected function generateSponsorChart($data)
    {
        return Chartisan::build()
            ->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])
            ->dataset('Sponsor Count', $data->pluck('total'));
    }
}
