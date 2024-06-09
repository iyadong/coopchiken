<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigLamp;

class ConfigLampController extends Controller
{
    /**
     * Menampilkan daftar semua konfigurasi lampu.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configLamps = ConfigLamp::all();
        return view('config-lamps.index', compact('configLamps'));
    }

    /**
     * Menampilkan formulir untuk membuat konfigurasi lampu baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config-lamps.create');
    }

    /**
     * Menyimpan konfigurasi lampu baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'device_id' => 'required',
            'status' => 'required',
            'time_on' => 'nullable',
            'time_off' => 'nullable',
        ]);

        ConfigLamp::create($request->all());
        
        return redirect()->route('config-lamps.index')
                        ->with('success', 'Konfigurasi lampu berhasil disimpan.');
    }

    /**
     * Menampilkan detail konfigurasi lampu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configLamp = ConfigLamp::findOrFail($id);
        return view('config-lamps.show', compact('configLamp'));
    }

    /**
     * Menampilkan formulir untuk mengedit konfigurasi lampu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configLamp = ConfigLamp::findOrFail($id);
        return view('config-lamps.edit', compact('configLamp'));
    }

    /**
     * Memperbarui konfigurasi lampu di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'device_id' => 'required',
            'status' => 'required',
            'time_on' => 'nullable',
            'time_off' => 'nullable',
        ]);

        $configLamp = ConfigLamp::findOrFail($id);
        $configLamp->update($request->all());
        
        return redirect()->route('config-lamps.index')
                        ->with('success', 'Konfigurasi lampu berhasil diperbarui.');
    }

    /**
     * Menghapus konfigurasi lampu dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $configLamp = ConfigLamp::findOrFail($id);
        $configLamp->delete();
        
        return redirect()->route('config-lamps.index')
                        ->with('success', 'Konfigurasi lampu berhasil dihapus.');
    }
}
