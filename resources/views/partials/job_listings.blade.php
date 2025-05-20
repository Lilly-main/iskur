@if($jobPostings->count())
    <div class="list-group">
        @foreach($jobPostings as $i => $job)
            <div class="list-group-item py-4 px-3 mb-2" style="background: {{ $i % 2 == 0 ? '#e6f2ff' : 'transparent' }}; border-radius: 10px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fw-bold fs-5">{{ $job->title }}</div>
                        <div class="text-muted">{{ $job->company_name }}</div>
                        <div class="small text-gray-500">{{ $job->created_at->format('d.m.Y H:i') }}</div>
                    </div>
                    <a href="{{ route('job.detail', $job->id) }}" class="btn btn-primary">Detay</a>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-info">Mesleklerinize uygun iş ilanı bulunamadı.</div>
@endif
