<div>

    <div class="flex flex-col lg:flex-row mt-8 gap-2">

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="IFS Code" name="bank_ifsc_code" id="bank_ifsc_code"
                    class="w-full sm:text-sm rounded-md" placeholder="IFS Code" wire:model.blur="bank_ifsc_code"
                    autocomplete="off" required  maxlength='11'/>
            </div>
        </div>
        <div class="mx-4"></div>
        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Bank Name" name="bank_name" id="bank_name"
                    class="w-full sm:text-sm rounded-md" placeholder="Bank Name" wire:model.blur="bank_name"
                    autocomplete="off" required maxlength="300" />
            </div>
        </div>
    </div>


    <div class="flex flex-col lg:flex-row mt-8 gap-2">
        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Bank Branch Name" name="bank_branch" id="bank_branch"
                    class="w-full sm:text-sm rounded-md" placeholder="Bank Branch Name" wire:model.blur="bank_branch"
                    autocomplete="off" required maxlength="300" />
            </div>
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Bank Account Number" name="bank_account_number"
                    id="bank_account_number" class="w-full sm:text-sm rounded-md" placeholder="Bank Account Number"
                    wire:model.blur="bank_account_number" autocomplete="off" required maxlength="300" />
            </div>
        </div>


    </div>




    <div class="flex items-end justify-center py-4 mt-8 ">
        <x-button.success type="submit" wire:click="back()">Previous</x-button.success>
        <x-button.success type="submit" wire:click="save()">Save & Next</x-button.success>
    </div>


</div>
