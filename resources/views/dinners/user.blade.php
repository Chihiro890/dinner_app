<x-app-layout>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="updateProfileInformation">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <!-- Profile Photo -->
                    <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->



                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="http://localhost/storage/profile-photos/GBNe7zyhvTCIbOIZzJQVnYihXEoLZtcU0HRFAqFQ.jpg" alt="Maria" class="rounded-full h-20 w-20 object-cover">
                </div>
                            </div>
        
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name">
    Name
</label>
<label for="">{{ $user->name }}</label>
            {{-- <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" wire:model.defer="state.name" autocomplete="name">
                    </div> --}}

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            
        

                    </div>

        <!-- Profile -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="profile">
    Profile
</label>
            {{-- <textarea name="profile" id="profile" cols="30" rows="5" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" wire:model.defer="state.profile"></textarea>
                    </div>
                </div> --}}
<label for="">{!! nl2br(e($user->profile)) !!}</label>
            </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('otRrBra9hcFZ5y2Iy8Vc').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 mr-3">
    更新完了
</div>
                </div>
                    </form>
    </div>
</div>
</x-app-layout>
