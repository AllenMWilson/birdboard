<div class="card mt-3">
    <ul class="text-xs list-reset">
        @foreach ($project->activity as $activity)
            <li class="{{ $loop->last ? '' : 'mb-1' }} flex justify-between">
                @include("projects.activity.{$activity->description}")

                <span class="text-gray-400">{{ $activity->created_at->diffForHumans(null, null, true) }}</span>
            </li>
        @endforeach
    </ul>
</div>