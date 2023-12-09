<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
// Method-method lainnya
    public function create() {
        return view('mahasiswa.create');
    }
}
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
class MahasiswaController extends Controller
{
    //
}
class MahasiswaController extends Controller { 
    
    // Method-method lainnya 

    public function store(Request $request) { 

        // Validasi data jika diperlukan 
        $request->validate([ 
            'nama' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'tanggal_lahir' => 'required|date'
        ]);
        
        // Simpan data ke dalam database 
        Mahasiswa::create([ 
            'nama' => $request->input('nama'), 
            'alamat' => $request->input('alamat'), 
            'tanggal_lahir' => $request->input('tanggal_lahir'), 
        ]); 

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }
}

class MahasiswaController extends Controller
{
    // Method-method lainnya
    public function update(Request $request, $id)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        // Temukan data mahasiswa yang akan diubah
        $mahasiswa = Mahasiswa::find($id);

        // Perbarui data mahasiswa
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->save();

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function destroy($id)
    {
        // Temukan data mahasiswa yang akan dihapus
        $mahasiswa = Mahasiswa::find($id);

        if ($mahasiswa) {
            // Hapus data mahasiswa
            $mahasiswa->delete();

            // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
            return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
        } else {
            return redirect()->route('mahasiswa.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }
    }
}
