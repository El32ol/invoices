<?php

namespace Database\Seeders;

use App\Models\invoice_details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        invoice_details::create([

            'id_Invoice'=>'1',
            'invoice_number'=>'50',
            'product'=>'Prof. Walker Haley DDS',
            'section_id'=>'4',
            'Status'=>'غير مدفوعة',
            'Value_Status'=>'2',
            'Payment_Date'=>'2023-01-30',
            'note'=>'nim non tempora ius',
            'user'=>'el32ol',
        ]);

        invoice_details::create([ 'id_Invoice'=>'2',
        'invoice_number'=>'505',
        'product'=>'Dr. Dandre Abshire',
        'section_id'=>'5',
        'Status'=>'غير مدفوعة',
        'Value_Status'=>'2',
        'Payment_Date'=>'2023-01-30',
        'note'=>'nim non tempora ius',
        'user'=>'el32ol',
    ]);
       
    }
}
