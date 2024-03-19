<div>
    <x-form.select name="scheme_id" id="scheme_id" class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm"  required>
        <option value="">Please Select Scheme</option>
        @isset($schemeList)
            @foreach ($schemeList as $scheme)
                <option value="{{ $scheme['id'] }}">{{ $scheme['name'] }}</option>
            @endforeach
        @endisset
    </x-form.select>
</div>
{{-- <script>

    function schemeSelection(data)
    {
        $schemeId=data;
        // return redirect()->route('PensionFormgetdata.PensionForm',$schemeId);
        window.location.href = "{{ route('PensionFormgetdata.PensionForm', '') }}/" + $schemeId;
    }
</script> --}}