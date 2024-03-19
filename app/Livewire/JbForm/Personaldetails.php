<?php

namespace App\Livewire\JbForm;

use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use App\Rules\ValidateName;
use App\Rules\ValidateGender;
use App\Rules\ValidatefatherName;
use App\Rules\ValidateMotherName;
use App\Rules\ValidateIncome;
use App\Rules\ValidateCaste;
use App\Rules\ValidateCasteNo;
use App\Rules\ValidateMaritalStatus;
use App\Rules\ValidateDsregistration;
use App\Rules\ValidateApplicationType;
use App\Rules\ValidateMobile;
use App\Rules\ValidateAadhar;
use App\Rules\ValidateIfsc;
use App\Models\Ifscmasters;
use App\Models\BeneficiaryMasterInfo;
use App\Models\BeneficiaryInfo;

use Illuminate\Support\Facades\Crypt;








class Personaldetails extends Component
{
    public $ben_name;
    public $gender;
    public $gender_value;
    public $application_type;
    public $age;
    public $father_name;
    public $mother_name;
    // public $mother_mname;
    public $caste_value;
    public $caste;
    public $m_status;
    public $m_status_value;
    public $caste_no;
    public $monthly_income;
    public $selectedMarried;
    public $application_type_key = 1;
    public $ds_registration_no;
    public $scheme_id;
    public $mobile_no;
    public $aadhar_no;
    public $bank_name;
     public $bank_branch;
    public $bank_ifsc_code;
    public $loadingBankData = false;
    public $confirm_bank_account_number;
    public $bank_account_number;
    Public $spouse_name;
    public $someValue;
    public $errorMsg='';
    public $application_id='';

 
    
public function mount(){

  
  $gender_code = $this->getmasterdata('010');
  $caste_code = $this->getmasterdata('020');
  $merital_status_code = $this->getmasterdata('030');
  $this->m_status_value = $merital_status_code;
  $this->gender_value = $gender_code;
  $this->caste_value = $caste_code;
  $application_id=session()->get('application_id');

  if($application_id!='')
  {

    $this->fetchpersonaldata($application_id);

  }
  
  // $bank_name_fetch=$bank_data->bank;
  

}


public function fetchpersonaldata($id){

  $is_saved = BeneficiaryInfo::where('application_id',$id)->first();
  if($is_saved!='')
  {
    $this->ben_name=$is_saved->ben_name;
    $this->father_name=$is_saved->father_name;
    $this->mother_name=$is_saved->mother_name;
    $this->aadhar_no=  Crypt::decryptString($is_saved->encoded_aadhar);
    $this->mobile_no=  $is_saved->mobile_no;
    $this->monthly_income= $is_saved->monthly_income;
    $this->gender_value= $this->getmasterdata('010');
    $this->caste_value= $this->getmasterdata('020');
    $this->m_status_value= $this->getmasterdata('030');
    $this->bank_ifsc_code= $is_saved->bank_ifsc;
    $this->bank_account_number=$is_saved->bank_code;
    $this->bankmaster($is_saved->bank_ifsc);
    $this->confirm_bank_account_number=$is_saved->bank_code;
    $this->gender = $is_saved->gender;
    $this->caste= $is_saved->caste;
    $this->m_status=$is_saved->marital_status;
    $this->spouse_name=$is_saved->spouse_name;
    $this->caste_no=$is_saved->caste_certificate_no;
    

    if($is_saved->duare_sarkar_registration_no!='')
    {
      $this->application_type_key=2;
      $this->ds_registration_no=$is_saved->duare_sarkar_registration_no;
    }

   // dd($this->gender_value);


  }
  

}

public function getmasterdata($data)
{
// dd($data);
$data_fetch=BeneficiaryMasterInfo::where('code', 'like', $data.'%')->orWhere('id',$data)->get();

//dd($data_fetch);
return $data_fetch;

}



// public function mastercode($data)
// {

// $mastercode_fetch=BeneficiaryMasterInfo::Where('id',$data)->get();
// return $mastercode_fetch['name'];

// }

public function bankmaster($data)
{
 //dd($data);
$this->loadingBankData = true;
  $bank_data = Ifscmasters::where('ifsc', trim($data))->where('is_active', 1)->select('bank', 'ifsc','bank_code','branch')->first();
if($bank_data!=NULL)
{
$this->bank_name = $bank_data['bank'];
$this->bank_branch = $bank_data['branch'];
$this->loadingBankData = false;
}
else{
  $this->bank_name='';
  $this->bank_branch='';
  $this->loadingBankData = true;
}
  // dump($data_fetch);
  //dd($data_fetch);
return $bank_data;

}
public function fetch(){

  $this->bankmaster($this->bank_ifsc_code);
}
public function messages() 
    {
        return [
          'required' => 'The :attribute field is required.',
          'required_if' => 'The :attribute field is required.',
            'integer' => 'Only integer allowed for :attribute',
            'max' => 'Maximum of :size characters allowed for :attribute',
            'size' => 'The :attribute must be exactly :size.',
        ];
    }

