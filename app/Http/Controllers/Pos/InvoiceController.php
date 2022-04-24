<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Payment;
use App\Models\PaymentDetail;
use App\Models\Customer;

class InvoiceController extends Controller
{
    public function InvoiceAll(){
        $allData = Invoice::orderBy('date','desc')->orderBy('id','desc')->get();
            return view('backend.invoice.invoice_all',compact('allData'));

    } // End Method


    public function invoiceAdd(){

        $supplier = Supplier::all();
        $unit = Unit::all();
        $category = Category::all();
        return view('backend.invoice.invoice_add',compact('supplier','unit','category'));

    } // End Method




}
 