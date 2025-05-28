@if($jobPostings->count())
    <div class="list-group">
        @foreach($jobPostings as $i => $job)
            <div class="list-group-item py-3 px-3 mb-2" style="background: {{ $i % 2 == 0 ? '#e6f2ff' : 'transparent' }}; border-radius: 10px;">
                <div class="fw-bold fs-6">{{ $job->title ?? $job->ilan_basligi }}</div>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-info">Mesleklerinize uygun iş ilanı bulunamadı.</div>
@endif
