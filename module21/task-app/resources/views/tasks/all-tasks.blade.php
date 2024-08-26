<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('All Tasks') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('All Task of') }}  {{Auth::user()->name}}
        </p>
    </header>
    <div class="mt-6">
        <ul class="space-y-4">
            @forelse ($tasks as $task)

            <li class="flex items center justify-between">
                <div>
                    <h3 class="text-lg font-medium">
                        {{ $task->name }}
                    </h3>
                    <p class="mt-1 text-sm">
                        {{ $task->status }}
                    </p>
                </div>
                <div>
                    <form method="POST" action="{{ route('task.destroy', $task) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-60 hover:text-red-950">

                            {{ __('DELETE') }}
                        </button>

                    </form>
                </div>
            </li>
            @empty
            <li>
                {{ __('No Task Found!') }}
            </li>
            
            @endforelse
        </ul>
        
    </div>
</section>