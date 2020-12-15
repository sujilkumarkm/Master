<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Narayam Messenger') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Narayam Messenger</div>

                    <div class="card-body" id="app">
                        <chat-app :user="{{ auth()->user() }}"><components/chat-app>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
