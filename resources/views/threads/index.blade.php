<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <x-slot name="slot">
    @foreach ($threads as $thread)
        <li>
            <a href="{{ $thread->path() }}">
                {{ $thread->title }}
            </a>
        </li>
    @endforeach
  </x-slot>
</x-guest-layout>
