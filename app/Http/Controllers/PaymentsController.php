<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\Payments;
use App\Models\PupilFee;
use Illuminate\Http\Request;
use Faker\Provider\ar_SA\Payment;

class PaymentsController extends Controller
{

    public function index(){

        $payments = Payments::with('parents')->latest()->paginate(5);
        // $payments = Parents::with('payments')->get();
// 
        // dd($payments);

        return view('payment.index', compact('payments'));
    }

    // public function payPupil($pupils){
    //    for ($i=0; $i < count($pupils) ; $i++) { 
        
    //    }
    // }
    public function makePayment(Payments $payments, Request $request){
        
        $this->validate($request, [
            'parent_id' => 'required',
            'amount' => 'required'
        ]);

        $parentId = $request->get('parent_id');
        $pupils = Parents::with('pupil')->find($parentId);
        // dd($pupils->pupil);

        $amountPaidByParent = $request->get('amount'); 
        $amountToBePaidToChild = $amountPaidByParent/count($pupils->pupil); 

        // dd($amountPaidByParent, $amountToBePaidToChild);

        
        for ($i=0; $i < count($pupils->pupil) ; $i++) { 
            $childId = $pupils->pupil[$i]->id;
            PupilFee::create([
                'parents_id' => $parentId,
                'pupil_id' => $childId,
                'fees' => $amountToBePaidToChild
            ]);
       }
        
        

        
        
        Payments::create([
            'parents_id' => $request->get('parent_id'),
            'amount' => $request->get('amount')
        ]);
         
            
        return redirect()->route('parents.show', $request->get('parent_id'));

    }
}

