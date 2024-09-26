<button {{ $attributes->merge(['class' => 'rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-gray-300 shadow-sm hover:bg-gray-700 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 font-suse', 'type' => 'submit']) }}>
    {{ $slot }}
</button>