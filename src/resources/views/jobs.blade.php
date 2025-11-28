<x-layout>
	<x-slot:heading>Open jobs</x-slot:heading>
	<ul>
		<x-slot:heading>About</x-slot:heading>
		@foreach ($jobs as $job)
		<li>
			<a class="hover:underline" href="/jobs/{{ $job['id'] }}">
				<b>{{ $job['title'] }}</b>: Pays {{$job['salary']}} per year.
			</a>
		</li>
		@endforeach
	</ul>
</x-layout>