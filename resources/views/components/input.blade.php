@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:ring-orange-600 focus:ring-orange-600 rounded-md shadow-sm block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-slate-300 block w-full p-2.5']) !!}>
