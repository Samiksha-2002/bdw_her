@if(isset($task) && isset($project))
<div>You have a new task {{ $task->name }} for the project {{ $project->name }}</div>
@endif