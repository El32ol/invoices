<?php

namespace Database\Seeders;

use App\Models\invoices;
use App\Models\sections;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        invoices::create([

            'invoice_number'=>'50',
            'invoice_Date'=>'2023-01-5',
            'Due_date'=>'2023-01-22',
            'product'=>'Prof. Walker Haley DDS',
            'section_id'=>'4',
            'Amount_collection'=>'5555.00',
            'Amount_Commission'=>'555.00',
            'Discount'=>'5055.00',
            'Value_VAT'=>'2.5',
            'Rate_VAT'=>'10%',
            'Total'=>'50.50',
            'Status'=>'غير مدفوعة',
            'Value_Status'=>'2',
            'note'=>'nim non tempora ius',
            'Payment_Date'=>'2023-01-30',
        ]);

        invoices::create([
        'invoice_number'=>'505',
        'invoice_Date'=>'2023-01-5',
        'Due_date'=>'2023-01-22',
        'product'=>'Dr. Dandre Abshire',
        'section_id'=>'5',
        'Amount_collection'=>'5555.00',
        'Amount_Commission'=>'555.00',
        'Discount'=>'5055.00',
        'Value_VAT'=>'2.5',
        'Rate_VAT'=>'10%',
        'Total'=>'50.50',
        'Status'=>'غير مدفوعة',
        'Value_Status'=>'2',
        'note'=>'nim non tempora ius',
        'Payment_Date'=>'2023-01-30',
    ]);
        
    }
}
