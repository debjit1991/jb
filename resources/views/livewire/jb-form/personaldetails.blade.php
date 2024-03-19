<div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        .loader - gif {
            display: block; /* Ensure the image is a block element */
            margin: 0 auto; /* Center the image horizontally */
            /* Add any additional styling you need */
        }
    </script>
{{-- @dd($errorMsg); --}}
{{-- {{$errorMsg}}
@if(!empty($errorMsg))
@livewire('error-alert')
  @endif --}}
    <div class="flex flex-col lg:flex-row mt-2 gap-4">
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.select name="application_type" class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm"
                wire:model.live="application_type_key" required>
                <option value="1">Normal Form</option>
                <option value="2">Form through Duare Sarkar camp</option>


            </x-form.select>
        </div>
        <x-form.input type="hidden" value="{{ $scheme_id }}" name="" wire:model="scheme_id" />
        @if ($application_type_key == 2)
            <div class="w-full md:w-1/3 mt-1 text-gray-700">
                <x-form.input type="text" label="Duare Sarkar Registration No" name="ds_registration_no"
                    id="ds_registration_no" maxlength="25" class="w-full sm:text-sm rounded-md"
                    placeholder="Duare Sarkar Registration No" wire:model="ds_registration_no" autocomplete="off"
                    required />

            </div>
        @endif

    </div>

    <div class="flex flex-col lg:flex-row mt-2 gap-4">

        <div class="w-full md:w-1/2 mt-1 text-gray-700">

            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Beneficiary Name" name="ben_name" id="ben_name" maxlength="300"
                    class="w-full sm:text-sm rounded-md" placeholder="Beneficiary Name" wire:model="ben_name"
                    autocomplete="off" required />
                {{-- @error('ben_fname') <span class="error">{{ $message }}</span> @enderror --}}
            </div>
        </div>
        <div class="w-full md:w-1/2 mt-1 relative rounded-md">
            <x-form.input lable="Aadhaar Number" type="text" id="aadhar_no" name="aadhar_no" class="w-full sm:text-sm rounded-md"
                placeholder="Aadhaar  Number" wire:model="aadhar_no" autocomplete="off" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
        </div>
        <div class="w-full md:w-1/2 mt-1 relative rounded-md">
            <x-form.input type="text" label="Mobile Number" name="mobile_no" id="mobile_no" maxlength="10"
                class="w-full sm:text-sm rounded-md" placeholder="Mobile Number" wire:model="mobile_no" autocomplete="off"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
        </div>
    </div>
    <div class="flex flex-col lg:flex-row mt-4 gap-4">
        <div class="w-full mt-1 relative rounded-md">
            <x-form.select label="Gender" name="gender"
                class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.live="gender" required>
                <option value="">Please Select Gender</option>
                @isset($gender_value)
                    @foreach ($gender_value as $g)
                        <option value="{{ $g->id }}">{{ $g->name }}</option>
                    @endforeach
                @endisset
            </x-form.select>
        </div>

        <div class="w-full mt-5 relative rounded-md">
            {{-- <x-form.label name="dob" label="dob" /> --}}
            <div class="relative" x-data="{ dob: '', age: 0 }">
                <span class="absolute inset-y-0 right-0 flex items-center pr-2 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </span>
                <div class="relative">
                    <x-form.label name='dob' />
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>

                    <input
                        class="border rounded-md shadow-sm
                            border-gray-300 focus:border-indigo-300
                            focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                            p-2 w-full"
                        name="dob" id="calendar-tomorrow" x-on:change="calculateAge" x-model="dob">

                </div>
            </div>

        </div>

        <div class="w-full mt-1 relative rounded-md">
            {{-- <x-form.input type="text" label="Age" name="age" id="age"
                class="w-full sm:text-sm rounded-md" placeholder="Age" wire:model="age" autocomplete="off"
                required /> --}}

            <template>
                <p>Your Age: <span x-text="age"></span> years</p>
            </template>
        </div>


    </div>

    <div class="flex flex-col lg:flex-row mt-2 gap-4">

        <div class="w-full md:w-1/3 mt-1 text-gray-700">


            <x-form.input type="text" label="Father Name" name="father_name" id="father_name" maxlength="300"
                class="w-full sm:text-sm rounded-md" placeholder="Father Name" wire:model="father_name"
                autocomplete="off" required />

        </div>

        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input type="text" label="Mother Name" name="mother_name" id="mother_name" maxlength="300"
                class="w-full sm:text-sm rounded-md" placeholder="Mother Name" wire:model="mother_name"
                autocomplete="off" required />

        </div>

    </div>


    <div class="flex flex-col lg:flex-row mt-2 gap-4">
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.select label="Caste" name="caste"
                class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.live="caste" required>
                <option value="">Please Select Caste</option>
                @isset($caste_value)
                    @foreach ($caste_value as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                @endisset

            </x-form.select>
        </div>
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.select label="Marital Status" name="m_status" wire:model.live="m_status"
                class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" required>
                <option value="">Please Select Marital Status</option>
                @isset($m_status_value)
                    @foreach ($m_status_value as $married_value)
                        <option value="{{ $married_value->id }}">
                            {{ $married_value->name }}
                        </option>
                    @endforeach
                @endisset
            </x-form.select>
        </div>
        <div class="w-full md:w-1/3 mt-1 text-gray-700">

            <x-form.input type="text" label="Monthly Family Income (In Rs)" name="monthly_income"
                id="monthly_income" maxlength="15" class="w-full sm:text-sm rounded-md"
                placeholder="Monthly Family Income (In Rs)" wire:model="monthly_income" autocomplete="off"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required />

        </div>
    </div>
    @if ($caste == 12 || $caste == 13 || $caste == 14)
        <div class="flex flex-col lg:flex-row mt-2 gap-4">
            <div class="w-full md:w-1/3 mt-1 text-gray-700">

                <x-form.input type="text" label="Cast Certificate Number" name="caste_no" id="caste_no"
                    maxlength="50" class="w-full sm:text-sm rounded-md" placeholder="Certificate Number"
                    wire:model="caste_no" autocomplete="off" required />

            </div>
        </div>
    @endif
    @if ($m_status == 18)
        <div class="flex flex-col lg:flex-row mt-8 gap-2">
            <label>Spouse Name (if applicable)</label>
        </div>

        <div class="flex flex-col lg:flex-row mt-2 gap-4">

            <div class="w-full md:w-1/2 mt-1 text-gray-700">

                <div class="mt-1 relative rounded-md">
                    <x-form.input type="text" label="Spouse Name" name="spouse_name" id="spouse_name"
                        maxlength="300" class="w-full sm:text-sm rounded-md" placeholder="Spouse Name"
                        wire:model="spouse_name" autocomplete="off" />
                </div>
            </div>

        </div>
    @endif


    <div class="bg-white shadow-md rounded px-8 mt-5 pt-6 pb-8 mb-4 border border-gray-300">
        <label>Bank Details</label>

       

        <div class="flex flex-col lg:flex-row mt-1 gap-2">

            <div class="w-full md:w-1/3 mt-1 text-gray-700">

                <x-form.input type="text" label="IFS Code" name="bank_ifsc_code" id="bank_ifsc_code"
                    class="w-full sm:text-sm rounded-md" placeholder="IFSC Code" wire:model="bank_ifsc_code"
                    wire:keyup="fetch($event.target.value)" autocomplete="off" required maxlength='11' />

            </div>
            {{-- <div class="mx-4"></div> --}}

           

            <div class="w-full md:w-1/3 mt-1 text-gray-700">
               
                {{-- <x-form.label name='Bank Branch Name' /> --}}
                
                <p class="text-gray-700 mt-10 ml-3" wire:model="bank_branch">
                    <b><span>Bank Branch Name: {{ $bank_branch }}</span></b>
                </p>
                @if($loadingBankData)
                <div role="status" wire:loading>
                    <svg aria-hidden="true" class="inline w-10 h-10 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
                @endif

            </div>
            <div class="w-full md:w-1/3 mt-1 text-gray-700">
               
                {{-- <x-form.label name='Bank Name' /> --}}
               
                <p class="text-gray-700 mt-10 ml-8" wire:model="bank_name">
                    <b><span>Bank Name:  {{ $bank_name }}</span></b>
                </p>
                @if($loadingBankData)
                <div role="status" wire:loading.inline>
                    <svg aria-hidden="true" class="inline w-10 h-10 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
                @endif

            </div>
        </div>


            <div class="flex flex-col lg:flex-row mt-4 gap-2">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">

                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" label="Bank Account Number" name="bank_account_number"
                            id="bank_account_number" class="w-full sm:text-sm rounded-md"
                            placeholder="Bank Account Number" wire:model="bank_account_number" autocomplete="off"
                            required maxlength="300" />
                    </div>
                </div>

                <div class="w-full md:w-1/2 mt-1 text-gray-700">

                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="password" label=" Confirm Bank Account Number"
                            name="confirm_bank_account_number" id="confirm_bank_account_number"
                            class="w-full sm:text-sm rounded-md" placeholder="Confirm Bank Account Number"
                            wire:model="confirm_bank_account_number" autocomplete="off" required maxlength="300" />
                    </div>


                </div>
            </div>

        </div>





        {{-- <div class="flex flex-col lg:flex-row mt-2 gap-4">
        <div class=" w-full mt-1 relative rounded-md">
            <x-form.select name="type_of_disability" label="Type Of Disability" id='type_of_disability'
                class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm"
                wire:model.blur="type_of_disability_key" required>
                <option value="">Please Select Type of Disability</option>

                @isset($type_of_disabilitys)
                    @foreach ($type_of_disabilitys as $type_of_disability_code)
                        <option value="{{ $type_of_disability_code->id }}">
                            {{ $type_of_disability_code->name }}
                        </option>
                    @endforeach
                @endisset
            </x-form.select>
        </div>

        <div class=" w-full mt-1 relative rounded-md">
            <x-form.input type="text" name="p_disablity" id="p_disablity" label="Percentage Of Disability"
                maxlength="8" class="w-full sm:text-sm rounded-md" placeholder="Percentage"
                wire:model.blur="p_disablity_key" autocomplete="off" required />
        </div>
        <div class=" w-full mt-1 relative rounded-md">
            <x-form.input type="text" name="authority_name" id="authority_name" label="Authority Name"
                class="w-full sm:text-sm rounded-md" placeholder="Certifying Authority" maxlength="300"
                wire:model.blur="authority_name_key" autocomplete="off" required />
        </div>
    </div> --}}

        <div class="flex items-end justify-center py-4 mt-8 ">
            <x-button.success type="submit" wire:click="save()">Save & Next</x-button.success>
        </div>
        @push('scripts')
            <script>
                flatpickr('#calendar-tomorrow', {});



                function calculateAge() {
                    if (!this.dob) return;

                    const dob = new Date(this.dob);
                    const diff_ms = Date.now() - dob.getTime();
                    const age_dt = new Date(diff_ms);

                    this.age = Math.abs(age_dt.getUTCFullYear() - 1970);
                }
            </script>
        @endpush


    </div>
