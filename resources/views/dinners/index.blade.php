<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    記事一覧画面です！
                </div>
            </div> --}}

    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">
        <x-flash-message :message="session('notice')" />
        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($dinners as $dinner)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('dinners.show', $dinner) }}">
                        <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                            {{ $dinner->title }}</h2>
                        <h3>{{ $dinner->user->name }}</h3>
                        <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            現在時刻: <span class="text-red-400 font-bold">{{ date('Y-m-d H:i:s') }}</span>
                            記事作成日: {{ $dinner->created_at }}
                        </p>
                        {{-- <img class="w-full mb-2" src="{{ Storage::url($dinner->image_path) }}" alt=""> --}}
                        <p class="text-gray-700 text-base">{{ Str::limit($dinner->description, 50) }}</p>
                    </a>
                    {{-- <p class="font-black">お気に入り数：{{ $dinner->favorites->count() }}</p> --}}
                </article>
            @endforeach
        </div>

        {{ $dinners->links() }}
    </div>
</x-app-layout>
