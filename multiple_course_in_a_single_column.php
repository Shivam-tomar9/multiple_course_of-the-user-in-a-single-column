 @php
$studentCourses = App\Models\Student::where('user_id',$student->student->user_id)->get();
$courseTitles = $studentCourses->pluck('course.title')->filter()->join(', ');
@endphp
<td>{{ $courseTitles ?: 'N/A' }}</td> 
