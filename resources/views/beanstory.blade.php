@extends('layout')
@section('title', 'Câu Chuyện')
@section('content')
    <div class="bean-story">
        <div class="bean-story-title"> CÂU CHUYỆN HẠT CÀ PHÊ</div>
        <div class="bean-story-conten">
            <img src="{{ asset('/image/ethiopia.jpg') }}" alt="" class="bean-story-img">
            <div class="bean-story-info">
                <span class="bean-story-name">Hạt Sao Chổi (Ethiopia)</span>
                <span class="bean-story-origin">Nguồn Gốc : Yirgacheffe, Ethiopia</span>
                <span class="bean-story-decription">Mô Tả : Hương hoa nhài, vị chua thanh của quả mọng.</span>
            </div>
        </div>

        <div class="bean-story-conten">
            <img src="{{ asset('/image/colombia.jpg') }}" alt="" class="bean-story-img">
            <div class="bean-story-info">
                <span class="bean-story-name">Hạt Thiên Thạch (Colombia)</span>
                <span class="bean-story-origin">Nguồn Gốc : Huila, Colombia</span>
                <span class="bean-story-decription">Mô Tả : Vị ngọt caramel, sô cô la và một chút hương cam.</span>
            </div>
        </div>
    </div>
@endsection