<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="font-bold">{{ $job->title }}</h1>

    <p class="mb-4"> This job pays {{ $job->salary }} dolar</p>

    @can('edit', $job)
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    @endcan
</x-layout>
