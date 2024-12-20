@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chỉnh sửa vấn đề</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('issues.update', $issue->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="computer_id">Chọn máy tính</label>
            <select name="computer_id" id="computer_id" class="form-control">
                @foreach($computers as $computer)
                    <option value="{{ $computer->id }}" {{ $issue->computer_id == $computer->id ? 'selected' : '' }}>
                        {{ $computer->computer_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="reported_by">Người báo cáo</label>
            <input type="text" name="reported_by" id="reported_by" class="form-control" value="{{ $issue->reported_by }}">
        </div>
        <div class="form-group">
            <label for="reported_date">Thời gian báo cáo</label>
            <input type="datetime-local" name="reported_date" id="reported_date" class="form-control" value="{{ $issue->reported_date }}">
        </div>
        <div class="form-group">
            <label for="description">Mô tả chi tiết</label>
            <textarea name="description" id="description" class="form-control">{{ $issue->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="urgency">Mức độ</label>
            <select name="urgency" id="urgency" class="form-control">
                <option value="Low" {{ $issue->urgency == 'Low' ? 'selected' : '' }}>Thấp</option>
                <option value="Medium" {{ $issue->urgency == 'Medium' ? 'selected' : '' }}>Trung bình</option>
                <option value="High" {{ $issue->urgency == 'High' ? 'selected' : '' }}>Cao</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Trạng thái</label>
            <select name="status" id="status" class="form-control">
                <option value="Open" {{ $issue->status == 'Open' ? 'selected' : '' }}>Mở</option>
                <option value="In Progress" {{ $issue->status == 'In Progress' ? 'selected' : '' }}>Đang xử lý</option>
                <option value="Resolved" {{ $issue->status == 'Resolved' ? 'selected' : '' }}>Đã giải quyết</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
</div>
@endsection
