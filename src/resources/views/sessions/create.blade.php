<x-layout>
    <section class="px-5 py-8">
        <div class="max-w-lg mx-auto bg-gray-100 p-10 border-gray-200 border rounded-xl">
            <h1 class="text-center text-xl mb-10 font-bold">Log in!</h1>
            <form method="POST" action="/login">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded" type="email" name="email" id="email"
                           required value="{{ old('email') }}">
                    @error('email')
                    <p class="text-red-500 text-xs-mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded" type="password" name="password"
                           id="password" value="{{ old('password') }}"
                           required>
                    @error('password')
                    <p class="text-red-500 text-xs-mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="{{$errors->any()?"mb-6":""}}">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Log in
                    </button>
                </div>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </section>
</x-layout>