    public function validationAttributes() 
    {
        return [
          'ds_registration_no' =>'Duare Sarkar Registration No',
          'ben_name' => 'Beneficiary Name',
            'gender' => 'Gender',
            'age' => 'Age',
            'application_type_key' => 'Application Type',
            'father_name' => 'Father Name',
            'mother_name' => 'Mother Name',
            'caste' => 'Caste',
            'm_status' => 'Marital Status',
            'monthly_income' => 'Monthly Income',
            'caste_no' => 'Caste Certificate No',
            'mobile_no' =>'Mobile Number',
            'aadhar_no' =>'Aadhar Number',
            'bank_ifsc_code'=> 'Bank IFSC Code',
            'bank_account_number'=> 'Bank Account No',
            'confirm_bank_account_number' =>'Confirm Bank Account No',
            
        ];
      }
    public function save(){

      $session_application_id=session()->get('application_id');
    
     $check_existing_data = BeneficiaryInfo::where('application_id',$session_application_id)->count();

    
    
    //dd($this->all());
      // $this->validate([
      //   'ds_registration_no' =>  ['required_if:application_type_key,2', new ValidateDsregistration],
      //   'ben_name' => ['required', new ValidateName],
      //   'father_name' => ['required', new ValidateFatherName],
      //   'gender' => ['required', new ValidateGender],
      //   'mother_name' => ['required', new ValidateMotherName],
      //   'monthly_income' => ['required', new ValidateIncome],
      //   'caste' => ['required', new ValidateCaste],
      //   'caste_no' => ['required_if:caste,12,13,14', new ValidateCasteNo],
      //   'm_status' => ['required', new ValidateMaritalStatus],
      //   'application_type_key' => ['required', new ValidateApplicationType],
      //   'mobile_no' => ['required', new ValidateMobile],
      //   'aadhar_no' => ['required', new ValidateAadhar],
      //   'bank_ifsc_code'=> ['required', new ValidateIfsc],
      //   'bank_account_number'=>'required',
      //   'confirm_bank_account_number'=>'required',
        
      // ]);
      
      if($check_existing_data==1)
      {

        $this->update();
      }
      else{
        $this->store();

      }

     
        
    }

    public function store()
    {

      $pension_details = array(); 
      $scheme_id=$this->scheme_id;
       $aadhar_no=md5($this->aadhar_no);
      $encoded_aadhar_no=Crypt::encryptString($this->aadhar_no);
      $current_date_time=date('Y-m-d H:i:s');
    

      if($this->bank_account_number!=$this->confirm_bank_account_number)
      {
        
        $error = 'Bank Account number not Matched';
        $this->dispatch('error', $error);

      }
     
      $pension_details = [
        'created_at'=> $current_date_time,
        'scheme_id'=> $scheme_id,
        'ben_name'=> $this->ben_name,
        'gender'=> $this->gender,
        'father_name' => $this->father_name,
        'mother_name' => $this->mother_name,
        'caste' => $this->caste,
        'caste_certificate_no'=>$this->caste_no,
        'marital_status' => $this->m_status,
        'spouse_name' => $this->spouse_name,
        'duare_sarkar_registration_no' => $this->ds_registration_no,
        'monthly_income'=>$this->monthly_income,
        'mobile_no'=>$this->mobile_no,
        'aadhar_no'=>$aadhar_no,
        'encoded_aadhar'=>$encoded_aadhar_no,
        'bank_ifsc'=>$this->bank_ifsc_code,
        'bank_code'=>$this->bank_account_number,
        'next_level_role_id'=>1,
        'created_by_dist_code'=>313,
        'created_by_local_body_code'=>2725,
        'is_clean'=>1,
        'max_tab_code' =>1
        // 'ip_address' => request()->ip,
      ];
      
         
      DB::beginTransaction();
      try {
        $id = DB::table('public.beneficiaries')->insertGetId($pension_details, 'application_id');

     
      //$is_saved = 1;
      if ($id) {

        //dd($id);
      DB::commit(); // Commit only if insert is successful.
      $return_status = 1;
      $success = 'Application Submitted Successfully.';
      $this->someValue = 'tab2';
      $application_id=$id;
      session()->put('application_id', $application_id);
      $this->dispatch('dataSaved', $this->someValue,$application_id);
      $this->dispatch('success', $success);
      // dd('BNUHJHJK ');
      // return redirect()->with('errors',  $errors);
    
      } else {
        //dd(123);
        $return_status = 0;
        $error = 'Application Submission Failed';
        $this->dispatch('error', $error);
        DB::rollback();
        }
      } catch (\Exception $e) {

       // dd(123);

        //dd($e->errorInfo[2] );

        $errorMessage = $e->errorInfo[2];
        $error='';
        // Extracting the relevant error message
        $matches='duplicate key value violates unique constraint "unique_beneficiaries_1_mobile_no_key"';
        $matches='duplicate key value violates unique constraint "primary_beneficiaries_1_bank_account"';
        $matches='duplicate key value violates unique constraint "unique_beneficiaries_1_aadhar_no_key"';
        
        
       preg_match('/ERROR: (.+)/', $errorMessage,$matches);
       $detailedErrorMessage = isset($matches[1]) ? trim($matches[1]) : 'Unknown error';

       //dd($detailedErrorMessage);
       if($detailedErrorMessage=='duplicate key value violates unique constraint "unique_beneficiaries_1_mobile_no_key"')
       {
        //dd(123);
        $error='Duplicate Mobile Number';

       }
       else if($detailedErrorMessage=='duplicate key value violates unique constraint "primary_beneficiaries_1_bank_account"')
       {
        $error='Duplicate Bank Account Number';

       }
       else if($detailedErrorMessage=='duplicate key value violates unique constraint "unique_beneficiaries_1_aadhar_no_key"')
       {
        $error='Duplicate Aadhar Number';

       }
       else{
        $error='Error..Please try again';

       }
       $this->dispatch('error', $error);
      
        //dd($detailedErrorMessage);
      DB::rollback(); // Rollback on any exception.
      $return_status = 0;
      
      }
     
    }

