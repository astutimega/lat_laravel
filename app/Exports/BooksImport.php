<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BooksImport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return new Book([
            'judul' => $row['0'],
            'penulis' => $row['1'],
            'tahun' => $row['3'],
            'penerbit' => $row['4'],
         ] );
    }
}
