<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <x-slot name="slot">
        <li>{{ $thread->title }}</li>
        <br>
        <li>{{ $thread->body }}</li>
  </x-slot>
</x-guest-layout>
