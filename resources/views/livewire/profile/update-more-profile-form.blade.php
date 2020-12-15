<x-jet-form-section submit="UpdateMoreProfile">

    <x-slot name="title">
        {{ __('Enter personal information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure to provide correct information to stay connected') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4" >
            <x-jet-label for="sex" value="{{ __('Sex') }}" />
            <select class="form-select rounded-md shadow-sm" name="sex" id="sex" type="text" wire:model.defer="state.current_sex" autocomplete="current-sex" />
                <option  value="" ">Select an option</option>
                <option value="Male" >Male</option>
                <option value="Female">Female</option>
              </select>
            <x-jet-input-error for="sex" class="mt-2" />

        </div>
        <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" />
                <x-jet-input-error for="phone" class="mt-2" />
         </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone1" value="{{ __('Secondary Phone') }}" />
            <x-jet-input id="phone1" type="text" class="mt-1 block w-full" wire:model.defer="state.phone1" />
            <x-jet-input-error for="phone1" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4" >
            <x-jet-label for="star" value="{{ __('Star') }}" />
            <select class="form-select rounded-md shadow-sm" name="star" id="star" type="text" wire:model.defer="state.current_star" autocomplete="current-star" />
                <option  value="" ">Select an option</option>

                    <option value="ASWATHY">Aswini(ASWATHY)</option>
                    <option value="BHARANI">BHARANI</option>
                    <option value="KARTHIKA">Krittika(KARTHIKA)</option>
                    <option value="ROHINI">ROHINI</option>
                    <option value="MAKAYIRAM">Mrigashira(MAKAYIRAM)</option>
                    <option value="THIRUVATHIRA">Ardra(THIRUVATHIRA)</option>
                    <option value="PUNARTHAM">Punarvasu(PUNARTHAM)</option>
                    <option value="POOYAM">Pushya(POOYAM)</option>
                    <option value="AYILYAM">Ashlesha(AYILYAM)</option>
                    <option value="MAKAM">Makha(MAKAM)</option>
                    <option value="POORAM">Purva Phalguni(POORAM)</option>
                    <option value="UTRAM">Uttara Phalguni(UTRAM)</option>
                    <option value="ATHAM">Hasta(ATHAM)</option>
                    <option value="CHITHIRA">Chitra(CHITHIRA)</option>
                    <option value="CHOTHY">Swati(CHOTHY)</option>
                    <option value="VISHAKAM">VISHAKAM</option>
                    <option value="ANIZHAM">Anuradha(ANIZHAM)</option>
                    <option value="TRIKETTA">Jyeshta(TRIKETTA)</option>
                    <option value="MOOLAM">Moola(MOOLAM)</option>
                    <option value="POORADAM">Purva Ashada(POORADAM)</option>
                    <option value="UTHARADAM">Uttara Ashada(UTHARADAM)</option>
                    <option value="THIRUVONAM">Shravana(THIRUVONAM)</option>
                    <option value="AVITTAM">Dhanista(AVITTAM)</option>
                    <option value="CHATHAYAM">Sathabhisha(CHATHAYAM)</option>
                    <option value="PURURUTTATHY">Purva Bhadrapada(PURURUTTATHY)</option>
                    <option value="UTHRITTATHY">Uttara Bhadrapada(UTHRITTATHY)</option>
                    <option value="UTHRITTATHY">Uttara Bhadrapada(UTHRITTATHY)</option>
                    <option value="REVATI">Revati(REVATI)</option>
                    <option value="Doesn't Know">Doesn't Know</option>
              </select>
            <x-jet-input-error for="star" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4" >
            <x-jet-label for="jatahakam" value="{{ __('Jathakam') }}" />
            <select class="form-select rounded-md shadow-sm" name="sex" id="sex" type="text" wire:model.defer="state.current_sex" autocomplete="current-sex" />
                <option  value="" ">Select an option</option>
                    <option value="Sudham">Sudham</option>
                    <option value="Papam">Papam</option>
                <option value="Un Available">Not disclosed</option>

              </select>
            <x-jet-input-error for="jathakam" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="dob" value="{{ __('Date of birth') }}" />
            <x-jet-input id="dob" type="dob" class="mt-1 block w-full" wire:model.defer="state.dob" autocomplete="dob" />
            <x-jet-input-error for="dob" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tob" value="{{ __('Time of birth') }}" />
            <x-jet-input id="tob" type="time" class="mt-1 block w-full" wire:model.defer="state.tob" autocomplete="tob" />
            <x-jet-input-error for="tob" class="mt-2" />
        </div>

    </x-slot>
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>