    public function update()
    {
      $session_application_id=session()->get('application_id');
      $update_main = array(); 
      $scheme_id=$this->scheme_id;
       $aadhar_no=md5($this->aadhar_no);
      $encoded_aadhar_no=Crypt::encryptString($this->aadhar_no);
      $current_date_time=date('Y-m-d H:i:s');

      $update_main = [
        'created_at'=> $current_date_time,
        'ben_name'=> $this->ben_name,
        'gender'=> $this->gender,
        'father_name' => $this->father_name,
        'mother_name' => $this->mother_name,
        'caste' => $this->caste,
        'caste_certificate_no'=>$this->caste_no,
        'marital_status' => $this->m_status,
        'spouse_name' => $this->spouse_name,
        'duare_sarkar_registration_no' => $this->ds_registration_no,
        'monthly_income'=>$this->monthly_income,
        'mobile_no'=>$this->mobile_no,
        'aadhar_no'=>$aadhar_no,
        'encoded_aadhar'=>$encoded_aadhar_no,
        'bank_ifsc'=>$this->bank_ifsc_code,
        'bank_code'=>$this->bank_account_number,
        'next_level_role_id'=>1,
        'created_by_dist_code'=>313,
        'created_by_local_body_code'=>2725,
        'is_clean'=>1,
        'max_tab_code' =>1
      ];
      DB::beginTransaction();
    try {
    $update_beneficiary_details = BeneficiaryInfo::where('application_id',$session_application_id)->update($update_main);

    if ($update_beneficiary_details) {

      //dd($id);
    DB::commit(); // Commit only if insert is successful.
    $return_status = 1;
    $success = 'Application Updated Successfully.';
    $this->someValue = 'tab2';
   
    $this->dispatch('dataSaved', $this->someValue);
    $this->dispatch('success', $success);
    // dd('BNUHJHJK ');
    // return redirect()->with('errors',  $errors);
  
    } else {
      //dd(123);
      $return_status = 0;
      $error = 'Application Updation Failed';
      $this->dispatch('error', $error);
      DB::rollback();
      }
    } catch (\Exception $e) {

      // dd(123);

       //dd($e->errorInfo[2] );

       $errorMessage = $e->errorInfo[2];
       $error='';
       // Extracting the relevant error message
       $matches='duplicate key value violates unique constraint "unique_beneficiaries_1_mobile_no_key"';
       $matches='duplicate key value violates unique constraint "primary_beneficiaries_1_bank_account"';
       $matches='duplicate key value violates unique constraint "unique_beneficiaries_1_aadhar_no_key"';
       
       
      preg_match('/ERROR: (.+)/', $errorMessage,$matches);
      $detailedErrorMessage = isset($matches[1]) ? trim($matches[1]) : 'Unknown error';

      //dd($detailedErrorMessage);
      if($detailedErrorMessage=='duplicate key value violates unique constraint "unique_beneficiaries_1_mobile_no_key"')
      {
       //dd(123);
       $error='Duplicate Mobile Number';

      }
      else if($detailedErrorMessage=='duplicate key value violates unique constraint "primary_beneficiaries_1_bank_account"')
      {
       $error='Duplicate Bank Account Number';

      }
      else if($detailedErrorMessage=='duplicate key value violates unique constraint "unique_beneficiaries_1_aadhar_no_key"')
      {
       $error='Duplicate Aadhar Number';

      }
      else{
       $error='Error..Please try again';

      }
      $this->dispatch('error', $error);
     
       //dd($detailedErrorMessage);
     DB::rollback(); // Rollback on any exception.
     $return_status = 0;
     
     }
    }
    public function render()
    {
        return view('livewire.jb-form.personaldetails');
    }

}
