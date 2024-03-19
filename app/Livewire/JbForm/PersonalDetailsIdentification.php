<?php

namespace App\Livewire\JbForm;

use Livewire\Component;
use App\Models\BeneficiaryMasterInfo;
use App\Rules\ValidateRationcard;
use Illuminate\Support\Facades\DB;
use App\Models\BeneficiaryInfo;
class PersonalDetailsIdentification extends Component
{
    public $ration_card_cat;
    public $ration_card_value;
    public $card_no;
    public $epic_voter_id;
    public $ahl_tin;
    public $bpl_seq_no;
    public $pan_no;
    public $bpl_id_no;
    public $bpl_total_score;
    public $someValue;
    public $application_id='';
   

    public function mount(){


    $ration_card_code = $this->getmasterdata('050');
    $this->ration_card_value = $ration_card_code;
    $this->application_id=session()->get('application_id');
   

    if($this->application_id!='')
    {
  
      $this->fetchidentification($this->application_id);
  
    }
    // $bank_name_fetch=$bank_data->bank;


    }

    public function fetchidentification($id){
      $identification_data = BeneficiaryInfo::select('identification_details')->where('application_id',$id)->first();
      $detailsObject = json_decode($identification_data,true);
      $identificationobj=(json_decode($detailsObject['identification_details'],true));
// Access the 'pan_no' property
//$panNo = $identificationobj['pan_no'];
      $this->pan_no=$identificationobj['pan_no'];
      $this->card_no= $identificationobj['card_no'];
      $this->bpl_id_no=$identificationobj['bpl_id_no'];
      $this->epic_voter_id=$identificationobj['epic_voter_id'];
      $this->bpl_total_score=$identificationobj['bpl_total_score'];
      $this->ration_card_cat = $identificationobj['ration_card_cat']; 
      $this->ahl_tin=$identificationobj['ahl_tin']; 
      $this->bpl_seq_no=$identificationobj['bpl_seq_no']; 
   
    }

    public function getmasterdata($data)
    {

    $data_fetch=BeneficiaryMasterInfo::where('code', 'like', $data.'%')->orWhere('id',$data)->get();
    return $data_fetch;

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
          'ration_card_cat' =>'Ration Card Catagory',
          'card_no'=>'Ration Card No',
          'epic_voter_id' => 'Voter ID'
          
            
        ];
      }

      public function save(){

         $id=$this->application_id;
         $this->validate([
               'ration_card_cat' =>  ['required', new ValidateRationcard],
               'card_no' =>  ['required'],
               'epic_voter_id'=>  ['required']
            
              
             ]);

             $current_date_time=date('Y-m-d H:i:s');
             $pension_identification_details = [
              'ration_card_cat'=> $this->ration_card_cat,
              'card_no'=> $this->card_no,
              'epic_voter_id'=> $this->epic_voter_id,
              'pan_no' => $this->pan_no,
              'bpl_id_no' => $this->bpl_id_no,
              'bpl_total_score' => $this->bpl_total_score,
              'bpl_seq_no'=>$this->bpl_seq_no,
              'ahl_tin'=>$this->ahl_tin
            ];

            $pension_identification_json = json_encode($pension_identification_details);
          
            DB::beginTransaction();
            try {
         $is_saved_identification_data = BeneficiaryInfo::where('application_id', $id)
            ->update(['identification_details' => $pension_identification_json,'max_tab_code' =>2]);
            if ($is_saved_identification_data) {

              //dd(123);
            DB::commit(); 
            $return_status = 1;
            $success = 'Application Submitted Successfully.';
             $this->someValue = 'tab3';
             $this->dispatch('success', $success);
             $this->dispatch('dataSaved', $this->someValue);
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
              DB::rollback();
            }
      
      }

      public function back(){
        $this->someValue = 'tab1';
        $this->dispatch('dataSaved', $this->someValue);

      }

    public function render()
    {
        return view('livewire.jb-form.personal-details-identification');
    }
}
