<x-layout>
    <div class="w-3/6 mx-auto mt-14 bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800">Sign in</h1>
            </div>
            <div class="">
                demo account
                <span>
                    <p>yousseferremili.div@gmail.com</p>
                </span>
                <span>
                    <p>admin</p>
                </span>
            </div>
            <div class="mt-5">
                <form action="/auth-sign-in" method="post">
                    @csrf
                    @method('POST')
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm mb-2">Email address</label>
                            <div class="relative">
                                <input type="email" name="email" class="outline-none py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            @error('email')
                                <p class=" text-xs text-red-600 mt-2">Please include a valid email address so we can get back to you</p>
                            @enderror
                        </div>
                        <div>
                            <div class="flex justify-between items-center">
                                <label for="password" class="block text-sm mb-2">Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" name="password" class="outline-none py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            @error('password')
                                <p class=" text-xs text-red-600 mt-2">password is required</p>
                            @enderror
                        </div>
                        <!-- End Form Group -->
                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                            Sign in
                        </button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</x-layout>
