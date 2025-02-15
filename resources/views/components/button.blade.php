<button type="submit" {{ $attributes->merge(['class' => 'bg-gray-800 rounded-md py-2 px-5 inline-block cursor-pointer text-white']) }}>
    {{ $slot }}
</button>