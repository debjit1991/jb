<div>
    <div class="flex flex-col lg:flex-row mt-8 gap-2">
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.select label="Digital Ration Card Catagory" name="ration_card_cat"
                class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.blur="ration_card_cat"
                required>
                <option value="">Catagory</option>
                @isset($ration_card_value)
                @foreach ($ration_card_value as $ration_card)
                    <option value="{{ $ration_card->id }}">{{ $ration_card->name }}</option>
                @endforeach
            @endisset
            </x-form.select>
            {{-- <x-form.input type="text" name="card_no" class="w-full sm:text-sm rounded-md" placeholder="Card Number"
                wire:model.blur="card_no" autocomplete="off" required maxlength="300" /> --}}

        </div>
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input type="text" name="card_no" class="w-full sm:text-sm rounded-md" placeholder="Card Number"
                wire:model.blur="card_no" autocomplete="off" required maxlength="300" />
        </div>

        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input lable="AHL TIN" type="text" name="ahl_tin" class="w-full sm:text-sm rounded-md"
                placeholder="AHL TIN" wire:model.blur="ahl_tin" autocomplete="off" maxlength="300" />
        </div>

    </div>
    <div class="flex flex-col lg:flex-row mt-8 gap-2">
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input lable="EPIC/Voter Id number" type="text" name="epic_voter_id"
                class="w-full sm:text-sm rounded-md" placeholder="EPIC/Voter Id number" wire:model.blur="epic_voter_id"
                autocomplete="off" maxlength="20" required />
        </div>
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input lable="PAN" type="text" name="pan_no" class="w-full sm:text-sm rounded-md"
                placeholder="PAN" wire:model.blur="pan_no" autocomplete="off" maxlength="10" />
        </div>
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input lable="BPL Seq Number (if avaiable)" type="text" name="bpl_seq_no"
                class="w-full sm:text-sm rounded-md" placeholder="BPL Seq Number" wire:model.blur="bpl_seq_no"
                autocomplete="off" maxlength="12" />
        </div>
    </div>

    <div class="flex flex-col lg:flex-row mt-8 gap-2">
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input lable="BPL Id Number (if avaiable)" type="text" name="bpl_id_no"
                class="w-full sm:text-sm rounded-md" placeholder="BPL Id Number" wire:model.blur="bpl_id_no"
                autocomplete="off" maxlength="12" />
        </div>
        <div class="w-full md:w-1/3 mt-1 text-gray-700">
            <x-form.input lable="BPL Total Score (if avaiable)" type="text" name="bpl_total_score"
                class="w-full sm:text-sm rounded-md" placeholder="BPL Total Score" wire:model.blur="bpl_total_score"
                autocomplete="off" maxlength="6" />
        </div>

    </div>
    {{-- <input type="text" value="{{session('application_id')}}"/> --}}


    <div class="flex items-end py-4 mt-8">
        <x-button.primary type="submit" wire:click="back()" >Previous</x-button.success>
            <x-button.success type="submit" wire:click="save()"  class="ml-auto">Save & Next</x-button.success>
    </div>


</div>

