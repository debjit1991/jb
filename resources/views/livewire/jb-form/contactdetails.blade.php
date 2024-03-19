<div>

    <div class="flex flex-col lg:flex-row mt-8 gap-2">


        <div class="mt-1 relative rounded-md">
            <x-form.input type="text" label="State" name="state" id="state" value="WEST BENGAL" readonly="true"
                class="w-full sm:text-sm rounded-md" placeholder="WEST BENGAL" wire:model.blur="state" autocomplete="off"
                required />
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class=" w-full mt-1 relative rounded-md">
                <x-form.select label="District" name="district"
                    class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.blur="district"
                    required>
                    <option value="">Please Select District</option>


                </x-form.select>
            </div>
        </div>
        <div class="mx-4"></div>
        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class=" w-full mt-1 relative rounded-md">
                <x-form.select label="Assembly Constituency" name="asmb_cons"
                    class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.blur="asmb_cons"
                    required>
                    <option value="">Please Select </option>


                </x-form.select>
            </div>
        </div>

    </div>


    <div class="flex flex-col lg:flex-row mt-8 gap-2">


        <div class="mt-1 relative rounded-md">
            <x-form.select label="Rural/Urban." name="urban_code"
                class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.blur="urban_code"
                required>
                <option value="">Please Select</option>


            </x-form.select>
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class=" w-full mt-1 relative rounded-md">
                <x-form.select label="Block/Municipality/Corp." name="block"
                    class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.blur="block" required>
                    <option value="">Please Select </option>


                </x-form.select>
            </div>
        </div>
        <div class="mx-4"></div>
        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class=" w-full mt-1 relative rounded-md">
                <x-form.select label="GP/Ward No" name="gp_ward"
                    class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model.blur="gp_ward"
                    required>
                    <option value="">Please Select </option>


                </x-form.select>
            </div>
        </div>

    </div>



    <div class="flex flex-col lg:flex-row mt-8 gap-2">


        <div class="mt-1 relative rounded-md">
            <x-form.input type="text" label="Village/Town/City" name="village" id="village" maxlength="300"
                class="w-full sm:text-sm rounded-md" placeholder="Village/Town/City" wire:model.blur="village"
                autocomplete="off" required />
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="House/Premise Number" name="house" id="house" maxlength="300"
                    class="w-full sm:text-sm rounded-md" placeholder="Village/Town/City" wire:model.blur="house"
                    autocomplete="off" required />
            </div>
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Post Office" name="post_office" id="house" maxlength="300"
                    class="w-full sm:text-sm rounded-md" placeholder="Post Office" wire:model.blur="house"
                    autocomplete="off" required />
            </div>
        </div>


    </div>

    <div class="flex flex-col lg:flex-row mt-8 gap-2">
        <div class="mt-1 relative rounded-md">
            <x-form.input type="text" label="Pin Code" name="pin_code" id="pin_code" maxlength="6"
                class="w-full sm:text-sm rounded-md" placeholder="Pin Code" wire:model.blur="pin_code"
                autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Police Station" name="police_station" id="police_station"
                    maxlength="300" class="w-full sm:text-sm rounded-md" placeholder="Police Station"
                    wire:model.blur="police_station" autocomplete="off" required />
            </div>
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Number of years Dwelling in WB" name="residency_period"
                    id="residency_period" maxlength="3" class="w-full sm:text-sm rounded-md"
                    placeholder="Number of years Dwelling in WB" wire:model.blur="residency_period"
                    autocomplete="off" required />
            </div>
        </div>
    </div>


    <div class="flex flex-col lg:flex-row mt-8 gap-2">
        <div class="mt-1 relative rounded-md">
            <x-form.input type="text" label="Mobile no" name="mobile_no" id="mobile_no" maxlength="10"
                class="w-full sm:text-sm rounded-md" placeholder="Mobile No" wire:model.blur="pin_code"
                autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
        </div>
        <div class="mx-4"></div>

        <div class="w-full md:w-1/2 mt-1 text-gray-700">
            <div class="mt-1 relative rounded-md">
                <x-form.input type="text" label="Email Id" name="police_station" id="email" maxlength="300"
                    class="w-full sm:text-sm rounded-md" placeholder="Email Id" wire:model.blur="email"
                    autocomplete="off" />
            </div>
        </div>

    </div>

    <div class="flex items-end justify-center py-4 mt-8 ">
        <x-button.success type="submit" wire:click="back()">Previous</x-button.success>
        <x-button.success type="submit" wire:click="save()">Save & Next</x-button.success>
    </div>


</div>
