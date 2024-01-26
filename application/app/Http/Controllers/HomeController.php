<?php
namespace App\Http\Controllers;
use App\Settings;
use App\Cheque;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use Session;
use App\Mail\FeedbackMail;
use Mail;
use App\Product;
use Carbon\Carbon;
use Auth;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        return view('backend.dashboard');
    }
    
    public function settings()
    {
        $singleData=Settings::where('id',1)->first();
        return view('backend.settings')->with('singleData',$singleData);
    }













    
    public function cheque()
    {
        return view('backend.cheque');
    }
    
    public function saveCheque(Request $request)
    {
        //signature upload
        $image = $request->file('signature');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(400,150)->save(public_path('/images/signatures/signature'.$fileName));

        Cheque::create([
            'ac_number' => $request->ac_number,
            'date' => $request->date,
            'pay_to' => $request->pay_to,
            'amount' => $request->amount,
            'amount_in_word' => $request->amount_in_word,
            'signature' => $fileName,
        ]);
        return redirect('cheque_List')->with('message', 'Cheque data submited successfully !');
    }
    
    public function cheque_List()
    {
        $cheques = Cheque::orderBy('id', 'DESC')->get();
        return view('backend.cheque_List')->with('cheques', $cheques);
    }

    public function editCheque($id)
    {
        $chequeInformations = Cheque::find($id);
        return view('backend.editCheque')->with('chequeInformations',$chequeInformations);
    }

    public function updateChequeInformation(Request $request, Cheque $id)
    {
        //signature upload
        $image = $request->file('signature');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(400,150)->save(public_path('/images/signatures/signature'.$fileName));

        $id->update([
            'ac_number' => $request->ac_number,
            'date' => $request->date,
            'pay_to' => $request->pay_to,
            'amount' => $request->amount,
            'amount_in_word' => $request->amount_in_word,
            'signature' => $fileName,
        ]);
        return redirect('cheque_List')->with('message', 'Cheque Information Successfully Updated!');
    }

    public function deleteCheque(Cheque $id) 
    {
        $id->delete();
        return redirect ('cheque_List')->with('message', 'Cheque Successfully Deleted!');
    }

    public function chequePrint(Cheque $id)
    {
        $chequeInformations = Cheque::find($id);
        $fileName = 'chequeInformations.pdf';
        view('backend.cheque_print');
        $html = view('backend.cheque_print', compact('chequeInformations'))->render();
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190.5, 88.9]]);
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName, 'I');
    }














    public function saveSettings(Request $request)
    {
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('settings')
                ->withErrors($validator);
        } else {
            $settings = Settings::find(1);
            $settings->name=$request->name;
            if($request->icon){
            $imageName1=Carbon::now()->timestamp.'.'.$request->icon->extension();
            $request->icon->storeAs('/settings/',$imageName1);
            $settings->icon=$imageName1;
            }
            if($request->logo){
            $imageName2=Carbon::now()->timestamp.'.'.$request->logo->extension();
            $request->logo->storeAs('/settings/',$imageName2);
            $settings->logo=$imageName2;
            }
            if($request->altlogo){
            $imageName3=Carbon::now()->timestamp.'.'.$request->altlogo->extension();
            $request->altlogo->storeAs('/settings/',$imageName3);
            $settings->altlogo=$imageName3;
            }
            $settings->scroll=$request->scroll;
            $settings->address=$request->address;
            $settings->tel=$request->tel;  
            $settings->mobile=$request->mobile;
            $settings->email=$request->email;
            $settings->link1=$request->link1;
            $settings->link2=$request->link2;
            $settings->link3=$request->link3;
            $settings->link4=$request->link4;
            $settings->link5=$request->link5;
            $settings->link6=$request->link6;
            $settings->office_hours=$request->office_hours;
            $settings->map_link=$request->map_link;
            $settings->copyright=$request->copyright;
            $settings->Delivery_Charge_Inside_Dhaka=$request->Delivery_Charge_Inside_Dhaka;
            $settings->Delivery_Charge_Outside_Dhaka=$request->Delivery_Charge_Outside_Dhaka;
            $settings->save();
            }
            Session::flash('message', 'Successfully Updated!');
            return redirect('settings');
    }
    public function feedbackemail(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'       => 'required',
            'subject'       => 'required',
            'message'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/');
            //echo 'All Inputs are required!';
        } else {
                    $data = [
                    'name'      => $request->name,
                    'message'   => $request->message,
                    'subject'   => $request->subject,
                    'email'      => $request->email,
                ];
        
                Mail::to('info@hostrare.com', 'Website Feedback')->send(new FeedbackMail($data));
                return redirect('/');
            //echo 'Sent to Admin Email, We will contact you soon.';
        }
    }
}
