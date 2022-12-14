<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">
            投稿更新
        </h2>
        <x-validation-errors :errors="$errors" />
        {{-- @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-2" role="alert">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('dinners.update', $dinner) }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="title">
                    タイトル
                </label>
                <input type="text" name="title"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="タイトル" value="{{ old('title', $dinner->title) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="category">
                    カテゴリー
                </label>
                @foreach ($categories as $category)
                    <div>
                        <input type="radio" name="category_id" id="category{{ $category->id }}"
                            value="{{ $category->id }}"
                            {{ old('category_id', $dinner->category_id) == $category->id ? 'checked' : '' }}>
                        <label for="category{{ $category->id }}">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="description">
                    詳細
                </label>
                <textarea name="description" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required>{{ old('description', $dinner->description) }}</textarea>
            </div>
            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="image">
                    食事の画像
                </label>
                <img src="{{ Storage::url($dinner->image_path) }}" alt="" class="mb-4 md:w-2/5 sm:auto">
                <input type="file" name="image" class="border-gray-300">
            </div> --}}
            <input type="submit" value="更新"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
