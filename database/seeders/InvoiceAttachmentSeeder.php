<?php

namespace Database\Seeders;

use App\Models\invoice_attachments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        invoice_attachments::create([

           'file_name'=> ' IMG-20210329-WA0007.jpg',
            'Created_by'=> ' super admin',
            'invoice_number'=>'50',
            'created_at'=>'2023-01-25',
            'invoice_id'=>'1',
        ]);
        
        invoice_attachments::create( [
            'file_name'=> ' IMG-20210329-WA0007.jpg',
            'Created_by'=> ' super admin',
            'invoice_number'=>'505',  
            'created_at'=>'2023-01-25',
            'invoice_id'=>'2',
        ]);
    
    }
}
