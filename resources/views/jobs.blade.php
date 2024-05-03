<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline"><strong>{{ $job['title'] }}</a>:</strong> Pays {{ $job['salary'] }} per year. 
            </li>
        @endforeach
    </ul>
</x-layout>