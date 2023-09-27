@extends('admin.Dashboard.sidebar')
@section('title') Menu Access Section @endsection
@section('content')
@if(request()->route('show') == 'list')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Menu Access of {{$role->name}}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu Access of {{$role->name}}</li>
                </ol>
            </nav>
        </div>
        @php
            $allMenuIds = [];
            if ($menuaccess->get()->count() > 0){
                $menuaccessData = $menuaccess->first();
                $allMenuIds = explode(',',$menuaccessData->menuId);
            }

        @endphp
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('admin/role-wise-menu-access')}}" method="post">
                    @csrf
                    <input type="hidden" name="roleId" value="{{$role->id}}">
                    <div class="row">
                        @foreach ($menu as $menuKey => $menuValue)
                            <div class="col-md-4 form-group" style="<?=($menuValue->name == 'Dashboard')?'cursor:not-allowed;':''?>">
                            @if ($menuValue->name == 'Dashboard')
                            <input type="checkbox" style="cursor:not-allowed;pointer-events:none;" name="menuIdAttr[]" value="{{$menuValue->id}}" id="menuId{{$menuKey}}" <?=(count($allMenuIds) > 0)?(in_array($menuValue->id,$allMenuIds))?'checked':'checked':'checked'?>> <label style="font-size:20px;cursor:not-allowed;pointer-events:none;" for="menuId{{$menuKey}}">{{$menuValue->name}}</label>
                            @else
                            <input type="checkbox"  name="menuIdAttr[]" value="{{$menuValue->id}}" id="menuId{{$menuKey}}" <?=(count($allMenuIds) > 0)?(in_array($menuValue->id,$allMenuIds))?'checked':'':''?>> <label style="font-size:20px;" for="menuId{{$menuKey}}">{{$menuValue->name}}</label>
                            @endif
                            </div>
                        @endforeach
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
@endsection
@section('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    new DataTable('#example');
    function deleteConfirm(id){
        if(confirm('Do you want to delete?')){
            window.location.href="{{url('/admin/roleDelete')}}/"+id;
        }
    }

    tinymce.init({
        selector: 'textarea#description',
        height: 500,
        valid_elements : '*[*]',
        init_instance_callback : function(editor) {
            var freeTiny = document.querySelector('.tox .tox-notification--in');
            freeTiny.style.display = 'none';
        },
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>
@endsection
