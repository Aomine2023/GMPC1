<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class companycontroller extends Controller
{
    public function add_company_portfolio(){
        return view('backend.investors_layouts.companies.add_company_portfolio');
    }
    
    public function view_companies(){
        
    }
}