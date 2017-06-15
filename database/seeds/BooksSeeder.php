<?php

use Illuminate\Database\Seeder;
use App\Authors;
use App\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $author1 = Authors::create(['name'=>'Mohammad Fauzi Adhim']);
        $author2 = Authors::create(['name'=>'Salim A.Fillah']);
        $author3 = Authors::create(['name'=>'Aam Amirudin']);

        $book1 = Book::create(['title'=>'Kupinang Kau Dengan Basmallah','amount'=>3,'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan Cinta Para Pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membagi Kebahagiaan','amount'=>4,'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta & Seks Ruma Tangga Muslim','amount'=>3,'author_id'=>$author3->id]);
    
    }
}
