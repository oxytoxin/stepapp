<x-mail::message>
    # New Proposal Submission

    Startup Name: {{ $proposal->startup_name }}

    Members:
    @foreach ($proposal->members as $member)
        {{ $member }}
    @endforeach

</x-mail::message>
