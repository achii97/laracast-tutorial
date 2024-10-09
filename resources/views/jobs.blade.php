<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-2 mb-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block p-4 rounded-lg border bg-white">
                <div class="text-sm text-blue-500 font-semibold">{{ $job->employer->name }}</div>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}
            </a>
        @endforeach
    </div>

    <div>{{ $jobs->links() }}</div>
</x-layout>
