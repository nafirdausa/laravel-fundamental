<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getAllData(Request $request, $PilihanMenu = null, $harga = null)
    {
        // Daftar Pilihan Menu
        $NamaMenu = [
            [
                "id" => 1,
                "makanan" => "Soto Mie",
                "harga" => 8000,
            ],
            [
                "id" => 2,
                "makanan" => "Bakso Malang",
                "harga" => 13000,
            ],
            [
                "id" => 3,
                "makanan" => "Ketoprak",
                "harga" => 15000,
            ],
            // ...
        ];

        // Jika tidak ada parameter yang diberikan, kembalikan semua data menu
        if ($PilihanMenu === null && $harga === null) {
            return response()->json([
                'info' => 'Data berhasil didapatkan',
                'data' => $NamaMenu
            ]);
        }

        foreach ($NamaMenu as $menu) {
            // Ubah ke huruf kecil untuk pencarian yang tidak bersifat case sensitive
            $lowercaseMenu = strtolower($menu['makanan']);
            $lowercaseSearchTerm = strtolower($PilihanMenu);

            // Periksa apakah kata kunci pencarian adalah substring dari nama menu
            if (strpos($lowercaseMenu, $lowercaseSearchTerm) !== false && $harga == $menu['harga']) {
                return "Anda memilih makanan {$menu['makanan']} dengan harga {$menu['harga']}";
            }
        }
        return "Menu tidak ditemukan";
    }
}
